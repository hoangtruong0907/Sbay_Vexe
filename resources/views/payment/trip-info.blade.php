<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Information</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/trip-info.css') }}">
</head>

<body>
    <div class="info-card-container">
        <div class="trip-heading">
            <h4 class="fw-bold text-dark">Thông tin chuyến đi</h4>
        </div>
        <div class="trip-summary">
            <div class="d-flex align-items-center">
                <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/bus_blue_24dp.svg" alt="Bus Icon"
                    class="icon">
                <span class="text-muted">T3, 10/09/2024</span>
                <div class="d-flex align-items-center ms-3">
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/people_alt_black_24dp.svg"
                        alt="People Icon" class="icon">
                    <span class="text-muted ms-1">1</span>
                </div>
            </div>
            <a href="#" class="text-decoration-none text-primary small custom-link" data-bs-toggle="offcanvas"
                data-bs-target="#tripDetailsRight" aria-controls="tripDetailsRight">Chi tiết</a>

        </div>

        <div class="trip-details">
            <img src="https://static.vexere.com/production/images/1689135259785.jpeg" alt="Bus Image">
            <div class="trip-info">
                <h6>Tân Kim Chi</h6>
                <small>Limousine giường phòng 24 chỗ (CABIN ĐÔI)</small>
            </div>
        </div>

        <div class="route-details">
            <div class="route-item">
                <div class="d-flex align-items-center">
                    <span class="route-time">18:45</span>
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                        alt="Pickup Icon" class="icon">
                    <div>
                        <p class="route-location">VP Đà Nẵng</p>
                        <p class="text-muted">46 Nam Trần, Phường Hòa Minh, Liên Chiểu, Đà Nẵng</p>
                    </div>
                </div>
                <a href="#" class="change-link" data-bs-toggle="offcanvas" data-bs-target="#changeLocationRight"
                    aria-controls="changeLocationRight">Thay đổi</a>
            </div>
            <div class="route-item">
                <div class="d-flex align-items-center">
                    <span class="route-time">06:45</span>
                    <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/dropoff_semantic_negative_12dp.svg"
                        alt="Dropoff Icon" class="icon1">
                    <div>
                        <p class="route-location">34 Trần Khát Chân</p>
                        <p class="text-muted">34 Trần Khát Chân, Phường Thanh Nhàn, Hai Bà Trưng, Hà Nội</p>
                    </div>
                </div>
                <a href="#" class="change-link" data-bs-toggle="offcanvas" data-bs-target="#changeLocationRight"
                    aria-controls="changeLocationRight">Thay đổi</a>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="tripDetailsRight" aria-labelledby="tripDetailsRightLabel">
        <div class="header-section d-flex flex-row align-items-center bg-primary p-3">
            <div class="pointer text-white custom-close-button" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="material-icons-round">arrow_back</i>
            </div>
            <div class="header-title-container d-flex ms-3">
                <p class="header-title mb-0 text-white fw-bold">Queen Cafe (Cam Ranh)</p>
                <p class="mb-0 text-white ms-2">15:00 • T4, 11/09/2024</p>
            </div>
        </div>

        <div class="offcanvas-body p-3">
            <div class="detail-info">
                <div class="route">
                    <p class="mb-1 fw-bold gymsWw">Tuyến</p>
                    <span class="text-secondary">Huế - Đà Lạt</span>
                </div>
                <div class="route">
                    <p class="mb-1 fw-bold gymsWw">Nhà xe</p>
                    <span class="text-secondary">Queen Cafe (Cam Ranh)</span>
                </div>
                <div class="route">
                    <p class="mb-1 fw-bold gymsWw">Chuyến</p>
                    <span class="text-secondary">13:00 • T4, 11/09/2024</span>
                </div>
                <div class="route">
                    <p class="mb-1 fw-bold gymsWw">Loại xe</p>
                    <span class="text-secondary">Limousine 34 chỗ</span>
                </div>
                <div class="route">
                    <p class="mb-1 fw-bold gymsWw">Số lượng</p>
                    <span class="text-secondary">1 vé</span>
                </div>

                <div class="w-100">
                    <div class="d-flex justify-content-between w-100 pointer" id="toggleContent">
                        <p class="fw-normal text-nowrap mb-0">Mã ghế/ giường</p>
                        <div class="d-flex align-items-center gap-sm-1 pointer">
                            <p class="fw-bold mb-0 seat-info">08,07</p>
                            <img id="toggleIcon" class="icon-expand-less ls-is-cached lazyloaded icon-size"
                                data-src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                alt="icon-expand-less">

                        </div>
                    </div>

                    <div class="d-flex flex-column gap-2 mt-2 overflow-auto d-none" id="contentToShow">
                        <div class="d-flex justify-content-end">
                            <p class="fw-normal mb-0 seat-text">
                                Ghế đầu:
                                <span>08</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <p class="fw-normal mb-0 seat-text">
                                Ghế đầu:
                                <span>08</span>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-evenly overflow-auto text-center py-1" id="contentSection">
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
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                                            <div color="#ae70ff" class="Seat__SeatImageContainer-sc-5i6bij-1 qIAFz">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#ae70ff" class="Seat__SeatImageContainer-sc-5i6bij-1 qIAFz">
                                                <span class="seat-color-selected"><svg width="40" height="32"
                                                        viewBox="0 0 40 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#fba442" class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#fba442" class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#fba442" class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#fba442" class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#fba442" class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#fba442" class="Seat__SeatImageContainer-sc-5i6bij-1 hEmbyb">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#6bd600" class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#6bd600" class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm">
                                                <span class="seat-color"><svg width="40" height="32" viewBox="0 0 40 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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
                                            <div color="#6bd600" class="Seat__SeatImageContainer-sc-5i6bij-1 bjvObm">
                                                <span class="seat-color-selected"><svg width="40" height="32"
                                                        viewBox="0 0 40 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="8.75" y="2.75" width="22.5" height="26.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
                                                        <rect x="10.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 10.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="35.25" y="11.75" width="14.5" height="5.5" rx="2.25"
                                                            transform="rotate(90 35.25 11.75)" fill="#FFF"
                                                            stroke="#B8B8B8" stroke-width="1.5" stroke-linejoin="round">
                                                        </rect>
                                                        <rect x="8.75" y="22.75" width="22.5" height="6.5" rx="2.25"
                                                            fill="#FFF" stroke="#B8B8B8" stroke-width="1.5"
                                                            stroke-linejoin="round"></rect>
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

                <!-- Tạm tính -->
                <div class="w-100">
                    <div class="d-flex justify-content-between w-100 pointer" id="totalAmountModal">
                        <p class="fw-normal text-nowrap mb-0">Tạm tính</p>
                        <div class="d-flex align-items-center gap-sm-1">
                            <p class="fw-bold mb-0">470.000đ</p>
                            <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg"
                                alt="icon-expand-less" width="20" height="20">
                        </div>
                    </div>

                    <div class="pt-2 d-none" id="showTotalAmountModal">
                        <div class="d-flex justify-content-between">
                            <p class="label color--darkness">Giá vé</p>
                            <div class="d-flex flex-column">
                                <div class="text-end">
                                    <p class="mb-0 fw-medium custom-2">230.000đ x 1</p>
                                    <p class="mb-0 custom-chair">Mã ghế/giường: 06</p>
                                </div>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium custom-2">240.000đ x 1</p>
                                    <p class="mb-0 custom-chair">Mã ghế/giường: 07</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <p class="label color--darkness">Bảo hiểm chuyến đi</p>
                            <div class="text-end">
                                <p class="mb-0 custom-3">60.000đ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group-title d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img class="pickup-icon"
                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg" alt="">
                    <h6 class="point mb-0 ms-2">Điểm đón</h6>
                </div>
                <a href="#" class="change-link text-primary" data-bs-toggle="offcanvas"
                    data-bs-target="#changeLocationRight" aria-controls="changeLocationRight">Thay đổi</a>
            </div>
            <p class="location-name">VP Đà Nẵng</p>
            <p class="text-secondary">16 Đường 3/2, Thuận Phước, Hải Châu, Đà Nẵng, Phường Thuận Phước, Hải Châu, Đà Nẵng</p>
            <p class="text-secondary eajKhF">Dự kiến đón lúc: 15:00 11/09/2024</p>
            <div class="group-title d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img class="local-icon"
                        src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/dropoff_semantic_negative_12dp.svg" alt="">
                    <h6 class="point mb-0 ms-2">Điểm trả</h6>
                </div>
                <a href="#" class="change-link text-primary" data-bs-toggle="offcanvas"
                    data-bs-target="#changeLocationRight" aria-controls="changeLocationRight">Thay đổi</a>
            </div>
            <p class="location-name">VP Hội An</p>
            <p class="text-secondary">23 Nguyễn Tất Thành, P. Cẩm Phô, Hội An, Phường Cẩm Phô, Hội An, Quảng Nam</p>
            <p class="text-secondary eajKhF">Dự kiến trả lúc: 17:00 11/09/2024</p>
        </div>
        <div class="footer p-3">
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="btn btn-primary w-100">
                <span>Đóng</span>
            </button>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="changeLocationRight"
        aria-labelledby="changeLocationRightLabel">
        <div class="header-section d-flex flex-row align-items-center bg-primary">
            <div class="pointer text-white custom-close-button" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="material-icons-round">arrow_back</i>
            </div>
            <div class="header-title-container d-flex ms-3">
                <p class="header-title mb-0 text-white fw-bold">Thay đổi điểm trả chiều đi</p>
            </div>
        </div>

        <div class="sorting-options-section position-sticky d-flex flex-column w-100">
            <div class="d-flex flex-row justify-content-between">
                <p class="sorting-text">Sắp xếp theo</p>
                <p class="sorting-text">Khoảng cách từ điểm đón đến</p>
            </div>
            <div class="d-flex flex-row justify-content-between mt-1">
                <button type="button" class="sort-button" id="sortedBy">
                    <p class="fw-bold mb-0">Sớm nhất</p>
                    <i class="material-icons-outlined sort-icon">arrow_drop_down</i>
                </button>
                <button type="button" class="sort-button" id="changeLocation">
                    <p class="fw-bold mb-0">Vị trí của bạn</p>
                    <p class="fw-bold mb-0 change-location-link">Thay đổi</p>
                </button>
            </div>
        </div>

        <div class="location-options-content d-flex flex-column bg-white">
            <label class="location-option">
                <input class="form-check-input" type="radio" name="flexRadioDefault" value="Location1" checked />
                <div class="location-info">
                    <div class="location-details">
                        <div class="location-info-text">
                            <p class="time-text">18:00</p>
                            <p class="route-location">VP Đà Nẵng</p>
                            <p class="location-description">16 Đường 3/2, Thuận Phước, Hải Châu, Đà Nẵng, Phường
                                Thuận
                                Phước, Hải Châu, Đà Nẵng</p>
                            <p class="location-price text-danger">220.000đ / nhóm từ 1-3 khách (trả tại website
                                Vexere)
                            </p>
                        </div>
                        <div class="location-distance">
                            <div class="distance-wrapper">
                                <button type="button" class="view-location-button d-flex align-items-center"
                                    id="viewLocation">
                                    <i class="material-icons-round text-primary me-1">place</i>
                                    <p class="view-location-text mb-0 text-primary">Bản đồ</p>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </label>
        </div>


        <div class="report-section border-top border-secondary bg-white position-absolute start-0 bottom-0 w-100 p-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>Sai hoặc thiếu thông tin?</div>
                <p class="text-primary fw-bold text-decoration-underline cursor-pointer" id="reportUs">
                    Báo cáo với chúng tôi
                </p>
            </div>
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                class="btn btn-warning text-black fw-bold d-flex align-items-center justify-content-center w-100 rounded-pill py-2">
                <span>Cập nhật</span>
            </button>
        </div>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="sortedByShow" aria-labelledby="offcanvasBottomLabel"
            style="border-radius: 16px 16px 0 0;height: auto; width: 560px; right: 0; left: auto;">
            <div class="offcanvas-header d-flex w-100 justify-content-center">
                <h5 class="offcanvas-title mb-0" id="offcanvasBottomLabel">Sắp xếp theo</h5>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleButton = document.getElementById('toggleContent');
        const contentToShow = document.getElementById('contentToShow');
        const toggleIcon = document.getElementById('toggleIcon');
        const contentSection = document.getElementById(
            'contentSection');
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
                        'https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_less.svg' // Icon for collapsing
                        :
                        'https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/expand_more.svg'; // Icon for expanding
                });
            }
        };
        toggleVisibility('totalAmountModal', 'showTotalAmountModal', document.getElementById(
            'totalAmountModal'));
    });

    document.querySelector('.custom-close-button').addEventListener('click', function() {});
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>

</html>