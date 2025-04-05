@extends('layouts.customer')

@section('css')
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .basket-icon i {
            color: #fff;
        }
        .content {
            min-height: calc(100vh - 180px);
        }
    </style>
@endsection

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
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
                                <input type="text" data-kt-ecommerce-order-filter="search"
                                    class="form-control form-control-solid w-250px ps-14"
                                    placeholder="{{ __('messages.search_order') }}" style="height:43px" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Flatpickr-->
                            <div class="input-group w-250px">
                                <input class="form-control form-control-solid rounded rounded-end-0"
                                    placeholder="{{ __('messages.pick_date_range') }}" id="kt_ecommerce_sales_flatpickr"
                                    style="height:60px" />
                                <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2"
                                                rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black" />
                                            <rect x="8.46447" y="7.05029" width="12" height="2" rx="1"
                                                transform="rotate(45 8.46447 7.05029)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                            </div>
                            <!--end::Flatpickr-->
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                    <option value="all">{{ __('messages.all') }}</option>
                                    <option value="{{ __('messages.pending') }}">{{ __('messages.pending') }}</option>
                                    <option value="{{ __('messages.confirmed') }}">{{ __('messages.confirmed') }}</option>
                                    <option value="{{ __('messages.delivering') }}">{{ __('messages.delivering') }}
                                    </option>
                                    <option value="{{ __('messages.delivered') }}">{{ __('messages.delivered') }}</option>
                                    <option value="{{ __('messages.paid') }}">{{ __('messages.paid') }}</option>
                                    <option value="{{ __('messages.canceled') }}">{{ __('messages.canceled') }}</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">{{ __('messages.order_id') }}</th>
                                    <th class="min-w-70px">{{ __('messages.status') }}</th>
                                    <th class="min-w-100px">{{ __('messages.total') }}</th>
                                    <th class="min-w-100px">{{ __('messages.creation_date') }}</th>
                                    <th class="min-w-100px">{{ __('messages.billing_address') }}</th>
                                    <th class="min-w-100px">{{ __('messages.note') }}</th>
                                    <th class="text-end min-w-150px">{{ __('messages.actions') }}</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @foreach ($orders as $order)
                                    <!--begin::Table row-->
                                    <tr>
                                        <td data-kt-ecommerce-order-filter="order_id">
                                            <a href="{{ route('order_detail', ['order' => $order->id]) }}"
                                                class="text-gray-800 text-hover-primary fw-bolder">EG000{{ $order->id }}</a>
                                        </td>
                                        <!--end::Order ID=-->
                                        <!--begin::Status=-->
                                        <td class="pe-0" data-order="Failed">
                                            <!--begin::Badges-->
                                            @include('components.status', [
                                                'status' => $order->status,
                                            ])
                                            <!--end::Badges-->
                                        </td>
                                        <!--end::Status=-->
                                        <!--begin::Total=-->
                                        <td class="pe-0">
                                            <span class="fw-bolder">@money($order->total, 'VND')</span>
                                        </td>
                                        <!--end::Total=-->
                                        <!--begin::Date Added=-->
                                        <td data-order="2021-12-25">
                                            <span class="fw-bolder">{{ $order->created_at->format('d/m/Y') }}</span>
                                        </td>
                                        <!--end::Date Added=-->
                                        <td>
                                            <span class="fw-bolder">{{ $order->delivery_address }}</span>
                                        </td>
                                        <!--begin::Date Modified=-->
                                        <td data-order="2021-12-30">
                                            <span class="fw-bolder">{{ $order->note }}</span>
                                        </td>
                                        <!--end::Date Modified=-->
                                        <!--begin::Action=-->
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end">{{ __('messages.actions') }}
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
                                            </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('order_detail', ['order' => $order->id]) }}"
                                                        class="menu-link px-3">{{ __('messages.view_detail') }}</a>
                                                </div>
                                                <!--end::Menu item-->
                                                @if ($order->status === 'pending')
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-link px-3 cancel-btn"
                                                            data-url="{{ route('orders.destroy', ['order' => $order->id]) }}"
                                                            data-id="{{ $order->id }}">
                                                            {{ __('messages.cancel_order') }}
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                @endif
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
    <script src="{{ asset('metronic/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/scripts.bundle.js') }}"></script>
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <script src="{{ asset('resources/js/customer/order_history.js') }}"></script>
@endsection
