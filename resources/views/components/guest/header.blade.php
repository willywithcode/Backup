<header class="behindoffice-header">
    <div class="flex w-full">
        {{-- Container bên trái: logo + nav + hamburger --}}
        <div class="container mx-auto px-4 py-0 flex items-center justify-between">
            <div class="flex items-center gap-4">
                {{-- Hamburger icon (mobile only) --}}
                <button id="mobile-menu-button" class="md:hidden focus:outline-none">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="behindoffice-header-logo flex items-center gap-2 py-4">
    <img src="{{ asset('assets/icononly_transparent.png') }}" alt="Logo">
    <img src="{{ asset('assets/fulllogo_transparent.png') }}" alt="Behind Office">
</a>

            </div>

            {{-- Navigation (desktop) --}}
            <nav id="main-nav" class="hidden md:flex gap-6 items-center py-4">
                <a href="{{ route('home') }}" class="behindoffice-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Trang chủ</a>
                <a href="{{ route('about') }}" class="behindoffice-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Về chúng tôi</a>
                <a href="{{ route('services') }}" class="behindoffice-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Dịch vụ</a>
                <a href="{{ route('contact') }}" class="behindoffice-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Liên hệ</a>
                <a href="{{ route('blog') }}" class="behindoffice-nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
            </nav>
        </div>

        {{-- Call Us (luôn nằm ngoài container, bên phải) --}}
        <div class="behindoffice-call-box hidden md:flex items-center h-full bg-blue-500 text-white px-10 min-w-[200px] justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2" class="behindoffice-call-icon w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 5a2 2 0 012-2h1.586a1 1 0 01.707.293l1.414 1.414a1 1 0 01.293.707V7a2 2 0 01-2 2H6v1a11 11 0 0011 11h1a2 2 0 012-2v-1a2 2 0 012-2h1.586a1 1 0 01.707.293l1.414 1.414a1 1 0 01.293.707V21a2 2 0 01-2 2h-1a19 19 0 01-19-19V5z" />
            </svg>
            <span><strong>Call Us</strong> +84 878 799 866</span>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-nav"
        class="md:hidden hidden absolute top-full left-0 w-[80%] max-w-xs bg-white border-r border-blue-200 px-4 py-2 z-40 flex-col shadow-md
        rounded-tr-2xl rounded-br-2xl transition-all duration-300 ease-in-out">
        <a href="{{ route('home') }}" class="behindoffice-nav-link block py-2 {{ request()->routeIs('home') ? 'active' : '' }}">Trang chủ</a>
        <a href="{{ route('about') }}" class="behindoffice-nav-link block py-2 {{ request()->routeIs('about') ? 'active' : '' }}">Về chúng tôi</a>
        <a href="{{ route('services') }}" class="behindoffice-nav-link block py-2 {{ request()->routeIs('services') ? 'active' : '' }}">Dịch vụ</a>
        <a href="{{ route('contact') }}" class="behindoffice-nav-link block py-2 {{ request()->routeIs('contact') ? 'active' : '' }}">Liên hệ</a>
        <a href="{{ route('blog') }}" class="behindoffice-nav-link block py-2 {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
    </div>
</header>
