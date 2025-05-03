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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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

            .floating-contact-group {
                top: 80% !important;
            }

            .hide-on-mobile {
                display: none !important;
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

        .footer-link {
            color: #cc0033;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #ff66b2;
            text-decoration: underline;
        }

        .footer-icon {
            color: #cc0033;
            font-size: 1.5rem;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .footer-icon:hover {
            transform: scale(1.2);
            color: #ff66b2;
        }

        .profile-box img {
            height: 180px;
            transition: transform 0.3s ease;
            border-radius: none;
        }

        .profile-box:hover img {
            transform: scale(1.03);
        }

        .profile-box p {
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }

        .contact-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(204, 0, 51, 0.4);
        }

        /* Nút giữa màn hình bên phải */
        .floating-contact-group {
            position: fixed;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 999;
        }

        /* Nút back-to-top ở góc phải dưới */
        .back-to-top {
            position: fixed;
            bottom: 80px;
            right: 15px;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: rgb(241, 179, 179);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999;
            transition: transform 0.3s ease;
        }

        .back-to-top:hover {
            transform: scale(1.1);
        }

        /* Dùng chung cho icon hình tròn */


        .circle-pulse {
            position: relative;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ff7e7e;
            /* Màu nền chính */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: visible;
        }

        .circle-pulse img {
            animation: shake-hand-strong 0.8s infinite ease-in-out;
            transform-origin: center center;
        }

        @keyframes shake-hand-strong {
            0% {
                transform: rotate(0deg);
            }

            20% {
                transform: rotate(10deg);
            }

            40% {
                transform: rotate(-10deg);
            }

            60% {
                transform: rotate(8deg);
            }

            80% {
                transform: rotate(-8deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }


        .circle-pulse span {
            position: absolute;
            border: 2px solid rgba(255, 126, 126, 0.5);
            border-radius: 50%;
            animation: ripple 1.5s linear infinite;
            pointer-events: none;
        }

        .circle-pulse span:nth-child(1) {
            width: 100%;
            height: 100%;
            animation-delay: 0s;
        }

        .circle-pulse span:nth-child(2) {
            width: 100%;
            height: 100%;
            animation-delay: 0.5s;
        }

        .circle-pulse span:nth-child(3) {
            width: 100%;
            height: 100%;
            animation-delay: 1s;
        }

        @keyframes ripple {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .zalo-button {
            background-color: #0084ff;
            color: #fff;
            padding: 10px 14px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
        }

        .zalo-button:hover {
            background-color: #006edc;
            color: #fff;
            text-decoration: none;
        }

        .zalo-button i {
            font-size: 16px;
        }

        .footer-logo-wrapper {
            position: relative;
            display: inline-block;
            overflow: hidden;
            height: 80px;
            animation: logo-shake 3s infinite ease-in-out;
        }

        .footer-logo-glow {
            height: 100%;
            display: block;
            position: relative;
            z-index: 1;
            transition: transform 0.4s ease-in-out;
            filter: drop-shadow(0 0 12px #ff3366);
            /* hiệu ứng sáng chói */
        }

        .footer-logo-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            transform: skewX(-20deg);
            z-index: 2;
            animation: shine 2.5s infinite;
        }

        @keyframes shine {
            0% {
                left: -75%;
            }

            100% {
                left: 125%;
            }
        }

        @keyframes logo-shake {

            0%,
            100% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(1px, -1px);
            }

            50% {
                transform: translate(-1px, 1px);
            }

            75% {
                transform: translate(1px, 1px);
            }
        }

        .footer-logo-wrapper:hover .footer-logo-glow {
            transform: scale(1.05);
        }


        /* Logo hiệu ứng ánh sáng và rung */
        .header-logo-wrapper {
            position: relative;
            width: 70px;
            height: 70px;
            overflow: hidden;
            animation: shake 4s infinite ease-in-out;
        }

        .header-logo-glow {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: drop-shadow(0 0 5px #fff) brightness(1.2);
        }

        /* Ánh sáng lướt ngang */
        .header-logo-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: -60%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            transform: skewX(-20deg);
            animation: shine 2.5s infinite;
        }


        /* Ánh sáng chạy ngang */
        @keyframes shine {
            0% {
                left: -60%;
            }

            100% {
                left: 120%;
            }
        }

        /* Menu item glowing + gạch chân động */
        .navbar-nav .nav-link {
            color: #fff;
            position: relative;
            transition: all 0.3s ease-in-out;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #fff;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover {
            color: #fff;
            text-shadow: 0 0 5px #ff7e7e, 0 0 10px #ff7e7e;
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
            background-color: #fff;
        }

        /* Nút "Đặt lịch ngay" ánh sáng chạy */
        .btn-danger {
            position: relative;
            overflow: hidden;
            background-color: #ff0055;
            border: none;
            font-weight: 700;
            transition: background-color 0.3s;
        }

        .btn-danger::before {
            content: "";
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transform: skewX(-20deg);
            animation: shine 2.5s infinite;
        }

        .btn-danger:hover {
            background-color: #cc0033;
            box-shadow: 0 0 10px #ff7e7e, 0 0 15px #ff7e7e;
            color: white;
        }

        /* Toggler menu (Mobile) hiệu ứng zoom */
        .navbar-toggler {
            border: 2px solid white;
            transition: transform 0.3s;
        }

        .navbar-toggler:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm custom-navbar ">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Nút menu nằm trước (mobile) nhưng sau (desktop) -->
            <button class="navbar-toggler order-1 order-lg-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Logo nằm sau (mobile) nhưng trước (desktop) -->
            <a class="navbar-brand order-2 order-lg-1 ms-2 ms-lg-0 header-logo-wrapper" href="{{ url('/') }}">
                <img src="{{ asset('storage/uploads/logo.png') }}" alt="Logo Cửa Hàng" class="header-logo-glow">
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
                        <a class="nav-link" href="{{ url('/gioi-thieu') }}">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dao-tao-hoc-vien') }}">Đào tạo học viên</a>
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

    <!-- profile -->
    <section class="profile-links py-5" style="background: #fff5f9;">
        <div class="container">
            <div class="row justify-content-center g-4">

                <!-- Facebook -->
                <div class="col-12 col-sm-6 col-md-4 text-center">
                    <a href="https://www.facebook.com/luuminhcang?locale=vi_VN" target="_blank"
                        class="profile-box d-block mb-2">
                        <img src="{{ asset('storage/uploads/imagefb.png') }}" alt="Facebook Cá nhân"
                            class="img-fluid shadow profile-img">
                    </a>
                    <a href="https://www.facebook.com/luuminhcang?locale=vi_VN" target="_blank"
                        class="btn btn-outline-primary btn-sm fw-bold" style="    color: var(--bs-btn-hover-color);
                        background-color: var(--bs-btn-hover-bg); border-color: var(--bs-btn-hover-border-color);">
                        <i class="bi bi-facebook me-1"></i> Theo dõi Facebook
                    </a>
                </div>

                <!-- TikTok -->
                <div class="col-12 col-sm-6 col-md-4 text-center">
                    <a href="https://tiktok.com/@minhanhtattoo" target="_blank" class="profile-box d-block mb-2">
                        <img src="{{ asset('storage/uploads/imagett.png') }}" alt="TikTok Minh Anh"
                            class="img-fluid shadow profile-img">
                    </a>
                    <a href="https://tiktok.com/@minhanhtattoo" target="_blank" class="btn btn-danger btn-sm px-4"
                        style="background-color: #fe2c55;">
                        Follow TikTok
                    </a>
                </div>

                <!-- Zalo -->
                <div class="col-12 col-sm-6 col-md-4 text-center">
                    <a href="https://zalo.me/0395352488" target="_blank" class="profile-box d-block mb-2">
                        <img src="{{ asset('storage/uploads/image.png') }}" alt="Zalo Minh Anh"
                            class="img-fluid shadow profile-img">
                    </a>
                    <a href="https://zalo.me/0395352488" target="_blank" class="zalo-button">
                        <i class="bi bi-chat-dots me-2"></i> Nhắn tin Zalo
                    </a>
                </div>


            </div>
        </div>
    </section>



    <!-- footer -->
    <footer class="footer text-dark pt-5 pb-4" style="background-color: #fff5f9;">
        <div class="container">
            <div class="row align-items-start">
                <!-- Cột 1: Thông tin liên hệ -->
                <div class="col-md-4 mb-4 text-center text-md-start">
                    <h6 class="fw-bold text-uppercase mb-3" style="color: #cc0033;">Liên hệ</h6>
                    <ul class="list-unstyled small">
                        <li><strong>Địa chỉ:</strong> Đường Thuận Giao 21, P. Thuận Giao, Thuận An, Bình Dương</li>
                        <li><strong>Hotline:</strong> <a href="tel:0395352488" class="footer-link">0395 352 488</a> – <a
                                href="tel:0372625001" class="footer-link">0372 625 001</a></li>
                        <li><strong>Email:</strong> <a href="mailto:minhanh2468001@gmail.com"
                                class="footer-link">minhanh2468001@gmail.com</a></li>
                        <li><strong>Website:</strong> <a href="https://minhanhtattoo.com" class="footer-link"
                                target="_blank">minhanhtattoo.com</a></li>
                    </ul>
                </div>

                <!-- Cột 2: Logo & slogan -->
                <!-- Cột 2: Logo & slogan đặt giữa và hiệu ứng -->
                <div class="col-md-4 mb-4 text-center position-relative">
                    <div class="footer-logo-wrapper mx-auto">
                        <img src="{{ asset('storage/uploads/logoden.jpg') }}" alt="Minh Anh Tattoo Logo"
                            class="footer-logo-glow">
                    </div>
                    <h5 class="mt-3 text-uppercase fw-bold" style="color: #cc0033;">Minh Anh Tattoo</h5>
                    <p class="small mb-0">Xăm hình không đau, không lấy tiền!</p>
                </div>




                <!-- Cột 3: Mạng xã hội -->
                <div class="col-md-4 mb-4 text-center text-md-start">
                    <h6 class="fw-bold text-uppercase mb-3" style="color: #cc0033;">Kết nối với chúng tôi</h6>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <a href="https://facebook.com/wwminhamh" target="_blank" class="footer-icon"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://tiktok.com/@minhanhtattoo" target="_blank" class="footer-icon"><i
                                class="bi bi-tiktok"></i></a>
                        <a href="https://maps.app.goo.gl/hBqFEgHZzRptjE8Y9" target="_blank" class="footer-icon"><i
                                class="bi bi-geo-alt-fill"></i></a>
                    </div>
                </div>

            </div>

            <hr style="border-color: #fc0000;">
            <div class="text-center small text-muted">
                &copy; {{ date('Y') }} Minh Anh Tattoo. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- Nút hỗ trợ nổi góc phải -->
    <!-- Nút hỗ trợ nổi góc phải -->
    <!-- Khối các nút mạng xã hội giữa màn hình -->
    <div class="floating-contact-group">
        <a href="https://zalo.me/0395352488" class="circle-pulse" target="_blank">
            <img src="{{ asset('storage/uploads/zl.png') }}" alt="Zalo" style="width: 28px; height: 28px; z-index: 2;">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <a href="tel:0395352488" class="circle-pulse hide-on-mobile" target="_blank">
            <img src="{{ asset('storage/uploads/hl.png') }}" alt="Hotline"
                style="width: 28px; height: 28px; z-index: 2;">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <a href="https://www.facebook.com/luuminhcang?locale=vi_VN" class="circle-pulse hide-on-mobile" target="_blank">
            <img src="{{ asset('storage/uploads/mess.png') }}" alt="Messenger"
                style="width: 28px; height: 28px; z-index: 2;">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>

    <!-- Nút quay lên đầu trang vẫn giữ ở góc phải dưới -->
    <a href="#" class="contact-icon back-to-top">
        <i class="bi bi-chevron-up text-light"></i>
    </a>
    <!-- gg map -->

    <div class="container-fluid p-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d518.755812648889!2d106.71790058211843!3d10.9541544825681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d1f05918d9af%3A0xb1f97160ddddbc19!2sMinhanhtattoo!5e0!3m2!1svi!2s!4v1746249009917!5m2!1svi!2s"
            width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v19.0"
        nonce="YOUR_NONCE_VALUE">
        </script>
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
        document.querySelector('.back-to-top')?.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>

</html>