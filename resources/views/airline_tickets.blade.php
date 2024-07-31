@extends('layouts.app')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/air-datepicker.css') }}">
@endsection

@section('content')
  <div id="airlinetickets">
      <div class="container-airlinetickets">
          <ul class="nav nav-pills nav-airline" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-bus-tab" data-bs-toggle="pill" data-bs-target="#pills-bus" type="button" role="tab" aria-controls="pills-bus" aria-selected="true"><i class="fa fa-car" aria-hidden="true"></i> <span>420k</span></button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-plane-tab" data-bs-toggle="pill" data-bs-target="#pills-plane" type="button" role="tab" aria-controls="pills-plane" aria-selected="false"><i class="fa fa-plane" aria-hidden="true"></i> <span>950k</span></button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-train-tab" data-bs-toggle="pill" data-bs-target="#pills-train" type="button" role="tab" aria-controls="pills-train" aria-selected="false"><i class="fa fa-train" aria-hidden="true"></i> <span>595k</span></button>
              </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-bus" role="tabpanel" aria-labelledby="pills-bus-tab" tabindex="0">
                  <div class="ant-row-flex search-widget-inner-content">
                      <div class="left-ant-row-flex">
                          <div class="wrap-left-ant-row-flex" style="position: relative;">
                              <div class="departure-bus-flex flex-sum-left">
                                  <div class="custom-input-col custom-bus-from-input-col">
                                      <div class="custom-select-wrapper custom-bus-from-select-wrapper">
                                          <div class="custom-select-container custom-bus-from-select">
                                              <div class="custom-input-container">
                                                  <div class="custom-icon-container">
                                                  <img class="custom-pickup-icon" src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg" alt="pickup-icon" width="24" height="24">
                                                  </div>
                                                  <div class="custom-input-section">
                                                  <input type="text" id="bus_from_input" placeholder="Điểm Đi" data-testid="SearchWidget.bus_from" data-id="SearchWidget.bus_from">
                                                  </div>
                                              </div>
                                              <ul class="custom-dropdown-menu bus-dropdown-menu">
                                                  <li class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                                  <ul class="custom-dropdown-item-list" id="dropdown_list_bus_from"></ul>
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
                                                      <input type="text" id="bus_to_input" placeholder="Điểm Đến" data-testid="SearchWidget.bus_to" data-id="SearchWidget.bus_to">
                                                  </div>
                                              </div>
                                              <ul class="custom-dropdown-menu bus-dropdown-menu">
                                                  <li class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                                      <ul class="custom-dropdown-item-list" id="dropdown_list_bus_to"></ul>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="departure-bus-date flex-sum-left">
                                  <i class="fa fa-calendar" aria-hidden="true"></i> <input type="text" name="" id="date-from" placeholder="">
                              </div>
                              <div class="departure-bus-date-right flex-sum-left">
                                  <i class="fa fa-plus" aria-hidden="true"></i> <input type="text" name="" id="date-to" placeholder="Thêm ngày về">
                              </div>
                          </div>
                      </div>
                      <div class="right-search-widget-inner-content">
                          <button>Tìm kiếm</button>
                      </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="pills-plane" role="tabpanel" aria-labelledby="pills-plane-tab" tabindex="0">
                  <div class="ant-row-flex search-widget-inner-content">
                      <div class="left-ant-row-flex">
                          <div class="wrap-left-ant-row-flex" style="position: relative;">
                              <div class="departure-plane-flex flex-sum-left">
                                  <div class="custom-input-col custom-plane-from-input-col">
                                      <div class="custom-select-wrapper custom-plane-from-select-wrapper">
                                          <div class="custom-select-container custom-plane-from-select">
                                              <div class="custom-input-container">
                                                  <div class="custom-icon-container">
                                                  <img class="custom-pickup-icon" src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg" alt="pickup-icon" width="24" height="24">
                                                  </div>
                                                  <div class="custom-input-section">
                                                  <input type="text" id="plane_from_input" placeholder="Nơi Xuất Phát" data-testid="SearchWidget.plane_from" data-id="SearchWidget.plane_from">
                                                  </div>
                                              </div>
                                              <ul class="custom-dropdown-menu plane-dropdown-menu">
                                                  <li class="custom-dropdown-item-group ">
                                                  <div class="custom-dropdown-item-group-title">Thành phố sân bay phổ biến</div>
                                                  <ul class="custom-dropdown-item-list" id="dropdown_list_plane_from"></ul>
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
                                                      <input type="text" id="plane_to_input" placeholder="Nơi Đến" data-testid="SearchWidget.plane_to" data-id="SearchWidget.plane_to">
                                                  </div>
                                              </div>
                                              <ul class="custom-dropdown-menu plane-dropdown-menu">
                                                  <li class="custom-dropdown-item-group">
                                                      <div class="custom-dropdown-item-group-title">Thành phố sân bay phổ biến</div>
                                                      <ul class="custom-dropdown-item-list" id="dropdown_list_plane_to"></ul>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="departure-plane-date flex-sum-left">
                                  <i class="fa fa-calendar" aria-hidden="true"></i> <input type="date" name="" id="" placeholder="">
                              </div>
                              <div class="departure-plane-date-right flex-sum-left">
                                  <i class="fa fa-plus" aria-hidden="true"></i> <input type="text" name="" id="" placeholder="Thêm ngày về">
                              </div>
                          </div>
                      </div>
                      <div class="right-search-widget-inner-content">
                          <button>Tìm kiếm</button>
                      </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="pills-train" role="tabpanel" aria-labelledby="pills-train-tab" tabindex="0">
                  <div class="ant-row-flex search-widget-inner-content">
                      <div class="left-ant-row-flex">
                          <div class="wrap-left-ant-row-flex" style="position: relative;">
                              <div class="departure-train-flex flex-sum-left">
                                  <div class="custom-input-col custom-train-from-input-col">
                                      <div class="custom-select-wrapper custom-train-from-select-wrapper">
                                          <div class="custom-select-container custom-train-from-select">
                                              <div class="custom-input-container">
                                                  <div class="custom-icon-container">
                                                  <img class="custom-pickup-icon" src="https://229a2c9fe669f7b.cmccloud.com.vn/svgIcon/pickup_vex_blue_24dp.svg" alt="pickup-icon" width="24" height="24">
                                                  </div>
                                                  <div class="custom-input-section">
                                                  <input type="text" id="train_from_input" placeholder="Ga Đi" data-testid="SearchWidget.train_from" data-id="SearchWidget.train_from">
                                                  </div>
                                              </div>
                                              <ul class="custom-dropdown-menu train-dropdown-menu">
                                                  <li class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
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
                                                      <input type="text" id="train_to_input" placeholder="Ga Đến" data-testid="SearchWidget.train_to" data-id="SearchWidget.train_to">
                                                  </div>
                                              </div>
                                              <ul class="custom-dropdown-menu train-dropdown-menu">
                                                  <li class="custom-dropdown-item-group custom-dropdown-item-group-xe-tau">
                                                      <ul class="custom-dropdown-item-list" id="dropdown_list_train_to"></ul>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="departure-train-date flex-sum-left">
                                  <i class="fa fa-calendar" aria-hidden="true"></i> <input type="text" name="" id="" placeholder="">
                              </div>
                              <div class="departure-train-date-right flex-sum-left">
                                  <i class="fa fa-plus" aria-hidden="true"></i> <input type="text" name="" id="" placeholder="Thêm ngày về">
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
  </div>

