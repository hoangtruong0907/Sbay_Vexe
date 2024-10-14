<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\helpers;
use App\Models\Booking;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class BookingController extends Controller
{
    private $main_url;
    private $route_url;
    private $client_id;
    private $client_secret;
    private $use_profile_url;

    public function __construct()
    {
        $this->main_url = env('VXR_ACOUNT_SERVICE_URL_TEST');
        $this->route_url = env('VXR_ROUTE_URL_TEST');
        $this->use_profile_url = env('VXR_USER_PROFILE_URL_TEST');
        $this->client_id = env('VEXERE_CLIENT_ID');
        $this->client_secret = env('VEXERE_CLIENT_SECRET');
    }
    public function index(Request $request)
    {
        $seatInfo = $request->all();
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
        $tripCode = $seatInfo['trip_code'];
        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }

        $urlSeatMap = $this->main_url . "/v3/trip/seat_map?trip_code=" . $tripCode;
        $seatMap = Helpers::cacheData("seat-map-bus-" . $tripCode, $token, $urlSeatMap, 60 * 10);
        $pickup_points = $seatMap['pickup_points'];
        $transfer_points = $seatMap['transfer_points_at_arrive'];
        $drop_points = $seatMap['drop_off_points_at_arrive'];

        $selectedPickupPoint = [];
        $selectedDropPoint = [];

        foreach ($pickup_points as $point) {
            if (isset($point['point_id']) && $point['point_id'] == $seatInfo['pickup_id']) {
                $selectedPickupPoint = $point;
            }
        }

        foreach ($drop_points as $point) {
            if (isset($point['point_id']) && $point['point_id'] == $seatInfo['drop_off_point_id']) {
                $selectedDropPoint = $point;
            }
        }
        // dd($selectedDropPoint, $selectedPickupPoint);
        $seatData = json_decode($request->input('seatData'), true);

        $data = [
            "seatInfo" => $seatInfo,
            "seatTicket" => $seatData,
            "seatMap" => $seatMap,
            'pickup_points' => $pickup_points,
            'transfer_points' => $transfer_points,
            'drop_points' => $drop_points,
            'selectedPickupPoint' => $selectedPickupPoint,
            'selectedDropPoint' => $selectedDropPoint,
            'seatTemplateMap' => $seatMap['coach_seat_template'] ?? [],
        ];
        return view('payment.bookingconfirmation', [
            "seatInfo" => $seatInfo,
            "seatTicket" => $seatData,
            "seatMap" => $seatMap,
            'pickup_points' => $pickup_points,
            'transfer_points' => $transfer_points,
            'drop_points' => $drop_points,
            'selectedPickupPoint' => $selectedPickupPoint,
            'selectedDropPoint' => $selectedDropPoint,
            'seatTemplateMap' => $seatMap['coach_seat_template'] ?? [],
            'data' => json_encode($data),
        ]);
    }

    public function store(Request $request) {

        $data_booking = $request->all();
        try {
            // Post api 
            $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
            $uniqueToken = Str::uuid();
            $client = new Client();
            $response = $client->post( $this->main_url.'/v3/booking/reserve', [
                'headers' => [
                    'Postman-Token' => (string) $uniqueToken,
                    'cache-control' => 'no-cache',
                    'Authorization' => 'Bearer ' .  $token,
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'trip_code' => $request->trip_code,
                    'seats' => $request->seats,
                    'customer_phone' => $request->customer_phone,
                    'customer_name' => $request->customer_name,
                    'customer_email' => $request->customer_email,
                    'pickup_id' =>  $request->pickup_id,
                    'drop_off_info' => $request->drop_off_info,
                    'drop_off_point_id' => $request->drop_off_point_id,
                ],
            ]);
            $responseBody = json_decode($response->getBody(), true);

            $booking = Booking::create([
                'order_code'        => 'HD' .substr(time(), -4) .substr(str_shuffle('0123456789'), 0, 4),
                'trip_code'         => $request->trip_code,
                'customer_name'     => $request->customer_name,
                'customer_phone'    => $request->customer_phone,
                'customer_email'    => $request->customer_email,
                'seats'             => $request->seats,
                'code'              => $responseBody['data']['code'],
                'booking_code'      => $responseBody['data']['booking_code'],
                'tickets'           => implode(',', $responseBody['data']['tickets']),
                'price'             => $request->price,
                'pickup_id'         => $request->pickup_id,
                'drop_off_info'     => $request->drop_off_info,
                'drop_off_point_id' => $request->drop_off_point_id,
                'status'            => config('apps.common.status_booking.reserve'),
            ]);

            $booking->save();
            $order_code = $booking->order_code;
            $order_price = $booking->price;
            
            // Save variables in the session
            session([
                'order_code' => $order_code,
                'order_price' => $order_price,
                'info_booking' => $data_booking,
                // 'data_booking' => $data_booking['data'],
            ]);
            return redirect()->route('payment');
            
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $statusCode = $e->getResponse()->getStatusCode();
                $errorMessage = $e->getResponse()->getBody()->getContents();
                
                return response()->json([
                    'error' => 'Client error',
                    'status_code' => $statusCode,
                    'message' => $errorMessage
                ], $statusCode);
            } else {
                return response()->json(['error' => 'Request failed'], 500);
            }
        }
    }

    public function updateBookingStatus(Request $request) {
        Booking::where('order_code', $request->order_code)->update(['status' => $request->status]);
        if ($request->status == config('apps.common.status_booking.pending')) {
            return response()->json([
                'success' => 200,
                'url' => '/payment-result'
            ]);
        } else {
            return response()->json([
                'success' => 200,
                'url' => '/payment-cancel'
            ]);
        }
    }
}
