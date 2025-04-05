@extends('layouts.guest')

@section('styles')
@parent
<link href="{{ asset('resources/css/about.css') }}" rel="stylesheet">
<style>

.logo-background {
  position: absolute;
  top: 1100px;
  right: -50px;
  width: 600px;
  height: auto;
  opacity: 1;
  z-index: 1; 
  pointer-events: none;
}

.logo-background img {
  width: 100%;
  height: auto;
  object-fit: contain;
  mix-blend-mode: multiply;
}
.vision-image img {
    position: relative;
    z-index: 1;
}

/* Custom style to control hex-row-offset margin */
@media (max-width: 768px) {
    .hex-row-offset {
        margin-top: 0 !important;
    }
}

@media (min-width: 769px) {
    .why-choose-section .hex-row-offset {
        margin-top: -87px !important;
    }
}

    .consultation-form {
    position: relative;
    overflow: hidden;
}
.consultation-form input,
.consultation-form textarea {
    background-color: rgba(255, 255, 255, 0.85);
    color: #000;
    border: none;
    border-radius: 6px;
    padding: 12px;
}

.consultation-form input::placeholder,
.consultation-form textarea::placeholder {
    color: #555;
}

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

@media (max-width: 768px) {
    .about-content {
        padding: 0 15px;
    }
    
    .about-image {
        width: 100% !important;
    }
    
    .about-text {
        width: 100% !important;
        padding: 15px !important;
        margin-top: 50px;
    }
    
    .project-count {
        width: 70% !important;
        right: 0 !important;
    }
    
    .hex-item {
        margin: 10px auto !important;
    }
    
    .hexagon-grid {
        padding: 0 10px;
    }
    
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
    .project-count {
        width: 90% !important;
        right: 0 !important;
        left: 0 !important;
        margin: 0 auto;
    }
    
    .hero_section {
        height: 400px !important;
    }
    
    .hero_section h1 {
        font-size: 1.8rem !important;
    }
}

.why-choose-section {
    position: relative;
    overflow: hidden;
}

.why-choose-bg-container {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 0;
    overflow: hidden;
}

.why-choose-bg-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.why-choose-bg-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 45, 86, 0.85);
    z-index: 1;
}

.why-choose-section .container {
    position: relative;
    z-index: 2;
}

.why-choose-section h2, 
.why-choose-section .hex-item, 
.why-choose-section .hex-content, 
.why-choose-section .hex-overlay {
    position: relative;
    z-index: 2;
}

