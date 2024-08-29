<nav id="sidebar" class="active">
    <div class="sidebar-header">
        <img src="{{ asset('images/bootstraper-logo.png') }}" alt="bootraper logo" class="app-logo">
    </div>
    <ul class="list-unstyled components text-secondary">
        <li>
            <a href="dashboard.html"><i class="fas fa-home"></i> Bảng điều khiển</a>
        </li>
        <li>
            <a href="forms.html"><i class="fas fa-file-alt"></i> Biểu mẫu</a>
        </li>
        <li>
        <a href="{{ route('admin.blogs.index') }}"><i class="fas fa-file-alt"></i> Blog</a>

        </li>
        <li>
            <a href="tables.html"><i class="fas fa-table"></i> Bảng</a>
        </li>
        <li>
            <a href="charts.html"><i class="fas fa-chart-bar"></i> Biểu đồ</a>
        </li>
        <li>
            <a href="icons.html"><i class="fas fa-icons"></i> Biểu tượng</a>
        </li>
        <li>
            <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> Thành phần UI</a>
            <ul class="collapse list-unstyled" id="uielementsmenu">
                <li>
                    <a href="ui-buttons.html"><i class="fas fa-angle-right"></i> nút</a>
                </li>
                <li>
                    <a href="ui-badges.html"><i class="fas fa-angle-right"></i> Huy hiệu</a>
                </li>
                <li>
                    <a href="ui-cards.html"><i class="fas fa-angle-right"></i>Thẻ</a>
                </li>
                <li>
                    <a href="ui-alerts.html"><i class="fas fa-angle-right"></i> Cảnh báo</a>
                </li>
                <li>
                    <a href="ui-tabs.html"><i class="fas fa-angle-right"></i> Các tab</a>
                </li>
                <li>
                    <a href="ui-date-time-picker.html"><i class="fas fa-angle-right"></i> Bộ chọn và ngày giờ</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Xác thực</a>
            <ul class="collapse list-unstyled" id="authmenu">
                <li>
                    <a href="login.html"><i class="fas fa-lock"></i> Đăng nhâp</a>
                </li>
                <li>
                    <a href="signup.html"><i class="fas fa-user-plus"></i> Đăng ký</a>
                </li>
                <li>
                    <a href="forgot-password.html"><i class="fas fa-user-lock"></i> Quên mật khẩu</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i>Trang</a>
            <ul class="collapse list-unstyled" id="pagesmenu">
                <li>
                    <a href="blank.html"><i class="fas fa-file"></i> Trang trống</a>
                </li>
                <li>
                    <a href="404.html"><i class="fas fa-info-circle"></i> Trang lỗi 404</a>
                </li>
                <li>
                    <a href="500.html"><i class="fas fa-info-circle"></i>Trang lỗi 500</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
        </li>
        <li>
            <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
        </li>
    </ul>
</nav>
