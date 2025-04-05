@extends('layouts.guest')

@section('content')
    <div class="home-banner-section w-full bg-cover bg-center aspect-[1920/1282]"
        style="background-image: url('{{ asset('assets/home-bg.svg') }}')">
        <div class="container mx-auto py-12 md:py-20 px-4 md:px-8 h-full">
            <div class="w-full flex flex-col justify-center max-w-4xl h-full" data-aos="fade-right">
                <h1 class="home-banner-text text-3xl md:text-4xl lg:text-6xl mb-6 md:mb-8">
                    Vận chuyển thông minh<br>
                    tương lai bền vững
                </h1>
                <p class="home-banner-detail text-lg md:text-[22px] mb-6 md:mb-8">
                    Vertexco mang đến giải pháp logistics hiện đại, tối<br class="hidden md:block">
                    ưu hóa hiệu suất và thân thiện với môi trường.<br class="hidden md:block">
                    Chúng tôi cam kết đồng hành cùng bạn xây dựng<br class="hidden md:block">
                    một tương lai xanh và phát triển bền vững.
                </p>
                <div data-aos="fade-up" data-aos-delay="200">
                    <x-primary-button link="{{ route('contact') }}">Liên hệ ngay</x-primary-button>
                </div>
            </div>
        </div>
    </div>

    <div class="about-section container mx-auto pt-12 pb-24 px-4 md:px-8">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-fit pr-0 lg:pr-5" data-aos="fade-right">
                <div class="about-images relative flex justify-center lg:justify-start">
                    <img width="531" class="w-full lg:w-[90%] max-w-full lg:max-w-none"
                        src="{{ asset('assets/about-2.svg') }}" alt="Delivery professional">
                    <img class="absolute hidden lg:block" style="bottom: -40px; left: 339px;" width="190"
                        src="{{ asset('assets/about-1.svg') }}" alt="Logistics worker">
                </div>
            </div>
            <div class="w-full lg:w-1/2 pl-0 lg:pl-12 mt-8 lg:mt-0" data-aos="fade-left">
                <div class="about-content">
                    <h2 class="about-title text-2xl md:text-3xl lg:text-[35px] mt-4 mb-8">Tổng quan về Vertexco</h2>
                    <div class="tabs-wrapper mb-8">
                        <div class="flex flex-wrap gap-2 md:gap-3.5">
                            <button
                                class="about-tab-btn text-sm md:text-[19px] cursor-pointer active px-4 md:px-8 py-2 md:py-4 w-full sm:w-auto">Chúng
                                tôi là ai</button>
                            <button
                                class="about-tab-btn text-sm md:text-[19px] cursor-pointer px-4 md:px-8 py-2 md:py-4 w-full sm:w-auto">Câu
                                chuyện</button>
                            <button
                                class="about-tab-btn text-sm md:text-[19px] cursor-pointer px-4 md:px-8 py-2 md:py-4 w-full sm:w-auto">Đội
                                ngũ</button>
                        </div>
                    </div>
                    <p class="about-content text-base md:text-[20px] leading-relaxed">
                        Vertexco là công ty logistics hàng đầu, chuyên cung cấp giải pháp vận chuyển thông minh, tối ưu hóa
                        chuỗi cung ứng và đảm bảo tính bền vững. Với sứ mệnh kết nối toàn cầu một cách hiệu quả, chúng tôi
                        không chỉ vận chuyển hàng hóa mà còn mang đến giá trị, niềm tin và sự phát triển bền vững cho khách
                        hàng.
                    </p>
                    <div class="mt-8"></div>
                    <x-primary-button link="{{ route('about') }}">Xem thêm</x-primary-button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="py-16" style="background: #C1262E">
        <div class="container mx-auto px-8">
            <h2 class="text-center text-white text-2xl md:text-3xl lg:text-4xl font-bold mb-5" data-aos="fade-up">Dịch vụ
                chính</h2>
            <p class="text-center text-white text-sm md:text-base mb-8 md:mb-12 max-w-4xl mx-auto">
                Ứng dụng của chúng tôi mang đến cho bạn khả năng hiển thị tuyệt vời về toàn bộ mạng lưới hậu cần của bạn.
                Cho dù bạn đang quản lý một chuyến giao hàng hay giám sát hàng nghìn chuyến hàng, bạn đều có thể theo dõi vị
                trí chính xác của từng lô hàng theo thời gian thực.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('services') }}" class="block">
                        <img src="{{ asset('assets/service-1.svg') }}" alt="Vận tải Bắc Nam" class="w-full object-cover">
                        <h3 class="service-text text-center py-4">VẬN TẢI BẮC NAM</h3>
                    </a>
                </div>

                <div class="bg-white overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('services') }}" class="block">
                        <img src="{{ asset('assets/service-2.svg') }}" alt="Xe tải chở hàng" class="w-full object-cover">
                        <h3 class="service-text text-center py-4">XE TẢI CHỞ HÀNG</h3>
                    </a>
                </div>

                <div class="bg-white overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('services') }}" class="block">
                        <img src="{{ asset('assets/service-3.svg') }}" alt="Vận chuyển container" class="w-full object-cover">
                        <h3 class="service-text text-center py-4">VẬN CHUYỂN CONTAINER</h3>
                    </a>
                </div>

                <div class="bg-white overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                    <a href="{{ route('services') }}" class="block">
                        <img src="{{ asset('assets/service-4.svg') }}" alt="Vận chuyển hàng siêu trọng"
                            class="w-full object-cover">
                        <h3 class="service-text text-center py-4">VẬN CHUYỂN HÀNG SIÊU TRỌNG</h3>
                    </a>
                </div>

                <div class="bg-white overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="500">
                    <a href="{{ route('services') }}" class="block">
                        <img src="{{ asset('assets/service-5.svg') }}" alt="Chuyển nhà trọn gói giá rẻ"
                            class="w-full object-cover">
                        <h3 class="service-text text-center py-4">CHUYỂN NHÀ TRỌN GÓI GIÁ RẺ</h3>
                    </a>
                </div>

                <div class="bg-white overflow-hidden cursor-pointer" data-aos="fade-up" data-aos-delay="600">
                    <a href="{{ route('services') }}" class="block">
                        <img src="{{ asset('assets/service-6.svg') }}" alt="Chuyển văn phòng, kho xưởng"
                            class="w-full object-cover">
                        <h3 class="service-text text-center py-4">CHUYỂN VĂN PHÒNG, KHO XƯỞNG</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="stats-section container mx-auto py-16 px-4 md:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 md:gap-8 text-center mb-12 md:mb-20">
            <div class="p-4 md:p-6" data-aos="fade-up" data-aos-delay="0">
                <h3 class="statistic-text text-2xl md:text-3xl lg:text-4xl mb-2 md:mb-4">10.000+</h3>
                <p class="statistic-desc text-sm md:text-base">Việc giao hàng được quản lý</p>
            </div>
            <div class="p-4 md:p-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="statistic-text text-2xl md:text-3xl lg:text-4xl mb-2 md:mb-4">2.500+</h3>
                <p class="statistic-desc text-sm md:text-base">Khách hàng đang hoạt động</p>
            </div>
            <div class="p-4 md:p-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="statistic-text text-2xl md:text-3xl lg:text-4xl mb-2 md:mb-4">98%</h3>
                <p class="statistic-desc text-sm md:text-base">Tỷ lệ giao hàng đúng giờ</p>
            </div>
            <div class="p-4 md:p-6" data-aos="fade-up" data-aos-delay="300">
                <h3 class="statistic-text text-2xl md:text-3xl lg:text-4xl mb-2 md:mb-4">200+</h3>
                <p class="statistic-desc text-sm md:text-base">Giải thưởng ngành</p>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="price-box relative px-4 md:px-16 py-8 w-full lg:w-auto"
                style="margin-right: 0 lg:margin-right: 10%;">
                <div data-aos="fade-right">
                    <h2 class="price-title mb-6 text-xl md:text-[22px]">Giao hàng an toàn, trọn vẹn niềm tin</h2>
                    <p class="price-desc mb-8 max-w-lg lg:max-w-xl text-base md:text-[18px]">Kiểm tra và bảo trì an toàn
                        thường xuyên là một phần trong cam kết của
                        chúng tôi nhằm duy trì đội xe của bạn ở tình trạng tốt nhất. Ứng dụng của chúng tôi lên lịch và theo
                        dõi
                        việc kiểm tra, đảm bảo rằng mọi phương tiện đều đáp ứng các tiêu chuẩn an toàn nghiêm ngặt</p>
                    <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="95" height="95"
                        viewBox="0 0 95 95" fill="none">
                        <g opacity="0.12">
                            <path
                                d="M71.7118 47.8556C80.527 47.8556 86.4674 54.0984 86.4674 63.3482C86.4674 71.6719 79.6399 78.6065 70.3924 78.6065C60.2634 78.6065 52.7789 70.2827 52.7789 57.5685C52.7789 28.6698 73.4749 17.1104 86.4674 15.7212V28.4354C77.6579 30.0533 67.7534 39.0688 67.3099 49.0161C67.7534 48.7874 69.5109 47.8556 71.7118 47.8556ZM26.7994 47.8556C35.6033 47.8556 41.5494 54.0984 41.5494 63.3482C41.5494 71.6719 34.7218 78.6065 25.4743 78.6065C15.3453 78.6065 7.86084 70.2827 7.86084 57.5685C7.86084 28.6698 28.5568 17.1104 41.5494 15.7212V28.4354C32.7398 30.0533 22.8354 39.0688 22.3918 49.0161C22.8354 48.7874 24.5928 47.8556 26.7994 47.8556Z"
                                fill="#050505" />
                        </g>
                    </svg>
                </div>
                <div class="static lg:absolute lg:top-0 lg:right-[-10%] mt-8 lg:mt-0 w-full lg:w-auto flex flex-col items-center lg:items-end"
                    data-aos="fade-left" data-aos-delay="200">
                    <img class="w-full md:w-4/5 lg:w-[400px] xl:w-[450px]" src="{{ asset('assets/van.png') }}"
                        alt="Delivery van">
                    <div class="flex justify-center lg:justify-end mt-4">
                        <a class="link-button mr-0 lg:mr-2" href="{{ route('contact') }}">Nhận báo giá miễn phí</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
            <div class="company-info-card" data-aos="fade-up" data-aos-delay="0">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                    fill="none">
                    <rect width="44" height="44" rx="8" fill="#FFF3EB" />
                    <path
                        d="M32 22C32 27.5228 27.5228 32 22 32C16.4772 32 12 27.5228 12 22C12 16.4772 16.4772 12 22 12C27.5228 12 32 16.4772 32 22Z"
                        fill="#C1262E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22 17.25C22.4142 17.25 22.75 17.5858 22.75 18V21.6893L25.0303 23.9697C25.3232 24.2626 25.3232 24.7374 25.0303 25.0303C24.7374 25.3232 24.2626 25.3232 23.9697 25.0303L21.4697 22.5303C21.329 22.3897 21.25 22.1989 21.25 22V18C21.25 17.5858 21.5858 17.25 22 17.25Z"
                        fill="white" />
                </svg>
                <h3 class="company-info-title my-4">Theo dõi mọi lô hàng theo thời gian thực</h3>
                <p class="company-info-desc">Luôn cập nhật vị trí chính xác của hàng hóa với thông báo theo dõi tức thì</p>
            </div>
            <div class="company-info-card" data-aos="fade-up" data-aos-delay="200">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="8" fill="#FFF3EB" />
                    <path
                        d="M19.9496 26.0503C20.8806 25.1192 21.3461 24.6537 21.9209 24.6234C21.9735 24.6206 22.0261 24.6206 22.0787 24.6234C22.6535 24.6537 23.119 25.1192 24.0501 26.0503C26.0759 28.0761 27.0888 29.089 26.8053 29.963C26.7809 30.0381 26.7506 30.1112 26.7147 30.1815C26.2973 31 24.8648 31 21.9998 31C19.1348 31 17.7023 31 17.2849 30.1815C17.249 30.1112 17.2187 30.0381 17.1944 29.963C16.9108 29.089 17.9237 28.0761 19.9496 26.0503Z"
                        fill="#C1262E" />
                    <path
                        d="M24 13H20C16.2288 13 14.3431 13 13.1716 14.1716C12 15.3431 12 17.2288 12 21C12 24.7712 12 26.6569 13.1716 27.8284C13.4138 28.0706 13.6864 28.2627 14 28.4151C14.4814 28.6491 15.0592 28.7895 15.7708 28.8737C15.9374 28.3407 16.2427 27.8823 16.5146 27.5269C17.0467 26.8313 17.8649 26.0133 18.8122 25.0661L18.9425 24.9358C19.3613 24.5168 19.7686 24.1094 20.1488 23.8141C20.5751 23.483 21.1258 23.163 21.842 23.1252C21.9471 23.1197 22.0525 23.1197 22.1576 23.1252C22.8738 23.163 23.4245 23.483 23.8508 23.8141C24.231 24.1094 24.6383 24.5168 25.0571 24.9358L25.1874 25.0661C26.1348 26.0133 26.9529 26.8313 27.4851 27.5269C27.7569 27.8823 28.0622 28.3408 28.2288 28.8738C28.9406 28.7896 29.5185 28.6492 30 28.4151C30.3136 28.2627 30.5862 28.0706 30.8284 27.8284C32 26.6569 32 24.7712 32 21C32 17.2288 32 15.3431 30.8284 14.1716C29.6569 13 27.7712 13 24 13Z"
                        fill="#C1262E" />
                </svg>
                <h3 class="company-info-title my-4">Tự động tối ưu hóa tuyến đường</h3>
                <p class="company-info-desc">Cắt giảm chi phí và thời gian bằng cách cho phép hệ thống điều khiển bằng AI
                    của
                    chúng tôi tối ưu hóa các tuyến giao hàng.</p>
            </div>
            <div class="company-info-card" data-aos="fade-up" data-aos-delay="400">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="44" height="44" rx="8" fill="#FFF3EB" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14 15V29C14 30.6569 15.3431 32 17 32H27C28.6569 32 30 30.6569 30 29V19C30 17.3431 28.6569 16 27 16H15C14.4477 16 14 15.5523 14 15ZM17.25 22C17.25 21.5858 17.5858 21.25 18 21.25H26C26.4142 21.25 26.75 21.5858 26.75 22C26.75 22.4142 26.4142 22.75 26 22.75H18C17.5858 22.75 17.25 22.4142 17.25 22ZM17.25 25.5C17.25 25.0858 17.5858 24.75 18 24.75H23.5C23.9142 24.75 24.25 25.0858 24.25 25.5C24.25 25.9142 23.9142 26.25 23.5 26.25H18C17.5858 26.25 17.25 25.9142 17.25 25.5Z"
                        fill="#C1262E" />
                    <path
                        d="M14.4088 14.0871C14.7573 14.2434 15 14.5933 15 15H27C27.3453 15 27.6804 15.0438 28 15.126V14.306C28 13.0889 26.922 12.154 25.7172 12.3261L14.9196 13.8686C14.7271 13.8961 14.5527 13.9737 14.4088 14.0871Z"
                        fill="#C1262E" />
                </svg>
                <h3 class="company-info-title my-4">Phân tích và báo cáo chi tiết</h3>
                <p class="company-info-desc">Đưa ra quyết định dựa trên dữ liệu với các báo cáo hậu cần toàn diện trong tầm
                    tay
                    bạn.</p>
            </div>
        </div>

        <div class="p-6 md:p-12 mt-20" style="border-radius: 14px; background: #FFF9F9;">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <h2 class="mb-6 text-2xl md:text-[40px]" style="color: #C1262E; font-weight: 600; line-height: 130%;">
                        Sẵn sàng cách mạng hóa hoạt động hậu cần của bạn?
                    </h2>
                    <p class="mb-8 md:mb-12 text-base md:text-xl"
                        style="color: #4D4C52; font-weight: 400; line-height: 150%;">
                        Tham gia cùng vô số doanh nghiệp khác đã hợp lý hóa hoạt động hậu cần của họ bằng các giải pháp tiên
                        tiến của chúng tôi
                    </p>
                    <a class="link-button" href="{{ route('contact') }}">Nhận báo giá</a>
                </div>
                <div class="w-full flex justify-center lg:justify-end lg:w-1/2 mt-8 lg:mt-0" data-aos="fade-left"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/van2.png') }}" alt="Logistics truck" class="w-full lg:w-4/5">
                </div>
            </div>
        </div>
    </div>

    <div class="news-section container mx-auto py-8 px-8">
        <h2 class="text-center mb-12 news-section-title" data-aos="fade-up">
            Báo chí nói gì <span class="text-[#C1262E]">về chúng tôi</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($posts as $key => $post)
                <a href="{{ route('news.detail', $post->slug) }}" class="news-card" data-aos="fade-up" data-aos-delay="{{ ($key + 1) * 100 }}">
                    <img src="{{ $post->thumbnail_url }}" alt="News image" class="w-full object-cover h-64 md:h-64 lg:h-72">
                    <div class="p-4">
                        <h3 class="mb-3 text-base md:text-lg font-semibold leading-normal">
                            {{ $post->title }}
                        </h3>
                        <p class="text-sm md:text-base text-[#454545] leading-relaxed">
                            {{ $post->display_excerpt }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="flex justify-center mt-8" data-aos="fade-up" data-aos-delay="300">
            <x-primary-button link="{{ route('news') }}">Xem tất cả</x-primary-button>
        </div>
    </div>
@endsection
