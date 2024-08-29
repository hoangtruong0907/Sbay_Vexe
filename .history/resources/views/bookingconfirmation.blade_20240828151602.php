@section('styles')
<!--Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
<style scoped>

<<<<<<< Updated upstream
.w-right-section {
    width: 375px;
}

.form-floating-label {
    position: relative;
    margin-bottom: 20px;
}

.form-floating-label input {
    padding: 12px 10px;
    font-size: 1rem;
    width: 100%;
    border: 1px solid #ced4da;
    border-radius: 5px;
}

.form-floating-label label {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    font-size: 1rem;
    color: #6c757d;
    transition: 0.2s ease all;
    pointer-events: none;
}

.form-floating-label input:focus~label,
.form-floating-label input:not(:placeholder-shown)~label {
    top: -10px;
    left: 8px;
    font-size: 0.85rem;
    color: #495057;
}

.pointer {
    cursor: pointer;
}

.search-icon {
    pointer-events: none;
    color: #aaa;
}

.search-input:focus+.search-icon {
    display: none;
}

/* tab content*/
.tab-content {
    max-height: calc(100vh - 200px);
    overflow-y: auto;
}

.modal-dialog {
    max-height: 80vh;
    overflow-y: auto;
}

.nav-tabs .nav-link {
    border: none;
    border-radius: 0;
    padding: 0.5rem 1rem;
    min-width: 10rem;
    text-align: center;
}

.nav-tabs .nav-link.active {
    border-bottom: 2px solid #007bff;
    color: rgb(0, 0, 0);
    font-weight: bold;
}

.custom-modal-width {
    max-width: 700px;
}

.offcanvas-header {
    border-bottom: 2px solid #000000d9;
}

/* popover chi tiết */
.popover {
    max-width: 500px;
    width: 100%;
}

.popover-header {
    font-size: 1.25rem;
    font-weight: bold;
}

.popover-body {
    font-size: 14px;
}

/* check box */
.custom-checkbox {
    position: relative;
    padding-left: 30px;
    /* Khoảng cách giữa checkbox và label */
    cursor: pointer;
    font-size: 18px;
    user-select: none;
    /* Không cho phép chọn text khi click */
}

.custom-checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.custom-checkbox .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 5px;
}

.custom-checkbox:hover input~.checkmark {
    background-color: #ccc;
}

.custom-checkbox input:checked~.checkmark {
    background-color: #007bff;
    border: none;
}

.custom-checkbox .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.custom-checkbox input:checked~.checkmark:after {
    display: block;
}

.custom-checkbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 6px;
    height: 12px;
    border: solid white;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
}
=======
>>>>>>> Stashed changes
</style>
@endsection

@section('title', 'Booking Confirmation')
@extends('layouts.app')

@section('content')
<div class="content-booking">


<<<<<<< Updated upstream
    <div class="container  mx-auto flex-column flex gap-3" style="padding: 20px 0px; width: 1016px;">
=======
    <div class="container container-booking mx-auto flex-column flex gap-3">
>>>>>>> Stashed changes
        <!-- Back button and image -->
        <div class="d-flex align-items-center mb-3">
            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/chevron_left_gray.svg" alt="">
            <a href="#" class="fw-medium mb-0 text-decoration-none fs-6">Quay
                lại</a>
        </div>
        <!-- Main content layout -->
        <div class="main-content d-flex gap-4">
            <!-- Left section -->
            <div class=" d-flex flex-column gap-3 w-100">
<<<<<<< Updated upstream
                <div
                    class="left-section d-flex border flex-column gap-3 border-light-subtle p-4 left-top bg-white rounded-2 card-border-radius card-border-radius">
                    <div class="d-flex justify-content-between align-items-center border border-secondary rounded"
                        style="padding: 12px 12px 12px 16px">
                        <p class="fw-medium mb-0 text-dark   text">Đăng nhập để tự điền thông tin và nhận điểm khi
=======
                <div class="left-section d-flex border flex-column gap-3 border-light-subtle p-4 left-top bg-white rounded-2 card-border-radius card-border-radius">
                    <div class="d-flex justify-content-between align-items-center border border-secondary rounded p-3"
                        >
                        <p class="fw-medium mb-0 text-dark  text">Đăng nhập để tự điền thông tin và nhận điểm khi
