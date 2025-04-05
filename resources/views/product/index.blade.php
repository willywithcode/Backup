@extends('layouts.admin')

@section('css')
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
@endsection

@section('content')
    @include('components.admin.header', [
        'parent' => null,
        'child' => __('messages.products'),
    ])
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                @if (Session::get('success'))
                    <input id="success-message" type="hidden" value="{{ Session::get('success') }}" />
                @endif
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-ecommerce-product-filter="search"
                                    class="form-control form-control-solid w-250px ps-14"
                                    placeholder="{{ __('messages.search_product') }}" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                    <option value="all">{{ __('messages.all') }}</option>
                                    <option value="{{ __('messages.published') }}">{{ __('messages.published') }}</option>
                                    <option value="{{ __('messages.unpublished') }}">{{ __('messages.unpublished') }}
                                    </option>
                                    <option value="{{ __('messages.draft') }}">{{ __('messages.draft') }}</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--begin::Add product-->
                            <a href="{{ route('products.create') }}"
                                class="btn btn-primary">{{ __('messages.add_product') }}</a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px">{{ __('messages.product') }}</th>
                                    <th class="min-w-100px">{{ __('messages.quantity') }}</th>
                                    <th class="min-w-100px">{{ __('messages.price') }}</th>
                                    <th class="min-w-100px">{{ __('messages.rating') }}</th>
                                    <th class="min-w-100px">{{ __('messages.status') }}</th>
                                    <th class="text-end min-w-150px">{{ __('messages.actions') }}</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @foreach ($products as $product)
                                    <!--begin::Table row-->
                                    <tr id="{{ 'product-item-' . $product->id }}">
                                        <!--begin::Category=-->
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Thumbnail-->
                                                <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                                    class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="{{ 'background-image:url(' . asset($product->avatar_url) . ');' }}"></span>
                                                </a>
                                                <!--end::Thumbnail-->
                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                        data-kt-ecommerce-product-filter="product_name">{{ $product->name }}</a>
                                                    <!--end::Title-->
                                                </div>
                                            </div>
                                        </td>
                                        <!--end::Category=-->
                                        <!--begin::Qty=-->
                                        <td class="pe-0" data-order="29">
                                            <span class="fw-bolder ms-3">{{ $product->quantity }}</span>
                                        </td>
                                        <!--end::Qty=-->
                                        <!--begin::Price=-->
                                        <td class="pe-0">
                                            <span class="fw-bolder text-dark">@money($product->price, 'VND')</span>
                                        </td>
                                        <!--end::Price=-->
                                        <!--begin::Rating-->
                                        <td class="pe-0" data-order="rating-3">
                                            @include('components.view_rating', [
                                                'rating' => round($product->averageRating),
                                            ])
                                        </td>
                                        <!--end::Rating-->
                                        <!--begin::Status=-->
                                        <td class="pe-0" data-order="Inactive">
                                            <!--begin::Badges-->
                                            @include('components.status', [
                                                'status' => $product->status,
                                            ])
                                            <!--end::Badges-->
                                        </td>
                                        <!--end::Status=-->
                                        <!--begin::Action=-->
                                        <td class="text-end">
                                            <div class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                {{ __('messages.actions') }}
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                                        class="menu-link px-3">{{ __('messages.edit') }}</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-link px-3 delete-btn"
                                                        data-url="{{ route('products.destroy', ['product' => $product->id]) }}"
                                                        data-id="{{ $product->id }}">
                                                        {{ __('messages.delete') }}</div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                    <!--end::Table row-->
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection

@section('js')
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('metronic/assets/js/custom/apps/ecommerce/catalog/products.js') }}"></script>
    <script src="{{ asset('resources/js/product/index.js') }}"></script>
    <!--end::Page Custom Javascript-->
@endsection
