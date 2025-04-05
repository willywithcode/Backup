@extends('layouts.customer')

@section('css')
    <style>
        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            background-color: #009ef7;
            border-color: #009ef7;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #7E7E7E;
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            color: #fff !important;
        }

        .product-pagination nav {
            border-bottom: none;
        }
    </style>
@endsection

@section('content')
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-push-3 main-inner">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                                    <div class="item"> <a href="#"><img alt="New Fashion"
                                                src="{{ asset('banner3.png') }}" style="height:350px;"></a>
                                    </div>
                                    <div class="item"> <a href="#"><img alt="New Special Collection"
                                                src="{{ asset('banner1.webp') }}" style="height:350px;"></a>
                                    </div>
                                    <div class="item"> <a href="#"><img alt="New Fashion"
                                                src="{{ asset('banner2.png') }}" style="height:350px;"></a>
                                    </div>
                                    <div class="item"> <a href="#"><img alt="New Fashion"
                                                src="{{ asset('banner4.png') }}" style="height:350px;"></a>
                                    </div>
                                    <div class="item"> <a href="#"><img alt="New Fashion"
                                                src="{{ asset('banner5.png') }}" style="height:350px;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="col-main">
                        <div class="page-title">
                            <h2>Clothing</h2>
                        </div>
                        <div class="category-products">
                            @if($products->count())
                                <ul class="products-grid">
                                    @foreach ($products as $product)
                                        <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image"
                                                           href="{{ route('products.detail', ['product' => $product->id]) }}">
                                                            <img src="{{ asset($product->avatar_url) }}"
                                                                 style="height:250px;object-fit:contain;background:#f6f6f6;">
                                                        </a>
                                                        <div class="new-label new-top-left">new</div>
                                                        <div class="sale-label sale-top-right">sale</div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a
                                                                href="{{ route('products.detail', ['product' => $product->id]) }}">{{ $product->name }}</a>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">@money($product->final_price, 'VND')</span>
                                                                </span>
                                                                    @if ($product->price != $product->final_price)
                                                                        <p class="old-price">
                                                                            <span class="price">@money($product->price, 'VND')</span>
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <div style="margin-top: 20px;">Không tìm thấy kết quả phù hợp</div>
                            @endif
                        </div>
                        <div class="toolbar bottom">
                            <div class="text-right product-pagination">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </article>
                </div>
                <div class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <aside class="sidebar">
                        <div class="block block-layered-nav">
                            <div class="block-title">
                                <h3>{{ __('messages.filter') }}</h3>
                            </div>
                            <div class="block-content">
                                <form id="product-filter-form" method="GET">
                                    <dl id="narrow-by-list">
{{--                                        <dt class="odd">{{ __('messages.brands') }}</dt>--}}
{{--                                        <dd class="odd">--}}
{{--                                            <ol class="bag-material">--}}
{{--                                                @foreach ($brands as $brand)--}}
{{--                                                    <li>--}}
{{--                                                        <div class="pretty p-icon p-smooth">--}}
{{--                                                            <input type="checkbox" name="brands"--}}
{{--                                                                value="{{ $brand->id }}"--}}
{{--                                                                @if (in_array(strval($brand->id), request()->query('brands', []))) checked @endif />--}}
{{--                                                            <div class="state p-success"> <i class="icon fa fa-check"></i>--}}
{{--                                                                <label>{{ $brand->name }}</label>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                @endforeach--}}
{{--                                            </ol>--}}
{{--                                        </dd>--}}
                                        <dt class="even">{{ __('messages.categories') }}</dt>
                                        <dd class="even">
                                            <ol class="bag-material">
                                                @foreach ($categories as $category)
                                                    <li>
                                                        <div class="pretty p-icon p-smooth">
                                                            <input type="checkbox" name="categories"
                                                                value="{{ $category->id }}"
                                                                @if (in_array(strval($category->id), request()->query('categories', []))) checked @endif />
                                                            <div class="state p-success"> <i class="icon fa fa-check"></i>
                                                                <label>{{ $category->name }}</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </dd>
                                    </dl>
                                    <div class="ajax-checkout"
                                        style="margin-bottom:16px;display:flex;align-items:center;gap:10px;">
                                        <button type="submit"
                                            class="button button-compare"><span>{{ __('messages.search') }}</span></button>
                                        <button id="clear-filter-btn"
                                            class="button button-clear"><span>{{ __('messages.clear_filter') }}</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="custom-slider">
                            <div>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#carousel-example-generic" data-slide-to="0">
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" class="">
                                        </li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active"><img src="{{ asset('banner6.jpeg') }}" alt="New Arrivals">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">New Arrivals</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="item"><img src="{{ asset('banner7.jpeg') }}" alt="Mid Season">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">Top Fashion</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#" data-slide="prev"> <span
                                            class="sr-only">Previous</span></a> <a class="right carousel-control"
                                        href="#" data-slide="next"> <span class="sr-only">Next</span></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('resources/js/customer/home.js') }}"></script>
@endsection
