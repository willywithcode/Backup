@extends('layouts.customer')

@section('css')
    <style>
        .checkout-area .input-box input {
            background: white;
        }
        .text-danger {
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
    <!-- main-container -->
    <div class="main-container col1-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="product-area">
                        <div class="content-tab-product-category">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane  fade in active" id="checkout">
                                    <!-- Checkout are start-->
                                    <div class="checkout-area">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <form id="checkout-form" method="POST"
                                                        action="{{ route('orders.store') }}">
                                                        @csrf
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="billing-details checkout-payment-area"
                                                                style="background:white;">
                                                                <div class="contact-text right-side">
                                                                    <h2>{{ __('messages.billing_address') }}</h2>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box">
                                                                                <label>{{ __('messages.name') }}
                                                                                    <em>*</em></label>
                                                                                <input type="text" name="name"
                                                                                    value="{{ auth()->user()->name }}"
                                                                                    class="info">
                                                                                @error('name')
                                                                                    <div class="text-danger">
                                                                                        <small>{{ $message }}</small></div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box">
                                                                                <label>Email<em>*</em></label>
                                                                                <input type="email" name="email"
                                                                                    class="info"
                                                                                    value="{{ auth()->user()->email }}">
                                                                                @error('email')
                                                                                    <div class="text-danger">
                                                                                        <small>{{ $message }}</small></div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box">
                                                                                <label>{{ __('messages.phone_number') }}<em>*</em></label>
                                                                                <input type="text" name="phone_number"
                                                                                    class="info"
                                                                                    value="{{ auth()->user()->phone_number }}">
                                                                                @error('phone_number')
                                                                                    <div class="text-danger">
                                                                                        <small>{{ $message }}</small></div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box">
                                                                                <label>{{ __('messages.address') }}
                                                                                    <em>*</em></label>
                                                                                <input type="text" name="address"
                                                                                    value="{{ auth()->user()->address }}"
                                                                                    class="info mb-10">
                                                                                @error('address')
                                                                                    <div class="text-danger">
                                                                                        <small>{{ $message }}</small></div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box">
                                                                                <label>{{ __('messages.note') }}</label>
                                                                                <textarea class="area-tex"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="checkout-payment-area"
                                                                        style="background:white;">
                                                                        <div class="checkout-total">
                                                                            <h3>{{ __('messages.your_order') }}</h3>
                                                                            <form action="#" method="post">
                                                                                <div class="table-responsive">
                                                                                    <table class="checkout-area table">
                                                                                        <tbody>
                                                                                            @foreach (Cart::content() as $id => $item)
                                                                                                <tr
                                                                                                    class="cart_item check-item prd-name">
                                                                                                    <td class="ctg-type">
                                                                                                        <div>
                                                                                                            {{ $item->name }}
                                                                                                            ×
                                                                                                            <span>{{ $item->qty }}</span>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td class="cgt-des">
                                                                                                        @money($item->price * $item->qty, 'VND')
                                                                                                    </td>
                                                                                                </tr>
                                                                                            @endforeach
                                                                                            <tr class="cart_item">
                                                                                                <td class="ctg-type">
                                                                                                    {{ __('messages.subtotal') }}
                                                                                                </td>
                                                                                                <td class="cgt-des">
                                                                                                    @money(Cart::subtotal(), 'VND')
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr class="cart_item">
                                                                                                <td class="ctg-type">
                                                                                                    {{ __('messages.tax') }}
                                                                                                </td>
                                                                                                <td class="cgt-des">
                                                                                                    @money(Cart::tax(), 'VND')
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr class="cart_item">
                                                                                                <td
                                                                                                    class="ctg-type crt-total">
                                                                                                    {{ __('messages.total') }}
                                                                                                </td>
                                                                                                <td
                                                                                                    class="cgt-des prc-total">
                                                                                                    @money(Cart::total(), 'VND') </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        @if (Cart::count())
                                                                            <div class="payment-section"
                                                                                style="padding:20px;">
                                                                                <div class="pay-toggle">
                                                                                    <div class="pay-type-total">
                                                                                        <div class="pay-type">
                                                                                            <input type="radio"
                                                                                                id="pay-toggle03"
                                                                                                name="pay_method"
                                                                                                value="COD" checked>
                                                                                            <label for="pay-toggle03">Thanh
                                                                                                toán khi nhận hàng</label>
                                                                                        </div>
                                                                                        <div class="pay-type">
                                                                                            <input type="radio"
                                                                                                id="pay-toggle04"
                                                                                                name="pay_method"
                                                                                                value="PAYPAL">
                                                                                            <label for="pay-toggle04">Thanh
                                                                                                toán qua Paypal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="input-box"
                                                                                        style="margin-top:15px;">
                                                                                        <a id="order-btn"
                                                                                            class="btn-def btn2"
                                                                                            href="#">
                                                                                            {{ __('messages.place_order') }}
                                                                                        </a>
                                                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Checkout are end-->
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--End main-container -->
@endsection

@section('js')
    <script>
        $('#order-btn').on('click', (e) => {
            e.preventDefault();
            $('#checkout-form').submit();
        });
    </script>
@endsection
