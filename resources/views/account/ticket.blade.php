@extends('layouts.app')

@section('title', 'Đơn hàng của tôi')
@section('styles')
    <style>
        .nav-tabs .nav-link {
            color: #000;
            border: 1px solid transparent;
            border-radius: 0;
        }

        .nav-tabs .nav-link.active {
            color: #007bff;
            font-weight: 500;
            border-bottom: 2px solid #007bff;
        }

        .nav-tabs .nav-link:hover {
            color: #0056b3;
        }

        .nav-item.flex-fill {
            flex: 1 1 0%;
        }
    </style>
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
            <p class="fw-medium mb-0">Đơn hàng của tôi</p>
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
                            <span>Thông tin tài khoản</span>
                        </a>
                        <a href="{{ route('auth.membership') }}" class="list-group-item list-group-item-action">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/loyalty.svg" width="24"
                                height="16" alt="">
                            <span>Thành viên <b>thường</b></span>
                        </a>
                        <a href="{{ route('auth.ticket') }}" class="list-group-item list-group-item-action">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/ticket.svg" width="24"
                                height="16" alt="">
                            <span class="text-primary">Đơn hàng của tôi</span>
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
                <div class="container">
                    <!-- Tab navigation -->
                    <ul class="nav nav-tabs mb-4 rounded" id="myTab" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                            <a class="nav-link active text-center" id="current-tab" data-bs-toggle="tab" href="#current"
                                role="tab" aria-controls="current" aria-selected="true">Hiện tại</a>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <a class="nav-link text-center" id="past-tab" data-bs-toggle="tab" href="#past"
                                role="tab" aria-controls="past" aria-selected="false">Đã đi</a>
                        </li>
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <a class="nav-link" id="canceled-tab" data-bs-toggle="tab" href="#canceled" role="tab"
                                aria-controls="canceled" aria-selected="false">Đã hủy</a>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="current" role="tabpanel" aria-labelledby="current-tab">
                            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                <div class="text-center">
                                    <span class="d-block mb-2">Bạn chưa có chuyến sắp đi nào! </span>
                                    <a href="/" class="btn btn-primary">Đặt chuyến đi ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="past-tab">
                            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                <div class="text-center">
                                    <span class="d-block mb-2">Bạn chưa có chuyến sắp đi nào! </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">
                            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                <div class="text-center">
                                    <span class="d-block mb-2">Bạn chưa có chuyến sắp đi nào! </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
