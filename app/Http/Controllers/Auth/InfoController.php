<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;


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
        try {
            if(auth()->check()){
                $results = []; 

                $user = User::find(Auth::id());
                foreach ($user->bookings as $booking) {
                    // Post api 
                    $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
                    $uniqueToken = Str::uuid();
                    $client = new Client();
                    $response = $client->get( $this->main_url.'/v3/booking?code='. $booking->booking_code, [
                        'headers' => [
                            'Postman-Token' => (string) $uniqueToken,
                            'cache-control' => 'no-cache',
                            'Authorization' => 'Bearer ' .  $token,
                        ]
                    ]);
                    $responseBody = json_decode($response->getBody(), true);
                    array_push($results, $responseBody['data'][0]); // push data to array result
                }
                return view('account.ticket', ['arrayData' => $results]);
            } else {
                return redirect()->route('/')->withErrors(['error' => 'Vui lòng đăng nhập tài khoản']);
            }
        } catch (\Throwable $th) {
            return $th;
        };
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
