@extends('layouts.app')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/air-datepicker.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.min.css"
        integrity="sha512-lvaVbvmbHhG8cmfivxLRhemYlTT60Ly9Cc35USrpi8/m+Lf/f/T8x9kEIQq47cRj1VQIFuxTxxCcvqiQeQSHjQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

<style>
    .select-input {
        position: relative;
        width: 300px;
    }

    .search-container {
        display: flex;
        align-items: center;
        cursor: pointer;
        padding: 10px;
        border-radius: 4px;
    }

    .icon-container {
        margin-right: 10px;
    }

    .passenger-select {
        flex-grow: 1;
    }

    .passenger-info {
        margin: 0;
    }

    .expand {
        display: flex;
        align-items: center;
    }

    .expand-icon {
        fill: #141414;
    }

    .passenger-selection {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        border: 1px solid #ccc;
        border-radius: 4px;
        z-index: 1000;
    }

    .passenger-content {
        padding: 10px;
    }

    .passenger-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .title {}

    .desc {
        font-size: 13px;
        color: #666;
        line-height: 18px;
    }

    .desc b {
        font-weight: bold;
        color: #000;
        font-size: 16px;
    }

    .invalid-info {
        display: none;
    }

    .change-passenger {
        display: flex;
        align-items: center;
    }

    .action {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0 5px;
    }

    .number {
        width: 20px;
        text-align: center;
        color: #000;
    }

    .apply-btn {
        display: block;
        text-align: center;
        background: #2474E5;
        color: white;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    .divider {
        height: 1px;
        background: #eee;
        margin: 10px 0;
    }

    .passenger-info {
        color: #000;
        font-weight: 700;
    }

    .wrap-passenger-class {
        margin-top: 16px;
        display: flex;
        -webkit-box-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        align-items: center;
    }

    .seat-select-input {
        position: relative;
        width: 300px;
    }

    .seat-search-container {
        display: flex;
        align-items: center;
        cursor: pointer;
        padding: 10px;
        border-radius: 4px;
    }

    .seat-icon-container {
        margin-right: 10px;
        color: #000
    }

    .seat-select-display {
        flex-grow: 1;
    }

    .seat-info-text {
        margin: 0;
        color: #000
    }

    .seat-expand-icon-container {
        display: flex;
        align-items: center;
    }

    .seat-expand-icon {
        fill: #141414;
    }

    .seat-selection-dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        border: 1px solid #ccc;
        border-radius: 4px;
        z-index: 1000;
    }

    .seat-options-container {
        padding: 10px;
    }

    .seat-option-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .seat-option-title {
        color: #000;
        font-weight: bold;
    }

    .seat-option-desc {
        font-size: 12px;
        color: #666;
    }

    .seat-check-icon {
        display: none;
    }

    .seat-divider {
        height: 1px;
        background: #eee;
        margin: 10px 0;
    }
</style>

