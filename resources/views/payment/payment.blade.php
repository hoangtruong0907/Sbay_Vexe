@extends('layouts.app')

@section('title', 'Payment Method')

@section('styles')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
<link rel="stylesheet" href="{{ asset('css/trip-info.css') }}">
@endsection

@section('content')
<div class="container mt-5">
    <div class="countdown-timer mb-4">
        <div>
            Thời gian thanh toán còn lại: <span id="timer">10:00</span>
        </div>
        <div class="payment-text">
            <a href="#" class="text-decoration-none text-primary-1" data-bs-toggle="modal"
                data-bs-target="#infoModal">Chi tiết</a>
        </div>
    </div>
</div>
<div class="modal" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header-1">
                <h5 class="modal-title-1" id="infoModalLabel">Chi tiết chuyến đi</h5>
                <a href="#" class="close-link-1" data-bs-dismiss="modal" aria-label="Close">Đóng</a>

            </div>
            <div class="modal-body">
                <div class="trip-info-card">
                    <div class="trip-header-container">
                        <h4 class="trip-header-title">Thông tin chuyến đi</h4>

                    </div>

                    <div class="trip-summary-container">
                        <div class="trip-summary-details">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/bus_blue_24dp.svg" alt="Bus Icon"
                                class="trip-icon">
                            <span class="trip-date">T3, 10/09/2024</span>
                            <div class="trip-passenger-info">
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/people_alt_black_24dp.svg"
                                    alt="People Icon" class="trip-icon">
                                <span class="trip-passenger-count">1</span>
                            </div>
                            <a href="#" class="text-decoration-none text-primary small view-details-link"
                                data-bs-toggle="offcanvas" data-bs-target="#tripDetailsOffcanvas"
                                aria-controls="tripDetailsOffcanvas">Xem chi tiết</a>
                        </div>
                    </div>

                    <div class="trip-detail-container">
                        <img src="https://static.vexere.com/production/images/1689135259785.jpeg" alt="Bus Image"
                            class="trip-bus-image">
                        <div class="trip-company-details">
                            <h6 class="trip-company-name">Tân Kim Chi</h6>
                            <small class="trip-bus-type">Limousine giường phòng 24 chỗ (CABIN ĐÔI)</small>
                        </div>
                    </div>

                    <div class="route-info-container">
                        <div class="route-info-item">
                            <div class="route-info-details">
                                <span class="route-time">18:45</span>
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                    alt="Pickup Icon" class="route-icon">
                                <div>
                                    <p class="route-location-name">VP Đà Nẵng</p>
                                    <p class="route-location-address">46 Nam Trần, Phường Hòa Minh, Liên Chiểu, Đà Nẵng
                                    </p>
                                </div>
                            </div>
                            <a href="#" class="modify-route-link text-primary" data-bs-toggle="offcanvas"
                                data-bs-target="#modifyLocationOffcanvas" aria-controls="modifyLocationOffcanvas">Thay
                                đổi</a>
                        </div>
                        <div class="route-info-item">
                            <div class="route-info-details">
                                <span class="route-time">06:45</span>
                                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/dropoff_semantic_negative_12dp.svg"
                                    alt="Dropoff Icon" class="route-icon">
                                <div>
                                    <p class="route-location-name">34 Trần Khát Chân</p>
                                    <p class="route-location-address">34 Trần Khát Chân, Phường Thanh Nhàn, Hai Bà
                                        Trưng, Hà Nội</p>
                                </div>
                            </div>
                            <a href="#" class="modify-route-link text-primary" data-bs-toggle="offcanvas"
                                data-bs-target="#modifyLocationOffcanvas" aria-controls="modifyLocationOffcanvas">Thay
                                đổi</a>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="tripDetailsOffcanvas"
                    aria-labelledby="tripDetailsOffcanvasLabel">
                    <div class="offcanvas-header-container">
                        <div class="offcanvas-close-button" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="material-icons-round">arrow_back</i>
                        </div>
                        <div class="offcanvas-header-title">
                            <p class="offcanvas-company-name">Queen Cafe (Cam Ranh)</p>
                            <p class="offcanvas-trip-time">15:00 • T4, 11/09/2024</p>
                        </div>
                    </div>

                    <div class="offcanvas-body-container">
                        <div class="trip-detail-info">
                            <div class="trip-detail-row">
                                <p class="detail-label-text">Tuyến</p>
                                <span class="trip-detail-value">Huế - Đà Lạt</span>
                            </div>
                            <div class="trip-detail-row">
                                <p class="detail-label-text">Nhà xe</p>
                                <span class="trip-detail-value">Queen Cafe (Cam Ranh)</span>
                            </div>
                            <div class="trip-detail-row">
                                <p class="detail-label-text">Chuyến</p>
                                <span class="trip-detail-value">13:00 • T4, 11/09/2024</span>
                            </div>
                            <div class="trip-detail-row">
                                <p class="detail-label-text">Loại xe</p>
                                <span class="trip-detail-value">Limousine 34 chỗ</span>
                            </div>
                            <div class="trip-detail-row">
                                <p class="detail-label-text">Số lượng</p>
                                <span class="trip-detail-value">1 vé</span>
                            </div>
                            <div class="seat-code-container w-100">
                                <div class="toggle-seat-info d-flex justify-content-between w-100 pointer"
                                    id="toggleSeatInfo">
                                    <p class="seat-info-label fw-normal text-nowrap mb-0">Mã ghế/ giường</p>
                                    <div class="seat-info-toggle d-flex align-items-center gap-sm-1 pointer">
                                        <p class="seat-info-text fw-bold mb-0">08,07</p>
                                        <img id="seatToggleIcon" class="toggle-icon ls-is-cached lazyloaded icon-size"
                                            data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                            src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                            alt="icon-expand-less">
                                    </div>
                                </div>

                                <div class="seat-info-content d-flex flex-column gap-2 mt-2 overflow-auto d-none"
                                    id="seatInfoContent">
                                    <div class="seat-info-item d-flex justify-content-end">
                                        <p class="seat-info fw-normal mb-0">
                                            Ghế đầu:
                                            <span class="seat-number">08</span>
                                        </p>
                                    </div>
                                    <div class="seat-info-item d-flex justify-content-end">
                                        <p class="seat-info fw-normal mb-0">
                                            Ghế đầu:
                                            <span class="seat-number">08</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-evenly overflow-auto text-center py-1"
                                    id="contentSectionn">
                                    <table class="ms-3 d-inline-block">
                                        <thead>
                                            <tr>
                                                <th colspan="5" class="table-header"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="1">
                                                <td id="vxr-1-1">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div class="Seat__SeatImageContainer-sc-5i6bij-1 iGEkJj">
                                                            <span class="seat-color seat-color-custom">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.305 24h-.61c-.035-.004-.07-.01-.105-.012a11.783 11.783 0 0 1-2.117-.261 12.027 12.027 0 0 1-6.958-4.394A11.933 11.933 0 0 1 .027 12.78L0 12.411v-.822c.005-.042.013-.084.014-.127a11.845 11.845 0 0 1 1.102-4.508 12.007 12.007 0 0 1 2.847-3.852A11.935 11.935 0 0 1 11.728.003c.947-.022 1.883.07 2.81.27 1.22.265 2.369.71 3.447 1.335a11.991 11.991 0 0 1 3.579 3.164 11.876 11.876 0 0 1 2.073 4.317c.178.712.292 1.434.334 2.168.008.146.02.292.029.439v.609c-.004.03-.011.06-.012.089a11.81 11.81 0 0 1-1.05 4.521 12.02 12.02 0 0 1-1.92 2.979 12.046 12.046 0 0 1-6.395 3.812c-.616.139-1.24.23-1.872.265-.149.008-.297.02-.446.03zm8.799-13.416c-.527-3.976-4.078-7.808-9.1-7.811-5.02-.003-8.583 3.823-9.11 7.809h.09c.64-.035 1.278-.092 1.912-.195.815-.131 1.614-.326 2.378-.639.625-.255 1.239-.54 1.855-.816.82-.368 1.673-.593 2.575-.62a7.123 7.123 0 0 1 1.947.187c.585.146 1.136.382 1.68.634.57.264 1.14.526 1.733.736 1.2.424 2.442.62 3.706.7.11.006.222.01.334.015zm-10.95 10.471v-.094c0-1.437 0-2.873-.002-4.31 0-.141-.011-.284-.035-.423a2.787 2.787 0 0 0-.775-1.495c-.564-.582-1.244-.896-2.067-.892-1.414.007-2.827.002-4.24.002h-.09a9.153 9.153 0 0 0 3.125 5.256 9.15 9.15 0 0 0 4.083 1.956zm3.689.001c1.738-.36 3.25-1.137 4.528-2.355 1.4-1.334 2.287-2.956 2.685-4.855l-.077-.003h-4.362c-.237 0-.47.038-.695.112-.667.22-1.188.635-1.588 1.206a2.673 2.673 0 0 0-.494 1.59c.008 1.4.003 2.801.003 4.202v.103zM12.05 14.22c1.215-.035 2.204-1.083 2.165-2.275-.039-1.223-1.095-2.215-2.29-2.166-1.211.05-2.2 1.108-2.15 2.302.051 1.191 1.108 2.186 2.275 2.139z"
                                                                        fill="#858585">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="vxr-1-2">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#ae70ff"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 qIAFz">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="vxr-1-3">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#ae70ff"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 qIAFz">
                                                            <span class="seat-color-selected"><svg width="40"
                                                                    height="32" viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="2">
                                                <td id="vxr-2-1">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#fba442"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="vxr-2-2">
                                                    <div> </div>
                                                </td>
                                                <td id="vxr-2-3">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#fba442"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="3">
                                                <td id="vxr-3-1">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#fba442"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="vxr-3-2">
                                                    <div> </div>
                                                </td>
                                                <td id="vxr-3-3">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#fba442"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="4">
                                                <td id="vxr-4-1">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#fba442"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="vxr-4-2">
                                                    <div> </div>
                                                </td>
                                                <td id="vxr-4-3">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#fba442"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="5">
                                                <td id="vxr-5-1">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#6bd600"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="vxr-5-2">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#6bd600"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm">
                                                            <span class="seat-color"><svg width="40" height="32"
                                                                    viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="vxr-5-3">
                                                    <div class="Seat__SeatContainer-sc-5i6bij-0 hWCxok">
                                                        <div color="#6bd600"
                                                            class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm">
                                                            <span class="seat-color-selected"><svg width="40"
                                                                    height="32" viewBox="0 0 40 32" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="8.75" y="2.75" width="22.5" height="26.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="10.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 10.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="35.25" y="11.75" width="14.5" height="5.5"
                                                                        rx="2.25" transform="rotate(90 35.25 11.75)"
                                                                        fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                                        stroke-linejoin="round">
                                                                    </rect>
                                                                    <rect x="8.75" y="22.75" width="22.5" height="6.5"
                                                                        rx="2.25" fill="#FFF" stroke="#B8B8B8"
                                                                        stroke-width="1.5" stroke-linejoin="round">
                                                                    </rect>
                                                                    <path class="icon-selected"
                                                                        d="M20 6.333A6.67 6.67 0 0 0 13.334 13 6.67 6.67 0 0 0 20 19.667 6.67 6.67 0 0 0 26.667 13 6.669 6.669 0 0 0 20 6.333zm-1.333 10L15.333 13l.94-.94 2.394 2.387 5.06-5.06.94.946-6 6z"
                                                                        fill="transparent"></path>
                                                                    <path class="icon-disabled"
                                                                        d="M24.96 9.46l-1.42-1.42L20 11.59l-3.54-3.55-1.42 1.42L18.59 13l-3.55 3.54 1.42 1.42L20 14.41l3.54 3.55 1.42-1.42L21.41 13l3.55-3.54z"
                                                                        fill="transparent"></path>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="temporary-calculation-container w-100">
                                <div class="calculation-summary d-flex justify-content-between w-100 pointer"
                                    id="toggleTotalAmount">
                                    <p class="calculation-label fw-normal text-nowrap mb-0">Tạm tính</p>
                                    <div class="amount-info d-flex align-items-center gap-sm-1">
                                        <p class="total-amount-2 fw-bold mb-0">470.000đ</p>
                                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                            alt="icon-expand-less" width="20" height="20">
                                    </div>
                                </div>

                                <div class="total-amount-details pt-2 d-none" id="totalAmountDetails">
                                    <div class="amount-detail-row d-flex justify-content-between">
                                        <p class="price-label color--darkness">Giá vé</p>
                                        <div class="price-details d-flex flex-column">
                                            <div class="text-end">
                                                <p class="price-item mb-0 fw-medium">230.000đ x 1</p>
                                                <p class="seat-code mb-0">Mã ghế/giường: 06</p>
                                            </div>
                                            <div class="text-end">
                                                <p class="price-item mb-0 fw-medium">240.000đ x 1</p>
                                                <p class="seat-code mb-0">Mã ghế/giường: 07</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="amount-detail-row d-flex justify-content-between mt-1">
                                        <p class="price-label color--darkness">Bảo hiểm chuyến đi</p>
                                        <div class="insurance-price text-end">
                                            <p class="insurance-cost mb-0">60.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pickup-dropoff-info">
                            <div class="info-group d-flex align-items-center justify-content-between">
                                <div class="pickup-info d-flex align-items-center">
                                    <img class="pickup-icon"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                        alt="">
                                    <h6 class="pickup-title point mb-0 ms-2">Điểm đón</h6>
                                </div>
                                <a href="#" class="change-pickup-link text-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#modifyLocationOffcanvas"
                                    aria-controls="modifyLocationOffcanvas">Thay đổi</a>
                            </div>

                            <p class="pickup-location">VP Đà Nẵng</p>
                            <p class="pickup-address text-secondary">16 Đường 3/2, Thuận Phước, Hải Châu, Đà Nẵng,
                                Phường Thuận Phước, Hải
                                Châu, Đà Nẵng</p>
                            <p class="pickup-time text-secondary">Dự kiến đón lúc: 15:00 11/09/2024</p>

                            <div class="info-group d-flex align-items-center justify-content-between">
                                <div class="dropoff-info d-flex align-items-center">
                                    <img class="dropoff-icon"
                                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/dropoff_semantic_negative_12dp.svg"
                                        alt="">
                                    <h6 class="dropoff-title point mb-0 ms-2">Điểm trả</h6>
                                </div>
                                <a href="#" class="change-dropoff-link text-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#modifyLocationOffcanvas"
                                    aria-controls="modifyLocationOffcanvas">Thay đổi</a>
                            </div>
                            <p class="dropoff-location">VP Hội An</p>
                            <p class="dropoff-address text-secondary">23 Nguyễn Tất Thành, P. Cẩm Phô, Hội An, Phường
                                Cẩm Phô, Hội An, Quảng
                                Nam</p>
                            <p class="dropoff-time text-secondary">Dự kiến trả lúc: 17:00 11/09/2024</p>
                        </div>
                    </div>

                    <div class="offcanvas-footer p-3">
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                            class="close-offcanvas-button btn btn-primary w-100">
                            <span>Đóng</span>
                        </button>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="modifyLocationOffcanvas"
                    aria-labelledby="modifyLocationOffcanvasLabel">
                    <div class="offcanvas-header d-flex flex-row align-items-center bg-primary">
                        <div class="offcanvas-close-button text-white" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="material-icons-round">arrow_back</i>
                        </div>
                        <div class="header-content d-flex ms-3">
                            <p class="offcanvas-title mb-0 text-white fw-bold">Thay đổi điểm trả chiều đi</p>
                        </div>
                    </div>
                    <div class="sorting-section position-sticky d-flex flex-column w-100">
                        <div class="sorting-header d-flex flex-row justify-content-between">
                            <p class="sorting-label">Sắp xếp theo</p>
                            <p class="sorting-label">Khoảng cách từ điểm đón đến</p>
                        </div>
                        <div class="sorting-controls d-flex flex-row justify-content-between mt-1">
                            <button type="button" class="sort-option-button" id="sortByEarliest">
                                <p class="sort-option-text fw-bold mb-0">Sớm nhất</p>
                                <i class="material-icons-outlined sort-icon">arrow_drop_down</i>
                            </button>
                            <button type="button" class="sort-option-button" id="changeLocation">
                                <p class="sort-option-text fw-bold mb-0">Vị trí của bạn</p>
                                <p class="sort-location-change-link fw-bold mb-0">Thay đổi</p>
                            </button>
                        </div>
                    </div>
                    <div class="location-options-content d-flex flex-column bg-white">
                        <label class="location-option-item">
                            <input class="location-radio-input form-check-input" type="radio" name="flexRadioDefault"
                                value="Location1" checked />
                            <div class="location-option-info">
                                <div class="location-details">
                                    <div class="location-description">
                                        <p class="location-time">18:00</p>
                                        <p class="location-name">VP Đà Nẵng</p>
                                        <p class="location-address-detail">16 Đường 3/2, Thuận Phước, Hải Châu, Đà Nẵng,
                                            Phường Thuận
                                            Phước, Hải Châu, Đà Nẵng</p>
                                        <p class="location-price text-danger">220.000đ / nhóm từ 1-3 khách (trả tại
                                            website Vexere)</p>
                                    </div>
                                    <div class="location-distance">
                                        <button type="button" class="view-map-button d-flex align-items-center"
                                            id="viewMapButton">
                                            <i class="material-icons-round text-primary me-1">place</i>
                                            <p class="map-view-text mb-0 text-primary">Bản đồ</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div
                        class="report-section border-top border-secondary bg-white position-absolute start-0 bottom-0 w-100 p-3">
                        <div class="report-header d-flex justify-content-between align-items-center mb-2">
                            <div class="report-text">Sai hoặc thiếu thông tin?</div>
                            <p class="report-link text-primary fw-bold text-decoration-underline cursor-pointer"
                                id="reportIssue">Báo cáo với chúng tôi</p>
                        </div>
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                            class="update-button btn btn-warning text-black fw-bold d-flex align-items-center justify-content-center w-100 rounded-pill py-2">
                            <span>Cập nhật</span>
                        </button>
                    </div>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="sortBySidebar"
                        aria-labelledby="sortBySidebarLabel"
                        style="border-radius: 16px 16px 0 0;height: auto; width: 560px; right: 0; left: auto;">
                        <div class="sort-by-header d-flex w-100 justify-content-center">
                            <h5 class="sort-by-title offcanvas-title mb-0" id="sortBySidebarLabel">Sắp xếp theo</h5>
                        </div>
                    </div>
                </div>
                <!-- Thong tin lien he -->
                <div class="card">
                    <div class="card-body-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="info-info">Thông tin liên hệ</h4>
                            <a href="#" class="custom-text-primary custom-edit-link" data-bs-toggle="offcanvas"
                                data-bs-target="#newContactModal">
                                Chỉnh sửa liên hệ
                            </a>

                        </div>
                        <p class="unique-class"><strong>Hành khách:</strong> PHỤNG</p>
                        <p class="unique-class"><strong>Số điện thoại:</strong> 0987654568</p>
                        <p class="unique-class"><strong>Email:</strong> tuan@gmail.com</p>

                    </div>
                </div>

                <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1" id="newContactModal"
                    aria-labelledby="contactModalLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="contactModalLabel">Chỉnh sửa thông tin liên hệ</h5>
                        <a href="#" class="close-link-2" data-bs-dismiss="modal" aria-label="Close">Đóng</a>
                    </div>
                    <div class="offcanvas-body">
                        <form>
                            <div class="contact-112">
                                <label for="contactName" class="form-label">Họ tên *</label>
                                <input type="text" class="form-control" id="contactName" value="PHỤNG">
                            </div>
                            <div class="ontact-112">
                                <label for="contactPhone" class="form-label">Số điện thoại *</label>
                                <div class="input-group">
                                    <span class="input-group-text">VN +84</span>
                                    <input type="text" class="form-control" id="contactPhone" value="0987654568">
                                </div>
                            </div>
                            <div class="ontact-112">
                                <label for="contactEmail" class="form-label">Email để nhận thông tin đặt chỗ *</label>
                                <input type="email" class="form-control" id="contactEmail" value="tuan@gmail.com">
                            </div>
                            <div class="alert alert-success">
                                <i class="material-icons-round">check_circle</i> Số điện thoại và email được sử dụng để
                                gửi thông tin đơn hàng và liên hệ khi cần thiết.
                            </div>
                        </form>
                    </div>
                    <div class="offcanvas-footer">
                        <button type="button" class="btn btn-warning text-black fw-bold w-100"
                            data-bs-dismiss="offcanvas">
                            Cập nhật
                        </button>
                    </div>
                </div>

                <!-- Thêm nội dung của bạn vào đây -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tiếp tục thanh toán</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Payment Method Section -->
    <div class="col-md-8">
        <div class="payment-methods">
            <h4 class="mb-4">Phương thức thanh toán</h4>
            <!-- QR chuyển khoản/ Ví điện tử -->
            <div class="form-check mb-2">

                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod1"
                    onclick="toggleQRDetails()">
                <label class="form-check-label" for="paymentMethod1">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/transfer_va.svg" alt="Icon"
                        class="payment-icon"> QR chuyển khoản/ Ví
                    điện tử
                </label>
                <p class="text-muted">Không cần nhập thông tin. Xác nhận thanh toán tức thì, nhanh chóng và ít sai
                    sót.</p>
                <div class="qr-details" id="qr-details" style="display: none;">
                    <h5>Chuyển khoản bằng mã QR, tự động điền thông tin</h5>
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="d-flex justify-content-between">
                                <div class="text-center">
                                    <i class="fa-solid fa-phone"></i>
                                    <p>Mở ứng dụng ngân hàng hoặc Ví điện tử</p>
                                </div>
                                <div class="text-center">
                                    <i class="fas fa-qrcode"></i>
                                    <p>Dùng tính năng Mã QR quét hình bên</p>
                                </div>
                                <div class="text-center">
                                    <i class="fa-solid fa-check-circle"></i>
                                    <p>Hoàn tất thanh toán, chờ Vexere xác nhận</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <p>Quét mã bên dưới</p>
                            <img src="https://via.placeholder.com/150" alt="QR Code">
                            <p class="mt-2">VIETQR | NAPAS</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-bold">Không thể thanh toán bằng mã QR?</p>
                            <p class="show-more-bank" onclick="toggleBankDetails()">Tự nhập thông tin</p>

                        </div>
                        <div class="bank-details expandable" id="bank-details">
                            <p><strong>Ngân hàng:</strong> VIETINBANK</p>
                            <p><strong>Số tài khoản:</strong> 111V78872192
                                <i class="bi bi-clipboard copy-icon" onclick="copyToClipboard('111V78872192')"
                                    title="Sao chép"></i>
                            </p>
                            <p><strong>Chủ tài khoản:</strong> VEXERE</p>
                            <p><strong>Tổng tiền:</strong> 700.000đ
                                <i class="bi bi-clipboard copy-icon" onclick="copyToClipboard('700.000đ')"
                                    title="Sao chép"></i>
                            </p>
                            <p class="text-muted">Hệ thống sẽ tự động xác thực giao dịch</p>
                            <p class="text-muted">Quét mã QR hỗ trợ nhập nhanh thông tin, hạn chế sai sót trong quá
                                trình chuyển khoản. Nếu bạn vẫn muốn tự nhập, vui lòng chuyển khoản nhanh 24/7 và
                                nhập chính xác thông tin bên trên.</p>
                        </div>
                    </div>
                    <div class="bank-support">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-bold mb-1">Hỗ trợ nhiều ví điện tử & 42 ngân hàng</p>
                            <p class="show-more-bank toggle-support" onclick="toggleSupport()">Xem tất cả</p>

                        </div>
                        <div class="support-info expandable" id="support-info">

                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank_wallet/Wallet-0.png"
                                alt="MoMo">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank_wallet/Wallet-7.png"
                                alt="viettel">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank_wallet/Wallet-6.png"
                                alt="cake">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank_wallet/Bank-1.png" alt="ACB">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank_wallet/Bank-2.png"
                                alt="Bank 1">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank_wallet/Bank-4.png"
                                alt="Bank 2">
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank_wallet/Bank-38.png"
                                alt="Bank 3">
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Phần Bảo Hiểm -->
            <div id="insurance-section" class="insurance-section">
                <div id="insurance-info" class="insurance-info" style="display: flex;">
                    <span id="insurance-status">Vé có bảo hiểm không áp dụng thanh toán tại nhà xe</span>
                    <a href="#" id="add-insurance" class="add-insurance">Thêm bảo hiểm</a>
                </div>
                <div id="insurance-details" class="insurance-details" style="display: none;">
                    <span><i class="bi bi-info-circle"></i> Vé có bảo hiểm không áp dụng thanh toán tại nhà
                        xe</span>
                    <a href="#" id="remove-insurance" class="remove-insurance">Hủy bảo hiểm</a>
                </div>
            </div>
            <div class="alert alert-warning-custom">
                <i class="bi bi-exclamation-triangle-fill"></i> Giá khuyến mãi không áp dụng khi thanh toán tại nhà
                xe hoặc khi lên xe. Bạn hãy chọn phương thức thanh toán khác để được mua vé với giá ưu đãi!
            </div>

            <!-- Thanh toán khi lên xe -->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod2"
                    onclick="showPaymentDetails()">
                <label class="form-check-label" for="paymentMethod2">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/bus_station.svg" alt="Icon"
                        class="payment-icon"> Thanh toán khi lên xe
                </label>
                <p class="text-muted">Bạn có thể thanh toán cho tài xế khi lên xe</p>
            </div>

            <!-- Hiển thị chi tiết thanh toán khi chọn "Thanh toán khi lên xe" -->
            <div id="paymentDetails" class="payment-details">
                <h5>Hướng dẫn thanh toán</h5>
                <p>Bạn hãy nói rằng đã đặt chỗ qua Vexere và thanh toán <strong>900.000đ</strong> cho tài xế khi lên
                    xe.</p>
                <h6>Lưu ý quan trọng</h6>
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-triangle-fill"></i> Hãy hủy vé khi không còn nhu cầu di chuyển.
                    Vexere sẽ yêu cầu bạn thanh toán trước cho những lần sau nếu bạn đặt vé nhưng không đi hoặc hủy
                    vé quá nhiều lần.
                </div>
            </div>

            <hr>

            <!-- Thẻ thanh toán quốc tế -->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod3"
                    onclick="showCardPayment()">
                <label class="form-check-label" for="paymentMethod3">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/credit_card.svg" alt="Icon"
                        class="payment-icon"> Thẻ thanh toán quốc
                    tế
                </label>
                <p class="text-muted">Thẻ Visa, MasterCard, JCB...</p>
                <p class="discount-text">Nhập mã VXRHDS50 hoặc VXRHDS100 - Giảm 50K cho đơn từ 250K và 100K cho đơn
                    từ 450K khi thanh toán bằng thẻ tín dụng HDSAISON -</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Điều kiện sử dụng</a>
                <div class="card-payment-section expandable" id="card-payment-details">
                    <div class="alert alert-success d-flex align-items-center">
                        <i class="bi bi-shield-check me-2"></i>
                        Thẻ được lưu bởi đối tác đạt chuẩn quốc tế PCI DSS cấp độ cao nhất về Bảo mật thanh toán.
                        Một khoản phí nhỏ sẽ được khấu trừ để xác minh thông tin thẻ.
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Số thẻ tín dụng/ghi nợ">
                            <input type="text" class="form-control" placeholder="Tên chủ thẻ">
                            <div class="d-flex">
                                <input type="text" class="form-control me-2" placeholder="Ngày hết hạn">
                                <input type="text" class="form-control" placeholder="Mã bảo mật">
                            </div>
                            <button class="btn btn-primary confirm-button w-100">Xác nhận</button>
                        </div>
                        <div class="col-md-4">
                            <div class="card-icon">
                                <img src="https://via.placeholder.com/100x60" alt="Credit Card Icon">
                                <div>
                                    <strong>1234 5678 1234 5678</strong><br>
                                    NGUYEN VAN A<br>
                                    10/25
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Điều Kiện Sử Dụng -->
            <div id="termsModal" class="modal fade" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="termsModalLabel">Chương trình ưu đãi thẻ tín dụng quốc tế
                                HDSAISON</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Nhập mã VXRHDS50 tại website/ứng dụng Vexere - Nhận ưu đãi 50K cho giao dịch đặt xe
                                khách có giá trị từ 250K trở lên.</p>
                            <p>Nhập mã VXRHDS100 tại website/ứng dụng Vexere - Nhận ưu đãi 100K cho đơn hàng có giá
                                trị từ 450K trở lên.</p>
                            <ul>
                                <li>Thời gian áp dụng: Từ ngày 18/7 đến 31/10/2024.</li>
                                <li>Điều kiện áp dụng: Áp dụng khi thanh toán đơn hàng xe khách bằng Thẻ tín dụng
                                    quốc tế HDSAISON có đầu BIN 483977 trên website/ứng dụng Vexere.</li>
                                <li>Số lần sử dụng: Mỗi mã được sử dụng tối đa 6 lần/khách hàng trong suốt thời gian
                                    diễn ra chương trình.</li>
                                <li>Tuyến đường áp dụng: Tất cả các tuyến đường nhà xe có mở bán online tại
                                    website/ứng dụng Vexere.</li>
                                <li>Số lượng mã ưu đãi có giới hạn, chương trình sẽ kết thúc khi hết ngân sách
                                    khuyến mãi hoặc hết mã giảm giá mà không thông báo trước.</li>
                            </ul>
                            <p>Chọn hình thức thanh toán bằng Thẻ thanh toán Quốc tế tại website/app Vexere. Nhập
                                thông tin Số thẻ tín dụng, Tên chủ thẻ, Ngày hết hạn, Mã bảo mật sau đó bấm Xác
                                nhận. Tiếp tục nhập mã VXRHDS50 hoặc VXRHDS100 tại ô Mã giảm giá để nhận ưu đãi.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã hiểu</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Ví ShopeePay -->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod4"
                    onclick="showWalletDetails('shopeePayDetails')">
                <label class="form-check-label" for="paymentMethod4">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/airpay.svg" alt="Icon"
                        class="payment-icon"> Ví ShopeePay
                </label>
                <p>Điện thoại của bạn phải được cài đặt ứng dụng ShopeePay</p>
                <p class="discount-text">Giảm 10K khi nhập mã SPPVEXE09 cho đơn từ 100K </p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModalShopeePay">Điều kiện sử dụng</a>
                <div class="wallet-details expandable" id="shopeePayDetails">
                    <h5>Hướng dẫn thanh toán</h5>
                    <ol>
                        <li>Bạn sẽ được chuyển đến ứng dụng ShopeePay</li>
                        <li>Nhập thông tin thẻ thanh toán mới hoặc chọn thanh toán qua ví ShopeePay/thẻ đã liên kết
                            với ví ShopeePay</li>
                        <li>Chọn "Thanh toán" để tiến hành thanh toán vé</li>
                    </ol>
                </div>
            </div>
            <hr>
            <div id="termsModalShopeePay" class="modal fade" tabindex="-1" aria-labelledby="termsModalShopeePayLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="termsModalShopeePayLabel">Chương trình ưu đãi ShopeePay</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Nhập mã SPPVEXE09 tại ví ShopeePay - Giảm 10K cho đơn hàng xe khách từ 100K trở lên.
                            </p>
                            <ul>
                                <li>Thời gian khuyến mãi: Từ 1/9 đến hết 30/9/2024.</li>
                                <li>Số lần sử dụng: 1 user/2 lần/tháng.</li>
                                <li>Áp dụng cho các đơn hàng vé xe từ 100K.</li>
                                <li>Số lượng ưu đãi có giới hạn. Khi mã ưu đãi không còn được hiển thị là đã hết
                                    lượt sử dụng. Chương trình sẽ kết thúc khi hết mã.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã hiểu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Thanh toán VNPAY - QR -->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod5"
                    onclick="showWalletDetails('vnpayDetails')">
                <label class="form-check-label" for="paymentMethod5">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/vn_pay.svg" alt="Icon"
                        class="payment-icon"> Thanh toán VNPAY - QR
                </label>
                <p>Thiết bị cần cài đặt Ứng dụng ngân hàng (Mobile Banking) hoặc Ví VNPAY</p>
                <p class="discount-text">Giảm 10K và giảm 30K khi nhập mã VNPAYVXR10 lần lượt cho đơn từ 250K và
                    900K </p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModalVNPAY">Điều kiện sử dụng</a>
                <div class="wallet-details expandable" id="vnpayDetails">
                    <h5>Hướng dẫn thanh toán</h5>
                    <ol>
                        <li>Đăng nhập Ứng dụng ngân hàng hoặc Ví VNPAY</li>
                        <li>Quét mã VNPAY-QR để thanh toán</li>
                        <li>Nhập số tiền thanh toán & mã giảm giá (nếu có), xác minh giao dịch để đặt vé</li>
                    </ol>
                </div>
            </div>
            <hr>
            <div id="termsModalVNPAY" class="modal fade" tabindex="-1" aria-labelledby="termsModalVNPAYLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="termsModalVNPAYLabel">Chương trình ưu đãi VNPAY</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Giảm 10K khi nhập mã VNPAYVXR10 cho đơn từ 250K và 30K khi nhập mã cho đơn từ 900K.
                            </p>
                            <ul>
                                <li>Thời gian ưu đãi: Từ 13/8 đến hết 30/9/2024.</li>
                                <li>Áp dụng cho các khách hàng khi đặt vé xe khách tại website/ứng dụng Vexere.</li>
                                <li>Mỗi khách hàng được khuyến mại 01 lần/tháng.</li>
                                <li>Không áp dụng tách hóa đơn dưới mọi hình thức hoặc hoàn tiền một phần với các
                                    giao dịch đã hưởng khuyến mại.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã hiểu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ví Zalopay -->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod6"
                    onclick="showWalletDetails('zalopayDetails')">
                <label class="form-check-label" for="paymentMethod6">
                    <img src="data:image/jpeg;base64,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"
                        alt="Icon" class="payment-icon"> Ví Zalopay
                </label>
                <p>Điện thoại của bạn phải được cài đặt ứng dụng Zalopay</p>
                <p class="discount-text">Giảm 15K và giảm 35K khi nhập mã ZLPVXR lần lượt cho đơn từ 400K và 1.000K
                </p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModalZaloPay">Điều kiện sử dụng</a>
                <div class="wallet-details expandable" id="zalopayDetails">
                    <h5>Hướng dẫn thanh toán</h5>
                    <ol>
                        <li>Bạn sẽ được chuyển đến ứng dụng ZaloPay</li>
                        <li>Nhập thông tin thẻ thanh toán mới hoặc chọn thanh toán qua ví ZaloPay/thẻ đã liên kết
                            với ví ZaloPay</li>
                        <li>Chọn "Thanh toán" để tiến hành thanh toán vé.</li>
                    </ol>
                </div>
            </div>
            <hr>
            <div id="termsModalZaloPay" class="modal fade" tabindex="-1" aria-labelledby="termsModalZaloPayLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="termsModalZaloPayLabel">Chương trình ưu đãi ZaloPay</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Giảm 15K và giảm 35K khi nhập mã ZLPVXR cho đơn từ 400K và 1.000K.</p>
                            <ul>
                                <li>Thời gian áp dụng: Từ 2/8 đến hết 30/9/2024.</li>
                                <li>Áp dụng cho Mỗi khách hàng/Tài khoản ZaloPay (ZaloPay ID).</li>
                                <li>Không áp dụng hoàn tiền hoặc hủy đối với các giao dịch được hưởng khuyến mãi.
                                </li>
                                <li>ZaloPay hỗ trợ giải quyết các khiếu nại trong 3 ngày làm việc kể từ khi kết thúc
                                    chương trình.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã hiểu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ví MoMo -->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod7"
                    onclick="showWalletDetails('momoDetails')">
                <label class="form-check-label" for="paymentMethod7">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/momo.svg" alt="Icon"
                        class="payment-icon"> Ví MoMo
                </label>
                <p>Điện thoại của bạn phải được cài đặt ứng dụng MoMo</p>
                <p class="discount-text">Giảm 10K khi nhập mã VEXEMOMO cho đơn từ 400K </p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModalMoMo">Điều kiện sử dụng</a>
                <div class="wallet-details expandable" id="momoDetails">
                    <h5>Hướng dẫn thanh toán</h5>
                    <ol>
                        <li>Bạn sẽ được chuyển đến ứng dụng Momo</li>
                        <li>Nhập thông tin thẻ thanh toán mới hoặc chọn thanh toán qua ví Momo/thẻ đã liên kết với
                            ví Momo</li>
                        <li>Chọn "Thanh toán" để tiến thành thanh toán vé</li>
                    </ol>
                </div>
            </div>
            <hr>
            <div id="termsModalMoMo" class="modal fade" tabindex="-1" aria-labelledby="termsModalMoMoLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="termsModalMoMoLabel">Chương trình ưu đãi MoMo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Nhập mã VEXEMOMO tại ứng dụng MoMo - Giảm 10K cho đơn từ 400K.</p>
                            <ul>
                                <li>Thời gian khuyến mãi: 3/7 đến 30/9/2024.</li>
                                <li>Chương trình áp dụng cho khách hàng mới của MoMo khi mua vé trên ứng
                                    dụng/website Vexere.</li>
                                <li>Ưu đãi không áp dụng cộng gộp với các chương trình khuyến mãi khác.</li>
                                <li>Ưu đãi không được hoàn lại và không có giá trị quy đổi thành tiền mặt.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã hiểu</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Thanh toán qua Viettel Money -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod9"
                    onclick="showWalletDetails('viettelMoneyDetails')">
                <label class="form-check-label" for="paymentMethod9">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/viettel_pay.svg" alt="Icon"
                        class="payment-icon"> Thanh toán qua
                    Viettel Money
                </label>
                <p>Bạn cần có tài khoản Viettel Money hoặc có cài đặt ứng dụng Viettel Money</p>
                <div class="wallet-details expandable" id="viettelMoneyDetails">
                    <h5>Hướng dẫn thanh toán</h5>
                    <ol>
                        <li>Bạn sẽ được chuyển đến ứng dụng Viettel Money</li>
                        <li>Bạn có thể đăng nhập vào tài khoản Viettel Money hoặc mở ứng dụng Viettel Money để quét
                            mã QR thanh toán</li>
                    </ol>
                </div>
            </div>
            <hr>

            <!-- Tại cửa hàng tiện lợi hoặc siêu thị -->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod10"
                    onclick="showStorePaymentDetails()">
                <label class="form-check-label" for="paymentMethod10">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/local_convenience_store.svg" alt="Icon"
                        class="payment-icon"> Tại cửa hàng tiện lợi
                    hoặc siêu thị
                </label>
                <p>Bạn có thể thanh toán tại các cửa hàng tiện lợi, Viettel post hoặc siêu thị</p>
                <div class="wallet-details expandable" id="storePaymentDetails">
                    <h5>Hướng dẫn thanh toán</h5>
                    <ol>
                        <li>Bạn đến bưu cục Viettel Post bất kỳ hoặc một trong các cửa hàng tiện lợi dưới đây</li>
                    </ol>
                    <div class="store-payment-logos">

                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/httt_cash_pc_new.jpg" alt="..">
                    </div>
                    <p>2. Báo với nhân viên là bạn cần thanh toán vé xe đã đặt ở Vé xe rẻ và làm theo hướng dẫn của
                        họ</p>
                    <p><strong>Lưu ý:</strong> Vé/hợp đồng của bạn chỉ được giữ chỗ đến <strong>11:30
                            06-09-2024</strong>. Vui lòng thanh toán trước thời điểm này, nếu không vé của bạn sẽ bị
                        hủy.</p>
                </div>
            </div>
            <hr>

            <!-- Thẻ ATM nội địa / Internet Banking -->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod11"
                    onclick="showBankPaymentDetails()">
                <label class="form-check-label" for="paymentMethod11">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/httpImage/atm.svg" alt="Icon"
                        class="payment-icon"> Thẻ ATM nội địa /
                    Internet Banking
                </label>
                <p>Tài khoản phải có đăng ký Internet banking</p>
                <div class="wallet-details expandable" id="bankPaymentDetails">
                    <h5>Hướng dẫn thanh toán</h5>
                    <p>Vui lòng chọn ngân hàng và bấm nút Thanh toán bên dưới. Chúng tôi sẽ chuyển bạn đến cổng
                        thanh toán để hoàn thành giao dịch.</p>
                    <input type="text" class="form-control bank-search" placeholder="Tìm kiếm ngân hàng">
                    <div class="bank-selection">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/VCOM.png" alt="Vietcombank">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/BIDV.png" alt="BIDV">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/VPBANK.png" alt="VPBank">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/SACB.png" alt="Sacombank">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/CTG.png" alt="VietinBank">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/ACB.png" alt="ACB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/MB.png" alt="MB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/TPBANK.png" alt="TPBank">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/ARGI.png" alt="AGRIBANK">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/SHB.png" alt="SHB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/HDB.png" alt="HDBank">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/EXIMBANK.png" alt="EXIMBANK">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/NCB.png" alt="NCB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/OJB.png" alt="OCEAN BANK">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/NAMABANK.png" alt="NAM A BANK">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/OCB.png" alt="OCB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/SHB.png" alt="SHB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/HDB.png" alt="HDBank">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/EXIMBANK.png" alt="EXIMBANK">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/NCB.png" alt="NCB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/OJB.png" alt="OCEAN BANK">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/NAMABANK.png" alt="NAM A BANK">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/OCB.png" alt="OCB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/SHB.png" alt="SHB">
                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/images/bank/HDB.png" alt="HDBank">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <!-- tổng tiền -->
        <div class="card mb-3 money ">
            <div class="card-header d-flex justify-content-between align-items-center" onclick="toggleTotalDetails()">
                <h4 class="mb-0 rich">Tổng tiền:</h4>
                <div class="d-flex align-items-center">
                    <h4 class="mb-0 me-2 rich">950.000đ</h4>
                    <i class="fa-solid fa-chevron-down toggle-arrow" id="toggle-arrow"></i>
                </div>
            </div>
            <div class="card-body" id="total-details" style="display: none;">
                <p>Mã ghế/giường: A6</p>
                <p class="text-success">Khuyến mãi: -50.000đ</p>
                <h5 class="mt-3 rich-1">900.000đ</h5>
            </div>
        </div>


        <!-- Thông tin chuyến đi -->
        @include('payment.trip-info')

        <!-- Thong tin lien he -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mt-4 mb-4 mb-0 info-search">Thông tin liên hệ</h4>
                    <a href="#" class="text-primary edit-link" data-bs-toggle="offcanvas"
                        data-bs-target="#contactModal">Chỉnh
                        sửa</a>
                </div>
                <p><strong>Hành khách:</strong> PHỤNG</p>
                <p><strong>Số điện thoại:</strong> 0987654568</p>
                <p><strong>Email:</strong> tuan@gmail.com</p>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="contactModal" aria-labelledby="contactModalLabel">
            <div class="header-section">
                <div class="btn-close-custom" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="material-icons-round">arrow_back</i>
                </div>
                <div class="header-title-container ms-3">
                    <p class="header-title mb-0">Chỉnh sửa thông tin liên hệ</p>
                </div>
            </div>

            <div class="offcanvas-body">
                <form>
                    <div class="mb-3">
                        <label for="contactName" class="form-label">Họ tên *</label>
                        <input type="text" class="form-control" id="contactName" value="PHỤNG">
                    </div>
                    <div class="mb-3">
                        <label for="contactPhone" class="form-label">Số điện thoại *</label>
                        <div class="input-group">
                            <span class="input-group-text">VN +84</span>
                            <input type="text" class="form-control" id="contactPhone" value="0987654568">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Email để nhận thông tin đặt chỗ *</label>
                        <input type="email" class="form-control" id="contactEmail" value="tuan@gmail.com">
                    </div>
                    <div class="alert alert-success">
                        <i class="material-icons-round">check_circle</i> Số điện thoại và email được sử dụng để gửi
                        thông tin đơn
                        hàng và liên hệ khi cần thiết.
                    </div>
                </form>
            </div>

            <div class="footer">
                <button type="button" class="btn btn-warning text-black fw-bold w-100" data-bs-dismiss="offcanvas">
                    <span>Cập nhật</span>
                </button>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>
    </div>
