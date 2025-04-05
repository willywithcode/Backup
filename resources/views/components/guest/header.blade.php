<header class="behindoffice-header" x-data="{ mobileMenuOpen: false }">
    <div class="flex w-full">
        {{-- Container bên trái: logo + nav + hamburger --}}
        <div class="container mx-auto px-4 py-0 flex items-center justify-between">
            <div class="flex items-center gap-4">
                {{-- Hamburger icon (mobile only) --}}
                <button id="mobile-menu-button" class="md:hidden focus:outline-none" @click="mobileMenuOpen = !mobileMenuOpen">
                    <svg class="w-6 h-6 text-[#2EA7E0]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                {{-- Logo --}}
                <a href="/" class="behindoffice-header-logo flex items-center gap-2 py-4">
                    <img src="{{ asset('assets/icononly_transparent.png') }}" alt="Logo">
                    <img src="{{ asset('assets/fulllogo_transparent.png') }}" alt="Behind Office">
                </a>

            </div>

            {{-- Navigation (desktop) --}}
            <nav id="main-nav" class="hidden md:flex gap-6 items-center py-4">
                <a href="/"
                    class="behindoffice-nav-link {{ request()->is('/') ? 'active' : '' }}">Trang chủ</a>
                <a href="{{ route('about') }}"
                    class="behindoffice-nav-link {{ request()->is('about') ? 'active' : '' }}">Về chúng tôi</a>
                <a href="{{ route('services') }}"
                    class="behindoffice-nav-link {{ request()->is('services') ? 'active' : '' }}">Dịch vụ</a>
                <a href="{{ route('contact') }}"
                    class="behindoffice-nav-link {{ request()->is('contact') ? 'active' : '' }}">Liên hệ</a>
                <a href="{{ route('blog') }}"
                    class="behindoffice-nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>
            </nav>
        </div>

        {{-- Call Us (luôn nằm ngoài container, bên phải) --}}
        <div
            class="behindoffice-call-box hidden md:flex items-center h-full bg-blue-500 text-white px-10 min-w-[200px] justify-center">

            <img src="{{ asset('assets/Vector.png') }}" alt="Call Icon" class="w-5 h-5 mr-2" />
            <span><strong>Call Us</strong> +84 878 799 866</span>
        </div>
    </div>

    <!-- Mobile Menu Drawer -->
    <div x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="fixed inset-y-0 left-0 z-50 w-70 h-full bg-white shadow-lg transform md:hidden"
        @click.away="mobileMenuOpen = false">

        <div class="p-4 h-full flex flex-col">
            <div class="flex items-center justify-between mb-6">
                <a href="/" class="behindoffice-header-logo flex items-center gap-1 py-4">
                    <img src="{{ asset('assets/icononly_transparent.png') }}" alt="Logo">
                    <img src="{{ asset('assets/fulllogo_transparent.png') }}" alt="Behind Office">
                </a>
                <button @click="mobileMenuOpen = false" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <ul class="space-y-4 flex-grow">
                <li>
                    <a href="/" class="behindoffice-nav-link block py-2 {{ request()->is('/') ? 'active' : '' }}">Trang chủ</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="behindoffice-nav-link block py-2 {{ request()->is('about') ? 'active' : '' }}">Về chúng tôi</a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="behindoffice-nav-link block py-2 {{ request()->is('services') ? 'active' : '' }}">Dịch vụ</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="behindoffice-nav-link block py-2 {{ request()->is('contact') ? 'active' : '' }}">Liên hệ</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="behindoffice-nav-link block py-2 {{ request()->is('blog') ? 'active' : '' }}">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</header>
