@extends('layouts.app')
@section('title', 'Tím kiếm chuyến tàu')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/air-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bus-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bus-mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/train_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/train_mobile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.min.css"
        integrity="sha512-lvaVbvmbHhG8cmfivxLRhemYlTT60Ly9Cc35USrpi8/m+Lf/f/T8x9kEIQq47cRj1VQIFuxTxxCcvqiQeQSHjQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- lightgallery plugins -->
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7/css/lightgallery.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css"
        integrity="sha256-Eg8Gfr1vMiM54szM1+h+M018fqWyvVU/Ml8q48Oub+g=" crossorigin="anonymous">
@endsection

@section('content')
    <div id=" airlinetickets">
        <div class="container-airlinetickets">
            @include('components.search_component', [
                'params' => $params,
                'key' => 3,
            ])
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
                                                aria-valuenow="0" style="left: 0%;">
                                            </div>
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
                {{-- Load item is here --}}
                @foreach ($list_routes_train as $key => $route)
                    @include('train._train_item', [
                        'route' => $route,
                        'key' => (string) $key,
                    ])
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection

@push('page-scripts')
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moon-time@2.4.0/calculate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"
        integrity="sha512-fCRpXk4VumjVNtE0j+OyOqzPxF1eZwacU3kN3SsznRPWHgMTSSo7INc8aY03KQDBWztuMo5KjKzCFXI/a5rVYQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- lightgallery plugins -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js"
        integrity="sha256-feKFTnlUEF8rkf9Zg3ScTjx69R4FquJ5+KXWaZSoV3c=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/zoom/lg-zoom.min.js"
        integrity="sha256-ghoq24AFURwK2e9vOVwbdL6swtoZTNE6SsQ9NBJG4IU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.min.js"
        integrity="sha256-T7w+wYeOkDSLcbNZTY7yfE8QoaTG1edJSNDuWQGP2Hw=" crossorigin="anonymous"></script>

    <script>
        // data load search component
        // #bus
        const busCities = @json($list_areas ?? []);
        const dateTo = @json($params->dateTo ?? '');
        const dateFrom = @json($params->dateFrom ?? '');
        // #train
        const trainStations = @json($list_areas_train ?? []);
        const dateToTrain = @json($params->dateToTrain ?? '');
        const dateFromTrain = @json($params->dateFromTrain ?? '');
    </script>
    <script src="{{ asset('js/search_component.js') }}"></script>

    <script>
        $("#pills-train-tab").on("click", function(e) {
            window.location.href = "/route-search/tau-hoa";
        });

        $("#pills-bus-tab").on("click", function(e) {
            window.location.href = "/route-search/xe-khach";
        });

        // Lọc Giờ slide
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
        // Lọc slide tiền
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
        //
        $(document).ready(function() {
            // Chọn hành khách
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
            // Lấy hạng ghế
            const searchSeatContainer = $('.seat-search-container');
            const seatSelectionDropdown = $('.seat-selection-dropdown');
            const seatOptionItems = $('.seat-option-item');
            const seatInfoText = $('.seat-info-text');
            const seatCheckIcons = $('.seat-check-icon');

            searchSeatContainer.on('click', function(event) {
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
                if (!searchSeatContainer.is(event.target) && searchSeatContainer.has(event.target)
                    .length === 0) {
                    seatSelectionDropdown.hide();
                }
            });
            // Sắp xếp
            const radioWrappers = $('.radio-wrapper');
            radioWrappers.on('click', function() {
                radioWrappers.removeClass('checked');
                $(this).addClass('checked');
                $(this).find('.radio-input').prop('checked', true);
            });

            // ------------- Filter -------------//
            // Lọc btn
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
            // Điểm đón
            const switchers = $('.custom-tree-switcher');
            const checkboxes = $('.custom-tree-checkbox');

            switchers.on('click', function() {
                const node = $(this).closest('.custom-tree-node');
                node.toggleClass('custom-tree-node_open');
            });

            checkboxes.on('click', function() {
                $(this).toggleClass('checked');
            });
            // Điểm trả
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
            // Tieu chi
            $('.checkbox-group-n .ant-checkbox-n').on('click', function() {
                const checkboxInput = $(this).find('.ant-checkbox-input-n');
                checkboxInput.prop('checked', !checkboxInput.prop('checked'));
                $(this).find('.ant-checkbox-inner-n').toggleClass('checked');
            });
            // Vi tri ghe
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
            // Loại xe
            $('.ant-checkbox-input-n').on('change', function() {
                $(this).siblings('.ant-checkbox-inner-n').toggleClass('checked-n', this.checked);
            });
            // Loại ghế
            $('.ant-checkbox-input-b').on('change', function() {
                $(this).siblings('.ant-checkbox-inner-b').toggleClass('checked-b', this.checked);
            });
            // Quay lại - tiep tuc btn
            $('.modal-choose-chair').click(function() {
                $('#exampleModal').modal('show');
            });

            function toggleTextarea12() {
                if ($('#flexRadioDefault1').is(':checked')) {
                    $('#transferAddress').show();
                } else {
                    $('#transferAddress').hide();
                }
            }

            $('#flexRadioDefault1, #flexRadioDefault2').on('change', toggleTextarea12);
            toggleTextarea12();

            function toggleTextarea34() {
                if ($('#flexRadioDefault4').is(':checked')) {
                    $('#transferAddress1').show();
                } else {
                    $('#transferAddress1').hide();
                }
            }

            $('#flexRadioDefault3, #flexRadioDefault4').on('change', toggleTextarea34);
            toggleTextarea34();
        });

        function nextStep(step) {
            document.querySelector('.wizard-step.active').classList.remove('active');
            document.getElementById('step' + step).classList.add('active');
        }

        function prevStep(step) {
            document.querySelector('.wizard-step.active').classList.remove('active');
            document.getElementById('step' + step).classList.add('active');
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Lấy tất cả các phần tử carousel
            document.querySelectorAll('.carousel').forEach(function(carouselEl) {
                // Khởi tạo Bootstrap Carousel cho mỗi phần tử
                const carousel = new bootstrap.Carousel(carouselEl, {
                    // interval: 2000,
                    wrap: true,
                });

                $('#myCarousel').carousel({
                    interval: 3500
                });

                // This event fires immediately when the slide instance method is invoked.
                $('#myCarousel').on('slide.bs.carousel', function(e) {
                    var id = $('.item.active').data('slide-number');

                    // Added a statement to make sure the carousel loops correct
                    if (e.direction == 'right') {
                        id = parseInt(id) - 1;
                        if (id == -1) id = 7;
                    } else {
                        id = parseInt(id) + 1;
                        if (id == $('[id^=carousel-thumb-]').length) id = 0;
                    }

                    $('[id^=carousel-thumb-]').removeClass('selected');
                    $('[id=carousel-thumb-' + id + ']').addClass('selected');
                });

                // Thumb control
                $('[id^=carousel-thumb-]').click(function() {
                    var id_selector = $(this).attr("id");
                    var id = id_selector.substr(id_selector.length - 1);
                    id = parseInt(id);
                    $('#myCarousel').carousel(id);
                    $('[id^=carousel-thumb-]').removeClass('selected');
                    $(this).addClass('selected');
                });
            });
        });
    </script>
@endpush
