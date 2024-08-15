<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vé Xe Rẻ</title>

    <meta name="title" content="tieu de" />
    <meta name="description" content="mo ta" />
    <meta name="keywords" content="tu khoa tim kiem 1, tu khoa tim kiem 2,... " />

    <meta property="og:title" content="tieu de">
    <meta property="og:description" content="mo ta" />
    <meta property="og:keywords" content="tu khoa tim kiem 1, tu khoa tim kiem 2,... ">
    <meta property="og:url" content="url san pham">
    <meta property="og:image" content="hinh anh">
    <meta property="og:type" content="website" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesmobile.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />
</head>

<body>

    <!-- header-mobile -->
    <div class="topnav">
        <div class="togglenav-mobile">
            <span class="menu-icon" onclick="toggleNav()">&#9776;</span>
        </div>
        <div class="logo-mobi">
            <a href="#">
                <img src="{{ asset('images/logo-header.svg') }}" alt="logo">
            </a>
        </div>
        <div class="login-mobi">
            <a href="">Đăng Nhập</a>
        </div>
    </div>

    <!-- menu-mobile -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href=""><i class="fas fa-home"></i> Trang chủ</a>
        <a href=""><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập/Đăng ký</a>
        <a href=""><i class="fa fa-car" aria-hidden="true"></i> Thuê xe</a>
        <a href=""><i class="fa fa-plane" aria-hidden="true"></i> Vé máy bay</a>
        <a href=""><i class="fa fa-gift" aria-hidden="true"></i> Khám phá ưu đãi</a>
    </div>

    <!-- body -->
    <div id="main">
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
                    <a href="" class="nav-link nav-link-header">
                        Đơn hàng của tôi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link nav-link-header">
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
                        <i class="fa fa-phone" aria-hidden="true"></i> Hotline 1:<a href="tel:"> 0967041900</a><br>
                        <i class="fa fa-phone" aria-hidden="true"></i> Hotline 2:<a href="tel:"> 123-456-7890</a>
                    </div>
                </li>
                <li class="Navbar2__GroupItem-sa2air-4 hEFchp menu-group-item">
                    <div class="Navbar2__ButtonHotline-sa2air-8 ijyXqH">
                        <p class="base__Headline03-sc-1tvbuqk-15 boemqK">Đăng nhập</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- slide -->
        <div class="total-slide">
            <div class="img-slide">
                <img src="{{ asset('images/slide.jpg') }}" alt="slide" height="20px">
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

            <!-- slide -->
            <div class="total-slide position-relative">
                <div class="container-airlinetickets position-absolute   start-50 translate-middle" style="margin-top:-200px;">
                    @include('components.search_component', [
                    'params' => [],
                    ])
                </div>
            </div>
        </div>
    </div>
    <div class="formCard">
    @if($allPosts->isNotEmpty())
        @php
            $groupedPosts = $allPosts->groupBy('type');
        @endphp

        @foreach($groupedPosts as $type => $posts)
            <div class="nigt">
                <div class="text-card blogs">
                    <p class="card-type popular-route-label">{{ $typeMapping[$type] ?? ucfirst($type) }}</p>
                </div>
                <div class="blogs">
                    <div class="scroll-container popular">
                        <div class="container item-card-list">
                            @foreach($posts as $post)
                                @if($post->status !== 'archived')
                                    <div class="card-wrapper">
                                        <a href="{{ route('blog.content', ['slug' => \Illuminate\Support\Str::slug($post->title, '-')]) }}">
                                            <div class="card card-item">
                                                <img src="{{ Storage::url($post->picture) }}" alt="{{ $post->title }}" class="card-image">
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




    <!-- Footer -->
    <div id="main-footer">
        <h2>Công ty TNHH Thương Mại Dịch Vụ Vexere</h2>
        <p>Địa chỉ đăng ký kinh doanh: 8C Chữ Đồng Tử, Phường 7, Quận Tân Bình, Thành Phố Hồ Chí Minh, Việt Nam</p>
        <p>Địa chỉ: Lầu 2, tòa nhà H3 Circo Hoàng Diệu, 384 Hoàng Diệu, Phường 6, Quận 4, Tp. Hồ Chí Minh, Việt Nam</p>
        <p>Tầng 3, Toà nhà 101 Láng Hạ, Phường Láng Hạ, Quận Đống Đa, Hà Nội, Việt Nam </p>
        <p>Giấy chứng nhận ĐKKD số 0315133726 do Sở KH và ĐT TP. Hồ Chí Minh cấp lần đầu ngày 27/6/2018</p>
        <p>Bản quyền © 2024 thuộc về <a href="">Vexere.com</a></p>
    </div>



    <script>
        document.querySelector('.Navbar2__ButtonHotline-sa2air-8').addEventListener('click', function(event) {
            event.stopPropagation();
            this.nextElementSibling.classList.toggle('show');
        });

        document.querySelector('.contact-dropdown').addEventListener('click', function(event) {
            event.stopPropagation();
        });

        // Đóng dropdown nếu người dùng nhấp ra ngoài
        window.onclick = function(event) {
            var dropdowns = document.getElementsByClassName("contact-dropdown");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }

        function toggleNav() {
            const sidenav = document.getElementById("mySidenav");
            if (sidenav.style.width === "100%") {
                sidenav.style.width = "0";
            } else {
                sidenav.style.width = "100%";
            }
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    @push('page-scripts')
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moon-time@2.4.0/calculate.min.js"></script>
    <script>
        // data load search component
        // list data areas
        const busCities = @json($list_areas ?? []);
        const dateTo = @json($params -> dateTo ?? "");
    </script>
    <script src="{{ asset('js/search_component.js') }}"></script>
    @endpush
</body>

</html>