@section('content')
    <div id="airlinetickets">
        <div class="container-airlinetickets">
            <ul class="nav nav-pills nav-airline" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-bus-tab" data-bs-toggle="pill" data-bs-target="#pills-bus"
                        type="button" role="tab" aria-controls="pills-bus" aria-selected="true"><i class="fa fa-car"
                            aria-hidden="true"></i> <span>Xe khách</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-plane-tab" data-bs-toggle="pill" data-bs-target="#pills-plane"
                        type="button" role="tab" aria-controls="pills-plane" aria-selected="false"><i
                            class="fa fa-plane" aria-hidden="true"></i> <span>Máy bay</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-train-tab" data-bs-toggle="pill" data-bs-target="#pills-train"
                        type="button" role="tab" aria-controls="pills-train" aria-selected="false"><i
                            class="fa fa-train" aria-hidden="true"></i> <span>Tàu hỏa</span></button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-bus" role="tabpanel" aria-labelledby="pills-bus-tab"
                    tabindex="0">
                    <div class="ant-row-flex search-widget-inner-content">
                        <div class="left-ant-row-flex">
                            <div class="wrap-left-ant-row-flex" style="position: relative;">
                                <div class="departure-bus-flex flex-sum-left">
                                    <div class="custom-input-col custom-bus-from-input-col">
                                        <div class="custom-select-wrapper custom-bus-from-select-wrapper">
                                            <div class="custom-select-container custom-bus-from-select">
                                                <div class="custom-input-container">
                                                    <div class="custom-icon-container">
                                                        <img class="custom-pickup-icon"
                                                            src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                                            alt="pickup-icon" width="24" height="24">
                                                    </div>
                                                    <div class="custom-input-section">
                                                        <input type="text" id="bus_from_input" placeholder="Điểm Đi"
                                                            data-testid="SearchWidget.bus_from"
                                                            data-id="SearchWidget.bus_from">
                                                    </div>
                                                </div>
                                                <ul class="custom-dropdown-menu bus-dropdown-menu">
                                                    <li
                                                        class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                                        <ul class="custom-dropdown-item-list" id="dropdown_list_bus_from">
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-swap-container" id="bus_swap_button">
                                        <div class="custom-switch-icon-container">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="destination-bus-flex flex-sum-left">
                                    <div class="custom-input-col custom-bus-to-input-col">
                                        <div class="custom-select-wrapper custom-bus-to-select-wrapper">
                                            <div class="custom-select-container custom-bus-to-select">
                                                <div class="custom-input-container">
                                                    <div class="custom-icon-container">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="custom-input-section">
                                                        <input type="text" id="bus_to_input" placeholder="Điểm Đến"
                                                            data-testid="SearchWidget.bus_to"
                                                            data-id="SearchWidget.bus_to">
                                                    </div>
                                                </div>
                                                <ul class="custom-dropdown-menu bus-dropdown-menu">
                                                    <li
                                                        class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                                        <ul class="custom-dropdown-item-list" id="dropdown_list_bus_to">
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="departure-bus-date flex-sum-left">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> <input type="text"
                                        name="" class="date-from date_input" placeholder="">
                                </div>
                                <div class="departure-bus-date-right flex-sum-left">
                                    <i class="fa fa-plus" aria-hidden="true"></i> <input type="text" name=""
                                        id="date-to" placeholder="Thêm ngày về">
                                </div>
                            </div>
                        </div>
                        <div class="right-search-widget-inner-content">
                            <button>Tìm kiếm</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-plane" role="tabpanel" aria-labelledby="pills-plane-tab"
                    tabindex="0">
                    <div class="ant-row-flex search-widget-inner-content">
                        <div class="left-ant-row-flex">
                            <div class="wrap-left-ant-row-flex" style="position: relative;">
                                <div class="departure-plane-flex flex-sum-left">
                                    <div class="custom-input-col custom-plane-from-input-col">
                                        <div class="custom-select-wrapper custom-plane-from-select-wrapper">
                                            <div class="custom-select-container custom-plane-from-select">
                                                <div class="custom-input-container">
                                                    <div class="custom-icon-container">
                                                        <img class="custom-pickup-icon"
                                                            src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                                            alt="pickup-icon" width="24" height="24">
                                                    </div>
                                                    <div class="custom-input-section">
                                                        <input type="text" id="plane_from_input"
                                                            placeholder="Nơi Xuất Phát"
                                                            data-testid="SearchWidget.plane_from"
                                                            data-id="SearchWidget.plane_from">
                                                    </div>
                                                </div>
                                                <ul class="custom-dropdown-menu plane-dropdown-menu">
                                                    <li class="custom-dropdown-item-group ">
                                                        <div class="custom-dropdown-item-group-title">Thành phố sân bay phổ
                                                            biến</div>
                                                        <ul class="custom-dropdown-item-list"
                                                            id="dropdown_list_plane_from"></ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-swap-container" id="plane_swap_button">
                                        <div class="custom-switch-icon-container">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="destination-plane-flex flex-sum-left">
                                    <div class="custom-input-col custom-plane-to-input-col">
                                        <div class="custom-select-wrapper custom-plane-to-select-wrapper">
                                            <div class="custom-select-container custom-plane-to-select">
                                                <div class="custom-input-container">
                                                    <div class="custom-icon-container">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="custom-input-section">
                                                        <input type="text" id="plane_to_input" placeholder="Nơi Đến"
                                                            data-testid="SearchWidget.plane_to"
                                                            data-id="SearchWidget.plane_to">
                                                    </div>
                                                </div>
                                                <ul class="custom-dropdown-menu plane-dropdown-menu">
                                                    <li class="custom-dropdown-item-group">
                                                        <div class="custom-dropdown-item-group-title">Thành phố sân bay phổ
                                                            biến</div>
                                                        <ul class="custom-dropdown-item-list" id="dropdown_list_plane_to">
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="departure-plane-date flex-sum-left">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> <input type="text"
                                        name="" class="date-from date_input">
                                </div>
                                <div class="departure-plane-date-right flex-sum-left">
                                    <i class="fa fa-plus" aria-hidden="true"></i> <input type="text" name=""
                                        id="date-to" placeholder="Thêm ngày về">
                                </div>
                            </div>
                        </div>
                        <div class="right-search-widget-inner-content">
                            <button>Tìm kiếm</button>
                        </div>
                    </div>

                    <div class="wrap-passenger-class">

                        <div class="select-input">
                            <section>
                                <div class="search-container">
                                    <div class="icon-container">
                                        <img class="passenger-icon"
                                            src="https://storage.googleapis.com/goyolo-uat/images/SeoVexImprove/people.svg"
                                            alt="passenger-icon" width="24" height="24">
                                    </div>
                                    <div class="passenger-select">
                                        <div class="input-container">
                                            <p class="passenger-info">1 Hành khách</p>
                                        </div>
                                    </div>
                                    <div class="expand">
                                        <svg class="expand-icon" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#a)">
                                                <path
                                                    d="M13.233 7.742L10 10.975 6.767 7.742a.83.83 0 1 0-1.175 1.175l3.825 3.825a.83.83 0 0 0 1.175 0l3.825-3.825a.83.83 0 0 0 0-1.175.848.848 0 0 0-1.184 0z"
                                                    fill="#141414"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="a">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </section>
                            <div class="passenger-selection">
                                <div class="passenger-content">
                                    <div class="passenger-item">

                                        <article class="desc"><b>Người lớn</b> </br>Từ đúng 12 tuổi trở lên vào ngày khởi
                                            hành</article>
                                        <div class="invalid-info">
                                            <article class="text">Bạn chỉ có thể đặt 9 hành khách cùng lúc</article>
                                            <div class="box-triangle">
                                                <div class="triangle"></div>
                                            </div>
                                        </div>
                                        <div class="change-passenger">
                                            <button type="button" class="action decrease">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#a)">
                                                        <path
                                                            d="M12.5 8.667h-8A.669.669 0 0 1 3.833 8c0-.367.3-.667.667-.667h8c.367 0 .667.3.667.667 0 .367-.3.667-.667.667z"
                                                            fill="#2474E5"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" transform="translate(.5)"
                                                                d="M0 0h16v16H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                            <article class="number">1</article>
                                            <button type="button" class="action increase">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#a)">
                                                        <path
                                                            d="M12.5 8.667H9.167V12c0 .367-.3.667-.667.667A.669.669 0 0 1 7.833 12V8.667H4.5A.669.669 0 0 1 3.833 8c0-.367.3-.667.667-.667h3.333V4c0-.367.3-.667.667-.667.367 0 .667.3.667.667v3.333H12.5c.367 0 .667.3.667.667 0 .367-.3.667-.667.667z"
                                                            fill="#2474E5"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" transform="translate(.5)"
                                                                d="M0 0h16v16H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="passenger-item">

                                        <article class="desc"><b>Trẻ em</b></br>Từ đúng 2 tuổi đến dưới 11 tuổi</article>
                                        <div class="invalid-info">
                                            <article class="text">Số trẻ em không được quá 2 lần số người lớn</article>
                                            <div class="box-triangle">
                                                <div class="triangle"></div>
                                            </div>
                                        </div>
                                        <div class="change-passenger">
                                            <button type="button" class="action decrease">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#a)">
                                                        <path
                                                            d="M12.5 8.667h-8A.669.669 0 0 1 3.833 8c0-.367.3-.667.667-.667h8c.367 0 .667.3.667.667 0 .367-.3.667-.667.667z"
                                                            fill="#2474E5"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" transform="translate(.5)"
                                                                d="M0 0h16v16H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                            <article class="number">0</article>
                                            <button type="button" class="action increase">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#a)">
                                                        <path
                                                            d="M12.5 8.667H9.167V12c0 .367-.3.667-.667.667A.669.669 0 0 1 7.833 12V8.667H4.5A.669.669 0 0 1 3.833 8c0-.367.3-.667.667-.667h3.333V4c0-.367.3-.667.667-.667.367 0 .667.3.667.667v3.333H12.5c.367 0 .667.3.667.667 0 .367-.3.667-.667.667z"
                                                            fill="#2474E5"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" transform="translate(.5)"
                                                                d="M0 0h16v16H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="passenger-item">
                                        <article class="desc"> <b>Em bé</b> </br> Từ đúng 14 ngày đến dưới 2 tuổi
                                        </article>
                                        <div class="invalid-info">
                                            <article class="text">Mỗi người lớn chỉ được đi kèm 1 em bé</article>
                                            <div class="box-triangle">
                                                <div class="triangle"></div>
                                            </div>
                                        </div>
                                        <div class="change-passenger">
                                            <button type="button" class="action decrease">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#a)">
                                                        <path
                                                            d="M12.5 8.667h-8A.669.669 0 0 1 3.833 8c0-.367.3-.667.667-.667h8c.367 0 .667.3.667.667 0 .367-.3.667-.667.667z"
                                                            fill="#2474E5"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" transform="translate(.5)"
                                                                d="M0 0h16v16H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                            <article class="number">0</article>
                                            <button type="button" class="action increase">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#a)">
                                                        <path
                                                            d="M12.5 8.667H9.167V12c0 .367-.3.667-.667.667A.669.669 0 0 1 7.833 12V8.667H4.5A.669.669 0 0 1 3.833 8c0-.367.3-.667.667-.667h3.333V4c0-.367.3-.667.667-.667.367 0 .667.3.667.667v3.333H12.5c.367 0 .667.3.667.667 0 .367-.3.667-.667.667z"
                                                            fill="#2474E5"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" transform="translate(.5)"
                                                                d="M0 0h16v16H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="apply-btn">Xong</div>
                                </div>
                            </div>
                        </div>


                        <div class="seat-select-input">
                            <section>
                                <div class="seat-search-container">
                                    <div class="seat-icon-container">
                                        <img class="seat-icon"
                                            src="https://storage.googleapis.com/goyolo-uat/images/SeoVexImprove/seat.svg"
                                            alt="seat-icon" width="24" height="24">
                                    </div>
                                    <div class="seat-select-display">
                                        <div class="seat-input-container">
                                            <p class="seat-info-text">Phổ thông</p>
                                        </div>
                                    </div>
                                    <div class="seat-expand-icon-container">
                                        <svg class="seat-expand-icon" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#a)">
                                                <path
                                                    d="M13.233 7.742L10 10.975 6.767 7.742a.83.83 0 1 0-1.175 1.175l3.825 3.825a.83.83 0 0 0 1.175 0l3.825-3.825a.83.83 0 0 0 0-1.175.848.848 0 0 0-1.184 0z"
                                                    fill="#141414"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="a">
                                                    <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </section>
                            <div class="seat-selection-dropdown">
                                <div class="seat-options-container">
                                    <div class="seat-option-item">
                                        <div>
                                            <article class="seat-option-title">Phổ thông</article>
                                            <article class="seat-option-desc">Bay tiết kiệm, đáp ứng mọi nhu cầu cơ bản của
                                                bạn</article>
                                        </div>
                                        <img class="seat-check-icon"
                                            src="https://storage.googleapis.com/goyolo-uat/images/check.svg"
                                            alt="check-icon" width="16" height="16">
                                    </div>
                                    <div class="seat-divider"></div>
                                    <div class="seat-option-item">
                                        <div>
                                            <article class="seat-option-title">Phổ thông đặc biệt</article>
                                            <article class="seat-option-desc">Chi phí hợp lý với bữa ăn ngon và chỗ để chân
                                                rộng rãi</article>
                                        </div>
                                    </div>
                                    <div class="seat-divider"></div>
                                    <div class="seat-option-item">
                                        <div>
                                            <article class="seat-option-title">Thương gia</article>
                                            <article class="seat-option-desc">Bay đẳng cấp, với quầy làm thủ tục và khu ghế
                                                ngồi riêng</article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-train" role="tabpanel" aria-labelledby="pills-train-tab"
                    tabindex="0">
                    <div class="ant-row-flex search-widget-inner-content">
                        <div class="left-ant-row-flex">
                            <div class="wrap-left-ant-row-flex" style="position: relative;">
                                <div class="departure-train-flex flex-sum-left">
                                    <div class="custom-input-col custom-train-from-input-col">
                                        <div class="custom-select-wrapper custom-train-from-select-wrapper">
                                            <div class="custom-select-container custom-train-from-select">
                                                <div class="custom-input-container">
                                                    <div class="custom-icon-container">
                                                        <img class="custom-pickup-icon"
                                                            src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                                            alt="pickup-icon" width="24" height="24">
                                                    </div>
                                                    <div class="custom-input-section">
                                                        <input type="text" id="train_from_input" placeholder="Ga Đi"
                                                            data-testid="SearchWidget.train_from"
                                                            data-id="SearchWidget.train_from">
                                                    </div>
                                                </div>
                                                <ul class="custom-dropdown-menu train-dropdown-menu">
                                                    <li
                                                        class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                                        <ul class="custom-dropdown-item-list"
                                                            id="dropdown_list_train_from"></ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-swap-container" id="train_swap_button">
                                        <div class="custom-switch-icon-container">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="destination-train-flex flex-sum-left">
                                    <div class="custom-input-col custom-train-to-input-col">
                                        <div class="custom-select-wrapper custom-train-to-select-wrapper">
                                            <div class="custom-select-container custom-train-to-select">
                                                <div class="custom-input-container">
                                                    <div class="custom-icon-container">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="custom-input-section">
                                                        <input type="text" id="train_to_input" placeholder="Ga Đến"
                                                            data-testid="SearchWidget.train_to"
                                                            data-id="SearchWidget.train_to">
                                                    </div>
                                                </div>
                                                <ul class="custom-dropdown-menu train-dropdown-menu">
                                                    <li
                                                        class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                                        <ul class="custom-dropdown-item-list" id="dropdown_list_train_to">
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="departure-train-date flex-sum-left">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> <input type="text"
                                        name="" class="date-from date_input" placeholder="">
                                </div>
                                <div class="departure-train-date-right flex-sum-left">
                                    <i class="fa fa-plus" aria-hidden="true"></i> <input type="text" name=""
                                        id="date-to" placeholder="Thêm ngày về">
                                </div>
                            </div>
                        </div>
                        <div class="right-search-widget-inner-content">
                            <button>Tìm kiếm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-filter">
            <div class="left-filter">
                <div class="wrap-arrange-top">
                    <div class="text-arrange">
                        <h3>Sắp xếp</h3>
                    </div>
                    <div class="radio-group sort-options">
                        <label class="radio-wrapper checked">
                            <span class="radio checked">
                                <input type="radio" class="radio-input" value="">
                                <span class="radio-inner"></span>
                            </span>
                            <span>
                                <p class="option-label">Mặc định</p>
                            </span>
                        </label>
                        <label class="radio-wrapper">
                            <span class="radio">
                                <input type="radio" class="radio-input" value="time:asc">
                                <span class="radio-inner"></span>
                            </span>
                            <span>
                                <p class="option-label">Giờ đi sớm nhất</p>
                            </span>
                        </label>
                        <label class="radio-wrapper">
                            <span class="radio">
                                <input type="radio" class="radio-input" value="time:desc">
                                <span class="radio-inner"></span>
                            </span>
                            <span>
                                <p class="option-label">Giờ đi muộn nhất</p>
                            </span>
                        </label>
                        <label class="radio-wrapper">
                            <span class="radio">
                                <input type="radio" class="radio-input" value="rating:desc">
                                <span class="radio-inner"></span>
                            </span>
                            <span>
                                <p class="option-label">Đánh giá cao nhất</p>
                            </span>
                        </label>
                        <label class="radio-wrapper">
                            <span class="radio">
                                <input type="radio" class="radio-input" value="fare:asc">
                                <span class="radio-inner"></span>
                            </span>
                            <span>
                                <p class="option-label">Giá tăng dần</p>
                            </span>
                        </label>
                        <label class="radio-wrapper">
                            <span class="radio">
                                <input type="radio" class="radio-input" value="fare:desc">
                                <span class="radio-inner"></span>
                            </span>
                            <span>
                                <p class="option-label">Giá giảm dần</p>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="wrap-arrange-bottom">
                    <div class="filters-wrapper">
                        <div class="filter-title">
                            <div class="filter-header">Lọc</div>
                            <p class="btn-clear">Xóa lọc</p>
                        </div>
                        <div class="filter-item">
                            <div class="filter-group filter-times">
                                <div class="filter-header-container">
                                    <p class="filter-label">Giờ đi</p>
                                    <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                </div>
                                <div class="filter-content">
                                    <div class="slider-container">
                                        <div class="slider">
                                            <div class="slider-rail"></div>
                                            <div class="slider-track"></div>
                                            <div class="slider-step"></div>
                                            <div tabindex="0" class="slider-handle slider-handle-1" style="left: 0%;"
                                                role="slider" aria-valuemin="0" aria-valuemax="24" aria-valuenow="0">
                                            </div>
                                            <div tabindex="0" class="slider-handle slider-handle-2" style="left: 100%;"
                                                role="slider" aria-valuemin="0" aria-valuemax="24" aria-valuenow="24">
                                            </div>
                                            <div class="slider-mark"></div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-item">
                                            <p class="input-label">Từ</p>
                                            <div><input type="text" value="00:00" class="input-time from-time"></div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="input-item">
                                            <p class="input-label">Đến</p>
                                            <div><input type="text" value="24:00" class="input-time to-time"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group filter-operator">
                            <div class="filter-header-container">
                                <p class="filter-label">Nhà xe</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content filter-content-nhaxe">
                                <input class="ant-input inputText" placeholder="Tìm trong danh sách" type="text"
                                    value="">
                                <div class="checkbox-group">
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Bảo Ngọc (Huy Phúc) (2)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Cúc Mừng (11)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Châu Tịnh (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Dương Vũ (4)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Duy Khánh Limousine (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Đức Lan (27)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Đương Hương (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Hồng Vinh Limousine (8)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Hà Sơn ( Hà Tĩnh - Sapa) (3)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Hùng Cúc (2)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Hùng Thủy (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Hải Phú (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Hồng Hà (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Khánh Hạnh (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Mận Tịnh (14)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Mận Vũ (9)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Mạnh Hà (Thái Nguyên) (2)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Nam Quỳnh Anh (39)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Nhuận Năm (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Phương Oanh (8)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Phú Quý (6)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Phú Thành (6)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Quang Dũng Limousine (4)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Quỳnh Nhật (2)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Sao Nghệ Limousine (39)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Sáu Thủy (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Tâm Anh Hào (22)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Trung Lan (15)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Tâm Đạt (15)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Thăng Long (8)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Thọ Như (4)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Tăng Tín (2)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Thơm Phụng (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Tân Kim Chi (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Tân Minh Hà (1)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Văn Minh (38)</span>
                                    </label>
                                    <label class="checkbox-item">
                                        <span class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" value="">
                                            <span class="checkbox-inner"></span>
                                        </span>
                                        <span>Xuân Sự (1)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group filter-price">
                            <div class="filter-header-container">
                                <p class="filter-label">Giá vé</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content">
                                <div class="custom-group-info">
                                    <div class="custom-slider-container">
                                        <div class="custom-slider">
                                            <div class="custom-slider-rail"></div>
                                            <div class="custom-slider-track custom-slider-track-1"
                                                style="left: 0%; width: 100%;"></div>
                                            <div tabindex="0" class="custom-slider-handle custom-slider-handle-1"
                                                role="slider" aria-valuemin="0" aria-valuemax="2000000"
                                                aria-valuenow="0" style="left: 0%;"></div>
                                            <div tabindex="0" class="custom-slider-handle custom-slider-handle-2"
                                                role="slider" aria-valuemin="0" aria-valuemax="2000000"
                                                aria-valuenow="2000000" style="left: 100%;"></div>
                                        </div>
                                    </div>
                                    <div class="custom-value-info custom-value-left">0 đ</div>
                                    <div class="custom-value-info custom-value-right">2,000,000 đ</div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group filter-pickup">
                            <div class="filter-header-container">
                                <p class="filter-label">Điểm đón</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content">
                                <div class="custom-group-kind">
                                    <input class="ant-input inputText" placeholder="Tìm trong danh sách" type="text"
                                        value="">
                                    <ul class="custom-tree" role="tree" unselectable="on">
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Hoàng Mai (190)" class="custom-tree-title">Hoàng Mai (190)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Đống Đa (162)" class="custom-tree-title">Đống Đa (162)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Hai Bà Trưng (104)" class="custom-tree-title">Hai Bà Trưng
                                                (104)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Nam Từ Liêm (104)" class="custom-tree-title">Nam Từ Liêm
                                                (104)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Cầu Giấy (95)" class="custom-tree-title">Cầu Giấy (95)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Thanh Xuân (53)" class="custom-tree-title">Thanh Xuân (53)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Hoàn Kiếm (34)" class="custom-tree-title">Hoàn Kiếm (34)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Thường Tín (33)" class="custom-tree-title">Thường Tín (33)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Sóc Sơn (28)" class="custom-tree-title">Sóc Sơn (28)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Từ Liêm (24)" class="custom-tree-title">Từ Liêm (24)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Hà Đông (23)" class="custom-tree-title">Hà Đông (23)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Long Biên (15)" class="custom-tree-title">Long Biên (15)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Bắc Từ Liêm (10)" class="custom-tree-title">Bắc Từ Liêm
                                                (10)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Gia Lâm (7)" class="custom-tree-title">Gia Lâm (7)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Mê Linh (5)" class="custom-tree-title">Mê Linh (5)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Hoài Đức (3)" class="custom-tree-title">Hoài Đức (3)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Phúc Thọ (3)" class="custom-tree-title">Phúc Thọ (3)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Sơn Tây (3)" class="custom-tree-title">Sơn Tây (3)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Đan Phượng (3)" class="custom-tree-title">Đan Phượng (3)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Chương Mỹ (2)" class="custom-tree-title">Chương Mỹ (2)</span>
                                        </li>
                                        <li class="custom-tree-node" role="treeitem">
                                            <span class="custom-tree-checkbox">
                                                <span class="custom-tree-checkbox-inner"></span>
                                            </span>
                                            <span title="Thanh Trì (1)" class="custom-tree-title">Thanh Trì (1)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="filter-group filter-dropoff">
                            <div class="filter-header-container">
                                <p class="filter-label">Điểm trả</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content filter-content-diemtra">
                                <input class="ant-input inputText" placeholder="Tìm trong danh sách" type="text"
                                    value="">
                                <ul class="custom-tree-special" role="tree" unselectable="on">
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Diễn Châu (283)" class="custom-tree-title-special">Diễn Châu
                                            (283)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Vinh (239)" class="custom-tree-title-special">Vinh (239)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>

                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                    <li class="custom-tree-node-special" role="treeitem">
                                        <span class="custom-tree-switcher-special custom-tree-switcher_close"><i
                                                class="anticon anticon-caret-down"></i></span>
                                        <span class="custom-tree-checkbox-special"><span
                                                class="custom-tree-checkbox-inner-special"></span></span>
                                        <span title="Nghi Lộc (177)" class="custom-tree-title-special">Nghi Lộc
                                            (177)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="filter-group filter-popular">
                            <div class="filter-header-container">
                                <p class="filter-label">Tiêu chí phổ biến</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content">
                                <div class="group-items-n">
                                    <label class="checkbox-group-n ant-checkbox-wrapper">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Xác nhận đặt chỗ ngay lập tức
                                            <svg class="confirm-icon-n" width="18" height="14"
                                                viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.332 2v3.333c-.916 0-1.666.75-1.666 1.667s.75 1.667 1.666 1.667V12c0 .917-.75 1.667-1.666 1.667H2.332c-.916 0-1.666-.75-1.666-1.667V8.667c.925 0 1.666-.75 1.666-1.667S1.591 5.333.674 5.333V2A1.66 1.66 0 0 1 2.332.333h13.334c.916 0 1.666.742 1.666 1.667zM8.01 11.344a.3.3 0 0 0 .558.193l.397-.696c.49-.859 1.355-2.372 2.597-4.539.115-.244 0-.343-.208-.343H9.525l.469-3.303a.3.3 0 0 0-.558-.192C8.842 3.51 8.314 4.436 7.853 5.245c-.549.963-1.003 1.76-1.36 2.39l-.001.003c-.026.037-.281.404.163.404h1.823l-.469 3.302z"
                                                    fill="#27AE60"></path>
                                            </svg> (58)
                                        </span>
                                    </label>
                                    <span class="filter-description-n">Nhà xe nhận được thông tin ngay khi bạn đặt
                                        vé</span>

                                    <label class="checkbox-group-n ant-checkbox-wrapper">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Không cần thanh toán trước (42)</span>
                                    </label>
                                    <span class="filter-description-n">Chuyến có thể thanh toán tại văn phòng nhà xe hoặc
                                        khi lên xe</span>

                                    <label class="checkbox-group-n ant-checkbox-wrapper">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Chuyến có trung chuyển đón/trả (85)</span>
                                    </label>
                                    <span class="filter-description-n">Chuyến có đón/trả tận nơi tại một số khu vực nhất
                                        định</span>

                                    <label class="checkbox-group-n ant-checkbox-wrapper">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Chuyến có giảm giá &amp; khuyến mãi (4)</span>
                                    </label>
                                    <span class="filter-description-n">Chuyến có giảm giá trực tiếp từ nhà xe hoặc có mã
                                        giảm giá của Vexere</span>
                                    <label class="checkbox-group-n ant-checkbox-wrapper">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Cho phép xem vị trí xe (9)</span>
                                    </label>
                                    <span class="filter-description-n">Chuyến có cung cấp tín hiệu định vị cho phép bạn
                                        theo dõi vị trí xe khi di chuyển</span>
                                </div>
                            </div>
                        </div>

                        <div class="filter-group filter-seats">
                            <div class="filter-header-container">
                                <p class="filter-label">Vị trí ghế</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content">
                                <div class="filter-item-n">
                                    <div class="filter-item-content-n">
                                        <p class="base__Body02-sc-1tvbuqk-23 gymsWw color--darkness">Số ghế trống</p>
                                        <div class="quantity-input-n">
                                            <button disabled="" type="button"
                                                class="ant-btn-n QuantityInput__RoundButton-sc-5ap7dx-1 bVEmRj decrease-n">
                                                <i class="fa fa-minus-square" aria-hidden="true"></i>
                                            </button>
                                            <div class="quantity-value-n">
                                                <p
                                                    class="base__SubHeadline-sc-1tvbuqk-10 dFjQag color--darkness quantity-value-text-n">
                                                    1</p>
                                            </div>
                                            <button type="button"
                                                class="ant-btn-n QuantityInput__RoundButton-sc-5ap7dx-1 bVEmRj increase-n">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-item-n">
                                    <div class="filter-item-content-n">
                                        <p class="base__Body02-sc-1tvbuqk-23 gymsWw color--darkness">Hàng ghế đầu</p>
                                        <label class="ant-checkbox-wrapper-n">
                                            <span class="ant-checkbox-n">
                                                <input type="checkbox" class="ant-checkbox-input-n" value="">
                                                <span class="ant-checkbox-inner-n"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="filter-item-n">
                                    <div class="filter-item-content-n">
                                        <p class="base__Body02-sc-1tvbuqk-23 gymsWw color--darkness">Hàng ghế giữa</p>
                                        <label class="ant-checkbox-wrapper-n">
                                            <span class="ant-checkbox-n">
                                                <input type="checkbox" class="ant-checkbox-input-n" value="">
                                                <span class="ant-checkbox-inner-n"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="filter-item-n filter-item-last-n">
                                    <div class="filter-item-content-n">
                                        <p class="base__Body02-sc-1tvbuqk-23 gymsWw color--darkness">Hàng ghế cuối</p>
                                        <label class="ant-checkbox-wrapper-n">
                                            <span class="ant-checkbox-n">
                                                <input type="checkbox" class="ant-checkbox-input-n" value="">
                                                <span class="ant-checkbox-inner-n"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filter-group filter-bus-type">
                            <div class="filter-header-container">
                                <p class="filter-label">Loại xe</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content filter-content-diemtra">
                                <input class="ant-input inputText" placeholder="Tìm trong danh sách" type="text"
                                    value="">
                                <div class="groupKind-n">
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Cabin 21 khoang Vip (1)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Ghế ngồi 45 chỗ (2)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Giường nằm 34 chỗ (1)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Giường nằm 38 chỗ (17)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Giường nằm 40 chỗ (37)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>giường nằm 40 chỗ (2)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Giường nằm 40 chỗ (1)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Giường nằm 40 chỗ (WC) (4)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Giường nằm 43 chỗ (2)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Giường nằm 44 chỗ (50)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Giường nằm 46 chỗ (12)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 20 phòng VIP (WC) (3)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 22 Giường VIP (Có WC) (30)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 22 phòng (3)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 22 phòng VIP (6)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 24 phòng (2)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 24 phòng VIP (24)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 31 chỗ VIP (Có WC) (4)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 34 giường (15)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 34 Giường VIP (1)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 34 phòng (2)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine 9 chỗ (4)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine giường phòng 22 phòng (WC) (1)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine giường phòng 22 phòng (WC) (new) (1)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine giường phòng 24 chỗ (3)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine giường phòng 24 chỗ (CABIN ĐÔI) (2)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine giường phòng 34 chỗ (5)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine giường phòng 34 chỗ (mới) (3)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine VIP 20 phòng (10)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine VIP 20 phòng (1)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Limousine VIP 20 phòng (mới) (1)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Sơ đồ 34 phòng (2)</span>
                                    </label>
                                    <label class="checkBoxGroup-n ant-checkbox-wrapper-n">
                                        <span class="ant-checkbox-n">
                                            <input type="checkbox" class="ant-checkbox-input-n" value="">
                                            <span class="ant-checkbox-inner-n"></span>
                                        </span>
                                        <span>Xe cabin cung điện 24 phòng (1)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="filter-group filter-seat-type">
                            <div class="filter-header-container">
                                <p class="filter-label">Loại ghế / giường</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content">
                                <div class="group-items-b">
                                    <label class="checkBoxGroup-b Filter_ACSeater ant-checkbox-wrapper-b">
                                        <span class="ant-checkbox-b">
                                            <input type="checkbox" class="ant-checkbox-input-b" value="">
                                            <span class="ant-checkbox-inner-b"></span>
                                        </span>
                                        <span>Ghế ngồi (6)</span>
                                    </label>
                                    <label class="checkBoxGroup-b Filter_ACSleeper ant-checkbox-wrapper-b">
                                        <span class="ant-checkbox-b">
                                            <input type="checkbox" class="ant-checkbox-input-b" value="">
                                            <span class="ant-checkbox-inner-b"></span>
                                        </span>
                                        <span>Giường nằm (245)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="filter-group filter-rating">
                            <div class="filter-header-container">
                                <p class="filter-label">Đánh giá</p>
                                <div class="expand-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            </div>
                            <div class="filter-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-filter">
                <div id="">
                    <div class="container-l">
                        <div class="ticket-container-l">
                            <div class="ticket-body-l">
                                <div class="ticket-image-l">
                                    <img class="operator-l"
                                        src="//static.vexere.com/production/images/1685360757314.jpeg?w=250&amp;h=250"
                                        alt="Đình Nhân">
                                    <div class="ticket-confirm-l">
                                        <i class="fa-solid fa-ticket"></i>Xác nhận tức thì
                                    </div>
                                </div>
                                <div class="ticket-info-l">
                                    <div class="ticket-bus-info-l">
                                        <div class="bus-name-l">Đình Nhân
                                            <button type="button" class="ant-btn bus-rating-button-l">
                                                <div class="bus-rating-l">
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>3.8 (282)</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="seat-type-l">Cabin 22 Phòng</div>
                                    <div class="from-to-l">
                                        <svg class="location-route-svg-l" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="74" viewBox="0 0 14 74">
                                            <path fill="none" stroke="#787878" stroke-linecap="round"
                                                stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46"></path>
                                            <g fill="none" stroke="#484848" stroke-width="3">
                                                <circle cx="7" cy="7" r="7" stroke="none"></circle>
                                                <circle cx="7" cy="7" r="5.5"></circle>
                                            </g>
                                            <path
                                                d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                                fill="#787878"></path>
                                        </svg>
                                        <div class="from-to-content-l">
                                            <div class="content-l from-l">
                                                <div class="hour-l">15:30</div>
                                                <div class="place-l">• VP Đà Nẵng</div>
                                            </div>
                                            <div class="duration-l">17h30m</div>
                                            <div class="content-l to-l">
                                                <div class="content-to-info-l">
                                                    <div class="hour-l">09:00</div>
                                                    <div class="place-l">• VP Tân Bình</div>
                                                </div>
                                            </div>
                                            <div class="text-date-arrival-time-l-r">
                                                <span class="text-date-arrival-time-l">(02/08)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social-proof-l">7 người đặt trong 6 tiếng gần đây</div>
                                    <div class="action-p">
                                        <div class="seat-available">Còn 23 chỗ trống</div>
                                        <div class="action-l">
                                            <button type="button" class="ant-btn btn-detail-l ant-btn-link-l"
                                                data-bs-toggle="collapse" data-bs-target="#ticket-detail-collapse"
                                                aria-expanded="false" aria-controls="ticket-detail-collapse">
                                                <span>Thông tin chi tiết 1</span>
                                                <i aria-label="icon: caret-down" class="anticon anticon-caret-down-l">
                                                    <svg viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </button>
                                            <button data-tracking-event="selected_route" type="button"
                                                class="ant-btn btn-booking-l">
                                                <span>Chọn chuyến</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="fare-info-l">
                                        <div class="fare-l">750.000đ</div>
                                        <div class="fareSmall">
                                            <div class="small">280.000đ</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="notify-trip-l">
                            <div class="full-trip-l">
                                <span>*</span> Vé chặng thuộc chuyến 15:00 01-08-2024 Hà Nội - Đà Nẵng
                            </div>
                            <div class="content-has-cop">
                                <div>Không cần thanh toán trước</div>
                            </div>
                        </div>
                        <div class="collapse ticket-detail-collapse show">
                            <hr>
                            <div class="container ticket-detail-container ps-3 pe-3">
                                <ul class="nav nav-pills mb-1" id="pills-ticket-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="coupon-tab" data-bs-toggle="pill"
                                            data-bs-target="#coupon" type="button" role="tab"
                                            aria-controls="coupon" aria-selected="true">Giảm giá</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pickup-tab" data-bs-toggle="pill"
                                            data-bs-target="#pickup" type="button" role="tab"
                                            aria-controls="pickup" aria-selected="false">Điểm đón, trả</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="rating-tab" data-bs-toggle="pill"
                                            data-bs-target="#rating" type="button" role="tab"
                                            aria-controls="rating" aria-selected="false">Đánh giá</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="thumb-tab" data-bs-toggle="pill"
                                            data-bs-target="#image" type="button" role="tab"
                                            aria-controls="image" aria-selected="false">Hình ảnh</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="policy-tab" data-bs-toggle="pill"
                                            data-bs-target="#policy" type="button" role="tab"
                                            aria-controls="policy" aria-selected="false">Chính sách</button>
                                    </li>
                                </ul>
                                <div class="tab-content ticket-detail-contentTab">
                                    <div class="tab-pane fade coupon-tab" id="coupon" role="tabpanel"
                                        aria-labelledby="coupon-tab" tabindex="0">
                                        Mã giảm giá
                                    </div>
                                    <div class="tab-pane fade pickup-tab" id="pickup" role="tabpanel"
                                        aria-labelledby="pickup-tab" tabindex="1">
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold">Lưu ý</div>
                                            <div class="content-note-ticket">Các mốc thời gian đón, trả bên dưới là thời
                                                gian dự kiến.
                                                Lịch này có thể thay đổi tùy tình hình thưc tế.
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold">Điểm đón</div>
                                                <div class="list-group">
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h6 class="mb-1">8:30 <span
                                                                    class="badge text-bg-success">Có trung chuyển</span>
                                                            </h6>
                                                            <small class="text-muted">15 phút nữa</small>
                                                        </div>
                                                        <p class="mb-1">Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)</p>
                                                    </div>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h6 class="mb-1">8:30</h6>
                                                            <small class="text-muted">15 phút nữa</small>
                                                        </div>
                                                        <p class="mb-1">Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)</p>
                                                    </div>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h6 class="mb-1">8:30</h6>
                                                            <small class="text-muted">15 phút nữa</small>
                                                        </div>
                                                        <p class="mb-1">Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold">Điểm trả</div>
                                                <div class="list-group">
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h6 class="mb-1">8:30</h6>
                                                            <small class="text-muted">15 phút nữa</small>
                                                        </div>
                                                        <p class="mb-1">Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)</p>
                                                    </div>
                                                    <div class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h6 class="mb-1">8:30</h6>
                                                            <small class="text-muted">15 phút nữa</small>
                                                        </div>
                                                        <p class="mb-1">Sân Bay Nội Bài ( Sảnh E Ga Nội Địa T1)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="rating" role="tabpanel"
                                        aria-labelledby="rating-tab" tabindex="2">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center rating-info">
                                                <button class="btn btn-primary p-1"><i class="fa-solid fa-star"></i>
                                                    4.5</button>
                                                <div class="d-flex align-items-center star-rating ms-2 me-2"
                                                    style="color: rgb(255, 199, 0);">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="text-wrap">73 Đánh giá</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mt-2 mb-2">
                                            <div class="row d-flex w-100 ps-2 pe-2">
                                                <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                                    <div class="card item-card-rating">
                                                        <div class="card-body p-0">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="fw-bold">An toàn</div>
                                                                <div class="fw-bold">3.6</div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-label="Basic example" style="width: 50%"
                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                                    <div class="card item-card-rating">
                                                        <div class="card-body p-0">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="fw-bold">An toàn</div>
                                                                <div class="fw-bold">3.6</div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-label="Basic example" aria-valuenow="0"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                                    <div class="card item-card-rating">
                                                        <div class="card-body p-0">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="fw-bold">An toàn</div>
                                                                <div class="fw-bold">3.6</div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-label="Basic example" aria-valuenow="0"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row d-flex w-100 ps-2 pe-2">
                                                <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                                    <div class="card item-card-rating">
                                                        <div class="card-body p-0">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="fw-bold">An toàn</div>
                                                                <div class="fw-bold">3.6</div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-label="Basic example" aria-valuenow="0"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                                    <div class="card item-card-rating">
                                                        <div class="card-body p-0">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="fw-bold">An toàn</div>
                                                                <div class="fw-bold">3.6</div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-label="Basic example" aria-valuenow="0"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 ps-2 pe-2">
                                                    <div class="card item-card-rating">
                                                        <div class="card-body p-0">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="fw-bold">An toàn</div>
                                                                <div class="fw-bold">3.6</div>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-label="Basic example" aria-valuenow="0"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills mb-1 pill-rating-filter" id="pills-ticket-tab"
                                            role="tablist">
                                            <li class="nav-item filter-rating" role="presentation">
                                                <button class="nav-link active" data-bs-toggle="pill">Tất cả
                                                    (100)</button>
                                            </li>
                                            <li class="nav-item filter-rating" role="presentation">
                                                <button class="nav-link" data-bs-toggle="pill">Có nhận xét
                                                    (100)</button>
                                            </li>
                                            <li class="nav-item filter-rating" role="presentation">
                                                <button class="nav-link" data-bs-toggle="pill">Có hình ảnh
                                                    (100)</button>
                                            </li>
                                            <li class="nav-item filter-rating" role="presentation">
                                                <button class="nav-link" data-bs-toggle="pill">5<i
                                                        class="fa-solid fa-star"></i>(12)</button>
                                            </li>
                                            <li class="nav-item filter-rating" role="presentation">
                                                <button class="nav-link" data-bs-toggle="pill">4<i
                                                        class="fa-solid fa-star"></i>(12)</button>
                                            </li>
                                            <li class="nav-item filter-rating" role="presentation">
                                                <button class="nav-link" data-bs-toggle="pill">3<i
                                                        class="fa-solid fa-star"></i>(12)</button>
                                            </li>
                                            <li class="nav-item filter-rating" role="presentation">
                                                <button class="nav-link" data-bs-toggle="pill">2<i
                                                        class="fa-solid fa-star"></i>(12)</button>
                                            </li>
                                            <li class="nav-item filter-rating" role="presentation">
                                                <button class="nav-link" data-bs-toggle="pill">1<i
                                                        class="fa-solid fa-star"></i>(12)</button>
                                            </li>
                                        </ul>

                                        <div class="list-group w-100 list-gr-review">
                                            <div class="list-group-item list-group-item-action p-3" aria-current="true">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <div class="d-flex user-review">
                                                        <img class="avatar-review"
                                                            src="https://bizweb.dktcdn.net/100/303/962/files/87126502-2509242206005371-2073523065622364160-n-f697e400-e8b2-4bb1-9698-d00b50b2d9c3.jpg?v=1627804121650"
                                                            alt="anh-dai-dien" srcset="">
                                                        <div class="d-flex flex-column mt-1 ms-1">
                                                            <h6 class="mb-1">List group item heading</h6>
                                                            <div class="d-flex align-items-center star-rating"
                                                                style="color: rgb(255, 199, 0);">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">The single cabin was nice. The bed was a little short,
                                                    but it was wide and pleasant. Each cabin was provided with bottled
                                                    water, wet wipes and blankets. The bed was clean and the staff was very
                                                    friendly, so I had a great experience.</p>
                                                <div class="d-flex list-img-review flex-row">
                                                    <img class="thumb-img-review"
                                                        src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/6539305fb14952972dabefd10d4402b3.jpg"
                                                        alt="thumb-1">
                                                    <img class="thumb-img-review"
                                                        src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/anh-gai-xinh-1-17.jpg"
                                                        alt="thumb-1">
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="">Đã đi ngày 29/07/2024</small>
                                                    <div class="item-check-review ms-1">
                                                        <i class="fa-solid fa-ticket"></i>
                                                        <small>Đã mua vé</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item list-group-item-action p-3" aria-current="true">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <div class="d-flex user-review">
                                                        <img class="avatar-review"
                                                            src="https://bizweb.dktcdn.net/100/303/962/files/87126502-2509242206005371-2073523065622364160-n-f697e400-e8b2-4bb1-9698-d00b50b2d9c3.jpg?v=1627804121650"
                                                            alt="anh-dai-dien" srcset="">
                                                        <div class="d-flex flex-column mt-1 ms-1">
                                                            <h6 class="mb-1">List group item heading</h6>
                                                            <div class="d-flex align-items-center star-rating"
                                                                style="color: rgb(255, 199, 0);">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">The single cabin was nice. The bed was a little short,
                                                    but it was wide and pleasant. Each cabin was provided with bottled
                                                    water, wet wipes and blankets. The bed was clean and the staff was very
                                                    friendly, so I had a great experience.</p>
                                                <div class="d-flex list-img-review flex-row">
                                                    <img class="thumb-img-review"
                                                        src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/6539305fb14952972dabefd10d4402b3.jpg"
                                                        alt="thumb-1">
                                                    <img class="thumb-img-review"
                                                        src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/anh-gai-xinh-1-17.jpg"
                                                        alt="thumb-1">
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="">Đã đi ngày 29/07/2024</small>
                                                    <div class="item-check-review ms-1">
                                                        <i class="fa-solid fa-ticket"></i>
                                                        <small>Đã mua vé</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item list-group-item-action p-3" aria-current="true">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <div class="d-flex user-review">
                                                        <img class="avatar-review"
                                                            src="https://bizweb.dktcdn.net/100/303/962/files/87126502-2509242206005371-2073523065622364160-n-f697e400-e8b2-4bb1-9698-d00b50b2d9c3.jpg?v=1627804121650"
                                                            alt="anh-dai-dien" srcset="">
                                                        <div class="d-flex flex-column mt-1 ms-1">
                                                            <h6 class="mb-1">List group item heading</h6>
                                                            <div class="d-flex align-items-center star-rating"
                                                                style="color: rgb(255, 199, 0);">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star-half-stroke"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">The single cabin was nice. The bed was a little short,
                                                    but it was wide and pleasant. Each cabin was provided with bottled
                                                    water, wet wipes and blankets. The bed was clean and the staff was very
                                                    friendly, so I had a great experience.</p>
                                                <div class="d-flex list-img-review flex-row">
                                                    <img class="thumb-img-review"
                                                        src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/6539305fb14952972dabefd10d4402b3.jpg"
                                                        alt="thumb-1">
                                                    <img class="thumb-img-review"
                                                        src="https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/anh-gai-xinh-1-17.jpg"
                                                        alt="thumb-1">
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="">Đã đi ngày 29/07/2024</small>
                                                    <div class="item-check-review ms-1">
                                                        <i class="fa-solid fa-ticket"></i>
                                                        <small>Đã mua vé</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade image-tab" id="image" role="tabpanel"
                                        aria-labelledby="image-tab" tabindex="3">
                                        <div class="d-flex flex-column m-2">
                                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                                class="swiper mySwiper2">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                            <div thumbsSlider="" class="swiper mySwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active policy-tab" id="policy" role="tabpanel"
                                        aria-labelledby="policy" tabindex="4">
                                        <div class="d-flex flex-column m-2">
                                            <div class="d-flex flex-column policy-content-f">
                                                <h6>Chính sách huỷ đơn hàng</h6>
                                                <div class="timeline-policy row">
                                                    <div class="col-06">
                                                        20:16 <br />
                                                        10/08/2024
                                                    </div>
                                                    <div class="col-06">
                                                        20:16 <br />
                                                        10/08/2024
                                                    </div>
                                                </div>
                                                <div class="w-100 d-flex flex-row">
                                                    <div class="cancellation-policy-period w-100">
                                                        <div class="cancellation-line w-100"
                                                            style="background:rgb(0, 96, 196)"></div>
                                                        <p>Phí huỷ 50%</p>
                                                    </div>
                                                    <div class="cancellation-policy-period w-100">
                                                        <div class="cancellation-line w-100"
                                                            style="background: rgb(255, 199, 0);"></div>
                                                        <p>Phí huỷ 50%</p>
                                                    </div>
                                                    <div class="cancellation-policy-period w-100">
                                                        <div class="cancellation-line w-100"
                                                            style="background: rgb(241, 0, 0)"></div>
                                                        <p>Phí huỷ 50%</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="d-flex flex-column policy-content-b">
                                                <h5 class="mb-2">Chính sách nhà xe</h5>
                                                <div class="d-flex flex-column ms-2">
                                                    <div class="policy-content-l">
                                                        <h6>Chính sách đặt vé</h6>
                                                        <p>Vexere xin trân trọng cảm ơn quý khách đã tin tưởng và đặt vé tại
                                                            đây. Chính sách đặt vé của Vexere như sau:</p>
                                                        <ul>
                                                            <li>Quý khách vui lòng đảm bảo thông tin đầy đủ và chính xác khi
                                                                đặt
                                                                vé.</li>
                                                            <li>Vexere sẽ chủ động đảm bảo đầy đủ thông tin về chuyến bay,
                                                                điểm
                                                                đến, ngày đi, giờ</li>
                                                        </ul>
                                                    </div>
                                                    <hr />
                                                    <div class="policy-content-l">
                                                        <h6>Chính sách đặt vé</h6>
                                                        <p>Vexere xin trân trọng cảm ơn quý khách đã tin tưởng và đặt vé tại
                                                            đây. Chính sách đặt vé của Vexere như sau:</p>
                                                        <ul>
                                                            <li>Quý khách vui lòng đảm bảo thông tin đầy đủ và chính xác khi
                                                                đặt
                                                                vé.</li>
                                                            <li>Vexere sẽ chủ động đảm bảo đầy đủ thông tin về chuyến bay,
                                                                điểm
                                                                đến, ngày đi, giờ</li>
                                                        </ul>
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
                <div id="">
                    <div class="container-l">
                        <div class="ticket-container-l">
                            <div class="ticket-body-l">
                                <div class="ticket-image-l">
                                    <img class="operator-l"
                                        src="//static.vexere.com/production/images/1685360757314.jpeg?w=250&amp;h=250"
                                        alt="Đình Nhân">
                                    <div class="ticket-confirm-l">
                                        <i class="fa-solid fa-ticket"></i>Xác nhận tức thì
                                    </div>
                                </div>
                                <div class="ticket-info-l">
                                    <div class="ticket-bus-info-l">
                                        <div class="bus-name-l">Đình Nhân
                                            <button type="button" class="ant-btn bus-rating-button-l">
                                                <div class="bus-rating-l">
                                                    <i class="fa-solid fa-star"></i>
                                                    <span>3.8 (282)</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="seat-type-l">Cabin 22 Phòng</div>
                                    <div class="from-to-l">
                                        <svg class="location-route-svg-l" xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="74" viewBox="0 0 14 74">
                                            <path fill="none" stroke="#787878" stroke-linecap="round"
                                                stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46"></path>
                                            <g fill="none" stroke="#484848" stroke-width="3">
                                                <circle cx="7" cy="7" r="7" stroke="none"></circle>
                                                <circle cx="7" cy="7" r="5.5"></circle>
                                            </g>
                                            <path
                                                d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                                fill="#787878"></path>
                                        </svg>
                                        <div class="from-to-content-l">
                                            <div class="content-l from-l">
                                                <div class="hour-l">15:30</div>
                                                <div class="place-l">• VP Đà Nẵng</div>
                                            </div>
                                            <div class="duration-l">17h30m</div>
                                            <div class="content-l to-l">
                                                <div class="content-to-info-l">
                                                    <div class="hour-l">09:00</div>
                                                    <div class="place-l">• VP Tân Bình</div>
                                                </div>
                                            </div>
                                            <div class="text-date-arrival-time-l-r">
                                                <span class="text-date-arrival-time-l">(02/08)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social-proof-l">7 người đặt trong 6 tiếng gần đây</div>
                                    <div class="action-p">
                                        <div class="seat-available">Còn 23 chỗ trống</div>
                                        <div class="action-l">
                                            <button type="button" class="ant-btn btn-detail-l ant-btn-link-l">
                                                <span>Thông tin chi tiết</span>
                                                <i aria-label="icon: caret-down" class="anticon anticon-caret-down-l">
                                                    <svg viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </button>
                                            <button data-tracking-event="selected_route" type="button"
                                                class="ant-btn btn-booking-l">
                                                <span>Chọn chuyến</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="fare-info-l">
                                        <div class="fare-l">750.000đ</div>
                                        <div class="fareSmall">
                                            <div class="small">280.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="notify-trip-l">
                            <div class="full-trip-l">
                                <span>*</span> Vé chặng thuộc chuyến 15:00 01-08-2024 Hà Nội - Đà Nẵng
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moon-time@2.4.0/calculate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"
        integrity="sha512-fCRpXk4VumjVNtE0j+OyOqzPxF1eZwacU3kN3SsznRPWHgMTSSo7INc8aY03KQDBWztuMo5KjKzCFXI/a5rVYQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JS xe khách -->
    <script>
        const busCities = [{
                name: "Hồ Chí Minh"
            },
            {
                name: "Hà Nội"
            },
            {
                name: "Đà Nẵng"
            },
            {
                name: "Đà Lạt"
            },
            {
                name: "Nha Trang"
            },
            {
                name: "Phú Quốc"
            }
        ];

        function updateBusDropdownList(inputElement, dropdownListElement, filter) {
            dropdownListElement.innerHTML = '';
            const filteredCities = busCities.filter(city => city.name.toLowerCase().includes(filter.toLowerCase()));
            filteredCities.forEach(city => {
                const item = document.createElement('li');
                item.className = 'custom-dropdown-item';
                item.innerHTML = `
        <div class="custom-item-container">
          <div class="custom-icon-section">
            <i class="fa fa-car" aria-hidden="true"></i>
          </div>
          <div class="custom-content-section">
            <div class="custom-city-title"><b>${city.name}</b></div>
          </div>
        </div>
      `;
                item.addEventListener('mousedown', function(event) {
                    event.preventDefault();
                    inputElement.value = city.name;
                    dropdownListElement.parentElement.style.display = 'none';
                });
                dropdownListElement.appendChild(item);
            });
        }

        function setupBusInput(inputElement, dropdownMenu, dropdownList) {
            inputElement.addEventListener('focus', function() {
                dropdownMenu.style.display = 'block';
                updateBusDropdownList(inputElement, dropdownList, inputElement.value);
            });

            inputElement.addEventListener('blur', function() {
                setTimeout(function() {
                    dropdownMenu.style.display = 'none';
                }, 200);
            });

            inputElement.addEventListener('input', function() {
                updateBusDropdownList(inputElement, dropdownList, inputElement.value);
            });

            inputElement.addEventListener('click', function() {
                dropdownMenu.style.display = 'block';
                updateBusDropdownList(inputElement, dropdownList, inputElement.value);
            });
        }

        const busFromInput = document.getElementById('bus_from_input');
        const busFromDropdownMenu = document.querySelector('.custom-bus-from-select-wrapper .bus-dropdown-menu');
        const busFromDropdownList = document.getElementById('dropdown_list_bus_from');

        setupBusInput(busFromInput, busFromDropdownMenu, busFromDropdownList);

        const busToInput = document.getElementById('bus_to_input');
        const busToDropdownMenu = document.querySelector('.custom-bus-to-select-wrapper .bus-dropdown-menu');
        const busToDropdownList = document.getElementById('dropdown_list_bus_to');

        setupBusInput(busToInput, busToDropdownMenu, busToDropdownList);

        // Hoán đổi giá trị của hai ô nhập liệu
        const busSwapButton = document.getElementById('bus_swap_button');
        busSwapButton.addEventListener('click', function() {
            const fromValue = busFromInput.value;
            const toValue = busToInput.value;
            busFromInput.value = toValue;
            busToInput.value = fromValue;
        });

        // Khởi tạo danh sách dropdown ban đầu
        updateBusDropdownList(busFromInput, busFromDropdownList, '');
        updateBusDropdownList(busToInput, busToDropdownList, '');
    </script>

    <!-- JS máy bay -->
    <script>
        const planeCities = [{
                name: "Hồ Chí Minh",
                code: "SGN",
                airport: "Sân bay Tân Sơn Nhất"
            },
            {
                name: "Hà Nội",
                code: "HAN",
                airport: "Sân bay Nội Bài"
            },
            {
                name: "Đà Nẵng",
                code: "DAD",
                airport: "Sân bay Đà Nẵng"
            },
            {
                name: "Đà Lạt",
                code: "DLI",
                airport: "Sân bay Liên Khương"
            },
            {
                name: "Nha Trang",
                code: "CXR",
                airport: "Sân bay Cam Ranh"
            },
            {
                name: "Phú Quốc",
                code: "PQC",
                airport: "Sân bay Phú Quốc"
            }
        ];

        function updatePlaneDropdownList(inputElement, dropdownListElement, filter) {
            dropdownListElement.innerHTML = '';
            const filteredCities = planeCities.filter(city => city.name.toLowerCase().includes(filter.toLowerCase()));
            filteredCities.forEach(city => {
                const item = document.createElement('li');
                item.className = 'custom-dropdown-item';
                item.innerHTML = `
        <div class="custom-item-container">
          <div class="custom-icon-section">
            <i class="fa fa-globe" aria-hidden="true"></i>
          </div>
          <div class="custom-content-section">
            <div class="custom-city-title"><b>${city.name}</b></div>
            <p>${city.code} - ${city.airport}</p>
          </div>
        </div>
      `;
                item.addEventListener('mousedown', function(event) {
                    event.preventDefault();
                    inputElement.value = city.name;
                    dropdownListElement.parentElement.style.display = 'none';
                });
                dropdownListElement.appendChild(item);
            });
        }

        function setupPlaneInput(inputElement, dropdownMenu, dropdownList) {
            inputElement.addEventListener('focus', function() {
                dropdownMenu.style.display = 'block';
                updatePlaneDropdownList(inputElement, dropdownList, inputElement.value);
            });

            inputElement.addEventListener('blur', function() {
                setTimeout(function() {
                    dropdownMenu.style.display = 'none';
                }, 200);
            });

            inputElement.addEventListener('input', function() {
                updatePlaneDropdownList(inputElement, dropdownList, inputElement.value);
            });

            inputElement.addEventListener('click', function() {
                dropdownMenu.style.display = 'block';
                updatePlaneDropdownList(inputElement, dropdownList, inputElement.value);
            });
        }

        const planeFromInput = document.getElementById('plane_from_input');
        const planeFromDropdownMenu = document.querySelector('.custom-plane-from-select-wrapper .plane-dropdown-menu');
        const planeFromDropdownList = document.getElementById('dropdown_list_plane_from');

        setupPlaneInput(planeFromInput, planeFromDropdownMenu, planeFromDropdownList);

        const planeToInput = document.getElementById('plane_to_input');
        const planeToDropdownMenu = document.querySelector('.custom-plane-to-select-wrapper .plane-dropdown-menu');
        const planeToDropdownList = document.getElementById('dropdown_list_plane_to');

        setupPlaneInput(planeToInput, planeToDropdownMenu, planeToDropdownList);

        // Hoán đổi giá trị của hai ô nhập liệu
        const planeSwapButton = document.getElementById('plane_swap_button');
        planeSwapButton.addEventListener('click', function() {
            const fromValue = planeFromInput.value;
            const toValue = planeToInput.value;
            planeFromInput.value = toValue;
            planeToInput.value = fromValue;
        });

        // Khởi tạo danh sách dropdown ban đầu
        updatePlaneDropdownList(planeFromInput, planeFromDropdownList, '');
        updatePlaneDropdownList(planeToInput, planeToDropdownList, '');
    </script>

    <!-- JS tàu hỏa -->
    <script>
        const trainCities = [{
                name: "Hồ Chí Minh"
            },
            {
                name: "Hà Nội"
            },
            {
                name: "Đà Nẵng"
            },
            {
                name: "Đà Lạt"
            },
            {
                name: "Nha Trang"
            },
            {
                name: "Phú Quốc"
            }
        ];

        function updateTrainDropdownList(inputElement, dropdownListElement, filter) {
            dropdownListElement.innerHTML = '';
            const filteredCities = trainCities.filter(city => city.name.toLowerCase().includes(filter.toLowerCase()));
            filteredCities.forEach(city => {
                const item = document.createElement('li');
                item.className = 'custom-dropdown-item';
                item.innerHTML = `
        <div class="custom-item-container">
          <div class="custom-icon-section">
            <i class="fa fa-train" aria-hidden="true"></i>
          </div>
          <div class="custom-content-section">
            <div class="custom-city-title"><b>${city.name}</b></div>
          </div>
        </div>
      `;
                item.addEventListener('mousedown', function(event) {
                    event.preventDefault();
                    inputElement.value = city.name;
                    dropdownListElement.parentElement.style.display = 'none';
                });
                dropdownListElement.appendChild(item);
            });
        }

        function setupTrainInput(inputElement, dropdownMenu, dropdownList) {
            inputElement.addEventListener('focus', function() {
                dropdownMenu.style.display = 'block';
                updateTrainDropdownList(inputElement, dropdownList, inputElement.value);
            });

            inputElement.addEventListener('blur', function() {
                setTimeout(function() {
                    dropdownMenu.style.display = 'none';
                }, 200);
            });

            inputElement.addEventListener('input', function() {
                updateTrainDropdownList(inputElement, dropdownList, inputElement.value);
            });

            inputElement.addEventListener('click', function() {
                dropdownMenu.style.display = 'block';
                updateTrainDropdownList(inputElement, dropdownList, inputElement.value);
            });
        }

        const trainFromInput = document.getElementById('train_from_input');
        const trainFromDropdownMenu = document.querySelector('.custom-train-from-select-wrapper .train-dropdown-menu');
        const trainFromDropdownList = document.getElementById('dropdown_list_train_from');

        setupTrainInput(trainFromInput, trainFromDropdownMenu, trainFromDropdownList);

        const trainToInput = document.getElementById('train_to_input');
        const trainToDropdownMenu = document.querySelector('.custom-train-to-select-wrapper .train-dropdown-menu');
        const trainToDropdownList = document.getElementById('dropdown_list_train_to');

        setupTrainInput(trainToInput, trainToDropdownMenu, trainToDropdownList);

        // Hoán đổi giá trị của hai ô nhập liệu
        const trainSwapButton = document.getElementById('train_swap_button');
        trainSwapButton.addEventListener('click', function() {
            const fromValue = trainFromInput.value;
            const toValue = trainToInput.value;
            trainFromInput.value = toValue;
            trainToInput.value = fromValue;
        });

        // Khởi tạo danh sách dropdown ban đầu
        updateTrainDropdownList(trainFromInput, trainFromDropdownList, '');
        updateTrainDropdownList(trainToInput, trainToDropdownList, '');
    </script>

    {{-- Js chọn ngày đi  --}}
    <script>
        const vn = {
            days: ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'],
            daysShort: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            daysMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            months: ['Tháng Một', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy',
                'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai'
            ],
            monthsShort: ['Th1', 'Th2', 'Th3', 'Th4', 'Th5', 'Th6', 'Th7', 'Th8', 'Th9', 'Th10', 'Th11', 'Th12'],
            today: 'Hôm Nay',
            clear: 'Xóa',
            dateFormat: 'dd/mm/yyyy',
            timeFormat: 'HH:ii',
            firstDay: 1
        };
        new AirDatepicker('.date-from', {
            // inline: true,
            locale: vn,
            timeFormat: 'hh:mm AA',
            // position: "center",
            onRenderCell({
                date,
                cellType
            }) {
                if (cellType === 'day') {
                    const lunarDate = moonTime({
                        year: date.getFullYear(),
                        month: date.getMonth() + 1,
                        day: date.getDate()
                    });
                    return {
                        html: `
                    <div class="wrap-cell">
                        <div class="fw-bold">${date.getDate()}</div>
                        <div class="lunar-date">${lunarDate.day}</div>
                    </div>
                    <div class="price-cell">1999k</div>
                    `
                    };
                }
            }
        });
    </script>

    {{-- Js ngày hiện tại  --}}
    <script>
        function getFormattedDate() {
            const days = ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"];
            const today = new Date();
            const day = days[today.getDay()];
            const date = today.getDate();
            const month = today.getMonth() + 1; // Months are zero-indexed
            const year = today.getFullYear();

            return `${day} ${date}/${month}/${year}`;
        }

        $('.date_input').attr('placeholder', getFormattedDate());
    </script>

    {{-- Js chọn hành khách --}}
    <script>
        $(document).ready(function() {
            const searchContainer = $('.search-container');
            const passengerSelection = $('.passenger-selection');
            const passengerContent = $('.passenger-content');

            searchContainer.on('click', function(event) {
                event.stopPropagation();
                passengerSelection.toggle();
            });

            passengerContent.on('click', function(event) {
                event.stopPropagation();
            });

            const increaseButtons = $('.increase');
            const decreaseButtons = $('.decrease');
            const applyBtn = $('.apply-btn');
            const passengerInfo = $('.passenger-info');

            increaseButtons.on('click', function(event) {
                event.stopPropagation();
                const numberElement = $(this).prev('.number');
                let number = parseInt(numberElement.text());
                numberElement.text(++number);
                updatePassengerInfo();
            });

            decreaseButtons.on('click', function(event) {
                event.stopPropagation();
                const numberElement = $(this).next('.number');
                let number = parseInt(numberElement.text());
                if (number > 0) {
                    numberElement.text(--number);
                    updatePassengerInfo();
                }
            });

            applyBtn.on('click', function() {
                passengerSelection.hide();
            });

            $(document).on('click', function(event) {
                if (!searchContainer.is(event.target) && searchContainer.has(event.target).length === 0) {
                    passengerSelection.hide();
                }
            });

            function updatePassengerInfo() {
                const numbers = $('.number');
                let totalPassengers = 0;
                numbers.each(function() {
                    totalPassengers += parseInt($(this).text());
                });
                passengerInfo.text(`${totalPassengers} Hành khách`);
            }
        });
    </script>

    {{-- JS lấy hạng ghế --}}
    <script>
        $(document).ready(function() {
            const searchContainer = $('.seat-search-container');
            const seatSelectionDropdown = $('.seat-selection-dropdown');
            const seatOptionItems = $('.seat-option-item');
            const seatInfoText = $('.seat-info-text');
            const seatCheckIcons = $('.seat-check-icon');

            searchContainer.on('click', function(event) {
                event.stopPropagation();
                seatSelectionDropdown.toggle();
            });

            seatOptionItems.on('click', function() {
                seatInfoText.text($(this).find('.seat-option-title').text());
                seatCheckIcons.hide();
                $(this).find('.seat-check-icon').show();
                seatSelectionDropdown.hide();
            });

            $(document).on('click', function(event) {
                if (!searchContainer.is(event.target) && searchContainer.has(event.target).length === 0) {
                    seatSelectionDropdown.hide();
                }
            });
        });
    </script>

    {{-- JS lọc sắp xếp --}}
    <script>
        $(document).ready(function() {
            const radioWrappers = $('.radio-wrapper');

            radioWrappers.on('click', function() {
                // Remove the 'checked' class from all radio wrappers
                radioWrappers.removeClass('checked');

                // Add the 'checked' class to the clicked radio wrapper
                $(this).addClass('checked');

                // Check the input
                $(this).find('.radio-input').prop('checked', true);
            });
        });
    </script>

    {{-- JS lọc bottom --}}
    <script>
        $(document).ready(function() {
            const filterHeaders = $('.filter-header-container');

            filterHeaders.on('click', function() {
                const filterContent = $(this).next();
                const expandIcon = $(this).find('.expand-icon i');

                if (filterContent.is(':visible')) {
                    filterContent.hide();
                    expandIcon.attr('class', 'fa fa-angle-down');
                } else {
                    filterContent.show();
                    expandIcon.attr('class', 'fa fa-angle-up');
                }
            });
        });
    </script>

    {{-- JS lọc giờ --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.slider');
            const handle1 = slider.querySelector('.slider-handle-1');
            const handle2 = slider.querySelector('.slider-handle-2');
            const track = slider.querySelector('.slider-track');
            const inputFrom = document.querySelector('.from-time');
            const inputTo = document.querySelector('.to-time');
            const max = 24; // Max value for the slider in hours

            // Function to convert time to hours
            function timeToHours(time) {
                return parseInt(time.split(':')[0]);
            }

            // Function to convert hours to time
            function hoursToTime(hours) {
                return `${String(hours).padStart(2, '0')}:00`;
            }

            // Function to update track and input values
            function updateTrack() {
                const value1 = parseFloat(handle1.style.left);
                const value2 = parseFloat(handle2.style.left);
                track.style.left = Math.min(value1, value2) + '%';
                track.style.width = Math.abs(value1 - value2) + '%';
                inputFrom.value = hoursToTime(Math.round(Math.min(value1, value2) * max / 100));
                inputTo.value = hoursToTime(Math.round(Math.max(value1, value2) * max / 100));
            }

            // Function to handle dragging
            function onDrag(event, handle) {
                const sliderRect = slider.getBoundingClientRect();
                const newLeft = Math.min(Math.max(0, event.clientX - sliderRect.left), sliderRect.width);
                const valueInHours = Math.round((newLeft / sliderRect.width) * max); // Round to nearest hour
                handle.style.left = (valueInHours / max) * 100 + '%';
                updateTrack();
            }

            function onDragEnd() {
                document.removeEventListener('mousemove', onMouseMove);
                document.removeEventListener('mouseup', onMouseUp);
            }

            function onMouseMove(event) {
                onDrag(event, draggingHandle);
            }

            function onMouseUp(event) {
                onDrag(event, draggingHandle);
                onDragEnd();
            }

            let draggingHandle;

            handle1.addEventListener('mousedown', function(event) {
                draggingHandle = handle1;
                document.addEventListener('mousemove', onMouseMove);
                document.addEventListener('mouseup', onMouseUp);
            });

            handle2.addEventListener('mousedown', function(event) {
                draggingHandle = handle2;
                document.addEventListener('mousemove', onMouseMove);
                document.addEventListener('mouseup', onMouseUp);
            });

            // Set initial positions and update track
            handle1.style.left = '0%';
            handle2.style.left = '100%';
            updateTrack();

            // Update the slider based on input change
            inputFrom.addEventListener('change', function() {
                const hours = Math.min(Math.max(timeToHours(inputFrom.value), 0), max);
                handle1.style.left = (hours / max) * 100 + '%';
                updateTrack();
            });

            inputTo.addEventListener('change', function() {
                const hours = Math.min(Math.max(timeToHours(inputTo.value), 0), max);
                handle2.style.left = (hours / max) * 100 + '%';
                updateTrack();
            });
        });
    </script>

    {{-- JS lọc tiền --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.custom-slider');
            const handle1 = slider.querySelector('.custom-slider-handle-1');
            const handle2 = slider.querySelector('.custom-slider-handle-2');
            const track = slider.querySelector('.custom-slider-track-1');
            const valueLeft = document.querySelector('.custom-value-left');
            const valueRight = document.querySelector('.custom-value-right');
            const max = 2000000; // Max value for the slider

            // Function to format currency
            function formatCurrency(value) {
                return value.toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });
            }

            // Function to update track and value display
            function updateTrack() {
                const value1 = parseFloat(handle1.style.left);
                const value2 = parseFloat(handle2.style.left);
                track.style.left = Math.min(value1, value2) + '%';
                track.style.width = Math.abs(value1 - value2) + '%';
                valueLeft.textContent = formatCurrency(Math.min(value1, value2) * max / 100);
                valueRight.textContent = formatCurrency(Math.max(value1, value2) * max / 100);
            }

            // Function to handle dragging
            function onDrag(event, handle) {
                const sliderRect = slider.getBoundingClientRect();
                const newLeft = Math.min(Math.max(0, event.clientX - sliderRect.left), sliderRect.width);
                handle.style.left = (newLeft / sliderRect.width) * 100 + '%';
                updateTrack();
            }

            function onDragEnd() {
                document.removeEventListener('mousemove', onMouseMove);
                document.removeEventListener('mouseup', onMouseUp);
            }

            function onMouseMove(event) {
                onDrag(event, draggingHandle);
            }

            function onMouseUp(event) {
                onDrag(event, draggingHandle);
                onDragEnd();
            }

            let draggingHandle;

            handle1.addEventListener('mousedown', function(event) {
                draggingHandle = handle1;
                document.addEventListener('mousemove', onMouseMove);
                document.addEventListener('mouseup', onMouseUp);
            });

            handle2.addEventListener('mousedown', function(event) {
                draggingHandle = handle2;
                document.addEventListener('mousemove', onMouseMove);
                document.addEventListener('mouseup', onMouseUp);
            });

            // Set initial positions and update track
            handle1.style.left = '0%';
            handle2.style.left = '100%';
            updateTrack();
        });
    </script>

    {{-- JS điểm đón --}}
    <script>
        $(document).ready(function() {
            const switchers = $('.custom-tree-switcher');
            const checkboxes = $('.custom-tree-checkbox');

            switchers.on('click', function() {
                const node = $(this).closest('.custom-tree-node');
                node.toggleClass('custom-tree-node_open');
            });

            checkboxes.on('click', function() {
                $(this).toggleClass('checked');
            });
        });
    </script>

    {{-- JS điểm trả --}}
    <script>
        $(document).ready(function() {
            $('.custom-tree-switcher').on('click', function() {
                $(this).toggleClass('custom-tree-switcher_close custom-tree-switcher_open');
            });

            $('.custom-tree-checkbox').on('click', function() {
                $(this).toggleClass('checked');
            });

            $('.custom-tree-title').on('click', function() {
                $(this).parent().find('.custom-tree-switcher').toggleClass(
                    'custom-tree-switcher_close custom-tree-switcher_open');
            });
        });
    </script>

    {{-- JS tiêu chí --}}
    <script>
        $(document).ready(function() {
            $('.checkbox-group-n .ant-checkbox-n').on('click', function() {
                const checkboxInput = $(this).find('.ant-checkbox-input-n');
                checkboxInput.prop('checked', !checkboxInput.prop('checked'));
                $(this).find('.ant-checkbox-inner-n').toggleClass('checked');
            });
        });
    </script>

    {{-- JS vị trí ghế --}}
    <script>
        $(document).ready(function() {
            // Handle quantity increase/decrease
            $('.increase-n').on('click', function() {
                let $valueElement = $(this).siblings('.quantity-value-n').find('.quantity-value-text-n');
                let currentValue = parseInt($valueElement.text());
                $valueElement.text(currentValue + 1);
                $(this).siblings('.decrease-n').removeAttr('disabled');
            });

            $('.decrease-n').on('click', function() {
                let $valueElement = $(this).siblings('.quantity-value-n').find('.quantity-value-text-n');
                let currentValue = parseInt($valueElement.text());
                if (currentValue > 1) {
                    $valueElement.text(currentValue - 1);
                }
                if (parseInt($valueElement.text()) === 1) {
                    $(this).attr('disabled', 'disabled');
                }
            });

            // Handle checkbox state
            $('.ant-checkbox-input-n').on('change', function() {
                $(this).siblings('.ant-checkbox-inner-n').toggleClass('checked-n', this.checked);
            });
        });
    </script>

    {{-- JS loại xe --}}
    <script>
        $(document).ready(function() {
            $('.ant-checkbox-input-n').on('change', function() {
                $(this).siblings('.ant-checkbox-inner-n').toggleClass('checked-n', this.checked);
            });
        });
    </script>

    {{-- JS loại ghế --}}
    <script>
        $(document).ready(function() {
            $('.ant-checkbox-input-b').on('change', function() {
                $(this).siblings('.ant-checkbox-inner-b').toggleClass('checked-b', this.checked);
            });
        });
    </script>
    <script>
        $('.list-img-review').magnificPopup({
            delegate: 'img', // chọn các thẻ <img> thay vì <a>
            type: 'image',
            gallery: {
                enabled: true
            },
            image: {
                titleSrc: 'alt'
            },
            callbacks: {
                elementParse: function(item) {
                    // Function để lấy src của thẻ img
                    item.src = item.el.attr('src');
                }
            }
        });

        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endsection
