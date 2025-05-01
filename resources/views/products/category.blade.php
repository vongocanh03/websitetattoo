@extends('layouts.app') <!-- hoặc tên layout của bạn -->
@section('title', $category->name)

@section('content')
    <div class="container mt-5">
        <div class="section-title">
            <h2>{{ $category->name }}</h2>
        </div>
        @if($category->id == 3)
            <div class="mb-4 px-3 py-3 rounded shadow-sm" style="background-color: #fff8f8; border-left: 4px solid #ff7e7e;">
                <h4 class="fw-bold text-danger mb-2">Giới thiệu dịch vụ Găm Bi</h4>
                <p style="font-size: 18px; color: #333; line-height: 1.7;">
                    Găm bi là một dịch vụ thẩm mỹ cá nhân đang ngày càng được quan tâm trong lĩnh vực làm đẹp dành cho nam giới.
                    Đây là phương pháp đưa bi sinh học vào dưới lớp da tại vị trí nhạy cảm nhằm tăng tính thẩm mỹ, tạo điểm nhấn
                    cá nhân
                    và có thể hỗ trợ tăng khoái cảm khi quan hệ tình dục.
                    <br><br>
                    Tại Minh Anh Tattoo, chúng tôi cung cấp dịch vụ này với tiêu chí **an toàn – kín đáo – chuyên nghiệp**.
                    Toàn bộ quy trình đều được thực hiện bởi đội ngũ kỹ thuật viên lành nghề, trong môi trường vô trùng tuyệt
                    đối, sử dụng
                    dụng cụ y tế chuyên dụng và vật liệu sinh học cao cấp đảm bảo không gây kích ứng hay biến chứng.
                    <br><br>
                    Đến với chúng tôi, khách hàng sẽ được tư vấn tận tình, lựa chọn kiểu dáng và kích thước phù hợp với cơ địa
                    cũng như mong muốn cá nhân.
                </p>
            </div>
        @endif

        <div class="row gx-2 gy-3" id="product-list">
            @foreach($products as $product)
                <div class="col-6 col-md-3 mb-3">
                    <div class="card shadow-sm border-0 h-100 overflow-hidden">
                        <a href="{{ route('products.show', $product->id) }}">
                            @php $ext = strtolower(pathinfo($product->media, PATHINFO_EXTENSION)); @endphp
                            @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif']))
                                <img src="{{ asset('storage/' . $product->media) }}" class="card-img-top w-100"
                                    alt="{{ $product->name }}" style="height: 300px; object-fit: cover;">
                            @elseif(in_array($ext, ['mp4', 'avi', 'mov']))
                                <video class="card-img-top w-100" controls style="height: 300px; object-fit: cover;">
                                    <source src="{{ asset('storage/' . $product->media) }}" type="video/{{ $ext }}">
                                    Trình duyệt không hỗ trợ video.
                                </video>
                            @endif
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4" id="pagination-links">
            {!! $products->withQueryString()->links() !!}
        </div>
        @if($category->id == 3)
            <div class="container mt-5">
                <div class="section-title">
                    <h2>Chất liệu & kích thước bi phổ biến</h2>
                </div>

                <p style="font-size: 18px; line-height: 1.7; color: #333;">
                    Minh Anh Tattoo hiện đang sử dụng chất liệu **bi silicon y tế tròn** – an toàn, đàn hồi tốt, không gây kích
                    ứng và dễ tương thích với cơ thể.
                    <br>
                    Khách hàng có thể lựa chọn nhiều kích cỡ khác nhau tùy theo nhu cầu và cơ địa, thường dao động từ 7 li đến
                    10 li.
                    Đội ngũ của chúng tôi luôn tư vấn kỹ càng để đảm bảo tính thẩm mỹ và an toàn sau khi thực hiện.
                </p>

                <div class="text-center mt-4">
                    <img src="{{ asset('storage/uploads/z6548374973336_41b8eed872d821f08d91c0279d8153a2.jpg') }}"
                        alt="Các kích thước bi silicon tròn" class="img-fluid shadow"
                        style=" border: 1px solid #eee; border-radius: 8px;">
                    <p class="mt-2" style="color: #777;">Hình ảnh các kích thước bi silicon tròn</p>
                </div>
            </div>
        @endif

    </div>
@endsection
@push('styles')
    <style>
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
            .card-img-top {
                height: 350px !important;
            }
            .img-fluid{
                max-width: 400px;
            }
        }
    </style>
@endpush