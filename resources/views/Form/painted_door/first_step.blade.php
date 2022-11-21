@extends('Form.Layout.index')
@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div id="kt_header_mobile" class="header-mobile">
                    <a href="index.html">
                        <img alt="Logo" src="image/logo/logo.png" class="max-h-30px" />
                    </a>
                    <div class="d-flex align-items-center">
                        <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                            <span></span>
                        </button>
                        <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                            <span class="svg-icon svg-icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path
                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div id="kt_header" class="header header-fixed">
                    <div class="container">
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <a href="/" class="mr-20">
                                <img alt="Logo" src="image/logo/logo.png" class="logo-default max-h-75px" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row flex-column-fluid container">
                    <div class="main d-flex flex-column flex-row-fluid">
                        <div class="subheader py-2 py-lg-6" id="kt_subheader">
                            <div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                                        <h5 class="text-dark font-weight-bold my-1 mr-5">Serial Number :
                                            <b>{{ $SerialNumber }}</b>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-custom example example-compact">
                                    <div class="card-header">
                                        <h3 class="card-title">Painted Door - Purchase Order &nbsp;<b
                                                style="font-size : 25px">First Step</b></h3>
                                    </div>
                                    <form method="POST" action="{{ route('onPaintedDoorFirstStep') }}">
                                        @csrf
                                        <div class="row margin-left-0 margin-right-0">
                                            <div class="col-lg-12">
                                                <div class="card card-custom example example-compact">
                                                    @if ($errors->has('ordered_date') ||
                                                        $errors->has('required_date') ||
                                                        $errors->has('customer') ||
                                                        $errors->has('delivery_address') ||
                                                        $errors->has('delivery_state') ||
                                                        $errors->has('mobile') ||
                                                        $errors->has('job') ||
                                                        $errors->has('company'))
                                                        <div class="alert alert-custom alert-danger fade show alert-custom-style"
                                                            role="alert" id="alertDanger">
                                                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                            <div class="alert-text text-center font-size-25">You should
                                                                fullfill all
                                                                content.</div>
                                                            <div class="alert-close">
                                                                <button type="button" class="close" data-dismiss="alert"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">
                                                                        <i class="ki ki-close"></i>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="content flex-column-fluid" id="kt_content">
                                                        <div class="row">
                                                            <div class="form-group row col-lg-6">
                                                                <label class="col-form-label col-lg-3 col-sm-12" style="{{ $errors->has('ordered_date') ? 'color : #F64E60' : '' }}">Date
                                                                    Ordered:</label>
                                                                <div class="col-lg-6 col-md-9 col-sm-12">
                                                                    <div class="input-group date"
                                                                        style="{{ $errors->has('ordered_date') ? 'border-color : #F64E60' : '' }}">
                                                                        <input type="text" class="form-control"
                                                                            id="kt_datepicker_2" readonly="readonly"
                                                                            placeholder="Select date" name="ordered_date"
                                                                            onchange="inputChange(e, this)">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-calendar-check-o"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row col-lg-6">
                                                                <label
                                                                    class="col-form-label text-right col-lg-3 col-sm-12" style="{{ $errors->has('required_date') ? 'color : #F64E60' : '' }}">Date
                                                                    Reqiured:</label>
                                                                <div class="col-lg-6 col-md-9 col-sm-12">
                                                                    <div class="input-group date" style="{{ $errors->has('required_date') ? 'color : #F64E60' : '' }}">
                                                                        <input type="text" class="form-control"
                                                                            id="kt_datepicker_1" readonly="readonly"
                                                                            placeholder="Select date"
                                                                            name="required_date">
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
                                                    <div class="col-lg-12 my-2">
                                                        <div class="row">
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label"
                                                                    style="{{ $errors->has('customer') ? 'color : #F64E60' : '' }}">Customer
                                                                    Name</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text"
                                                                        id="customer" name="customer"
                                                                        style="{{ $errors->has('customer') ? 'border-color : #F64E60' : '' }}"
                                                                        onchange="inputChange('this')"
                                                                        value="TEST CUSTOMER">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label"
                                                                    style="{{ $errors->has('company') ? 'color : #F64E60' : '' }}">Company
                                                                    Name</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text"
                                                                        id="company" name="company"
                                                                        style="{{ $errors->has('company') ? 'border-color : #F64E60' : '' }}"
                                                                        value="TEST COMPANY">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label"
                                                                    style="{{ $errors->has('delivery_address') ? 'color : #F64E60' : '' }}">Delivery
                                                                    Address</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text"
                                                                        id="delivery_address" name="delivery_address"
                                                                        style="{{ $errors->has('delivery_address') ? 'border-color : #F64E60' : '' }}"
                                                                        value="TEST DELIVERY ADDRESS">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label"
                                                                    style="{{ $errors->has('delivery_state') ? 'color : #F64E60' : '' }}">Delivery
                                                                    State</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text"
                                                                        id="delivery_state" name="delivery_state"
                                                                        style="{{ $errors->has('delivery_state') ? 'border-color : #F64E60' : '' }}"
                                                                        value="TEST DELIVERY STATE">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label"
                                                                    style="{{ $errors->has('job_ref') ? 'color : #F64E60' : '' }}">Job
                                                                    Ref</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text"
                                                                        id="job_ref" name="job_ref"
                                                                        style="{{ $errors->has('job_ref') ? 'border-color : #F64E60' : '' }}"
                                                                        value="TEST JOB REF">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label"
                                                                    style="{{ $errors->has('mobile') ? 'color : #F64E60' : '' }}">Mobile</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text"
                                                                        id="mobile" name="mobile"
                                                                        style="{{ $errors->has('mobile') ? 'border-color : #F64E60' : '' }}"
                                                                        value="TEST Mobile ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-submit-button">
                                                        <button type="submit" class="btn btn-primary mr-2">Save &
                                                            Next</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2"></span>
                            <a class="text-white text-hover-primary"></a>
                        </div>
                        <div class="nav nav-dark order-1 order-md-2">
                            <a class="nav-link pr-3 pl-0 text-muted text-hover-primary"></a>
                            <a class="nav-link px-3 text-muted text-hover-primary"></a>
                            <a class="nav-link pl-3 pr-0 text-muted text-hover-primary"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10"
                        rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
    </div>

    <script>
        $(document).ready(function() {
            setTimeout(noneDisplayAlert, 1000);
        })

        function noneDisplayAlert() {
            $('#alertDanger').css('display', 'none');
        }

        function inputChange(caller){
            $(this).css('border-color', '#E4E6EF');
        }
    </script>
@endsection('content')
