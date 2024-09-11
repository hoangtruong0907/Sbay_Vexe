<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use App\Helpers\helpers;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\BlogPostModel;
use App\Models\PostType;


class RouteController extends Controller
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

        $all_area = $this->getAllRoute($token);

        $postTypes = BlogPostModel::distinct()->pluck('type');

        // Lấy tất cả các bài viết đã xuất bản và phân trang
        $allPosts = BlogPostModel::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->where('type', '!=', 'relatedContent')
            ->paginate(10);

        $typeMapping = [
            'blog' => 'Thông tin mới',
            'news' => 'Tin tức',
            'incentives' => 'Ưu đãi nổi bật',
            'vexeretip' => 'Vexere Tip',
            'relatedContent' => 'Nội dung liên quan',
        ];

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 10; // Số lượng mục mỗi trang
        $currentItems = $allPosts->forPage($currentPage, $perPage);
        $paginator = new LengthAwarePaginator($currentItems, $allPosts->total(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        $banner_current = Banner::first();

        return view('index', [
            "list_areas" => $all_area['bus'],
            "list_areas_train" => $all_area['train']['train_stations_list'] ?? [],
            'allPosts' => $paginator,
            'typeMapping' => $typeMapping,
            'postTypes' => $postTypes,
            'banner_current' => $banner_current,
        ]);
    }

    private function getAllRoute($token, $key = "all", $time = 60 * 60 * 24)
    {
        $areas = [];
        switch ($key) {
            case 'bus':
                $url = $this->main_url . '/v3/area/city_district';
                $areas = collect(Helpers::cacheData('areas_bus', $token, $url, $time));
                break;
            case 'train':
                $url = $this->route_url . '/v2/agent/train/get_config';
                $areas = collect(Helpers::cacheData('areas_train', $token, $url, $time));
                break;
            case "all":
                $urlBus = $this->main_url . '/v3/area/city_district';
                $areasBus = collect(Helpers::cacheData('areas_bus', $token, $urlBus, $time));
                $urlTrain = $this->route_url . '/v2/agent/train/get_config';
                $areasTrain = collect(Helpers::cacheData('areas_train', $token, $urlTrain, $time));
                $areas = [
                    'bus' => $areasBus,
                    'train' => $areasTrain,
                ];
                break;
        }
        return $areas;
    }

    public function busRouteSearch(Request $request)
    {
        $busTo = $request->query('bus_to') ? (int)($request->query('bus_to')) : "";
        $busFrom = $request->query('bus_from') ? (int)$request->query('bus_from') : "";
        $dateTo = $request->query('date_to') ? formatDate($request->query('date_to')) : "";
        $dateFrom = $request->query('date_from') ? formatDate($request->query('date_from')) : "";
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);

        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }
        // if ($busTo === null || $busFrom === null || $dateTo === null) {
        //     return response()->json(['error' => 'Missing required parameters.'], 400);
        // }
        $all_area = $this->getAllRoute($token);
        $urlRoute = $this->route_url . '/v2/route?filter[from]=' . $busFrom . '&filter[to]=' . $busTo . '&filter[date]=' . $dateTo;

        $queryParams = [
            'page' => $request->query('page', 1), // Phân trang (mặc định là trang 1)
            'pagesize' => $request->query('pagesize', 8), // Số phần tử mỗi trang (mặc định là 20)
        ];

        // Thêm các tham số vào URL
        foreach ($queryParams as $key => $value) {
            if ($value !== null) {
                $urlRoute .= '&' . $key . '=' . $value;
            }
        }

        // Lấy thông tin từ params
        $params = (object)([
            'busFrom' => (object)$all_area['bus']->where('id', (int)$busFrom)->first(),
            'busTo' => (object)$all_area['bus']->where('id', (int)$busTo)->first(),
            'dateTo' => $dateTo,
            'dateFrom' => $dateFrom,
        ]);

        // Thông tim tuyến đường
        $cacheKeyRoute = 'route_' . $busFrom . '_' . $busTo . '_' . $dateTo;
        // $list_routes = Helpers::cacheData($cacheKeyRoute, $token, $urlRoute, 60 * 20);\
        $res_routes = Helpers::cacheData($cacheKeyRoute, $token, $urlRoute, $queryParams, 60 * 20, true);
        $list_routes = $res_routes['data'];
        // Thông tin ảnh nhà xe
        $list_routes = $this->addBusImagesToRoutes($token, $list_routes);
        return view("bus.bus_search", [
            "fromtoPlace" => $request->query('q', null),
            "list_routes" => $list_routes,
            "list_areas" => $all_area['bus'],
            "list_areas_train" => $all_area['train']['train_stations_list'] ?? [],
            "params" => $params,
            'currentPage' => $res_routes['page'],
            'pageSize' => $res_routes['page_size'],
            'total' => $res_routes['total'],
            'totalPages' => $res_routes['total_pages']
        ]);
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

    public function busInfo($companyId, $type, Request $request)
    {
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
        // $itemKey = $request->query('itemKey') ? $request->query('itemKey') : null;
        if ($companyId === null || $type === null) {
            return response()->json(['error' => 'Missing required parameters.'], 400);
        }

        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }

        if ($type === "reviews") {
            $url = $this->use_profile_url . "/company/" . $companyId . '/reviews?';
            $urlRPoint = $this->use_profile_url . "/company/" . $companyId;
            $queryParams = [
                'per_page' => $request->query('per_page') ?? null,
                'page' => $request->query('page') ?? 1,
                'rating[min]' => $request->query('rating_min') ?? null,
                'rating[max]' => $request->query('rating_max') ?? null,
            ];

            // Thêm các tham số vào URL nếu chúng tồn tại
            foreach ($queryParams as $key => $value) {
                if ($value !== null) {
                    $url .= '&' . $key . '=' . $value;
                }
            }
            $reviewPoint = Helpers::cacheData("company-bus-'.$companyId.'-ratingpoint", $token, $urlRPoint, 60 * 20);
            $reviews = Helpers::cacheData("company-bus-'.$companyId.'-reviews", $token, $url, $queryParams, 60 * 20);

            if (isset($reviews)) {
                $reviewByType = [
                    "1" => [],
                    "2" => [],
                    "3" => [],
                    "4" => [],
                    "5" => [],
                    "detail_review" => [],
                    "image_review_count" => []
                ];

                foreach ($reviews['items'] as $item) {
                    if (isset($item['rating']) && in_array($item['rating'], [1, 2, 3, 4, 5])) {
                        $reviewByType[(string)$item['rating']][] = $item;
                    }
                    if (isset($item['detail_review']) && $item['detail_review']) {
                        $reviewByType['detail_review'][] = $item;
                    }
                    if (isset($item['image_review_count']) && $item['image_review_count'] > 0) {
                        $reviewByType['image_review'][] = $item;
                    }
                }
            }

            return response()->json([
                "message" => "success",
                'type' => $type,
                'dataHTML' => view('bus._bus_reviewTab', compact('companyId', 'queryParams', 'reviews', 'reviewPoint', 'reviewByType'))->render(),
            ]);
        }

        return response()->json([
            "message" => "No type",
            'data' => "",
        ]);
    }

    function busCancellationPolicy($tripCode, $seatTemplateMap, Request $request)
    {
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
        if ($tripCode === null) {
            return response()->json(['error' => 'Missing required parameters.'], 400);
        }

        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }

        $urlCancel = $this->main_url . "/v3/cancellation/policy?trip_code=" . $tripCode;
        $urlPolicy = $this->main_url . "/v3/company_policy/config_detail?seat_template_id=" . $seatTemplateMap . "&trip_code=" . $tripCode;
        $cancelPolicy = Helpers::cacheData("cancellation-policy-bus-" . $tripCode, $token, $urlCancel, 60 * 20);
        $operatorPolicy = Helpers::cacheData("bus_operator_policy-bus-" . $tripCode . "-" . $seatTemplateMap, $token, $urlPolicy, 60 * 20);
        // dd($operatorPolicy);
        return response()->json([
            "message" => "success",
            'tripCode' => $tripCode,
            'dataHTML' => view('bus._bus_policyTab', compact('tripCode', 'cancelPolicy', 'operatorPolicy'))->render(),
        ]);
    }

    function busSeatMap($tripCode, $keyId, Request $request)
    {
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
        if ($tripCode === null) {
            return response()->json(['error' => 'Missing required parameters.'], 400);
        }

        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }
        $urlSeatMap = $this->main_url . "/v3/trip/seat_map?trip_code=" . $tripCode;
        $seatMap = Helpers::cacheData("seat-map-bus-" . $tripCode, $token, $urlSeatMap, 60 * 20);
        // dd($seatTemplateMap);
        return response()->json([
            "message" => "success",
            'tripCode' => $tripCode,
            'dataHTML' => view('bus._bus_stepChooseSeat', [
                'tripCode' => $tripCode,
                'seatTemplateMap' => $seatMap['coach_seat_template'] ?? [],
                "pickupPoints" => $seatMap['pickup_points'] ?? [],
                "transferPoints" => $seatMap['transfer_points_at_arrive'],
                "dropOffPoints" => $seatMap['drop_off_points_at_arrive'],
                "seatMap" => $seatMap,
                "keyId" => $keyId,
            ])->render(),
        ]);
    }

    function busListRouteSearch(Request $request)
    {

        $busTo = $request->query('bus_to') ? (int)($request->query('bus_to')) : "";
        $busFrom = $request->query('bus_from') ? (int)$request->query('bus_from') : "";
        $dateTo = $request->query('date_to') ? formatDate($request->query('date_to')) : "";
        $dateFrom = $request->query('date_from') ? formatDate($request->query('date_from')) : "";
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
            'filter[time][min]' => $request->query('time_min') ?? null, // Lọc theo thời gian bắt đầu HH:mm
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
            'sort' => $request->query('sort') ?? "time:asc", // Sort theo giờ (time:asc/time:desc), rating (rating:asc), giá (fare:asc),
            'page' => $request->query('page', 1), // Phân trang (mặc định là trang 1)
            'pagesize' => $request->query('pagesize', 8), // Số phần tử mỗi trang (mặc định là 20)
        ];

        // Thêm các tham số vào URL
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
        $list_areas = collect(Helpers::cacheData('city_district', $token, $main_url, 60 * 60 * 24));
        // Lấy thông tin từ params
        $params = (object)([
            'busFrom' => (object)$list_areas->where('id', (int)$busFrom)->first(),
            'busTo' => (object)$list_areas->where('id', (int)$busTo)->first(),
            'dateTo' => $dateTo,
            'dateFrom' => $dateFrom,
        ]);
        // Thông tim tuyến đường
        $cacheKeyRoute = 'route_' . $busFrom . '_' . $busTo . '_' . $dateTo;
        // $list_routes = Helpers::cacheData($cacheKeyRoute, $token, $urlRoute, 60 * 20);\
        $res_routes = Helpers::cacheData($cacheKeyRoute, $token, $urlRoute, $queryParams, 60 * 20, true);
        $list_routes = $res_routes['data'];
        // dd($list_routes);
        // Thông tin ảnh nhà xe
        $list_routes = $this->addBusImagesToRoutes($token, $list_routes);

        return response()->json([
            "message" => "success",
            'dataHTML' => view('bus._bus_listResult', [
                "list_routes" => $list_routes,
                "params" => $params,
                'currentPage' => $res_routes['page'],
                'pageSize' => $res_routes['page_size'],
                'total' => $res_routes['total'],
                'totalPages' => $res_routes['total_pages']
            ])->render(),
        ]);
    }


    // TRAIN
    public function trainRouteSearch(Request $request)
    {
        $trainTo = $request->query('train_to', '');
        $trainFrom = $request->query('train_from', '');
        $dateTo = $request->query('date_to') ? formatDate($request->query('date_to')) : '';
        $dateFrom = $request->query('date_from') ? formatDate($request->query('date_from')) : '';
        $quantity = 2;
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);

        if (!$token) {
            return response()->json(['error' => 'Failed to retrieve token.'], 500);
        }
        $all_area = $this->getAllRoute($token);
        $urlRoute = $this->route_url . '/v2/agent/train/route?from=' . $trainFrom . '&to=' . $trainTo . '&time=' . $dateTo . '&quantity=' . $quantity;
        // Apply filters
        $queryParams = [
            'page' => $request->query('page', 1),
            'pagesize' => $request->query('pagesize', 10),
        ];

        foreach ($queryParams as $key => $value) {
            if ($value !== null) {
                $urlRoute .= '&' . $key . '=' . $value;
            }
        }

        $train_stations_list = collect($all_area['train']->get('train_stations_list'));
        // Lấy thông tin điểm đón và điểm xả
        $params = (object)([
            'trainFrom' => (object)$train_stations_list->where('station_code', $trainFrom)->first(),
            'trainTo' => (object)$train_stations_list->where('station_code', $trainTo)->first(),
            'dateToTrain' => $dateTo,
            'dateFromTrain' => $dateFrom,
        ]);

        $list_routes = Helpers::cacheData('train_route_' . $trainFrom . '_' . $trainTo . '_' . $dateTo, $token, $urlRoute, $queryParams, 60 * 30);
        // dd($list_routes);
        return view("train.train_search", [
            "list_areas" => $all_area['bus'],
            'list_routes_train' => $list_routes,
            'list_areas_train' => $train_stations_list,
            'params' => $params,
        ]);
    }

    public function getSeatMap(Request $request)
    {
        $seatInfo = $request->all();
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
        if (empty($seatInfo)) {
            return response()->json(['error' => 'Missing required parameters.'], 400);
        }

        if (!$token) {
            return response()->json([
                'error' => 'Failed to retrieve token',
            ], 500);
        }
        $urlSeatMap = $this->route_url . "/v2/agent/train/seat_map";
        $res = Http::withToken($token)->post($urlSeatMap, [
            'type' => "depart",
            'train_id' => $seatInfo['trainId'],
            'physical_carriage_id' => $seatInfo['carriageId'],
        ]);
        $seatMap = [];
        if ($res->successful()) {
            $seatMap = $res->json();
        }

        return response()->json([
            "message" => "success",
            "seatMap" => $seatMap,
            'dataHTML' => view('train._train_templateSeat', [
                "seatMap" => $seatMap,
                "seatInfo" => $seatInfo,
            ])->render(),
        ]);
    }
    
    // Hiển thị tiện ích của Bus
    public function busUtilitiesSearch (Request $request) {
        $token = Helpers::getToken($this->main_url, $this->client_id, $this->client_secret);
        $urlRoute = $this->main_url . '/v3/company/'.$request->id.'/utility?seat_template_id='. $request->seat_template_id;
        $list_routes = Helpers::cacheData('utility', $token, $urlRoute);
        
        return response()->json([
            "message" => "success",
            'data'    => $list_routes
        ]);
    }
}
