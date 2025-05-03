@extends('layouts.app')

@section('title', 'Khoá học xăm hình tại Minh Anh Tattoo')

@section('content')
    <section class="py-5" style="background-color: #fff5f9;">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="text-danger fw-bold">🕎 Tuyển sinh khoá học xăm đầu năm 2025</h1>
                <p class="fs-5 text-muted">Khóa học đào tạo nghề xăm hình từ cơ bản đến nâng cao tại Minh Anh Tattoo – Học
                    thật, làm thật, thu nhập thật.</p>
            </div>

            <div class="row g-3 justify-content-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="ratio ratio-4x3 overflow-hidden shadow-sm">
                        <img src="{{ asset('storage/uploads/daotao1.jpg') }}" alt="Hình xăm 1"
                            class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="ratio ratio-4x3 overflow-hidden shadow-sm">
                        <img src="{{ asset('storage/uploads/daotao2.jpg') }}" alt="Hình xăm 2"
                            class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="ratio ratio-4x3 overflow-hidden shadow-sm">
                        <img src="{{ asset('storage/uploads/daotao3.jpg') }}" alt="Hình xăm 3"
                            class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
            </div>


            <!-- Giới thiệu -->
            <div class="mb-4">
                <p class="fs-5" style="margin-top: 20px;">Với mong muốn tiếp cận thêm nhiều khách hàng hơn, <strong>#Minhanhtattoo</strong> cần thêm
                    thành viên để học tập và làm việc tại tiệm.</p>
                <p class="fs-5">👉 <strong>Thời gian đào tạo: 3 – 6 tháng</strong> tùy vào tốc độ tiếp thu của học viên. Cam
                    kết dạy từ cơ bản đến khi thành thạo nghề.</p>
            </div>

            <!-- Lợi ích -->
            <div class="bg-white p-4 rounded shadow-sm mb-4">
                <h4 class="text-danger fw-bold mb-3">🎓 Học viên sẽ nhận được gì?</h4>
                <ul class="lh-lg mb-0">
                    <li>⭕️ Học phí chia nhỏ – tạo điều kiện cho các bạn trẻ đam mê nghề.</li>
                    <li>⭕️ Có lớp học buổi tối cho người đi làm ban ngày.</li>
                    <li>⭕️ Học viên nhanh tay nghề có thể nhận khách riêng để tăng thu nhập.</li>
                    <li>⭕️ Được học đủ style xăm phổ biến – từ đơn giản đến phức tạp.</li>
                    <li>⭕️ Tặng hình xăm cho học viên đạt thành tích cao sau kiểm tra nghề.</li>
                    <li>⭕️ Cơ hội được giữ lại làm việc tại tiệm nếu có thái độ học tốt, trung thực.</li>
                </ul>
            </div>

            <!-- Nội dung đào tạo -->
            <div class="bg-white p-4 rounded shadow-sm mb-4">
                <h4 class="text-danger fw-bold mb-3">📘 Nội dung đào tạo chuyên sâu</h4>
                <ul class="lh-lg mb-0">
                    <li>✅ Vẽ mỹ thuật cơ bản và sáng tạo theo mẫu.</li>
                    <li>✅ Tư vấn khách hàng – CSKH chuyên nghiệp.</li>
                    <li>✅ Setup bàn xăm, chuẩn bị máy móc đúng quy trình.</li>
                    <li>✅ Kỹ thuật xăm trên da giả và da thật.</li>
                    <li>✅ Hiểu rõ về mực xăm, kim xăm, máy xăm, cách bảo quản hình xăm.</li>
                    <li>✅ Thao tác cơ bản Photoshop, vẽ máy tính bảng (nếu có).</li>
                    <li>✅ Kiến thức về màu sắc, ánh sáng, khối, sắc độ.</li>
                    <li>✅ Cách ủ tê – phân tích ưu nhược điểm từng loại.</li>
                    <li>✅ Kiến thức về da – vệ sinh da đúng cách sau 24h xăm.</li>
                </ul>
            </div>

            <!-- Học phí -->
            <div class="bg-white p-4 rounded shadow-sm mb-4">
                <h4 class="text-danger fw-bold mb-3">💰 Học phí & Thời gian</h4>
                <p><strong>Học phí:</strong> <span class="text-danger fw-bold">10 triệu</span> – ưu đãi dành cho 5 bạn đầu
                    tiên đăng ký khoá đầu năm.</p>
                <p><strong>Thời gian học:</strong> Từ 3 – 6 tháng (tuỳ theo tiến độ cá nhân).</p>
            </div>

            <!-- Liên hệ -->
            <div class="bg-white p-4 rounded shadow-sm">
                <h4 class="text-danger fw-bold mb-3">📩 Thông tin liên hệ & Đăng ký</h4>
                <ul class="lh-lg mb-3">
                    <li><strong>Zalo:</strong> 0395 352 488 – 0372 625 001</li>
                    <li><strong>Facebook:</strong> <a href="https://www.facebook.com/luuminhcang?locale=vi_VN"
                            target="_blank">Minhanhtattoo</a></li>
                    <li><strong>Email:</strong> minhanh2468001@gmail.com</li>
                    <li><strong>Địa chỉ học:</strong> Thuận Giao 21, Thuận Giao, Thuận An, Bình Dương</li>
                </ul>
                <a href="https://zalo.me/0372625001" class="btn btn-danger btn-lg rounded-pill">📲 Đăng ký ngay qua Zalo</a>
            </div>
        </div>
    </section>
@endsection