@media (max-width: 768px) {
    .why-choose-bg-container {
        display: none;
    }
    
    .why-choose-section {
        background-color: #002d56;
    }
    
    .hex-row, .hex-row-offset {
        flex-direction: column;
        align-items: center;
        margin: 0;
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
</style>
@endsection

@section('content')
<div class="relative w-screen h-[600px] hero_section mb-20">
    <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Về chúng tôi</h1>
    </div>
</div>
<div class="logo-background absolute bottom-0 right-0 z-0 pointer-events-none opacity-10">
            <img src="{{ asset('assets/logo-logo1.png') }}" alt="Logo Background" class="w-full h-full object-contain">
    </div>
<!-- About Us Section -->
<section class="about-us py-16">
    <div class="container-fluid p-0">
        <div class="about-content flex flex-col md:flex-row items-center">
            <!-- Image moved to left -->
            <div class="about-image w-full md:w-2/5 mb-8 md:mb-0 relative my-20" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('assets/home/woman-with-headset-having-video-call-laptop 1.png') }}" alt="Behind Office Team" class="w-full h-auto">
                <!-- Project count box positioned below the image and extending beyond right edge -->
                <div class="project-count absolute -bottom-12 -right-10 bg-[#071B35] text-white py-4 px-6 rounded-md w-80 h-15 shadow-lg">
                    <!-- Icon on the top right -->
                    <div class="absolute -top-4 -right-4">
                        <img src="{{ asset('assets/home/Icon Box.png') }}" alt="Shield Icon" class="w-15 h-15">
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="text">
                            <span class="font-bold text-xl">1200+</span> Dự án đã hoàn thành
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image w-full md:w-1/10 mb-8 md:mb-0 relative" data-aos="fade-right" data-aos-duration="1000">
                
            </div>
            <!-- Text content moved to right -->
            <div class="about-text w-full md:w-1/2 md:pr-40" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Chúng tôi là ai?</h2>
                <div class="text-gray-700 space-y-8">
                    <p>Behind Office là đơn vị chuyên cung cấp dịch vụ trợ lý chuyên nghiệp, hỗ trợ doanh nghiệp và cá nhân trong việc quản lý công việc, tối ưu hóa quy trình vận hành và nâng cao hiệu suất làm việc. Với sứ mệnh giúp khách hàng giảm tải áp lực hành chính, chúng tôi mang đến đội ngũ trợ lý giàu kinh nghiệm, linh hoạt và tận tâm, sẵn sàng đồng hành trong mọi khía cạnh của công việc</p>
                    <p>Với quy trình làm việc chuyên nghiệp, bảo mật thông tin tuyệt đối và giải pháp linh hoạt theo từng nhu cầu, Behind Office cam kết giúp khách hàng tối ưu thời gian, tập trung vào các mục tiêu quan trọng và phát triển kinh doanh bền vững. Chúng tôi không chỉ là trợ lý – mà còn là người đồng hành đáng tin cậy trên hành trình thành công của bạn!</p>
                    <p>Với quy trình làm việc chuyên nghiệp, bảo mật thông tin tuyệt đối và giải pháp linh hoạt theo từng nhu cầu, Behind Office cam kết giúp khách hàng tối ưu thời gian, tập trung vào các mục tiêu quan trọng và phát triển kinh doanh bền vững. Chúng tôi không chỉ là trợ lý – mà còn là người đồng hành đáng tin cậy trên hành trình thành công của bạn!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="vision-section py-16">
    <div class="container mx-auto px-4">
        <div class="vision-content text-center mb-16 md:pr-10 md:pl-10">
            <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Tầm nhìn</h2>
            <p class="text-gray-700 w-full mx-auto text-center mb-10">
                Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng.
            </p>
        </div>
        <div class="vision-image relative" data-aos="fade-up" data-aos-duration="1000">
    <img src="{{ asset('assets/about/image (1).png') }}" alt="Vision" class="w-full h-auto rounded-lg z-[1] relative">
</div>

    </div>
</section>

<!-- Mission Section -->
<section class="mission-section py-16">
    <div class="container mx-auto px-4">
        <div class="mission-content text-center mb-16 md:pr-10 md:pl-10">
            <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Sứ mệnh</h2>
            <p class="text-gray-700 w-full mx-auto text-center mb-10">
                Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng.
            </p>
        </div>
        <div class="mission-image" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset('assets/about/pexels-fauxels-3183150 1.png') }}" alt="Mission" class="w-full h-auto rounded-lg">
        </div>
        <div class="mission-content text-center md:pr-10 md:pl-10 mt-10" style="margin-top: 50px;">
            <p class="text-gray-700 w-full mx-auto text-center">
            Behind Office cam kết mang đến dịch vụ trợ lý chuyên nghiệp, giúp cá nhân và doanh nghiệp tối ưu hóa công việc, tiết kiệm thời gian và nâng cao hiệu suất. Chúng tôi không chỉ hỗ trợ, mà còn đồng hành cùng khách hàng trong mọi thử thách, đảm bảo quy trình làm việc hiệu quả, bảo mật và linh hoạt nhất.
            </p>
        </div>
    </div>
</section>

