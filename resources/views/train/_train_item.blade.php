<div id="item-train-{{ $key }}">
    <div class="container-l">
        <div class="ticket-container-l">
            <div class="ticket-body-l">
                <div class="ticket-image-l">
                    <div class="d-flex align-items-center justify-content-center border border-light rounded-circle">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/logo_dsvn.svg" alt="logo_dsvn.svg">
                    </div>

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

                                </div>
                            </button>
                        </div>
                        <div class="fare-info-l">
                            <div class="fare-l">{{ $route['min_price'] }} - {{ $route['max_price'] }}</div>
                            <div class="fareSmall">
                                <div class="small">280.000đ</div>
                            </div>
                        </div>
                    </div>
                    <div class="from-to-l">
                        <svg class="location-route-svg-l" xmlns="http://www.w3.org/2000/svg" width="14" height="74"
                            viewBox="0 0 14 74">
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
                                <div class="hour-l">{{ $route['time'] }}</div>
                                <div class="place-l">Ga {{ $route['departure_place'] }}</div>
                            </div>
                            <div>

                                <div class="svg-location">
                                    <svg class="location-route-svg-l2" xmlns="http://www.w3.org/2000/svg" width="100"
                                        height="50" viewBox="0 0 90 54">

                                        <path fill="none" stroke="#787878" stroke-linecap="round" stroke-width="3"
                                            stroke-dasharray="0 6" d="M8 37h80"></path>

                                        <g fill="none" stroke="#484848" stroke-width="3">
                                            <circle cx="3" cy="37" r="7" stroke="none"></circle>
                                            <circle cx="3" cy="37" r="5.5"></circle>
                                        </g>
                                        <path
                                            d="M90 30a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 96 35.9a5.953 5.953 0 0 0-6-5.891zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 90 39.95z"
                                            fill="#787878"></path>
                                    </svg>


                                    </svg>
                                </div>
                                <div class="duration-l">17h30m</div>
                            </div>
                            <div class="content-l to-l">
                                <div class="content-to-info-l">
                                    <div class="hour-l">{{ $route['arrival_time'] }} </div>
                                    <div class="place-l">Ga {{ $route['arrival_place'] }}</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-textSeat">
                        <div class="social-proof-l">7 người đặt trong 6 tiếng gần đây</div>
                        <div class="seat-available-train">Còn 23 chỗ trống</div>
                    </div>
                    <div class="container-action">
                        <div class="action-p">
                            <div class="action-l">
                                <button type="button" class="ant-btn btn-detail-l ant-btn-link-l"
                                    data-bs-toggle="collapse" data-bs-target="#ticket-detail-collapse-{{ $key }}"
                                    role="button" aria-expanded="false"
                                    aria-controls="ticket-detail-collapse-{{ $key }}">
                                    <span>Thông tin chi tiết 1</span>
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
                                    role="button" aria-expanded="false" aria-controls="ticket-step-collapse-{{ $key }}">
                                    <span class="text-chooseeTrip">Chọn chuyến</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="notify-trip-l">
            <div class="full-trip-l">
                <span>*</span>
                <p>Vé chặng thuộc chuyến 15:00 01-08-2024 Hà Nội - Đà Nẵng</p>
            </div>
            <div class="content-has-cop">
                <div class="nonePay">Không cần thanh toán trước</div>
            </div>



        </div>



        <div class="collapse ticket-step-collapse" id="ticket-step-collapse-{{ $key }}"
        data-bs-parent="#item-bus-{{ $key }}">
        <div class="steps-container-train">
        <div id="step-1-{{ $key }}" class="step-train step-active navigation-step navigation-step-active">
<div class="step-icon-train step-icon-n step-content2">1</div>
Chỗ mong muốn
</div>
<div id="step-2-{{ $key }}" class="step-train step-inactive navigation-step navigation-step-inactive">  <div class="step-icon-train step-icon-n step-content2">2</div>
Nhập thông tin</div>

