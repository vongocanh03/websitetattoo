@extends('layouts.app')

@section('title', 'Giới thiệu Minh Anh Tattoo')

@section('content')
<div class="container my-5" id="about-section">
    <div class="text-center mb-5">
        <h1 style="font-weight: bold; text-transform: uppercase; color: #ff0066;">Giới thiệu Minh Anh Tattoo</h1>
        <hr style="width: 80px; border: 2px solid #ff0066; margin: 15px auto;">
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2>Giới thiệu về Minh Anh Tattoo</h2>
            <p style="font-size: 18px; line-height: 1.8;">
                <strong>Minh Anh Tattoo</strong> được thành lập từ năm 2018 bởi hai nghệ nhân <strong>Minh Lang</strong> và <strong>Anh Thư</strong> — những người đã có hơn 5 năm kinh nghiệm trong lĩnh vực xăm hình nghệ thuật, xỏ khuyên, găm bi chuyên nghiệp.
                <br><br>
                Với tâm huyết và đam mê, chúng tôi cam kết mang đến cho khách hàng trải nghiệm tuyệt vời nhất: từ việc tư vấn chi tiết mẫu xăm phù hợp với cá tính, cho đến quy trình thực hiện bằng những thiết bị an toàn, vệ sinh đạt chuẩn cao nhất.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('storage/uploads/about2.jpg') }}" alt="Giới thiệu Minh Anh Tattoo" class="img-fluid rounded shadow">
        </div>
    </div>

    <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-6">
            <h2>Không gian nghệ thuật & đội ngũ chuyên nghiệp</h2>
            <p style="font-size: 18px; line-height: 1.8;">
                Chúng tôi tự hào sở hữu đội ngũ thợ xăm chuyên nghiệp, luôn sẵn sàng tư vấn, thiết kế và đồng hành cùng khách hàng từ ý tưởng đến khi hoàn thiện tác phẩm.
                <br><br>
                Minh Anh Tattoo chuyên thực hiện nhiều thể loại hình xăm đa dạng: từ mini tattoo, châu Á, nhân cổ, cho đến các thiết kế cá nhân hóa riêng biệt. Đặc biệt, chúng tôi có nghệ nhân xăm chuyên về <strong>tattoo che khuyết điểm</strong> giúp khách hàng tự tin hơn với vẻ ngoài của mình.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('storage/uploads/about2.jpg') }}" alt="Không gian Minh Anh Tattoo" class="img-fluid rounded shadow">
        </div>
    </div>
</div>
@endsection