</div>

<div class="fixed-payment-button">
    <div class="d-flex justify-content-between align-items-center flex-wrap payment-info-container">
        <div class="total-money-section">
            <p class="total-money mb-0" onclick="toggleModal()">Tổng tiền: 900.000đ <span id="toggle-arrow"
                    class="arrow">^</span></p>
        </div>
        <button class="btn mt-2 custom-payment-button">
            <i class="bi bi-shield-check"></i> Thanh toán
        </button>
        <p class="text-center mt-2 mb-0 w-100 order-1 order-md-0">
            Bằng việc nhấn nút Thanh toán, bạn đồng ý với <a href="#" class="text-primary">Chính sách bảo mật thanh
                toán</a>
        </p>
        <p class="small-2 mt-2 mb-0 payment-note order-0 order-md-1">
            Bạn sẽ sớm nhận được biển số xe, số điện thoại tài xế và dễ dàng thay đổi điểm đón trả sau khi đặt.
        </p>
    </div>
</div>

<!-- Modal Chi Tiết Tổng Tiền -->
<div id="totalMoneyModal" class="modal-bottom">
    <div class="modal-content-bottom">
        <span class="close" onclick="toggleModal()">&times;</span>
        <h4 class="total-amount-1">Tổng tiền</h4>
        <p>Giá vé: 950.000đ x 1</p>
        <p>Mã ghế/giường: A2</p>
        <p>Khuyến mãi: -50.000đ</p>
        <h4 class="total-amount-1">Tổng tiền: 900.000đ</h4>
        <button class="btn btn-primary mt-3" onclick="toggleModal()">Đóng</button>
    </div>
