<div class="ResultTrips__Container-sc-1j2n4hz-0 trip-Results">
    <div class="result-trips-container">
        <p class="base__Heading02-sc-1tvbuqk-5 trip-Results-br color--darkness">
            Kết quả: {{ $total }} chuyến
        </p>
    </div>
</div>

<div class="FilterTop__Wrapper-sc-3qhbho-0 filter-Criteria">
    <div class="ant-radio-group ant-radio-group-outline ant-radio-group-large DynamicFilter__StyledRadioGroup-boqafm-0 Criteria dynamic-filter">
        <p class="base__Headline03-sc-1tvbuqk-15 dynamic-Criteria dynamic-filter-title color--darkness">
            Tiêu chí lọc nhanh phổ biến
        </p>
        <div class="dynamic-filter-scroll-list">
            @foreach (array_slice([
                'https://f1e425bd6cd9ac6.cmccloud.com.vn/dynamic-filter-auto/images/3/banner.png?v=16',
                'https://f1e425bd6cd9ac6.cmccloud.com.vn/dynamic-filter-auto/images/2/banner.png?v=7',
                'https://f1e425bd6cd9ac6.cmccloud.com.vn/dynamic-filter/images/265/banner.png?v=1',
                'https://f1e425bd6cd9ac6.cmccloud.com.vn/dynamic-filter/images/266/banner.png?v=1',
                'https://f1e425bd6cd9ac6.cmccloud.com.vn/dynamic-filter/images/267/banner.png?v=1',
                'https://f1e425bd6cd9ac6.cmccloud.com.vn/dynamic-filter/images/268/banner.png?v=1'
            ], 0, 6) as $image) <!-- Hiển thị 6 hình -->
            <div class="dynamic-filter-container" data-filter="{{ $loop->index < 2 ? 'discount' : 'no-discount' }}">
                <label class="dynamic-filter-Coupon ant-radio-button-wrapper-unchecked ant-radio-button-wrapper"
                    style="background-image:url({{ $image }}), url(https://229a2c9fe669f7b.cmccloud.com.vn/images/default-dynamic-filter-background-sm.jpg); background-size:cover; overflow:hidden">
                    <span class="ant-radio-button">
                        <span class="ant-radio-button-inner"></span>
                    </span>
                    <span class="selection-text" style="display: none;">Đang chọn</span>
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div id="routes-container">
    @foreach ($list_routes as $key => $route)
    @php
        $hasDiscount = $route['route']['schedules'][0]['fare']['original'] !== $route['route']['schedules'][0]['fare']['max'];
    @endphp

    <div class="route-item" data-discount="{{ $hasDiscount ? 'true' : 'false' }}">
        @include('bus._bus_item', [
            'route' => $route,
            'dataRoute' => $route['route'],
            'pickupData' => $route['route']['pickup_points'],
            'dropoffData' => $route['route']['dropoff_points'],
            'key' => (string) $key,
        ])
    </div>
    @endforeach
</div>

@if ($totalPages > 1)
<nav class="d-flex justify-content-center">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($currentPage > 1)
        <li class="page-item">
            <a class="page-link"
                href="javascript:void(0);"
                onclick="loadSearchListBus({{ $currentPage - 1 }}, {{ $pageSize }})"
                rel="prev">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
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
                href="javascript:void(0);"
                onclick="loadSearchListBus({{ $i }}, {{ $pageSize }})">{{ $i }}</a>
        </li>
        @endfor

        {{-- Next Page Link --}}
        @if ($currentPage < $totalPages)
        <li class="page-item">
            <a class="page-link"
                href="javascript:void(0);"
                 onclick="loadSearchListBus({{ $currentPage + 1 }}, {{ $pageSize }})"
                rel="next"><i class="fa-solid fa-chevron-right"></i>
            </a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link"><i class="fa-solid fa-chevron-right"></i></span>
        </li>
        @endif
    </ul>
</nav>
@endif

<script>
    function handleUtilitiesTab(id, seat_template_id) {
        $.ajax({
            method: 'POST',
            url: '{{ route('route.utilities') }}',
            data: {
                id: id,
                seat_template_id: seat_template_id
            },
        }).done((res) => {
            if (Array.isArray(res.data)) {
                res.data.map((el) => {
                    $('#utilities_' + id).empty().append(
                        `<div class="facility-description">
                            <div class="img-name">
                                <img src="//${el.icon_url}"/>
                                <div class="name">${el.name}</div>
                            </div>
                            <div class="description">${el.description}</div>
                        </div>
                        <div class="line-utilities mb-4"></div>`
                    );
                });
            } else {
                console.error("Dữ liệu không hợp lệ:", res);
            }
        });
    }

    function filterDiscountedItems() {
        const routeItems = document.querySelectorAll('.route-item');

        routeItems.forEach(item => {
            const hasDiscount = item.getAttribute('data-discount') === 'true';
            item.style.display = hasDiscount ? 'block' : 'none';
        });
    }

    document.querySelectorAll('.dynamic-filter-container[data-filter="discount"]').forEach(container => {
        container.addEventListener('click', function() {
            
            filterDiscountedItems();

            
            document.querySelectorAll('.selection-text').forEach(text => {
                text.style.display = 'none';
            });
            const selectionText = this.querySelector('.selection-text');
            selectionText.style.display = 'inline';

            
            document.querySelectorAll('.dynamic-filter-Coupon').forEach(label => {
                label.classList.remove('selected');
            });
            this.querySelector('.dynamic-filter-Coupon').classList.add('selected');
        });
    });

    
    document.querySelectorAll('.dynamic-filter-container[data-filter="no-discount"]').forEach(container => {
        container.addEventListener('click', function() {
            
        });
    });
</script>
