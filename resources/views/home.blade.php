@extends('layouts.app')

@section('title', 'Trang chủ')
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fade-in-image {
            opacity: 0;
            animation: fadeInSmooth 2s ease-in-out forwards;
        }

        @keyframes fadeInSmooth {
            0% {
                opacity: 0;
                transform: scale(1.02);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 991.98px) {
            .banner-img {
                height: 250px !important;
            }
        }
    </style>
@endpush
@section('content')

    <!-- Banner -->
    <!-- Banner -->
    <!-- Banner -->
    <div class="swiper mySwiper mb-4" style="width: 100%; max-height: 650px;">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $banner->image) }}" class="w-100 banner-img fade-in-image lazyload"
                        data-src="{{ asset('storage/' . $banner->image) }}" alt="Banner" loading="lazy"
                        style="object-fit: cover; width: 100%; height: 650px;">

                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 5000, // thời gian giữa các slide
                disableOnInteraction: false,
            },
            speed: 1200, // tốc độ chuyển slide (ms) → chậm và mượt hơn
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            }
        });

    </script>
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
                    <div style="flex: 1; height: 1px; background: #ff7e7e;"></div>
                    <a href="{{ url('/gioi-thieu') }}" class="mx-3 text-decoration-none"
                        style="font-weight: bold; font-size: 14px; color: #ff0055;">
                        XEM THÊM
                    </a>
                    <div style="flex: 1; height: 1px; background: #ff7e7e;"></div>
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
    <!-- ĐÀO TẠO HỌC VIÊN -->
    <div class="container my-5" id="training-section">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-lg-6 text-center">
                <div class="about-image-wrapper">
                    <img src="{{ asset('storage/uploads/daotao2.jpg') }}" alt="Đào tạo học viên Tattoo"
                        class="img-fluid img-about">
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-md-0 text-center px-3">
                <div class="intro-heading">
                    <span class="text-black">KHOA HOC</span>
                    <span class="text-red">DAO TAO</span>
                    <span class="text-black">TATTOO</span>
                </div>

                <p class="mt-3" style="font-size: 20px; line-height: 1.8; color: #333;">
                    Tại Minh Anh Tattoo, chúng tôi không chỉ là một cửa hàng xăm hình – chúng tôi là nơi khơi nguồn đam mê
                    và chắp cánh cho những nghệ sĩ tattoo tương lai. Chương trình đào tạo được thiết kế bài bản từ cơ bản
                    đến nâng cao,
                    kết hợp giữa lý thuyết và thực hành thực tế, giúp học viên nắm vững kỹ thuật, thẩm mỹ và tư duy nghệ
                    thuật.
                    Dù bạn là người mới bắt đầu hay muốn nâng tầm tay nghề, Minh Anh Tattoo sẽ đồng hành cùng bạn trên hành
                    trình chinh phục nghề xăm chuyên nghiệp.
                </p>

                <div class="d-flex align-items-center justify-content-center mt-4">
                    <div style="flex: 1; height: 1px; background: #ff7e7e;"></div>
                    <a href="{{ url('/dao-tao-hoc-vien') }}" class="mx-3 text-decoration-none"
                        style="font-weight: bold; font-size: 14px; color: #ff0055;">
                        XEM THÊM KHÓA HỌC
                    </a>
                    <div style="flex: 1; height: 1px; background: #ff7e7e;"></div>
                </div>
            </div>


        </div>
    </div>

@endsection