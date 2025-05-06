@extends('layouts.app')

@section('title', 'Dịch vụ xỏ khuyên đẹp, an toàn – Minh Anh Tattoo')

@section('content')
    <style>
        .hero-banner {
            position: relative;
            overflow: hidden;
        }

        .hero-banner img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 500px;
            filter: brightness(60%);
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .hero-text p {
            font-size: 1.1rem;
        }

        .btn-danger {
            font-weight: 600;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 30px;
            text-align: center;
        }

        .img-shadow {
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-box {
            text-align: center;
            padding: 20px;
        }

        .feature-box i {
            font-size: 2rem;
            color: #e83e8c;
            margin-bottom: 10px;
        }

        .gallery img {
            width: 100%;
            height: 60vh;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        @media (max-width: 991.98px) {
            .gallery img {
                height: 25vh;
            }
        }
    </style>

    <!-- HERO BANNER -->
    <div class="hero-banner">
        <img src="{{ asset('storage/uploads/1.jpg') }}" alt="Xỏ khuyên Hero">
        <div class="hero-text">
            <h1>Xỏ khuyên cá tính – An toàn tuyệt đối</h1>
            <p>Minh Anh Tattoo – Nơi bạn được là chính mình</p>
            <a href="#pricing" class="btn btn-danger mt-3">Xem bảng giá</a>
        </div>
    </div>

    <!-- GIỚI THIỆU + SƠ ĐỒ -->
    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('storage/uploads/tonghop.jpg') }}" class="img-fluid img-shadow" alt="Sơ đồ vị trí">
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Vị trí xỏ phổ biến</h2>
                <p>Dù bạn yêu thích phong cách nhẹ nhàng, cá tính hay nổi bật, Minh Anh Tattoo luôn có lựa chọn phù hợp để
                    bạn thể hiện cá tính riêng. Dưới đây là sơ đồ các vị trí xỏ khuyên – chọn nơi bạn thích nhé!</p>
                <a href="#gallery" class="btn btn-outline-danger mt-3 d-block mx-auto"
                    style="width: 10px; min-width: 220px;">
                    Xem hình ảnh thực tế
                </a>
            </div>
        </div>
    </section>

    <!-- BẢNG GIÁ -->
    <section id="pricing" class="container my-5">
        <h2 class="section-title">Bảng giá xỏ khuyên (bao gồm khuyên)</h2>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-danger">
                    <tr>
                        <th>Vị trí xỏ</th>
                        <th>Giá từ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dái tai (Lobe)</td>
                        <td>200.000đ</td>
                    </tr>
                    <tr>
                        <td>Helix, Tragus, Flat</td>
                        <td>250.000đ</td>
                    </tr>
                    <tr>
                        <td>Daith, Rook, Snug</td>
                        <td>300.000đ</td>
                    </tr>
                    <tr>
                        <td>Conch, Industrial, Môi, Mũi</td>
                        <td>300.000đ</td>
                    </tr>
                    <tr>
                        <td>Xỏ rốn, chân mày</td>
                        <td>350.000đ</td>
                    </tr>
                    <tr>
                        <td>Combo 2 lỗ</td>
                        <td>500.000đ</td>
                    </tr>
                    <tr>
                        <td>Combo 3 lỗ</td>
                        <td>700.000đ</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- LÝ DO CHỌN -->
    <section class="container my-5">
        <h2 class="section-title">Tại sao nên chọn Minh Anh Tattoo?</h2>
        <div class="row text-center">
            <div class="col-md-4 feature-box">
                <i class="bi bi-shield-check"></i>
                <p>Dụng cụ vô trùng 100%</p>
            </div>
            <div class="col-md-4 feature-box">
                <i class="bi bi-gem"></i>
                <p>Khuyên Titan chống viêm – không dị ứng</p>
            </div>
            <div class="col-md-4 feature-box">
                <i class="bi bi-heart-pulse"></i>
                <p>Bảo hành rơi khuyên, viêm nhẹ</p>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section id="gallery" class="container my-5">
        <h2 class="section-title">Hình ảnh khách hàng</h2>
        <div class="row g-4 gallery">
            <div class="col-md-3 col-6">
                <img src="{{ asset('storage/uploads/2.jpg') }}" alt="Rốn">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{ asset('storage/uploads/3.jpg') }}" alt="Mũi">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{ asset('storage/uploads/4.jpg') }}" alt="Môi">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{ asset('storage/uploads/5.jpg') }}" alt="Chân mày">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{ asset('storage/uploads/10.jpg') }}" alt="Chân mày">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{ asset('storage/uploads/13.jpg') }}" alt="Chân mày">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{ asset('storage/uploads/9.jpg') }}" alt="Chân mày">
            </div>
            <div class="col-md-3 col-6">
                <img src="{{ asset('storage/uploads/11.jpg') }}" alt="Chân mày">
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="container text-center my-5">
        <h2 class="section-title">Inbox ngay để đặt lịch xỏ khuyên!</h2>
        <p>🎯 Tư vấn miễn phí chọn khuyên theo dáng tai, phong cách, cá tính<br>
            👉 Inbox Fanpage hoặc Zalo để giữ chỗ ngay hôm nay</p>
        <a href="https://zalo.me/0372625001" class="btn btn-danger btn-lg mt-3">Liên hệ qua Zalo</a>
    </section>
@endsection