<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
</body>
</html>
