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

/* Service Slider Styles */
.services-container {
    position: relative;
    overflow: hidden;
}

.services-slider {
    overflow-x: auto;
    scrollbar-width: none; /* For Firefox */
    -ms-overflow-style: none; /* For Internet Explorer and Edge */
}

.services-slider::-webkit-scrollbar {
    display: none; /* For Chrome, Safari, and Opera */
}

.services-track {
    display: flex;
    gap: 1.5rem;
}

.service-card {
    flex: 0 0 auto;
    width: 280px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.service-card-frame {
    position: relative;
    height: 100%;
}

.service-image-wrapper {
    position: relative;
    height: 400px;
    overflow: hidden;
}

.service-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.service-content {
    color: white;
    text-align: center;
}

.service-description {
    margin-bottom: 20px;
    font-size: 0.9rem;
    line-height: 1.6;
}

.service-btn {
    display: inline-block;
    background-color: white;
    color: #1C1F35;
    padding: 8px 16px;
    border-radius: 4px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.service-btn:hover {
    background-color: #1C1F35;
    color: white;
}

.service-card:hover .service-overlay {
    opacity: 1;
}

.service-card:hover .service-image {
    transform: scale(1.1);
}

.service-title-container {
    background-color: white;
    padding: 15px;
    border-top: 2px solid #2990D0;
}

.service-title {
    font-size: 1rem;
    font-weight: 600;
    color: #1C1F35;
    margin: 0;
    text-align: center;
}

.pagination-dots {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 1.5rem;
}

.dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #ccc;
    cursor: pointer;
    transition: all 0.3s ease;
}

.dot.active {
    background-color: #2990D0;
    transform: scale(1.2);
}

.logo-background {
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: -1;
    pointer-events: none;
    opacity: 0.1;
}

/* Slider navigation buttons */
.slider-nav-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
}

.quote-btn {
    background: linear-gradient(to right, #2990D0, #15496A);
    color: white;
    display: flex;
    align-items: center;
    white-space: nowrap;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.quote-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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


   

</div>

<!-- Our Services Section -->
<section class="our-services py-16">
  <div class ="our-services py-16">
    <div class="container mx-auto px-4">
        <div class="services-header flex justify-between items-center mb-8">
            <h2 class="section-title text-2xl md:text-3xl font-bold text-[#1C1F35]">Dịch vụ khác</h2>
        </div>

        <!-- Horizontal scrollable services -->
        <div class="services-container relative">
            <div class="services-slider overflow-x-auto pb-6">
                <div class="services-track flex space-x-6" style="min-width: max-content;">
                    <!-- Service 1 -->
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card-frame">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('assets/home/charming-ethnic-businesswoman-using-laptop 1.png') }}" alt="Trợ lý hành chính giấy tờ" class="service-image">
                                <div class="service-overlay">
                                    <div class="service-content">
                                        <p class="service-description">Giúp doanh nghiệp tiết kiệm thời gian và tối ưu quy trình làm việc. Chúng tôi hỗ trợ soạn thảo, xử lý, lưu trữ và quản lý hồ sơ...</p>
                                        <a href="{{ route('services.detail', ['slug' => 'tro-ly-hanh-chinh']) }}" class="service-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-title-container">
                                <h3 class="service-title">Trợ lý hành chính giấy tờ</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card-frame">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('assets/home/side-view-smiley-business-woman 1.png') }}" alt="Trợ lý sắp xếp công việc" class="service-image">
                                <div class="service-overlay">
                                    <div class="service-content">
                                        <p class="service-description">Chúng tôi giúp bạn tổ chức lịch trình, quản lý cuộc họp, và điều phối công việc hiệu quả để tối ưu hóa thời gian và năng suất.</p>
                                        <a href="{{ route('services.detail', ['slug' => 'tro-ly-ke-toan']) }}" class="service-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-title-container">
                                <h3 class="service-title">Trợ lý sắp xếp công việc</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card-frame">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('assets/home/image-young-asian-woman-company-worker-glasses-smiling-holding-digital-tablet-standing-white-background 1.png') }}" alt="Cung cấp nhân lực" class="service-image">
                                <div class="service-overlay">
                                    <div class="service-content">
                                        <p class="service-description">Chúng tôi cung cấp dịch vụ tìm kiếm và tuyển dụng nhân sự chất lượng cao, giúp doanh nghiệp tiết kiệm thời gian và chi phí.</p>
                                        <a href="{{ route('services.detail', ['slug' => 'giai-quyet-cong-viec']) }}" class="service-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-title-container">
                                <h3 class="service-title">Cung cấp nhân lực, giải quyết</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card-frame">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('assets/home/young-business-lady 1.png') }}" alt="Trợ lý hành chính văn" class="service-image">
                                <div class="service-overlay">
                                    <div class="service-content">
                                        <p class="service-description">Chúng tôi hỗ trợ soạn thảo, hiệu đính và quản lý tài liệu, văn bản để đảm bảo tính chuyên nghiệp và hiệu quả.</p>
                                        <a href="{{ route('services.detail', ['slug' => 'tro-ly-van-phong']) }}" class="service-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-title-container">
                                <h3 class="service-title">Trợ lý hành chính văn</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation arrows -->
            <button class="slider-nav-btn slider-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 flex items-center justify-center" style="display: none;">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="slider-nav-btn slider-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 flex items-center justify-center" style="display: none;">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Pagination dots -->
        <div class="pagination-dots flex justify-center mt-6">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </div>
<div>
<div class="logo-background absolute bottom-0 right-0 z-0 pointer-events-none opacity-10">
            <img src="{{ asset('assets/logo-logo1.png') }}" alt="Logo Background" class="w-1/4 h-1/4 object-contain">
    </div>
</section>

@endsection

@section('scripts')
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
@endsection