<!-- JS xe khách -->
<script>
  const busCities = [
    { name: "Hồ Chí Minh" },
    { name: "Hà Nội" },
    { name: "Đà Nẵng" },
    { name: "Đà Lạt" },
    { name: "Nha Trang" },
    { name: "Phú Quốc" }
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
  const planeCities = [
    { name: "Hồ Chí Minh", code: "SGN", airport: "Sân bay Tân Sơn Nhất" },
    { name: "Hà Nội", code: "HAN", airport: "Sân bay Nội Bài" },
    { name: "Đà Nẵng", code: "DAD", airport: "Sân bay Đà Nẵng" },
    { name: "Đà Lạt", code: "DLI", airport: "Sân bay Liên Khương" },
    { name: "Nha Trang", code: "CXR", airport: "Sân bay Cam Ranh" },
    { name: "Phú Quốc", code: "PQC", airport: "Sân bay Phú Quốc" }
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
  const trainCities = [
    { name: "Hồ Chí Minh" },
    { name: "Hà Nội" },
    { name: "Đà Nẵng" },
    { name: "Đà Lạt" },
    { name: "Nha Trang" },
    { name: "Phú Quốc" }
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

<script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moon-time@2.4.0/calculate.min.js"></script>
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
    new AirDatepicker('#date-from', {
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

@endsection
