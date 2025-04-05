@extends('layouts.admin')

@section('content')
    @include('components.admin.header', [
        'parent' => __('messages.posts'),
        'child' => 'Chỉnh sửa bài viết',
    ])
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Form-->
                <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype='multipart/form-data'
                    id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row">
                    @csrf
                    @method('PUT')
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-400px mb-7 me-lg-10">
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
                                    style="{{ 'background-image: url(' . ($post->thumbnail_url ? $post->thumbnail_url : asset('metronic/assets/media/svg/files/blank-image.svg')) . ')' }}">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg, .webp" />
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
                                <div class="text-muted fs-7">*.png, *.jpg, *.jpeg, *.webp</div>
                                <!--end::Description-->
                                @error('thumbnail')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
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
                                <select class="form-select mb-2" name="is_published" data-control="select2"
                                    data-hide-search="true" data-placeholder="{{ __('messages.status') }}"
                                    id="kt_ecommerce_add_product_status_select">
                                    <option value="1" {{ $post->is_published ? 'selected' : '' }}>{{ __('messages.published') }}</option>
                                    <option value="0" {{ !$post->is_published ? 'selected' : '' }}>{{ __('messages.unpublished') }}</option>
                                </select>
                                @error('is_published')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                                <!--end::Select2-->

                                <!--begin::Featured checkbox-->
                                <div class="form-check form-check-custom form-check-solid mt-5">
                                    <input class="form-check-input" type="checkbox" name="is_featured" value="1" {{ $post->is_featured ? 'checked' : '' }} id="is_featured" style="width: 1.2rem; height: 1.2rem;"/>
                                    <label class="form-check-label fw-bold" for="is_featured">
                                        Tin nổi bật
                                    </label>
                                </div>
                                <!--end::Featured checkbox-->

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
                                        <option value="{{ $category->id }}" {{ in_array($category->id, $post->categories->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Select2-->
                                <!--end::Input group-->
                                @error('category_ids')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Category & tags-->
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
                                            <h2>Nội dung bài viết</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Tiêu đề</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="title" class="form-control mb-2 @error('title') is-invalid @enderror"
                                                placeholder="Tiêu đề" id="title-input"
                                                value="{{ old('title', $post->title) }}" />
                                            <!--end::Input-->
                                            @error('title')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Đường dẫn</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="slug" class="form-control mb-2 @error('slug') is-invalid @enderror"
                                                placeholder="Đường dẫn" id="slug-input"
                                                value="{{ old('slug', $post->slug) }}" />
                                            <!--end::Input-->
                                            @error('slug')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Mô tả</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea name="excerpt" class="form-control mb-2 @error('excerpt') is-invalid @enderror" rows="4" placeholder="Mô tả">{{ old('excerpt', $post->excerpt) }}</textarea>
                                            <!--end::Input-->
                                            @error('excerpt')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Nội dung</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div id="product-description-editor" class="min-h-200px mb-2">
                                            </div>
                                            <!--end::Editor-->
                                            @error('content')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <input type="hidden" id="product-description" name="content" value="{{ old('content', $post->content) }}" />
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Số thứ tự</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" name="order" class="form-control mb-2 @error('order') is-invalid @enderror"
                                                placeholder="Số thứ tự" value="{{ old('order', $post->order) }}" min="1" />
                                            <!--end::Input-->
                                            @error('order')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                            </div>
                        </div>
                        <!--end::Product info-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{ route('posts.index') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">{{ __('messages.cancel') }}</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" class="btn btn-primary">
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
    <script src="{{ asset('resources/js/posts/create.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const titleInput = document.getElementById('title-input');
            const slugInput = document.getElementById('slug-input');

            titleInput.addEventListener('input', function(e) {
                const title = e.target.value;
                const slug = createSlug(title);
                slugInput.value = slug;
            });

            function createSlug(text) {
                return text
                    .toLowerCase()
                    .normalize('NFD') // Normalize diacritics
                    .replace(/[\u0300-\u036f]/g, '') // Remove diacritics
                    .replace(/[đĐ]/g, 'd') // Handle Vietnamese đ/Đ
                    .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                    .replace(/-+/g, '-') // Replace multiple hyphens with single hyphen
                    .trim(); // Remove whitespace from both ends
            }
        });
    </script>
@endsection
