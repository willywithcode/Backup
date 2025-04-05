<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Behind Office</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fabulous/css/styles.css') }}" media="all">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .main-container {
            min-height: calc(100vh - 193px) !important;
        }
    </style>
    @yield('css')
</head>

<body>
    <!-- Mobile Menu -->
    <div id="jtv-mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="mob-search" name="search">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <input type="text" class="product-search-input form-control simple" placeholder="Tìm kiếm..."
                                    name="srch-term" id="srch-term">
                                <button class="product-search-btn btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
        <div class="top-links">
            <ul class="links">
                <li><a href="{{ route('user.profile') }}">{{ __('messages.my_account') }}</a></li>
                <li><a href="{{ route('order_history') }}">{{ __('messages.my_order') }}</a></li>
                @if (auth()->user())
                    <li><a id="logout-btn-mobile" href="#">{{ __('messages.sign_out') }}</a></li>
                    <form id="logout-form-mobile" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                @else
                    <li><a href="{{ route('login') }}">{{ __('messages.sign_in') }}</a></li>
                @endif
            </ul>
            <div class="language-box">
                <select class="lang-select selectpicker" data-width="fit">
                    <option value="vi" @if (app()->getLocale() === 'vi') selected @endif>Tiếng Việt</option>
                    <option value="en" @if (app()->getLocale() === 'en') selected @endif>English</option>
                </select>
            </div>
        </div>
    </div>
    <div id="page">
        @include('components.customer.header')
        <!-- Main Container -->
        @yield('content')
        <!-- Main Container End -->
        @include('components.customer.footer')
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('fabulous/js/jquery.min.js') }}"></script>
    <script src="{{ asset('fabulous/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fabulous/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('fabulous/js/main.js') }}"></script>
    <script src="{{ asset('fabulous/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('fabulous/js/mob-menu.js') }}"></script>
    <script src="{{ asset('fabulous/js/cloud-zoom.js') }}"></script>
    <script src="{{ asset('fabulous/js/revslider.js') }}"></script>
    <script src="{{ asset('resources/js/main.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });
    </script>
{{--    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>--}}
    @yield('js')
    @include('sweetalert::alert')
</body>

</html>
