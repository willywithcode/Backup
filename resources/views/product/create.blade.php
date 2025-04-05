@extends('layouts.admin')

@section('content')
    @include('components.admin.header', [
        'parent' => __('messages.products'),
        'child' => __('messages.add_product'),
    ])
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Form-->
                <form method="POST" action="{{ route('products.store') }}" enctype='multipart/form-data'
                    id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row">
                    @csrf
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ __('messages.avatar') }}</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty image-input-outline mb-3"
                                    data-kt-image-input="true"
                                    style="{{ 'background-image: url(' . asset('metronic/assets/media/svg/files/blank-image.svg') . ')' }}">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg, .webp" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">*.png, *.jpg, *.jpeg</div>
                                <!--end::Description-->
                                <div id="error-message-avatar" class="error-message text-danger"></div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Thumbnail settings-->
                        <!--begin::Status-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ __('messages.status') }}</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px"
                                        id="kt_ecommerce_add_product_status"></div>
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select class="form-select mb-2" name="status" data-control="select2"
                                    data-hide-search="true" data-placeholder="{{ __('messages.status') }}"
                                    id="kt_ecommerce_add_product_status_select">
                                    <option value="published" selected="selected">{{ __('messages.published') }}</option>
                                    <option value="inactive">{{ __('messages.unpublished') }}</option>
                                    <option value="draft">{{ __('messages.draft') }}</option>
                                </select>
                                <!--end::Select2-->
                                <!--begin::Datepicker-->
                                <div class="d-none mt-10">
                                    <input class="form-control" id="kt_ecommerce_add_product_status_datepicker"
                                        placeholder="Pick date &amp; time" />
                                </div>
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Status-->
                        <!--begin::Category & tags-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ __('messages.categories') }}</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <!--begin::Select2-->
                                <select class="form-select mb-2" name="category_ids[]" data-control="select2"
                                    data-placeholder="{{ __('messages.categories') }}" data-allow-clear="true" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Select2-->
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Category & tags-->
                        <!--begin::Brand-->
{{--                        <div class="card card-flush py-4">--}}
{{--                            <!--begin::Card header-->--}}
{{--                            <div class="card-header">--}}
{{--                                <!--begin::Card title-->--}}
{{--                                <div class="card-title">--}}
{{--                                    <h2>{{ __('messages.brand') }}</h2>--}}
{{--                                </div>--}}
{{--                                <!--end::Card title-->--}}
{{--                            </div>--}}
{{--                            <!--end::Card header-->--}}
{{--                            <!--begin::Card body-->--}}
{{--                            <div class="card-body pt-0">--}}
{{--                                <!--begin::Input group-->--}}
{{--                                <!--begin::Select2-->--}}
{{--                                <select class="form-select mb-2" name="brand_id" data-control="select2"--}}
{{--                                    data-placeholder="Select an option">--}}
{{--                                    @foreach ($brands as $brand)--}}
{{--                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                <!--end::Select2-->--}}
{{--                                <!--end::Input group-->--}}
{{--                            </div>--}}
{{--                            <!--end::Card body-->--}}
{{--                        </div>--}}
                        <!--end::Brand-->
                        <!--begin::Discount-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>{{ __('messages.product_discount') }}</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <label class="form-label">{{ __('messages.discount') }} (%)</label>
                                <input type="number" min="1" name="discount" class="form-control mb-2"
                                    placeholder="%" value="" />
                                <!--begin::Datepicker-->
                                <div class="mt-10">
                                    <label class="form-label">{{ __('messages.discount_deadline') }}</label>
                                    <input class="form-control" name="discount_deadline" id="discount-deadline-picker"
                                        placeholder="{{ __('messages.discount_deadline') }}" />
                                </div>
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Discount-->
                    </div>
                    <!--end::Aside column-->
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin::Product info-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>{{ __('messages.product_info') }}</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('messages.name') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="name" class="form-control mb-2"
                                                placeholder="{{ __('messages.name') }}" value="" />
                                            <!--end::Input-->
                                            <div id="error-message-name" class="error-message text-danger"></div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">{{ __('messages.description') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div id="product-description-editor" class="min-h-200px mb-2">
                                            </div>
                                            <!--end::Editor-->
                                        </div>
                                        <input type="hidden" id="product-description" name="description" />
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row w-100">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('messages.price') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" name="price" class="form-control mb-2"
                                                value="" min="1" />
                                            <!--end::Input-->
                                            <div id="error-message-price" class="error-message text-danger"></div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row w-100">
                                            <!--begin::Label-->
                                            <label class="required form-label">{{ __('messages.quantity') }}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" name="quantity" class="form-control mb-2"
                                                   value="" min="1" />
                                            <!--end::Input-->
                                            <div id="error-message-quantity" class="error-message text-danger"></div>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->
                                <!--begin::Product variants-->
{{--                                <div class="card card-flush py-4">--}}
{{--                                    <!--begin::Card header-->--}}
{{--                                    <div class="card-header">--}}
{{--                                        <div class="card-title">--}}
{{--                                            <h2>{{ __('messages.product_variants') }}</h2>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Card header-->--}}
{{--                                    <!--begin::Card body-->--}}
{{--                                    <div class="card-body pt-0" id="variants-container">--}}
{{--                                        <div class="variant" id="variant-1">--}}
{{--                                            <div class="d-flex gap-5 mb-2">--}}
{{--                                                <!--begin::Input group-->--}}
{{--                                                <div class="fv-row w-100">--}}
{{--                                                    <!--begin::Label-->--}}
{{--                                                    <label class="required form-label">{{ __('messages.color') }}</label>--}}
{{--                                                    <!--end::Label-->--}}
{{--                                                    <!--begin::Input-->--}}
{{--                                                    <select class="form-select mb-2" name="colors[]" placeholder="Select an option">--}}
{{--                                                        @foreach ($colors as $color)--}}
{{--                                                            <option value="{{ $color->id }}">{{ $color->value }}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                    <!--end::Input-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Input group-->--}}
{{--                                                <!--begin::Input group-->--}}
{{--                                                <div class="fv-row w-100">--}}
{{--                                                    <!--begin::Label-->--}}
{{--                                                    <label class="required form-label">{{ __('messages.size') }}</label>--}}
{{--                                                    <!--end::Label-->--}}
{{--                                                    <!--begin::Input-->--}}
{{--                                                    <select class="form-select mb-2" name="sizes[]" placeholder="Select an option">--}}
{{--                                                        @foreach ($sizes as $size)--}}
{{--                                                            <option value="{{ $size->id }}">{{ $size->value }}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                    <!--end::Input-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Input group-->--}}
{{--                                                <!--begin::Input group-->--}}
{{--                                                <div class="fv-row w-100">--}}
{{--                                                    <!--begin::Label-->--}}
{{--                                                    <label class="required form-label">{{ __('messages.quantity') }}</label>--}}
{{--                                                    <!--end::Label-->--}}
{{--                                                    <!--begin::Input-->--}}
{{--                                                    <input type="number" name="quantities[]" class="form-control mb-2"--}}
{{--                                                        value="" min="1" />--}}
{{--                                                    <!--end::Input-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Input group-->--}}
{{--                                                <div style="display:flex;align-items:flex-end;padding-bottom:7px;">--}}
{{--                                                    <a href="#"--}}
{{--                                                        class="remove-variant-btn btn btn-active-light-danger pe-5"--}}
{{--                                                        style="opacity:0;cursor:default;">--}}
{{--                                                        <i class="fas fa-minus"></i>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="error-message variant-error-message text-danger mb-5" style="margin-top:-8px;"></div>--}}
{{--                                        </div>--}}
{{--                                        <a href="#" id="add-variant-btn" class="btn btn-light-primary">--}}
{{--                                            <i class="fas fa-plus me-2"></i> {{ __('messages.add') }}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Card header-->--}}
{{--                                </div>--}}
                                <!--end::Product variants-->
                                <!--begin::Media-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>{{ __('messages.media') }}</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-2">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="add_product_media">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">
                                                            Drop files here or click to upload.</h3>
                                                        <span class="fs-7 fw-bold text-gray-400">Upload
                                                            up to 10 files</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Media-->
                            </div>
                        </div>
                        <!--end::Product info-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{ route('products.index') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">{{ __('messages.cancel') }}</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="submit-btn" class="btn btn-primary">
                                <span class="indicator-label">{{ __('messages.save_changes') }}</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection

@section('js')
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('metronic/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('metronic/assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script src="{{ asset('resources/js/product/create.js') }}"></script>
    <!--end::Page Custom Javascript-->
@endsection