>>>>>>> Stashed changes
                            đặt vé</p>
                        <button class="btn btn-dark w-custom-120">Đăng nhập</button>
                    </div>

                    <h1 class="fw-bold fs-5">Thông tin liên hệ</h1>
                    <div class="form-floating-label mt-2">
                        <input type="text" id="name" placeholder=" " required>
                        <label>
                            Tên người đi
                            <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="money me-3 align-items-center border rounded-3 bg-white text-dark pointer"
                             data-bs-toggle="offcanvas"
                            data-bs-target="#countryPhonesRight" aria-controls="countryPhonesRight">
                            <p class=" mb-0 lh-base">🇻🇳 +84</p>
                        </div>
                        <div class="form-floating-label flex-grow-1">
                            <input type="text" id="phone" placeholder=" " required class="form-control">
                            <label for="phone">
                                Số điện thoại
                                <span class="text-danger">*</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-floating-label">
                        <input type="text" id="name" placeholder=" " required>
                        <label>
                            Email để nhận thông tin đặt chỗ
                            <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="announcement d-flex align-items-center p-2 rounded-2">
                        <i class="material-icons-round me-2 text-success">verified_user</i>
                        <p class="mb-0">Số điện thoại và email được sử dụng để gửi thông tin đơn hàng và liên hệ khi
                            cần thiết.</p>
                    </div>
                </div>
                <!--bottom-left section -->
                <div
                    class="bottom-left d-flex flex-column gap-3 bg-white border border-light-subtle rounded-2 p-4 card-border-radius">
                    <div class="container">
                        <h1 class="fw-bold fs-5 text-black">Tiện ích</h1>
                        <div class="d-flex flex-column align-items-center">
                            <div class="pb-3 w-100 d-flex align-items-center justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="ms-3">
                                        <div class="d-flex align-items-center flex-row">
                                            <div class="me-2 mb-3">
                                                <img class="w-auto"
                                                    src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/icon_protect_trip.svg"
                                                    alt="icon_protect_trip">
                                            </div>
                                            <div class="d-flex fw-normal text-dark">
                                                <p class="fw-semibold d-inline">
                                                    Bảo hiểm chuyến đi
                                                </p>
                                                <p class="spacing fw-normal mb-0 ms-1 lh-sm" >
                                                    (+20.000đ/ghế)
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-center">
                                            <p class="p-content text-muted fw-normal fs-7 mb-0"
                                               >
                                                Được bồi thường lên đến 400.000.000đ/ghế.</p>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <p class="p-content-2 text-muted fw-normal mb-0">
                                                Cung cấp bởi
                                            </p>
                                            <div class="d-flex flex-row align-items-center">
                                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/baoviet.svg"
                                                    alt="baoviet">
                                                <img class="w-auto mx-1"
                                                    src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/close_gray.svg"
                                                    alt="close-gray">
                                            </div>
                                            <img class="w-auto"
                                                src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/icon_saladin.svg"
                                                alt="icon_saladin">
                                        </div>
                                    </div>
                                </div>
                                <label
                                    class="d-inline-block text-dark text-opacity-65 lh-sm mb-3 pointer custom-checkbox ">
                                    <input type="checkbox" value="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="pointer note-pointer">
                            <div class="content-box p-3 rounded-3 " >
                                <div class="d-flex flex-column mb-3" >
                                    <p class="text-title fw-bold mb-0 lh-sm" >
                                        Bảo hiểm tai nạn
                                    </p>
                                    <p class="text-content text-muted mb-0 fw-normal">
                                        Quyền lợi bảo hiểm lên đến 400
                                        triệu đồng khi xảy ra tai nạn
                                    </p>
                                </div>
                                <div class="d-flex flex-column  mb-3" >
                                    <p class="text-title fw-bold mb-0 lh-sm" >
                                        Bảo hiểm hủy chuyến
                                    </p>
                                    <p class="text-content text-muted mb-0 fw-normal" >
                                        Bồi thường 100% tiền vé nếu chuyến đi bị hủy bởi các lí do khách quan hoặc bất
                                        khả
                                        kháng về sức khỏe.
                                    </p>
                                </div>
                            </div>

                            <div class="note-box d-flex flex-row justify-content-between">
                                <p class="text-content mb-0 fw-normal " >
                                    Bồi thường trực tuyến nhanh chóng, dễ dàng
                                </p>
                                <p class="fw-bold mb-0 text-decoration-underline text-underline-offset-1 font-custom-12"
                                    data-bs-toggle="modal"
                                    data-bs-target="#utilityDetailslModal">
                                    Chi tiết
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column align-items-center g-3 border-top border-light-subtle pt-2">
                        <div class="d-flex align-items-center justify-content-between w-100 p-1">
                            <div class="d-flex align-items-center">
                                <img class="me-3" src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/rental.svg"
                                    alt="rental">
                                <div>
                                    <p class="fw-bold mb-0">Thuê xe máy tại Hải Phòng</p>
                                    <p class="text-muted mb-0 font-custom-12" >Vexere sẽ liên hệ lại để xác
                                        nhận
                                        dịch vụ.</p>
                                </div>
                            </div>
                            <label class="d-inline-block text-dark text-opacity-65 lh-sm mb-3 pointer custom-checkbox ">
                                <input type="checkbox" value="">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="container mt-4">
                            <div class="d-flex overflow-auto">
                                <!-- Bike Item 1 -->
                                <div class="d-flex flex-column me-3 text-center w-128">
                                    <img class="img-fluid"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/images/thuexe/Xe_so_110cc_-_Yamaha_Sirius.jpg"
                                        alt="bike-image">
                                    <p class="fw-medium mt-2 mb-1 text-dark">Xe số 110cc</p>
                                    <p class="text-muted mb-1">Dòng xe bất kỳ</p>
                                    <p class="text-danger mb-1 fw-bold">120.000đ/ngày</p>
                                    <div class="text-muted font-custom-12" >Giao xe tận nơi</div>
                                </div>
                                <!-- Bike Item 2 -->
                                <div class="d-flex flex-column me-3 text-center w-128">
                                    <img class="img-fluid"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/images/thuexe/Xe_tay_ga_Honda_AirBlad_125cc_2018.jpg"
                                        alt="bike-image">
                                    <p class="fw-medium mt-2 mb-1 text-dark">Xe tay ga 125cc</p>
                                    <p class="text-muted mb-1">Dòng xe bất kỳ</p>
                                    <p class="text-danger mb-1 fw-bold">120.000đ/ngày</p>
                                    <div class="text-muted font-custom-12" >Giao xe tận nơi</div>
                                </div>
                            </div>
                        </div>
                        <div class="announcement d-flex align-items-center p-2 rounded-2 w-100 mt-3">
                            <i class="material-icons-round me-2 text-success">verified_user</i>
                            <p class="mb-0">Thuê càng lâu, giá càng rẻ!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right section -->
            <div class="right-section d-flex flex-column gap-3 w-right-section" style="width: 375px;">
                <!--Right top -->
                <div
                    class="d-flex justify-content-between bg-white border border-light-subtle rounded-2 w-100 p-3 card-border-radius">
                    <div class="d-flex flex-column gap-3 w-100">
                        <div class="d-flex justify-content-between w-100 pointer" id="totalAmount">
                            <div class="fw-bold fs-5 mb-0 text-black">Tạm tính</div>
                            <div class="d-flex align-items-center gap-1">
                                <p class="fw-bold fs-5 mb-0">260.000đ</p>
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                    alt="icon-expand-less" width="20" height="20">
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-2 d-none" id="showTotalAmount">
                            <div class="d-flex justify-content-between">
                                <div class="label color--darkness">Giá vé</div>
                                <div class="text-end">
                                    <p class="mb-0 ">240.000đ x 1</p>
                                    <p class="mb-0 seat-code" >Mã
                                        ghế/giường: 06</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="text-dark">Bảo hiểm chuyến đi</div>
                                <div class="content">20.000đ</div>
                            </div>
                        </div>
                    </div>


                </div>
                <!--Right bottom -->
                <div
                    class="d-flex justify-content-between bg-white border border-light-subtle rounded-2 w-100 p-3 card-border-radius">
                    <div class="d-flex flex-column gap-3 w-100">
                        <div class="fw-bold fs-5 mb-0 text-black">Thông tin chuyến đi</div>
                        <div class="d-flex flex-column gap-3">
                            <div
                                class="d-flex flex-column align-items-center bg-white border border-light-subtle rounded-2 w-100">
                                <div data-bs-toggle="offcanvas" data-bs-target="#tripDetailsRight"
                                    aria-controls="tripDetailsRight"
                                    class="d-flex w-100 p-2 gap-3 border-bottom align-items-center justify-content-between pointer">
                                    <div class="d-flex align-items-center gap-2">
                                        <img data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/bus_blue_24dp.svg"
                                            src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/bus_blue_24dp.svg"
                                            alt="bus_blue_icon" width="16" height="16">
                                        <p class="fw-bold mb-0 font-custom-12" >CN, 04/08/2024</p>
                                        <div class="d-flex align-items-center">
                                            <img data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/people_alt_black_24dp.svg"
                                                src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/people_alt_black_24dp.svg"
                                                alt="people_alt_black_icon" width="16" height="16">
                                            <p class="fw-normal mb-0 ms-1 ml-2 font-custom-12" >1</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="link fw-bold mb-0 text-decoration-underline text-primary">
                                            Chi tiết
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column w-100 gap-3 pt-0 px-3 pb-3" >
                                    <div class="d-flex align-items-center w-100 gap-3 border-bottom pointer py-2 px-0"
                                     >
                                        <div class="avatars">
                                            <img src="https://static.vexere.com/production/images/1689135259785.jpeg"
                                                alt="avatar">
                                        </div>
                                        <div class="d-grid align-items-center p-0 flex-grow-1 row-gap-1">
                                            <p class="mb-0 fw-semibold font-custom-14">
                                                Hải Phòng Travel (Đất Cảng)
                                            </p>
                                            <p class="mb-0 note-text">
                                                Limousine 11 chỗ
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex position-relative w-100">
                                        <div class="mx-auto d-grid w-100">
                                            <div class="d-flex pointer" data-bs-toggle="offcanvas"
                                                data-bs-target="#changeRight" aria-controls="changeRight">
                                                <div class="d-flex flex-column justify-content-between">
                                                    <div class="text-nowrap mx-auto text-center">
                                                        <p class="fw-bold   mb-0">
                                                            06:02
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-between">
                                                    <div class="icon d-flex flex-column justify-content-between mx-auto"
                                                        >
                                                        <img data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                                            src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                                            alt="pickup-icon" width="12" height="12">
                                                    </div>
                                                    <div class="d-flex min-height-24" >
                                                        <div class="border-end border-light border-bottom-1" >
                                                        </div>
                                                        <div class="border-start border-light border-bottom-1"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 mx-auto justify-content-between w-100">
                                                    <div class="d-flex flex-column w-100">
                                                        <p class="fw-bold mb-1 lh-1 font-custom-12" >
                                                            Hà Nội </p>
                                                        <p class="note-text text-muted mb-0"
                                                            >
                                                            Số 79 đường Cổ Linh, Long Biên, Hà Nội</p>
                                                    </div>
                                                    <div class="d-flex justify-content-center text-nowrap">
                                                        <p class="change fw-bold text-primary mb-0">
                                                            Thay đổi</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row -->
                                            <div class="d-flex pointer" data-bs-toggle="offcanvas"
                                                data-bs-target="#changeRight" aria-controls="changeRight">
                                                <div class="d-flex flex-column justify-content-between">
                                                    <div class="text-nowrap mx-auto text-center">
                                                        <p class="fw-bold   mb-0">
                                                            07:32
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-between">
                                                    <div class="d-flex min-height-24">
                                                        <div class="border-end border-light border-bottom-1" >
                                                        </div>
                                                        <div class="border-start border-light border-bottom-1"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="icon-location  ">
                                                        <img data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/dropoff_semantic_negative_12dp.svg"
                                                            src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/dropoff_semantic_negative_12dp.svg"
                                                            alt="dropoff-icon" width="12" height="12">
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 mx-auto justify-content-between w-100">
                                                    <div class="d-flex flex-column w-100">
                                                        <p class="fw-bold mb-1 lh-1 font-custom-12" >
                                                            Hải Phòng
                                                        </p>
                                                        <p class="note-text text-muted mb-0"
                                                           >
                                                            61 Phạm Văn Đồng, Phường Anh Dũng, Dương Kinh, Hải Phòng
                                                        </p>
                                                    </div>
                                                    <div class="d-flex justify-content-center text-nowrap">
                                                        <p class="fw-bold text-primary mb-0 change" data-bs-toggle="offcanvas"
                                                            data-bs-target="#changeRight" aria-controls="changeRight">
                                                            Thay đổi</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-light">
        <div class="note sub-bt">
            <div class="d-flex flex-column gap-3 w-100">
                <div class="note btn-container">
                    <button disabled="" type="button" class="bt-sub"
                    >
                        <span>
                            Tiếp tục đặt vé một chiều
                        </span>
                    </button>

                    <button type="button" class="bt2-sub">
                        <span>Đặt thêm chiều về</span>
                    </button>

                </div>

                <div class="flex-fill text-dark lh-base text-center">
                    Bằng việc tiếp tục, bạn đồng ý với
                    <a href="#" class="fw-bold mb-0 text-decoration-underline lh-sm text-primary" target="_blank">
                        Chính sách bảo mật thanh toán
                    </a>
                    và <a href="#" class="fw-bold mb-0 text-decoration-underline lh-sm text-primary" target="_blank">
                        Quy chế
                    </a>
                </div>
            </div>

            <div class="sub-left">
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex flex-column">
                        <p class="fs-6 fw-bold mb-0 text-success">
                            Đặt thêm chiều về, giảm ngay 20k!
                        </p>
                        <p class="fw-normal mb-0 lh-sm" >
                            Áp dụng khi đặt cùng nhà xe Hải Phòng Travel (Đất Cảng) (dùng mã giảm giá khứ hồi ở bước
                            thanh
                            toán).
                        <p id="detailsButton"
                            class="fw-bold mb-0 text-decoration-underline lh-sm text-primary pointer mt-1"
                            data-bs-toggle="popover" data-bs-trigger="manual" data-bs-placement="top"
                            data-bs-html="true" title="<div class='text-center'>Phạm vi áp dụng</div>" data-bs-content="
                                <div class='popup-info-section terms-and-conditions border-bottom pb-2'>
                                    <div class='popup-info-row d-flex align-items-center mb-1'>
                                        <i class='material-icons-round text-muted me-2'>alt_route</i>
                                        <p class='mb-0 text-dark'>
                                            <strong>Tuyến đường</strong>: Tất cả tuyến đường
                                        </p>
                                    </div>
                                    <div class='popup-info-row d-flex align-items-center mb-1'>
                                        <i class='material-icons-round text-muted me-2'>directions_bus</i>
                                        <p class='mb-0 text-dark'><strong>Nhà xe</strong>: Hải Phòng Travel</p>
                                    </div>
                                    <div class='popup-info-row d-flex align-items-center mb-1'>
                                        <i class='material-icons-round text-muted me-2'>timer</i>
                                        <p class='mb-0 text-dark'>
                                            <strong>Ngày khởi hành</strong>: T6, 14/06 00:00 - T4, 31/12/2025 00:00 (trừ 30/08 - 04/09; 30/12 - 02/01/2025)
                                        </p>
                                    </div>
                                </div>
                                <div class='popup-info-row d-flex pt-3'>
                                    <p class='mb-0'>
                                        Giảm 20k khi đơn hàng mua từ 1 vé trở lên.<br>
                                        - Lưu ý: Các điều kiện và số tiền giảm giá khứ hồi sẽ được xét và giảm trừ trên chiều về.<br>
                                        - Chiều đi và chiều về phải cùng một nhà xe và số lượng vé phải bằng nhau.<br>
                                        - Vé chiều đi và chiều về phải khởi hành trong cùng ngày.<br>
                                        - Mã giảm giá khứ hồi sẽ không còn được áp dụng nếu đơn hàng bị huỷ 1 chiều hoặc cả 2 chiều.<br>
                                        - Vé có sử dụng mã giảm giá thuộc chương trình KHÔNG được hoàn/hủy/đổi/trả.<br>
                                        - Ưu đãi chỉ áp dụng cho KH đặt vé tại Website/App và tổng đài đặt vé VeXeRe. Không áp dụng hình thức thanh toán tại Nhà xe.<br>
                                        - Có thể áp dụng đồng thời với các chương trình khuyến mãi từ đối tác thanh toán.<br>
                                        - Số lượng mã giảm giá có giới hạn, chương trình có thể kết thúc sớm hơn so với dự kiến.
                                    </p>
                                </div>
                            ">
                            Chi tiết
                        </p>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------- Drawer ---------------------------------->
    <!--Chọn mã quốc gia - SĐT-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="countryPhonesRight" aria-labelledby="countryPhonesRightLabel"
        >
        <div class="country">
            <div class="pointer country-pointer" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="material-icons-round ">arrow_back</i>
            </div>
            <div class="country-code" >
                <p>
                    Chọn mã quốc gia</p>
            </div>
        </div>
        <!--end headrer -->
        <div class="country-header">
            <div class="input-group position-relative">
                <input class="form-control border rounded-pill ps-5 search-input" type="search"
                    placeholder="Tìm kiếm trong danh sách">
                <span class="position-absolute top-50 translate-middle-y ms-3 search-icon">
                    <i class="fa fa-search"></i>
                </span>
            </div>
        </div>
        <!--end search box -->
        <div class="country-box" >
            <div class="d-flex align-items-center bg-white p-3 ps-4 pointer">
                <div>🇰🇾</div>
                <div class="d-flex flex-row ms-3">
                    <p class="country-name" >
                        Cayman Islands (+ 345)
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center bg-white p-3 ps-4 pointer">
                <div>🇨🇦</div>
                <div class="d-flex flex-row ms-3">
                    <p class="country-name">
                        Canada (+1)
                    </p>
                </div>
            </div>
        </div>
        <!--end content -->
        <!--Close button -->
        <div class="d-flex gap-3 p-3 bg-white broder-color-custom" >
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                class="bt-close"
               >
                <span>Đóng</span>
            </button>
        </div>
    </div>
    <!-- Chi tiết chuyến đi-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="tripDetailsRight" aria-labelledby="tripDetailsRightLabel"
       >
        <div class="travel">
            <div class="pointer travel-pointer" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="material-icons-round ">arrow_back</i>
            </div>
            <div class="travel-header">
                <div class="d-flex flex-column w-100 justify-content-start mb-1 pt-1">
                    <div class="d-flex flex-row">
                        <p class="travel-name" >
                            Hải Phòng Travel (Đất Cảng)
                        </p>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="travel-name">
                            <span class="fw-medium">06:02 • </span>T2, 12/08/2024
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end headrer -->
        <div class="travel-box">
            <div class="align-items-center bg-white pointer w-100">
                <div class="d-grid gap-3 p-4">
                    <div class="d-grid gap-2">
                        <div class="d-flex justify-content-between gap-5">
                            <p class="fw-normal text-nowrap mb-0 line-letter " >
                                Tuyến</p>

                            <span class="travel-title">
                                Hải Phòng - Hà Nội
                            </span>
                        </div>
                        <div class="d-flex justify-content-between gap-5">
                            <p class="fw-normal text-nowrap mb-0 line-letter " >
                                Nhà xe
                            </p>
                            <span class="travel-title">
                                Hải Phòng Travel
                                (Đất Cảng)
                            </span>
                        </div>
                        <div class="d-flex justify-content-between gap-5">
                            <p class="fw-normal text-nowrap mb-0 line-letter " >
                                Chuyến
                            </p>
                            <span class="travel-title">
                                06:02 • T2, 12/08/2024
                            </span>
                        </div>
                        <div class="d-flex justify-content-between gap-5">
                            <p class="fw-normal text-nowrap mb-0 line-letter " >
                                Loại xe
                            </p>
                            <span class="travel-title">
                                Limousine 11 chỗ
                            </span>
                        </div>
                        <div class="d-flex justify-content-between gap-5">
                            <p class="fw-normal text-nowrap mb-0 line-letter " >
                                Số lượng
                            </p>
                            <span class="travel-title">
                                1 vé
                            </span>
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between w-100 pointer">
                                <p class="fw-normal text-nowrap mb-0 line-letter " >
                                    Mã ghế/ giường
                                </p>
                                <div class="d-flex align-items-center gap-sm-1 pointer">
                                    <p class="fw-bold mb-0  price">
                                        08,07
                                    </p>
                                    <img class="icon-expand-less ls-is-cached lazyloaded"
                                        data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                        alt="icon-expand-less" width="20" height="20">
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-2 mt-2 overflow-auto">
                                <div class="d-flex justify-content-end">
                                    <p class="chair">Ghế đầu:
                                        <span>08</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <p class="chair">Ghế đầu:
                                        <span>08</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-evenly overflow-auto text-center py-1">
                                <table class="bus ms-3 d-inline-block">
                                    <thead>
                                        <tr>
                                            <th colspan="5"
                                               >
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="1">
                                            <td id="vxr-1-1">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div class="Seat__SeatImageContainer-sc-5i6bij-1 iGEkJj"><span
                                                            class="seat-color seat-color-custom"><svg width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12.305 24h-.61c-.035-.004-.07-.01-.105-.012a11.783 11.783 0 0 1-2.117-.261 12.027 12.027 0 0 1-6.958-4.394A11.933 11.933 0 0 1 .027 12.78L0 12.411v-.822c.005-.042.013-.084.014-.127a11.845 11.845 0 0 1 1.102-4.508 12.007 12.007 0 0 1 2.847-3.852A11.935 11.935 0 0 1 11.728.003c.947-.022 1.883.07 2.81.27 1.22.265 2.369.71 3.447 1.335a11.991 11.991 0 0 1 3.579 3.164 11.876 11.876 0 0 1 2.073 4.317c.178.712.292 1.434.334 2.168.008.146.02.292.029.439v.609c-.004.03-.011.06-.012.089a11.81 11.81 0 0 1-1.05 4.521 12.02 12.02 0 0 1-1.92 2.979 12.046 12.046 0 0 1-6.395 3.812c-.616.139-1.24.23-1.872.265-.149.008-.297.02-.446.03zm8.799-13.416c-.527-3.976-4.078-7.808-9.1-7.811-5.02-.003-8.583 3.823-9.11 7.809h.09c.64-.035 1.278-.092 1.912-.195.815-.131 1.614-.326 2.378-.639.625-.255 1.239-.54 1.855-.816.82-.368 1.673-.593 2.575-.62a7.123 7.123 0 0 1 1.947.187c.585.146 1.136.382 1.68.634.57.264 1.14.526 1.733.736 1.2.424 2.442.62 3.706.7.11.006.222.01.334.015zm-10.95 10.471v-.094c0-1.437 0-2.873-.002-4.31 0-.141-.011-.284-.035-.423a2.787 2.787 0 0 0-.775-1.495c-.564-.582-1.244-.896-2.067-.892-1.414.007-2.827.002-4.24.002h-.09a9.153 9.153 0 0 0 3.125 5.256 9.15 9.15 0 0 0 4.083 1.956zm3.689.001c1.738-.36 3.25-1.137 4.528-2.355 1.4-1.334 2.287-2.956 2.685-4.855l-.077-.003h-4.362c-.237 0-.47.038-.695.112-.667.22-1.188.635-1.588 1.206a2.673 2.673 0 0 0-.494 1.59c.008 1.4.003 2.801.003 4.202v.103zM12.05 14.22c1.215-.035 2.204-1.083 2.165-2.275-.039-1.223-1.095-2.215-2.29-2.166-1.211.05-2.2 1.108-2.15 2.302.051 1.191 1.108 2.186 2.275 2.139z"
                                                                    fill="#858585"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                            <td id="vxr-1-2">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#ae70ff"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 qIAFz"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                            <td id="vxr-1-3">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#ae70ff"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 qIAFz"><span
                                                            class="seat-color-selected"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="2">
                                            <td id="vxr-2-1">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#fba442"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                            <td id="vxr-2-2">
                                                <div> </div>
                                            </td>
                                            <td id="vxr-2-3">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#fba442"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="3">
                                            <td id="vxr-3-1">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#fba442"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                            <td id="vxr-3-2">
                                                <div> </div>
                                            </td>
                                            <td id="vxr-3-3">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#fba442"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="4">
                                            <td id="vxr-4-1">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#fba442"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                            <td id="vxr-4-2">
                                                <div> </div>
                                            </td>
                                            <td id="vxr-4-3">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#fba442"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="5">
                                            <td id="vxr-5-1">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#6bd600"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                            <td id="vxr-5-2">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#6bd600"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm"><span
                                                            class="seat-color"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                            <td id="vxr-5-3">
                                                <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                    <div color="#6bd600"
                                                        class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm"><span
                                                            class="seat-color-selected"><svg width="40" height="32"
                                                                viewBox="0 0 40 32" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                    rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                    fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                    stroke-linejoin="round"></rect>
                                                                <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                    rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                    stroke-width="1.5" stroke-linejoin="round"></rect>
                                                                <path class="icon-selected"
                                                                    d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                    fill="transparent"></path>
                                                                <path class="icon-disabled"
                                                                    d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                    fill="transparent"></path>
                                                            </svg></span></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="d-flex justify-content-between w-100 pointer" id="totalAmountModal">
                                <p class="fw-normal text-nowrap mb-0 line-letter " >
                                    Tạm tính
                                </p>
                                <div class="d-flex align-items-center gap-sm-1">
                                    <p class="fw-bold mb-0  price">
                                        470.000đ
                                    </p>
                                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                        alt="icon-expand-less" width="20" height="20">
                                </div>
                            </div>

                            <div class="pt-2 d-none" id="showTotalAmountModal">
                                <div class="d-flex justify-content-between">
                                    <p class="label color--darkness">Giá vé</p>
                                    <div class="d-flex flex-column">
                                        <div class="text-end">
                                            <p class="mb-0">230.000đ x 1</p>
                                            <p class="mb-0 seat-code"
                                                >Mã
                                                ghế/giường: 06</p>
                                        </div>
                                        <div class="text-end">
                                            <p class="mb-0 fw-medium">240.000đ x 1</p>
                                            <p class="mb-0 seat-code"
                                                 >Mã
                                                ghế/giường: 07</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-1">
                                    <p class="label color--darkness">Bảo hiểm chuyến đi</p>
                                    <div class="text-end">
                                        <p class="mb-0">60.000đ đ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-2" data-bs-toggle="offcanvas" data-bs-target="#changeRight"
                            aria-controls="changeRight">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex gap-1 align-items-center">
                                    <img data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                        alt="pickup-icon" width="16" height="16">
                                    <p class="mb-0 fw-bold line-letter " >
                                        Điểm đón
                                    </p>
                                </div>
                                <p class="fw-bold mb-0 text-decoration-underline lh-sm text-primary pointer">
                                    Thay đổi
                                </p>
                            </div>
                            <div class="gap-1 d-flex flex-column mb-0">
                                <p class="  mb-0 fw-normal line-letter " >
                                    Hải Phòng
                                </p>
                                <p class="  mb-0 fw-normal mb-0 text-secondary line-letter   "
                                   >
                                    61 Phạm Văn Đồng,
                                    Phường Anh Dũng, Dương Kinh, Hải Phòng
                                </p>
                                <span class="time-span">
                                    Dự kiến đón lúc: 06:02 12/08/2024
                                </span>
                            </div>
                        </div>
                        {{-- row --}}
                        <div class="d-flex flex-column gap-2" data-bs-toggle="offcanvas" data-bs-target="#changeRight"
                            aria-controls="changeRight">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex gap-1 align-items-center">
                                    <img data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/dropoff_semantic_negative_12dp.svg"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/dropoff_semantic_negative_12dp.svg"
                                        alt="dropoff-icon" width="16" height="16">
                                    <p class="mb-0   fw-bold line-letter " >
                                        Điểm trả
                                    </p>
                                </div>
                                <p class="fw-bold mb-0 text-decoration-underline lh-sm text-primary pointer">
                                    Thay đổi
                                </p>
                            </div>
                            <div class="gap-1 d-flex flex-column mb-0">
                                <p class="  mb-0 fw-normal line-letter " >
                                    Hà Nội
                                </p>
                                <p class="  mb-0 fw-normal mb-0 text-secondary line-letter"  >
                                    Số 79 đường Cổ Linh,
                                    Long Biên, Hà Nội
                                </p>
                                <span class="time-span">
                                    Dự kiến trả lúc: 07:32 12/08/2024
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  end content  -->
        <!-- Close button -->
        <div class="d-flex gap-3 p-3 bg-white border broder-color-custom">
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                class="bt-close">
                <span>Đóng</span>
            </button>
        </div>
    </div>
    <!-- Thay đổi điểm đón chiều đi -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="changeRight" aria-labelledby="changeRightLabel"
        style="width: 560px;">
        <div class="d-flex flex-row align-items-center bg-primary" style="min-height: 72px; padding: 16px;">
            <div class="pointer text-white" style="width: 24px; height: 24px;" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="material-icons-round ">arrow_back</i>
            </div>
            <div class="d-flex ms-3" style="flex: 1 1 0%;">
                <p class="  mb-0 text-white fw-bold" style="line-height: 24px; letter-spacing: 0px;">
                    Thay đổi điểm đón chiều đi
                </p>
            </div>
        </div>
        <!-- end headrer -->
        <!-- header 2 -->
        <div class="position-sticky d-flex flex-column w-100"
            style="background-color: rgb(247, 247, 247) !important; padding: 12px 20px; z-index: 5;">
            <div class="d-flex flex-row  justify-content-between">
                <p class="fw-normal mb-0" style="font-size: 12px; line-height: 16px; ">Sắp xếp theo</p>
                <p class="fw-normal mb-0" style="font-size: 12px; line-height: 16px;">Khoảng cách từ điểm đón đến
                </p>
            </div>

            <div class="d-flex flex-row justify-content-between mt-1">
                <button type="button" class="d-flex align-items-center p-0 border-0 m-0" id="sortedBy"
                    style="background-color: unset;">
                    <p class="fw-bold mb-0" style="font-size: 12px; line-height: 16px;">
                        Sớm nhất
                    </p>
                    <i class="material-icons-outlined"
                        style="font-size: 16px; line-height: 16px; margin-left: 4px;">arrow_drop_down</i>
                </button>

                <button type="button" class="d-flex flex-row p-0 border-0 m-0" id="changeLocation"
                    style="background-color: unset;">
                    <p class="fw-bold mb-0" style="font-size: 12px; line-height: 16px;">
                        Vị trí của bạn
                    </p>
                    <p class="fw-bold mb-0"
                        style="font-size: 12px; line-height: 16px; margin-left: 4px; text-decoration: underline; color: rgb(36, 116, 229) !important;">
                        Thay đổi
                    </p>
                </button>
            </div>
        </div>
        <!--content -->
        <div class="d-flex flex-column bg-white" style="overflow-x: hidden !important;">
            <div class="d-flex flex-column" style="min-width: 232px;">
                <label class="d-flex align-items-start mb-0"
                    style="padding: 16px 0 0 20px; background-color: rgb(227, 237, 252);">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                        value="Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)-122778-175340-0" checked />
                    <div style="flex: 1 1 0%; padding: 0px; margin-left: 12px;">
                        <div class="d-flex flex-column "
                            style="padding: 0px 20px 16px 32px; border-bottom: 0.5px solid rgb(224, 224, 224); margin-left: -32px;">
                            <div class="d-flex flex-row" style="flex: 1 1 0%;">
                                <div class="d-flex flex-column justify-content-center position-relative w-75">
                                    <div class="d-flex flex-row align-items-start align-items-center">
                                        <p class="fw-bold ms-1 mb-1">
                                            18:00
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="fw-medium mb-1 line-letter " >
                                            Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start ">
                                        <p class="fw-normal mb-1 text-secondary"
                                            style="line-height: 16px; font-size: 12px;">
                                            Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1), Thị trấn Sóc Sơn, Sóc Sơn, Hà Nội
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start text-danger">
                                        <p class="fw-normal mb-1" style="line-height: 16px; font-size: 12px;">
                                            220.000đ / nhóm từ 1-3 khách (trả tại website Vexere)
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-center position-relative w-25">
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="position-absolute text-center fw-bold mb-0 top-0 end-0"
                                            style="width: calc(100% + 42px); line-height: 20px;">
                                            636.9 km
                                        </p>
                                    </div>
                                    <button type="button" id="viewLocation"
                                        class="d-flex justify-content-end p-0 border-0 m-0 bg-transparent">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <div class="d-flex" style="width: 24px; height: 24px;">
                                                <i class="material-icons-round text-primary">place</i>
                                            </div>
                                            <p class="fw-normal text-primary mb-0"
                                                style="line-height: 20px; letter-spacing: 0px;text-decoration: underline;">
                                                Xem vị trí
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <!--end row -->
                <label class="d-flex align-items-start mb-0" style="padding: 16px 0 0 20px; background-color: unset;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                        value="Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)-122778-175340-0" />
                    <div style="flex: 1 1 0%; padding: 0px; margin-left: 12px;">
                        <div class="d-flex flex-column "
                            style="padding: 0px 20px 16px 32px; border-bottom: 0.5px solid rgb(224, 224, 224); margin-left: -32px;">
                            <div class="d-flex flex-row" style="flex: 1 1 0%;">
                                <div class="d-flex flex-column justify-content-center position-relative w-75">
                                    <div class="d-flex flex-row align-items-start align-items-center">
                                        <p class="fw-bold ms-1 mb-1">
                                            18:15
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="fw-medium mb-1 line-letter " >
                                            Văn phòng 51 Nguyễn Quốc Trị
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start ">
                                        <p class="fw-normal mb-1 text-secondary"
                                            style="line-height: 16px; font-size: 12px;">
                                            Số 51 Nguyễn Quốc Trị (Quán Cafe Mốt), Phường Trung Hoà, Cầu Giấy, Hà Nội
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-center position-relative w-25">
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="position-absolute text-center fw-bold mb-0 top-0 end-0"
                                            style="width: calc(100% + 42px); line-height: 20px;">
                                            606.5 km
                                        </p>
                                    </div>
                                    <button type="button" id="viewLocation"
                                        class="d-flex justify-content-end p-0 border-0 m-0 bg-transparent">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <div class="d-flex" style="width: 24px; height: 24px;">
                                                <i class="material-icons-round text-primary">place</i>
                                            </div>
                                            <p class="fw-normal text-primary mb-0"
                                                style="line-height: 20px; letter-spacing: 0px; text-decoration: underline;">
                                                Xem vị trí
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <!--end row -->
                <label class="d-flex align-items-start mb-0" style="padding: 16px 0 0 20px; background-color: unset;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                        value="Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)-122778-175340-0" />
                    <div style="flex: 1 1 0%; padding: 0px; margin-left: 12px;">
                        <div class="d-flex flex-column "
                            style="padding: 0px 20px 16px 32px; border-bottom: 0.5px solid rgb(224, 224, 224); margin-left: -32px;">
                            <div class="d-flex flex-row" style="flex: 1 1 0%;">
                                <div class="d-flex flex-column justify-content-center position-relative w-75">
                                    <div class="d-flex flex-row align-items-start align-items-center">
                                        <p class="fw-bold ms-1 mb-1">
                                            18:15
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="fw-medium mb-1 line-letter " >
                                            Văn phòng 51 Nguyễn Quốc Trị
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start ">
                                        <p class="fw-normal mb-1 text-secondary"
                                            style="line-height: 16px; font-size: 12px;">
                                            Số 51 Nguyễn Quốc Trị (Quán Cafe Mốt), Phường Trung Hoà, Cầu Giấy, Hà Nội
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-center position-relative w-25">
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="position-absolute text-center fw-bold mb-0 top-0 end-0"
                                            style="width: calc(100% + 42px); line-height: 20px;">
                                            606.5 km
                                        </p>
                                    </div>
                                    <button type="button" id="viewLocation"
                                        class="d-flex justify-content-end p-0 border-0 m-0 bg-transparent">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <div class="d-flex" style="width: 24px; height: 24px;">
                                                <i class="material-icons-round text-primary">place</i>
                                            </div>
                                            <p class="fw-normal text-primary mb-0"
                                                style="line-height: 20px; letter-spacing: 0px; text-decoration: underline;">
                                                Xem vị trí
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <!--end row -->

                <label class="d-flex align-items-start mb-0" style="padding: 16px 0 0 20px; background-color: unset;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                        value="Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)-122778-175340-0" />
                    <div style="flex: 1 1 0%; padding: 0px; margin-left: 12px;">
                        <div class="d-flex flex-column "
                            style="padding: 0px 20px 16px 32px; border-bottom: 0.5px solid rgb(224, 224, 224); margin-left: -32px;">
                            <div class="d-flex flex-row" style="flex: 1 1 0%;">
                                <div class="d-flex flex-column justify-content-center position-relative w-75">
                                    <div class="d-flex flex-row align-items-start align-items-center">
                                        <p class="fw-bold ms-1 mb-1">
                                            18:15
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="fw-medium mb-1 line-letter " >
                                            Văn phòng 51 Nguyễn Quốc Trị
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start ">
                                        <p class="fw-normal mb-1 text-secondary"
                                            style="line-height: 16px; font-size: 12px;">
                                            Số 51 Nguyễn Quốc Trị (Quán Cafe Mốt), Phường Trung Hoà, Cầu Giấy, Hà Nội
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-center position-relative w-25">
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="position-absolute text-center fw-bold mb-0 top-0 end-0"
                                            style="width: calc(100% + 42px); line-height: 20px;">
                                            606.5 km
                                        </p>
                                    </div>
                                    <button type="button" id="viewLocation"
                                        class="d-flex justify-content-end p-0 border-0 m-0 bg-transparent">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <div class="d-flex" style="width: 24px; height: 24px;">
                                                <i class="material-icons-round text-primary">place</i>
                                            </div>
                                            <p class="fw-normal text-primary mb-0"
                                                style="line-height: 20px; letter-spacing: 0px; text-decoration: underline;">
                                                Xem vị trí
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <!--end row -->
                <label class="d-flex align-items-start mb-0" style="padding: 16px 0 0 20px; background-color: unset;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                        value="Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)-122778-175340-0" />
                    <div style="flex: 1 1 0%; padding: 0px; margin-left: 12px;">
                        <div class="d-flex flex-column "
                            style="padding: 0px 20px 16px 32px; border-bottom: 0.5px solid rgb(224, 224, 224); margin-left: -32px;">
                            <div class="d-flex flex-row" style="flex: 1 1 0%;">
                                <div class="d-flex flex-column justify-content-center position-relative w-75">
                                    <div class="d-flex flex-row align-items-start align-items-center">
                                        <p class="fw-bold ms-1 mb-1">
                                            18:16
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="fw-medium mb-1 line-letter " >
                                            Văn phòng 51 Nguyễn Quốc Trị
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start ">
                                        <p class="fw-normal mb-1 text-secondary"
                                            style="line-height: 16px; font-size: 12px;">
                                            Số 51 Nguyễn Quốc Trị (Quán Cafe Mốt), Phường Trung Hoà, Cầu Giấy, Hà Nội
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-center position-relative w-25">
                                    <div class="d-flex flex-column align-items-start">
                                        <p class="position-absolute text-center fw-bold mb-0 top-0 end-0"
                                            style="width: calc(100% + 42px); line-height: 20px;">
                                            606.52 km
                                        </p>
                                    </div>
                                    <button type="button" id="viewLocation"
                                        class="d-flex justify-content-end p-0 border-0 m-0 bg-transparent">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <div class="d-flex" style="width: 24px; height: 24px;">
                                                <i class="material-icons-round text-primary">place</i>
                                            </div>
                                            <p class="fw-normal text-primary mb-0"
                                                style="line-height: 20px; letter-spacing: 0px; text-decoration: underline;">
                                                Xem vị trí
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <!--end row -->
            </div>
        </div>
        <!--end content -->
        <!--footer -->
        <div class="border-top border-secondary bg-white position-absolute start-0 bottom-0 w-100 p-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>Sai hoặc thiếu thông tin?</div>
                <p class="text-primary fw-bold text-decoration-underline cursor-pointer" id="reportUs">
                    Báo cáo với chúng tôi
                </p>
            </div>
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                class="btn btn-warning text-black   fw-bold d-flex align-items-center justify-content-center w-100 rounded-pill py-2">
                <span>Cập nhật</span>
            </button>
        </div>
    </div>
    <!-- Sắp xếp theo -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="sortedByShow" aria-labelledby="offcanvasBottomLabel"
        style="border-radius: 16px 16px 0 0;height: auto; width: 560px; right: 0; left: auto;">
        <div class="offcanvas-header d-flex w-100 justify-content-center">
            <h5 class="offcanvas-title mb-0" id="offcanvasBottomLabel">Sắp xếp theo</h5>
        </div>
        <!-- end header-->
        <!-- content-->
        <div class="offcanvas-body">
            <div class="p-0" style="min-width: 232px;">
                <div class="btn-group-vertical w-100" role="group" aria-label="Vertical radio toggle button group">
                    <input type="radio" class="btn-check" name="radio-options" id="radio1" value="time#asc" checked
                        data-bs-dismiss="offcanvas" aria-label="Close">
                    <label class="btn btn-outline-dark" for="radio1">Sớm nhất</label>

                    <input type="radio" class="btn-check" name="radio-options" id="radio2" value="time#desc"
                        data-bs-dismiss="offcanvas" aria-label="Close">
                    <label class="btn btn-outline-dark" for="radio2">Muộn nhất</label>

                    <input type="radio" class="btn-check" name="radio-options" id="radio3" value="distance#asc"
                        data-bs-dismiss="offcanvas" aria-label="Close">
                    <label class="btn btn-outline-dark" for="radio3">Gần nhất</label>
                </div>

            </div>
        </div>
        <!--Close button -->
        <div class="d-flex gap-3 p-3 border-top border-secondary bottom-0 bg-white" style="border-color: #e0e0e0">
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                class="bt-close">
                <span>Đóng</span>
            </button>
        </div>
    </div>
    <!-- Thay đổi Vị trí của bạn -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="changeLocationShow" aria-labelledby="offcanvasBottomLabel"
        style="border-radius: 16px 16px 0 0;height: 560px; width: 560px; right: 0; left: auto;">
        <div class="offcanvas-header d-flex w-100 justify-content-center">
            <h5 class="offcanvas-title mb-0" id="offcanvasBottomLabel">Thay đổi vị trí</h5>
        </div>
        <!-- end header-->
        <!--end headrer -->
        <div class="p-3 bg-white border-bottom w-100" style="border-bottom-color: rgb(224, 224, 224);">
            <div class="input-group position-relative">
                <input class="form-control border rounded-pill ps-5 search-input" type="search"
                    placeholder="222 Điện Biên Phủ, Quận 3...">
                <span class="position-absolute top-50 translate-middle-y ms-3 search-icon">
                    <i class="fa fa-search"></i>
                </span>
            </div>
            <div class="justify-content-sm-start mt-1">
                <button type="button" class="text-primary" style="border: none; background: none; ">
                    <img data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/current-location.svg"
                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/current-location.svg"
                        alt="current-location-icon" width="16" height="16" style="margin-right: 5px;">
                    <span class="ms-1 text-primary">Dùng vị trí hiện tại của bạn</span>
                </button>
            </div>
        </div>
        <!--end search box -->
        <div class="d-flex flex-column h-100 overflow-auto" style="z-index: 2000; scrollbar-width: none;">
            <div class="d-flex align-items-center bg-white p-2 ps-4 pointer">
                <div class="d-flex" style="width: 24px; height: 24px; color: rgb(133, 133, 133) !important;">
                    <i class="material-icons-outlined ">place</i>
                </div>
                <div class="d-flex flex-column flex-grow-1 flex-shrink-1 flex-basis-0 ps-0 pe-3 ms-3"
                    style="border-bottom: 0.5px solid rgb(224, 224, 224);">
                    <p class="  mb-0" style="font-weight: 400; letter-spacing: 0;">
                        222 Đường Điện Biên Phủ, Phường 17, Quận Bình Thạnh, Hồ Chí Minh, Việt Nam
                    </p>
                    <p class="mt-1 text-secondary" style="font-size: 12px; ">
                        222 Đường Điện Biên Phủ, Phường 17, Quận Bình Thạnh, Hồ Chí Minh, Việt Nam
                    </p>
                </div>
            </div>
            <!--end row -->
            <div class="d-flex align-items-center bg-white p-2 ps-4 pointer">
                <div class="d-flex" style="width: 24px; height: 24px; color: rgb(133, 133, 133) !important;">
                    <i class="material-icons-outlined ">place</i>
                </div>
                <div class="d-flex flex-column flex-grow-1 flex-shrink-1 flex-basis-0 ps-0 pe-3 ms-3"
                    style="border-bottom: 0.5px solid rgb(224, 224, 224);">
                    <p class="  mb-0" style="font-weight: 400; letter-spacing: 0;">
                        222 Đường Điện Biên Phủ, Phường 17, Quận Bình Thạnh, Hồ Chí Minh, Việt Nam
                    </p>
                    <p class="mt-1 text-secondary" style="font-size: 12px; ">
                        222 Đường Điện Biên Phủ, Phường 17, Quận Bình Thạnh, Hồ Chí Minh, Việt Nam
                    </p>
                </div>
            </div>
            <!--end row -->
            <div class="d-flex align-items-center bg-white p-2 ps-4 pointer">
                <div class="d-flex" style="width: 24px; height: 24px; color: rgb(133, 133, 133) !important;">
                    <i class="material-icons-outlined ">place</i>
                </div>
                <div class="d-flex flex-column flex-grow-1 flex-shrink-1 flex-basis-0 ps-0 pe-3 ms-3"
                    style="border-bottom: 0.5px solid rgb(224, 224, 224);">
                    <p class="  mb-0" style="font-weight: 400; letter-spacing: 0;">
                        222 Đường Điện Biên Phủ, Phường 17, Quận Bình Thạnh, Hồ Chí Minh, Việt Nam
                    </p>
                    <p class="mt-1 text-secondary" style="font-size: 12px; ">
                        222 Đường Điện Biên Phủ, Phường 17, Quận Bình Thạnh, Hồ Chí Minh, Việt Nam
                    </p>
                </div>
            </div>
            <!--end row -->
            <!-- Không có địa điểm cần tìm -->
            <div class="text-center py-4 p-3">
                <div class="d-flex flex-column align-items-center">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/no-result-icon.svg" height="104"
                        class="mb-3">
                    <p class="fs-4 fw-bold text-dark mb-2">Không có địa điểm cần tìm</p>
                    <p class="  text-muted mb-2">
                        Bạn lưu ý nhập địa chỉ cụ thể khi tìm kiếm
                    </p>
                    <p class="  text-muted">
                        Hãy thử nhập một địa chỉ đầy đủ Ví dụ: 222 Điện Biên Phủ, Phường 7, Quận 3, Hồ Chí Minh
                    </p>
                </div>
            </div>
        </div>
        <!--end content -->
        <!--Close button -->
        <div class="d-flex gap-3 p-3 border-top border-secondary bottom-0 bg-white" style="border-color: #e0e0e0">
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                class="bt-close">
                <span>Đóng</span>
            </button>
        </div>
    </div>
    <!-- Xem Vị trí của bạn -->
    <div class="modal fade" id="viewLocationShow" tabindex="-1" aria-labelledby="viewLocationShowLabel">
        <div class="modal-dialog custom-modal-width">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header border-0">
                    <h5 class="modal-title text-center fw-bold w-100" id="viewLocationShowLabel">
                        Sân Bay Nội Bài (Sảnh E Ga Nội Địa T1)
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h3>Map data</h3>
                    <img src="https://sackim.com/wp-content/uploads/2018/07/voi-nhung-cong-cu-rat-huu-ich-ban-da-co-the-in-truc-tiep-ngay-tren-google-map.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Báo cáo với chúng tôi -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="reportUsShow" aria-labelledby="offcanvasBottomLabel"
        style="border-radius: 16px 16px 0 0;height: 560px; width: 560px; right: 0; left: auto;">
        <div class="offcanvas-header d-flex w-100 justify-content-center">
            <h5 class="offcanvas-title mb-0" id="offcanvasBottomLabel">Báo cáo với chúng tôi </h5>
        </div>
        <!-- end header-->
        <div class="d-flex flex-column h-100 overflow-auto" style="z-index: 2000; scrollbar-width: none;">
            <div class="p-3">
                <div>
                    <div class="mb-3">Chọn loại vấn đề bạn đang gặp phải</div>
                    <div class="mb-3">
                        <div class="custom-checkbox-container">
                            <label class="custom-checkbox me-3">
                                <input type="checkbox" autocomplete="off">
                                <span class="checkmark"></span>
                                Thiếu thông tin
                            </label>
                            <label class="custom-checkbox">
                                <input type="checkbox" autocomplete="off">
                                <span class="checkmark"></span>
                                Thông tin sai
                            </label>
                        </div>

                    </div>
                    <div class="text-danger mt-2"></div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="note" placeholder="Vui lòng mô tả chi tiết" style="height: 94px;"
                        spellcheck="false"></textarea>
                    <div class="text-danger mt-2"></div>
                </div>
                <div class="alert alert-info d-flex align-items-center p-3 mt-3 mb-3" role="alert">
                    <div class="me-2">
                        <i class="material-icons-round text-primary">info</i>
                    </div>
                    <p class="mb-0 text-dark">
                        Địa điểm đón/trả đề xuất nên là địa điểm dễ nhận biết như: Ngã 4, Vòng xoay, Siêu thị,… Bạn vui
                        lòng không nhập địa chỉ nhà riêng.
                    </p>
                </div>

                <div class="mt-2">
                    <input class="form-control" id="phone" placeholder="Số điện thoại để liên hệ với bạn"
                        style="height: 52px;"></input>
                    <div class="text-danger mt-2"></div>
                </div>
            </div>
        </div>
        <!--end content -->
        <!--Button -->
        <div class="d-flex gap-3 p-3 border-top border-secondary bottom-0 bg-white" style="border-color: #e0e0e0">
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                class="bt-close">
                <span>Đóng</span>
            </button>
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                class="bt-send">
                <span>Gửi</span>
            </button>
        </div>
    </div>
    <!-- Chi tiết bảo hiểm -->
    <div class="modal" id="utilityDetailslModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-dialog custom-modal-width modal-dialog-scrollable">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header" style="border-bottom: none !important;">
                        <h5 class="modal-title">Chi tiết bảo hiểm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Tabs -->
                    <ul class="nav nav-fill nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active text-secondary pointer text-nowrap" id="fill-tab-0"
                                data-bs-toggle="tab" href="#fill-tabpanel-0" role="tab" aria-controls="fill-tabpanel-0"
                                aria-selected="true">
                                Quyền lợi
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-secondary pointer text-nowrap" id="fill-tab-1" data-bs-toggle="tab"
                                href="#fill-tabpanel-1" role="tab" aria-controls="fill-tabpanel-1"
                                aria-selected="false">
                                Điệu kiện bảo hiểm
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-secondary pointer text-nowrap" id="fill-tab-2" data-bs-toggle="tab"
                                href="#fill-tabpanel-2" role="tab" aria-controls="fill-tabpanel-2"
                                aria-selected="false">
                                Quy trình bồi thường
                            </a>
                        </li>
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!--Tab 1 -->
                        <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel" aria-labelledby="fill-tab-0">
                            <div class="d-flex flex-column pb-0 ps-2 pe-2">
                                <div class="alert alert-warning d-flex align-items-center p-2 ms-1"
                                    style="font-size: 0.875rem;">
                                    <img class="p-2"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/yellow_warning.svg"
                                        alt="warning">
                                    <div>
                                        Phí bảo hiểm chuyến đi chỉ được hoàn trả nếu huỷ vé trước 48 tiếng so với giờ
                                        khởi
                                        hành.
                                    </div>
                                </div>
                                <p class="fw-bold fs-5 mb-0 text-black pb-2">
                                    Bảo hiểm tai nạn
                                </p>
                                <!--tabel -->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="border">
                                                    Tử vong / Thương tật toàn bộ vĩnh viễn do tai nạn
                                                </td>
                                                <td class="fw-medium text-end border">400,000,000đ</td>
                                            </tr>
                                            <tr>
                                                <td class="border">Thương tật bộ phận vĩnh viễn</td>
                                                <td class="fw-medium text-end border">
                                                    <span>Trả theo</span>
                                                    <a href="" class="text-primary cursor-pointer">
                                                        bảng tỉ lệ thương tật
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border">Hỗ trợ chi phí điều trị y tế do tai nạn</td>
                                                <td class="fw-medium text-end border">3,000,000đ</td>
                                            </tr>
                                            <tr>
                                                <td class="border">Hỗ trợ viện phí do tai nạn
                                                    <small class="d-block text-muted">(tối đa 03 ngày)</small>
                                                </td>
                                                <td class="fw-medium text-end border">500,000đ / ngày</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="fw-bold fs-5 text-black pb-1">
                                    Bảo hiểm hủy chuyến
                                </p>
                                <p class="text-black">
                                    Khách hàng sẽ được công ty bảo hiểm bồi thường
                                    <span class="fw-bolder">100% tiền vé</span>
                                    thực tế nếu không thể thực hiện được chuyến đi trong một số trường hợp bất khả
                                    kháng.
                                </p>
                            </div>
                        </div>
                        <!--Tab 2 -->
                        <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel" aria-labelledby="fill-tab-1">
                            <div class="d-flex flex-column pb-0 ps-2 pe-2">
                                <p class="fw-bold fs-5 mb-0 text-black">
                                    Bảo hiểm tai nạn
                                </p>
                                <p class="text-black">
                                    Rủi ro tai nạn xảy ra trong chuyến đi kể từ lúc NĐBH lên xe (điểm
                                    khởi hành) đến khi NĐBH
                                    xuống xe (điểm đến) dẫn tới NĐBH phải điều trị y tế, nằm viện, Tử vong/ Thương tật
                                    vĩnh
                                    viễn.
                                </p>
                                <p class="fw-bold fs-5 text-black">
                                    Bảo hiểm hủy chuyến
                                </p>
                                <div class="alert alert-warning d-flex align-items-center p-2 ms-1"
                                    style="font-size: 0.875rem;">
                                    <img class="p-2"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/yellow_warning.svg"
                                        alt="warning">
                                    <p>
                                        Chính sách hoàn hủy chuyến đi có hiệu lực trong vòng <span class="fw-bolder">48
                                            giờ </span> trước giờ khởi hành theo
                                        lịch trình được bảo hiểm. Không áp dụng cho hủy chuyến do khách hàng đến
                                        muộn/vắng
                                        mặt tại giờ khởi hành theo lịch trình.
                                    </p>
                                </div>
                                <p class="text-black">Khách hàng sẽ được công ty bảo hiểm bồi
                                    thường 100% tiền vé thực tế đã chi trả khi không thể thực hiện chuyến đi theo lịch
                                    trình
                                    được bảo hiểm do bất kỳ nguyên nhân nào dưới đây:
                                <ul class="text-black">
                                    <li>Nhà xe cung cấp dịch vụ vận tải hành khách thông báo hủy chuyến đi vì các nguyên
                                        nhân bất khả kháng (Các rủi ro thiên tai; Bạo loạn &amp; đình công; Phương tiện
                                        di
                                        chuyển gặp sự cố mà không thể khắc phục) và không có chuyến đi thay thế cho
                                        khách
                                        hàng.</li>
                                    <li>Thành viên trong gia đình của khách hàng: là vợ/chồng đã kết hôn hợp pháp, con
                                        cái
                                        (con đẻ hoặc con nuôi hợp pháp), cha mẹ ruột, cha mẹ vợ/chồng của Người được bảo
                                        hiểm bị:<ul>
                                            <li>Tử vong; hoặc</li>
                                            <li>Nhập viện điều trị từ 24 giờ trở lên, cần sự hiện diện của Người được
                                                bảo
                                                hiểm, và việc này không được dự đoán hay biết trước vào ngày mua Vé</li>
                                        </ul>
                                    </li>
                                    <li>Người được bảo hiểm nhập viện điều trị từ 24 giờ trở lên.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <!--Tab 3 -->
                        <div class="tab-pane" id="fill-tabpanel-2" role="tabpanel" aria-labelledby="fill-tab-2">
                            <div class="d-flex flex-column pb-0 ps-2 pe-2">
                                <p class="fw-bold fs-5 mb-0 text-black p-1">
                                    Thời hạn yêu cầu bồi thường
                                </p>
                                <p class="text-black">
                                    NĐBH/ Đại diện hợp pháp của NĐBH phải thông báo sự kiện bảo hiểm bằng văn bản, điện
                                    thoại, thư điện tử hoặc thông qua phần mềm yêu cầu bồi thường trực tuyến của
                                    Saladin.
                                    Thời hạn thông báo <span class="fw-bolder">tối đa 30 ngày</span> kể từ Ngày xảy ra
                                    sự
                                    kiện bảo hiểm.
                                </p>
                                <p class="fw-bold fs-5 mb-0 text-black p-1">
                                    Hướng dẫn tạo yêu cầu bồi thường
                                </p>
                                <p class="text-black">
                                    Truy cập Cổng Yêu cầu bồi thường của Saladin qua đường dẫn riêng bằng cách:

                                <ul class="text-black">
                                    <li><span class="medium-bold">Cách 1</span>: Vào chi tiết chuyến đi đã chọn &gt;
                                        Tìm
                                        phần tiện ích chuyến đi &gt; Vào chi tiết tiện ích &gt; Bấm chọn nút "Yêu cầu
                                        bồi
                                        thường"</li>
                                    <li><span class="medium-bold">Cách 2</span> : Nếu bạn hủy vé vì lý do bất khả
                                        kháng,
                                        bấm vào nút “Yêu cầu bồi thường” khi hủy vé hoặc tìm ở trang Chi tiết chuyến đi
                                        đã
                                        hủy</li>
                                    <li><span class="medium-bold">Cách 3</span> : Tìm đường link đính kèm trong email
                                        Thông báo phát hành Hợp đồng bảo hiểm điện tử.</li>
                                </ul>
                                </p>
                                <p class="text-black">
                                    Lựa chọn Nguyên nhân Yêu cầu bồi thường phù hợp và tiếp tục làm theo hướng dẫn:

                                <ul class="text-black">
                                    <li>Điều trị y tế và/hoặc thương tật vĩnh viễn do tai nạn</li>
                                    <li>Tử vong</li>
                                    <li>Hủy chuyến đi (Chính sách dành riêng cho khách hàng mua Bảo hiểm chuyến đi)</li>
                                </ul>
                                </p>
                                <div class="alert alert-warning d-flex align-items-center p-2 ms-1"
                                    style="font-size: 0.875rem;">
                                    <img class="p-2"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/yellow_warning.svg"
                                        alt="warning">
                                    <div>
                                        Mỗi yêu cầu bồi thường chỉ được tạo cho 1 người được bảo hiểm.
                                    </div>
                                </div>
                                <p class="fw-bold fs-5 text-black pb-1">
                                    Liên hệ hỗ trợ
                                </p>
                                <div class="d-flex flex-column align-items-start p-3 border border-secondary rounded-3"
                                    style="background-color: white; color: black;">
                                    <img class="mb-3"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/helpcenter_icon.svg"
                                        alt="helpcenter_icon">
                                    <div class="d-flex justify-content-between flex-column flex-md-row w-100">
                                        <div class="d-flex align-items-center">
                                            <img class="me-2"
                                                src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/phone_helpcenter.svg"
                                                alt="phone_helpcenter">
                                            <div>
                                                <p class="mb-1 fw-bold">Số điện thoại</p>
                                                <p class="text-primary cursor-pointer">1900 638 454</p>
                                                <p class="mb-1">
                                                    Cước phí gọi là <span class="fw-bold">1.500</span> đ
                                                </p>
                                                <p class="text-muted">Hoạt động: 24/7</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img class="me-2"
                                                src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/email_helpcenter.svg"
                                                alt="email_helpcenter">
                                            <div>
                                                <p class="mb-1 fw-bold">Địa chỉ email</p>
                                                <p class="text-primary cursor-pointer">cs@saladin.vn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <div class="d-flex justify-content-between w-100">
                            <p class="text-black mb-0">Cần giải đáp thắc mắc / khiếu nại</p>
                            <a href="#" class="fw-bold mb-0">Trung tâm hỗ trợ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------- End Drawer ---------------------------------->
