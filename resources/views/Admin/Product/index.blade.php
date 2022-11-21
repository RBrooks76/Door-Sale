@extends('Admin.Layout.index')
@section('content')

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header Mobile-->
            <div id="kt_header_mobile" class="header-mobile">
                <!--begin::Logo-->
                <a href="index.html">
                    <img alt="Logo" src="assets/media/logos/logo-default.png" class="max-h-30px" />
                </a>
                <!--end::Logo-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                        <span></span>
                    </button>
                    <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                        <span class="svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header Mobile-->
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Left-->
                    <div class="d-none d-lg-flex align-items-center mr-3">
                        <!--begin::Logo-->
                        <a href="index.html" class="mr-20">
                            <img alt="Logo" src="assets/media/logos/logo-default.png" class="logo-default max-h-35px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Left-->
                    <!--begin::Topbar-->
                    @include('Admin.Layout.topbar')
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Header Menu Wrapper-->
            @include('Admin.Layout.navbar')
            <!--end::Header Menu Wrapper-->
            <!--begin::Container-->
            <div class="d-flex flex-row flex-column-fluid container">
                <!--begin::Content Wrapper-->
                <div class="main d-flex flex-column flex-row-fluid">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6" id="kt_subheader">
                        <div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Page Heading-->
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">Uppy File Upload</h5>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <div class="content flex-column-fluid" id="kt_content">
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-lg-12">
                                <!--begin::Card-->
                                <div class="card card-custom card-stretch">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-label">File Uplaod Example In Form Layout</h3>
                                        </div>
                                    </div>
                                    <!--begin::Form-->
                                    <form>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Full Name:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" placeholder="Enter full name" name="name" />
                                                    <span class="form-text text-muted">Please enter your full name</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Email:</label>
                                                <div class="col-lg-6">
                                                    <input type="email" class="form-control" placeholder="Enter email" name="email" />
                                                    <span class="form-text text-muted">Please enter your email</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Message:</label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Please enter your message"></textarea>
                                                    <span class="form-text text-muted">We'll never share your message with anyone else.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload File:</label>
                                                <div class="col-lg-6">
                                                    <div class="uppy" id="kt_uppy_5">
                                                        <div class="uppy-wrapper"></div>
                                                        <div class="uppy-list"></div>
                                                        <div class="uppy-status"></div>
                                                        <div class="uppy-informer uppy-informer-min"></div>
                                                    </div>
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-6">
                                                    <button type="reset" class="btn btn-primary">Submit</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Card-->
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--begin::Content Wrapper-->
            </div>
            <!--end::Container-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">&nbsp;</span>
                        <a class="text-white text-hover-primary"></a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark order-1 order-md-2">
                        <a class="nav-link pr-3 pl-0 text-muted text-hover-primary">&nbsp;</a>
                        <a class="nav-link px-3 text-muted text-hover-primary">&nbsp;</a>
                        <a class="nav-link pl-3 pr-0 text-muted text-hover-primary">&nbsp;</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->


@endsection
