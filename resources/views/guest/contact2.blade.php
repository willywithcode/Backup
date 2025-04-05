@extends('layouts.guest')

@section('styles')
@parent
<link href="{{ asset('resources/css/contact.css') }}" rel="stylesheet">
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
        
        .contact-container {
            padding: 20px 15px;
        }
        
        .contact-main-title {
            font-size: 2rem;
        }
        
        .contact-main-description {
            font-size: 1rem;
            max-width: 100%;
        }
        
        .contact-image-section {
            height: auto;
        }
        
        .contact-info-box {
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 30px;
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
        
        .contact-main-title {
            font-size: 1.8rem;
        }
    }
</style>
@endsection

@section('content')
<div class="relative w-screen h-[600px] hero_section mb-20">
    <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Liên hệ</h1>
    </div>
</div>
<div class="contact-container">
    <div class="contact-intro">
        <h1 class="contact-main-title">BEHIND OFFICE</h1>
        <p class="contact-main-description">
            Tại Behind Office, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và nâng cao hiệu quả làm việc. Nếu bạn đang tìm kiếm một giải pháp linh hoạt bền vững và hiệu quả, hãy kết nối với chúng tôi ngay hôm nay!
        </p>
    </div>

    <div class="contact-image-section">
        <img src="{{ asset('assets/contact/Frame 133.png') }}" alt="Behind Office Building" class="contact-image">
        
        <div class="contact-info-box">
            <h2 class="info-box-title">BEHIND OFFICE</h2>
            <p class="info-box-description">
                Chúng tôi tin rằng một trợ lý chuyên nghiệp không chỉ giúp hoàn thành công việc mà còn tạo ra giá trị thực sự cho khách hàng. Sứ mệnh của chúng tôi là đồng hành cùng doanh nghiệp và cá nhân, giúp họ tối ưu hóa quy trình làm việc, giảm tải áp lực hành chính và tập trung vào những mục tiêu quan trọng nhất.
            </p>
            <div class="contact-details">
                <div class="contact-detail">
                    <strong>Trụ sở:</strong> Suncet Tower, 108 Nguyen Hoang, My Dinh, Nam Tu Liem, Hanoi, Vietnam
                </div>
                <div class="contact-detail">
                    <strong>Email:</strong> behindoffice@gmail.com
                </div>
                <div class="contact-detail">
                    <strong>Hotline:</strong> 878799866
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
                        <button type="submit" class="submit-btn">GỬI YÊU CẦU</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add appear class to intro initially with a slight delay
        setTimeout(function() {
            document.querySelector('.contact-intro').classList.add('appear');
        }, 300);

        // Create Intersection Observer for the image section and info box
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

        // Observe elements
        const elementsToObserve = [
            document.querySelector('.contact-image-section'),
            document.querySelector('.contact-info-box')
        ];

        elementsToObserve.forEach(element => {
            if (element) observer.observe(element);
        });
    });
</script>
@endsection
