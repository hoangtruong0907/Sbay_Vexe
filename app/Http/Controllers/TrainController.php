<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 
use App\Helpers\helpers; 
use Illuminate\Support\Facades\Cache; 


class TrainController extends Controller
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
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);

        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }   
        $get_config = Http::withToken($token)
                    ->timeout(60) // Tăng thời gian chờ lên 60 giây
                    ->get($this->route_url . '/v2/agent/train/get_config');

        if ($get_config->successful()) {
            $responseData = $get_config->json(); 
            $trainStations = isset($responseData['data']['train_stations_list']) && is_array($responseData['data']['train_stations_list'])
                ? $responseData['data']['train_stations_list']
                : [];  
        } else {
            $trainStations = [];  
        } 
        return view('train.index', [ 
            "trainStations" => $trainStations,  
        ]);
    } 
}
