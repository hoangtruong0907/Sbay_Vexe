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
                'key' => 1,
            ])
        </div>
        <div class="img-slide">
            <img src="{{asset('storage/images/banner/'. $banner_current->slide_path)}}" alt="slide">
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
    <div class="formCard">
        @if (isset($allPosts) && $allPosts->count())
            @php
                $groupedPosts = $allPosts->groupBy('type');
            @endphp

            @foreach ($groupedPosts as $type => $posts)
                <div class="nigt">
                    <div class="text-card blogs">
                        <p class="card-type popular-route-label">{{ $typeMapping[$type] ?? ucfirst($type) }}</p>
                    </div>
                    <div class="blogs">
                        <div class="scroll-container popular">
                            <div class="container item-card-list">
                                @foreach ($posts as $post)
                                    @if ($post->status !== 'archived')
                                        <div class="card-wrapper">
                                            <a
                                                href="{{ route('blog.content', ['slug' => \Illuminate\Support\Str::slug($post->title, '-')]) }}">
                                                <div class="card card-item">
                                                    <img src="{{ Storage::url($post->picture) }}" alt="{{ $post->title }}"
                                                        class="card-image">
                                                    <div class="card-content">
                                                        <div class="text-nvc">
                                                            <h4 class="card-title">{{ $post->title }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No popular blog posts found.</p>
        @endif
    </div>

@endsection
@push('page-scripts')
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moon-time@2.4.0/calculate.min.js"></script>
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
@endpush
