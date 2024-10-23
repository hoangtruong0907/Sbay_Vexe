<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
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
    public function index()
    {
        return view('account.info');
    }
    public function membership()
    {
        return view('account.membership');
    }
    public function getBookingInfo()
    {
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
        
        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }
        
        $bookings = ['EB041S', 'M5416D'];
        $url = $this->main_url . "/v3/booking";
        $results = [];
        
        try {
            foreach ($bookings as $booking) {
                $response = Http::withToken($token)->get($url, [
                    'code' => $booking,
                ]);
        
                if ($response->successful()) {
                    $bookingData = $response->json();
                    
                
                    $firstBookingData = $bookingData['data'][0] ; 
                    if ($firstBookingData) {
                        $detailInfo = $firstBookingData['ticket']['detail_info'] ; 
                        if ($detailInfo) {
                            foreach ($detailInfo as $info) {
                                $results[] = [
                                    'name' => $info['name'] ,
                                    'status' => $info['status'] ,
                                    'id' => $info['id'],
                                    'pickup_time' => $info['pickup_time'],
                                    'seat' => $info['seat'],
                                    'final_price' => $firstBookingData['final_price'] ,
                                    'code' => $firstBookingData['code'],
                                    'customer_id' => $firstBookingData['customer_id'],
                                    'description'=>$firstBookingData['description'],
                                ];
                            }
                        } else {
                        
                            return response()->json([
                                'error' => 'No detail info found for booking ' . $booking,
                            ], 404);
                        }
                    } else {
                        
                        return response()->json([
                            'error' => 'No booking data found for ' . $booking,
                        ], 404);
                    }
                } else {
                    return response()->json([
                        'error' => 'Failed to retrieve booking data for ' . $booking,
                    ], $response->status());
                }
            }
        
            return view('account.ticket', ['arrayData' => $results]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }


    
    public function reward()
    {
        return view('account.reward');
    }
    public function card()
    {
        return view('account.card');
    }
    public function review()
    {
        return view('account.review');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
