
<link rel="stylesheet" href="{{ asset('css/headers.css') }}">
<header>
    <!-- Nội dung header của bạn -->
    <div class="topnav">
        <div class="togglenav-mobile">
            <span class="menu-icon" onclick="toggleNav()">&#9776;</span>
        </div>
        <div class="logo-mobi">
            <a href="#">
                <img src="{{ asset('images/logo-header.svg') }}" alt="logo">
            </a>
        </div>
        <div class="login-mobi">
            <a href="">Đăng Nhập</a>
        </div>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="" class="flag-img">
            <div>
                <img src="{{ asset('images/vn-flag.svg') }}" alt="" class="flag-icon">
                <div class="text-container">Tiếng Việt</div>
                <img src="{{ asset('images/en-flag.svg') }}" alt="" class="flag-icon2">
                <div class="text-container">English</div>
            </div>
        </a>
        <a href=""><i class="fas fa-home icon-header"></i> <span class="text-containerr">Trang chủ</span></a>
        <a href=""><i class="fa fa-sign-in icon-header" aria-hidden="true"></i> <span class="text-container k1">Đăng nhập/Đăng ký</span></a>
        <a href=""><i class="fa fa-car icon-header" aria-hidden="true"></i> <span class="text-container k2">Thuê xe</span></a>
        <a href=""><i class="fa fa-plane icon-header" aria-hidden="true"></i> <span class="text-container k3">Vé máy bay</span></a>
        <a href=""><i class="fa fa-download icon-header" aria-hidden="true"></i> <span class="text-container k4">Tải app Vexere</span></a>
        <a href=""><i class="fas fa-gift icon-header"></i> <span class="text-container k4">Khám phá ưu đãi</span></a>
        <a href=""><i class="label"></i> <span class="text-container"><b>Hợp tác cùng Vexere</b></span></a>
        <a href=""><i class="fas fa-handshake icon-header" aria-hidden="true"></i> <span class="text-container k5">Mở bán tại Vexere</span></a>
        <a href=""><i class="fas fa-bus icon-header" aria-hidden="true"></i> <span class="text-container k6">Phần mềm nhà xe</span></a>
        <a href=""><i class="fas fa-store icon-header" aria-hidden="true"></i> <span class="text-container k7">Phần mềm đại lý</span></a>
        <a href=""><i class="label"></i> <span class="text-container"><b>Về Vexere</b></span></a>
        <a href=""><i class="fas fa-star icon-header" aria-hidden="true"></i> <span class="text-container k8">Giới thiệu</span></a>
        <a href=""><i class="fas fa-wifi icon-header" aria-hidden="true"></i> <span class="text-container k9">Vexere Blog</span></a>
        <a href=""><i class="fas fa-briefcase icon-header" aria-hidden="true"></i> <span class="text-container k10">Tuyển dụng</span></a>
        <a href=""><i class="label"></i><span class="text-container"><b>Hỗ trợ</b></span></a>
        <a href=""><i class="fa fa-phone icon-header" aria-hidden="true"></i> <span class="text-container k11">Liên hệ</span></a>
        <a href=""><i class="fas fa-question icon-header" aria-hidden="true"></i> <span class="text-container k12">Câu hỏi thường gặp</span></a>
        <a href=""><i class="fas fa-gavel icon-header" aria-hidden="true"></i> <span class="text-container k13">Quy chế</span></a>
        <a href=""><i class="fas fa-lock icon-header" aria-hidden="true"></i> <span class="text-container k14">Chính sách bảo mật thông tin</span></a>
        <a href=""><i class="fas fa-credit-card icon-header" aria-hidden="true"></i> <span class="text-container k15">Chính sách bảo mật thanh toán</span></a>
        <a href=""><i class="fas fa-credit-card icon-header" aria-hidden="true"></i> <span class="text-container k16">Chính sách và quy trình giải quyết tranh chấp, khiếu nại</span></a>
    </div>
    </div>

    <div class="total-header">
        <div class="left-header">
            <div class="logo-header">
                <a href="#">
                    <img src="{{ asset('images/logo-header.svg') }}" alt="logo">
                </a>
            </div>
            <div class="slogan-header">
                Cam kết hoàn 150% nếu nhà xe không cung cấp dịch vụ vận chuyển
            </div>
        </div>
        <ul class="right-header nav">
            <li class="nav-item">
                <a href="" class="nav-link nav-link-header">Đơn hàng của tôi</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link nav-link-header">Mở bán vé trên Vexere</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-header dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Trở thành đối tác
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item dropdown-item-header" href="#">Phần mềm nhà xe</a></li>
                    <li><a class="dropdown-item dropdown-item-header" href="#">Phần mềm đại lý</a></li>
                </ul>
            </li>
            <li class="Navbar2__GroupItem-sa2air-4 hEFchp menu-group-item">
                <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                    <div class="material-icons-wrapper md-20 icon-phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p class="base__Headline03-sc-1tvbuqk-15 boemqK">Hotline 24/7</p>
                </div>
                <div class="contact-dropdown">
                    <i class="fa fa-phone" aria-hidden="true"></i> Hotline 1:<a href="tel:0967041900">
                        0967041900</a><br>
                    <i class="fa fa-phone" aria-hidden="true"></i> Hotline 2:<a href="tel:0967041900"> 0967041900</a>
                </div>
            </li>
            @guest
                <li class="Navbar2__GroupItem-sa2air-4 hEFchp menu-group-item">
                    <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                        <p class="base__Headline03-sc-1tvbuqk-15 boemqK" data-bs-toggle="modal" data-bs-target="#authModal">
                            Đăng nhập
                        </p>
                    </div>
                </li>
            @else
                <li class="Navbar2__GroupItem-sa2air-4 hEFchp dropdown ms-2">
                    <div class="d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-icon">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/user_profile.svg" width="32"
                                height="32" alt="User Profile">
                        </div>
                        <div class="material-icons-wrapper md-16">
                            <i class="material-icons-outlined dropdown-icon">arrow_drop_down</i>
                        </div>
                    </div>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu dropdown-menu-end"
                        style="border-radius: 8px; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px;">
                        <li class="mb-2">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.info') }}">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/Auth/account-circle.svg"
                                    width="16" height="16" alt="">
                                <span class="ms-2 fw-medium" style="font-size: 14px;">Thông tin tài khoản</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.membership') }}">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/loyalty.svg" width="16"
                                    height="16" alt="">
                                <span class="ms-2 fw-medium" style="font-size: 14px;">Thành viên <b> thường</b></span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.ticket') }}">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/ticket.svg" width="16"
                                    height="16" alt="">
                                <span class="ms-2 fw-medium" style="font-size: 14px;">Đơn hàng của tôi</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.reward') }}">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/promotion.svg" width="16"
                                    height="16" alt="">
                                <span class="ms-2 fw-medium" style="font-size: 14px;">Ưu đãi</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.card') }}">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/credit-card.svg" width="16"
                                    height="16" alt="">
                                <span class="ms-2 fw-medium" style="font-size: 14px;">Quản lý thẻ</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.review') }}">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/review.svg" width="16"
                                    height="16" alt="">
                                <span class="ms-2 fw-medium" style="font-size: 14px;">Nhận xết chuyến đi</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.logout') }}">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/Auth/logout.svg" width="16"
                                    height="16" alt="">
                                <span class="ms-2 fw-medium" style="font-size: 14px;">Đăng xuất</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</header>

