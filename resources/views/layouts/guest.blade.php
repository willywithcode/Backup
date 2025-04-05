<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Behind Office</title>
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    @include('components.guest.header')
    @yield('content')
    @include('components.guest.footer')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
        document.addEventListener('alpine:init', () => {
            Alpine.data('header', () => ({
                mobileMenuOpen: false
            }))
        })
    </script>
    @yield('scripts')
    @include('sweetalert::alert')
</body>

</html>
