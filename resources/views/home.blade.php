@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')

    <!-- Banner -->
    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-100 banner-img" alt="Banner">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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

@endsection