<div id="step-3-{{ $key }}" class="step-train step-inactive navigation-step navigation-step-inactive"><div class="step-icon-train step-icon-n step-content2">3</div>
Thanh toán</div>
                </div>


        <div id="content-step-1-{{ $key }}" class="step-content" style="display: block;">

                <div class="card-body-train ">

                    <div id="step1-{{ $key }}" class="wizard-step-train active-train">


                        <div class="trust-message-train">
                            <p class="trust-message-text-train"><i class="fas fa-shield-alt mx-2"></i> Vexere cam kết
                                giữ đúng
                                chỗ
                                bạn đã chọn.</p>
                        </div>

                        <div class="coupon-container-train">
                            <div class="locomotive">
                                <div class="boxTrain"> </div>
                                <div class="textTrain">SE6</div>
                            </div>






                            <div class="wrap-coupon-train">
                                <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                                <button id="button-step-custom-1-{{ $key }}" class="navigation-button-custom" data-key="{{ $key }}" data-step="1">
                                    <div class="kNCupL-train">
                                        <div class="border-coupon-train ">
                                            <div class="flex-coupon-train">
                                                <div class="count text-center">
                                                    <div class="">1</div>
                                                </div>
                                                <div class="text-coupon-train">
                                                    <div class="coupon-exp-train">

                                                        NGỒI MỀM

                                                    </div>
                                                    <p class="text-coupon-train">50 chỗ - Từ 596k</p>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button>

                            </div>
                            <div class="wrap-coupon-train">
                                <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                                <button id="button-step-custom-2-{{ $key }}" class="navigation-button-custom" data-key="{{ $key }}" data-step="2">

                                    <div class="kNCupL-train">

                                        <div class="border-coupon-train">
                                            <div class="flex-coupon-train ">
                                                <div class="count text-center">
                                                    <div class="">2</div>
                                                </div>
                                                <div class="text-coupon-train">
                                                    <div class="coupon-exp-train">
                                                        Nằm khoang 4 </i>
                                                    </div>
                                                    <p class="text-coupon-train">17 chỗ - Từ 801k</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button>

                            </div>
                            <div class="wrap-coupon-train">
                                <input class="Coupon__HiddenInput-sc-1mhp588-4 cFDugh" value="FS060824VXR10">
                                <button id="button-step-custom-3-{{ $key }}" class="navigation-button-custom" data-key="{{ $key }}" data-step="3">

                                    <div class="kNCupL-train">
                                        <div class="border-coupon-train">
                                            <div class="flex-coupon-train ">
                                                <div class="count text-center">
                                                    <div class="">3</div>
                                                </div>
                                                <div class="text-coupon-train">
                                                    <div class="coupon-exp-train">
                                                        Nằm khoang 6 </i>
                                                    </div>
                                                    <p class="text-coupon-train">25 chỗ - Từ 801k</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button>

                            </div>





                        </div>

                    </div>
                    <div class="container-steps-train">
                        <div class="wrap-steps-train">
                            <div class="left-steps-train">
                                <div class="seat-groups-train">
                                    <div class="note-train">Chú thích</div>
                                    <div class="seat-info-train">
                                        <div class="seat-thumbnail seat-unavailable-train">
                                            <svg width="60" height="52" viewBox="0 0 60 52" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" style="width: 60px; height: 52px;">
                                                <rect x="0" y="12" width="6" height="20" rx="4" fill="#333"
                                                    stroke="#888" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="6" y="8" width="48" height="16" rx="3" fill="#333"
                                                    stroke="#888" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="6" y="24" width="48" height="16" rx="3" fill="#333"
                                                    stroke="#888" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="54" y="12" width="6" height="20" rx="4" fill="#333"
                                                    stroke="#888" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <path d="M6 44h48v4H6z" fill="#888"></path>
                                                <path d="M30 20l8 8m0-8l-8 8" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                        </div>
                                        <span class="seat-name-train">Không bán</span>
                                    </div>
                                    <div class="seat-info-train">
                                        <div class="seat-thumbnail seat-selected-train">
                                            <svg width="60" height="52" viewBox="0 0 60 52" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" style="width: 60px; height: 52px;">
                                                <rect x="0" y="12" width="6" height="20" rx="4" fill="#4CAF50"
                                                    stroke="#388E3C" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="6" y="8" width="48" height="16" rx="3" fill="#4CAF50"
                                                    stroke="#388E3C" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="6" y="24" width="48" height="16" rx="3" fill="#4CAF50"
                                                    stroke="#388E3C" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="54" y="12" width="6" height="20" rx="4" fill="#4CAF50"
                                                    stroke="#388E3C" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <path d="M6 44h48v4H6z" fill="#388E3C"></path>
                                                <path d="M25 28l6 6 12-12" stroke="#2E7D32" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                        </div>
                                        <span class="seat-name-train">Đang chọn</span>
                                    </div>
                                    <div class="seat-info-train">
                                        <div class="seat-thumbnail seat-discount-train" color="#fba442">
                                            <svg width="60" height="52" viewBox="0 0 60 52" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" style="width: 60px; height: 52px;">
                                                <rect x="0" y="12" width="6" height="20" rx="4" fill="#FFF"
                                                    stroke="#FFA500" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="6" y="8" width="48" height="16" rx="3" fill="#FFF"
                                                    stroke="#FFA500" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="6" y="24" width="48" height="16" rx="3" fill="#FFF"
                                                    stroke="#FFA500" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="54" y="12" width="6" height="20" rx="4" fill="#FFF"
                                                    stroke="#FFA500" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <path d="M6 44h48v4H6z" fill="#FFA500"></path>
                                            </svg>

                                        </div>
                                        <span class="seat-name-train">
                                            <div class="seat-name-group-train">CABIN ĐƠN</div>
                                            <div class="seat-original-train">
                                                <strong>315,000đ</strong>
                                                <span class="seat-fare-original-train">350,000đ</span>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="seat-info-train">
                                        <div class="seat-thumbnail seat-group-train" color="#ae70ff">
                                            <svg width="60" height="52" viewBox="0 0 60 52" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" style="width: 60px; height: 52px;">
                                                <rect x="0" y="12" width="6" height="20" rx="4" fill="#FFF"
                                                    stroke="#9C27B0" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="6" y="8" width="48" height="16" rx="3" fill="#FFF"
                                                    stroke="#9C27B0" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="6" y="24" width="48" height="16" rx="3" fill="#FFF"
                                                    stroke="#9C27B0" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <rect x="54" y="12" width="6" height="20" rx="4" fill="#FFF"
                                                    stroke="#9C27B0" stroke-width="1.5" stroke-linejoin="round"></rect>
                                                <path d="M6 44h48v4H6z" fill="#9C27B0"></path>
                                            </svg>

                                        </div>
                                        <span class="seat-name-train">
                                            <div class="seat-name-group-train">CABIN ĐÔI</div>
                                            <div class="seat-original-train">
                                                <strong>495,000đ</strong>
                                                <span class="seat-fare-original-train">550,000đ</span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>





                            <div class="right-steps-train">




                                <!-- <div class="collapse mt-3 border border-1 rounded-3 p-2" id="content1"> -->
                                <div id="content-step-custom-1-{{ $key }}" class="step-content-custom mt-3 border border-1 rounded-3 p-2" data-key="{{ $key }}">
                                    <div class="wrap-coach-train">
                                        <div class="coach-train">
                                            <table>
                                                <tbody>
                                                    <tr class="coach-row-train">
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
                                                    <tr class="coach-row-train">
                                                        <td class="seat">
                                                            <div class="modal-choose-chair-train"
                                                                class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>

                                                        </td>
                                                        <td class="seat">
                                                            <div class="modal-choose-chair-train"
                                                                class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="coach-train">
                                            <table>
                                                <tbody>
                                                    <!-- Row 1 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat-train">
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
                                                    <tr class="coach-row-train">
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Row 2 -->
                                                    <tr class="coach-row-train">
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                        <td class="seat-train">
                                                            <div class="Seat__SeatContainer-sc-6hr0u8-0 seat-container"
                                                                data-disabled="false" color="#ae70ff">
                                                                <svg width="48" height="32" viewBox="0 0 48 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 48px; height: 32px;">
                                                                    <rect x="0" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="4" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="6" y="16" width="36" height="12" rx="3"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="42" y="8" width="6" height="16" rx="4"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <path d="M6 28h36v4H6z" fill="#B8B8B8"></path>
                                                                    <path class="icon-selected-train"
                                                                        d="M24 10a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-1.5 6.5l-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M27 12l-1.5-1.5L24 12l-1.5-1.5L21 12l1.5 1.5L21 15l1.5 1.5L24 15l1.5-1.5L27 15l1.5-1.5L27 12z"
                                                                        fill="transparent"></path>
                                                                </svg>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>



                                </div>
                                <div id="content-step-custom-2-{{ $key }}" class="step-content-custom mt-3 border border-1 rounded-3 p-3" data-key="{{ $key }}">

                                    <div class="">
                                        <div class="shipSeat gap-3 mb-3">
                                            <div class="d-flex align-self-center fw-bold ">Khoang 1</div>
                                            <div class="bg-secondary-subtle p-4 align-self-center rounded">
                                                <div class=" d-flex gap-5 align-items-center">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 1</p>
                                                </div>
                                                <div class="d-flex gap-5 align-items-center

