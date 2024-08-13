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
                <form class="d-flex flex-column h-100">
                    <div class="mb-1">
                        <div class="alert alert-info" role="alert">
                            Bổ sung đầy đủ thông tin sẽ giúp Vexere hỗ trợ bạn tốt hơn khi đặt vé
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Họ và tên<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Trung Dao">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" value="375307021" readonly disabled>
                    </div>
                    <div class="mb-3">
                        <label for="datepicker" class="form-label">Ngày sinh</label>
                        <input type="text" id="datepicker" class="form-control" placeholder="Chọn ngày sinh" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giới tính</label>
                        <div class="d-flex">
                            <div class="btn-group w-100" role="group" aria-label="Gender">
                                <input type="radio" id="gender-male" name="gender" value="1" class="btn-check"
                                    checked>
                                <label class="btn btn-outline-primary" for="gender-male">Nam</label>

                                <input type="radio" id="gender-female" name="gender" value="0"
                                    class="btn-check">
                                <label class="btn btn-outline-primary" for="gender-female">Nữ</label>

                                <input type="radio" id="gender-other" name="gender" value="2"
                                    class="btn-check">
                                <label class="btn btn-outline-primary" for="gender-other">Khác</label>
                            </div>
                        </div>
                        <hr class="my-3">
                    </div>
                    <div class="mt-auto">
                        <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Lưu</button>
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
    </script>
@endpush
