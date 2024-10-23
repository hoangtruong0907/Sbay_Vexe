<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\TryCatch;

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
        if(auth()->check()){
            try {
                $bookings = Booking::where('user_id', auth()->user()->id)->get(); 
                $results = []; 
                foreach ($bookings as $booking) {
                    $results[] = [
                        'name' => $booking['customer_name'],
                        'status' => $booking['status'],
                        'id' => $booking['id'],
                        'pickup_time' => $booking['created_at'],
                        'seat' => $booking['seats'],
                        'final_price' => $booking['price'],
                        'code' => $booking['code'],
                        'customer_id' => $booking['user_id'],
                    ];
                }
                return view('account.ticket', ['arrayData' => $results]);
            } catch (\Throwable $th) {
                return $th;
            }
        } else {
            return redirect()->route('/')->withErrors(['error' => 'Vui lòng đăng nhập tài khoản']);
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
