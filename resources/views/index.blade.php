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
@endsection
