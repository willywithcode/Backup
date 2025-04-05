@extends('layouts.customer')

@section('css')
    <style>
        label.radio-variant {
            cursor: pointer
        }

        label.radio-variant input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio-variant span {
            padding: 10px 15px;
            border: 1px solid #ddd;
            display: inline-block;
            color: #666;
            border-radius: 3px;
            text-transform: uppercase
        }

        label.radio-variant input:checked+span {
            border-color: #009ef7;
            background-color: #009ef7;
            color: #fff
        }

        .variant-label {
            text-transform: uppercase;
            font-size: 13px;
            font-weight: normal;
            margin-right: 15px;
            color: #000;
        }

        .star-rating {
            display: flex;
            align-items: center;
            font-size: 1.25em;
        }

        .back-stars {
            display: flex;
            color: #ccc;
            position: relative;
        }

        .front-stars {
            display: flex;
            color: #FFBC0B;
            overflow: hidden;
            position: absolute;
            top: 0;
            transition: all .5s
        }
    </style>
@endsection

@section('content')
    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="product-view">
                    <div class="product-essential">
                        <form method="POST" action="{{ route('cart.save', ['product' => $product->id]) }}">
                            @csrf
                            <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" style="height:365px;object-fit:contain;background:#f6f6f6;"
                                            src="{{ asset($product->avatar_url) }}"
                                            data-zoom-image="{{ asset($product->avatar_url) }}">
                                    </div>
                                    <div class="more-views">
                                        <div class="slider-items-products">
                                            <div id="jtv-more-views-img"
                                                class="product-flexslider hidden-buttons product-img-thumb">
                                                <div class="slider-items slider-width-col4 block-content">
                                                    @foreach ($product->images as $image)
                                                        <div class="more-views-items">
                                                            <a href="#" data-image="{{ asset($image->url) }}"
                                                                data-zoom-image="{{ asset($image->url) }}">
                                                                <img id="product-zoom"
                                                                    style="height:100px;object-fit:contain;background:#f6f6f6;"
                                                                    src="{{ asset($image->url) }}">
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                <div class="product-name">
                                    <h1>{{ $product->name }}</h1>
                                </div>
                                @php
                                    $percent = ($product->rating_average / 5) * 100;
                                @endphp
                                <div class="star-rating">
                                    <div class="back-stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <div class="front-stars" style="width: {{ $percent }}%">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <div class="price-box">
                                        <p class="special-price"><span class="price">@money($product->final_price, 'VND')</span></p>
                                        @if ($product->price != $product->final_price)
                                            <p class="old-price"><span class="price">@money($product->price, 'VND')</span></p>
                                        @endif
                                        <p class="availability in-stock"><span>Còn hàng</span></p>
                                    </div>
                                </div>
                                <div class="short-description">
                                    {!! $product->description !!}
                                </div>
                                <div class="add-to-box" style="border-bottom:none;">
                                    <div class="add-to-cart">
                                        <div class="pull-left" style="margin-right:20px">
                                            <div class="custom pull-left">
                                                <label>{{ __('messages.quantity') }}:</label>
                                                <button
                                                    onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;"
                                                    class="reduced items-count" type="button"><i
                                                        class="fa fa-minus">&nbsp;</i></button>
                                                <input type="text" class="input-text qty" value="1" maxlength="12"
                                                    id="qty" name="quantity">
                                                <button
                                                    onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                    class="increase items-count" type="button"><i
                                                        class="fa fa-plus">&nbsp;</i></button>
                                            </div>
                                        </div>
                                        <button class="button btn-cart" type="submit"><i class="fa fa-shopping-cart"></i>
                                            {{ __('messages.add_to_cart') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                        <li class="active">
                            <a href="#product_tabs_description" data-toggle="tab">{{ __('messages.description') }}</a>
                        </li>
                        <li>
                            <a href="#reviews_tabs" data-toggle="tab">{{ __('messages.rating') }}</a>
                        </li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="product_tabs_description">
                            <div class="std">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews_tabs">
                            <div class="box-collateral box-reviews" id="customer-reviews">
                                <div class="box-reviews2">
                                    @foreach ($product->ratings as $rating)
                                        <div style="display:flex;margin-bottom:20px;">
                                            <img
                                                src="https://ui-avatars.com/api/?background=random&color=fff&size=40&name={{ urlencode($rating->user->name) }}&rounded=true" />
                                            <div style="margin-left:10px;margin-top:2px;">
                                                @php
                                                    $percent = ($rating->rating / 5) * 100;
                                                @endphp
                                                <div class="star-rating">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <div class="front-stars" style="width: {{ $percent }}%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>{{ $rating->comment }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->
@endsection

@section('js')
@endsection