</div>

</div>

@endsection

@push('page-scripts')

<script>
let timeLeft = 600;
const countdownTimer = setInterval(function() {
    let minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft % 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    document.getElementById('timer').textContent = `${minutes}:${seconds}`;
    timeLeft--;
    if (timeLeft < 0) {
        clearInterval(countdownTimer);
        alert('Hết thời gian!');
    }
}, 1000);

document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleSeatInfo');
    const contentToShow = document.getElementById('contentToShow');
    const toggleIcon = document.getElementById('toggleIcon');
    const contentSection = document.getElementById('contentSectionn');

    if (toggleButton && contentToShow && toggleIcon && contentSection) {
        contentToShow.classList.add('d-none');
        contentSection.classList.add('d-none');

        toggleButton.addEventListener('click', () => {
            const isHidden = !contentToShow.classList.toggle('d-none');
            contentSection.classList.toggle('d-none');
            toggleIcon.src = isHidden ?
                'https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_more.svg' :
                'https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg';
        });
    }
});


document.addEventListener('DOMContentLoaded', () => {
    const toggleVisibility = (toggleElementId, contentId, iconElement) => {
        const toggleElement = document.getElementById(toggleElementId);
        const contentElement = document.getElementById(contentId);
        const icon = iconElement.querySelector('img');

        if (toggleElement && contentElement && icon) {
            toggleElement.addEventListener('click', () => {
                const isHidden = contentElement.classList.toggle('d-none');
                icon.src = isHidden ?
                    'https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg' :
                    'https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_more.svg';
            });
        }
    };
    toggleVisibility('toggleTotalAmount', 'totalAmountDetails', document.getElementById(
        'toggleTotalAmount'));
});

