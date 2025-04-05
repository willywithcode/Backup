@extends('layouts.guest')

@section('content')
    <div>
        <div class="w-full" data-aos="fade-in">
            <img src="{{ $post->thumbnail_url }}" alt="Tin tức" class="w-full shadow-lg max-h-[750px] object-cover">
        </div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-24">
            <div class="lg:col-span-1 order-2 lg:order-1 hidden lg:block" data-aos="fade-right">
                <div class="space-y-4 mt-6 flex flex-col items-end">
                    <div class="border-b border-gray-200 pb-4 text-center">
                        <div style="color: #121416;font-size: 28px;font-style: normal;font-weight: 500;line-height: normal">
                            966</div>
                        <div
                            style="color: #A7A7A7; text-align: center; font-size: 18px; font-style: normal; font-weight: 400; line-height: 20px;">
                            Lượt xem</div>
                    </div>
                    <div class="mr-3">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                            target="_blank" class="text-blue-600 hover:text-blue-800">
                            <img src="{{ asset('assets/facebook.svg') }}" alt="Facebook" width="54" height="54">
                        </a>
                    </div>
                    <div class="mr-3">
                        <a href="https://zalo.me/zalo-share?u={{ urlencode(request()->url()) }}" target="_blank"
                            class="text-blue-500 hover:text-blue-700">
                            <img src="{{ asset('assets/zalo.png') }}" alt="Zalo" width="54" height="54">
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 order-1 lg:order-2" data-aos="fade-left">
                <div class="mt-6 sm:mt-8 text-justify">
                    <h1 class="text-lg sm:text-xl lg:text-2xl font-bold mb-4 sm:mb-6">{{ $post->title }}</h1>
                    <div class="space-y-4 sm:space-y-6">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 sm:mt-12" data-aos="fade-up">
            <h2 class="text-xl sm:text-2xl lg:text-[28px] font-medium mb-6 sm:mb-8 text-[#121416] tracking-wider uppercase">
                BÀI VIẾT LIÊN QUAN
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                @foreach ($relatedPosts as $index => $relatedPost)
                    <div class="group transition-all duration-300 overflow-hidden" data-aos="fade-up"
                        data-aos-delay="{{ ($index + 1) * 100 }}">
                        <a href="{{ route('news.detail', ['slug' => $relatedPost->slug]) }}" class="block">
                            <div class="overflow-hidden">
                                <img src="{{ asset('assets/news.png') }}" alt="{{ $relatedPost->title }}"
                                    class="w-full h-[280px] object-cover mb-4 transition-transform duration-300 group-hover:scale-105">
                            </div>
                            <div>
                                <h3 class="news-related-title mb-2 group-hover:text-[#C1262E] transition-colors">
                                    {{ $relatedPost->title }}
                                </h3>
                                <div class="flex items-center text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19Z"
                                            stroke="#121416" stroke-opacity="0.81" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.0003 11.9997L9.66699 13.5553M12.0003 8.11084V11.9997" stroke="#121416"
                                            stroke-opacity="0.81" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span
                                        class="news-detail-date">{{ $relatedPost->created_at->format('d \T\H\Á\N\G m, Y') }}</span>
                                </div>
                                <p class="news-related-text mt-3">{{ $relatedPost->display_excerpt }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
