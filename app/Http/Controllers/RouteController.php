<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use App\Helpers\Helpers;;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;


class RouteController extends Controller
{
    private $main_url;
    private $route_url;
    private $client_id;
    private $client_secret;

    public function __construct()
    {
        $this->main_url = env('VXR_ACOUNT_SERVICE_URL_TEST');
        $this->route_url = env('VXR_ROUTE_URL_TEST');
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

        $res_cidi = Http::withToken($token)->get($this->main_url . '/v3/area/city_district');

        if ($res_cidi->successful()) {
            $responseData = $res_cidi->json();
            $list_areas = isset($responseData['data']) && is_array($responseData['data']) ? $responseData['data'] : [];
        } else {
            $list_areas = [];
        }

        // route list
        $get_config = Http::withToken($token)->get($this->route_url . '/v2/agent/train/get_config');
        if ($get_config->successful()) {
            $responseData = $get_config->json();
            $trainStations = isset($responseData['data']['train_stations_list']) && is_array($responseData['data']['train_stations_list'])
                ? $responseData['data']['train_stations_list']
                : [];
        } else {
            $trainStations = [];
        }

        return view('index', [
            "list_areas" => $list_areas,
            "trainStations" => $trainStations,
        ]);
    }

    public function routeSearch($fromtoPlace, Request $request)
    {
        $cacheKey = 'list_routes';
        $busTo = $request->query('bus_to') ? (int)($request->query('bus_to')) : "";
        $busFrom = $request->query('bus_from') ? (int)$request->query('bus_from') : "";
        $dateTo = $request->query('date_to') ? Helpers::formatDate($request->query('date_to')) : "";
        $dateFrom = $request->query('date_from') ? Helpers::formatDate($request->query('date_from')) : "";
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);

        if ($busTo === null || $busFrom === null || $dateTo === null) {
            return response()->json(['error' => 'Missing required parameters.'], 400);
        }
        $urlRoute = $this->route_url . '/v2/route?filter[from]=' . $busFrom . '&filter[to]=' . $busTo . '&filter[date]=' . $dateTo;

        // Apply filters
        $queryParams = $this->getRouteFilters($request);

        // Thêm các tham số vào URL nếu chúng tồn tại
        foreach ($queryParams as $key => $value) {
            if ($value !== null) {
                $urlRoute .= '&' . $key . '=' . $value;
            }
        }

        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }

        $main_url = $this->main_url . '/v3/area/city_district';
        $list_areas = collect(Helpers::cacheData('city_district', $token, $main_url, 60 * 20));
        // Lấy thông tin điểm đón và điểm xả
        $params = (object)([
            'busFrom' => (object)$list_areas->where('id', (int)$busFrom)->first(),
            'busTo' => (object)$list_areas->where('id', (int)$busTo)->first(),
            'dateTo' => $dateTo,
        ]);
        // Thông tim tuyến đường
        $cacheKeyRoute = 'route_' . $busFrom . '_' . $busTo . '_' . $dateTo;
        // $list_routes = Helpers::cacheData($cacheKeyRoute, $token, $urlRoute, 60 * 20);
        $list_routes = Helpers::cacheData($cacheKeyRoute, $token, $urlRoute, $queryParams, 60 * 20);
        // Thông tin ảnh nhà xe
        $list_routes = $this->addBusImagesToRoutes($token, $list_routes);
        return view("bus.bus_search", compact('list_routes', 'list_areas', 'params'));
    }

    public function trainRouteSearch($fromtoPlace, Request $request)
    {
        $trainTo = $request->query('train_to', '');
        $trainFrom = $request->query('train_from', '');
        $dateTo = $request->query('date_to') ? Helpers::formatDate($request->query('date_to')) : '';
        $dateFrom = $request->query('date_from') ? Helpers::formatDate($request->query('date_from')) : '';
        $quantity = 2;
        $page = 1;
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
        return view("train.train_search", compact('list_routes', 'list_areas', 'params'));
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
    private function addBusImagesToRoutes($token, $list_routes)
    {
        foreach ($list_routes as &$route) {
            $cacheKeyImages = 'company_images_' . $route['company']['id'];
            $route['company']['images'] = Cache::remember($cacheKeyImages, 60 * 60, function () use ($token, $route) {
                $res = Http::withToken($token)->get($this->main_url . '/v3/company/' . $route['company']['id'] . '/image');
                return isset($res['data']) && is_array($res['data']) ? $res['data'] : [];
            });
        }

        return $list_routes;
    }
}