const addInsuranceButton = document.getElementById('add-insurance');
const removeInsuranceButton = document.getElementById('remove-insurance');
const insuranceInfo = document.getElementById('insurance-info');
const insuranceDetails = document.getElementById('insurance-details');
const closeButton = document.querySelector('.close-button');

if (addInsuranceButton && insuranceInfo && insuranceDetails) {
    // Thêm bảo hiểm
    addInsuranceButton.addEventListener('click', function(e) {
        e.preventDefault();
        if (insuranceInfo.style.display !== 'none') {
            insuranceInfo.style.display = 'none';
            insuranceDetails.style.display = 'flex';
        }
    });
}

if (removeInsuranceButton && insuranceInfo && insuranceDetails) {
    // Hủy bảo hiểm
    removeInsuranceButton.addEventListener('click', function(e) {
        e.preventDefault();
        if (insuranceDetails.style.display !== 'none') {
            insuranceInfo.style.display = 'flex';
            insuranceDetails.style.display = 'none';
        }
    });
}

if (closeButton) {
    // Sự kiện nút đóng (có thể thêm logic nếu cần)
    closeButton.addEventListener('click', function() {
        console.log("Close button clicked");
    });
}

function toggleQRDetails() {
    const qrDetails = document.getElementById('qr-details');
    if (qrDetails.style.display === 'block') {
        hideAllDetails();
    } else {
        hideAllDetails();
        qrDetails.style.display = 'block';
    }
}

