<style>
.validation-icon {
    margin-left: 10px;
    font-size: 20px;
    display: inline-block;
}

.valid {
    color: green;
}

.invalid {
    color: red;
}

</style>
@extends('layouts.app')

@section('title', 'Thông tin tài khoản')
@section('styles')
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    {{-- Select Date --}}
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container mt-4">
        <!-- Breadcrumb -->
        <div class="d-flex align-items-center mb-3">
            <a href="/" class="text-primary text-decoration-none">
                <p class="fw-medium mb-0">Trang chủ</p>
            </a>
            <span>
                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/chevron_right_gray_20dp.svg" width="20"
                    height="20" alt="">
            </span>
            <p class="fw-medium mb-0">Thông tin tài khoản</p>
        </div>
        <!-- Main Content -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="list-group list-group-flush">
                        <a href="{{ route('auth.info') }}" class="list-group-item list-group-item-action">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/Auth/account-circle.svg" width="24"
                                height="16" alt="">
                            <span class="text-primary">Thông tin tài khoản</span>
                        </a>
                        <a href="{{ route('auth.membership') }}" class="list-group-item list-group-item-action">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/loyalty.svg" width="24"
                                height="16" alt="">
                            <span>Thành viên <b>thường</b></span>
                        </a>
                        <a href="{{ route('auth.ticket') }}" class="list-group-item list-group-item-action">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/ticket.svg" width="24"
                                height="16" alt="">
                            <span>Đơn hàng của tôi</span>
                        </a>
                        <a href="{{ route('auth.reward') }}" class="list-group-item list-group-item-action">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/promotion.svg" width="24"
                                height="16" alt="">
                            <span>Ưu đãi</span>
                        </a>
                        <a href="{{ route('auth.card') }}" class="list-group-item list-group-item-action">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/credit-card.svg" width="24"
                                height="16" alt="">
                            <span>Quản lý thẻ</span>
                        </a>
                        <a href="{{ route('auth.review') }}" class="list-group-item list-group-item-action">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/review.svg" width="24"
                                height="16" alt="">
                            <span>Nhận xét chuyến đi</span>
                        </a>
                        <a href="{{ route('auth.logout') }}" class="list-group-item list-group-item-action"
                            style="cursor: pointer;">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/Auth/logout.svg" width="24"
                                height="16" alt="">
                            <span>Đăng xuất</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Form Content -->
            <div class="col-md-9">
                <form class="d-flex flex-column h-100" method="POST" action="{{ route('update_profile') }}">
                    @csrf
                    <div class="mb-1">
                        <div class="alert alert-info" role="alert">
                            Bổ sung đầy đủ thông tin sẽ giúp Vexere hỗ trợ bạn tốt hơn khi đặt vé
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Họ và tên<span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                        <span id="name-validation" class="validation-icon"></span>
                        <div id="name-error" class="text-danger" style="display: none;"></div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" value="{{ $user->phone ?? '' }}" readonly disabled>
                    </div>
                    <div class="mb-3">
                        <label for="datepicker" class="form-label">Ngày sinh</label>
                        <input type="date" id="birthdate" name="birthday" class="form-control" placeholder="Chọn ngày sinh" value="{{ $user->birthdate ?? '' }}">
                        <div id="birthdate-validation" class="validation-icon" style="color: green;"></div>
                        <div id="birthdate-error" class="error-message" style="display: none; color: red;"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giới tính</label>
                        <div class="d-flex">
                            <div class="btn-group w-100" role="group" aria-label="Gender">
                                <input type="radio" id="gender-male" name="sex" value="1" class="btn-check" 
                                    {{ isset($user->sex) && $user->sex == config('apps.common.sex.male') ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary" for="gender-male">Nam</label>
                    
                                <input type="radio" id="gender-female" name="sex" value="0" class="btn-check" 
                                    {{ isset($user->sex) && $user->sex == config('apps.common.sex.female') ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary" for="gender-female">Nữ</label>
                    
                                <input type="radio" id="gender-other" name="sex" value="2" class="btn-check" 
                                    {{ isset($user->sex) && $user->sex == config('apps.common.sex.other') ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary" for="gender-other">Khác</label>
                            </div>
                        </div>
                    </div>
                        <hr class="my-3">
                    </div>
                    <div class="mt-auto">
                        <button id="save-button" type="submit" class="btn btn-primary btn-lg btn-block w-100" disabled>Lưu</button>          
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('page-scripts')
    {{-- Select Date --}}
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap5',
            });
        });
        document.getElementById('name').addEventListener('input', function() {
            const nameInput = this.value;
            const validationIcon = document.getElementById('name-validation');
            const errorDiv = document.getElementById('name-error');
            const saveButton = document.getElementById('save-button'); // ID của nút lưu
            if (nameInput.trim() === '') {
                validationIcon.textContent = ''; // Xóa dấu tích
                errorDiv.textContent = 'Tên không được để trống.';
                errorDiv.style.display = 'block';
                validationIcon.className = 'invalid';
                saveButton.disabled = true; // Vô hiệu hóa nút lưu
            } else if (nameInput.length < 5) {
                validationIcon.textContent = ''; // Xóa dấu tích
                errorDiv.textContent = 'Tên phải có ít nhất 5 ký tự.';
                errorDiv.style.display = 'block';
                validationIcon.className = 'invalid';
                saveButton.disabled = true; // Vô hiệu hóa nút lưu
            } else {
                validationIcon.textContent = '✔'; // Dấu tích xanh
                errorDiv.textContent = ''; // Xóa thông báo lỗi
                errorDiv.style.display = 'none';
                validationIcon.className = 'valid';
                saveButton.disabled = false; // Kích hoạt nút lưu
            }
        });
        document.getElementById('birthdate').addEventListener('input', function() {
            const birthdateInput = new Date(this.value);
            const validationIcon = document.getElementById('birthdate-validation');
            const errorDiv = document.getElementById('birthdate-error');
            const saveButton = document.getElementById('save-button'); // ID của nút lưu

            const today = new Date();
            const minDate = new Date();
            minDate.setFullYear(today.getFullYear() - 10); // Ngày nhỏ 
            if (birthdateInput.toDateString() === today.toDateString()) {
                validationIcon.textContent = ''; // Xóa dấu tích
                errorDiv.textContent = 'Ngày sinh không được là ngày hiện tại.';
                errorDiv.style.display = 'block';
                validationIcon.className = 'invalid';
                saveButton.disabled = true; // Vô hiệu hóa nút lưu
            } else if (birthdateInput > minDate) {
                validationIcon.textContent = ''; // Xóa dấu tích
                errorDiv.textContent = 'Bạn phải ít nhất 10 tuổi.';
                errorDiv.style.display = 'block';
                validationIcon.className = 'invalid';
                saveButton.disabled = true; // Vô hiệu hóa nút lưu
            } else {
                validationIcon.textContent = '✔'; // Dấu tích xanh
                errorDiv.textContent = ''; // Xóa thông báo lỗi
                errorDiv.style.display = 'none';
                validationIcon.className = 'valid';
                saveButton.disabled = false; // Kích hoạt nút lưu
            }
        });
        document.querySelectorAll('input[name="sex"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                const saveButton = document.getElementById('save-button'); // ID của nút lưu
                saveButton.disabled = false; // Kích hoạt nút lưu khi chọn giới tính
            });
        });
    </script>
@endpush
