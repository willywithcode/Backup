@extends('layouts.error')

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Error 500 -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
                <!--begin::Logo-->
                <a href="" class="mb-10 pt-lg-10">
                    <img alt="Logo" src="{{ asset('metronic/assets/media/logos/logo-1.svg') }}" class="h-40px mb-5" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="pt-lg-10 mb-10">
                    <!--begin::Logo-->
                    <h1 class="fw-bolder fs-2qx text-gray-800 mb-10">Lỗi hệ thống</h1>
                    <!--end::Logo-->
                    <!--begin::Message-->
                    <div class="fw-bold fs-3 text-muted mb-15">Có lỗi xảy ra!
                        <br />Hãy thử lại sau.
                    </div>
                    <!--end::Message-->
                    <!--begin::Action-->
                    <div class="text-center">
                        <a href="" class="btn btn-lg btn-primary fw-bolder">Trang chủ</a>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                    style="background-image: url(metronic/assets/media/illustrations/sketchy-1/17.png"></div>
                <!--end::Illustration-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="" class="text-muted text-hover-primary px-2">About</a>
                    <a href="" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Error 500-->
    </div>
@endsection
