<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\helpers;
use App\Models\Booking;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

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
        ]);
    }

    public function store(Request $request) {

        $data_booking = $request->all();
        try {
            $booking = Booking::create([
                'order_code'        => 'HD' .substr(time(), -4) .substr(str_shuffle('0123456789'), 0, 4),
                'trip_code'         => $request->trip_code,
                'customer_name'     => $request->customer_name,
                'customer_phone'    => $request->customer_phone,
                'customer_email'    => $request->customer_email,
                'seats'             => $request->seats,
                'price'             => $request->price,
                'pickup_id'         => $request->pickup_id,
                'drop_off_info'     => $request->drop_off_info,
                'drop_off_point_id' => $request->drop_off_point_id,
                'status'            => config('apps.common.status_booking.pending'),
            ]);

            $booking->save();
            $order_code = $booking->order_code;
            $order_price = $booking->price;
            return view('payment.payment', compact('order_price', 'order_code', 'data_booking'));
        } catch (\Throwable $e) {
            Log::error($e->getMessage());
            return redirect()->back();
        }    
    }
}
