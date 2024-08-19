<div id="item-bus-{{ $key }}">
    <div class="container-l">
        <div class="ticket-container-l">
            <div class="ticket-body-l">
                <div class="ticket-image-l">
                    <img class="operator-l" src="{{ $route['company']['images'][0]['files']['1000x600'] }}"
                        alt="Đình Nhân">
                    <div class="ticket-confirm-l">
                        <i class="fa-solid fa-ticket"></i>Xác nhận tức thì
                    </div>
                </div>
                <div class="ticket-info-l">
                    <div class="ticket-bus-info-l">
                        <div class="bus-name-l">{{ $route['company']['name'] }}
                            <button type="button" class="ant-btn bus-rating-button-l">
                                <div class="bus-rating-l">
                                    <i class="fa-solid fa-star"></i>
                                    <span>{{ $route['company']['ratings']['overall'] }}
                                        ({{ $route['company']['ratings']['comments'] }})</span>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="seat-type-l">{{ $dataRoute['schedules'][0]['vehicle_type'] }}</div>
                    <div class="from-to-l">
                        <svg class="location-route-svg-l" xmlns="http://www.w3.org/2000/svg" width="14"
                            height="74" viewBox="0 0 14 74">
                            <path fill="none" stroke="#787878" stroke-linecap="round" stroke-width="2"
                                stroke-dasharray="0 7" d="M7 13.5v46"></path>
                            <g fill="none" stroke="#484848" stroke-width="3">
                                <circle cx="7" cy="7" r="7" stroke="none"></circle>
                                <circle cx="7" cy="7" r="5.5"></circle>
                            </g>
                            <path
                                d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                fill="#787878"></path>
                        </svg>
                        <div class="from-to-content-l">
                            <div class="content-l from-l">
                                {{-- formatDateTime($dataRoute['schedules'][0]['pickup_date'], 'H:i') --}}
                                <div class="hour-l">
                                    {{ formatDateTime($dataRoute['schedules'][0]['pickup_date'], 'H:i') }}</div>
                                <div class="place-l">• {{ $dataRoute['from']['name'] }}</div>
                            </div>
                            <div class="duration-l">{{ getDuration($dataRoute['duration']) }}</div>
                            <div class="content-l to-l">
                                <div class="content-to-info-l">
                                    <div class="hour-l">
                                        {{ formatDateTime($dataRoute['schedules'][0]['arrival_time'], 'H:i') }}</div>
                                    <div class="place-l">• {{ $dataRoute['to']['name'] }}</div>
                                </div>
                            </div>
                            <div class="text-date-arrival-time-l-r">
                                <span
                                    class="text-date-arrival-time-l">({{ formatDateTime($dataRoute['schedules'][0]['arrival_time'], 'd-m') }})</span>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!-- ///// địa điểm//// -->
                    <div class="custom-from-to-content">
                    <div class="custom-content-from">
                        <div class="custom-hour">
                            18:45 <span class="custom-status-dot custom-green-dot"></span>
                        </div>
                        <div class="custom-place">VP Đà Nẵng</div>
                    </div>
                    <div class="custom-timeline">
                        <div class="line"></div>
                       <div class="custom-duration">12 giờ</div>
                   </div>
                   <div class="custom-content-to">
                        <div class="custom-arrival-date">(18/08)</div>
                        <div class="custom-hour">
                            <span class="custom-status-dot custom-red-dot"></span> 06:45
                        </div>
                        <div class="custom-place">VP Tân Bình</div>
                    </div>
                </div>
                    <!--  -->


                    {{-- <div class="social-proof-l">7 người đặt trong 6 tiếng gần đây</div> --}}
                    <div class="action-p">
                        <div class="seat-available">
                            {{ $dataRoute['schedules'] ? 'Còn ' . $dataRoute['schedules'][0]['total_available_seats'] . ' chỗ trống' : [] }}
                        </div>
                        <div class="action-l">
                            <button type="button" class="ant-btn btn-detail-l ant-btn-link-l" data-bs-toggle="collapse"
                                data-bs-target="#ticket-detail-collapse-{{ $key }}" role="button"
                                aria-expanded="false" aria-controls="ticket-detail-collapse-{{ $key }}">
                                <span>Thông tin chi tiết</span>
                                <i aria-label="icon: caret-down" class="anticon anticon-caret-down">
                                    <svg viewBox="0 0 1024 1024" focusable="false" class="" data-icon="caret-down"
                                        width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                        </path>
                                    </svg>
                                </i>
                                <i aria-label="icon: caret-up" class="anticon anticon-caret-up"><svg
                                        viewBox="0 0 1024 1024" class="" data-icon="caret-up" width="1em"
                                        height="1em" fill="currentColor" aria-hidden="true" focusable="false">
                                        <path
                                            d="M858.9 689L530.5 308.2c-9.4-10.9-27.5-10.9-37 0L165.1 689c-12.2 14.2-1.2 35 18.5 35h656.8c19.7 0 30.7-20.8 18.5-35z">
                                        </path>
                                    </svg></i>
                            </button>
                            <button data-tracking-event="selected_route" type="button" class="ant-btn btn-booking-l"
                                data-bs-toggle="collapse" data-bs-target="#ticket-step-collapse-{{ $key }}"
                                role="button" aria-expanded="false"
                                aria-controls="ticket-step-collapse-{{ $key }}">
                                <span>Chọn chuyến</span>
                            </button>
                        </div>
                    </div>
                    <div class="fare-info-l">
                        <div class="fare-l">Từ {{ formatCurrency($dataRoute['schedules'][0]['fare']['original']) }}
                        </div>
                        <div class="fareSmall">
                            <div class="small">
                                {{ $dataRoute['schedules'][0]['fare']['original'] !== $dataRoute['schedules'][0]['fare']['max'] ? formatCurrency($dataRoute['schedules'][0]['fare']['max']) : '' }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="notify-trip-l">
            <div class="full-trip-l">
                <span>*</span> Vé chặng thuộc chuyến {{ $dataRoute['departure_time'] }}
                {{ formatDateTime($dataRoute['departure_date'], 'd-m-Y') }}
                {{ $dataRoute['name'] }}
            </div>
            <div class="content-has-cop">
                <div>
                    @if ($route['allow_payment'] != 1)
                        Không cần thanh toán trước
                    @endif
                </div>
            </div>
        </div>
        <div class="collapse ticket-step-collapse" id="ticket-step-collapse-{{ $key }}"
            data-bs-parent="#item-bus-{{ $key }}">
            <div class="card card-body card-body-new">
                <div id="step1-{{ $key }}" class="wizard-step active">
                    <div class="wrap-card-body">
                        <div class="steps-container">
                            <div class="step step-active">
                                <div class="step-icon">1</div>
                                <div class="step-content step-content1">
                                    <div class="step-title">Chỗ mong muốn</div>
                                </div>
                                <div class="step-tail"></div>
                            </div>
                            <div class="step step-inactive">
                                <div class="step-icon step-icon-2 step-content2">2</div>
                                <div class="step-content">
                                    <div class="step-title step-title2">Điểm đón trả</div>
                                </div>
                                <div class="step-tail"></div>
                            </div>
                        </div>
                    </div>
                    <div class="trust-message">
                        <p class="trust-message-text"><i class="fas fa-shield-alt"></i> Vexere cam kết giữ đúng chỗ
                            bạn đã chọn.</p>
                    </div>
                    <div class="coupon-container">
                        <div class="wrap-coupon">
                            <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                            <div class="kNCupL">
                                <div class="border-coupon">
                                    <div class="flex-coupon">
                                        <div class="img-coupon">
                                            <div class="icon-tau-coupon">
                                                <i class="fa fa-train" aria-hidden="true"></i>
                                            </div>
                                            <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                            <div class="coupon-image-title">
                                                <p class="coupon-image-title-t">Giảm</p>
                                                <p class="coupon-image-title-b">10%</p>
                                            </div>
                                        </div>
                                        <div class="text-coupon">
                                            <div class="coupon-exp">
                                                Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                            </div>
                                            <p class="text-coupon-reduce">Giảm 10%</p>
                                            <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                            <div class="wrap-expiry">
                                                <div class="text-expiry">HSD:</div>
                                                <p class="date-expiry">T3, 06/08 14:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-coupon">
                            <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                            <div class="kNCupL">
                                <div class="border-coupon">
                                    <div class="flex-coupon">
                                        <div class="img-coupon">
                                            <div class="icon-tau-coupon">
                                                <i class="fa fa-train" aria-hidden="true"></i>
                                            </div>
                                            <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                            <div class="coupon-image-title">
                                                <p class="coupon-image-title-t">Giảm</p>
                                                <p class="coupon-image-title-b">10%</p>
                                            </div>
                                        </div>
                                        <div class="text-coupon">
                                            <div class="coupon-exp">
                                                Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                            </div>
                                            <p class="text-coupon-reduce">Giảm 10%</p>
                                            <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                            <div class="wrap-expiry">
                                                <div class="text-expiry">HSD:</div>
                                                <p class="date-expiry">T3, 06/08 14:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-coupon">
                            <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                            <div class="kNCupL">
                                <div class="border-coupon">
                                    <div class="flex-coupon">
                                        <div class="img-coupon">
                                            <div class="icon-tau-coupon">
                                                <i class="fa fa-train" aria-hidden="true"></i>
                                            </div>
                                            <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                            <div class="coupon-image-title">
                                                <p class="coupon-image-title-t">Giảm</p>
                                                <p class="coupon-image-title-b">10%</p>
                                            </div>
                                        </div>
                                        <div class="text-coupon">
                                            <div class="coupon-exp">
                                                Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                            </div>
                                            <p class="text-coupon-reduce">Giảm 10%</p>
                                            <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                            <div class="wrap-expiry">
                                                <div class="text-expiry">HSD:</div>
                                                <p class="date-expiry">T3, 06/08 14:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-coupon">
                            <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                            <div class="kNCupL">
                                <div class="border-coupon">
                                    <div class="flex-coupon">
                                        <div class="img-coupon">
                                            <div class="icon-tau-coupon">
                                                <i class="fa fa-train" aria-hidden="true"></i>
                                            </div>
                                            <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                            <div class="coupon-image-title">
                                                <p class="coupon-image-title-t">Giảm</p>
                                                <p class="coupon-image-title-b">10%</p>
                                            </div>
                                        </div>
                                        <div class="text-coupon">
                                            <div class="coupon-exp">
                                                Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                            </div>
                                            <p class="text-coupon-reduce">Giảm 10%</p>
                                            <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                            <div class="wrap-expiry">
                                                <div class="text-expiry">HSD:</div>
                                                <p class="date-expiry">T3, 06/08 14:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-coupon">
                            <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                            <div class="kNCupL">
                                <div class="border-coupon">
                                    <div class="flex-coupon">
                                        <div class="img-coupon">
                                            <div class="icon-tau-coupon">
                                                <i class="fa fa-train" aria-hidden="true"></i>
                                            </div>
                                            <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                            <div class="coupon-image-title">
                                                <p class="coupon-image-title-t">Giảm</p>
                                                <p class="coupon-image-title-b">10%</p>
                                            </div>
                                        </div>
                                        <div class="text-coupon">
                                            <div class="coupon-exp">
                                                Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                            </div>
                                            <p class="text-coupon-reduce">Giảm 10%</p>
                                            <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                            <div class="wrap-expiry">
                                                <div class="text-expiry">HSD:</div>
                                                <p class="date-expiry">T3, 06/08 14:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-steps-content">
                        <div class="wrap-steps-content">
                            <div class="left-steps-content">
                                <div class="seat-groups">
                                    <div class="note">Chú thích</div>
                                    <div class="seat-info">
                                        <div class="seat-thumbnail seat-unavailable">
                                            <svg width="32" height="40" viewBox="0 0 28 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                    stroke-linejoin="round"></rect>
                                                <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                    stroke-linejoin="round"></rect>
                                                <path class="icon-selected"
                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                    fill="transparent"></path>
                                                <path class="icon-disabled icon-disabled-2"
                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                    fill="transparent"></path>
                                            </svg>
                                        </div>
                                        <span class="seat-name">Ghế không bán</span>
                                    </div>
                                    <div class="seat-info">
                                        <div class="seat-thumbnail seat-selected">
                                            <svg width="32" height="40" viewBox="0 0 28 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                    stroke-linejoin="round"></rect>
                                                <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                    stroke-linejoin="round"></rect>
                                                <path class="icon-selected icon-selected-chon"
                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                    fill="transparent"></path>
                                                <path class="icon-disabled "
                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                    fill="transparent"></path>
                                            </svg>
                                        </div>
                                        <span class="seat-name">Đang chọn</span>
                                    </div>
                                    <div class="seat-info">
                                        <div class="seat-thumbnail seat-discount" color="#fba442">
                                            <svg width="32" height="40" viewBox="0 0 28 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                    stroke-linejoin="round"></rect>
                                                <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                    stroke-linejoin="round"></rect>
                                                <path class="icon-selected "
                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                    fill="transparent"></path>
                                                <path class="icon-disabled"
                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                    fill="transparent"></path>
                                            </svg>
                                        </div>
                                        <span class="seat-name">
                                            <div class="seat-name-group">CABIN ĐƠN</div>
                                            <div class="seat-original">
                                                <strong>315,000đ</strong>
                                                <span class="seat-fare-original">350,000đ</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="seat-info">
                                        <div class="seat-thumbnail seat-group" color="#ae70ff">
                                            <svg width="32" height="40" viewBox="0 0 28 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                    stroke-linejoin="round"></rect>
                                                <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                    stroke-linejoin="round"></rect>
                                                <path class="icon-selected"
                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                    fill="transparent"></path>
                                                <path class="icon-disabled"
                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                    fill="transparent"></path>
                                            </svg>
                                        </div>
                                        <span class="seat-name">
                                            <div class="seat-name-group">CABIN ĐÔI</div>
                                            <div class="seat-original">
                                                <strong>495,000đ</strong>
                                                <span class="seat-fare-original">550,000đ</span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="right-steps-content">
                                <div class="wrap-coach">
                                    <span>Tầng dưới</span>
                                    <div class="coach">
                                        <table>
                                            <tbody>
                                                <!-- Row 1 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="true" disabled>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12.305 24h-.61c-.035-.004-.07-.01-.105-.012a11.783 11.783 0 0 1-2.117-.261 12.027 12.027 0 0 1-6.958-4.394A11.933 11.933 0 0 1 .027 12.78L0 12.411v-.822c.005-.042.013-.084.014-.127a11.845 11.845 0 0 1 1.102-4.508 12.007 12.007 0 0 1 2.847-3.852A11.935 11.935 0 0 1 11.728.003c.947-.022 1.883.07 2.81.27 1.22.265 2.369.71 3.447 1.335a11.991 11.991 0 0 1 3.579 3.164 11.876 11.876 0 0 1 2.073 4.317c.178.712.292 1.434.334 2.168.008.146.02.292.029.439v.609c-.004.03-.011.06-.012.089a11.81 11.81 0 0 1-1.05 4.521 12.02 12.02 0 0 1-1.92 2.979 12.046 12.046 0 0 1-6.395 3.812c-.616.139-1.24.23-1.872.265-.149.008-.297.02-.446.03zm8.799-13.416c-.527-3.976-4.078-7.808-9.1-7.811-5.02-.003-8.583 3.823-9.11 7.809h.09c.64-.035 1.278-.092 1.912-.195.815-.131 1.614-.326 2.378-.639.625-.255 1.239-.54 1.855-.816.82-.368 1.673-.593 2.575-.62a7.123 7.123 0 0 1 1.947.187c.585.146 1.136.382 1.68.634.57.264 1.14.526 1.733.736 1.2.424 2.442.62 3.706.7.11.006.222.01.334.015zm-10.95 10.471v-.094c0-1.437 0-2.873-.002-4.31 0-.141-.011-.284-.035-.423a2.787 2.787 0 0 0-.775-1.495c-.564-.582-1.244-.896-2.067-.892-1.414.007-2.827.002-4.24.002h-.09a9.153 9.153 0 0 0 3.125 5.256 9.15 9.15 0 0 0 4.083 1.956zm3.689.001c1.738-.36 3.25-1.137 4.528-2.355 1.4-1.334 2.287-2.956 2.685-4.855l-.077-.003h-4.362c-.237 0-.47.038-.695.112-.667.22-1.188.635-1.588 1.206a2.673 2.673 0 0 0-.494 1.59c.008 1.4.003 2.801.003 4.202v.103zM12.05 14.22c1.215-.035 2.204-1.083 2.165-2.275-.039-1.223-1.095-2.215-2.29-2.166-1.211.05-2.2 1.108-2.15 2.302.051 1.191 1.108 2.186 2.275 2.139z"
                                                                    fill="#858585"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="modal-choose-chair"
                                                            class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>

                                                    </td>
                                                    <td class="seat">
                                                        <div class="modal-choose-chair"
                                                            class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="wrap-coach">
                                    <span>Tầng trên</span>
                                    <div class="coach">
                                        <table>
                                            <tbody>
                                                <!-- Row 1 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="true" disabled>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5" height="34.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Row 2 -->
                                                <tr class="coach-row">
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5"
                                                                    height="34.5" rx="2.25" fill="#FFF"
                                                                    stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round">
                                                                </rect>
                                                                <rect x="5.75" y="27.75" width="16.5"
                                                                    height="6.5" rx="2.25" fill="#FFF"
                                                                    stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                    <td class="seat">
                                                        <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                            data-disabled="false" color="#ae70ff">
                                                            <svg width="32" height="40" viewBox="0 0 28 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                style="width: 27px; height: 40px;">
                                                                <rect x="2.75" y="2.75" width="22.5"
                                                                    height="34.5" rx="2.25" fill="#FFF"
                                                                    stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="5.75" y="27.75" width="16.5"
                                                                    height="6.5" rx="2.25" fill="#FFF"
                                                                    stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal-{{ $key }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-new">
                            <div class="modal-content">
                                <div class="wrap-content">
                                    <h6 class="modal-title fs-5" id="exampleModalLabel-{{ $key }}">Mã
                                        giường</h6>
                                    <button type="button" class="btn-close btn-modal-content"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div> --}}
                                <div class="text-modal">
                                    <p>Đây là giường có thể nằm tối đa 2 khách.<br>
                                        Giá vé sẽ tương ứng với số lượng khách.</p>
                                </div>
                                <div class="group-chosen">
                                    <div class="left-group-chosen">
                                        <p class="text-chosen-t">CABIN ĐÔI (2 Khách) (Tổng dưới 160kg)</p>
                                        <p class="text-chosen-b">850.000đ</p>
                                    </div>
                                    <div class="right-group-chosen">
                                        <p class="text-chosen-t">CABIN ĐƠN (1 Khách)</p>
                                        <p class="text-chosen-b">650.000đ</p>
                                    </div>
                                </div>
                                <button type="button" class="ant-btn button-confirmchoose-chair"><span>Xác
                                        nhận</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="step2-{{ $key }}" class="wizard-step">
                    <div class="wrap-card-body">
                        <div class="steps-container">
                            <div class="step step-active">
                                <div class="step-icon step-icon-step2"><i class="far fa-check-circle"></i></div>
                                <div class="step-content step-content1">
                                    <div class="step-title step-title-step2">Chỗ mong muốn</div>
                                </div>
                                <div class="step-tail"></div>
                            </div>
                            <div class="step step-inactive">
                                <div class="step-icon  step-content2">2</div>
                                <div class="step-content">
                                    <div class="step-title ">Điểm đón trả</div>
                                </div>
                                <div class="step-tail"></div>
                            </div>
                        </div>
                        <div class="trust-message">
                            <p class="trust-message-text"><i class="fas fa-shield-alt"></i> An tâm được đón đúng
                                nơi, trả đúng chỗ đã chọn và dễ dàng thay đổi khi cần.</p>
                        </div>
                    </div>
                    <div class="container-steps-content">
                        <div class="wrap-steps-content">
                            <div class="left-steps-content">
                                <div class="wrap-pick-up-point pickup-point">
                                    <div class="container-wrap-pick-up-point">
                                        <p class="text-pick-up-point">Điểm đón</p>
                                        <div class="label-container">
                                            <p class="text-pick-up-point-arrange">
                                                Sắp xếp theo
                                            </p>
                                            <p class="text-pick-up-point-arrange">
                                                Xem điểm đón gần bạn nhất?
                                            </p>
                                        </div>
                                        <div class="value-container">
                                            <button>
                                                <p class="text-pick-up-point-arrange">
                                                    Sớm nhất
                                                </p>
                                            </button>
                                            <button>
                                                <p class="text-pick-up-point-arrange text-pick-up-point-maps">
                                                    Nhập địa chỉ tại đây
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="container-group-items-pick-up-point">
                                        {{-- <label class="area7-radio-wrapper">
                                        <span class="ant-radio">
                                            <input type="radio" class="ant-radio-input" value="Trung Chuyển Đà Nẵng Bán Kính 5km-164480-174990-1">
                                            <span class="ant-radio-inner"></span>
                                        </span>
                                        <span class="span-radio-right">
                                            <div class="radio7-label">
                                                <span style="font-weight: bold;">17:36</span>
                                                <span class="gray7-disable" style="font-weight: bold;"></span>
                                                <span class="circle7-icon">
                                                    <span class="hafUs7" role="img" aria-label="emoji">⚫</span>
                                                </span>
                                                Trung Chuyển Đà Nẵng Bán Kính 5km
                                            </div>
                                        </span>
                                    </label> --}}
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1-{{ $key }}">
                                            <label class="form-check-label-title" for="-{{ $key }}">
                                                19:00: Nội thành Tp. Đà Nẵng
                                            </label>
                                            <p class="text-form-check-label-t">Miễn phí - Vui lòng nhập địa chỉ cụ thể
                                                muốn được trung chuyển</p>
                                            <p class="text-form-check-label-b">Đón tận nơi tại Thành phố Đà Nẵng</p>
                                            <b><i class="fa-solid fa-location-dot"></i> Đà Nẵng, Đà Nẵng</b>
                                            <textarea id="transferAddress-{{ $key }}" placeholder="Nhập địa chỉ trung chuyển" class="ant-input"
                                                style="border: 1px solid rgb(192, 192, 192); display: none;"></textarea>
                                        </div>
                                        <div class="form-check item point_id-1">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2-{{ $key }}" checked>
                                            <label class="form-check-label-title"
                                                for="flexRadioDefault2-{{ $key }}">
                                                19:30: Văn Phòng Đà Nẵng
                                            </label>
                                            <b><i class="fa-solid fa-location-dot"></i> 70 Hoàng Văn Thái, Phường Hòa
                                                Minh, Liên Chiểu, Đà Nẵng</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-steps-content">
                                <div class="wrap-pick-up-point">
                                    <div class="container-wrap-pick-up-point">
                                        <p class="text-pick-up-point">Điểm trả</p>
                                        <div class="label-container">
                                            <p class="text-pick-up-point-arrange">
                                                Sắp xếp theo
                                            </p>
                                            <p class="text-pick-up-point-arrange">
                                                Xem điểm đón gần bạn nhất?
                                            </p>
                                        </div>
                                        <div class="value-container">
                                            <button>
                                                <p class="text-pick-up-point-arrange">
                                                    Sớm nhất
                                                </p>
                                            </button>
                                            <button>
                                                <p class="text-pick-up-point-arrange text-pick-up-point-maps">
                                                    Nhập địa chỉ tại đây
                                                </p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="container-group-items-pick-up-point">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="flexRadioDefault2" id="flexRadioDefault3-{{ $key }}"
                                                checked>
                                            <label class="form-check-label-title"
                                                for="flexRadioDefault3-{{ $key }}">
                                                19:30: Văn Phòng Đà Nẵng
                                            </label>
                                            <b><i class="fa-solid fa-location-dot"></i> 70 Hoàng Văn Thái, Phường Hòa
                                                Minh, Liên Chiểu, Đà Nẵng </b>
                                        </div>
                                        <div class="form-check  item point_id-1">
                                            <input class="form-check-input" type="radio"
                                                name="flexRadioDefault2"
                                                id="flexRadioDefault4-{{ $key }}">
                                            <label class="form-check-label-title"
                                                for="flexRadioDefault4-{{ $key }}">
                                                19:00: Nội thành Tp. Đà Nẵng
                                            </label>
                                            <p class="text-form-check-label-t">Miễn phí - Vui lòng nhập địa chỉ cụ thể
                                                muốn được trung chuyển</p>
                                            <p class="text-form-check-label-b">Đón tận nơi tại Thành phố Đà Nẵng</p>
                                            <b><i class="fa-solid fa-location-dot"></i> Đà Nẵng, Đà Nẵng</b>
                                            <textarea id="transferAddress1--{{ $key }}" placeholder="Nhập địa chỉ trung chuyển" class="ant-input"
                                                style="border: 1px solid rgb(192, 192, 192); display: none;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="total-amount">
                    <div class="left-total-amount">
                        <button onclick="nextStep(1)" data-current="0"
                            data-tracking-event="completed_seat_selection" type="button"
                            class="ant-btn footer-nextstep ant-btn-primary"><span><i
                                    class="fa-solid fa-arrow-left"></i> Quay lại </span></button>
                    </div>
                    <div class="right-total-amount">
                        Tổng cộng: <div class="right-total">0đ</div>
                        <button onclick="nextStep(2)" data-current="0"
                            data-tracking-event="completed_seat_selection" type="button"
                            class="ant-btn footer-nextstep ant-btn-primary"><span>Tiếp tục <i
                                    class="fa-solid fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse ticket-detail-collapse" id="ticket-detail-collapse-{{ $key }}"
            data-bs-parent="#item-bus-{{ $key }}">
            <hr>
            <div class="container ticket-detail-container ps-3 pe-3">
                <ul class="nav nav-pills mb-1 pills-ticket-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="coupon-tab-{{ $key }}" data-bs-toggle="pill"
                            data-bs-target="#coupon-{{ $key }}" type="button" role="tab"
                            aria-controls="coupon-{{ $key }}" aria-selected="true">Giảm
                            giá</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pickup-tab-{{ $key }}" data-bs-toggle="pill"
                            data-bs-target="#pickup-{{ $key }}" type="button" role="tab"
                            aria-controls="pickup-{{ $key }}" aria-selected="false">Điểm đón,
                            trả</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rating-tab" id="rating-tab-{{ $key }}"
                            data-bs-toggle="pill" data-bs-target="#rating-{{ $key }}" type="button"
                            role="tab" aria-controls="rating-{{ $key }}" aria-selected="false"
                            data-company-id="{{ $route['company']['id'] }}" data-key="{{ $key }}">Đánh
                            giá</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="thumb-tab-{{ $key }}" data-bs-toggle="pill"
                            data-bs-target="#image-{{ $key }}" type="button" role="tab"
                            aria-controls="image-{{ $key }}" aria-selected="false">Hình
                            ảnh</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link policy-tab" id="policy-tab-{{ $key }}" data-bs-toggle="pill"
                            data-bs-target="#policy-{{ $key }}" type="button" role="tab"
                            aria-controls="policy-{{ $key }}" aria-selected="false"
                            data-trip-code="{{ $dataRoute['schedules'][0]['trip_code'] }}"
                            data-seat-template-id="{{ $dataRoute['schedules'][0]['seat_template_id'] }}">
                            Chính sách</button>
                    </li>
                </ul>
                <div class="tab-content ticket-detail-contentTab">
                    <div class="tab-pane fade coupon-tab" id="coupon-{{ $key }}" role="tabpanel"
                        aria-labelledby="coupon-tab" tabindex="0">
                        <div class="coupon-container">
                            <div class="wrap-coupon">
                                <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                                <div class="kNCupL">
                                    <div class="border-coupon">
                                        <div class="flex-coupon">
                                            <div class="img-coupon">
                                                <div class="icon-tau-coupon">
                                                    <i class="fa fa-train" aria-hidden="true"></i>
                                                </div>
                                                <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                                <div class="coupon-image-title">
                                                    <p class="coupon-image-title-t">Giảm</p>
                                                    <p class="coupon-image-title-b">10%</p>
                                                </div>
                                            </div>
                                            <div class="text-coupon">
                                                <div class="coupon-exp">
                                                    Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                                </div>
                                                <p class="text-coupon-reduce">Giảm 10%</p>
                                                <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                                <div class="wrap-expiry">
                                                    <div class="text-expiry">HSD:</div>
                                                    <p class="date-expiry">T3, 06/08 14:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-coupon">
                                <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                                <div class="kNCupL">
                                    <div class="border-coupon">
                                        <div class="flex-coupon">
                                            <div class="img-coupon">
                                                <div class="icon-tau-coupon">
                                                    <i class="fa fa-train" aria-hidden="true"></i>
                                                </div>
                                                <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                                <div class="coupon-image-title">
                                                    <p class="coupon-image-title-t">Giảm</p>
                                                    <p class="coupon-image-title-b">10%</p>
                                                </div>
                                            </div>
                                            <div class="text-coupon">
                                                <div class="coupon-exp">
                                                    Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                                </div>
                                                <p class="text-coupon-reduce">Giảm 10%</p>
                                                <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                                <div class="wrap-expiry">
                                                    <div class="text-expiry">HSD:</div>
                                                    <p class="date-expiry">T3, 06/08 14:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-coupon">
                                <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                                <div class="kNCupL">
                                    <div class="border-coupon">
                                        <div class="flex-coupon">
                                            <div class="img-coupon">
                                                <div class="icon-tau-coupon">
                                                    <i class="fa fa-train" aria-hidden="true"></i>
                                                </div>
                                                <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                                <div class="coupon-image-title">
                                                    <p class="coupon-image-title-t">Giảm</p>
                                                    <p class="coupon-image-title-b">10%</p>
                                                </div>
                                            </div>
                                            <div class="text-coupon">
                                                <div class="coupon-exp">
                                                    Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                                </div>
                                                <p class="text-coupon-reduce">Giảm 10%</p>
                                                <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                                <div class="wrap-expiry">
                                                    <div class="text-expiry">HSD:</div>
                                                    <p class="date-expiry">T3, 06/08 14:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-coupon">
                                <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                                <div class="kNCupL">
                                    <div class="border-coupon">
                                        <div class="flex-coupon">
                                            <div class="img-coupon">
                                                <div class="icon-tau-coupon">
                                                    <i class="fa fa-train" aria-hidden="true"></i>
                                                </div>
                                                <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                                <div class="coupon-image-title">
                                                    <p class="coupon-image-title-t">Giảm</p>
                                                    <p class="coupon-image-title-b">10%</p>
                                                </div>
                                            </div>
                                            <div class="text-coupon">
                                                <div class="coupon-exp">
                                                    Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                                </div>
                                                <p class="text-coupon-reduce">Giảm 10%</p>
                                                <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                                <div class="wrap-expiry">
                                                    <div class="text-expiry">HSD:</div>
                                                    <p class="date-expiry">T3, 06/08 14:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-coupon">
                                <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                                <div class="kNCupL">
                                    <div class="border-coupon">
                                        <div class="flex-coupon">
                                            <div class="img-coupon">
                                                <div class="icon-tau-coupon">
                                                    <i class="fa fa-train" aria-hidden="true"></i>
                                                </div>
                                                <img src="{{ asset('images/img-coupon.jpg') }}" alt="logo">
                                                <div class="coupon-image-title">
                                                    <p class="coupon-image-title-t">Giảm</p>
                                                    <p class="coupon-image-title-b">10%</p>
                                                </div>
                                            </div>
                                            <div class="text-coupon">
                                                <div class="coupon-exp">
                                                    Giờ vàng <i class="fas fa-exclamation-circle"></i>
                                                </div>
                                                <p class="text-coupon-reduce">Giảm 10%</p>
                                                <p class="text-coupon-reduce-b">Đơn hàng tối đa 1 vé </p>
                                                <div class="wrap-expiry">
                                                    <div class="text-expiry">HSD:</div>
                                                    <p class="date-expiry">T3, 06/08 14:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active pickup-tab" id="pickup-{{ $key }}"
                        role="tabpanel" aria-labelledby="pickup-tab" tabindex="1">
                        <div class="d-flex flex-column">
                            <div class="fw-bold">Lưu ý</div>
                            <div class="content-note-ticket">Các mốc thời gian đón, trả bên dưới là thời gian dự kiến.
                                Lịch này có thể thay đổi tùy tình hình thưc tế.
                            </div>
                        </div>
                        <div class="d-flex row mt-2">
                            <div class="col-6 d-flex flex-column wrap-point">
                                <div class="fw-bold">Điểm đón</div>
                                <div class="list-group">
                                    @foreach ($pickupData as $i => $pickup)
                                        <div class="list-group-item list-group-item-action list-distance-item"
                                            data-map-lat="{{ $pickup['location']['lat'] }}"
                                            data-map-lon="{{ $pickup['location']['lon'] }}"
                                            data-key="{{ $i }}">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">
                                                    @if ($pickup['duration'] != 0)
                                                        {{ getTimeDistance($dataRoute['departure_time'], $pickup['duration']) }}
                                                    @else
                                                        {{ $dataRoute['departure_time'] }}
                                                    @endif
                                                    {{-- <span class="badge text-bg-success">Có trung chuyển</span> --}}
                                                </h6>
                                                <small class="text-muted">
                                                    @if ($pickup['duration'] != 0)
                                                        {{ abs($pickup['duration']) }}'
                                                    @endif
                                                </small>
                                            </div>
                                            <p class="mb-1">{{ $pickup['name'] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-6 d-flex flex-column wrap-point">
                                <div class="fw-bold">Điểm trả</div>
                                <div class="list-group">
                                    @foreach ($dropoffData as $i => $dropoff)
                                        <div class="list-group-item list-group-item-action list-distance-item"
                                            data-map-lat="{{ $dropoff['location']['lat'] }}"
                                            data-map-lon="{{ $dropoff['location']['lon'] }}"
                                            data-key="{{ $i }}">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">
                                                    @if ($dropoff['duration'] != 0)
                                                        {{ getTimeDistance($dataRoute['departure_time'], $dropoff['duration']) }}
                                                    @else
                                                        {{ $dataRoute['departure_time'] }}
                                                    @endif
                                                </h6>
                                                <small class="text-muted">
                                                </small>
                                            </div>
                                            <p class="mb-1">{{ $dropoff['name'] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade rating-tab" id="rating-{{ $key }}" role="tabpanel"
                        aria-labelledby="rating-tab" tabindex="2">
                        {{-- Loading rating tab --}}
                        <div class="d-flex justify-content-center mt-4">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Đang tải...</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade image-tab" id="image-{{ $key }}" role="tabpanel"
                        aria-labelledby="image-tab" tabindex="3">
                        <div class="d-flex flex-column w-100 h-100 m-2">
                            <div id="carousel-img-{{ $key }}" class="carousel slide"
                                data-bs-ride="true">
                                <div class="carousel-inner">
                                    @foreach ($route['company']['images'] as $i => $image)
                                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                            <img src="{{ $image['files']['1000x600'] }}" class="img-child"
                                                alt="{{ $image['alt']['vi'] }}">
                                            <div class="carousel-caption d-none d-md-block p-0 m-0">
                                                {{ $image['caption']['vi'] }}
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carousel-img-{{ $key }}" data-bs-slide="prev">
                                    <div class="carousel-icon">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Tiếp theo</span>
                                    </div>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carousel-img-{{ $key }}" data-bs-slide="next">
                                    <div class="carousel-icon">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Lùi lại</span>
                                    </div>
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade policy-tab" id="policy-{{ $key }}" role="tabpanel"
                        aria-labelledby="policy" tabindex="4">
                        {{-- Loading tab policy --}}
                        <div class="d-flex justify-content-center mt-4">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Đang tải...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
