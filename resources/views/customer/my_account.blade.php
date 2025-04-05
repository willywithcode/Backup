@extends('layouts.customer')

@section('content')
    <!-- main-container -->
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <section class="col-sm-2 col-xs-0">
                </section>
                <section class="col-sm-8 col-xs-12">
                    <div class="col-main">
                        <div class="my-account">
                            <form id="checkout-form" method="POST" action="{{ route('user-profile-information.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="page-title">
                                    <h2>Thông tin tài khoản</h2>
                                </div>
                                <div class="row" style="margin-top:16px;">
                                    <div class="col-sm-12 col-md-12 col-xs-12">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="form-group">
                                                    <label for="name">{{ __('messages.name') }} <span
                                                            class="required">*</span></label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ auth()->user()->name }}"
                                                        placeholder="{{ __('messages.name') }}">
                                                    @error('name', 'updateProfileInformation')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group">
                                                    <label for="email">Email <span class="required">*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ auth()->user()->email }}" placeholder="Email">
                                                    @error('email', 'updateProfileInformation')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group">
                                                    <label for="phone_number">{{ __('messages.phone_number') }} <span
                                                            class="required">*</span></label>
                                                    <input type="text" name="phone_number" class="form-control"
                                                        value="{{ auth()->user()->phone_number }}"
                                                        placeholder="{{ __('messages.phone_number') }}">
                                                    @error('phone_number', 'updateProfileInformation')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-group">
                                                    <label for="address">{{ __('messages.address') }} <span
                                                            class="required">*</span></label>
                                                    <input type="text" name="address" class="form-control"
                                                        value="{{ auth()->user()->address }}"
                                                        placeholder="{{ __('messages.address') }}">
                                                    @error('address', 'updateProfileInformation')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="buttons-set">
                                    <button type="submit"
                                        class="button login"><span>{{ __('messages.save_changes') }}</span></button>
                                    <span class="required pull-right"><b>*</b> Trường bắt buộc</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--End main-container -->
@endsection