">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 2</p>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="shipSeat gap-3 mb-3">
                                            <div class="d-flex align-self-center fw-bold ">Khoang 2</div>
                                            <div class="bg-secondary-subtle p-4 align-self-center rounded">
                                                <div class=" d-flex gap-5 align-items-center">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 1</p>
                                                </div>
                                                <div class="d-flex gap-5 align-items-center">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 2</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="content-step-custom-3-{{ $key }}" class="step-content-custom mt-3 border border-1 rounded-3 p-3" data-key="{{ $key }}">
                                    <div class=" ">
                                        <div class="shipSeat gap-3 mb-3">
                                            <div class="d-flex align-self-center fw-bold ">Khoang 1</div>
                                            <div class="bg-secondary-subtle p-4 align-self-center rounded">
                                                <div class=" d-flex gap-5 align-items-center">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 1</p>
                                                </div>
                                                <div class="d-flex gap-5 align-items-center

">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 2</p>
                                                </div>
                                                <div class="d-flex gap-5 align-items-center
">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 3</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" shipSeat gap-3 mb-3">
                                            <div class="d-flex align-self-center fw-bold ">Khoang 2</div>
                                            <div class="bg-secondary-subtle p-4 align-self-center rounded">
                                                <div class=" d-flex gap-5 align-items-center">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 1</p>
                                                </div>
                                                <div class="d-flex gap-5 align-items-center

">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 2</p>
                                                </div>
                                                <div class="d-flex gap-5 align-items-center
