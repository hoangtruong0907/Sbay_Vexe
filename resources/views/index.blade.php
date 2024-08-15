@extends('layouts.app')

@section('title', 'Trang chủ')
@section('styles')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/air-datepicker.css') }}">
@endsection

@section('content')
<!-- slide -->
<div class="total-slide position-relative">
    <div class="container-airlinetickets position-absolute top-50 start-50 translate-middle">
        @include('components.search_component', [
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
// data load search component
// list data areas
const busCities = @json($list_areas ?? []);
const dateTo = @json($params->dateTo ?? "");
const dateFrom = @json($params->dateFrom ?? "");

// list data route
const trainStations = @json($trainStations ?? []);
</script>
<script src="{{ asset('js/search_component.js') }}"></script>
@endpush
