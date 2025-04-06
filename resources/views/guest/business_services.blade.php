@extends('layouts.guest')

@section('styles')
    <link href="{{ asset('resources/css/business-services.css') }}" rel="stylesheet">
    <style>
        .logo-background {
            position: absolute;
            top: 295px;
            right: -100px;
            width: 700px;
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

        .about-us {
            position: relative;
            overflow: visible;
        }

        .our-services {
            position: relative;
        }

        /* Hexagon styles */
        .hexagon-grid {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .hex-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .hex-item {
            position: relative;
            width: 280px;
            height: 320px;
            margin: 15px;
            text-align: center;
            color: white;
            transition: transform 0.3s ease;
        }

        .hex-content {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .hex-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .hex-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            box-sizing: border-box;
            z-index: 1;
        }

        .hex-overlay h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .hex-overlay p {
            font-size: 0.9rem;
            line-height: 1.4;
        }

        /* Custom style to remove margin-top on hex-row-offset only in mobile view */
        @media (max-width: 768px) {
            .hex-row-offset {
                margin-top: 0 !important;
            }

            .hex-item {
                width: 240px;
                height: 280px;
                margin: 10px auto;
            }

            .hex-overlay {
                padding: 20px;
            }

            .hex-overlay h3 {
                font-size: 1.25rem;
                margin-bottom: 8px;
            }

            .hex-overlay p {
                font-size: 0.85rem;
                line-height: 1.3;
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

        .services-image-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }

        .services-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .about-bg-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }

        .about-bg-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 1;
        }

        .about-bg-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            position: relative;
            z-index: 0;
        }

        .about-us {
            position: relative;
            background-color: transparent;
        }

        .about-content {
            position: relative;
            z-index: 2;
        }

        .our-services {
            position: relative;
            background-color: transparent;
        }

        .section-title,
        .service-title {
            color: #1C1F35;
            position: relative;
            z-index: 2;
        }

        .service-card {
            background-color: rgba(255, 255, 255, 0.8);
            position: relative;
            z-index: 2;
            backdrop-filter: blur(5px);
        }

        /* Why Choose Us image container */
        .why-choose-us-image-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            overflow: hidden;
        }

        .why-choose-us-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .why-choose-section {
            position: relative;
            background-color: transparent;
        }

        .why-choose-section .container {
            position: relative;
            z-index: 2;
        }

        .why-choose-section .section-title h2 {
            color: white;
        }

        .testimonial-card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            z-index: 10 !important;
        }

        .why-choose-us-image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 45, 86, 0.85);
            z-index: 1;
        }

        .why-choose-us {
            position: relative;
            background-color: transparent;
        }

        .why-choose-us__title,
        .why-choose-us__subtitle,
        .feature-card__title,
        .feature-card__description,
        .feature-card {
            position: relative;
            z-index: 2;
        }

        .why-choose-us::before {
            display: none;
        }

        /* Testimonial slider styles */
        .testimonials-slider {
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .testimonials-wrapper {
            width: 100%;
            overflow: hidden;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        .testimonials-track {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%;
            cursor: grab;
        }

        .testimonials-track:active {
            cursor: grabbing;
        }

        .testimonial-slide {
            padding: 0 8px;
            box-sizing: border-box;
            flex: 0 0 33.333%;
            min-width: 33.333%;
            pointer-events: none;
        }

        .testimonial-slide .testimonial-card {
            pointer-events: auto;
        }

        @media (max-width: 767px) {
            .testimonial-slide {
                flex: 0 0 100%;
                min-width: 100%;
            }
        }

        .testimonial-nav-btn {
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 20;
        }

        .testimonial-nav-btn:hover {
            background-color: #f8f9fa;
        }

        .testimonial-pagination-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }

        .testimonial-pagination-dots .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .testimonial-pagination-dots .dot.active {
            width: 30px;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .testimonials .grid {
                padding-left: 1rem;
                padding-right: 1rem;
                gap: 0.5rem !important;
            }

            .testimonial-card:not(:last-child) {
                margin-bottom: 1.5rem !important;
            }

            .testimonial-card {
                padding: 1.5rem;
            }

            .services-image-container {
                display: none;
            }

            .our-services {
                background-color: #fff;
            }

            .why-choose-us-image-container {
                display: none;
            }

            .why-choose-section {
                background-color: rgba(0, 45, 86, 0.85);

            }

            .business-service-hero .container {
                padding-left: 20px !important;
                padding-right: 20px !important;
                text-align: center !important;
            }

            .hero-content {
                margin: 0 auto !important;
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                justify-content: center !important;
            }

            .welcome-text,
            .hero-title,
            .hero-description {
                text-align: center !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .hero-buttons {
                justify-content: center !important;
                align-items: center !important;
                margin: 0 auto !important;
            }

            .service-card {
                width: 300px !important;
                margin-bottom: 40px !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .services-track {
                gap: 30px !important;
                justify-content: center !important;
            }

            .service-image-wrapper {
                height: 380px !important;
            }

            .services-header {
                flex-direction: column;
                gap: 15px;
                text-align: center !important;
            }

            .section-title {
                text-align: center;
                width: 100%;
            }

            .quote-btn {
                margin: 0 auto;
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
                position: relative !important;
                width: 90% !important;
                max-width: none !important;
                right: auto !important;
                left: auto !important;
                margin: 20px auto !important;
                transform: none !important;
                bottom: auto !important;
            }

            .project-count .text {
                white-space: normal !important;
                text-align: center !important;
                width: 100% !important;
            }

            .hex-item {
                margin: 10px auto !important;
            }

            .about-action {
                text-align: center;
                width: 100% !important;
                display: flex !important;
                justify-content: center !important;
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

            .behindoffice-popup__modal {
                width: 90% !important;
                max-width: 400px !important;
            }

            /* Testimonials spacing and centering in mobile */
            .testimonial-card {
                margin-bottom: 1rem !important;
                text-align: center !important;
            }

            .testimonial-author {
                align-items: center !important;
            }

            .testimonial-slide {
                padding: 0 !important;
                margin-bottom: 0 !important;
            }

            .testimonial-pagination-dots .dot {
                width: 8px;
                height: 8px;
            }

            .testimonial-pagination-dots .dot.active {
                width: 20px;
            }

            /* Why Choose Us section centering */
            .why-choose-us__title,
            .why-choose-us__subtitle {
                text-align: center !important;
            }

            .feature-card {
                text-align: center !important;
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
            }

            .feature-card__content {
                text-align: center !important;
            }

            /* Adjust about-image to make room for project-count */
            .about-image {
                position: relative !important;
            }

            .about-bg-container {
                display: none;
            }

            .about-us {
                background-color: #ffffff;
            }
        }

        @media (max-width: 480px) {
            .business-service-hero {
                height: auto !important;
                min-height: 500px !important;
            }

            .welcome-text {
                font-size: 1rem !important;
            }

            .hero-title {
                font-size: 1.6rem !important;
                margin-bottom: 1rem !important;
            }

            .hero-description {
                font-size: 0.9rem !important;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 10px;
            }

            .service-card {
                width: 260px !important;
                margin-bottom: 50px !important;
            }

            .services-track {
                gap: 40px !important;
            }

            .service-image-wrapper {
                height: 320px !important;
            }

            .service-title {
                font-size: 0.9rem !important;
            }

            .project-count {
                width: 90% !important;
                max-width: 240px !important;
                right: 0 !important;
                bottom: -25px !important;
            }

            .why-choose-us__title {
                font-size: 1.5rem !important;
            }

            .why-choose-us__subtitle {
                font-size: 0.9rem !important;
                margin-bottom: 30px !important;
            }

            .feature-card__title {
                font-size: 1.1rem !important;
            }

            .feature-card__description {
                font-size: 0.85rem !important;
            }

            .consultation-title {
                font-size: 1.5rem !important;
                text-align: center !important;
            }

            .consultation-description {
                font-size: 0.9rem !important;
                text-align: center !important;
            }

            .submit-btn {
                width: 100% !important;
                padding: 12px !important;
            }
        }

        /* Popup form input styles */
        .behindoffice-popup__input {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .behindoffice-popup__input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.25);
        }

        .behindoffice-popup__input::placeholder {
            color: #6c757d;
        }

        .behindoffice-popup__submit {
            width: 20%;
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

        .behindoffice-popup__submit:hover {
            background-color: #2980b9;
        }
    </style>
@endsection

@section('content')
<img src="{{ asset('assets/logo-logo1.png') }}" alt="Logo Background" style="width: 30%; position: fixed; right: 0; bottom: 0; z-index: 1;">
 
    <div class="business-service-hero" style = "z-index: 10">
        <div class="container mx-auto px-40 py-20 relative">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <p class="welcome-text">Welcome</p>
                <h1 class="hero-title">
                    DỊCH VỤ TRỢ LÝ CÁ NHÂN <br>
                    & DOANH NGHIỆP
                </h1>
                <div class="hero-description">
                    <p>Behind Office cung cấp giải pháp tối ưu cho những</p>
                    <p>vấn đề hành chính, giấy tờ thủ tục, từ visa, hộ chiếu</p>
                    <p>đến các thủ tục pháp lý phức tạp</p>
                </div>
                <div class="hero-buttons mt-6">
                    <a href="{{ route('contact') }}" class="btn-contact">Liên hệ</a>
                    <a href="#" class="btn-more">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Services Section -->
    <section class="container our-services mx-auto px-4 md:px-8 mt-12 md:mt-20"
        style="max-width: 100%;overflow-x: hidden;">
        <div class ="our-services">
            <div class="container mx-auto">
                <div class="services-header flex justify-between items-center mb-8">
                    <h2 class="section-title text-2xl md:text-3xl font-bold text-[#1C1F35]">Dịch vụ của chúng tôi</h2>
                    <a href="#"
                        class="quote-btn text-white px-8 py-3 rounded flex items-center whitespace-nowrap w-44 justify-center"
                        style="background: linear-gradient(to right, #2990D0, #15496A)">
                        <img src="{{ asset('assets/home/Vector.png') }}" alt="Quote Icon" class="w-5 h-4 mr-2">
                        Nhận báo giá
                    </a>
                </div>

                <!-- Horizontal scrollable services -->
                <div class="services-container relative" style = "z-index: 10">
                    <div class="services-slider overflow-x-auto">
                        <div class="services-track flex space-x-6" style="min-width: max-content;">
                            @foreach ($services as $service)
                                <div class="service-card" data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}" style = "z-index: 10">
                                    <div class="service-card-frame">
                                        <div class="service-image-wrapper">
                                            <img src="{{ asset($service->thumbnail ?? 'assets/default-service.png') }}"
                                                alt="{{ $service->title }}" class="service-image">
                                            <div class="service-overlay">
                                                <div class="service-content">
                                                    <p class="service-description">
                                                        {{ $service->excerpt ?? Str::limit(strip_tags($service->full_description), 100) }}
                                                    </p>
                                                    <a href="{{ route('services.detail', ['slug' => $service->slug]) }}"
                                                        class="service-btn">Xem thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-title-container">
                                            <h3 class="service-title">{{ $service->title }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Navigation arrows -->
                    <button
                        class="slider-nav-btn slider-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 flex items-center justify-center"
                        style="display: none;">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button
                        class="slider-nav-btn slider-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 flex items-center justify-center"
                        style="display: none;">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- Pagination dots -->
                <div class="pagination-dots flex justify-center">
                    <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                </div>
            </div>
            <div class="about-us pt-16 pb-12 md:pb-24 bg-white relative overflow-hidden">
                <div class="container mx-auto">
                    <div class="about-content grid grid-cols-1 md:grid-cols-2 gap-0 md:gap-24">
                        <div class="about-image relative" data-aos="fade-right" data-aos-duration="1000" style = "z-index: 10">
                            <img src="{{ asset('assets/home/woman-with-headset-having-video-call-laptop 1.png') }}"
                                alt="Behind Office Team" class="w-full h-auto rounded-lg shadow-lg">
                            <!-- Project count box positioned below the image and extending beyond right edge -->
                            <div
                                class="project-count md:absolute md:-bottom-12 md:-right-10 bg-[#071B35] text-white py-4 px-6 rounded-lg w-full md:w-80 shadow-lg mt-6 md:mt-0 hidden md:block">
                                <div class="relative">
                                    <div class="flex items-center justify-start">
                                        <div class="text whitespace-nowrap md:text-left text-center w-full">
                                            <span class="font-bold text-xl">1200+</span> Dự án đã hoàn thành
                                        </div>
                                    </div>
                                    <div class="absolute -top-8 -right-2 hidden md:block">
                                        <img src="{{ asset('assets/img/IconBox.png') }}" alt="Shield Icon"
                                            style="width: 70px; height: 70px; display: block !important; visibility: visible !important; z-index: 999;">
                                    </div>
                                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 md:hidden block">
                                        <img src="{{ asset('assets/img/IconBox.png') }}" alt="Shield Icon"
                                            style="width: 70px; height: 70px; display: block !important; visibility: visible !important; z-index: 999;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-text" data-aos="fade-left" data-aos-duration="1000">
                            <div class="text-center md:text-left">
                                <h2 class="text-2xl md:text-3xl font-bold text-[#1C1F35] mb-6 relative pb-3">Chúng tôi là
                                    ai?
                                    <span class="hidden md:inline"></span>
                                    <span
                                        class="block md:hidden h-1 w-16 bg-[#2EA7E0] absolute bottom-0 left-1/2 transform -translate-x-1/2 md:left-0 md:transform-none rounded"></span>
                                </h2>
                            </div>
                            <div class="text-gray-700 space-y-4 text-justify md:pr-10">
                                <p style="text-align:justify !important;">Behind Office là đơn vị chuyên cung cấp dịch vụ trợ lý chuyên nghiệp, hỗ trợ doanh
                                    nghiệp và cá nhân trong việc quản lý công việc, tối ưu hóa quy trình văn hành và
                                    nâng cao hiệu suất làm việc. Với sự mềm giúp khách hàng giảm tải áp lực hành chính,
                                    chúng tôi mang đến đội ngũ trợ lý giàu kinh nghiệm, linh hoạt và tận tâm, sẵn sàng
                                    đồng hành trong mọi khía cạnh của công việc.</p>
                                <p style="text-align:justify !important;">Với quy trình làm việc chuyên nghiệp, bảo mật thông tin tuyệt đối và giải pháp linh
                                    hoạt theo từng nhu cầu, Behind Office cam kết giúp khách hàng tiết kiệm thời gian,
                                    tập trung vào các mục tiêu quan trọng và phát triển kinh doanh bền vững.</p>
                                <p style="text-align:justify !important;">Chúng tôi không chỉ là trợ lý – mà còn là người đồng hành đáng tin cậy trên hành
                                    trình thành công của bạn!</p>
                            </div>
                            <div class="about-action mt-8 flex justify-center md:justify-start">
                                <a href="{{ route('contact') }}"
                                    class="bg-[#2EA7E0] text-white px-12 py-3 rounded-lg hover:bg-blue-600 transition duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1">Liên
                                    hệ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Behind Office Section -->
    <section class="why-choose-section py-16 relative"
        style="background-image: url('{{ asset('assets/home/Why choice us.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; z-index: 10;">
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
                                <p>Behind Office xử lý nhanh mọi yêu cầu, không để phát sinh thêm, là giải pháp chuyên
                                    nghiệp hỗ trợ 24/7.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hiệu quả -->
                    <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="hex-content">
                            <img src="{{ asset('assets/about/iconHexa2.png') }}" alt="Hiệu quả" class="hex-bg">
                            <div class="hex-overlay">
                                <h3>Hiệu quả</h3>
                                <p>Behind Office cam kết kết quả tối ưu, tiến độ công việc nhanh chóng, tăng hiệu quả giảm
                                    chi phí.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Uy tín -->
                    <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="hex-content">
                            <img src="{{ asset('assets/about/iconHexa3.png') }}" alt="Uy tín" class="hex-bg">
                            <div class="hex-overlay">
                                <h3>Uy tín</h3>
                                <p>Behind Office cam kết bảo mật hàng đầu, với đội ngũ chuyên môn đã làm việc với nhiều đối
                                    tác uy tín trong nước.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Row - Offset -->
                <div class="hex-row hex-row-offset"
                    style="margin-top: -87px; @media (max-width: 768px) { margin-top: 0 !important; }">
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
    <section class="consultation-form relative" style = "z-index: 10">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/home/489440851_977986144496616_8889322225191558916_n.png') }}" alt="Background"
                class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Content -->
                <div class="consultation-content" data-aos="fade-right" data-aos-duration="1000"
                    style="padding-left: 100px;">
                    <div class="consultation-label">
                        <span>TƯ VẤN VÀ BÁO GIÁ</span>
                    </div>
                    <h2 class="consultation-title">Phát triển doanh nghiệp mà không đánh đổi thời gian rảnh</h2>
                    <p class="consultation-description">
                        Lorem ipsum dolor sit amet consectetur. Senectus nulla faucibus feugiat mi et mattis risus tortor.
                        Elementum elementum scelerisque ac ac placerat eget ultrices. Sit ac varius commodo egestas.
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
                            <button type="submit" class="submit-btn" style="background-color: #122B47;">GỬI YÊU
                                CẦU</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-16 bg-white" style = "z-index: 10">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#1C1F35] mb-6" data-aos="fade-up" data-aos-duration="1000">Khách hàng
                    nói gì về chúng tôi</h2>
                <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    Behind Office luôn nhận được sự tin tưởng và đánh giá cao từ khách hàng nhờ dịch vụ chuyên nghiệp, hỗ
                    trợ tận tâm và giải pháp tối ưu. Chúng tôi tự hào đồng hành cùng doanh nghiệp, giúp công việc vận hành
                    hiệu quả và suôn sẻ hơn.
                </p>
            </div>

            <div class="testimonials-slider relative">
                <div class="testimonials-wrapper overflow-hidden">
                    <div class="testimonials-track flex transition-transform duration-300" id="testimonials-track" style = "z-index: 10; position: relative;">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-slide min-w-full md:min-w-[33.333%]">
                            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100 mx-2" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="1000">
                                <div class="testimonial-content mb-6">
                                    <p class="text-gray-700 italic">
                                        "Behind Office mang đến dịch vụ chuyên nghiệp, giúp công việc hậu cần văn phòng của chúng tôi
                                        vận hành suôn sẻ hơn. Nhờ họ, tôi có thể tập trung vào chiến lược kinh doanh mà không lo gián
                                        đoạn."
                                    </p>
                                </div>
                                <div class="testimonial-author flex flex-col items-center">
                                    <div class="author-avatar mb-3">
                                        <img src="{{ asset('assets/home/avatar1.png') }}" alt="Anna Lee"
                                            class="w-16 h-16 rounded-full">
                                    </div>
                                    <div class="author-info text-center">
                                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">ANNA LEE</h4>
                                        <p class="author-position text-sm text-gray-500 uppercase">FAIRY CAKE</p>
                                        <div class="rating flex justify-center mt-2">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-slide min-w-full md:min-w-[33.333%]">
                            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100 mx-2" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="1000">
                                <div class="testimonial-content mb-6">
                                    <p class="text-gray-700 italic">
                                        "Đội ngũ Behind Office hỗ trợ tận tâm, phản hồi nhanh chóng và xử lý vấn đề hiệu quả. Nhờ họ,
                                        công ty tôi tiết kiệm được nhiều thời gian, giúp công việc vận hành trơn tru mà không bị gián
                                        đoạn."
                                    </p>
                                </div>
                                <div class="testimonial-author flex flex-col items-center">
                                    <div class="author-avatar mb-3">
                                        <img src="{{ asset('assets/home/avatar2.png') }}" alt="Minh Tiến"
                                            class="w-16 h-16 rounded-full">
                                    </div>
                                    <div class="author-info text-center">
                                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">Minh Tiến</h4>
                                        <p class="author-position text-sm text-gray-500 uppercase">NINA LIVE CO.,LTD</p>
                                        <div class="rating flex justify-center mt-2">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-slide min-w-full md:min-w-[33.333%]">
                            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100 mx-2" data-aos="fade-up"
                                data-aos-delay="300" data-aos-duration="1000">
                                <div class="testimonial-content mb-6">
                                    <p class="text-gray-700 italic">
                                        "Behind Office cung cấp giải pháp linh hoạt, phù hợp với nhu cầu doanh nghiệp. Nhờ dịch vụ
                                        chuyên nghiệp của họ, chúng tôi tối ưu được chi phí vận hành và tập trung hơn vào hoạt động kinh
                                        doanh."
                                    </p>
                                </div>
                                <div class="testimonial-author flex flex-col items-center">
                                    <div class="author-avatar mb-3">
                                        <img src="{{ asset('assets/home/avatar3.png') }}" alt="Duy Khang"
                                            class="w-16 h-16 rounded-full">
                                    </div>
                                    <div class="author-info text-center">
                                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">Duy Khang</h4>
                                        <p class="author-position text-sm text-gray-500 uppercase">JAME BUILDING</p>
                                        <div class="rating flex justify-center mt-2">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-slide min-w-full md:min-w-[33.333%]">
                            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100 mx-2" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="1000">
                                <div class="testimonial-content mb-6">
                                    <p class="text-gray-700 italic">
                                        "Tôi rất hài lòng với sự chuyên nghiệp và nhiệt tình của Behind Office. Họ đã giúp công ty tôi 
                                        xử lý mọi thủ tục hành chính một cách nhanh chóng và chính xác."
                                    </p>
                                </div>
                                <div class="testimonial-author flex flex-col items-center">
                                    <div class="author-avatar mb-3">
                                        <img src="{{ asset('assets/home/avatar1.png') }}" alt="Thanh Hương"
                                            class="w-16 h-16 rounded-full">
                                    </div>
                                    <div class="author-info text-center">
                                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">Thanh Hương</h4>
                                        <p class="author-position text-sm text-gray-500 uppercase">GREEN TECH</p>
                                        <div class="rating flex justify-center mt-2">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-slide min-w-full md:min-w-[33.333%]">
                            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100 mx-2" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="1000">
                                <div class="testimonial-content mb-6">
                                    <p class="text-gray-700 italic">
                                        "Behind Office đã giúp tôi tiết kiệm rất nhiều thời gian và công sức trong việc xử lý các 
                                        thủ tục pháp lý phức tạp. Đội ngũ nhân viên rất chuyên nghiệp và am hiểu."
                                    </p>
                                </div>
                                <div class="testimonial-author flex flex-col items-center">
                                    <div class="author-avatar mb-3">
                                        <img src="{{ asset('assets/home/avatar2.png') }}" alt="Hoàng Nam"
                                            class="w-16 h-16 rounded-full">
                                    </div>
                                    <div class="author-info text-center">
                                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">Hoàng Nam</h4>
                                        <p class="author-position text-sm text-gray-500 uppercase">SKY MEDIA</p>
                                        <div class="rating flex justify-center mt-2">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="testimonial-slide min-w-full md:min-w-[33.333%]">
                            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100 mx-2" data-aos="fade-up"
                                data-aos-delay="300" data-aos-duration="1000">
                                <div class="testimonial-content mb-6">
                                    <p class="text-gray-700 italic">
                                        "Dịch vụ của Behind Office thực sự ấn tượng. Họ đã giúp tôi xử lý mọi công việc hành chính 
                                        một cách hiệu quả, để tôi có thể tập trung vào phát triển kinh doanh của mình."
                                    </p>
                                </div>
                                <div class="testimonial-author flex flex-col items-center">
                                    <div class="author-avatar mb-3">
                                        <img src="{{ asset('assets/home/avatar3.png') }}" alt="Minh Anh"
                                            class="w-16 h-16 rounded-full">
                                    </div>
                                    <div class="author-info text-center">
                                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">Minh Anh</h4>
                                        <p class="author-position text-sm text-gray-500 uppercase">BLUE OCEAN</p>
                                        <div class="rating flex justify-center mt-2">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation arrows -->
                <button
                    class="testimonial-nav-btn testimonial-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 flex items-center justify-center hidden md:flex">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button
                    class="testimonial-nav-btn testimonial-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 flex items-center justify-center hidden md:flex">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Pagination dots -->
            <div class="testimonial-pagination-dots flex justify-center mt-10">
                <!-- Will be populated by JavaScript -->
            </div>
        </div>
        <!-- Behind Office Popup -->
        <div id="behindoffice-popup"
            class="behindoffice-popup fixed inset-0 z-50 flex items-center justify-center hidden">
            <div class="behindoffice-popup__overlay absolute inset-0 backdrop-blur-sm bg-black bg-opacity-30"></div>

            <div class="behindoffice-popup__modal relative bg-white rounded-xl shadow-2xl p-8 w-full max-w-md z-10 text-center"
                style="background: linear-gradient(135deg, #e8f3ff, #ffffff);">
                <button id="behindoffice-popup-close"
                    class="absolute top-3 right-3 text-gray-500 hover:text-black text-2xl">&times;</button>

                <div class="flex justify-center">
                    <div class="relative mb-5 mt-2 inline-block">
                        <div
                            style="width: 30%; height: 3px; background-color: #2990D0; position: absolute; top: -10px; left: 0; border-radius: 2px;">
                        </div>
                        <h2 class="text-2xl font-bold text-[#002D56] mb-1">BEHIND OFFICE</h2>
                        <div
                            style="width: 20%; height: 3px; background-color: #2990D0; position: absolute; bottom: -10px; right: 0; border-radius: 2px;">
                        </div>
                    </div>
                </div>

                <p class="text-gray-600 text-sm mb-6">Vui lòng điền thông tin chi tiết chúng tôi sẽ liên hệ tư vấn!</p>

                <form>
                    <input type="text" placeholder="Họ tên" class="behindoffice-popup__input mb-4">
                    <input type="tel" placeholder="Số điện thoại" class="behindoffice-popup__input mb-4">
                    <textarea placeholder="Nội dung cần tư vấn" rows="3" class="behindoffice-popup__input mb-6"></textarea>
                    <button type="submit" class="behindoffice-popup__submit">Gửi</button>
                </form>
            </div>
        </div>


    </section>

    <!-- Add swipe functionality with JavaScript -->
@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const popup = document.getElementById("behindoffice-popup");
            const closeBtn = document.getElementById("behindoffice-popup-close");
            const quoteBtn = document.querySelector('.quote-btn');
            const submitBtn = document.querySelector('.behindoffice-popup__submit');

            // Show popup when "Nhận báo giá" button is clicked
            quoteBtn.addEventListener("click", function(e) {
                e.preventDefault();
                popup.classList.remove("hidden");
            });

            // Hide popup when close button is clicked
            closeBtn.addEventListener("click", () => {
                popup.classList.add("hidden");
            });

            // Hide popup when form is submitted
            submitBtn.addEventListener("click", (e) => {
                e.preventDefault();
                popup.classList.add("hidden");
                // Form submission logic can be added here
            });

            // Hide popup when clicking outside the modal
            popup.addEventListener("click", (e) => {
                if (e.target === popup) {
                    popup.classList.add("hidden");
                }
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliderTrack = document.querySelector('.services-track');
            const dots = document.querySelectorAll('.dot');
            const cards = document.querySelectorAll('.service-card');
            const sliderContainer = document.querySelector('.services-slider');
            const prevBtn = document.querySelector('.slider-prev');
            const nextBtn = document.querySelector('.slider-next');

            let isDragging = false;
            let startPos = 0;
            let currentTranslate = 0;
            let prevTranslate = 0;
            let currentIndex = 0;
            const cardWidth = 280 + 24; // Card width + gap

            // Initialize slider position
            function updateSliderPosition() {
                sliderTrack.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
                sliderTrack.style.transition = 'transform 0.3s ease-out';

                // Update active dot
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });

                // Show/hide nav buttons based on visibility
                if (prevBtn && nextBtn) {
                    prevBtn.style.display = currentIndex > 0 ? 'flex' : 'none';
                    nextBtn.style.display = currentIndex < cards.length - 1 ? 'flex' : 'none';
                }
            }

            // Set up dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateSliderPosition();
                });
            });

            // Set up arrow navigation
            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    if (currentIndex > 0) {
                        currentIndex--;
                        updateSliderPosition();
                    }
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    if (currentIndex < cards.length - 1) {
                        currentIndex++;
                        updateSliderPosition();
                    }
                });
            }

            // Touch events
            sliderTrack.addEventListener('touchstart', touchStart);
            sliderTrack.addEventListener('touchmove', touchMove);
            sliderTrack.addEventListener('touchend', touchEnd);

            function touchStart(event) {
                startPos = event.touches[0].clientX;
                isDragging = true;
                prevTranslate = currentTranslate;
            }

            function touchMove(event) {
                if (!isDragging) return;
                const currentPosition = event.touches[0].clientX;
                currentTranslate = prevTranslate + (currentPosition - startPos);
            }

            function touchEnd() {
                isDragging = false;
                const threshold = cardWidth / 4;
                const draggedDistance = currentTranslate - prevTranslate;

                if (draggedDistance > threshold && currentIndex > 0) {
                    currentIndex--;
                } else if (draggedDistance < -threshold && currentIndex < cards.length - 1) {
                    currentIndex++;
                }

                updateSliderPosition();
            }

            // Mouse events (optional for desktop)
            sliderTrack.addEventListener('mousedown', mouseStart);
            sliderTrack.addEventListener('mousemove', mouseMove);
            sliderTrack.addEventListener('mouseup', mouseEnd);
            sliderTrack.addEventListener('mouseleave', mouseEnd);

            function mouseStart(event) {
                event.preventDefault();
                startPos = event.clientX;
                isDragging = true;
                prevTranslate = currentTranslate;
            }

            function mouseMove(event) {
                if (!isDragging) return;
                const currentPosition = event.clientX;
                currentTranslate = prevTranslate + (currentPosition - startPos);
            }

            function mouseEnd() {
                isDragging = false;
                const threshold = cardWidth / 4;
                const draggedDistance = currentTranslate - prevTranslate;

                if (draggedDistance > threshold && currentIndex > 0) {
                    currentIndex--;
                } else if (draggedDistance < -threshold && currentIndex < cards.length - 1) {
                    currentIndex++;
                }

                updateSliderPosition();
            }

            // Initialize
            updateSliderPosition();
        });
    </script>

    <!-- Testimonial Slider JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Testimonial slider elements
            const testimonialsTrack = document.getElementById('testimonials-track');
            const testimonialSlides = document.querySelectorAll('.testimonial-slide');
            const paginationContainer = document.querySelector('.testimonial-pagination-dots');
            const prevBtn = document.querySelector('.testimonial-prev');
            const nextBtn = document.querySelector('.testimonial-next');
            
            // Define constants
            const isMobile = window.innerWidth < 768;
            const slidesPerGroup = isMobile ? 1 : 3; // 1 testimonial per dot on mobile, 3 on desktop
            const slidesPerView = isMobile ? 1 : 3;
            
            // Calculate number of groups (dynamic based on device)
            const totalGroups = Math.ceil(testimonialSlides.length / slidesPerGroup);
            
            let currentGroup = 0;
            
            // For drag functionality
            let isDragging = false;
            let startPosition = 0;
            let currentTranslate = 0;
            let prevTranslate = 0;
            let animationID = 0;
            let currentIndex = 0;
            
            // Clear existing dots and create pagination dots
            paginationContainer.innerHTML = '';
            for (let i = 0; i < totalGroups; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (i === 0) dot.classList.add('active', 'bg-blue-500');
                else dot.classList.add('bg-gray-300');
                dot.dataset.index = i;
                paginationContainer.appendChild(dot);
                
                // Add click event to each dot
                dot.addEventListener('click', () => {
                    goToGroup(i);
                });
            }
            
            // Update slide positions
            function updateSliderPosition() {
                const translateValue = -(currentGroup * slidesPerGroup * 100) / slidesPerView;
                testimonialsTrack.style.transform = `translateX(${translateValue}%)`;
                
                // Update active dot
                document.querySelectorAll('.testimonial-pagination-dots .dot').forEach((dot, index) => {
                    if (index === currentGroup) {
                        dot.classList.add('active', 'bg-blue-500');
                        dot.classList.remove('bg-gray-300');
                    } else {
                        dot.classList.remove('active', 'bg-blue-500');
                        dot.classList.add('bg-gray-300');
                    }
                });
                
                // Show/hide navigation buttons
                if (prevBtn && nextBtn) {
                    prevBtn.style.display = currentGroup > 0 ? 'flex' : 'none';
                    nextBtn.style.display = currentGroup < totalGroups - 1 ? 'flex' : 'none';
                }
            }
            
            // Go to a specific group
            function goToGroup(groupIndex) {
                if (groupIndex >= 0 && groupIndex < totalGroups) {
                    currentGroup = groupIndex;
                    updateSliderPosition();
                }
            }
            
            // Handle navigation button clicks
            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    if (currentGroup > 0) {
                        currentGroup--;
                        updateSliderPosition();
                    }
                });
            }
            
            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    if (currentGroup < totalGroups - 1) {
                        currentGroup++;
                        updateSliderPosition();
                    }
                });
            }
            
            // Drag functionality
            function getPositionX(event) {
                return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
            }
            
            function setPositionByIndex() {
                currentTranslate = currentIndex * -testimonialSlides[0].offsetWidth;
                prevTranslate = currentTranslate;
                setSliderPosition();
            }
            
            function setSliderPosition() {
                // Convert pixel translation to percentage for consistency
                const slideWidth = testimonialSlides[0].offsetWidth;
                const trackWidth = testimonialsTrack.offsetWidth;
                const translatePercent = (currentTranslate / trackWidth) * 100;
                
                testimonialsTrack.style.transform = `translateX(${translatePercent}%)`;
            }
            
            function animation() {
                setSliderPosition();
                if (isDragging) requestAnimationFrame(animation);
            }
            
            // Touch events for swiping
            testimonialsTrack.addEventListener('touchstart', touchStart);
            testimonialsTrack.addEventListener('touchmove', touchMove);
            testimonialsTrack.addEventListener('touchend', touchEnd);
            
            // Mouse events for dragging
            testimonialsTrack.addEventListener('mousedown', touchStart);
            testimonialsTrack.addEventListener('mousemove', touchMove);
            testimonialsTrack.addEventListener('mouseup', touchEnd);
            testimonialsTrack.addEventListener('mouseleave', touchEnd);
            
            function touchStart(event) {
                if (event.type === 'mousedown') {
                    event.preventDefault(); // Prevent text selection during drag
                }
                
                startPosition = getPositionX(event);
                isDragging = true;
                
                // Stop any ongoing slide animation
                cancelAnimationFrame(animationID);
                
                // Start drag animation
                animationID = requestAnimationFrame(animation);
                
                // Add grabbing cursor
                testimonialsTrack.style.cursor = 'grabbing';
            }
            
            function touchMove(event) {
                if (isDragging) {
                    const currentPosition = getPositionX(event);
                    const moveDistance = currentPosition - startPosition;
                    
                    // Update current translate based on drag distance
                    currentTranslate = prevTranslate + moveDistance;
                }
            }
            
            function touchEnd() {
                isDragging = false;
                cancelAnimationFrame(animationID);
                
                // Calculate how much the slider was moved
                const movedDistance = currentTranslate - prevTranslate;
                
                // Determine if we should go to next/prev slide or stay at current
                if (movedDistance < -50 && currentGroup < totalGroups - 1) {
                    currentGroup++;
                } else if (movedDistance > 50 && currentGroup > 0) {
                    currentGroup--;
                }
                
                // Update slider position to snap to the correct group
                updateSliderPosition();
                
                // Reset cursor style
                testimonialsTrack.style.cursor = 'grab';
            }
            
            // Add grabbing cursor to the track
            testimonialsTrack.style.cursor = 'grab';
            
            // Prevent context menu on right click
            testimonialsTrack.addEventListener('contextmenu', e => {
                e.preventDefault();
                e.stopPropagation();
                return false;
            });
            
            // Handle window resize
            window.addEventListener('resize', () => {
                const wasIsMobile = isMobile;
                const newIsMobile = window.innerWidth < 768;
                
                // Only update if the layout mode changed
                if (wasIsMobile !== newIsMobile) {
                    location.reload(); // Simple solution: reload to recalculate everything
                }
            });
            
            // Initialize
            updateSliderPosition();
        });
    </script>
@endsection