function toggleBankDetails() {
    const bankDetails = document.getElementById('bank-details');
    const toggleText = document.querySelector('.show-more-bank');

    if (bankDetails.style.display === 'block') {
        bankDetails.style.display = 'none';
        toggleText.textContent = 'Tự nhập thông tin';
    } else {
        bankDetails.style.display = 'block';
        toggleText.textContent = 'Thu gọn';
    }
}

function toggleSupport() {
    const supportInfo = document.getElementById('support-info');
    const toggleText = document.querySelector('.toggle-support');

    if (supportInfo.style.display === 'block') {
        supportInfo.style.display = 'none';
        toggleText.textContent = 'Xem tất cả';
    } else {
        supportInfo.style.display = 'block';
        toggleText.textContent = 'Thu gọn';
    }
}
function hideBankDetails() {
    document.getElementById('bank-details').style.display = 'none';
}

function copyToClipboard(text) {
    navigator.clipboard.writeText(text);
    alert("Đã sao chép: " + text);
}

function showCardPayment() {
    hideAllDetails();
    document.getElementById('card-payment-details').style.display = 'block';
}

function showWalletDetails(walletId) {
    hideAllDetails();
    document.getElementById(walletId).style.display = 'block';
}

function showBankPaymentDetails() {
    hideAllDetails();
    document.getElementById('bankPaymentDetails').style.display = 'block';
}

