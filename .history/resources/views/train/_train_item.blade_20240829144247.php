<div id="item-train-{{ $key }}">
    <div class="container-l">
        <div class="ticket-container-l">
            <div class="ticket-body-l">
                <div class="ticket-image-l">
                    <div class="d-flex align-items-center justify-content-center border border-light rounded-circle">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/logo_dsvn.svg" alt="logo_dsvn.svg">
                    </div>

                    {{-- <img class="operator-l" src="{{ $route['company']['images'][0]['files']['1000x600'] }}"
                    alt="Đình Nhân"> --}}
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
                                <div class="hour-l">{{ $route['time'] }}</div>
                                <div class="place-l">Ga {{ $route['departure_place'] }}</div>
                            </div>
                            <div>

                                <div class="svg-location">
                                <svg class="location-route-svg-l2" xmlns="http://www.w3.org/2000/svg" width="100" height="50" viewBox="0 0 90 54">

                                    <path fill="none" stroke="#787878" stroke-linecap="round" stroke-width="3" stroke-dasharray="0 6" d="M8 37h80"></path>

                                    <g fill="none" stroke="#484848" stroke-width="3">
                                        <circle cx="3" cy="37" r="7" stroke="none"></circle>
                                        <circle cx="3" cy="37" r="5.5"></circle>
                                    </g>
                                    <path d="M90 30a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 96 35.9a5.953 5.953 0 0 0-6-5.891zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 90 39.95z" fill="#787878"></path>
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
                            <div class="text-date-arrival-time-l-r">
                                <span class="text-date-arrival-time-l">
                                    ({{ \Carbon\Carbon::parse($route['arrival_date'])->format('d/m') }})
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="container-textSeat">
                        <div class="social-proof-l">7 người đặt trong 6 tiếng gần đây</div>
                        <div class="seat-available">Còn 23 chỗ trống</div>
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
            <div class="action-l2">
                <button type="button" class="ant-btn btn-detail-l ant-btn-link-l" data-bs-toggle="collapse"
                    data-bs-target="#ticket-detail-collapse-{{ $key }}" role="button" aria-expanded="false"
                    aria-controls="ticket-detail-collapse-{{ $key }}">
                    <span>Thông tin chi tiết 1</span>
                    <i aria-label="icon: caret-down" class="anticon anticon-caret-down">
                        <svg viewBox="0 0 1024 1024" focusable="false" class="" data-icon="caret-down" width="1em"
                            height="1em" fill="currentColor" aria-hidden="true">
                            <path
                                d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                            </path>
                        </svg>
                    </i>
                    <i aria-label="icon: caret-up" class="anticon anticon-caret-up"><svg viewBox="0 0 1024 1024"
                            class="" data-icon="caret-up" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true" focusable="false">
                            <path
                                d="M858.9 689L530.5 308.2c-9.4-10.9-27.5-10.9-37 0L165.1 689c-12.2 14.2-1.2 35 18.5 35h656.8c19.7 0 30.7-20.8 18.5-35z">
                            </path>
                        </svg></i>
                </button>
                <button data-tracking-event="selected_route" type="button" class="ant-btn btn-booking-l"
                    data-bs-toggle="collapse" data-bs-target="#ticket-step-collapse-{{ $key }}" role="button"
                    aria-expanded="false" aria-controls="ticket-step-collapse-{{ $key }}">
                    <span class="text-chooseeTrip">Chọn chuyến</span>
                </button>
            </div>

        </div>



        <div id="content-step-1" class="step-content-detail " style="display:block;">
            <div class="collapse ticket-step-collapse" id="ticket-step-collapse-{{ $key }}"
                data-bs-parent="#item-bus-{{ $key }}">
                <div class="steps-container">
                    <div class="step step-active" id="step-1">
                        <div class="step-icon step-icon-new">1</div>
                        Chỗ mong muốn
                    </div>
                    <div class="step step-inactive" id="step-2">
                        <div class="step-icon step-icon-2 step-content2">2</div>
                        Nhập thông tin
                    </div>
                    <div class="step step-inactive" id="step-3">
                        <div class="step-icon step-icon-2 step-content2">3</div>
                        Thanh toán
                    </div>
                </div>
                <!--  -->
             
            </div>

        </div>


        <div id="content-step-2" class="step-content-detail ">
            <div class="collapse ticket-step-collapse" id="ticket-step-collapse-{{ $key }}"
                data-bs-parent="#item-bus-{{ $key }}">

                <div class="steps-container">
                    <div class="step step-active" id="step-1">
                        <div class="step-icon step-icon-2 step-content2">1</div>
                        Chỗ mong muốn
                    </div>
                    <div class="step step-inactive" id="step-2">
                        <div class="step-icon step-icon-new">2</div>
                        Nhập thông tin
                    </div>
                    <div class="step step-inactive" id="step-3">
                        <div class=" step-icon step-content2">3</div>
                        Thanh toán
                    </div>
                </div>

                <!-- hehe -->
                <div class="card card-body card-body-new">
                    <div class="trust-message">
                        <p class="trust-message-text"><i class="fa-solid fa-circle-check mx-2"
                                style="color: #00b315;"></i> Đừng
                            quên
                            tối ưu hóa theo giá <b class="text-success">ưu đãi đối tượng</b> bằng cách chọn đúng loại
                            hành khách
                        </p>
                    </div>
                    <div id="step1-{{ $key }}" class="wizard-step active">


                        <div class="contentInformation w-full gap-5">
                            <div class="informationItem mt-3 ">
                                <h5>Thông tin hành khách</h5>
                                <div
                                    class="border rounded p-3 d-flex justify-content-center align-items-center gap-3 mt-3 mb-3">
                                    <i class="fa-solid fa-id-card"></i>
                                    Chọn nhanh từ danh sách đã lưu
                                </div>
                                <div class="d-flex mb-3 ">
                                    <select class="bgCustom me-auto p-2 text-primary border-0 fw-bold rounded-2">
                                        <option>Người lớn</option>
                                        <option>Trẻ em</option>
                                        <option>Người cao tuổi</option>
                                        <option>Sinh viên</option>
                                        <option>Đoàn viên công đoàn</option>
                                    </select>
                                    <p class="text-primary fw-bold">Thu gọn</p>
                                </div>

                                <div class="d-flex flex-column gap-3">
                                    <div class="input-group">
                                        <!-- Thẻ select -->
                                        <select class="form-select rounded-2" id="selectToa">
                                            <option value="">Toa 1</option>
                                            <option value="">Toa 2</option>
                                        </select>

                                        <!-- Nhãn giữ chỗ -->
                                        <label for="selectToa" class="form-label placeholder-label">Chọn toa</label>
                                    </div>


                                    <input class="rounded-2 px-2 py-2 border border-light-subtle " type="text"
                                        placeholder="Họ và tên (VD: NGUYEN VAN A)">
                                    <input class="rounded-2 px-2 py-2 border border-light-subtle " type="text"
                                        placeholder="Số CMND/Ngày sinh/Hộ chiếu">
                                </div>


                            </div>
                            <div class="informationItem mt-3">
                                <h5>Thông tin liên hệ</h5>
                                <span>Hệ thống sẽ xác nhận đặt chỗ, hoàn tiền hoặc đổi lịch qua thông tin này </span>

                                <div class="container mt-4">
                                    <!-- Ô nhập số điện thoại -->
                                    <div class="input-group mb-4">
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

                                    <!-- Ô nhập email -->
                                    <div class="input-group mb-4">
                                        <input type="email" class="form-control" id="emailInput"
                                            value="nguyennhuly08122004@gmail.com">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary clear-btn" type="button"
                                                onclick="clearInput('emailInput')">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </div>
                                        <label for="emailInput" class="form-label placeholder-label">Email nhận thông
                                            tin về</label>
                                    </div>

                                    <!-- Ô nhập CMND/Ngày sinh/Hộ chiếu -->
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


                            <div class="modal fade" id="exampleModal-{{ $key }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-new">
                                    <div class="modal-content">
                                        <div class="wrap-content">
                                            <h6 class="modal-title fs-5" id="exampleModalLabel-{{ $key }}">Mã
                                                giường</h6>
                                            <button type="button" class="btn-close btn-modal-content"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

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
                                            <div class="step-title ">Điểm Đón Trả</div>
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

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1-{{ $key }}">
                                                    <label class="form-check-label-title" for="-{{ $key }}">
                                                        19:00: Nội thành Tp. Đà Nẵng
                                                    </label>
                                                    <p class="text-form-check-label-t">Miễn phí - Vui lòng nhập địa chỉ
                                                        cụ thể
                                                        muốn được trung chuyển</p>
                                                    <p class="text-form-check-label-b">Đón tận nơi tại Thành phố Đà Nẵng
                                                    </p>
                                                    <b><i class="fa-solid fa-location-dot"></i> Đà Nẵng, Đà Nẵng</b>
                                                    <textarea id="transferAddress-{{ $key }}"
                                                        placeholder="Nhập địa chỉ trung chuyển" class="ant-input"
                                                        style="border: 1px solid rgb(192, 192, 192); display: none;"></textarea>
                                                </div>
                                                <div class="form-check item point_id-1">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2-{{ $key }}" checked>
                                                    <label class="form-check-label-title"
                                                        for="flexRadioDefault2-{{ $key }}">
                                                        19:30: Văn Phòng Đà Nẵng
                                                    </label>
                                                    <b><i class="fa-solid fa-location-dot"></i> 70 Hoàng Văn Thái,
                                                        Phường Hòa
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
                                                    <b><i class="fa-solid fa-location-dot"></i> 70 Hoàng Văn Thái,
                                                        Phường Hòa
                                                        Minh, Liên Chiểu, Đà Nẵng </b>
                                                </div>
                                                <div class="form-check  item point_id-1">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault2" id="flexRadioDefault4-{{ $key }}">
                                                    <label class="form-check-label-title"
                                                        for="flexRadioDefault4-{{ $key }}">
                                                        19:00: Nội thành Tp. Đà Nẵng
                                                    </label>
                                                    <p class="text-form-check-label-t">Miễn phí - Vui lòng nhập địa chỉ
                                                        cụ thể
                                                        muốn được trung chuyển</p>
                                                    <p class="text-form-check-label-b">Đón tận nơi tại Thành phố Đà Nẵng
                                                    </p>
                                                    <b><i class="fa-solid fa-location-dot"></i> Đà Nẵng, Đà Nẵng</b>
                                                    <textarea id="transferAddress1--{{ $key }}"
                                                        placeholder="Nhập địa chỉ trung chuyển" class="ant-input"
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
                                <button onclick="navigateStep('previous')"> Quay lại</button>
                            </div>
                            <div class="right-total-amount ">
                                <div class="text-total-amout"> <span> Tổng cộng: </span><span
                                        class="right-total">0đ</span></div>
                                <div>
                                    <button onclick="navigateStep('next')">Tiếp tục <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>


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
                        <button class="nav-link active" id="coupon-tab-{{ $key }}" data-bs-toggle="pill"
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
                    <div class="tab-pane fade show active coupon-tab" id="coupon-{{ $key }}" role="tabpanel"
                        aria-labelledby="coupon-tab" tabindex="0"">
                        <div class=" d-flex gap-2">
                        <div class="coupon-container">
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
                                <p class="mb-0 number">10</p>
                                <p class="mb-0 number">11</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade pickup-tab" id="pickup-{{ $key }}" role="tabpanel"
                    aria-labelledby="pickup-tab" tabindex="1">
                    <div class=" pt-2">
                        <div class="row-t">

                            <div class="icon-text">
                                <i class="fa-regular fa-snowflake"></i>
                                <p>Điều hòa</p>
                            </div>


                            <div class="icon-text">
                                <i class="fa-solid fa-wifi"></i>
                                <p>Free wifi</p>
                            </div>


                            <div class="icon-text">
                                <i class="fa fa-couch" aria-hidden="true"></i>
                                <p>Điều chỉnh ghế ngồi</p>
                            </div>



                            <div class="icon-text">
                                <i class="fa-solid fa-plug"></i>
                                <p>Ổ cắm điện</p>
                            </div>


                            <div class="icon-text">
                                <i class="fa-solid fa-restroom"></i>
                                <p>Nhà vệ sinh</p>
                            </div>



                        </div>
                    </div>
                </div>



                <div class="tab-pane fade rating-tab" id="rating-{{ $key }}" role="tabpanel"
                            aria-labelledby="rating-tab" tabindex="2">
                            <div class="d-flex align-items-center">
                                <div class="container-star d-flex align-items-center rating-info">
                                    <button class="btn btn-primary p-1"><i class="fa-solid fa-star"></i>
                                        4.5</button>
                                    <div class="star-rating "
                                        style="color: rgb(255, 199, 0);">
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
                                            <div class="card-body p-0">
                                                <div class="d-flex justify-content-between">
                                                    <div class="fw-bold">An toàn</div>
                                                    <div class="fw-bold">3.6</div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        aria-label="Basic example" style="width: 50%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                        <div class="card item-card-rating">
                                            <div class="card-body p-0">
                                                <div class="d-flex justify-content-between">
                                                    <div class="fw-bold">An toàn</div>
                                                    <div class="fw-bold">3.6</div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        aria-label="Basic example" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                        <div class="card item-card-rating">
                                            <div class="card-body p-0">
                                                <div class="d-flex justify-content-between">
                                                    <div class="fw-bold">An toàn</div>
                                                    <div class="fw-bold">3.6</div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        aria-label="Basic example" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex w-100 ps-2 pe-2">
                                    <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                        <div class="card item-card-rating">
                                            <div class="card-body p-0">
                                                <div class="d-flex justify-content-between">
                                                    <div class="fw-bold">An toàn</div>
                                                    <div class="fw-bold">3.6</div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        aria-label="Basic example" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                        <div class="card item-card-rating">
                                            <div class="card-body p-0">
                                                <div class="d-flex justify-content-between">
                                                    <div class="fw-bold">An toàn</div>
                                                    <div class="fw-bold">3.6</div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        aria-label="Basic example" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                        <div class="card item-card-rating">
                                            <div class="card-body p-0">
                                                <div class="d-flex justify-content-between">
                                                    <div class="fw-bold">An toàn</div>
                                                    <div class="fw-bold">3.6</div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        aria-label="Basic example" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-pills mb-1 pill-rating-filter" role="tablist">
                                <li class="nav-item filter-rating" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="pill">Tất cả
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
                                    <button class="nav-link" data-bs-toggle="pill">5<i
                                            class="fa-solid fa-star"></i>(12)</button>
                                </li>
                                <li class="nav-item filter-rating" role="presentation">
                                    <button class="nav-link" data-bs-toggle="pill">4<i
                                            class="fa-solid fa-star"></i>(12)</button>
                                </li>
                                <li class="nav-item filter-rating" role="presentation">
                                    <button class="nav-link" data-bs-toggle="pill">3<i
                                            class="fa-solid fa-star"></i>(12)</button>
                                </li>
                                <li class="nav-item filter-rating" role="presentation">
                                    <button class="nav-link" data-bs-toggle="pill">2<i
                                            class="fa-solid fa-star"></i>(12)</button>
                                </li>
                                <li class="nav-item filter-rating" role="presentation">
                                    <button class="nav-link" data-bs-toggle="pill">1<i
                                            class="fa-solid fa-star"></i>(12)</button>
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
                                                <div class="d-flex align-items-center star-rating"
                                                    style="color: rgb(255, 199, 0);">
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
                                                <div class="d-flex align-items-center star-rating"
                                                    style="color: rgb(255, 199, 0);">
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
                                                <div class="d-flex align-items-center star-rating"
                                                    style="color: rgb(255, 199, 0);">
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
                <div class="tab-pane fade image-tab" id="image-{{ $key }}" role="tabpanel"
                            aria-labelledby="image-tab" tabindex="3">
                            <div class="d-flex flex-column w-100 h-100 m-2">
                                <div class="row" id="slider">
                                    <div class="col-md-12">
                                        <div id="myCarousel" class="carousel slide">
                                            <div class="carousel-inner">

                                            </div>

                                            <!-- Controls-->
                                            <a class="left carousel-control" href="#myCarousel" role="button"
                                                data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"
                                                    aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" role="button"
                                                data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"
                                                    aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="row slide-trains">
                                    <div class="col-md-12" id="slider-thumbs">
                                        <ul class="list-inline">
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
                                                <a id="carousel-thumb-2"  class="selected img-train">
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
    <!-- <div class="total-amount">
        <div class="left-total-amount">
            <button onclick="nextStep(1)" data-current="0" data-tracking-event="completed_seat_selection"
                type="button" class="ant-btn footer-nextstep ant-btn-primary"><span><i
                        class="fa-solid fa-arrow-left"></i> Quay lại </span></button>
        </div>
        <div class="right-total-amount">
            Tổng cộng: <div class="right-total">0đ</div>
            <button onclick="nextStep(2)" data-current="0" data-tracking-event="completed_seat_selection"
                type="button" class="ant-btn footer-nextstep ant-btn-primary"><span>Tiếp tục <i
                        class="fa-solid fa-arrow-right"></i></span></button>
        </div>
    </div> -->




    <div id="content-step-3" class="step-content-detail
        ">


            <div class="steps-container">
                <div class="step step-active" id="step-1">
                    <div class="step-icon step-icon-2 step-content2">1</div>
                    Chỗ mong muốn
                </div>
                <div class="step step-inactive" id="step-2">
                    <div class="step-icon step-icon-2 step-content2 ">2</div>
                    Nhập thông tin
                </div>
                <div class="step step-inactive" id="step-3">
                    <div class="step-icon step-icon-new">3</div>
                    Thanh toán
                </div>
            </div>

            <div class="card card-body card-body-new  bg-white">

                <div id="step1-{{ $key }}" class="wizard-step active">


                    <div class="d-flex justify-content-center m-2 ">
                        <p class="trust-message-text "><i class="fa-solid fa-address-book mx-2 "></i>Vé sẽ được gửi qua:
                            <span class="text-primary">nguyennhuly@gmail.com</span>
                        </p>
                    </div>



                    <div class="bg-white">
                        <div class=" py-3 px-5">
                            <h5>Phương thức thanh toán</h5>
                        </div>
                        <div class="qrcode-container mx-5">
                            <span class="qrcode-label px-3 py-2">Mới</span>

                            <div class="d-flex">
                                <i class="fa-solid fa-qrcode fs-1 text-primary p-3"></i>
                                <div class="d-flex flex-column px-2 flex-grow-1">
                                    <b>Chuyển khoản bằng mã QR, hỗ trợ nhiều ví điện tử & hơn 42 ngân hàng</b>
                                    <div class="w-container">
                                        <span class="w-content bg-primary text-wrap my-2 px- py-1">+46</span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex  p-2 align-items-center rounded-bottom-4">
                                <span class="w-75 fw-light p-2">An toàn, tiết kiệm thời gian nhập thông tin, hạn chế sai
                                    sót</span>
                                <button class="w-25 py-2 mx-2 bg-primary rounded-2 border-0 text-light">Thử
                                    ngay</button>
                            </div>
                        </div>
                        <div class="qrcode-content">

                            <div class="qrcode-item my-3 ">
                                <div class="row d-flex align-items-center text-center border-bottom border-top pt-2">
                                    <div class="col d-flex justify-content-center itemAbate">
                                        <img src="https://cdn.techinasia.com/data/images/be3b6924cfc96137896c8649dc890926.png"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="col-8 text-start">
                                        <b>Ví MoMo</b>
                                        <p class="fw-light">Điện thoại của bạn phải được cài đặt ứng dụng MoMo</p>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center text-center border-bottom pt-2">
                                    <div class="col d-flex justify-content-center itemAbate">
                                        <img src="https://1.bp.blogspot.com/-n_jPjNl97nw/YIJ78WnloPI/AAAAAAAACks/xPjLQ2YpcXwyPf64C708UExQOrJitxHSgCNcBGAsYHQ/s2048/ShopeePay.png"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="col-8 text-start">
                                        <b>Ví ShoppePay</b>
                                        <p class="fw-light">Điện thoại của bạn phải được cài đặt ứng dụng ShoppePay
                                            </br>
                                            <span class="text-success">Nhập mã SPPVEXERE08 tại ShoppePay - Giamr 10k cho
                                                đơn
                                                hàng máy bay, tàu lửa từ 100k</span> </br>
                                            <a class="text-primary" href="">Điều kiện sử dụng</a>
                                        </p>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>


                                <div class="row d-flex align-items-center text-center border-bottom pt-2">
                                    <div class="col d-flex justify-content-center itemAbate">
                                        <img src="https://th.bing.com/th/id/OIP.pn3RUm1xk1HiAxWIgC6CIwAAAA?rs=1&pid=ImgDetMain"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="col-8 text-start">
                                        <b>Thanh toán bằng VNPay trên ứng dụng Mobile banking/Ví VNPay</b>
                                        <p class="fw-light">Thiết bị phải cài đặt ứng dụng Mobile banking hoặc Ví
                                            VNPay</br>
                                            <span class="text-success">Giảm 10K và giảm 30K khi nhập mã VNPAYVXR10 lần
                                                lượt cho đơn từ 250K và 900K</span> </br>
                                            <a class="text-primary" href="">Điều kiện sử dụng</a>
                                        </p>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center text-center border-bottom pt-2">
                                    <div class="col d-flex justify-content-center itemAbate">
                                        <img src="https://cardtot.com/wp-content/uploads/2020/01/zalopay.png" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="col-8 text-start">
                                        <b>Ví ZaloPay</b>
                                        <p class="fw-light">Điện thoại của bạn phải được cài đặt ứng dụng ZaloPay</br>
                                            <span class="text-success">Giảm 15K và giảm 35K khi nhập mã ZLPVXR lần lượt
                                                cho đơn từ 400K và 1.000K</span> </br>
                                            <a class="text-primary" href="">Điều kiện sử dụng</a>
                                        </p>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>


                                <div class="row d-flex align-items-center text-center  border-bottom pt-2">
                                    <div class="col d-flex justify-content-center itemAbate">
                                        <i class="fa-solid fa-credit-card fs-3 text-primary"></i>
                                    </div>
                                    <div class="col-8 text-start">
                                        <b>Thẻ thanh toán quốc tế</b>
                                        <p class="fw-light">Thẻ Visa, MasterCard, JCB</p>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center text-center border-bottom pt-2 ">
                                    <div class="col d-flex justify-content-center itemAbate">
                                        <i class="fa-solid fa-qrcode fs-3 text-primary"></i>
                                    </div>
                                    <div class="col-8 text-start">
                                        <b>QR chuyển khoản/Ví điện tử</b>
                                        <p class="fw-light">Không cần nhập thông tin chính, Xác nhận thanh toán tức thì,
                                            nhanh chóng và ít sai sót</p>
                                        <div class="imgCustom d-flex gap-2 mb-4">
                                            <img src="https://cdn.techinasia.com/data/images/be3b6924cfc96137896c8649dc890926.png"
                                                alt="" class="img-fluid">
                                            <img src="https://th.bing.com/th/id/R.d539c6a7401fe0134efb6bde9264dc13?rik=c7KyMzQxq3MgcQ&pid=ImgRaw&r=0"
                                                alt="" class="img-fluid">
                                            <img src="https://play-lh.googleusercontent.com/rNSXUqGnK-ljK6qUdUmy7h_sDrMOzZ1nPwAUAwshsmPaQuwNGn0Xwj-psgFrBSJOHg"
                                                alt="" class="img-fluid">
                                            <img src="https://inkythuatso.com/uploads/images/2021/12/logo-vib-inkythuatso-3-21-13-43-27.jpg"
                                                alt="" class="img-fluid">
                                            <img src="https://th.bing.com/th/id/OIP.zyrA1Yc325NGPWzN6rCBeQHaHa?rs=1&pid=ImgDetMain"
                                                alt="" class="img-fluid">
                                        </div>

                                    </div>

                                    <div class="col d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>

                                <div class="row d-flex align-items-center text-center  border-bottom pt-2">
                                    <div class="col d-flex justify-content-center itemAbate">
                                        <i class="fa-solid fa-wallet text-primary fs-3"></i>
                                    </div>
                                    <div class="col-8 text-start">
                                        <b>Thẻ ATM nội địa / Internet Banking</b>
                                        <p class="fw-light">Tài khoản phải có đăng ký Internet banking</p>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <input type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="d-flex mb-3  px-3 pt-4  bg-white w-full mx-5 ">
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



            <div class="modal fade" id="exampleModal-{{ $key }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-new">
                    <div class="modal-content">
                        <div class="wrap-content">
                            <h6 class="modal-title fs-5" id="exampleModalLabel-{{ $key }}">Mã
                                giường</h6>
                            <button type="button" class="btn-close btn-modal-content" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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

            <div id="step3-{{ $key }}" class="wizard-step">
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
                                        <textarea id="transferAddress-{{ $key }}"
                                            placeholder="Nhập địa chỉ trung chuyển" class="ant-input"
                                            style="border: 1px solid rgb(192, 192, 192); display: none;"></textarea>
                                    </div>
                                    <div class="form-check item point_id-1">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2-{{ $key }}" checked>
                                        <label class="form-check-label-title" for="flexRadioDefault2-{{ $key }}">
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
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                            id="flexRadioDefault3-{{ $key }}" checked>
                                        <label class="form-check-label-title" for="flexRadioDefault3-{{ $key }}">
                                            19:30: Văn Phòng Đà Nẵng
                                        </label>
                                        <b><i class="fa-solid fa-location-dot"></i> 70 Hoàng Văn Thái, Phường Hòa
                                            Minh, Liên Chiểu, Đà Nẵng </b>
                                    </div>
                                    <div class="form-check  item point_id-1">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                            id="flexRadioDefault4-{{ $key }}">
                                        <label class="form-check-label-title" for="flexRadioDefault4-{{ $key }}">
                                            19:00: Nội thành Tp. Đà Nẵng
                                        </label>
                                        <p class="text-form-check-label-t">Miễn phí - Vui lòng nhập địa chỉ cụ thể
                                            muốn được trung chuyển</p>
                                        <p class="text-form-check-label-b">Đón tận nơi tại Thành phố Đà Nẵng</p>
                                        <b><i class="fa-solid fa-location-dot"></i> Đà Nẵng, Đà Nẵng</b>
                                        <textarea id="transferAddress1--{{ $key }}"
                                            placeholder="Nhập địa chỉ trung chuyển" class="ant-input"
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
                    <button onclick="navigateStep('previous')"> Quay lại</button>
                </div>
                <div class="right-total-amount ">
                    <div class="text-total-amout"> <span> Tổng cộng: </span><span class="right-total">0đ</span></div>
                    <div>
                        <button onclick="navigateStep('next')">Tiếp tục <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <!--
        <div class="button-container">
            <button onclick="navigateStep('previous')"><i class="fa-solid fa-arrow-left"></i> Quay lại</button>
            <button onclick="navigateStep('next')">Tiếp tục <i class="fa-solid fa-arrow-right"></i></button>
        </div> -->
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

