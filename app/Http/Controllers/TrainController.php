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

    public function search($fromtoPlace, Request $request)
    {
        $trainTo = $request->query('train_to', '');
        $trainFrom = $request->query('train_from', '');
        $dateTo = $request->query('date_to') ? formatDate($request->query('date_to')) : '';
        $dateFrom = $request->query('date_from') ? formatDate($request->query('date_from')) : '';
        $quantity = $request->query('total_passengers');
        $page = $quantity;
        $pagesize = 10;
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);

        if (empty($trainTo) || empty($trainFrom) || empty($dateTo)) {
            return response()->json(['error' => 'Missing required parameters.'], 400);
        }

        if (!$token) {
            return response()->json(['error' => 'Failed to retrieve token.'], 500);
        }

        $urlRoute = $this->route_url . '/v2/agent/train/route?from=' . $trainFrom . '&to=' . $trainTo . '&time=' . $dateTo . '&quantity=' . $quantity . '&page=' . $page . '&pagesize=' . $pagesize;
        // Apply filters
        $queryParams = $this->getRouteFilters($request);

        foreach ($queryParams as $key => $value) {
            if ($value !== null) {
                $urlRoute .= '&' . $key . '=' . $value;
            }
        }

        $main_url = $this->route_url . '/v2/agent/train/get_config';

        $list_areas = collect(Helpers::cacheData('city_district', $token, $main_url, 60 * 20));
        $train_stations_list = collect($list_areas->get('train_stations_list'));
        // Lấy thông tin điểm đón và điểm xả
        $params = (object)([
            'trainFrom' => (object)$train_stations_list->where('station_code', $trainFrom)->first(),
            'trainTo' => (object)$train_stations_list->where('station_code', $trainTo)->first(),
            'dateTo' => $dateTo,
        ]);

        $cacheKeyRoute = 'route_' . $trainFrom . '_' . $trainTo . '_' . $dateTo;

        $list_routes = Helpers::cacheData('train_route_' . $trainFrom . '_' . $trainTo . '_' . $dateTo, $token, $urlRoute, $queryParams, 60 * 20);
        dd($list_routes);
        // return view("train.list", compact('list_routes', 'list_areas', 'params'));
    }

    private function getRouteFilters(Request $request)
    {
        return [
            'filter[online_ticket]' => $request->query('online_ticket', 1),
            'filter[online_reserved]' => $request->query('online_reserved'),
            'filter[is_promotion]' => $request->query('is_promotion'),
            'filter[companies][index]' => $request->query('companies_index'),
            'filter[fare][min]' => $request->query('fare_min'),
            'filter[fare][max]' => $request->query('fare_max'),
            'filter[available_seat][min]' => $request->query('available_seat_min'),
            'filter[available_seat][max]' => $request->query('available_seat_max'),
            'filter[rating][min]' => $request->query('rating_min'),
            'filter[rating][max]' => $request->query('rating_max'),
            'filter[time][min]' => $request->query('time_min'),
            'filter[time][max]' => $request->query('time_max'),
            'filter[limousine]' => $request->query('limousine'),
            'filter[seat_type][index]' => $request->query('seat_type_index'),
            'filter[covid_utility]' => $request->query('covid_utility'),
            'filter[enabled_gps]' => $request->query('enabled_gps'),
            'filter[full_trip]' => $request->query('full_trip'),
            'filter[pickup_points][index][district]' => $request->query('pickup_points_index_district'),
            'filter[pickup_points][0][name]' => $request->query('pickup_points_0_name'),
            'filter[dropoff_points][index][district]' => $request->query('dropoff_points_index_district'),
            'filter[dropoff_points][0][name]' => $request->query('dropoff_points_0_name'),
            'page' => $request->query('page', 1),
            'pagesize' => $request->query('pagesize', 10),
        ];
    }
}