<!-- Why Choose Behind Office Section -->
<section class="why-choose-section py-16 relative" style="background-image: url('{{ asset('assets/home/Why choice us.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container mx-auto px-4">
        <div class="section-title text-center mb-16">
            <h2 class="text-3xl font-bold mx-auto">Tại sao lựa chọn Behind Office</h2>
        </div>

        <div class="hexagon-grid">
            <!-- Top Row -->
            <div class="hex-row">
                <!-- Nhanh chóng -->
                <div class="hex-item" data-aos="fade-up" data-aos-duration="800">
                    <div class="hex-content">
                        <img src="{{ asset('assets/about/iconHexa1.png') }}" alt="Nhanh chóng" class="hex-bg">
                        <div class="hex-overlay">
                            <h3>Nhanh chóng</h3>
                            <p>Behind Office xử lý nhanh mọi yêu cầu, không để phát sinh thêm, là giải pháp chuyên nghiệp hỗ trợ 24/7.</p>
                        </div>
                    </div>
                </div>

                <!-- Hiệu quả -->
                <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="hex-content">
                        <img src="{{ asset('assets/about/iconHexa2.png') }}" alt="Hiệu quả" class="hex-bg">
                        <div class="hex-overlay">
                            <h3>Hiệu quả</h3>
                            <p>Behind Office cam kết kết quả tối ưu, tiến độ công việc nhanh chóng, tăng hiệu quả giảm chi phí.</p>
                        </div>
                    </div>
                </div>

                <!-- Uy tín -->
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

            <!-- Bottom Row - Offset -->
            <div class="hex-row hex-row-offset" style="margin-top: -87px">
                <!-- Tiện lợi -->
                <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="hex-content">
                        <img src="{{ asset('assets/about/iconHexa4.png') }}" alt="Tiện lợi" class="hex-bg">
                        <div class="hex-overlay">
                            <h3>Tiện lợi</h3>
                            <p>Đối tác chuyên nghiệp, phản hồi nhanh chóng, đem lại trải nghiệm dịch vụ tốt nhất.</p>
                        </div>
                    </div>
                </div>

                <!-- Tiết kiệm -->
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
    <div>
</section>

<!-- Consultation Form Section -->
<section class="consultation-form relative text-black">
    <!-- Background image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/home/whitebg.png') }}" alt="Background" class="w-full h-full object-cover">
    </div>
    
    <!-- Overlay -->
    <div class="absolute inset-0  z-[1]"></div>

    <!-- Content -->
    <div class="container mx-auto px-4 relative z-[2]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Content -->
            <div class="consultation-content text-black" data-aos="fade-right" data-aos-duration="1000" style="padding-left: 100px;">
                <div class="consultation-label">
                    <span class="text-sm uppercase tracking-wide ">TƯ VẤN VÀ BÁO GIÁ</span>
                </div>
                <h2 class="consultation-title text-3xl font-bold mb-4">Phát triển doanh nghiệp mà không đánh đổi thời gian rảnh</h2>
                <p class="consultation-description text-black/80">
                    Lorem ipsum dolor sit amet consectetur. Senectus nulla faucibus feugiat mi et mattis risus tortor. Elementum elementum scelerisque ac ac placerat eget ultrices. Sit ac varius commodo egestas.
                </p>
            </div>
            
            <!-- Right Form -->
            <div class="consultation-form-container" data-aos="fade-left" data-aos-duration="1000">
                <form class="consultation-form-fields">
                    <div class="form-row grid grid-cols-2 gap-4 mb-4">
                        <div class="form-group">
                            <input type="text" placeholder="Họ và tên" class="form-control bg-white/80 text-black placeholder-gray-600 rounded px-4 py-2 w-full">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control bg-white/80 text-black placeholder-gray-600 rounded px-4 py-2 w-full">
                        </div>
                    </div>
                    
                    <div class="form-row grid grid-cols-2 gap-4 mb-4">
                        <div class="form-group">
                            <input type="tel" placeholder="Số điện thoại" class="form-control bg-white/80 text-black placeholder-gray-600 rounded px-4 py-2 w-full">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Tỉnh thành" class="form-control bg-white/80 text-black placeholder-gray-600 rounded px-4 py-2 w-full">
                        </div>
                    </div>
                    
                    <div class="form-row mb-4">
                        <textarea rows="4" placeholder="Lời nhắn..." class="form-control bg-white/80 text-black placeholder-gray-600 rounded px-4 py-2 w-full"></textarea>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" class="submit-btn bg-[#3498db] hover:bg-blue-700 transition px-6 py-3 rounded-lg text-white font-semibold">GỬI YÊU CẦU</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
