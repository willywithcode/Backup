@extends('layouts.customer')

@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="product-area">
                        <div class="content-tab-product-category">
                            <!-- cart are start-->
                            <div class="cart-page-area">
                                <form method="post" action="#">
                                    <div class="table-responsive">
                                        <table class="shop-cart-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">{{ __('messages.product_image') }}</th>
                                                    <th class="product-name">{{ __('messages.product_name') }}</th>
                                                    <th class="product-price">{{ __('messages.price') }}</th>
                                                    <th class="product-quantity">{{ __('messages.quantity') }}</th>
                                                    <th class="product-subtotal ">{{ __('messages.total2') }}</th>
                                                    <th class="product-remove">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart as $id => $item)
                                                    <tr class="cart_item">
                                                        <td class="item-img">
                                                            <a href="#"><img
                                                                    style="height:100px;object-fit:contain;background:white;"
                                                                    src="{{ asset($item->options->avatar_url) }}"></a>
                                                        </td>
                                                        <td class="item-title">
                                                            <div style="text-align:left;padding-left:30px;">
                                                                <div style="font-weight:600;font-size:14px;">
                                                                    {{ $item->name }}</div>
                                                                <div style="font-style:italic;font-size:12px;">
                                                                    {{ $item->options->color }}, {{ $item->options->size }}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="item-price">@money($item->price, 'VND')</td>
                                                        <td class="item-qty">
                                                            <div class="cart-quantity">
                                                                <div class="product-qty">
                                                                    <div class="cart-quantity">
                                                                        <div class="cart-plus-minus">
                                                                            <div class="dec qtybutton dec-btn"
                                                                                data-id="{{ $id }}"
                                                                                data-url="{{ route('cart.update', ['id' => $id]) }}">
                                                                                -</div>
                                                                            <input value="{{ $item->qty }}"
                                                                                name="qtybutton"
                                                                                class="cart-plus-minus-box quantity-input"
                                                                                type="text"
                                                                                id="quantity-input-{{ $id }}"
                                                                                data-url="{{ route('cart.update', ['id' => $id]) }}">
                                                                            <div class="inc qtybutton inc-btn"
                                                                                data-id="{{ $id }}"
                                                                                data-url="{{ route('cart.update', ['id' => $id]) }}">
                                                                                +</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="total-price"><strong>@money($item->price * $item->qty, 'VND')</strong></td>
                                                        <td class="remove-item">
                                                            <a href="{{ route('cart.remove', ['id' => $id]) }}"><i
                                                                    class="fa fa-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart-bottom-area" style="margin-bottom:30px;">
                                        <div class="process-checkout-btn text-right">
                                            <div>
                                                <span
                                                    style="font-size: 16px;font-weight:600;">{{ __('messages.subtotal') }}:
                                                    <span>@money(Cart::priceTotal(), 'VND')</span>
                                            </div>
                                            @if (Cart::count())
                                                <a href="{{ route('checkout') }}">
                                                    <button class="button btn-proceed-checkout"
                                                        style="width:300px;margin-top:20px;"
                                                        type="button"><span>{{ __('messages.checkout') }}</span></button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- cart are end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('resources/js/customer/cart.js') }}"></script>
@endsection