">
                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <svg width="70" height="50" viewBox="0 0 28 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="width: 70px; height: 50px; transform: rotate(90deg); transform-origin: center;">
                                                        <rect x="2.75" y="2.75" width="22.5" height="34.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="5.75" y="27.75" width="16.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <path class="icon-selected-train"
                                                            d="M14 8.333A6.67 6.67 0 0 0 7.333 15 6.67 6.67 0 0 0 14 21.667 6.67 6.67 0 0 0 20.667 15 6.669 6.669 0 0 0 14 8.333zm-1.333 10L9.334 15l.94-.94 2.393 2.387 5.06-5.06.94.946-6 6z"
                                                            fill="transparent"></path>
                                                        <path class="icon-disabled"
                                                            d="M18.96 11.46l-1.42-1.42L14 13.59l-3.54-3.55-1.42 1.42L12.59 15l-3.55 3.54 1.42 1.42L14 16.41l3.54 3.55 1.42-1.42L15.41 15l3.55-3.54z"
                                                            fill="transparent"></path>
                                                    </svg>

                                                    <p>Tầng 3</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>




        </div>


        <div id="content-step-2-{{ $key }}" class="step-content">




                <!-- hehe -->
                <div class="card-body-train">
                    <div class="trust-message-train">
                        <p class="trust-message-text-train"><i class="fa-solid fa-circle-check mx-2"></i> Đừng
                            quên
                            tối ưu hóa theo giá <b class="text-success">ưu đãi đối tượng</b> bằng cách chọn đúng loại
                            hành khách
                        </p>
                    </div>
                    <div id="step1-{{ $key }}" class="wizard-step-train active-train">


                        <div class="content-information w-full gap-5">
                            <div class="information-item mt-3 ">
                                <h5>Thông tin hành khách</h5>
                                <div
                                    class="border rounded p-3 d-flex justify-content-center align-items-center gap-3 mt-3 mb-3">
                                    <i class="fa-solid fa-id-card"></i>
                                    Chọn nhanh từ danh sách đã lưu
                                </div>
                                <div class="d-flex mb-3 ">
                                    <select
                                        class="bg-custom-train me-auto p-2 text-primary border-0 fw-bold rounded-2 p-2">
                                        <option>Người lớn</option>
                                        <option>Trẻ em</option>
                                        <option>Người cao tuổi</option>
                                        <option>Sinh viên</option>
                                        <option>Đoàn viên công đoàn</option>
                                    </select>
                                </div>

                                <div class="d-flex flex-column train-width-train gap-3">
                                    <div class="input-train">
                                        <select class="form-select rounded-2" id="selectToa">
                                            <option value="">Toa 1</option>
                                            <option value="">Toa 2</option>
                                        </select>


                                    </div>


                                    <input class="rounded-2 px-2 py-2 border border-light-subtle " type="text"
                                        placeholder="Họ và tên (VD: NGUYEN VAN A)">
                                    <input class="rounded-2 px-2 py-2 border border-light-subtle " type="text"
                                        placeholder="Số CMND/Ngày sinh/Hộ chiếu">
                                </div>


                            </div>
                            <div class="information-item mt-3">
                                <h5>Thông tin liên hệ</h5>
                                <span>Hệ thống sẽ xác nhận đặt chỗ, hoàn tiền hoặc đổi lịch qua thông tin này </span>

                                <div class="container-contract-train mt-4">
                                    <div class="input-group  mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="flag-icon">🇻🇳</span> (+84)
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="phoneInput" value="0966105411">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary clear-btn" type="button"
                                                onclick="clearInput('phoneInput')">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </div>
                                        <label for="phoneInput" class="form-label placeholder-label">Số điện
                                            thoại</label>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" class="form-control" id="emailInput"
                                            value="nguyenvana@gmail.com">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary clear-btn" type="button"
                                                onclick="clearInput('emailInput')">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </div>
                                        <label for="emailInput" class="form-label placeholder-label">Email nhận thông
                                            tin về</label>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="idInput" value="08937466267184">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary clear-btn" type="button"
                                                onclick="clearInput('idInput')">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </div>
                                        <label for="idInput" class="form-label placeholder-label">Số CMND/Ngày sinh/Hộ
                                            chiếu</label>
                                    </div>
                                </div>
                            </div>



                        </div>




                    </div>
                </div>

        </div>



        <div id="content-step-3-{{ $key }}" class="step-content">



            <div class=" card-body-train bg-white">

                <div id="step1-{{ $key }}" class="wizard-step-train active-train">


                    <div class="d-flex justify-content-center m-2 ">
                        <p class="trust-message-text-train "><i class="fa-solid fa-address-book mx-2 "></i>Vé sẽ được
                            gửi qua:
                            <span class="text-primary">nguyennhuly@gmail.com</span>
                        </p>
                    </div>


                    <div class=" py-3 px-5">
                        <h5>Phương thức thanh toán</h5>
                    </div>
                    <div class="container-qr bg-white">

                        <div class="qrcode-container">
                            <span class="qrcode-label px-3 py-2">Mới</span>

                            <div class="d-flex">
                                <i class="fa-solid fa-qrcode fs-1 text-primary p-3"></i>
                                <div class="d-flex flex-column px-2 flex-grow-1">
                                    <b>Chuyển khoản bằng mã QR, hỗ trợ nhiều ví điện tử & hơn 42 ngân hàng</b>
                                    <div class="w-container-train">
                                        <span class="w-content-train bg-primary text-wrap my-2 px- py-1">+46</span>
                                    </div>
                                </div>
                            </div>

                            <div class="detail-box-train">
                                <span class="w-75 fw-light p-2">An toàn, tiết kiệm thời gian nhập thông tin, hạn chế sai
                                    sót</span>
                                <button class="w-25 py-2 mx-2 bg-primary rounded-2 border-0 text-light">Thử
                                    ngay</button>
                            </div>
                        </div>
                        <div class="qrcode-content">

                            <div class="qrcode-item my-3 ">
                                <div
                                    class=" row row-train d-flex align-items-center text-center border-bottom border-top pt-2 pb-1">
                                    <div class="col col-train d-flex justify-content-center item-abate">
                                        <img src="https://cdn.techinasia.com/data/images/be3b6924cfc96137896c8649dc890926.png"
                                            alt="" class="img-fluid-train">
                                    </div>
                                    <div class="item-col-train col-8 text-start">
                                        <b>Ví MoMo</b>
                                        <p class="fw-light">Điện thoại của bạn phải được cài đặt ứng dụng MoMo</p>
                                    </div>
                                    <div class="col col-train  d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>

                                <div
                                    class="row row-train d-flex align-items-center text-center border-bottom border-top pt-2 pb-1">
                                    <div class="col col-train d-flex justify-content-center item-abate">
                                        <img src="https://1.bp.blogspot.com/-n_jPjNl97nw/YIJ78WnloPI/AAAAAAAACks/xPjLQ2YpcXwyPf64C708UExQOrJitxHSgCNcBGAsYHQ/s2048/ShopeePay.png"
                                            alt="" class="img-fluid-train">
                                    </div>
                                    <div class=" item-col-train col-8 text-start">
                                        <b>Ví ShoppePay</b>
                                        <p class="fw-light">Điện thoại của bạn phải được cài đặt ứng dụng ShoppePay
                                            </br>
                                            <span class="text-success">Nhập mã SPPVEXERE08 tại ShoppePay - giảm
                                                10k</span> </br>
                                            <a class="text-primary" href="">Điều kiện sử dụng</a>
                                        </p>
                                    </div>
                                    <div class="col col-train d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>


                                <div
                                    class="row row-train d-flex align-items-center text-center border-bottom border-top pt-2 pb-1">
                                    <div class="col col-train d-flex justify-content-center item-abate">
                                        <img src="https://th.bing.com/th/id/OIP.pn3RUm1xk1HiAxWIgC6CIwAAAA?rs=1&pid=ImgDetMain"
                                            alt="" class="img-fluid-train">
                                    </div>
                                    <div class="item-col-train col-8 text-start">
                                        <b>Thanh toán bằng VNPay trên ứng dụng Mobile banking/Ví VNPay</b>
                                        <p class="fw-light">Thiết bị phải cài đặt ứng dụng Mobile banking hoặc Ví
                                            VNPay</br>
                                            <span class="text-success">Giảm 10K và giảm 30K khi nhập mã VNPAYVXR10
                                            </span> </br>
                                            <a class="text-primary" href="">Điều kiện sử dụng</a>
                                        </p>
                                    </div>
                                    <div class="col col-train  d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>

                                <div
                                    class="row row-train d-flex align-items-center text-center border-bottom border-top pt-2 pb-1">
                                    <div class="col col-train d-flex justify-content-center item-abate">
                                        <img src="https://cardtot.com/wp-content/uploads/2020/01/zalopay.png" alt=""
                                            class="img-fluid-train">
                                    </div>
                                    <div class="item-col-train col-8 text-start">
                                        <b>Ví ZaloPay</b>
                                        <p class="fw-light">Điện thoại của bạn phải được cài đặt ứng dụng ZaloPay</br>
                                            <span class="text-success">Giảm 15K và giảm 35K khi nhập mã ZLPVXR lần lượt
                                                cho đơn từ 400K và 1.000K</span> </br>
                                            <a class="text-primary" href="">Điều kiện sử dụng</a>
                                        </p>
                                    </div>
                                    <div class="col col-train  d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>


                                <div
                                    class="row row-train d-flex align-items-center text-center  border-bottom pt-2 pb-1 ">
                                    <div class="col col-train d-flex justify-content-center item-abate">
                                        <i class="fa-solid fa-credit-card text-primary"></i>
                                    </div>
                                    <div class="item-col-train col-8 text-start">
                                        <b>Thẻ thanh toán quốc tế</b>
                                        <p class="fw-light">Thẻ Visa, MasterCard, JCB</p>
                                    </div>
                                    <div class="col col-train  d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>

                                <div
                                    class="row row-train d-flex align-items-center text-center border-bottom border-top pt-2 pb-1 ">
                                    <div class="col col-train d-flex justify-content-center item-abate">
                                        <i class="fa-solid fa-qrcode text-primary"></i>
                                    </div>
                                    <div class="item-col-train col-8 text-start">
                                        <b>QR chuyển khoản/Ví điện tử</b>
                                        <p class="fw-light">Không cần nhập thông tin chính, Xác nhận thanh toán tức thì,
                                            nhanh chóng và ít sai sót</p>
                                        <div class="img-custom gap-2 mb-4">
                                            <img src="https://cdn.techinasia.com/data/images/be3b6924cfc96137896c8649dc890926.png"
                                                alt="" class="img-fluid-train">
                                            <img src="https://th.bing.com/th/id/R.d539c6a7401fe0134efb6bde9264dc13?rik=c7KyMzQxq3MgcQ&pid=ImgRaw&r=0"
                                                alt="" class="img-fluid-train">
                                            <img src="https://play-lh.googleusercontent.com/rNSXUqGnK-ljK6qUdUmy7h_sDrMOzZ1nPwAUAwshsmPaQuwNGn0Xwj-psgFrBSJOHg"
                                                alt="" class="img-fluid-train">
                                            <img src="https://inkythuatso.com/uploads/images/2021/12/logo-vib-inkythuatso-3-21-13-43-27.jpg"
                                                alt="" class="img-fluid-train">
                                            <img src="https://th.bing.com/th/id/OIP.zyrA1Yc325NGPWzN6rCBeQHaHa?rs=1&pid=ImgDetMain"
                                                alt="" class="img-fluid-train">
                                        </div>

                                    </div>

                                    <div class="col col-train d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>

                                <div
                                    class="row row-train d-flex align-items-center text-center  border-bottom pt-2 pb-1 ">
                                    <div class="col col-train d-flex justify-content-center item-abate">
                                        <i class="fa-solid fa-wallet text-primary "></i>
                                    </div>
                                    <div class="item-col-train col-8 text-start">
                                        <b>Thẻ ATM nội địa / Internet Banking</b>
                                        <p class="fw-light">Tài khoản phải có đăng ký Internet banking</p>
                                    </div>
                                    <div class="col col-train d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="request">
                        <div class="me-auto d-flex flex-column ">
                            <h5>Yêu cầu xuất hóa đơn</h5>
                            <p class="fw-light">Hỗ trợ miễn phí, dành cho đại diện doanh nghiệp</p>
                        </div>
                        <a href="#">Điền thông tin</a>
                    </div>

                    <div class="d-flex flex-column mb-3 px-3 pt-4  bg-white w-full ">
                        <div class="d-flex">
                            <p class="me-auto">Tổng cộng cho 1 người</p>
                            <span class="fw-bold">769.000 vnđ</span>
                        </div>
                        <button class="border-0 py-3 text-white fw-bold bg-primary">
                            Thanh toán bảo mật
                        </button>
                    </div>


                </div>

            </div>




        </div>


