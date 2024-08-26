<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\helpers;
use Illuminate\Support\Facades\Cache;

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
        $seatMap = Helpers::cacheData("seat-map-bus-" . $tripCode, $token, $urlSeatMap, 60 * 20);
        // dd($seatMap);
        return view('bookingconfirmation', [
            $seatInfo,
            $seatMap
        ]);
    }
}
