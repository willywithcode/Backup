@extends('layouts.guest')

@section('styles')
@parent
<link href="{{ asset('resources/css/service.css') }}" rel="stylesheet">
<style>
    /* Form styling for all devices */
    .form-control {
        width: 100%;
        padding: 12px;
        border-radius: 6px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.8);
        font-size: 16px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.25);
    }
    
    .form-control::placeholder {
        color: #6c757d;
    }
    
    .submit-btn {
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 6px;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .submit-btn:hover {
        background-color: #2980b9;
    }
    
    .consultation-form {
        position: relative;
        overflow: hidden;
    }
    
    @media (max-width: 768px) {
        .hero_section {
            height: 400px !important;
        }
        
        .hero_section h1 {
            font-size: 2rem !important;
        }
        
        .what-we-do {
            padding: 0 15px;
        }
        
        .intro-section {
            flex-direction: column;
            padding: 0;
            margin-bottom: 40px;
        }
        
        .intro-content, .intro-image {
            width: 100% !important;
        }
        
        .intro-image {
            height: auto !important;
            min-height: 250px;
        }
        
        .service-item {
            flex-direction: column !important;
            margin-bottom: 50px;
        }
        
        .service-item.right, .service-item.left {
            flex-direction: column !important;
        }
        
        .service-block {
            width: 100% !important;
            aspect-ratio: auto !important;
        }
        
        .image-block {
            height: 250px !important;
            margin-bottom: 20px;
        }
        
        .service-number {
            left: 50px !important;
            font-size: 6rem !important;
            top: -40px !important;
        }
        
        .service-details {
            padding-left: 20px !important;
            padding-top: 20px !important;
        }
        
        .service-details h3 {
            font-size: 1.5rem !important;
        }
        
        .service-details li {
            font-size: 1rem !important;
        }
        
        /* Improved form styles for mobile */
        .consultation-content {
            padding-left: 15px !important;
            padding-right: 15px !important;
            text-align: center !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            width: 100% !important;
            margin-bottom: 20px !important;
        }
        
        .consultation-form-container {
            padding: 0 15px !important;
            width: 100% !important;
        }
        
        .form-row.grid {
            display: flex !important;
            flex-direction: column !important;
            grid-template-columns: unset !important;
        }
        
        .form-row {
            text-align: center !important;
            margin-bottom: 15px !important;
        }
        
        .form-group {
            width: 100% !important;
            margin-bottom: 15px !important;
        }
        
        .form-control {
            width: 100% !important;
        }
        
        textarea.form-control {
            width: 100% !important;
            min-height: 120px !important;
        }
        
        .submit-btn {
            width: 100% !important;
            margin: 0 auto !important;
            padding: 15px !important;
        }
    }
    
    @media (max-width: 480px) {
        .hero_section {
            height: 300px !important;
        }
        
        .hero_section h1 {
            font-size: 1.8rem !important;
        }
        
        .section-title {
            font-size: 1.8rem !important;
        }
        
        .intro-description {
            font-size: 1rem !important;
        }
        
        .service-number {
            font-size: 5rem !important;
        }
        
        .service-details h3 {
            font-size: 1.3rem !important;
        }
        
        .service-details li {
            font-size: 0.9rem !important;
            margin-bottom: 8px !important;
        }
        
        .learn-more {
            padding: 8px 15px !important;
            font-size: 0.9rem !important;
        }
    }
</style>
@endsection

@section('content')
<div class="relative w-screen h-[600px] hero_section mb-20">
    <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Dịch vụ</h1>
    </div>
</div>
<div class="what-we-do">


    <!-- Intro Section -->
    <div class="intro-section">
        <div class="intro-content">
            <h2 class="section-title">Chúng tôi làm gì?</h2>
            <p class="intro-description">
                Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng
            </p>
        </div>
        <div class="intro-image">
            <img src="{{ asset('assets/service/Frame 427321334.png') }}" alt="Office Building">
        </div>
    </div>
    
    <!-- Services Container -->
    <div class="services-container">
        <!-- Service Item 1 -->
        <div id="service-01" class="service-item right">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image1.png') }}" alt="Trợ lý hành chính giấy tờ">
            </div>
            <div class="service-block content-block">
            <div class="service-number" style="left: 50px;">01</div>
            <div class="service-details">
                    <h3 class="text-3xl font-bold">Trợ lý hành chính giấy tờ</h3>
                    <ul>
                        <li>Soạn thảo, xử lý tài liệu và hợp đồng</li>
                        <li>Quản lý, lưu trữ hồ sơ và dữ liệu</li>
                        <li>Hỗ trợ kế toán cơ bản, lập báo cáo tài chính</li>
                        <li>Chuẩn bị tài liệu, hồ sơ cho các cuộc họp</li>
                        <li>Giao tiếp & Điều phối thông tin</li>
                        <li>Quản lý vật tư văn phòng</li>
                        <li>Hỗ trợ tổ chức sự kiện & hội họp</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-hanh-chinh']) }}" class="learn-more">Xem thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 2 -->
        <div id="service-02" class="service-item left">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image2.png') }}" alt="Trợ lý kế toán công việc, booking">
            </div>
            <div class="service-block content-block">
            <div class="service-number" style="left: 50px;">02</div>
            <div class="service-details">
                    <h3 class="text-3xl font-bold">Trợ lý kế toán công việc, booking</h3>
                    <ul>
                        <li>Quản lý lịch trình, sắp xếp cuộc họp</li>
                        <li>Theo dõi và nhắc nhở các nhiệm vụ quan trọng</li>
                        <li>Hỗ trợ tổ chức sự kiện, hội nghị</li>
                        <li>Đặt vé máy bay, khách sạn, phương tiện di chuyển</li>
                        <li>Quản lý truyền thông nội bộ</li>
                        <li>Hỗ trợ pháp lý cơ bản</li>
                        <li>Kiểm soát chi phí và ngân sách văn phòng</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-ke-toan']) }}" class="learn-more">Xem thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 3 -->
        <div id="service-03" class="service-item right">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image3.png') }}" alt="Cung cấp thông tin, giải quyết các công việc khác">
            </div>
            <div class="service-block content-block">
            <div class="service-number" style="left: 50px;">03</div>
            <div class="service-details">
                    <h3 class="text-3xl font-bold">Cung cấp thông tin, giải quyết các công việc khác</h3>
                    <ul>
                        <li>Quản lý lịch trình, sắp xếp cuộc họp</li>
                        <li>Theo dõi và nhắc nhở các nhiệm vụ quan trọng</li>
                        <li>Hỗ trợ tổ chức sự kiện, hội nghị</li>
                        <li>Đặt vé máy bay, khách sạn, phương tiện di chuyển</li>
                        <li>Hỗ trợ giám đốc hoặc quản lý cấp cao</li>
                        <li>Hỗ trợ khách hàng và đối tác</li>
                        <li>Hỗ trợ pháp lý cơ bản</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'giai-quyet-cong-viec']) }}" class="learn-more">Xem thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 4 -->
        <div id="service-04" class="service-item left">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image4.png') }}" alt="Trợ lý hành chính văn phòng">
            </div>
            <div class="service-block content-block">
            <div class="service-number" style="left: 50px;">04</div>
            <div class="service-details">
                    <h3 class="text-3xl font-bold">Trợ lý hành chính văn phòng</h3>
                    <ul>
                        <li>Quản lý văn phòng phẩm, thiết bị làm việc</li>
                        <li>Tiếp nhận và xử lý thư từ, email công ty</li>
                        <li>Hỗ trợ vận hành văn phòng, đảm bảo môi trường làm việc hiệu quả</li>
                        <li>Quản lý, lưu trữ hồ sơ và dữ liệu</li>
                        <li>Hỗ trợ kế toán cơ bản, lập báo cáo tài chính</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-van-phong']) }}" class="learn-more">Xem thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 5 -->
        <div id="service-05" class="service-item right">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image5.png') }}" alt="Giao hàng và văn phòng">
            </div>
            <div class="service-block content-block">
            <div class="service-number" style="left: 50px;">05</div>
            <div class="service-details">
                    <h3 class="text-3xl font-bold">Giao hàng và văn phòng</h3>
                    <ul>
                        <li>Giám sát hoạt động của gian hàng, đảm bảo tuân thủ quy trình làm việc</li>
                        <li>Quản lý hàng hóa, kiểm kê sản phẩm, báo cáo tình trạng tồn kho</li>
                        <li>Quản lý văn phòng phẩm, đặt hàng khi cần</li>
                        <li>Kiểm soát chi phí vận hành văn phòng, đề xuất các giải pháp tiết kiệm chi phí</li>
                        <li>Hỗ trợ tổ chức hội thảo, sự kiện nội bộ tại văn phòng</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'giao-hang-van-phong']) }}" class="learn-more">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Consultation Form Section -->
