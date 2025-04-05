@extends('layouts.admin')

@section('css')
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('content')
    @include('components.admin.header', [
        'parent' => null,
        'child' => __('messages.dashboard'),
    ])
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row gx-5 mb-5">
                    <div class="col">
                        <!--begin::Card widget 7-->
                        <div class="card card-flush h-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{ $customersCount }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">{{ __('messages.customers') }}</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column justify-content-end">
                                <!--begin::Users group-->
                                <div class="symbol-group symbol-hover">
                                    @foreach ($users as $user)
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="{{ $user->name }}">
                                            <img src="https://ui-avatars.com/api/?background=random&color=fff&name={{ urlencode($user->name) }}&rounded=true" />
                                        </div>
                                    @endforeach
                                    <a href="{{ route('users.index') }}" class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-gray-900 text-gray-300 fs-8 fw-bolder">+42</span>
                                    </a>
                                </div>
                                <!--end::Users group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 7-->
                    </div>
                    <div class="col">
                        <div class="card card-flush h-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{ $ordersCount }}</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black" />
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%
                                        </span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">{{ __('messages.orders') }}</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-boldest fs-6 text-dark">{{ __('messages.goal') }}</span>
                                        <span class="fw-bolder fs-6 text-gray-400">62%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Col-->
                <div class="mb-5">
                    <!--begin::Chart widget 3-->
                    <div class="card card-flush overflow-hidden h-md-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">{{ __('messages.sales_this_year') }}</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Flatpickr-->
                            <div class="input-group w-250px">
                                <input class="form-control form-control-solid rounded rounded-end-0"
                                    placeholder="{{ __('messages.pick_date_range') }}" id="kt_ecommerce_sales_flatpickr" />
                            </div>
                            <!--end::Flatpickr-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_dashboard_3" class="min-h-auto ps-4 pe-6" style="height: 420px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12 mb-5 mb-xl-10">
                        <!--begin::Table Widget 4-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">{{ __('messages.best_sellers') }}</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5"
                                    id="kt_ecommerce_products_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-150px">{{ __('messages.product') }}</th>
                                            <th class="min-w-70px">{{ __('messages.order_total') }}</th>
                                            <th class="min-w-70px">{{ __('messages.quantity') }}</th>
                                            <th class="min-w-100px">{{ __('messages.price') }}</th>
                                            <th class="min-w-100px">{{ __('messages.rating') }}</th>
                                            <th class="min-w-100px">{{ __('messages.status') }}</th>
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
                                                    <span class="fw-bolder ms-3">{{ $product->orders_count }}</span>
                                                </td>
                                                <!--end::Qty=-->
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
                        <!--end::Table Widget 4-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12 mb-5 mb-xl-10">
                        <!--begin::Table Widget 4-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">{{ __('messages.latest_orders') }}</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-3">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-100px">{{ __('messages.order_id') }}</th>
                                            <th class="text-end min-w-100px">{{ __('messages.creation_date') }}</th>
                                            <th class="text-end min-w-125px">{{ __('messages.customer') }}</th>
                                            <th class="text-end min-w-100px">{{ __('messages.total') }}</th>
                                            <th class="text-end min-w-100px">{{ __('messages.note') }}</th>
                                            <th class="text-end min-w-50px">{{ __('messages.status') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('orders.show', ['order' => $order->id]) }}"
                                                        class="text-dark text-hover-primary">#EG000{{ $order->id }}</a>
                                                </td>
                                                <td class="text-end">{{ $order->created_at->format('d/m/Y') }}</td>
                                                <td class="text-end">
                                                    <div class="text-dark text-hover-primary">{{ $order->user->name }}
                                                    </div>
                                                </td>
                                                <td class="text-end">@money($order->total, 'VND')</td>
                                                <td class="text-end">
                                                    <span class="text-dark fw-bolder">{{ $order->note }}</span>
                                                </td>
                                                <td class="text-end">
                                                    @include('components.status', [
                                                        'status' => $order->status,
                                                    ])
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Table Widget 4-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection

@section('js')
    <script src="{{ asset('vendor/moment.js') }}"></script>
    <script src="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('metronic/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('resources/js/dashboard_1.js') }}"></script>
    <script src="{{ asset('resources/js/dashboard_2.js') }}"></script>
    <!--end::Page Custom Javascript-->
@endsection