function showStorePaymentDetails() {
    hideAllDetails();
    document.getElementById('storePaymentDetails').style.display = 'block';
}

// Hiển thị chi tiết thanh toán khi chọn "Thanh toán khi lên xe"
function showPaymentDetails() {
    hideAllDetails();
    document.getElementById('paymentDetails').style.display = 'block';
}

// Ẩn tất cả các chi tiết thanh toán
function hideAllDetails() {
    document.querySelectorAll('.expandable').forEach(el => el.style.display = 'none');
    document.getElementById('paymentDetails').style.display = 'none';
    const qrDetails = document.getElementById('qr-details');
    if (qrDetails) qrDetails.style.display = 'none';
}

function toggleTotalDetails() {
    const totalDetails = document.getElementById('total-details');
    if (totalDetails.style.display === 'none') {
        totalDetails.style.display = 'block';
    } else {
        totalDetails.style.display = 'none';
    }
}

function showContactEditForm() {
    const contactEditForm = document.getElementById('contactEditForm');
    contactEditForm.style.display = 'block';
}

function hideContactEditForm() {
    const contactEditForm = document.getElementById('contactEditForm');
    contactEditForm.style.display = 'none';
}

window.onclick = function(event) {
    const contactEditForm = document.getElementById('contactEditForm');
    if (event.target == contactEditForm) {
        hideContactEditForm();
    }
}

function openContactModal() {
    document.getElementById('contactModal').style.display = 'block';
}

function closeContactModal() {
    document.getElementById('contactModal').style.display = 'none';
}

function toggleTotalDetails() {
    const totalDetails = document.getElementById('total-details');
    const toggleArrow = document.getElementById('toggle-arrow');
    if (totalDetails.style.display === 'none') {
        totalDetails.style.display = 'block';
        toggleArrow.classList.add('rotate');
    } else {
        totalDetails.style.display = 'none';
        toggleArrow.classList.remove('rotate');
    }
}
document.querySelector('.custom-close-button').addEventListener('click', function() {});

function toggleModal() {
    const modal = document.getElementById("totalMoneyModal");
    const arrow = document.getElementById("toggle-arrow");

    if (modal.classList.contains("open")) {
        modal.classList.remove("open");
        modal.style.transform = "translateY(100%)";
        arrow.classList.remove('rotate');
    } else {
        modal.classList.add("open");
        modal.style.transform = "translateY(0)";
        arrow.classList.add('rotate');
    }
}
</script>
@endpush