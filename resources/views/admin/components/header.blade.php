<nav class="navbar navbar-expand-lg navbar-white ">
    <button type="button" id="sidebarCollapse" class="btn ">
        <i class="fas fa-bars text-white"></i><span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <div class="nav-dropdown">
                    <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle "
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-link"></i> <span>Liên kết nhanh</span> <i style="font-size: .8em;"
                            class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                        <ul class="nav-list">
                            <li><a href="" class="dropdown-item"><i class="fas fa-list"></i>
                                  Nhật ký truy cập</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="" class="dropdown-item"><i class="fas fa-database"></i>
                                    Sao lưu</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i>
                                    Cập nhật</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i>
                                    Vai trò</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <div class="nav-dropdown">
                    <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle "
                        data-bs-toggle="dropdown" aria-expanded="false">
<<<<<<< HEAD
                        <i class="fas fa-user"></i> <span>Van A</span> <i style="font-size: .8em;"
=======

                        <i class="fas fa-user"></i> <span>{{ Auth::user()->name }}</span> <i style="font-size: .8em;"
>>>>>>> eeaaceba9f6a4a8e6ef5d12ee2c1df77c903713b
                            class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                        <ul class="nav-list">
                            <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i>
                                    Hồ sơ</a></li>
                            <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i>
                                    Tin nhắn</a></li>
                            <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i>
                                    Cài đặt</a></li>
                            <div class="dropdown-divider"></div>
<<<<<<< HEAD
                            <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                                    Đăng xuất</a></li>
=======
                            <li><a href="{{ route('admin.doLogout') }}" class="dropdown-item"><i
                                        class="fas fa-sign-out-alt"></i>
                                    Logout</a></li>
>>>>>>> eeaaceba9f6a4a8e6ef5d12ee2c1df77c903713b
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