@endsection
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggleVisibility = (iconId, contentId) => {
        const toggleIcon = document.getElementById(iconId);
        const additionalContent = document.getElementById(contentId);

        if (toggleIcon && additionalContent) {
            toggleIcon.addEventListener('click', () => {
                const isHidden = additionalContent.classList.toggle('d-none');
                toggleIcon.src = isHidden ?
                    'https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg' :
                    'https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_more.svg';
            });
        }
    };

    toggleVisibility('totalAmount', 'showTotalAmount');
    toggleVisibility('totalAmountModal', 'showTotalAmountModal');

    const setupOffcanvasOrModal = (triggerId, targetId, isModal = false) => {
        document.querySelectorAll(`#${triggerId}`).forEach(element => {
            element.addEventListener('click', event => {
                event.preventDefault();

                if (isModal) {
                    const modal = new bootstrap.Modal(document.getElementById(
                        targetId));
                    modal.show();
                } else {
                    const offcanvas = new bootstrap.Offcanvas(document.getElementById(
                        targetId));
                    offcanvas.show();
                }

                const changeRight = document.getElementById('changeRight');
                if (changeRight) {
                    changeRight.classList.add('show');
                    changeRight.style.visibility = 'visible';
                }
            });
        });
    };

    setupOffcanvasOrModal('sortedBy', 'sortedByShow');
    setupOffcanvasOrModal('changeLocation', 'changeLocationShow');
    setupOffcanvasOrModal('reportUs', 'reportUsShow');
    setupOffcanvasOrModal('viewLocation', 'viewLocationShow', true);

    const popoverTriggerEl = $('#detailsButton');
    popoverTriggerEl.popover({
        trigger: 'manual'
    });

    popoverTriggerEl.on('click', function(e) {
        e.preventDefault();
        if (popoverTriggerEl.attr('aria-describedby')) {
            popoverTriggerEl.popover('hide');
        } else {
            popoverTriggerEl.popover('show');
        }
    });

    $(document).on('click', function(e) {
        if (!popoverTriggerEl.is(e.target) && popoverTriggerEl.has(e.target).length === 0 &&
            $('.popover').has(e.target).length === 0) {
            popoverTriggerEl.popover('hide');
        }

    });
});
</script>
@endsection