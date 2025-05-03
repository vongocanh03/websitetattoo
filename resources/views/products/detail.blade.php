@extends('layouts.app')

@section('title', $product->name . ' - Minh Anh Tattoo')

@section('content')

    <!-- Font đẹp, hỗ trợ tiếng Việt -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&family=Orbitron:wght@700&display=swap"
        rel="stylesheet">

    <style>
        body {
            background-color: #fff;
            color: #2c2c2c;
            font-family: 'Be Vietnam Pro', sans-serif;
        }

        .product-detail {
            padding: 20px;
            background: linear-gradient(145deg, #ffffff, #ffe6e6);
            border-top: 5px solid  #ffffff;
            border-bottom: 5px solid #ff0000;
            box-shadow: 0 8px 20px rgba(255, 0, 0, 0.1);
        }

        .product-image img,
        .product-image video {
            width: 100%;
            border: 2px solid #ff7e7e;
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
        }

        .product-info {
            padding: 20px;
        }

        h1 {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ff0000;
            font-family: 'Be Vietnam Pro', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-left: 6px solid #ff7e7e;
            padding-left: 12px;
            margin-bottom: 20px;
        }

        .category {
            font-size: 1rem;
            color: #444;
            margin: 10px 0 20px;
            font-style: italic;
            border-left: 4px solid #ff7e7e;
            padding-left: 10px;
        }

        .description {
            max-height: 120px;
            overflow: hidden;
            position: relative;
            line-height: 1.6;
            transition: max-height 0.3s ease;
        }

        .description.expanded {
            max-height: none;
        }

        .show-more-btn {
            background-color: #ff0000;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            font-weight: bold;
            font-size: 14px;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(255, 0, 0, 0.3);
            transition: background 0.3s ease;
        }

        .show-more-btn:hover {
            background-color: #cc0000;
        }

        .show-more-btn .icon {
            margin-left: 5px;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .description.expanded+.show-more-btn .icon {
            transform: rotate(180deg);
        }

        @media (min-width: 768px) {
            .product-info {
                margin-top: 0;
            }

            h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 991.98px) {
            h1 {
                font-size: 30px;
            }
        }
    </style>

    <div class="container product-detail">
        <div class="row align-items-start">
            <div class="col-12 col-md-6 mb-4">
                <div class="product-image">
                    @if($product->media)
                                    @php
                                        $extension = strtolower(pathinfo($product->media, PATHINFO_EXTENSION));
                                    @endphp

                                    @if(in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                        <img src="{{ asset('storage/' . $product->media) }}" alt="{{ $product->name }}">
                                    @elseif(in_array($extension, ['mp4', 'avi', 'mov']))
                                        <video controls>
                                            <source src="{{ asset('storage/' . $product->media) }}" type="video/{{ $extension }}">
                                            Trình duyệt không hỗ trợ video.
                                        </video>
                                    @endif
                    @endif
                </div>
            </div>

            <div class="col-12 col-md-6 product-info">
                <h1>{{ $product->name }}</h1>
                <div class="category">Thể loại: {{ $product->category ? $product->category->name : 'Chưa phân loại' }}</div>
                <div id="description" class="description"> {!! $product->description !!}</div>
                <div class="d-flex flex-wrap gap-2 mt-3">
                    <button class="show-more-btn" onclick="toggleDescription()">
                        Xem thêm <span class="icon">▼</span>
                    </button>
                    <a href="https://zalo.me/0372625001" class="show-more-btn text-decoration-none d-inline-block text-center">
                        Đặt lịch xăm
                    </a>

                </div>

            </div>
        </div>
    </div>

    <script>
        function toggleDescription() {
            const desc = document.getElementById('description');
            desc.classList.toggle('expanded');
        }
    </script>
@endsection