<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $blog->title ?? 'Blog Post' }}</title>

    <meta name="title" content="{{ $blog->title ?? 'Blog Post' }}" />
    <meta name="description" content="{{ $blog->description ?? 'Mô tả của bài viết' }}" />
    <meta name="keywords" content="{{ $blog->keywords ?? 'từ khóa tìm kiếm 1, từ khóa tìm kiếm 2, ...' }}" />

    <meta property="og:title" content="{{ $blog->title ?? 'Blog Post' }}">
    <meta property="og:description" content="{{ $blog->description ?? 'Mô tả của bài viết' }}" />
    <meta property="og:keywords" content="{{ $blog->keywords ?? 'từ khóa tìm kiếm 1, từ khóa tìm kiếm 2, ...' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ Storage::url($blog->picture ?? 'default.jpg') }}">
    <meta property="og:type" content="website" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesmobile.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />
</head>

<body>

    <div class="total-header">
        <div class="left-header">
            <div class="logo-header">
                <a href="#">
                    <img src="{{ asset('images/logo-header.svg') }}" alt="logo">
                </a>
            </div>
            <div class="slogan-header">
                Cam kết hoàn 150% nếu nhà xe không cung cấp dịch vụ vận chuyển
            </div>
        </div>
        <ul class="right-header nav">
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-header">
                    Đơn hàng của tôi
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-header">
                    Mở bán vé trên Vexere
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-header dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Trở thành đối tác
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item dropdown-item-header" href="#link1"> Phần mềm nhà xe</a></li>
                    <li><a class="dropdown-item dropdown-item-header" href="#link2"> Phần mềm đại lý</a></li>
                </ul>
            </li>
            <li class="Navbar2__GroupItem-sa2air-4 hEFchp menu-group-item">
                <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                    <div class="material-icons-wrapper md-20 icon-phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p class="base__Headline03-sc-1tvbuqk-15 boemqK">Hotline 24/7</p>
                </div>
                <div class="contact-dropdown">
                    <i class="fa fa-phone" aria-hidden="true"></i> Hotline 1:<a href="tel:0967041900"> 0967041900</a><br>
                    <i class="fa fa-phone" aria-hidden="true"></i> Hotline 2:<a href="tel:123-456-7890"> 123-456-7890</a>
                </div>
            </li>
            <li class="Navbar2__GroupItem-sa2air-4 hEFchp menu-group-item">
                <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                    <p class="base__Headline03-sc-1tvbuqk-15 boemqK">Đăng nhập</p>
                </div>
            </li>
        </ul>
    </div>

    <div class="CMSPostpage__PostPage-sc-1mccuz3-1 hgcnFg">
        <div class="Layout__Container-vf1wbr-0 hCVqtJ layout-container CMSPostpage__Container-sc-1mccuz3-2 hYjWkQ">
            @if(isset($blog))
            <div class="scroll-list scroll-vertical-list">
                <div class="post-title">
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


    <div class="relatedContent ">
        <div class=" scroll-container">
            <div class="container item-card-list">
                @foreach($relatedContent as $item)
                <div class="text-card " >
                    <div class="hCVqtJ">
                        <h1 class="popular-route-label route-label">Nội dung liên quan</h1>
                    </div>
                </div>
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
                @endforeach
                {{ $relatedContent->links() }} <!-- Hiển thị phân trang -->
            </div>
        </div>
    </div>


    <!-- <p>Show Button Only: {{ $showButtonOnly ? 'True' : 'False' }}</p> -->

    @if($showButtonOnly)
    {{-- Hiển thị nút "DÙNG ƯU ĐÃI NGAY" nếu loại bài viết là "incentives" --}}
    <div class="CMSPostpage__PostFooter-sc-1mccuz3-4 jvMYTT">
        <div class="post-footer">
            <button type="button" class="ant-btn cta-button">
                <p class="base__ButtonLabel-sc-1tvbuqk-18 idyddq color--black">DÙNG ƯU ĐÃI NGAY</p>
            </button>
        </div>
    </div>
    @else
    {{-- Hiển thị nút "ĐẶT VÉ NGAY" nếu không phải là bài viết loại "incentives" --}}
    <div class="CMSPostpage__PostFooter-sc-1mccuz3-4 jvMYTT">
        <div class="post-footer">
            <button type="button" class="ant-btn cta-button">
                <p class="base__ButtonLabel-sc-1tvbuqk-18 idyddq color--black">ĐẶT VÉ NGAY</p>
            </button>
        </div>
    </div>
    @endif
    @if(!$relatedContent->isEmpty())


    @endif




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9O1d+3B7d7rF1tkZZ8b5eXKpZzYL9bG7NQf7vq18cW8b8j7xf9I" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-W8fX3F7AdGReJABiOWt2Bz1sB9hR7gT+Z2MOET8iYBIBDR4jow+qp8CF0sbY5hQYw" crossorigin="anonymous"></script>

</body>

</html>