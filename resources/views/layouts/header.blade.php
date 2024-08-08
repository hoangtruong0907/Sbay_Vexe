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
        <a href=""><i class="fas fa-home"></i> Trang chủ</a>
        <a href=""><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập/Đăng ký</a>
        <a href=""><i class="fa fa-car" aria-hidden="true"></i> Thuê xe</a>
        <a href=""><i class="fa fa-plane" aria-hidden="true"></i> Vé máy bay</a>
        <a href=""><i class="fa fa-gift" aria-hidden="true"></i> Khám phá ưu đãi</a>
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
            <li class="Navbar2__GroupItem-sa2air-4 hEFchp menu-group-item">
                @guest
                    <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                        <p class="base__Headline03-sc-1tvbuqk-15 boemqK" data-bs-toggle="modal" data-bs-target="#authModal">
                            Đăng nhập
                        </p>
                    </div>
                @else
                    {{-- chưa style --}}
                    <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                        <p class="base__Headline03-sc-1tvbuqk-15 boemqK">
                            Xin chào, {{ Auth::user()->name }}
                        </p>
                    </div>
                @endguest
            </li>
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
            <div class="modal-dialog modal-lg">
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