function navigateStep(direction) {
    // Ẩn nội dung bước hiện tại
    document.getElementById(`content-step-${currentStep}`).style.display = 'none';
    document.getElementById(`step-${currentStep}`).classList.remove('step-active');
    document.getElementById(`step-${currentStep}`).classList.add('step-inactive');

    // Cập nhật bước hiện tại
    if (direction === 'next' && currentStep < 3) {
        currentStep++;
    } else if (direction === 'previous' && currentStep > 1) {
        currentStep--;
    }

    // Hiển thị nội dung của bước mới
    document.getElementById(`content-step-${currentStep}`).style.display = 'block';
    document.getElementById(`step-${currentStep}`).classList.add('step-active');
    document.getElementById(`step-${currentStep}`).classList.remove('step-inactive');
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');
const button3 = document.getElementById('button3');

const content1 = document.getElementById('content1');
const content2 = document.getElementById('content2');
const content3 = document.getElementById('content3');

button1.addEventListener('click', () => {
    if (!content1.classList.contains('show')) {
        content1.classList.add('show');
        content2.classList.remove('show');
        content3.classList.remove('show');
    } else {
        content1.classList.remove('show');
    }
});

button2.addEventListener('click', () => {
    if (!content2.classList.contains('show')) {
        content2.classList.add('show');
        content1.classList.remove('show');
        content3.classList.remove('show');
    } else {
        content2.classList.remove('show');
    }
});

button3.addEventListener('click', () => {
    if (!content3.classList.contains('show')) {
        content3.classList.add('show');
        content1.classList.remove('show');
        content2.classList.remove('show');
    } else {
        content3.classList.remove('show');
    }
});

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
