@extends('Form.Layout.index')
@section('content')

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
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
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">Order Form</h5>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <form method ="POST" action="{{ route('onOrderForm') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-custom example example-compact">
                                    <div class="card-header">
                                        <h3 class="card-title">Problem Category</h3>
                                    </div>
                                    @if($errors->has('ordered_date') || $errors->has('required_date') || $errors->has('customer') || $errors->has('delivery_address') || $errors->has('telephone') || $errors->has('fax') || $errors->has('contact_person') || $errors->has('order_number') || $errors->has('door_design') || $errors->has('edge_profile') || $errors->has('door_color') || $errors->has('pvc_edging') || $errors->has('cabinet_type') || $errors->has('kisks_rail_type') || $errors->has('door_type') || $errors->has('drawer_type') || $errors->has('hinge_type') )
                                        <div class="alert alert-custom alert-danger fade show alert-custom-style" role="alert" id="alertDanger">
                                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                            <div class="alert-text text-center">You should fullfill all content.</div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="content flex-column-fluid" id="kt_content">
                                        <div class="row">
                                            <div class="form-group row col-lg-6">
                                                <label class="col-form-label col-lg-3 col-sm-12">Date Ordered:</label>
                                                <div class="col-lg-6 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="kt_datepicker_2" readonly="readonly" placeholder="Select date" name="ordered_date">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-lg-6">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Date Reqiured:</label>
                                                <div class="col-lg-6 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="kt_datepicker_2" readonly="readonly" placeholder="Select date" name="required_date">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 my-2 customer-info">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Customer</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="customer">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Order Number</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="order_number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Delivery Address</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="delivery_address">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Laminate Brand</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="door_design">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Telephone</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="telephone">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Laminate Colour</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="edge_profile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Fax</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="fax">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Laminate Finish</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="door_colour">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Contact Person</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="contact_person">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Edge Profile</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="finish">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6 customer-info-pvc">
                                                <label>33mm BENCH TOP PROFILEs : </label>
                                                <div class="radio-inline">
                                                    <label class="radio radio-lg">
                                                    <input type="radio" checked="checked" name="manufactured" value="1">
                                                    <span></span>HMR RAW</label>
                                                    <label class="radio radio-lg">
                                                    <input type="radio" name="manufactured" value="2">
                                                    <span></span>HMR WHITE</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 customer-info-pvc">
                                                <label>Doors Manufactured by : </label>
                                                <div class="radio-inline">
                                                    <label class="checkbox checkbox-lg">
                                                    <input type="checkbox" checked="checked" name="manufactured" value="1">
                                                    <span></span>&nbsp;&nbsp;&nbsp;EROCOAT</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12 customer-info-pvc">
                                                <label>33mm BENCH TOP PROFILEs : </label>
                                                <div class="radio-inline">
                                                    <label class="radio radio-lg">
                                                    <input type="radio" checked="checked" name="manufactured" value="1">
                                                    <span></span>Tight Roll 6/6</label>
                                                    <label class="radio radio-lg">
                                                    <input type="radio" name="manufactured" value="2">
                                                    <span></span>Euro Roll 10/10</label>
                                                    <label class="radio radio-lg">
                                                    <input type="radio" name="manufactured" value="1">
                                                    <span></span>Bull Nose 180 Degre
                                                    \e</label>
                                                    <label class="radio radio-lg">
                                                    <input type="radio" name="manufactured" value="2">
                                                    <span></span>Bull Nose 90 Degree</label>
                                                    <label class="radio radio-lg">
                                                    <input type="radio" name="manufactured" value="1">
                                                    <span></span>Square Edge</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="order-submit-button">
                                        <button type="submit" class="btn btn-primary mr-2">Order</button>
                                        <a href="{{route('toHome')}}" class="btn mr-2 order-cancel-btn">Cancel</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
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
                        <span class="text-muted font-weight-bold mr-2"></span>
                        <a class="text-white text-hover-primary"></a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark order-1 order-md-2">
                        <a class="nav-link pr-3 pl-0 text-muted text-hover-primary"></a>
                        <a class="nav-link px-3 text-muted text-hover-primary"></a>
                        <a class="nav-link pl-3 pr-0 text-muted text-hover-primary"></a>
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
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
            </g>
        </svg>
    </span>
</div>


    <script src="{{ asset('assets_metronic/js/pages/crud/ktdatatable/base/data-ajax.js')}}"></script>
    <script src="{{ asset('assets_metronic/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
    <script src="{{ asset('assets_metronic/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>
    <script>
        $(document).ready(function(){
            setTimeout(noneDisplayAlert, 500);
        })

        function noneDisplayAlert(){
            $('#alertDanger').css('display', 'none');
        }


    </script>
@endsection('content')
