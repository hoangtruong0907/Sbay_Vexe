<div class="steps-container-train">
    <div id="step-{{ $key }}" class="step-train step-active navigation-step navigation-step-active">
        <div class="step-icon-train step-icon-n step-content2">1</div>
        Chỗ mong muốn
    </div>
    <div id="step-2-{{ $key }}" class="step-train step-inactive navigation-step navigation-step-inactive">
        <div class="step-icon-train step-icon-n step-content2">2</div>
        Nhập thông tin
    </div>

    <div id="step-3-{{ $key }}" class="step-train step-inactive navigation-step navigation-step-inactive">
        <div class="step-icon-train step-icon-n step-content2">3</div>
        Thanh toán
    </div>
</div>

<div id="content-step-{{ $key }}" class="step-content" style="display: block;">
    <div class="card-body-train">
        <div id="step-{{ $key }}" class="wizard-step-train active-train">
            <div class="trust-message-train">
                <p class="trust-message-text-train"><i class="fas fa-shield-alt mx-2"></i> Vexere cam kết giữ đúng chỗ
                    bạn đã chọn.</p>
            </div>

            <div class="coupon-container-train pt-2 pb-2">
                <div class="locomotive">
                    <div class="boxTrain"> </div>
                    <div class="textTrain">SE6</div>
                </div>
                {{-- Khoang tau  --}}
                @foreach ($carriage_list as $i => $carriage)
                    <div class="wrap-coupon-train" id="template-seat-train-{{ $i }}"
                        data-id="{{ $carriage['carriage_number'] }}" data-physical-train-id="{{ $route['train_id'] }}"
                        data-physical-carriage-id="{{ $carriage['physical_carriage_id'] }}">
                        <button id="button-step-custom-1-{{ $key }}" class="navigation-button-custom"
                            data-key="{{ $key }}" data-step="1">
                            <div class="carriage-train">
                                <div class="border-coupon-train ">
                                    <div class="flex-coupon-train">
                                        <div class="count text-center">
                                            <div class="">{{ $carriage['carriage_number'] }}</div>
                                        </div>
                                        <div class="text-coupon-train">
                                            <div class="coupon-exp-train">
                                                {{ $carriage['carriage_description'] }}
                                            </div>
                                            <p class="text-coupon-train">{{ $carriage['total_carriage_seats'] }} chỗ -
                                                Từ {{ formatCurrency($carriage['min_price']) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-steps-train" id="template-seat-{{ $route['train_id'] }}">
            {{-- Load template here  --}}
            <p class="fw-bold">Vui lòng chọn khoang tàu</p>
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
                    <div class="border rounded p-3 d-flex justify-content-center align-items-center gap-3 mt-3 mb-3">
                        <i class="fa-solid fa-id-card"></i>
                        Chọn nhanh từ danh sách đã lưu
                    </div>
                    <div class="d-flex mb-3 ">
                        <select class="bg-custom-train me-auto p-2 text-primary border-0 fw-bold rounded-2 p-2">
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
                            <input type="email" class="form-control" id="emailInput" value="nguyenvana@gmail.com">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary clear-btn" type="button"
                                    onclick="clearInput('emailInput')">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <label for="emailInput" class="form-label placeholder-label">Email nhận
                                thông
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
                            <label for="idInput" class="form-label placeholder-label">Số CMND/Ngày
                                sinh/Hộ
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
                <p class="trust-message-text-train "><i class="fa-solid fa-address-book mx-2 "></i>Vé sẽ
                    được
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
                        <span class="w-75 fw-light p-2">An toàn, tiết kiệm thời gian nhập thông tin, hạn
                            chế sai
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
                                <p class="fw-light">Điện thoại của bạn phải được cài đặt ứng dụng
                                    ShoppePay
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
                                <p class="fw-light">Điện thoại của bạn phải được cài đặt ứng dụng
                                    ZaloPay</br>
                                    <span class="text-success">Giảm 15K và giảm 35K khi nhập mã ZLPVXR lần
                                        lượt
                                        cho đơn từ 400K và 1.000K</span> </br>
                                    <a class="text-primary" href="">Điều kiện sử dụng</a>
                                </p>
                            </div>
                            <div class="col col-train  d-flex justify-content-center">
                                <input type="checkbox">
                            </div>
                        </div>


                        <div class="row row-train d-flex align-items-center text-center  border-bottom pt-2 pb-1 ">
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
                                <p class="fw-light">Không cần nhập thông tin chính, Xác nhận thanh toán
                                    tức thì,
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

                        <div class="row row-train d-flex align-items-center text-center  border-bottom pt-2 pb-1 ">
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
            <button onclick="navigateStep('next', '{{ $key }}')">Tiếp tục <i
                    class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>
</div>
