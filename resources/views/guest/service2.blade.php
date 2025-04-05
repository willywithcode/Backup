@extends('layouts.guest')

@section('styles')
@parent
<link href="{{ asset('resources/css/service.css') }}" rel="stylesheet">
<style>
.logo-background {
  position: absolute;
  top: 1150px;
  right: -50px;
  width: 500px;
  height: auto;
  opacity: 1;
  z-index: -1; 
  pointer-events: none;
}

.logo-background img {
  width: 100%;
  height: auto;
  object-fit: contain;
  mix-blend-mode: multiply;
}    
.intro-image img {
    position: relative;
    z-index: -2;
}

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
            padding: 0 0px;
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
<img src="{{ asset('assets/logo-logo1.png') }}" alt="Logo Background" style="width: 30%; position: fixed; right: 0; bottom: 0; z-index: 1;">
 
<div class="relative w-screen h-[600px] hero_section mb-20" style = "z-index: 10"> 
    <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Dịch vụ</h1>
    </div>
</div>
<div class="">

    <!-- Intro Section -->
    <div class="intro-section" style = "position: relative; z-index: 10">
        <div class="intro-content">
            <h2 class="section-title">Chúng tôi làm gì?</h2>
            <p class="intro-description">
                Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng
            </p>
        </div>
        <div class="intro-image relative" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset('assets/service/Frame 427321334.png') }}" alt="Office Building">
        </div>
    </div>
   <!-- Services Container -->
<div class="services-container">
    @foreach ($services as $index => $service)
        <div id="service-{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}" class="service-item {{ $index % 2 === 0 ? 'right' : 'left' }}">
            <div class="service-block image-block">
                <img src="{{ asset($service->thumbnail ?? 'assets/default-service.png') }}" alt="{{ $service->title }}">
            </div>
            <div class="service-block content-block">
                <div class="service-number" style="left: 50px;">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                <div class="service-details">
                    <h3 class="text-3xl font-bold">{{ $service->title }}</h3>
                    
                    @if (!empty($service->excerpt))
                        <p>{{ $service->excerpt }}</p>
                    @endif
                    
                    @if ($service->content)
                        <ul>
                            @foreach (explode("\n", strip_tags($service->content)) as $line)
                                @if (trim($line) !== '')
                                    <li>{{ $line }}</li>
                                @endif
                            @endforeach
                        </ul>
                    @endif

                    <a href="{{ route('services.detail', ['slug' => $service->slug]) }}" class="learn-more">Xem thêm</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Consultation Form Section -->
<section class="consultation-form relative w-full" style = "z-index: 10">
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
