@section('title', 'Trang chủ')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/air-datepicker.css') }}">
@endsection
@extends('layouts.app')

@section('content')
    <!-- slide -->
    <div class="total-slide">
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
    <div class="d-flex justify-content-center">
        <input id="date" type="text">
    </div>
@endsection
@section('scripts')
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
        new AirDatepicker('#date', {
            inline: true,
            locale: vn,
            // timepicker: true,
            timeFormat: 'hh:mm AA',
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