<section class="consultation-form relative">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/home/489440851_977986144496616_8889322225191558916_n.png') }}" alt="Background" class="w-full h-full object-cover">
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Content -->
            <div class="consultation-content" data-aos="fade-right" data-aos-duration="1000" style="padding-left: 100px;">
                <div class="consultation-label">
                    <span>TƯ VẤN VÀ BÁO GIÁ</span>
                </div>
                <h2 class="consultation-title">Phát triển doanh nghiệp mà không đánh đổi thời gian rảnh</h2>
                <p class="consultation-description">
                    Lorem ipsum dolor sit amet consectetur. Senectus nulla faucibus feugiat mi et mattis risus tortor. Elementum elementum scelerisque ac ac placerat eget ultrices. Sit ac varius commodo egestas.
                </p>
            </div>
            
            <!-- Right Form -->
            <div class="consultation-form-container" data-aos="fade-left" data-aos-duration="1000">
                <form class="consultation-form-fields">
                    <div class="form-row grid grid-cols-2 gap-4 mb-4">
                        <div class="form-group">
                            <input type="text" placeholder="Họ và tên" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row grid grid-cols-2 gap-4 mb-4">
                        <div class="form-group">
                            <input type="tel" placeholder="Số điện thoại" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Tỉnh thành" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row mb-4">
                        <div class="form-group">
                            <textarea rows="4" placeholder="Lời nhắn..." class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" class="submit-btn" style="background-color: #122B47;">GỬI YÊU CẦU</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.querySelector('.intro-image').classList.add('appear');
        }, 300);

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('appear');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        const serviceItems = document.querySelectorAll('.service-item');
        serviceItems.forEach(item => {
            observer.observe(item);
        });
    });
</script>
@endsection
