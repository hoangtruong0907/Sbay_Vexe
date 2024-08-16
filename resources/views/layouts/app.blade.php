<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SbayVeXe | @yield('title', 'Trang chủ')</title>

    <meta name="title" content="tieu de" />
    <meta name="description" content="mo ta" />
    <meta name="keywords" content="tu khoa tim kiem 1, tu khoa tim kiem 2,... " />

    <meta property="og:title" content="tieu de">
    <meta property="og:description" content="mo ta" />
    <meta property="og:keywords" content="tu khoa tim kiem 1, tu khoa tim kiem 2,... ">
    <meta property="og:url" content="url san pham">
    <meta property="og:image" content="hinh anh">
    <meta property="og:type" content="website" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('styles')
</head>
<body>
    @include('layouts.header')
    <div class="content">
    </div>
        @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @stack('page-scripts')
    <script>
    $(document).ready(function () {
        $('.banner-slider').slick({
            infinite: true,
            speed: 1500,
            slidesToShow: 1,
            slidesToScroll: 1,
            cssEase: 'ease',  // Thêm thuộc tính mượt
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',egphp
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            
        });
    });
</script>
       <script>
        $(document).ready(function() {
    $('.faq-question').click(function() {
        
        $('.faq-answer').slideUp();
        $('.faq-icon').text('▼');
        
        // Kiểm tra nếu phần trả lời của câu hỏi này đang mở
        if ($(this).next('.faq-answer').is(':visible')) {
            
            $(this).next('.faq-answer').slideUp();
        } else {
            
            $(this).next('.faq-answer').slideDown();
            
            $(this).find('.faq-icon').text('▲');
        }
    });
});
    </script>
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
    {{-- user account --}}
    <script src="{{ asset('js/frontend/user.js') }}"></script>
    {{-- login with google  --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @auth
            var userPhone = '{{ Auth::user()->phone ?? 'null' }}';

            if (userPhone === 'null') {
                var myModal = new bootstrap.Modal(document.getElementById('addPhonenumberModal'));
                myModal.show();
            }
        @endauth
        });
    </script>

</body>

</html>
