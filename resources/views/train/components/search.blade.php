<ul class="nav nav-pills nav-airline">
    <li class="nav-item d-flex justify-content-center align-items-center">
        <a href="/"
            class="nav-link d-flex flex-column flex-md-row align-items-center justify-content-center text-center">
            <i class="fa fa-bus-simple mb-1 mb-md-0 me-2"></i>
            <span>Xe khách</span>
        </a>
    </li>
    <li class="nav-item d-flex justify-content-center align-items-center">
        <a href="/ve-may-bay"
            class="nav-link d-flex flex-column flex-md-row align-items-center justify-content-center text-center">
            <i class="fa fa-plane mb-1 mb-md-0 me-2" aria-hidden="true"></i>
            <span>Máy bay</span>
        </a>
    </li>
    <li class="nav-item d-flex justify-content-center align-items-center active">
        <a href="/ve-tau-hoa"
            class="nav-link d-flex flex-column flex-md-row align-items-center justify-content-center text-center">
            <i class="fa fa-train text-primary mb-1 mb-md-0 me-2" aria-hidden="true"></i>
            <span class="text-primary fw-bold">Tàu hỏa</span>
        </a>
    </li>
</ul>
<div class="search-widget-inner-content custom-tab_pane">
    <div class="ant-row-flex">
        <div class="left-ant-row-flex">
            <div class="wrap-left-ant-row-flex position-relative">
                {{-- from --}}
                <div class="departure-train-flex flex-sum-left">
                    <div class="custom-input-col custom-train-from-input-col">
                        <div class="custom-select-wrapper custom-train-from-select-wrapper">
                            <div class="custom-select-container custom-train-from-select">
                                <div class="custom-input-container">
                                    <div
                                        class="custom-icon-container d-flex flex-column justify-content-center align-items-center">
                                        <img src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg"
                                            alt="pickup-icon" width="24" height="24">
                                    </div>
                                    <div
                                        class="position-relative d-flex flex-grow-1 flex-column align-items-center bg-transparent border-0 custom-input_box">
                                        <div class="custom-input-section">
                                            <input type="text" id="train_from" hidden
                                                value="{!! $params->trainFrom->station_code ?? '' !!}" />
                                            <input type="text" icon="[object Object]" class="mb-0"
                                                id="train_from_input" placeholder=""
                                                data-testid="SearchWidget.train_from" data-id="SearchWidget.train_from"
                                                autocomplete="off" value="{!! $params->trainFrom->station_name ?? '' !!}">
                                            <label class="base__Caption-sc-1tvbuqk-26 hTYbup text-secondary"
                                                for="train_from_input">Nơi xuất phát</label>
                                        </div>
                                        <div class="w-100">
                                            <p class="text-truncate text-muted mb-0 fw-normal"
                                                style="font-size: 11px; line-height: 16px;">
                                                {{-- HAN - Sân bay Nội Bài --}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="forcut-bar forcut-bar_form"></div>
                                </div>
                                <ul class="custom-dropdown-menu train-dropdown-menu" style="min-width: 800px;">
                                    <li class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                        <p class="custom-dropdown-item-group-title">Thành phố, nhà ga phổ biến</p>
                                        <ul class="custom-dropdown-item-list" id="dropdown_list_train_from"></ul>
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
                    <div class="position-absolute top-10 end-0 bg-light" style="width: 2px;height: 100%;"></div>
                </div>
                {{-- To --}}
                <div class="departure-train-flex flex-sum-left">
                    <div class="custom-input-col custom-train-to-input-col">
                        <div class="custom-select-wrapper custom-train-to-select-wrapper">
                            <div class="custom-select-container custom-train-to-select">
                                <div class="custom-input-container" style="padding-left: 32px !important;">
                                    <div
                                        class="custom-icon-container d-flex flex-column justify-content-center align-items-center">
                                        <img src="https://storage.googleapis.com/goyolo-uat/images/dropoffIcon.svg"
                                            alt="dropoff-icon" width="24" height="24">
                                    </div>
                                    <div
                                        class="position-relative d-flex flex-grow-1 flex-column align-items-center bg-transparent border-0 custom-input_box">
                                        <div class="custom-input-section">
                                            <input type="text" id="train_to" hidden
                                                value="{!! $params->trainTo->station_code ?? '' !!}" />
                                            <input type="text" icon="[object Object]" class="mb-0"
                                                id="train_to_input" placeholder="" data-testid="SearchWidget.train_to"
                                                data-id="SearchWidget.train_to" autocomplete="off"
                                                value="{!! $params->trainTo->station_name ?? '' !!}">
                                            <label class="base__Caption-sc-1tvbuqk-26 hTYbup text-secondary"
                                                for="train_to_input">Nơi đến</label>
                                        </div>
                                        <div class="w-100">
                                            <p class="text-truncate text-muted mb-0 fw-normal"
                                                style="font-size: 11px; line-height: 16px;">
                                                {{-- HAN - Sân bay Nội Bài --}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="forcut-bar forcut-bar_to"></div>
                                </div>
                                <ul class="custom-dropdown-menu train-dropdown-menu" style="min-width: 800px;">
                                    <li class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                        <p class="custom-dropdown-item-group-title">Thành phố, nhà ga phổ biến</p>
                                        <ul class="custom-dropdown-item-list" id="dropdown_list_train_to">
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute top-10 end-0 bg-light" style="width: 2px;height: 100%;"></div>
                </div>
                {{-- date to --}}
                <div class="departure-train-flex flex-sum-left h-100 position-relative">
                    <div class="d-flex flex-row ps-3 h-100">
                        <div
                            class="custom-icon-container d-flex flex-column justify-content-center align-items-center">
                            <img class="trip-date-icon lazyloaded"
                                src="https://storage.googleapis.com/goyolo-uat/images/pickup.svg" alt="trip-date-icon"
                                width="24" height="24">
                        </div>
                        <div class="d-flex flex-column justify-content-center custome-departure-date-select">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="w-100">
                                    <p class="base__Caption-sc-1tvbuqk-26 hTYbup text-secondary">Ngày đi</p>
                                    <input type="text" value="{!! $params->dateTo ?? '' !!}"
                                        class="custom-font-medium date-input date-default-input m-0 p-0"
                                        style="outline: none;" id="train_date_to" placeholder="Chọn ngày bắt đầu"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="forcut-bar forcut-bar_date_to"></div>
                    <div class="position-absolute top-10 end-0 bg-light" style="width: 2px;height: 100%;"></div>
                </div>
                {{-- date from --}}
                <div class="departure-train-flex flex-sum-left h-100 position-relative">
                    <div class="d-flex flex-row ps-3 h-100">
                        <div
                            class="custom-icon-container d-flex flex-column justify-content-center align-items-center">
                            <i class="fa fa-plus text-primary" width="24" height="24"></i>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <div class="w-100 justify-content-between">
                                <input type="text"
                                    class="custom-font-medium date-input data-add-input m-0 p-0 custom-placeholder-color"
                                    style="outline: none; line-height: 24px;" id="train_date_from"
                                    placeholder="Thêm ngày về" autocomplete="off" value="{!! $params->dateFrom ?? '' !!}">
                            </div>
                        </div>
                    </div>
                    <div class="forcut-bar forcut-bar_date_from"></div>
                </div>
            </div>
        </div>
        <div class="right-search-widget-inner-content">
            <button id="train_search">Tìm kiếm</button>
        </div>
    </div>
    <div class="mt-3 d-flex justify-content-start align-items-center position-relative m-0"
        style="height: auto; zoom: 1; display: block; box-sizing: border-box;">
        <div class="dropdown me-2">
            <button class="btn d-flex align-items-center bt-dropdown-background border-0" type="button"
                id="dropdownPassenger" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="me-2" id="personIcon"
                    src="https://storage.googleapis.com/goyolo-uat/images/SeoVexImprove/people.svg"
                    alt="passenger-icon" width="24" height="24">
                <p class="me-auto mb-0 text-black custom-font-medium" id="passengerCount">1 Hành khách</p>
                <div class="arrow_icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)"><path d="M13.233 7.742L10 10.975 6.767 7.742a.83.83 0 1 0-1.175 1.175l3.825 3.825a.83.83 0 0 0 1.175 0l3.825-3.825a.83.83 0 0 0 0-1.175.848.848 0 0 0-1.184 0z" fill="#141414"></path></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h20v20H0z"></path></clipPath></defs></svg>
                </div>
            </button>

            <ul class="dropdown-menu p-3 shadow w-100" aria-labelledby="dropdownPassenger" id="personTypeList">
                <li class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
                    <div class="pe-3 d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 fw-semibold">Người lớn</h6>
                        </div>
                        <small class="text-muted text-secondary">Từ trên 10 - 59 tuổi vào ngày khởi
                            hành</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-circle btn-light-blue custom_disabled decrement-btn"
                         data-target="#numberValueAdult">
                            <i class="bi bi-dash text-primary fs-6"></i>
                        </button> 
                        <input type="number" id="numberValueAdult" class="mx-3 fw-bold text-center custom-input_number"
                            value="1" min="1" style="width: 25px; border: 0" readonly> 
                        <button class="btn btn-circle btn-light-blue increment-btn" 
                        data-target="#numberValueAdult">
                            <i class="bi bi-plus text-primary"></i>
                        </button>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
                    <div class="pe-3 d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 fw-semibold">Trẻ em</h6>
                            <p class="ms-2 px-2 py-1 fw-semibold text-white bg-success rounded mb-0 text-nowrap"
                                style="font-size: 12px;">GIẢM 25%</p>
                        </div>
                        <small class="text-muted text-secondary">Từ 0 - 10 tuổi vào ngày khởi hành, ưu đãi áp
                            dụng cho công dân Việt Nam</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-circle btn-light-blue custom_disabled decrement-btn"
                         data-target="#numberValueChildren">
                            <i class="bi bi-dash text-primary fs-6"></i>
                        </button>
                        <input type="number" id="numberValueChildren" class="mx-3 fw-bold text-center custom-input_number"
                            value="0" min="0" style="width: 20px; border: 0" readonly>
                        <button class="btn btn-circle btn-light-blue increment-btn" data-target="#numberValueChildren">
                            <i class="bi bi-plus text-primary"></i>
                        </button>
                    </div>
                </li>

                <li class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
                    <div class="pe-3 d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 fw-semibold">Người cao tuổi</h6>
                            <p class="ms-2 px-2 py-1 fw-semibold text-white bg-success rounded mb-0 text-nowrap"
                                style="font-size: 12px;">
                                GIẢM 15%</p>
                        </div>
                        <small class="text-muted text-secondary">
                            Từ 60 tuổi trở lên vào ngày khởi hành, ưu đãi áp dụng cho công dân Việt Nam
                        </small>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-circle btn-light-blue custom_disabled decrement-btn"
                         data-target="#numberValueSeniors">
                            <i class="bi bi-dash text-primary fs-6"></i>
                        </button> 
                        <input type="number" id="numberValueSeniors" class="mx-3 fw-bold text-center custom-input_number"
                            value="0" min="0" style="width: 25px; border: 0" readonly> 
                        <button class="btn btn-circle btn-light-blue increment-btn" 
                        data-target="#numberValueSeniors">
                            <i class="bi bi-plus text-primary"></i>
                        </button>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
                    <div class="pe-3 d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 fw-semibold">Sinh viên</h6>
                            <p class="ms-2 px-2 py-1 fw-semibold text-white bg-success rounded mb-0 text-nowrap"
                                style="font-size: 12px;">
                                GIẢM 10%
                            </p>
                        </div>
                        <small class="text-muted text-secondary">
                            Ưu đãi áp dụng cho công dân Việt Nam có đem theo Thẻ Sinh viên khi đi tàu
                        </small>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-circle btn-light-blue custom_disabled decrement-btn"
                         data-target="#numberValueStudent">
                            <i class="bi bi-dash text-primary fs-6"></i>
                        </button> 
                        <input type="number" id="numberValueStudent" class="mx-3 fw-bold text-center custom-input_number"
                            value="0" min="0" style="width: 25px; border: 0" readonly> 
                        <button class="btn btn-circle btn-light-blue increment-btn" 
                        data-target="#numberValueStudent">
                            <i class="bi bi-plus text-primary"></i>
                        </button>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
                    <div class="pe-3 d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 fw-semibold ">Đoàn viên Công Đoàn</h6>
                            <p class="ms-2 px-2 py-1 fw-semibold text-white bg-success rounded mb-0 text-nowrap"
                                style="font-size: 12px;">
                                GIẢM 5%
                            </p>
                        </div>
                        <small class="text-muted text-secondary ">
                            Ưu đãi áp dụng cho công dân Việt Nam có đem Thẻ Đoàn viên hợp lệ khi đi tàu
                        </small>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-circle btn-light-blue custom_disabled decrement-btn"
                        data-target="#numberValueUnion_member">
                           <i class="bi bi-dash text-primary fs-6"></i>
                       </button> 
                       <input type="number" id="numberValueUnion_member" class="mx-3 fw-bold text-center custom-input_number"
                           value="0" min="0" style="width: 25px; border: 0" readonly> 
                       <button class="btn btn-circle btn-light-blue increment-btn" 
                       data-target="#numberValueUnion_member">
                           <i class="bi bi-plus text-primary"></i>
                       </button>
                    </div>
                </li>
                <li class="text-center">
                    <button class="btn btn-primary w-100">Xong</button>
                </li>
            </ul>
        </div>
    </div>
</div>