<div class="total-amount-train">
                <div class="left-total-amount-train">
                    <button onclick="navigateStep('previous', '{{ $key }}')"> Quay lại</button>
                </div>
                <div class="right-total-amount-train ">
                    <div class="text-total-amout"> <span> Tổng cộng: </span><span class="right-total-train">0đ</span>
                    </div>
                    <div>
                        <button  onclick="navigateStep('next', '{{ $key }}')">Tiếp tục <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse ticket-detail-collapse" id="ticket-detail-collapse-{{ $key }}"
            data-bs-parent="#item-bus-{{ $key }}">
            <hr>

            <div class="container ticket-detail-container ps-3 pe-3">
                <ul class="nav-items nav nav-pills mb-1 pills-ticket-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active-train" id="coupon-tab-{{ $key }}" data-bs-toggle="pill"
                            data-bs-target="#coupon-{{ $key }}" type="button" role="tab"
                            aria-controls="coupon-{{ $key }}" aria-selected="true">Các loại ghế (3)
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pickup-tab-{{ $key }}" data-bs-toggle="pill"
                            data-bs-target="#pickup-{{ $key }}" type="button" role="tab"
                            aria-controls="pickup-{{ $key }}" aria-selected="false">Tiện ích (5)
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="rating-tab-{{ $key }}" data-bs-toggle="pill"
                            data-bs-target="#rating-{{ $key }}" type="button" role="tab"
                            aria-controls="rating-{{ $key }}" aria-selected="false">Đánh
                            giá</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="thumb-tab-{{ $key }}" data-bs-toggle="pill"
                            data-bs-target="#image-{{ $key }}" type="button" role="tab" aria-controls="image-{{ $key }}"
                            aria-selected="false">Hình
                            ảnh</button>
                    </li>

                </ul>
                <div class="tab-content ticket-detail-contentTab">
                    <div class="tab-pane fade show active-train coupon-tab" id="coupon-{{ $key }}" role="tabpanel"
                        aria-labelledby="coupon-tab" tabindex="0"">
                        <div class=" d-flex gap-2 ">
                        <div class="container-select-train">
                        <div class="wrap-couponTrain">
                            <button class="wrap-coupon btn border py-2 " data-btn-id="btn1"
                                onclick="highlightNumbers([1, 2, 3], 'btn1')">
                                <p class="mb-0">Ghế Mềm (29)</p>
                            </button>

                        </div>
                        <div class="wrap-couponTrain">

                            <button class="wrap-coupon btn border py-2 " data-btn-id="btn2"
                                onclick="highlightNumbers([4, 5, 6], 'btn2')">
                                <p class="mb-0">Giường Khoang 4 (18)</p>
                            </button>

                        </div>
                        <div class="wrap-couponTrain">

                            <button class="wrap-coupon btn border py-2 " data-btn-id="btn3"
                                onclick="highlightNumbers([7, 8, 9, 10, 11], 'btn3')">
                                <p class="mb-0">Giường Khoang 6 (73)</p>
                            </button>

                        </div>
                        <div class="wrap-couponTrain">

                            <button class="wrap-coupon btn border py-2 " data-btn-id="btn3"
                                onclick="highlightNumbers([7, 8, 9, 10, 11], 'btn3')">
                                <p class="mb-0">Giường Khoang 6 (73)</p>
                            </button>

                        </div>
                        <div class="wrap-couponTrain">

                            <button class="wrap-coupon btn border py-2 " data-btn-id="btn3"
                                onclick="highlightNumbers([7, 8, 9, 10, 11], 'btn3')">
                                <p class="mb-0">Giường Khoang 6 (73)</p>
                            </button>

                        </div>

                    </div>
                </div>



                <!-- ---------- -->
                <div class="content-train pt-4">
                    <h4 class="location_trainCar fw-bold">Vị trí toa (2/11)</h4>
                    <div class="d-flex align-items-center gap-2 pt-4">

                        <div class="locomotive2">
                            <div class="box"> </div>
                            <div class="text">SE6</div>
                        </div>
                        <div class="train-items d-flex ">
                            <p class="mb-0 number">1</p>
                            <p class="mb-0 number">2</p>
                            <p class="mb-0 number">3</p>
                            <p class="mb-0 number">4</p>
                            <p class="mb-0 number">5</p>
                            <p class="mb-0 number">6</p>
                            <p class="mb-0 number">7</p>
                            <p class="mb-0 number">8</p>
                            <p class="mb-0 number">9</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade pickup-tab" id="pickup-{{ $key }}" role="tabpanel" aria-labelledby="pickup-tab"
                tabindex="1">
                <div class="pt-2">
                    <div class="row-utility">
                        <div class="icon-text">
                            <i class="fa-regular fa-snowflake"></i>
                            <span>Điều hòa</span>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-wifi"></i>
                            <span>Free wifi</span>
                        </div>
                        <div class="icon-text">
                            <i class="fa fa-couch" aria-hidden="true"></i>
                            <span>Điều chỉnh ghế ngồi</span>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-plug"></i>
                            <span>Ổ cắm điện</span>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-restroom"></i>
                            <span>Nhà vệ sinh</span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="tab-pane fade rating-tab" id="rating-{{ $key }}" role="tabpanel" aria-labelledby="rating-tab"
                tabindex="2">
                <div class="d-flex align-items-center">
                    <div class="container-star d-flex align-items-center rating-info">
                        <button class="btn btn-primary p-1"><i class="fa-solid fa-star"></i>
                            4.5</button>
                        <div class="star-rating " style="color: rgb(255, 199, 0);">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="text-wrap">73 Đánh giá</div>
                    </div>
                </div>
                <div class="d-flex flex-column mt-2 mb-2">
                    <div class="row d-flex w-100 ps-2 pe-2">
                        <div class="col-sm-12 col-md-4 ps-2 pe-2">
                            <div class="card item-card-rating">
                                <div class=" p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">An toàn</div>
                                        <div class="fw-bold">3.6</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 ps-2 pe-2">
                            <div class="card item-card-rating">
                                <div class=" p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">An toàn</div>
                                        <div class="fw-bold">3.6</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 ps-2 pe-2">
                            <div class="card item-card-rating">
                                <div class=" p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">An toàn</div>
                                        <div class="fw-bold">3.6</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex w-100 ps-2 pe-2">
                        <div class="col-sm-12 col-md-4 ps-2 pe-2">
                            <div class="card item-card-rating">
                                <div class=" p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">An toàn</div>
                                        <div class="fw-bold">3.6</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 ps-2 pe-2">
                            <div class="card item-card-rating">
                                <div cl p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">An toàn</div>
                                        <div class="fw-bold">3.6</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 ps-2 pe-2">
                            <div class="card item-card-rating">
                                <div cl p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="fw-bold">An toàn</div>
                                        <div class="fw-bold">3.6</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-pills mb-1 pill-rating-filter" role="tablist">
                    <li class="nav-item filter-rating" role="presentation">
                        <button class="nav-link active-train" data-bs-toggle="pill">Tất cả
                            (100)</button>
                    </li>
                    <li class="nav-item filter-rating" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill">Có nhận xét
                            (100)</button>
                    </li>
                    <li class="nav-item filter-rating" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill">Có hình ảnh
                            (100)</button>
                    </li>
                    <li class="nav-item filter-rating" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill">5<i class="fa-solid fa-star"></i>(12)</button>
                    </li>
                    <li class="nav-item filter-rating" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill">4<i class="fa-solid fa-star"></i>(12)</button>
                    </li>
                    <li class="nav-item filter-rating" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill">3<i class="fa-solid fa-star"></i>(12)</button>
                    </li>
                    <li class="nav-item filter-rating" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill">2<i class="fa-solid fa-star"></i>(12)</button>
                    </li>
                    <li class="nav-item filter-rating" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill">1<i class="fa-solid fa-star"></i>(12)</button>
                    </li>
                </ul>

                <div class="list-group w-100 list-gr-review">
                    <div class="list-group-item list-group-item-action p-3" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex user-review">
                                <img class="avatar-review"
                                    src="https://bizweb.dktcdn.net/100/303/962/files/87126502-2509242206005371-2073523065622364160-n-f697e400-e8b2-4bb1-9698-d00b50b2d9c3.jpg?v=1627804121650"
                                    alt="anh-dai-dien" srcset="">
                                <div class="d-flex flex-column mt-1 ms-1">
                                    <h6 class="mb-1">List group item heading</h6>
                                    <div class="d-flex align-items-center star-rating" style="color: rgb(255, 199, 0);">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">The single cabin was nice. The bed was a little short,
                            but it was wide and pleasant. Each cabin was provided with bottled
                            water, wet wipes and blankets. The bed was clean and the staff was very
                            friendly, so I had a great experience.</p>
                        <div class="d-flex list-img-review flex-row">
                            <img class="thumb-img-review"
                                src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/6539305fb14952972dabefd10d4402b3.jpg"
                                alt="thumb-1">
                            <img class="thumb-img-review"
                                src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/anh-gai-xinh-1-17.jpg"
                                alt="thumb-1">
                        </div>

                        <div class="d-flex align-items-center">
                            <small class="">Đã đi ngày 29/07/2024</small>
                            <div class="item-check-review ms-1">
                                <i class="fa-solid fa-ticket"></i>
                                <small>Đã mua vé</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action p-3" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex user-review">
                                <img class="avatar-review"
                                    src="https://bizweb.dktcdn.net/100/303/962/files/87126502-2509242206005371-2073523065622364160-n-f697e400-e8b2-4bb1-9698-d00b50b2d9c3.jpg?v=1627804121650"
                                    alt="anh-dai-dien" srcset="">
                                <div class="d-flex flex-column mt-1 ms-1">
                                    <h6 class="mb-1">List group item heading</h6>
                                    <div class="d-flex align-items-center star-rating" style="color: rgb(255, 199, 0);">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">The single cabin was nice. The bed was a little short,
                            but it was wide and pleasant. Each cabin was provided with bottled
                            water, wet wipes and blankets. The bed was clean and the staff was very
                            friendly, so I had a great experience.</p>
                        <div class="d-flex list-img-review flex-row">
                            <img class="thumb-img-review"
                                src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/6539305fb14952972dabefd10d4402b3.jpg"
                                alt="thumb-1">
                            <img class="thumb-img-review"
                                src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/anh-gai-xinh-1-17.jpg"
                                alt="thumb-1">
                        </div>

                        <div class="d-flex align-items-center">
                            <small class="">Đã đi ngày 29/07/2024</small>
                            <div class="item-check-review ms-1">
                                <i class="fa-solid fa-ticket"></i>
                                <small>Đã mua vé</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action p-3" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex user-review">
                                <img class="avatar-review"
                                    src="https://bizweb.dktcdn.net/100/303/962/files/87126502-2509242206005371-2073523065622364160-n-f697e400-e8b2-4bb1-9698-d00b50b2d9c3.jpg?v=1627804121650"
                                    alt="anh-dai-dien" srcset="">
                                <div class="d-flex flex-column mt-1 ms-1">
                                    <h6 class="mb-1">List group item heading</h6>
                                    <div class="d-flex align-items-center star-rating" style="color: rgb(255, 199, 0);">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">The single cabin was nice. The bed was a little short,
                            but it was wide and pleasant. Each cabin was provided with bottled
                            water, wet wipes and blankets. The bed was clean and the staff was very
                            friendly, so I had a great experience.</p>
                        <div class="d-flex list-img-review flex-row">
                            <img class="thumb-img-review"
                                src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/6539305fb14952972dabefd10d4402b3.jpg"
                                alt="thumb-1">
                            <img class="thumb-img-review"
                                src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/anh-gai-xinh-1-17.jpg"
                                alt="thumb-1">
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="">Đã đi ngày 29/07/2024</small>
                            <div class="item-check-review ms-1">
                                <i class="fa-solid fa-ticket"></i>
                                <small>Đã mua vé</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade image-tab" id="image-{{ $key }}" role="tabpanel" aria-labelledby="image-tab"
                tabindex="3">
                <div class="d-flex flex-column w-100 h-100 m-2">
                    <div class="row" id="slider">
                        <div class="col-md-12">
                            <div id="myCarousel" class="carousel slide">
                                <div class="carousel-inner">

                                </div>

                                <!-- Controls-->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="row slide-trains">
                        <div class="col-md-12" id="slider-thumbs">
                            <ul class="list-inline listImg-train">
                                <li>
                                    <a id="carousel-thumb-0" class="selected img-train">
                                        <img src="https://i.ytimg.com/vi/59QlUqt2c_Y/maxresdefault.jpg;text=1">
                                    </a>
                                </li>
                                <li>
                                    <a id="carousel-thumb-1" class="img-train">
                                        <img src="https://i.ytimg.com/vi/ZuTXtYiNmBE/maxresdefault.jpg;text=2">
                                    </a>
                                </li>
                                <li>
                                    <a id="carousel-thumb-2" class="selected img-train">
                                        <img src="https://i.ytimg.com/vi/rCtX_s1odhw/maxresdefault.jpg;text=3">
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
</div>

