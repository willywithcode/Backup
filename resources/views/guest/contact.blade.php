@extends('layouts.guest')

@section('content')
    @include('components.guest.page_info', [
        'name' => 'Liên hệ',
    ])

    <div class="container mx-auto pt-16 pb-24 px-4 sm:px-8">
        <div class="relative p-0 sm:p-8">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('assets/contact-bg.png') }}" alt="Background" class="w-full h-full object-cover">
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center relative">
                <!-- Left Content -->
                <div class="text-white p-8 sm:p-0 ml-0 lg:ml-[40px]" data-aos="fade-right" data-aos-duration="1000">
                    <div class="flex items-center gap-2 mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="17" viewBox="0 0 32 17"
                            fill="none">
                            <g clip-path="url(#clip0_72_1171)">
                                <path d="M1 9.28757H8.87673L12.8884 1L19.6818 16L23.5387 9.28757H31" stroke="white"
                                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_72_1171">
                                    <rect width="32" height="17" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-lg"
                            style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;text-transform: uppercase;">ĐẶT
                            LỊCH HẸN</span>
                    </div>

                    <h2 class="contact-form-title mb-5" style="color:#fff">HÃY TIN TƯỞNG VÀO DỊCH VỤ CỦA CHÚNG TÔI ĐỂ GIÚP
                        BẠN TIẾP TỤC HÀNH
                        TRÌNH!
                    </h2>
                    <p class="mb-8 text-white text-base sm:text-lg font-normal leading-7">
                        Đặt lịch hẹn ngay hôm nay để nhận tư vấn và hỗ trợ tốt nhất từ đội ngũ chuyên gia của chúng tôi!
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0">
                                <svg width="64" height="64" class="w-[48px] h-[48px] sm:w-[64px] sm:h-[64px]" viewBox="0 0 64 64" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="32" cy="32" r="32" fill="#1C1F35" />
                                    <g clip-path="url(#clip0_72_1149)">
                                        <path
                                            d="M31.9995 19.72C30.8662 19.72 29.7584 20.056 28.8161 20.6856C27.8738 21.3153 27.1394 22.2102 26.7057 23.2572C26.272 24.3042 26.1585 25.4563 26.3796 26.5678C26.6007 27.6793 27.1465 28.7003 27.9478 29.5017C28.7492 30.303 29.7702 30.8488 30.8817 31.0699C31.9932 31.291 33.1453 31.1775 34.1923 30.7438C35.2393 30.3101 36.1342 29.5757 36.7639 28.6334C37.3935 27.6911 37.7295 26.5833 37.7295 25.45C37.7295 23.9303 37.1258 22.4728 36.0513 21.3982C34.9767 20.3237 33.5192 19.72 31.9995 19.72ZM31.9995 29.18C31.2618 29.18 30.5407 28.9612 29.9273 28.5514C29.3139 28.1415 28.8358 27.5589 28.5535 26.8774C28.2711 26.1958 28.1973 25.4458 28.3412 24.7223C28.4851 23.9987 28.8404 23.3341 29.362 22.8125C29.8837 22.2908 30.5483 21.9356 31.2718 21.7916C31.9954 21.6477 32.7454 21.7216 33.4269 22.0039C34.1085 22.2862 34.6911 22.7643 35.1009 23.3777C35.5108 23.9911 35.7295 24.7122 35.7295 25.45C35.7269 26.4375 35.3327 27.3837 34.6335 28.081C33.9343 28.7784 32.9871 29.17 31.9995 29.17V29.18Z"
                                            fill="white" />
                                        <path
                                            d="M31.9997 15C28.8849 15.0026 25.8977 16.2377 23.6905 18.4355C21.4834 20.6333 20.2356 23.6152 20.2197 26.73C20.2197 31.4 22.8397 35.31 24.7597 38.16L25.1097 38.68C27.02 41.4486 29.0693 44.1187 31.2497 46.68L32.0097 47.57L32.7697 46.68C34.9499 44.1185 36.9992 41.4484 38.9097 38.68L39.2597 38.15C41.1697 35.3 43.7897 31.4 43.7897 26.73C43.7739 23.6135 42.5247 20.6301 40.3154 18.432C38.106 16.2339 35.1163 15 31.9997 15ZM37.5897 37L37.2297 37.53C35.5097 40.11 33.2297 43 31.9997 44.43C30.8197 43 28.4897 40.11 26.7697 37.53L26.4197 37C24.6497 34.36 22.2197 30.75 22.2197 26.69C22.2197 25.4057 22.4727 24.1339 22.9642 22.9474C23.4557 21.7608 24.1761 20.6827 25.0842 19.7745C25.9924 18.8663 27.0705 18.1459 28.2571 17.6545C29.4436 17.163 30.7154 16.91 31.9997 16.91C33.2841 16.91 34.5558 17.163 35.7424 17.6545C36.9289 18.1459 38.0071 18.8663 38.9152 19.7745C39.8234 20.6827 40.5438 21.7608 41.0353 22.9474C41.5268 24.1339 41.7797 25.4057 41.7797 26.69C41.7797 30.79 39.3597 34.4 37.5897 37Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_72_1149">
                                            <rect width="36" height="36" fill="white" transform="translate(14 13)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <div class="contact-info-title mb-2">ĐỊA CHỈ</div>
                                <div class="contact-info-desc">C40-22, Gleximco C, Đ. Lê Trọng Tấn, P. Dương Nội, Q. Hà
                                    Đông, TP. Hà Nội</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0">
                                <svg width="64" height="64" class="w-[48px] h-[48px] sm:w-[64px] sm:h-[64px]" viewBox="0 0 64 64" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="32" cy="32" r="32" fill="#1C1F35" />
                                    <path
                                        d="M44.875 22.1875H20.125C19.8515 22.1875 19.5892 22.2961 19.3958 22.4895C19.2024 22.6829 19.0938 22.9452 19.0938 23.2188V40.75C19.0938 41.297 19.311 41.8216 19.6978 42.2084C20.0846 42.5952 20.6092 42.8125 21.1562 42.8125H43.8438C44.3908 42.8125 44.9154 42.5952 45.3022 42.2084C45.689 41.8216 45.9062 41.297 45.9062 40.75V23.2188C45.9062 22.9452 45.7976 22.6829 45.6042 22.4895C45.4108 22.2961 45.1485 22.1875 44.875 22.1875ZM42.2195 24.25L32.5 33.1574L22.7805 24.25H42.2195ZM43.8438 40.75H21.1562V25.5648L31.8039 35.323C31.994 35.497 32.2423 35.5934 32.5 35.5934C32.7577 35.5934 33.006 35.497 33.1961 35.323L43.8438 25.5648V40.75Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <div class="contact-info-title mb-2">EMAIL</div>
                                <div class="contact-info-desc">info.logistics@vertexco.vn</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0">
                                <svg width="64" height="64" class="w-[48px] h-[48px] sm:w-[64px] sm:h-[64px]" viewBox="0 0 64 64" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="32" cy="32" r="32" fill="#1C1F35" />
                                    <path
                                        d="M34.5551 21.8856C34.5894 21.7545 34.6495 21.6316 34.7319 21.524C34.8143 21.4165 34.9174 21.3264 35.035 21.2592C35.1527 21.192 35.2826 21.1489 35.4171 21.1325C35.5516 21.1161 35.688 21.1267 35.8184 21.1637C37.7408 21.6793 39.4937 22.6916 40.901 24.099C42.3084 25.5064 43.3207 27.2593 43.8363 29.1817C43.8733 29.3121 43.8839 29.4485 43.8676 29.583C43.8512 29.7175 43.8081 29.8474 43.7409 29.965C43.6736 30.0827 43.5836 30.1857 43.476 30.2681C43.3685 30.3506 43.2455 30.4107 43.1145 30.445C43.0265 30.4705 42.9353 30.4835 42.8438 30.4836C42.6161 30.4823 42.3954 30.4058 42.2158 30.2659C42.0363 30.126 41.9081 29.9306 41.8512 29.7102C41.4223 28.1405 40.5916 26.7097 39.441 25.5591C38.2903 24.4085 36.8596 23.5777 35.2898 23.1489C35.1576 23.116 35.0333 23.0569 34.9243 22.9751C34.8153 22.8933 34.7238 22.7904 34.6553 22.6726C34.5868 22.5548 34.5426 22.4245 34.5254 22.2893C34.5082 22.1541 34.5183 22.0168 34.5551 21.8856ZM34.2199 27.1321C35.0925 27.3709 35.8877 27.8329 36.5274 28.4726C37.1671 29.1123 37.6291 29.9076 37.868 30.7801C37.9228 31.0016 38.0505 31.1983 38.2305 31.3385C38.4105 31.4788 38.6324 31.5545 38.8605 31.5536C38.948 31.5544 39.035 31.5414 39.1184 31.5149C39.2506 31.482 39.3749 31.4229 39.4839 31.3411C39.5929 31.2593 39.6844 31.1564 39.7529 31.0386C39.8214 30.9208 39.8656 30.7905 39.8828 30.6553C39.9 30.5201 39.8899 30.3828 39.8531 30.2516C39.5276 29.0264 38.884 27.9089 37.9876 27.0125C37.0911 26.1161 35.9737 25.4725 34.7484 25.1469C34.6139 25.0979 34.4707 25.0775 34.3278 25.0869C34.185 25.0962 34.0456 25.1353 33.9187 25.2015C33.7917 25.2677 33.6799 25.3596 33.5905 25.4713C33.501 25.5831 33.4357 25.7122 33.3989 25.8506C33.3621 25.9889 33.3544 26.1334 33.3765 26.2749C33.3986 26.4163 33.4499 26.5516 33.5271 26.6722C33.6043 26.7927 33.7058 26.8959 33.8251 26.9751C33.9444 27.0542 34.0788 27.1077 34.2199 27.1321ZM44.8547 39.5715C44.6266 41.3123 43.7742 42.911 42.4559 44.0705C41.1376 45.2299 39.4431 45.8712 37.6875 45.8751C27.4523 45.8751 19.125 37.5477 19.125 27.3126C19.1289 25.5569 19.7701 23.8624 20.9296 22.5441C22.089 21.2258 23.6878 20.3734 25.4285 20.1454C25.8723 20.0962 26.3202 20.1896 26.7072 20.4121C27.0943 20.6346 27.4004 20.9746 27.5813 21.3829L30.1723 27.4286C30.3067 27.7424 30.3606 28.0848 30.329 28.4247C30.2975 28.7646 30.1816 29.0913 29.9918 29.3751L27.852 32.6493C28.8209 34.6157 30.4175 36.2032 32.3895 37.161L35.625 35.0083C35.9085 34.8172 36.2359 34.7015 36.5765 34.6722C36.9171 34.6429 37.2595 34.7009 37.5715 34.8407L43.6172 37.4188C44.0254 37.5996 44.3654 37.9057 44.5879 38.2928C44.8105 38.6799 44.9039 39.1278 44.8547 39.5715ZM42.8051 39.3137L36.7594 36.7356L33.5367 38.8883C33.2402 39.0844 32.898 39.2004 32.5434 39.2253C32.1889 39.2501 31.8339 39.1829 31.5129 39.0301C29.1113 37.8684 27.1687 35.9349 25.9957 33.5387C25.8411 33.2189 25.7717 32.8645 25.7942 32.5099C25.8168 32.1553 25.9306 31.8126 26.1246 31.5149L28.2773 28.2407L25.6863 22.195C24.4423 22.3549 23.2992 22.9628 22.4711 23.9048C21.643 24.8468 21.1867 26.0583 21.1875 27.3126C21.1909 31.6876 22.9304 35.8824 26.024 38.976C29.1176 42.0697 33.3125 43.8091 37.6875 43.8126C38.9417 43.8134 40.1533 43.357 41.0953 42.5289C42.0373 41.7008 42.6452 40.5577 42.8051 39.3137Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <div class="contact-info-title mb-2">SỐ ĐIỆN THOẠI</div>
                                <div class="contact-info-desc grid grid-cols-1 sm:grid-cols-3 gap-2">
                                    <span>024 6658 666</span>
                                    <span>0971 013 598</span>
                                    <span>0784 868 999</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="bg-white p-6 sm:p-10 shadow-lg ml-0 lg:ml-[40px]" data-aos="fade-left" data-aos-duration="1000">
                    <h3 class="contact-form-title text-center mb-8">HOW CAN WE HELP</h3>
                    <form action="{{ route('customers.store') }}" method="POST" class="contact-form space-y-4">
                        @csrf
                        <div>
                            <input type="text" name="name"
                                class="w-full px-4 py-4 border focus:outline-none focus:ring-2 focus:ring-red-600"
                                placeholder="TÊN" required>
                        </div>
                        <div>
                            <input type="tel" name="phone"
                                class="w-full px-4 py-4 border focus:outline-none focus:ring-2 focus:ring-red-600"
                                placeholder="SỐ ĐIỆN THOẠI" required pattern="[0-9]{10}">
                        </div>
                        <div>
                            <input type="email" name="email"
                                class="w-full px-4 py-4 border focus:outline-none focus:ring-2 focus:ring-red-600"
                                placeholder="ĐỊA CHỈ EMAIL" required>
                        </div>
                        <div>
                            <textarea name="content" rows="4"
                                class="w-full px-4 py-4 border focus:outline-none focus:ring-2 focus:ring-red-600" placeholder="NỘI DUNG" required></textarea>
                        </div>
                        <button type="submit" class="contact-form-button bg-[#1C1F35] text-white transition py-4 px-8">
                            GỬI YÊU CẦU
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-24">
            <h2 class="about-title text-2xl md:text-3xl lg:text-[35px] mb-8 uppercase text-center" data-aos="fade-up" data-aos-duration="800">ghé thăm văn phòng của chúng tôi</h2>
            <div data-aos="zoom-in" data-aos-duration="1000">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.587276163504!2d105.72948587591561!3d21.00917508063537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134535be6bbde1d%3A0x12cb597c5aa12116!2zR2VsZXhpbWNvIEzDqiBUcuG7jW5nIFThuqVu!5e0!3m2!1sen!2s!4v1741251080517!5m2!1sen!2s"
                    class="w-full" height="470" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
@endsection
