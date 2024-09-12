@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/payment-result.css') }}">
@endsection

@section('content')
<div class="container mt-5 custom-container">
    <div class="mb-4">
        <a href="/" class="text-decoration-none">
            <div class="chevron_left">
                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/chevron_left_gray.svg" alt="">
                <p>Về Trang chủ</p>
            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-md-8">
            <!-- Đặt chỗ thành công -->
            <div class="card p-0 mb-4 custom-card">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <img class="confetti-background"
                        src="https://229a2c9fe669f7b.cmccloud.com.vn/images/confetti_desktop.png" alt="">
                    <h4 class="font-weight-bold">Đặt chỗ thành công</h4>
                    <p class="mb-0">Thông tin chuyến đi đã được gửi đến <strong>truong@gmail.com</strong>, bạn hãy kiểm
                        tra nhé!</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Hướng dẫn thanh toán</h5>
                    <p class="card-text">
                        Bạn hãy đến phòng vé của nhà xe Tân Kim Chi để thanh toán số tiền <strong>650,000đ</strong> cho
                        mã đặt chỗ <strong>3GRR7GQ</strong> trước 20:00 - 23/08/2024.
                    </p>
                    <p><strong>Địa chỉ:</strong></p>
                    <p class="office-label inline-block">Văn phòng Đà Nẵng:</p>
                    <p class="inline-block">46 Nam Trân</p>
                    <div class="alert alert-warning custom-1">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <strong>Lưu ý quan trọng:</strong> Hãy hủy vé khi không còn nhu cầu đi chuyến. Vexere sẽ yêu cầu
                        bạn thanh toán trước cho những lần sau nếu bạn đặt vé nhưng không đi hoặc hủy vé quá nhiều lần.
                    </div>
                </div>
            </div>
            @include('payment.trip-info')
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Thông tin thanh toán</h5>
                    <div class="d-flex justify-content-between align-items-center mb-2 custom-pay">
                        <span>Trạng thái</span>
                        <span class="text-danger fw-bold">Chưa thanh toán</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2 custom-pay">
                        <span>Phương thức thanh toán</span>
                        <span class="text-muted custom-text">Tại nhà xe</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center custom-pay">
                        <span>Tổng tiền</span>
                        <span id="toggle-details" class="toggle-details">
                            650.000đ
                            <img id="arrow-icon" class="arrow-icon"
                                src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_more.svg" alt="Toggle Icon">
                        </span>
                    </div>
                    <div id="payment-details" class="payment-details">
                        <p class="mb-1">Giá vé</p>
                        <p class="mb-1">Phụ thu điểm đón</p>
                        <p class="mb-1">Phụ thu điểm trả</p>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Quản lý đơn hàng</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center custom-help">
                            <button class="btn d-flex align-items-center w-100 text-start p-0 custom-button"
                                data-bs-toggle="offcanvas" data-bs-target="#supportOffcanvas">
                                <span class="d-flex align-items-center bcCBBz">
                                    <i class="fas fa-question-circle text-primary me-2"></i>
                                    Trung tâm Hỗ trợ
                                </span>
                                <span class="ms-auto">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </button>
                        </li>

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="supportOffcanvas"
                            aria-labelledby="supportOffcanvasLabel">
                            <div class="offcanvas-header">
                                <button type="button" class="btn btn-link text-white p-0" data-bs-dismiss="offcanvas"
                                    aria-label="Close">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <h5 class="offcanvas-title ms-3" id="supportOffcanvasLabel">Liên hệ</h5>
                            </div>
                            <div class="offcanvas-body">
                                <div class="contact-info card">
                                    <div class="card-body">
                                        <p class="mb-2"><strong>Liên hệ qua email</strong></p>
                                        <a href="mailto:cs@vexere.com"
                                            class="btn btn-outline-secondary d-inline-flex align-items-center">
                                            <i class="fas fa-envelope me-2"></i> cs@vexere.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="list-group-item d-flex justify-content-between align-items-center custom-cancel">
                            <button class="btn d-flex align-items-center w-100 text-start p-0 custom-cancel-button"
                                data-bs-toggle="offcanvas" data-bs-target="#cancelOrderOffcanvas">
                                <span class="d-flex align-items-center bcCBBz">
                                    <i class="fas fa-times-circle text-danger me-2"></i>
                                    Hủy đơn hàng
                                </span>
                                <span class="ms-auto">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="cancelOrderOffcanvas"
                aria-labelledby="cancelOrderOffcanvasLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn btn-link text-white p-0" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <h5 class="offcanvas-title ms-3" id="cancelOrderOffcanvasLabel">Chọn vé cần hủy</h5>
                </div>
                <div class="offcanvas-body">
                    <div class="form-check d-flex align-items-start justify-content-between border-bottom py-2 mb-2">
                        <div class="d-flex align-items-start">
                            <input class="form-check-input mt-1 me-2" type="checkbox" id="ticket1" checked>
                            <div>
                                <label class="form-check-label fw-bold" for="ticket1">
                                    Đà Nẵng → Hà Nội
                                </label>
                                <div class="text-muted small text-decoration-none">20:00 • T7, 24/08/2024</div>
                            </div>
                        </div>
                        <div class="text-end custom-text">
                            <span class="text-muted">Phí hủy</span> <span class="text-danger fw-bold">0đ</span>
                        </div>
                    </div>

                    <div class="alert alert-info custom-alert " role="alert">
                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i> Phí hủy được tính trên giá gốc và không
                        vượt quá số tiền bạn đã thanh toán (giá gốc không bao gồm mã giảm giá).
                    </div>
                </div>

                <div class="offcanvas-footer p-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="refund-label">Số tiền hoàn</span>
                        <span class="refund-amount">0đ</span>
                    </div>
                    <button class="btn btn-primary w-100 mt-2" data-bs-toggle="offcanvas"
                        data-bs-target="#reasonOffcanvas">Tiếp tục</button>
                </div>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="reasonOffcanvas"
                aria-labelledby="reasonOffcanvasLabel">
                <div class="offcanvas-header bg-primary text-white">
                    <button type="button" class="btn btn-link text-white p-0" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <h5 class="offcanvas-title ms-3" id="reasonOffcanvasLabel">Lí do hủy</h5>
                </div>
                <div class="offcanvas-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <input class="form-check-input me-2" type="radio" name="reason" id="reason1">
                            <label class="form-check-label" for="reason1">Tôi bận nên không đi nữa</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-2" type="radio" name="reason" id="reason2">
                            <label class="form-check-label" for="reason2">Tôi đặt nhầm giờ/ngày</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-2" type="radio" name="reason" id="reason3">
                            <label class="form-check-label" for="reason3">Tôi đặt nhầm tuyến đường</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-2" type="radio" name="reason" id="reason4">
                            <label class="form-check-label" for="reason4">Hãng xe không có tiện ích cần thiết</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-2" type="radio" name="reason" id="reason5">
                            <label class="form-check-label" for="reason5">Tôi muốn đón dọc đường/trung chuyển nhưng nhà
                                xe không đón</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-2" type="radio" name="reason" id="reason6">
                            <label class="form-check-label" for="reason6">Bất khả kháng về sức khỏe</label>
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-2" type="radio" name="reason" id="reason7">
                            <label class="form-check-label" for="reason7">*** Lý do khác (dùng ghi chú hủy vé)
                                ***</label>
                        </li>
                    </ul>
                </div>

                <div class="offcanvas-footer p-3">
                    <button class="btn btn-primary w-100 mt-2" data-bs-toggle="modal"
                        data-bs-target="#confirmCancelModal">Xong</button>
                </div>
            </div>

            <div class="modal fade" id="confirmCancelModal" tabindex="-1" aria-labelledby="confirmCancelModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center p-4">
                        <div class="modal-icon mb-3">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/popup_icon_question_rounded.svg"
                                alt="Question Icon" class="img-fluid modal-icon-image">
                        </div>
                        <h5 class="modal-title mb-2" id="confirmCancelModalLabel">Xác nhận hủy vé</h5>
                        <div class="modal-body">
                            Chúng tôi sẽ không giữ chỗ bạn đã chọn nữa.
                        </div>
                        <div class="modal-footer border-0 justify-content-center">
                            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Quay
                                lại</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#cancelSuccessModal">Hủy đơn hàng</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="cancelSuccessModal" tabindex="-1" aria-labelledby="cancelSuccessModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center p-4">
                        <!-- Success icon at the top -->
                        <div class="modal-icon mb-3">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/check-circle-shadow.svg"
                                alt="Success Icon" class="img-fluid success-icon-image">
                        </div>
                        <h5 class="modal-title mb-2" id="cancelSuccessModalLabel">Hủy đơn hàng thành công</h5>
                        <div class="modal-body">
                            Bạn có thể đặt lại vé khác bất kỳ lúc nào.
                        </div>
                        <div class="modal-footer border-0 justify-content-center">
                            <button type="button" class="btn btn-dark full-width-button"
                                data-bs-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img mb-5">
                <div class="img-body">
                    <a href="#">
                        <img src="//static.vexere.com/production/banners/1085/__banner-mobile_960x-(2).jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="other-services">
                <h5 class="font-weight-bold custom-services">Dịch vụ khác dành cho bạn</h5>
                <a href="#">
                    <div class="service-card red-card">
                        <div class="service-content">
                            <h6 class="service-title">Thuê xe máy đời mới, giao tận khách sạn</h6>
                            <p class="service-description">Đà Lạt, Vũng Tàu, Sa Pa, Hà Giang</p>
                        </div>
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/motobiker-rental.png" alt="Motorbike"
                            class="service-image">
                    </div>
                </a>
                <a href="#">
                    <div class="service-card green-card">
                        <div class="service-content">
                            <h6 class="service-title">Thuê xe du lịch giá rẻ</h6>
                            <p class="service-description">Trên toàn quốc, đa dạng loại xe</p>
                        </div>
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bus-hide.png" alt="Tourist Car"
                            class="service-image">
                    </div>
                </a>
            </div>

            <div class="card">
                <div class="app-promotion-container">
                    <h5 class="app-promotion-title">Tích điểm, đổi ưu đãi với app Vexere!</h5>
                    <div class="app-promotion-content">
                        <div class="app-qr-code">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/landingpagetet2023/download_app_qr.png"
                                alt="QR down App">
                        </div>
                        <div class="app-download-links">
                            <a href="https://apps.apple.com/vn/app/vexere-v%C3%A9-xe-m%C3%A1y-bay-thu%C3%AA-xe/id1183279479"
                                class="app-download-link">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/download-app-store.png"
                                    alt="Download on App Store" class="app-download-icon">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.vexere.vexere&pli=1"
                                class="app-download-link">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/download-gg-play.png"
                                    alt="Get it on Google Play" class="app-download-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer mt-4 mb-5 d-flex justify-content-center custom-btn">
    <a href="#" class="btn btn-outline-primary my-ticket-btn">Vé của tôi</a>
    <a href="#" class="btn btn-warning text-dark book-ticket-btn">Đặt chiều vé</a>
</footer>
@endsection

@push('page-scripts')
<script>
document.getElementById('toggle-details').addEventListener('click', function() {
    var details = document.getElementById('payment-details');
    var arrowIcon = document.getElementById('arrow-icon');

    if (details.style.display === 'none') {
        details.style.display = 'block';
        arrowIcon.style.transform = 'rotate(180deg)';
    } else {
        details.style.display = 'none';
        arrowIcon.style.transform = 'rotate(0deg)';
    }
});
</script>
@endpush