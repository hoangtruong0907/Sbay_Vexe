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

        return view('index', ["list_areas" => $list_areas]);
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

        $queryParams = [
            'filter[online_ticket]' => $request->query('online_ticket', 1), // Lọc theo các chuyến đi trực tuyến (0 hoặc 1)
            'filter[online_reserved]' => $request->query('online_reserved') ?? null, // Lọc theo vị trí ghế đã chọn trước (0 hoặc 1)
            'filter[is_promotion]' => $request->query('is_promotion') ?? null, // Tham khảo chuyến đi giảm giá (0 hoặc 1)
            'filter[companies][index]' => $request->query('companies_index') ?? null, // Lọc theo ID công ty xe bus
            'filter[fare][min]' => $request->query('fare_min') ?? null, // Lọc theo giá vé tối thiểu
            'filter[fare][max]' => $request->query('fare_max') ?? null, // Lọc theo giá vé tối đa
            'filter[available_seat][min]' => $request->query('available_seat_min') ?? null, // Lọc theo số lượng ghế trống tối thiểu
            'filter[available_seat][max]' => $request->query('available_seat_max') ?? null, // Lọc theo số lượng ghế trống tối đa
            'filter[rating][min]' => $request->query('rating_min') ?? null, // Lọc theo rating tối thiểu
            'filter[rating][max]' => $request->query('rating_max') ?? null, // Lọc theo rating tối đa
            'filter[time][min]' => $request->query('time_min') ?? null, // Lọc theo thời gian bắt đầu
            'filter[time][max]' => $request->query('time_max') ?? null, // Lọc theo thời gian kết thúc
            'filter[limousine]' => $request->query('limousine') ?? null, // Lọc theo loại xe limousine (0 hoặc 1)
            'filter[seat_type][index]' => $request->query('seat_type_index') ?? null, // Lọc theo loại ghế ngồi (1 - AC Seater, 2 - AC Sleeper, 7 - AC Double Sleeper)
            'filter[covid_utility]' => $request->query('covid_utility') ?? null, // Đảm bảo COVID-19 (0 hoặc 1)
            'filter[enabled_gps]' => $request->query('enabled_gps') ?? null, // Theo dõi vị trí xe (0 hoặc 1)
            'filter[full_trip]' => $request->query('full_trip') ?? null, // Lọc full chuyến (0 hoặc 1)
            'filter[pickup_points][index][district]' => $request->query('pickup_points_index_district') ?? null, // Lọc theo điểm đón theo quận huyện
            'filter[pickup_points][0][name]' => $request->query('pickup_points_0_name') ?? null, // Lọc theo điểm đón theo tên
            'filter[dropoff_points][index][district]' => $request->query('dropoff_points_index_district') ?? null, // Lọc theo điểm xả theo quận huyện
            'filter[dropoff_points][0][name]' => $request->query('dropoff_points_0_name') ?? null, // Lọc theo điểm xả theo tên
            'page' => $request->query('page', 1), // Phân trang (mặc định là trang 1)
            'pagesize' => $request->query('pagesize', 10), // Số phần tử mỗi trang (mặc định là 20)
        ];

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
        // dd(compact('list_routes'));

        return view("bus.bus_search", compact('list_routes', 'list_areas', 'params'));
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
