@extends('layouts.app')

@section('title', 'Trang chủ')
@section('styles')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/air-datepicker.css') }}">
    {{-- icon trong dropdown --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    /* search route component */
 /* bg button */
 .bt-dropdown-background:hover {
    background-color: #e6f2ff;
}

/* Nút tăng giảm */
.btn-circle {
    width: 30px;
    height: 30px;
    padding: 0;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #e6f2ff;
    position: relative;
    overflow: hidden;
    transition: background-color 0.3s ease;
}

.btn-circle:hover,
.btn-circle:focus {
    background-color: #d9ecff;
}

/* Hiệu ứng xung quanh */
.btn-circle:active::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 120%;
    height: 120%;
    background: rgba(0, 123, 255, 0.2);
    /* Màu sắc xung quanh */
    border-radius: 50%;
    transform: translate(-50%, -50%);
    animation: pulse 0.6s ease-out;
    z-index: 0;
}

.btn-circle .bi {
    position: relative;
    z-index: 1;
}

/* Hiệu ứng xung quanh */
@keyframes pulse {
    0% {
        transform: scale(0);
        opacity: 1;
    }

    100% {
        transform: scale(1);
        opacity: 0;
    }
}

/* Nút bị vô hiệu hóa */
.btn-circle.custom_disabled {
    background-color: #f0f0f0;
    border-color: rgba(0, 0, 0, .65);
}

.btn-circle.custom_disabled:hover,
.btn-circle.custom_disabled:focus {
    border: none !important;
}

.btn-circle.custom_disabled .bi-dash {
    color: rgba(0, 0, 0, .65) !important;
}

.btn-circle .active {
    background: rgb(227, 237, 252);
    color: rgb(36, 116, 229);
}

/* kích thước dropdown không bị thu nhỏ */
.dropdown-menu {
    min-width: 400px;
    width: auto;
    max-width: 450px;
}

.custom-input_number {
    border: none;
    outline: none;
    -webkit-appearance: none;
    /* Chrome */
    appearance: none;
}

.custom-input_number::-webkit-inner-spin-button,
.custom-input_number::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.custom-tab_pane {
    padding: 12px 12px 16px;
    border-radius: 0px 0px 12px 12px;
    background: white;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px;
}


.custom-left_search {
    border: 1px solid rgb(224, 224, 224);
    border-radius: 8px;
    margin-right: 12px !important;
}

.custom-address_input {
    z-index: 3;
    min-height: 1px;
    box-sizing: border-box;
    padding-right: 0;
    padding-left: 0;
}

.custom-input_box {
    font-size: 12px;
    font-weight: 400;
    line-height: 16px;
    margin-bottom: 0px;
    height: 72px;
    padding: 8px 32px 8px 4px;
}

/* input city*/
.custom-input_box input {
    font-weight: 500;
    outline: none;
    width: 100%;
    border: 0px;
    padding: 0px;
    background-color: unset;
    font-size: 16px;
    line-height: 16px;
    color: rgb(20, 20, 20);
}

.departure-train-flex input {
    border-radius: 3px 0px 0px 3px;
}

/* active input */
.forcut-bar {
    display: none;
    background: rgb(36, 116, 229);
    height: 3px;
    position: absolute;
    left: 0px;
    bottom: 0px;
    width: 100%;
}

.forcut-border {

    background: rgb(224, 224, 224);
    height: 0.5px;
    position: absolute;
    left: 0px;
    bottom: 0px;
    width: 100%;
}

/* hiển thị active input */
.custom-input_box input:focus~.forcut-bar {
    display: block;
}

/* label */
.custom-input-container input:placeholder-shown~label {
    transform: translate(0px, 0.9rem) scale(1.35);
}

.custom-input_box input:placeholder-shown~label {
    cursor: text;
    max-width: 66.66%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    transform-origin: left bottom;
    transform: translate(0px, 0.8rem) scale(1.33);
}

.custom-input_box label {
    letter-spacing: 0px;
}

.custom-input_box label,
.custom-input_box input {
    transition: 0.2s;
    touch-action: manipulation;
}

.hTYbup {
    font-size: 12px;
    font-weight: 400;
    line-height: 16px;
    margin-bottom: 0px;
}

.custom-input_box input:not(:placeholder-shown)+label,
.custom-input-container input:focus+label {
    transform: translate(0px, 0px) scale(1);
}

.custom-input_box input:not(:placeholder-shown)+label,
.custom-input_box input:focus+label {
    transform: translate(0px, 0px) scale(1);
    cursor: pointer;
}

.custome-departure-date-select {
    height: 72px;
    padding-left: 12px;
    flex: 1 1 0%;
}

.custom-font-medium {
    font-weight: 500 !important;
    font-size: 16px !important;
    line-height: 24px !important;
    color: rgb(20, 20, 20) !important;
}

.custom-placeholder-color::placeholder {
    color: var(--bs-primary) !important;
    opacity: 1;
}

.arrow_icon {
    margin-left: 4px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}

.arrow_icon.focus {
    transform: translateY(10%) rotateX(180deg);
}

.arrow_icon.focus svg path {
    fill: rgb(36, 116, 229);
}

.custom_h1 {
    font-size: 34px;
    font-weight: 500;
    margin-bottom: 0px;
    color: white;
    text-align: center;
    line-height: 1;
    white-space: nowrap;
    text-shadow: rgba(0, 0, 0, 0.25) 0px 2px 4px;
}

.sub_ {
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    text-align: center;
    font-feature-settings: "liga" 0;
    color: rgb(255, 255, 255);
    text-shadow: rgba(0, 0, 0, 0.25) 0px 2px 4px;
}

.custom-text-shadow {
    line-height: 24px;
    font-feature-settings: "liga" 0;
    text-shadow: rgba(0, 0, 0, 0.25) 0px 2px 4px;
} 
/* responsive */
/* box search component */
@media (min-width: 992px) { 
    .custom-dropdown-menu {
        min-width: 424px;
    } 
}  
@media (min-width: 1101px) {
    .left-ant-row-flex {
        margin-right: 12px;
    }
}

@media (max-width: 1100px) {
    .left-ant-row-flex {
        margin-bottom: 12px;
    }
}

@media (max-width: 1100px) {
    .custom-swap-container {
        top: 52%;
        right: 0%;
        display: inline-block; 
    }
}
@media (max-width: 768px) {
    .custom-swap-container {
        top: 80%; 
        right: 5%; 
        transform: rotate(90deg);
       
    }
} 
</style>
    @endsection

@section('content')
    <!-- slide -->
    <div class="total-slide position-relative">
        {{-- <div class="d-flex flex-column align-items-center p-0 gap-2 mb-28 d-none d-md-flex mt-sm-5">
            <h1 class="m-0 p-0 custom_h1">
                Đặt vé máy bay giá rẻ</h1>
            <p class="m-0 p-0 fw-medium fs-5 text-center text-white custom-text-shadow">Giảm 20K/ghế cho vé rẻ nhất của
                Vietjet Air</p>
        </div> --}}
        <div
            class="container-airlinetickets position-absolute top-50 start-50 translate-middle mt-xl-0">
            @include('train.components.search', [
                'params' => [],
            ])
        </div>
        <div class="img-slide">
            <img src="{{ asset('images/slide.jpg') }}" alt="slide">
        </div>
        <div class="wrap-criteria">
            <div class="criteria-slide">
                <img src="{{ asset('images/criteria1.svg') }}" alt="criteria">
                <p>Chắc chắn có chỗ</p>
            </div>
            <div class="criteria-slide">
                <img src="{{ asset('images/criteria2.svg') }}" alt="criteria">
                <p>Hỗ Trợ 24/7</p>
            </div>
            <div class="criteria-slide">
                <img src="{{ asset('images/criteria3.svg') }}" alt="criteria">
                <p>Nhiều ưu đãi</p>
            </div>
            <div class="criteria-slide">
                <img src="{{ asset('images/criteria4.svg') }}" alt="criteria">
                <p>Thanh toán đa dạng</p>
            </div>
        </div>
    </div>
@endsection
@push('page-scripts')
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moon-time@2.4.0/calculate.min.js"></script>
    <script>
        const dateTo = @json($params->dateTo ?? '');
        const dateFrom = @json($params->dateFrom ?? '');
        const trainStations = @json($trainStations ?? []);
    </script>
    {{-- Active button --}}
    <script>
        // Thanh gạch ngang trong input
        document.addEventListener('DOMContentLoaded', () => {
            const elements = {
                trainFromInput: document.getElementById('train_from_input'),
                trainToInput: document.getElementById('train_to_input'),
                trainDateFromInput: document.getElementById('train_date_from'), // Phần tử mới
                trainDateToInput: document.getElementById('train_date_to'),
                forcutBarFrom: document.querySelector('.forcut-bar_form'),
                forcutBarTo: document.querySelector('.forcut-bar_to'),
                forcutBarDateFrom: document.querySelector('.forcut-bar_date_from'), // Phần tử mới
                forcutBarDateTo: document.querySelector('.forcut-bar_date_to'),
                labelFrom: document.querySelector('label[for="train_from_input"]'),
                labelTo: document.querySelector('label[for="train_to_input"]')
            };

            // Function to show or hide forcut-bar
            const showForcutBar = (bar) => bar.style.display = 'block';
            const hideForcutBar = (bar) => bar.style.display = 'none';

            // Hiển thị thẻ forcut-bar khi click vào input hoặc label
            const setupEventListeners = (input, label, bar) => {
                if (input && bar) {
                    input.addEventListener('click', () => showForcutBar(bar));

                    // Chỉ thêm sự kiện cho label nếu label tồn tại
                    if (label) {
                        label.addEventListener('click', () => showForcutBar(bar));
                    }
                }
            };

            setupEventListeners(elements.trainFromInput, elements.labelFrom, elements.forcutBarFrom);
            setupEventListeners(elements.trainToInput, elements.labelTo, elements.forcutBarTo);
            setupEventListeners(elements.trainDateFromInput, null, elements.forcutBarDateFrom); // Phần tử mới
            setupEventListeners(elements.trainDateToInput, null, elements.forcutBarDateTo);

            // Ẩn thẻ forcut-bar khi click ra ngoài
            document.addEventListener('mousedown', (event) => {
                const {
                    trainFromInput,
                    forcutBarFrom,
                    trainToInput,
                    forcutBarTo,
                    trainDateFromInput,
                    forcutBarDateFrom,
                    trainDateToInput,
                    forcutBarDateTo
                } = elements;

                if (!trainFromInput.contains(event.target) && !forcutBarFrom.contains(event.target)) {
                    hideForcutBar(forcutBarFrom);
                }

                if (!trainToInput.contains(event.target) && !forcutBarTo.contains(event.target)) {
                    hideForcutBar(forcutBarTo);
                }

                if (!trainDateFromInput.contains(event.target) && !forcutBarDateFrom.contains(event
                        .target)) {
                    hideForcutBar(forcutBarDateFrom); // Phần tử mới
                }

                if (!trainDateToInput.contains(event.target) && !forcutBarDateTo.contains(event.target)) {
                    hideForcutBar(forcutBarDateTo);
                }
            });
        });
        //active nút dropdown
        document.addEventListener('DOMContentLoaded', () => {
            const arrowIcon = document.querySelector('.arrow_icon');
            const dropdownButton = document.getElementById('dropdownPassenger');

            dropdownButton.addEventListener('click', () => {
                // Toggle the focus class on the arrow icon
                arrowIcon.classList.toggle('focus');
            });
        });
    </script>
    {{-- Xử lý tăng giảm số lượng người trong dropdown --}}
    <script>
        // Ngăn chặn sự kiện nhấp chuột đóng menu thả xuống
        document.getElementById('personTypeList').addEventListener('click', function(event) {
            event.stopPropagation();
        });
        //Xử lý sự kiện khi nhấn nút + hoặc -
        document.addEventListener('DOMContentLoaded', function() {
            const maxTotal = 4; // Tổng số lượng tối đa
            const alertMessage = "Mỗi lần đặt chỉ được tối đa 4 vé";

            const updateTotalPassengerCount = () => {
                const counts = [
                    parseInt(document.getElementById('numberValueAdult').value) || 0,
                    parseInt(document.getElementById('numberValueChildren').value) || 0,
                    parseInt(document.getElementById('numberValueSeniors').value) || 0,
                    parseInt(document.getElementById('numberValueStudent').value) || 0,
                    parseInt(document.getElementById('numberValueUnion_member').value) || 0
                ];
                const total = counts.reduce((acc, count) => acc + count, 0);
                document.getElementById('passengerCount').textContent = `${total} Hành khách`;

                // Cập nhật trạng thái của các nút giảm và tăng
                document.querySelectorAll('.decrement-btn').forEach(button => {
                    const input = document.querySelector(button.getAttribute('data-target'));
                    button.classList.toggle('custom_disabled', parseInt(input.value) <= parseInt(input
                        .getAttribute('min')));
                });
                document.querySelectorAll('.increment-btn').forEach(button => {
                    button.classList.toggle('custom_disabled', total >= maxTotal);
                });
            };

            document.querySelectorAll('.increment-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const input = document.querySelector(this.getAttribute('data-target'));
                    const currentTotal = Array.from(document.querySelectorAll(
                            '.custom-input_number'))
                        .reduce((acc, input) => acc + parseInt(input.value) || 0, 0);

                    if (currentTotal < maxTotal) {
                        let value = parseInt(input.value) || 0;
                        input.value = value + 1;
                        updateTotalPassengerCount();
                    } else {
                        alert(
                            alertMessage
                        ); // Hiển thị thông báo khi đạt giá trị tối đa chưa chỉn sửa lại

                    }
                });
            });

            document.querySelectorAll('.decrement-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const input = document.querySelector(this.getAttribute('data-target'));
                    let value = parseInt(input.value) || 0;
                    if (value > parseInt(input.getAttribute('min'))) {
                        input.value = value - 1;
                        updateTotalPassengerCount();
                    }
                });
            });

            // Initialize total count on page load
            updateTotalPassengerCount();
        });
    </script>
    <script src="{{ asset('js/search_train.js') }}"></script>
@endpush
