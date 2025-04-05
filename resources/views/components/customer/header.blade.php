<!-- Header -->
<header>
    <div class="header-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-xs-12">
                    <!-- Header Logo -->
                    <div class="logo">
                        <a title="ecommerce Template" href="{{ route('home') }}">
                            <img style="height:40px;margin-left:40px;" src="{{ asset('logo.png') }}">
                        </a>
                    </div>
                    <!-- End Header Logo -->
                    <div class="nav-icon">
                        <div class="mega-container visible-lg visible-md visible-sm">
                            <div class="navleft-container">
                                <div class="mega-menu-title">
                                    <h3>Shop quà lưu niệm</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-9 col-xs-12 jtv-rhs-header">
                    <div class="jtv-mob-toggle-wrap">
                        <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span></div>
                    </div>
                    <div class="jtv-header-box">
                        <div class="search_cart_block">
                            <div class="search-box hidden-xs">
                                <input type="text" class="product-search-input search-input-box searchbox"
                                    placeholder="Nhập tên sản phẩm..." maxlength="128">
                                <button class="product-search-btn search-btn-bg"><span
                                        class="hidden-sm">{{ __('messages.search') }}</span><i
                                        class="fa fa-search hidden-xs hidden-lg hidden-md"></i></button>
                            </div>
                            <!-- Header Language -->
                            <div class="language-box hidden-xs">
                                <select class="lang-select selectpicker" data-width="fit" style="margin-top:1px;">
                                    <option value="vi" @if (app()->getLocale() === 'vi') selected @endif>Tiếng Việt</option>
                                    <option value="en" @if (app()->getLocale() === 'en') selected @endif>English</option>
                                </select>
                            </div>
                            <div class="right_menu">
                                <div class="menu_top">
                                    <div class="top-cart-contain pull-right">
                                        <div class="mini-cart">
                                            <div class="basket"><a class="basket-icon"
                                                    href="{{ route('cart.show') }}"><i
                                                        class="fa fa-shopping-basket"></i>
                                                    &nbsp;{{ __('messages.my_cart') }}
                                                    <span>({{ Cart::count() }})</span></>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top_section hidden-xs">
                            <div class="toplinks">
                                <div class="site-dir hidden-xs"> <a class="hidden-sm" href="#"><i
                                            class="fa fa-phone"></i> <strong>Hotline:</strong> +1 123 456
                                        7890</a> <a href="#"><i class="fa fa-envelope"></i>
                                        support@example.com</a> </div>
                                <ul class="links">
                                    <li><a href="{{ route('user.profile') }}">{{ __('messages.my_account') }}</a></li>
                                    <li><a href="{{ route('order_history') }}">{{ __('messages.my_order') }}</a></li>
                                    @if (auth()->user())
                                        <li><a id="logout-btn" href="#">{{ __('messages.sign_out') }}</a></li>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    @else
                                        <li><a href="{{ route('login') }}">{{ __('messages.sign_in') }}</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
