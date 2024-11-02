<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;


use App\Helpers\helpers;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class AdminBookingController extends Controller
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
    //
    public function index()
    {
        $title = 'Danh sách người dùng Booking';
        $users = DB::table('booking')->get();
        // dd($users);
        return view('admin.booking.index', compact('users', 'title'));
    }
    public function showDataTable()
    {
        $bookings = Booking::get();
        return response()->json(['data' => $bookings]);
    }
    
    public function show($id)
    {
    $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
    $client = new Client();
    try {
        $response = $client->get($this->main_url . '/v3/booking?code=' . $id, [
            'headers' => [
                'Postman-Token' => (string) $token,
                'cache-control' => 'no-cache',
                'Authorization' => 'Bearer ' . $token,
            ]
        ]);
        $responseBody = json_decode($response->getBody(), true);
        dd($responseBody['data']);
        if (!empty($responseBody['data'])) {
            $booking = $responseBody['data'][0];
            $bookingData = [
                'booking_id' => $booking['booking_id'],
                'status' => $booking['status'],
                'description' => $booking['description'],
                'final_price' => $booking['final_price'] ?? 0,
                'from' => $booking['from'],
                'to' => $booking['to'],
                'trip_name' => $booking['trip_name'],
                'trip_date' => $booking['trip_date'],
                'pickup_time' => $booking['pickup_time'],
                'drop_off_time' => $booking['drop_off_time'] ?? null,
                'created_user' => $booking['created_user'], 
                'created_date' => $booking['created_date'],
                'customer' => [
                    'customer_id' => $booking['customer_id'],
                    'name' => $booking['customer']['name'],
                    'phone' => $booking['customer']['phone'],
                    'email' => $booking['customer']['email'],
                ],
                'seat_codes' => $booking['seat_codes'] ?? [],
                'company' => $booking['company'],
                'comp_id' => $booking['comp_id'],
                'agent_id' => $booking['agent_id'],
                'is_confirmed' => $booking['is_confirmed'] ?? false,
                'is_bms_confirmed' => $booking['is_bms_confirmed'] ?? false,
                'cancelled_date' => $booking['cancelled_date'],
                'arrival_date' => $booking['arrival_date'],
                'bo_phone_info' => $booking['bo_phone_info'] ?? null,
            ];
            
            if (isset($booking['ticket']) && !empty($booking['ticket']['detail_info'])) {
                $tickets = [];
                foreach ($booking['ticket']['detail_info'] as $ticketDetail) {
                    $tickets[] = [
                        'code' => $ticketDetail['id'],
                        'status' => $ticketDetail['status'],
                        'fare' => $ticketDetail['fare'], // Thêm giá vé nếu cần
                        'customer_name' => $ticketDetail['customer_name'], // Thêm tên khách hàng nếu cần
                        'customer_phone' => $ticketDetail['customer_phone'], // Thêm số điện thoại nếu cần
                        'pickup_time' => $ticketDetail['pickup_time'], // Thêm thời gian đón nếu cần
                        'drop_off_time' => $ticketDetail['drop_off_time'],  
                        'seat'=>$ticketDetail['seat'], // Thêm thời gian trả nếu cần
            ];
            }
                $bookingData['ticket'] = $tickets;
            } else {
                $bookingData['ticket'] = [];
            }
            
            return view('admin.booking.booking_detail', ['arrayData' => $bookingData]);
        } else {
            return response()->json(['message' => 'Booking not found.'], 404);
        }
       
    } catch (Exception $e) {
        // Xử lý lỗi
        return response()->json(['message' => 'Error occurred: ' . $e->getMessage()], 500);
    }
    }
    
        public function edit($id)
        {

            $user = DB::table('booking')->where('id', $id)->first();


            if ($user) {
                return response()->json(['success' => true, 'user' => $user]);
            } else {
                return response()->json(['success' => false, 'error' => 'Không tìm thấy người dùng.'], 404);
            }
        }

        public function update(Request $request, $id)
        {
            // Xác thực dữ liệu đầu vào
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'seats' => 'required|string',
                'code' => 'nullable|string',
                'booking_code' => 'nullable|string',
                'ticket' => 'required|string',
                'price' => 'required|string',
                'pickup_id' => 'nullable|string',
                'droff_off_info' => 'nullable|string',
                'droff_off_point_id' => 'nullable|string',
                'status' => 'required|string',
            ]);

            // Lấy thông tin booking theo ID
            $booking = DB::table('booking')->where('id', $id)->first();

            // Nếu không tìm thấy booking
            if (!$booking) {
                return response()->json([
                    'success' => false,
                    'error' => 'Không tìm thấy thông tin đặt chỗ.'
                ], 404);
            }

            // Cập nhật thông tin booking
            DB::table('booking')->where('id', $id)->update([
                'customer_name' => $request->name,
                'customer_email' => $request->email,
                'customer_phone' => $request->phone,
                'seats' => $request->seats,
                'code' => $request->code,
                'booking_code' => $request->booking_code,
                'tickets' => $request->ticket,
                'price' => $request->price,
                'pickup_id' => $request->pickup_id,
                'drop_off_info' => $request->droff_off_info,
                'drop_off_point_id' => $request->droff_off_point_id,
                'status' => $request->status,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Cập nhật thông tin đặt chỗ thành công.'
            ]);
        }

}
