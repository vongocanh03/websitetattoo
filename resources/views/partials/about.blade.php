@extends('layouts.app')

@section('title', 'Giới thiệu Minh Anh Tattoo')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <style>
        .section-light {
            background-color: rgb(255, 255, 255);
            color: #333;
            padding: 40px 0;

        }

        .tattoo-title {
            font-family: 'Lobster', cursive;
            font-size: 3rem;
            color: #000000;
            text-align: center;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .tattoo-subtitle {
            font-family: 'Arial', sans-serif;
            font-size: 1.25rem;
            color: #000000;
            text-align: center;
            margin-bottom: 30px;
            margin-top: 30px;
        }

        p {
            font-family: 'Arial', sans-serif;
            font-size: 1.1rem;
            color: #444;
        }

        strong {
            font-weight: bold;
        }

        .img-fluid {
            box-shadow: 0 6px 20px rgba(255, 102, 178, 0.3);
            max-width: 100%;
            height: auto;
        }

        @media (min-width: 992px) {}

        @media (max-width: 768px) {
            .tattoo-title {
                font-size: 2.2rem;
            }

            .tattoo-subtitle {
                font-size: 1rem;
            }

            h2 {
                font-size: 1.3rem;
            }

            .container {
                max-width: 1200px !important;
            }
        }
    </style>
@endpush


@section('content')
    <div class="section-light">
        <div class="container" id="about-section">

            <!-- Tiêu đề -->
            <h1 class="tattoo-title">
                XĂM NGHỆ THUẬT BÌNH DƯƠNG – <span style="color: #ff7e7e;">MINH ANH TATTOO</span>
            </h1>

            <h2 class="tattoo-subtitle">MINH ANH TATTOO – ĐỊA ĐIỂM XĂM HÌNH NGHỆ THUẬT UY TÍN, AN TOÀN TẠI THUẬN AN – BÌNH
                DƯƠNG</h2>

            <!-- Giới thiệu -->
            <div class="mb-5">

                <p>
                    - <strong>Minh Anh Tattoo</strong> được thành lập từ năm 2018 bởi hai nghệ nhân <strong>Minh
                        Lang</strong>
                    và <strong>Anh Thư</strong> – những người có hơn 5 năm kinh nghiệm trong lĩnh vực <strong>xăm hình nghệ
                        thuật, xỏ khuyên và găm bi</strong> chuyên nghiệp.
                    <br><br>
                    - Với tâm huyết và đam mê nghề, chúng tôi cam kết mang đến cho khách hàng sự hài lòng tối đa: từ việc
                    <strong>tư vấn kỹ lưỡng các mẫu xăm phù hợp nhất với phong cách cá nhân</strong>, cho đến quy trình thực
                    hiện bằng thiết bị hiện đại, vệ sinh tuyệt đối, đảm bảo an toàn theo tiêu chuẩn cao nhất.
                </p>

                <!-- Ảnh lớn bên dưới -->
                <div class="text-center mt-4">
                    <img src="{{ asset('storage/uploads/about2.jpg') }}" alt="Giới thiệu Minh Anh Tattoo" class="img-fluid"
                        style="max-width: 100%; height: auto;">
                </div>
            </div>

            <!-- Không gian nghệ thuật -->
            <div>
                <h2 class="mb-3" style="color: #000000; text-align: center">Không gian nghệ thuật & đội ngũ chuyên nghiệp
                </h2>
                <p>
                    - Chúng tôi tự hào với <strong>không gian xăm hiện đại</strong> và đội ngũ thợ xăm giàu kinh nghiệm,
                    luôn
                    sẵn sàng đồng hành cùng khách hàng trong suốt hành trình từ ý tưởng đến khi hoàn thiện hình xăm.
                    <br><br>
                    - Minh Anh Tattoo chuyên thực hiện đa dạng thể loại hình xăm như: <strong>mini tattoo, phong cách châu
                        Á,
                        nhân cổ</strong>, cũng như các thiết kế cá nhân hóa riêng biệt theo yêu cầu của từng khách hàng.
                    <br><br>
                    - Đặc biệt, chúng tôi có một <strong>nghệ nhân chuyên biệt trong lĩnh vực tattoo che khuyết
                        điểm</strong>
                    – hỗ trợ khách hàng che sẹo, làm đẹp da, giúp bạn thêm phần tự tin và hài lòng với diện mạo của chính
                    mình.
                </p>

                <!-- Ảnh lớn bên dưới -->
                <div class="text-center mt-4">
                    <img src="{{ asset('storage/uploads/about8.jpg') }}" alt="Không gian Minh Anh Tattoo" class="img-fluid"
                        style="max-width: 100%; height: auto;">
                </div>

                <p style="padding-top: 30px;">
                    - Ghé trực tiếp <strong>Minh Anh Tattoo – địa chỉ uy tín tại Thuận Giao, Thuận An (Bình Dương)</strong>,
                    để được tư vấn
                    và trải nghiệm không gian xăm đậm chất nghệ thuật cùng đội ngũ nghệ nhân giàu kinh nghiệm!
                </p>
                <div class="text-center mt-4">
                    <img src="{{ asset('storage/uploads/about4.jpg') }}" alt="Không gian Minh Anh Tattoo" class="img-fluid"
                        style="max-width: 100%; height: auto;">
                </div>
                <p style="padding-top: 30px;">
                    - Đây chính là không gian của <strong>Minh Anh Tattoo tại Thuận Giao, Thuận An (Bình Dương)</strong> –
                    nơi bạn có thể trực
                    tiếp đến trải nghiệm quy trình xăm nghệ thuật chuyên nghiệp, an toàn và tận tâm từ đội ngũ thợ lành
                    nghề.
                </p>
            </div>

        </div>
    </div>
@endsection