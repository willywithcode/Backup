@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/service.css') }}" rel="stylesheet">
<style>
.bo-service-detail-button {
    position: absolute;
    top: 100%;           
    right: 0;         
    transform: translateY(-50%) translateX(10%);  
    background-color:rgb(111, 188, 255);
    color: white;
    padding: 10px 18px;
    font-weight: 600;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.25s ease-in-out;
    z-index: 10;
}

.bo-service-detail-button:hover {
    transform: translateY(-60%) translateX(10%);
    background-color: #1565c0;
}

    @media (max-width: 768px) {
        .hero_section {
            height: 400px !important;
        }

        .hero_section h1 {
            font-size: 2rem !important;
        }

        .bo-service-detail-content {
            padding: 20px 15px;
        }

        .bo-service-detail-button {
            position: static;
            margin-top: 20px;
            width: 100%;
            text-align: center;
        }

        .bo-other-grid {
            grid-template-columns: repeat(1, 1fr) !important;
        }
    }

    @media (max-width: 480px) {
        .hero_section {
            height: 300px !important;
        }

        .hero_section h1 {
            font-size: 1.8rem !important;
        }

        .bo-service-detail-text h2 {
            font-size: 1.5rem !important;
        }

        .bo-service-detail-text p {
            font-size: 0.95rem !important;
        }
    }
</style>
@endsection

@section('content')
<div class="service-detail-page bo-service-detail-wrapper">

    <!-- Hero Section -->
    <div class="relative w-screen h-[600px] hero_section mb-20">
        <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-4xl md:text-5xl font-bold">Dịch vụ</h1>
        </div>
    </div>

    <!-- Main Detail Section -->
    <div class="bo-service-detail-content container mx-auto px-4 py-16">
        <div class="flex flex-col md:flex-row gap-8 items-start">
            <!-- Image -->
            <div class="bo-service-detail-image w-full md:w-1/2 relative">
                <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" class="rounded-lg w-full h-auto shadow-md">

                <!-- Button overlay -->
                <a href="{{ route('contact') }}" class="bo-service-detail-button">
                    Nhận báo giá
                </a>
            </div>

            <!-- Text -->
            <div class="bo-service-detail-text w-full md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">{{ $service['title'] }}</h2>
                <p class="text-gray-700 leading-relaxed whitespace-pre-line mb-6">{{ $service['full_description'] }}</p>
            </div>
        </div>
    </div>

    <!-- Why Choose Section -->
    <section class="why-choose-section py-16">
        <div class="container mx-auto px-4">
            <div class="section-title text-center mb-16">
                <h2 class="text-3xl font-bold mx-auto">Tại sao lựa chọn Behind Office</h2>
            </div>

            <div class="hexagon-grid">
                <!-- Top Row -->
                <div class="hex-row">
                    <div class="hex-item" data-aos="fade-up" data-aos-duration="800">
                        <div class="hex-content">
                            <img src="{{ asset('assets/about/iconHexa1.png') }}" alt="Nhanh chóng" class="hex-bg">
                            <div class="hex-overlay">
                                <h3>Nhanh chóng</h3>
                                <p>Behind Office xử lý nhanh mọi yêu cầu, không để phát sinh thêm, là giải pháp chuyên nghiệp hỗ trợ 24/7.</p>
                            </div>
                        </div>
                    </div>

                    <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="hex-content">
                            <img src="{{ asset('assets/about/iconHexa2.png') }}" alt="Hiệu quả" class="hex-bg">
                            <div class="hex-overlay">
                                <h3>Hiệu quả</h3>
                                <p>Behind Office cam kết kết quả tối ưu, tiến độ công việc nhanh chóng, tăng hiệu quả giảm chi phí.</p>
                            </div>
                        </div>
                    </div>

                    <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="hex-content">
                            <img src="{{ asset('assets/about/iconHexa3.png') }}" alt="Uy tín" class="hex-bg">
                            <div class="hex-overlay">
                                <h3>Uy tín</h3>
                                <p>Behind Office cam kết bảo mật hàng đầu, với đội ngũ chuyên môn đã làm việc với nhiều đối tác uy tín trong nước.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Row -->
                <div class="hex-row hex-row-offset" style="margin-top: -60px">
                    <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="hex-content">
                            <img src="{{ asset('assets/about/iconHexa4.png') }}" alt="Tiện lợi" class="hex-bg">
                            <div class="hex-overlay">
                                <h3>Tiện lợi</h3>
                                <p>Đối tác chuyên nghiệp, phản hồi nhanh chóng, đem lại trải nghiệm dịch vụ tốt nhất.</p>
                            </div>
                        </div>
                    </div>

                    <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <div class="hex-content">
                            <img src="{{ asset('assets/about/iconHexa5.png') }}" alt="Tiết kiệm" class="hex-bg">
                            <div class="hex-overlay">
                                <h3>Tiết kiệm</h3>
                                <p>Tùy chỉnh dịch vụ theo nhu cầu, giúp doanh nghiệp và cá nhân tiết kiệm chi phí.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Services -->
    <div class="bo-service-detail-other">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-10">Dịch vụ khác</h2>
            <div class="bo-other-grid">
                @php
                    $otherServices = [
                        ['slug' => 'tro-ly-ke-toan', 'title' => 'Trợ lý kế toán công việc, booking', 'image' => 'assets/service/image2.png'],
                        ['slug' => 'giai-quyet-cong-viec', 'title' => 'Cung cấp thông tin, giải quyết các công việc khác', 'image' => 'assets/service/image3.png'],
                        ['slug' => 'tro-ly-van-phong', 'title' => 'Trợ lý hành chính văn phòng', 'image' => 'assets/service/image4.png'],
                    ];
                @endphp

                @foreach($otherServices as $item)
                    <div class="bo-other-card">
                        <div class="w-full aspect-[4/3] overflow-hidden rounded-t-lg">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                        </div>
                        <div class="bo-other-card-content p-4">
                            <h3 class="font-semibold text-lg mb-2">{{ $item['title'] }}</h3>
                            <a href="{{ route('services.detail', ['slug' => $item['slug']]) }}" class="text-blue-600 hover:underline">Tìm hiểu thêm</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