</div>
</div>


<script>
let currentStep = 1;
let currentKey = ''; // Biến để lưu trữ giá trị key hiện tại

function navigateStep(direction, key) {
    if (currentKey !== key) {
        // Nếu key thay đổi, đặt lại bước hiện tại về 1
        currentStep = 1;
        currentKey = key;
    }

    // Ẩn nội dung bước hiện tại
    let currentContent = document.getElementById(`content-step-${currentStep}-${currentKey}`);
    if (currentContent) {
        currentContent.style.display = 'none';
    }

    let currentStepElement = document.getElementById(`step-${currentStep}-${currentKey}`);
    if (currentStepElement) {
        currentStepElement.classList.remove('navigation-step-active');
        currentStepElement.classList.add('navigation-step-inactive');
    }

    // Cập nhật bước hiện tại
    if (direction === 'next' && currentStep < 3) {
        currentStep++;
    } else if (direction === 'previous' && currentStep > 1) {
        currentStep--;
    }

    // Hiển thị nội dung của bước mới
    let newContent = document.getElementById(`content-step-${currentStep}-${currentKey}`);
    if (newContent) {
        newContent.style.display = 'block';
    }

    let newStepElement = document.getElementById(`step-${currentStep}-${currentKey}`);
    if (newStepElement) {
        newStepElement.classList.add('navigation-step-active');
        newStepElement.classList.remove('navigation-step-inactive');
    }
}
</script>




