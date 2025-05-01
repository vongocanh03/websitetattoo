<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web Xăm Hình')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&family=Orbitron:wght@700&display=swap"
        rel="stylesheet">
    @stack('styles')

    <style>
        @media (max-width: 991px) {
            .navbar-nav .nav-link {
                margin-right: 10px;
            }
        }

        ///////////////
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        .navbar {
            background-color: #ff7e7e !important;
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .navbar-brand img {
            height: 50px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px #ff0000;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: bold;
            margin-right: 20px;
            text-transform: uppercase;
            position: relative;
            transition: all 0.3s ease;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            /* ✅ đặt sát chân chữ */
            left: 0;
            width: 100%;
            /* ✅ gạch chỉ dài bằng chữ */
            height: 2px;
            background: #ff0000;
            transform: scaleX(0);
            /* Ẩn gạch */
            transform-origin: left;
            transition: transform 0.3s ease;

        }

        .navbar-nav .nav-link:hover::after {
            transform: scaleX(1);
            left: 0;
            background: #ff0000;
        }


        .navbar-nav .nav-link:hover {
            color: #ff0000;
        }

        .btn-danger {
            background-color: #ff0000;
            border: none;
            font-weight: bold;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn-danger:hover {
            background-color: #cc0000;
        }




        .navbar-toggler {
            padding: 6px 10px;
            border-radius: 4px;
            border: 2px solid white;
            margin-left: 20px;
        }

        .navbar-toggler:focus {
            box-shadow: none !important;
        }

        button.navbar-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
        }

        /* Ẩn mặc định khi chưa show */
        .slide-left {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            width: auto;
            height: 100vh;
            background-color: #7c3d3dc2;
            z-index: 999;
            padding: 20px;
        }

        /* Khi mở (Bootstrap thêm class .show) */
        .slide-left.show {
            transform: translateX(0);
        }

        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            background: rgba(0, 0, 0, 0.5);
            z-index: 998;
            display: none;
        }

        .menu-overlay.show {
            display: block;
        }

        .navbar-nav .nav-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            flex: 0 0 auto;
        }

        .navbar-nav .nav-item:last-child {
            border-bottom: none;
            /* Không kẻ ở mục cuối */
        }

        .navbar-nav .nav-link {

            font-size: 14px;
            padding: 10px 12px;
        }

        /* Giúp chia đều các mục trong header */
        .navbar-nav {
            flex-wrap: nowrap;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE 10+ */
        }

        .navbar .btn-danger {
            padding: 10px 14px;
            font-size: 14px;
            white-space: nowrap;
            margin-left: 10px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }




        @media (min-width: 992px) {

            .slide-left {
                transform: none !important;
                position: static;
                height: auto;
                background: transparent;
                width: auto;
                padding: 0;
            }

            .navbar-nav .nav-item {
                border-bottom: none;
                /* Đường kẻ trắng mờ */
            }

            .about-image-wrapper {
                display: inline-block;
                overflow: hidden;
                border-radius: 50%;
                border: 6px solid #ff7e7e;
                box-shadow: 0 0 25px rgba(0, 0, 0, 0.25);
                max-width: 360px;
                /* tăng kích thước tối đa */
                width: 100%;
                aspect-ratio: 1 / 1;
                transition: transform 0.3s ease;
            }

            .about-image-wrapper:hover {
                transform: scale(1.05);
            }

            .img-about {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .navbar-nav .nav-link {
                padding: 10px 12px;
                font-size: 14px;
                white-space: nowrap;
            }
        }

        @media (max-width: 991.98px) {
            .custom-navbar {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
                min-height: 56px;
            }

            .custom-navbar .navbar-brand img {
                height: 48px !important;
            }

            .custom-navbar .navbar-toggler {
                padding: 2px 6px !important;
                border-width: 1px !important;
            }

            .custom-navbar .container {
                padding-left: 8px !important;
                padding-right: 8px !important;
            }

            .col-md-6 h3,
            .col-md-6 h4 {
                font-size: 30px;
            }

            .col-md-6 p {
                font-size: 20px;
            }

            .navbar-nav {
                flex-direction: column;
                /* Mobile vẫn giữ dạng danh sách dọc */
            }

            .navbar-nav .nav-link {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm custom-navbar">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Nút menu nằm trước (mobile) nhưng sau (desktop) -->
            <button class="navbar-toggler order-1 order-lg-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Logo nằm sau (mobile) nhưng trước (desktop) -->
            <a class="navbar-brand order-2 order-lg-1 ms-2 ms-lg-0" href="{{ url('/') }}">
                <img src="{{ asset('storage/uploads/logo.png') }}" alt="Logo Cửa Hàng">
            </a>

            <!-- Menu chính -->
            <div class="collapse navbar-collapse order-3 slide-left" id="navbarNav">
                <div class="d-flex justify-content-between align-items-center d-lg-none mb-3">
                    <form action="https://zalo.me/0395352488" class="m-0">
                        <button class="btn btn-danger btn-sm" type="submit">Đặt lịch ngay</button>
                    </form>
                    <button id="closeMenu" class="btn btn-link text-white fs-3" style="border: none;">&times;</button>
                </div>


                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">Đào tạo học viên</a>
                    </li>
                    @foreach($categories as $category)
                        <li class="nav-item">
                            @if($category->id == 3)
                                <a class="nav-link"
                                    href="{{ route('category.products', $category->id) }}">{{ $category->name }}</a>
                            @else
                                <a class="nav-link" href="{{ url('/#category-' . $category->id) }}">{{ $category->name }}</a>
                            @endif
                        </li>
                    @endforeach

                </ul>
                <form action="https://zalo.me/0395352488" class="d-flex d-none d-lg-flex">
                    <button class="btn btn-danger" type="submit">Đặt lịch ngay</button>
                </form>

            </div>
        </div>
    </nav>
    <div class="menu-overlay"></div>


    <!-- Nội dung trang -->
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggler = document.querySelector('.navbar-toggler');
            const navMenu = document.getElementById('navbarNav');
            const overlay = document.querySelector('.menu-overlay');

            toggler.addEventListener('click', function () {
                overlay.classList.toggle('show');
            });

            overlay.addEventListener('click', function () {
                navMenu.classList.remove('show');
                overlay.classList.remove('show');
            });
        });
        document.getElementById('closeMenu')?.addEventListener('click', function () {
            document.getElementById('navbarNav').classList.remove('show');
            document.querySelector('.menu-overlay')?.classList.remove('show');
        });
        document.addEventListener("DOMContentLoaded", function () {
            // Scroll đến danh mục nếu có hash trong URL
            const hash = window.location.hash;
            if (hash && document.querySelector(hash)) {
                const target = document.querySelector(hash);
                setTimeout(() => {
                    target.scrollIntoView({ behavior: 'smooth' });
                }, 300); // Delay để trang kịp render nội dung
            }
        });
    </script>
</body>

</html>