@foreach ($list_routes as $key => $route)
    @include('bus._bus_item', [
        'route' => $route,
        'dataRoute' => $route['route'],
        'pickupData' => $route['route']['pickup_points'],
        'dropoffData' => $route['route']['dropoff_points'],
        'key' => (string) $key,
    ])
@endforeach
@if ($totalPages > 1)
    <nav class="d-flex justify-content-center">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($currentPage > 1)
                <li class="page-item">
                    <a class="page-link"
                        href="{{ request()->fullUrlWithQuery(['page' => $currentPage - 1, 'pagesize' => $pageSize]) }}"
                        rel="prev"><i class="fa-solid fa-chevron-left"></i></a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="fa-solid fa-chevron-left"></i></span>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @for ($i = 1; $i <= $totalPages; $i++)
                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                    <a class="page-link"
                        href="{{ request()->fullUrlWithQuery(['page' => $i, 'pagesize' => $pageSize]) }}">{{ $i }}</a>
                </li>
            @endfor

            {{-- Next Page Link --}}
            @if ($currentPage < $totalPages)
                <li class="page-item">
                    <a class="page-link"
                        href="{{ request()->fullUrlWithQuery(['page' => $currentPage + 1, 'pagesize' => $pageSize]) }}"
                        rel="next"><i class="fa-solid fa-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="fa-solid fa-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
