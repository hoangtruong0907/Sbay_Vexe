@extends('layouts.app')

<style>
  .custom-input-col {
    display: flex;
    flex-direction: column;
  }

  .custom-select-wrapper {
    position: relative;
  }

  .custom-select-container {
    display: flex;
    align-items: center;
  }

  .custom-input-container {
    display: flex;
    align-items: center;
  }

  .custom-icon-container {
    margin-left: 10px;
  }

  .custom-input-section {
    flex-grow: 1;
  }

  .custom-dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: white;
    z-index: 1000;
    list-style-type: none;
    padding-left: 0px;
    margin-top: 43px;
  }

  .custom-dropdown-item-group {
    min-width: 800px;
    display: block !important;
  }

  .custom-dropdown-item-group-title {
    font-weight: bold;
    padding: 8px 8px 8px 25px;
    background: #f0f0f0;
  }

  .custom-dropdown-item-list {
    list-style: none;
    margin: 0;
    padding: 0;
    max-height: 300px;
    overflow-y: auto;
  }

  .custom-dropdown-item {
    padding: 8px;
    cursor: pointer;
    background: #f0f0f0;
  }

  .custom-dropdown-item:hover{
    background: #fff;
  }

  .custom-item-container {
    display: flex;
    align-items: center;
  }

  .custom-icon-section {
    margin-right: 8px;
  }

  .custom-city-title {
    font-weight: bold;
  }

  .custom-swap-container {
    position: absolute;
    top: 50%;
    left: 100%;
    transform: translate(-50%, -50%);
    cursor: pointer;
    z-index: 1;
  }

  .custom-switch-icon-container i {
    padding-right: 14px !important;
    padding-left: 15px !important;
  }

  .custom-switch-icon-container {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f0f0f0;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    cursor: pointer;
  }

  .flex-sum-left {
    position: relative;
  }

  #airlinetickets {
    background: rgb(242, 242, 242);
    padding: 20px 0px;
  }

  .container-airlinetickets {
    max-width: 1026px;
    margin: auto;
    display: block;
    background-color: #fff;
    border-radius: 10px;
    padding: 10px 0px 0px;
  }

  .nav-airline {
    justify-content: center;
    border-bottom: 1px solid #ccc;
  }

  .nav-airline .nav-link.active {
    background-color: #fff !important;
    color: #000 !important;
    border-bottom: 2px solid blue;
    border-radius: 0px;
  }

  .nav-airline .nav-link {
    color: #000 !important;
    font-size: 17px !important;
  }

  .nav-airline li {
    margin: 0px 10px;
  }

  .tab-content .active {
    padding: 12px 12px 16px;
    border-radius: 0px 0px 12px 12px;
    background: white;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px;
  }

  .ant-row-flex {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    display: flex;
  }

  .left-ant-row-flex {
    border: 1px solid rgb(224, 224, 224);
    border-radius: 8px;
    margin-right: 12px !important;
    margin: 0px;
    width: calc(100% - 152px);
  }

  .wrap-left-ant-row-flex {
    display: flex;
    color: #000;
    align-items: center;
    height: 100%;
    flex-wrap: wrap;
  }

  .right-search-widget-inner-content button {
    height: 100%;
    padding: 12px 32px;
    border-radius: 8px;
    background: rgb(255, 211, 51);
    text-transform: unset;
    font-size: 17px;
    font-weight: bold;
    border: 0px;
  }

  .flex-sum-left {
    width: calc(100% / 4);
    display: flex;
    align-items: center;
  }

  .flex-sum-left input {
    width: 100%;
    border: 0px;
    padding: 5px 0px 5px 10px;
    font-size: 16px;
    font-weight: 600;
  }

  .flex-sum-left i {
    padding-right: 7px;
    padding-left: 25px;
    font-size: 17px;
  }

  .departure-bus-flex i {
    color: #2474E5;
  }

  .destination-bus-flex i {
    color: #EB5757;
  }

  .departure-train-flex i {
    color: #2A9D8F;
  }

  .destination-train-flex i {
    color: #E76F51;
  }

  .custom-dropdown-item-group-xe-tau{
    min-width: 100%;
    max-width: 100%;
  }

  .custom-icon-container i{
    color: #E76F51;
  }

  .custom-content-section p{
    margin-bottom: 0rem !important;
  }
</style>

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
                                  <i class="fa fa-calendar" aria-hidden="true"></i> <input type="date" name="" id="" placeholder="">
                              </div>
                              <div class="departure-bus-date-right flex-sum-left">
                                  <i class="fa fa-plus" aria-hidden="true"></i> <input type="text" name="" id="" placeholder="Thêm ngày về">
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
                                  <i class="fa fa-calendar" aria-hidden="true"></i> <input type="date" name="" id="" placeholder="">
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

@endsection
