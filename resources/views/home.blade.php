<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- ✅ Cần thiết cho mobile-first -->
    <title>Web Xăm Hình</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@600;700;800&display=swap" rel="stylesheet">



    <style>
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

        .banner-img {
            width: 100%;
            height: 30vh;
            object-fit: cover;
        }

        .section-title {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0;
            position: relative;
            text-align: center;
        }

        .section-title h2 {
            font-size: 22px;
            font-weight: bold;
            color: #ff0066;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 15px;
            background: #fff;
            position: relative;
            z-index: 1;
            line-height: 1.4;
        }

        .section-title::before,
        .section-title::after {
            content: "";
            flex: 1;
            height: 2px;
            background: #ccc;
        }

        .card-body {
            background-color: #ff7e7e30;
        }

        .card-img-top {
            transition: transform 0.3s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card,
        .card-img-top {
            border: none !important;
            border-radius: 0 !important;
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
            /* Đường kẻ trắng mờ */
        }

        .navbar-nav .nav-item:last-child {
            border-bottom: none;
            /* Không kẻ ở mục cuối */
        }

        .navbar-nav .nav-link {
            padding: 12px 0;
        }

        .intro-heading {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            font-family: 'Orbitron', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 28px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 1.4;
        }

        .intro-heading .text-red {
            color: #ff7e7e;
        }

        .intro-heading .text-black {
            color: #000;
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

        .pagination {
            justify-content: center;
        }

        .pagination .page-link {
            padding: 6px 12px;
            font-size: 14px;
            color: #000;
        }

        .pagination .page-item.active .page-link {
            background-color: #ff7e7e;
            border-color: #ff7e7e;
            color: white;
        }

        .pagination .page-link:hover {
            background-color: #f0f0f0;
        }

        @media (min-width: 992px) {
            .banner-img {
                height: 90vh;
            }

            .section-title h2 {
                font-size: 36px;
                letter-spacing: 2px;
                padding: 0 20px;
            }

            .section-title::before,
            .section-title::after {
                margin: 0 20px;
            }

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

            .card-img-top {
                height: 350px !important;
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

        }

        .card-title {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-size: 14px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: #ff0066;
            margin-bottom: 0;
        }

        .card-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .card-title a:hover {
            color: #ff7e7e;
        }

        #product-list .row {
            margin-left: 0;
            margin-right: 0;
        }

        #product-list [class^="col-"] {
            padding-left: 5px;
            padding-right: 5px;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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
                    <form action="https://zalo.me/0395352488" method="GET" class="m-0">
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
                <form action="https://zalo.me/0395352488" method="GET" class="d-flex d-none d-lg-flex">
                    <button class="btn btn-danger" type="submit">Đặt lịch ngay</button>
                </form>

            </div>
        </div>
    </nav>
    <div class="menu-overlay"></div>



    <!-- Banner -->
    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-100 banner-img" alt="Banner">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Giới thiệu -->
    <div class="container my-5" id="about-section">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-md-6 mb-4 mb-md-0 text-center px-3">
                <div class="intro-heading">
                    <span class="text-black">GIOI THIEU</span>
                    <span class="text-red">MINH ANH</span>
                    <span class="text-black">TATTOO</span>
                </div>



                <p class="mt-3" style="font-size: 20px; line-height: 1.8; color: #333;">
                    Được thành lập vào năm 2018, Minh Anh Tattoo tự hào là cửa hàng xăm nghệ thuật chuyên nghiệp tại
                    Bình Dương.
                    Với đội ngũ nghệ nhân có kinh nghiệm, tay nghề cao cùng không gian hiện đại, chúng tôi cam kết mang
                    đến sự hài lòng tuyệt đối cho khách hàng.
                </p>
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <div style="flex: 1; height: 1px; background: #333;"></div>
                    <a href="{{ url('/gioi-thieu') }}" class="mx-3 text-decoration-none"
                        style="font-weight: bold; font-size: 14px; color: #000;">
                        XEM THÊM
                    </a>
                    <div style="flex: 1; height: 1px; background: #333;"></div>
                </div>
            </div>

            <div class="col-12 col-lg-6 text-center">
                <div class="about-image-wrapper">
                    <img src="{{ asset('storage/uploads/about2.jpg') }}" alt="Giới thiệu Minh Anh Tattoo"
                        class="img-fluid img-about">
                </div>
            </div>


        </div>
    </div>
    <!-- TÁC PHẨM TATTOO -->
    <div class="container my-5" id="product-section">
        <div id="product-list">
            @include('partials.product-items', ['categories' => $categories, 'categoryProducts' => $categoryProducts])
        </div>
    </div>



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
        document.addEventListener('click', function (e) {
            const isPagination = e.target.tagName === 'A' && e.target.closest('#pagination-links');
            if (isPagination) {
                e.preventDefault();
                const url = e.target.href;

                fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                    .then(res => res.text())
                    .then(html => {
                        document.getElementById('product-list').innerHTML = html;
                        history.pushState({}, '', url); // ✅ Cập nhật URL SEO-friendly
                    });
            }
        });

    </script>

</body>

</html>