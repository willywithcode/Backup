@extends('layouts.guest')

@section('content')
    @include('components.guest.page_info', [
        'name' => 'Tin tức',
    ])

    <div class="container mx-auto px-4 py-8">
        <div class="border-b border-gray-200 pb-4 mt-8">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold">TẤT CẢ BÀI VIẾT</h2>
        </div>

        <div class="space-y-10 mt-16">
            @foreach ($posts as $key => $post)
                <div class="flex flex-col md:flex-row gap-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ ($key + 1) * 100 }}">
                    <div class="w-full md:w-1/3">
                        <img src="{{ asset('assets/news.png') }}" class="w-full h-48 sm:h-56 md:h-64 object-cover rounded-lg">
                    </div>
                    <div class="w-full md:w-2/3 flex flex-col justify-center space-y-2 md:space-y-3">
                        <div class="news-card-tag">
                            @if($post->categories->count() > 0)
                                {{ $post->categories->pluck('name')->join(', ') }}
                            @else
                                BLOGS
                            @endif
                        </div>
                        <h3 class="news-card-title">
                            <a href="{{ route('news.detail', ['slug' => $post->slug]) }}" class="hover:text-[#C1262E] transition duration-300">
                                {{ $post->title }}
                            </a>
                        </h3>   
                        <p class="news-card-desc line-clamp-3 sm:line-clamp-4">{{ $post->display_excerpt }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center items-center mt-12 mb-8 font-semibold">
            @if ($posts->onFirstPage())
                <span class="text-gray-400 px-4 py-2">< Prev</span>
            @else
                <a href="{{ $posts->previousPageUrl() }}" class="text-gray-700 hover:text-[#C1262E] px-4 py-2 transition duration-300">< Prev</a>
            @endif

            <span class="text-gray-500">|</span>

            @if ($posts->hasMorePages())
                <a href="{{ $posts->nextPageUrl() }}" class="text-gray-700 hover:text-[#C1262E] px-4 py-2 transition duration-300">Next ></a>
            @else
                <span class="text-gray-400 px-4 py-2">Next ></span>
            @endif
        </div>
    </div>
@endsection
