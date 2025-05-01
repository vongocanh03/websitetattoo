@extends('layouts.app')

@section('title', $product->name . ' - Minh Anh Tattoo')

@section('content')
    <style>
        body {
            background-color: #fff;
            color: #333;
            font-family: 'Montserrat', sans-serif;
        }

        .product-detail {
            padding: 20px 0;
        }

        .product-image img,
        .product-image video {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-info {
            margin-top: 20px;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .category {
            font-size: 1rem;
            color: #777;
            margin-bottom: 10px;
        }

        .description {
            max-height: 120px;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .description.expanded {
            max-height: none;
        }

        .show-more-btn {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 8px 16px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        @media (min-width: 768px) {
            .product-info {
                margin-top: 0;
            }

            h1 {
                font-size: 2.2rem;
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
                <div id="description" class="description">{{ $product->description }}</div>
                <button class="show-more-btn" onclick="toggleDescription()">Xem thêm</button>
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