<script>

function toggleCustomContent(key, step) {
    const button = document.getElementById(`button-step-custom-${step}-${key}`);
    const content = document.getElementById(`content-step-custom-${step}-${key}`);

    // Lấy tất cả các nội dung bước và nút cho bài mới
    const allContents = document.querySelectorAll(`.step-content-custom[data-key="${key}"]`);
    const allButtons = document.querySelectorAll(`.navigation-button-custom[data-key="${key}"]`);

    // Ẩn tất cả các nội dung
    allContents.forEach(c => c.classList.remove('step-content-custom-show'));
    // Làm tất cả các nút không hoạt động
    allButtons.forEach(b => b.classList.remove('navigation-button-custom-active'));

    if (!content.classList.contains('step-content-custom-show')) {
        content.classList.add('step-content-custom-show');
        button.classList.add('navigation-button-custom-active');
    } else {
        content.classList.remove('step-content-custom-show');
        button.classList.remove('navigation-button-custom-active');
    }
}

// Thêm sự kiện click cho tất cả các nút
document.querySelectorAll('.navigation-button-custom').forEach(button => {
    button.addEventListener('click', () => {
        const key = button.getAttribute('data-key');
        const step = button.getAttribute('data-step');
        toggleCustomContent(key, step);
    });
});

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>