<!-- Modal Login/Register -->
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authModalLabel">Đăng nhập</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label for="phoneNumber" class="form-label m-0">Số điện thoại</label>
                    <div class="input-group mb-4">
                        <select class="form-select flex-shrink-1" style="max-width: 120px" id="phoneCode"
                            aria-label="Phone code">
                            <option value="+84" selected>(Viet Nam) +84</option>
                            <option value="+01">(A) +01</option>
                            <option value="+02">(B) +02</option>
                        </select>
                        <input type="text" class="form-control flex-grow-1" id="phoneNumber"
                            placeholder="Số điện thoại">
                    </div>
                </div>
                <button type="button" class="btn btn-primary w-100">Tiếp tục</button>
                <div class="text-center my-1">
                    <div class="d-flex align-items-center justify-content-center">
                        <hr class="flex-grow-1">
                        <span class="text-muted mx-2">hoặc</span>
                        <hr class="flex-grow-1">
                    </div>
                </div>
                <a href="{{ route('auth.google') }}" class="btn btn-danger w-100" style="text-decoration: none;">
                    Tiếp tục với Google
                </a>

                <div class="mt-3 d-flex align-items-center justify-content-start" id="authSwitch">
                    <span>Bạn chưa có tài khoản?</span>
                    <button type="button" class="btn btn-link" id="toggleAuth" style="text-decoration: none;">
                        Đăng ký
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@auth
    @php
        $user = Auth::user();
    @endphp

    @if (is_null($user->phone))
        <div class="modal fade" id="addPhonenumberModal" tabindex="-1" aria-labelledby="addPhonenumberModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPhonenumberModalLabel">Xác thực số điện thoại</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label for="phoneNumber" class="form-label m-0">Số điện thoại</label>
                            <div class="input-group mb-4">
                                <select class="form-select flex-shrink-1" style="max-width: 120px" id="add_phoneCode"
                                    aria-label="Phone code">
                                    <option value="84" selected>(Viet Nam) +84</option>
                                    <option value="01">(A) +01</option>
                                    <option value="02">(B) +02</option>
                                </select>
                                <input type="text" name="phone" class="form-control flex-grow-1"
                                    style="flex-grow: 1;" id="add_phoneNumber" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <button id="btn-phone-auth" type="button" class="btn btn-primary w-100"
                            data-url="{{ route('auth.addPhone') }}">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endauth
