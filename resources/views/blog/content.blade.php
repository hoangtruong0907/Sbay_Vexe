@extends('layouts.app') <!-- Đặt ở đầu trang -->

@section('title', 'Trang chủ')

@section('styles') <!-- Nếu có styles bổ sung -->
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/stylesmobile.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />
@endsection
<style>
    footer {
        display: none !important;
    }
    
</style>
@section('content')
    <!-- Phần nội dung -->
    <div class="CMSPostpage__PostPage-sc-1mccuz3-1 hgcnFg">
        <div class="Layout__Container-vf1wbr-0 hCVqtJ layout-container CMSPostpage__Container-sc-1mccuz3-2 hYjWkQ">
            @if(isset($blog))
            <div class="scroll-list scroll-vertical-list">
                <div class="post-title">
                    <a href="http://127.0.0.1:8000/" class="btn btn-back-home">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <p class="base__Heading01-sc-1tvbuqk-4 iavTwq color--darkness">{{ $blog->title }}</p>
                    <img src="{{ Storage::url($blog->picture) }}" alt="{{ $blog->title }}" class="card-image">
                </div>
                <div class="post-content">
                    <div class="color--darkness">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
            @else
            <p>Blog post not found.</p>
            @endif
        </div>
    </div>

    <div class="relatedContent">
    <h1 class="popular-route-label route-label contentdb" style="margin-left: 0px">Nội dung liên quan</h1> 
    <div class="scroll-container fg">
        <div class="container item-card-list">
            @foreach($relatedContent as $item)
                <div class="text-card">
                    <div class="card-wrapper" id="card-{{ $item->id }}">
                    <a href="{{ route('blog.content', ['slug' => \Illuminate\Support\Str::slug($item->title, '-')]) }}" class="native">
                            <div class="card card-item" style="margin-top:50px;">
                                <img src="{{ Storage::url($item->picture) }}" alt="{{ $item->title }}" class="card-image">
                                <div class="card-content">
                                    <div class="text-nvc">
                                        <h4 class="card-title">{{ $item->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
            {{ $relatedContent->links() }} <!-- Hiển thị phân trang -->
        </div>
    </div>
</div>

    @if($showButtonOnly)
    <div class="CMSPostpage__PostFooter-sc-1mccuz3-4 jvMYTT">
        <div class="post-footer">
            <button type="button" class="ant-btn cta-button">
                <p class="base__ButtonLabel-sc-1tvbuqk-18 idyddq color--black">DÙNG ƯU ĐÃI NGAY</p>
            </button>
        </div>
    </div>
    @else
    <div class="CMSPostpage__PostFooter-sc-1mccuz3-4 jvMYTT">
        <div class="post-footer">
            <button type="button" class="ant-btn cta-button">
                <p class="base__ButtonLabel-sc-1tvbuqk-18 idyddq color--black">ĐẶT VÉ NGAY</p>
            </button>
        </div>
    </div>
    @endif

@endsection

@section('scripts') <!-- Nếu có script bổ sung -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9O1d+3B7d7rF1tkZZ8b5eXKpZzYL9bG7NQf7vq18cW8b8j7xf9I" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-W8fX3F7AdGReJABiOWt2Bz1sB9hR7gT+Z2MOET8iYBIBDR4jow+qp8CF0sbY5hQYw" crossorigin="anonymous"></script>
@endsection