function highlightNumbers(indices, selectedButtonId) {
    var numbers = document.querySelectorAll('.number');
    numbers.forEach(function(num) {
        num.classList.remove('activetrain');
    });

    indices.forEach(function(index) {
        if (index > 0 && index <= numbers.length) {
            numbers[index - 1].classList.add('activetrain');
        }
    });

    var buttons = document.querySelectorAll('.btn');
    buttons.forEach(function(btn) {
        if (btn.getAttribute('data-btn-id') === selectedButtonId) {
            btn.classList.add('button-active');
            btn.classList.remove('button-default');
        } else {
            btn.classList.add('button-default');
            btn.classList.remove('button-active');
        }
    });
}


function clearInput(inputId) {
    document.getElementById(inputId).value = '';
}


document.addEventListener('DOMContentLoaded', function() {
    const detailButtons = document.querySelectorAll('.btn-detail-l');
    const bookingButtons = document.querySelectorAll('.btn-booking-l');

    function hideAll() {
        // Ẩn tất cả các phần collapse
        document.querySelectorAll('.collapse').forEach(collapse => {
            collapse.classList.remove('show');
        });
    }

    detailButtons.forEach((button) => {
        button.addEventListener('click', function() {
            // Ẩn tất cả các phần trước
            hideAll();

            // Mở phần "Thông tin chi tiết" tương ứng
            const targetDetail = document.querySelector(button.dataset.bsTarget);
            if (!targetDetail.classList.contains('show')) {
                targetDetail.classList.add('show');
            }
        });
    });

    bookingButtons.forEach((button) => {
        button.addEventListener('click', function() {
            // Ẩn tất cả các phần trước
            hideAll();

            // Mở phần "Chọn chuyến" tương ứng
            const targetStep = document.querySelector(button.dataset.bsTarget);
            if (!targetStep.classList.contains('show')) {
                targetStep.classList.add('show');
            }
        });
    });
});
</script>
</script>
