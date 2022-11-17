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
                                                <label class="col-6 col-form-label">Door Design</label>
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
                                                <label class="col-6 col-form-label">Edge Profile</label>
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
                                                <label class="col-6 col-form-label">Door Colour</label>
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
                                                <label class="col-6 col-form-label">Finish</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="finish">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">

                                            </div>
                                            <div class="form-group col-lg-6 customer-info-pvc">
                                                <label>Doors Manufactured by : </label>
                                                <div class="radio-inline">
                                                    <label class="radio radio-lg">
                                                    <input type="radio" checked="checked" name="manufactured" value="1">
                                                    <span></span>EROCOAT</label>
                                                    <label class="radio radio-lg">
                                                    <input type="radio" name="manufactured" value="2">
                                                    <span></span>CUSTOMER</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 my-3 flex ">
                                        <div class="col-lg-6">
                                            <table class="col-lg-12 table">
                                                <thead class="">

                                                </thead>
                                                <tbody class="table-body">
                                                    <tr>
                                                        <td width="200" rowspan="3">Extra Paint Details</td>
                                                        <td width="250">Paint Manufacturer</td>
                                                        <td width="">
                                                            <input type="text"class="table-input" name="paint_manu" id="paint_manu">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="">Touch Up Paint</td>
                                                        <td width="">
                                                            <select class="form-control form-control-solid" name="touch_paint" id="touch_paint">
                                                                <option value="0"></option>
                                                                <option value="1">True</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="">Extra Paint (Kilos)</td>
                                                        <td width="">
                                                            <input type="text"class="table-input" name="extra_paint" id="extra_paint" onchange="onExtraPaint()">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-6">
                                            <table class="col-lg-12 table">
                                                <thead class="">
                                                    <tr class="top-header">
                                                        <th rowspan="2" width="100"></th>
                                                        <th rowspan="2" width="50">Amount</th>
                                                        <th rowspan="2" width="50">GST</th>
                                                        <th rowspan="2" width="50">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-body">
                                                    <tr>
                                                        <td>Doors</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Open Cabinets</td>
                                                        <td id="cabinets_amount"></td>
                                                        <td id="cabinets_gst"></td>
                                                        <td id="cabinets_total"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Smart Zeev</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Extra Paint</td>
                                                        <td id="paint_amount"></td>
                                                        <td id="paint_gst"></td>
                                                        <td id="paint_total"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Minimum Invoice</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Total</td>
                                                        <td id="table_total"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 my-3 flex flex-column">
                                        <table class="col-lg-12 table">
                                            <thead class="">
                                                <tr class="top-header">
                                                    <th colspan="2" rowspan="2" width="50">#</th>
                                                    <th colspan="4" rowspan="2">Finishes</th>
                                                    <th colspan="2" rowspan="2">Hardware</th>
                                                    <th colspan="2" rowspan="2">Dimensions</th>
                                                    <th colspan="2" >Hinge Position </th>
                                                    <th rowspan="2">Status</th>
                                                    <th rowspan="2">Comment</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Drawer Height</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <tr id="first_row">
                                                        <td rowspan="5" width="50">
                                                            <span>1</span>
                                                        </td>
                                                        <td rowspan="5" width="150">
                                                            <select class="form-control form-control-solid" name="door_category" id="door_category" onchange="onChangeDoorCategory()">
                                                                <option value=""></option>
                                                                @foreach ($doorstyle as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span>style</span>
                                                        </td>
                                                        <td width="100">
                                                            <select class="form-control form-control-solid" name="finish_style" id="finish_style" onchange="">

                                                            </select>
                                                        </td>
                                                        <td width="50">
                                                            <span id="finish_material_title"></span>
                                                        </td>
                                                        <td width="100">
                                                            <select class="form-control form-control-solid" name="finish_material" id="finish_material" onchange="">

                                                            </select>
                                                        </td>
                                                        <td width="50">
                                                            <span id="hardware_first_title"></span>
                                                        </td>
                                                        <td width="150">
                                                            <select class="form-control form-control-solid" name="hardward_first" id="hardware_first" onchange="">

                                                            </select>
                                                        </td>
                                                        <td width="60">
                                                            <span id="dimension_first_title"></span>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="dimension_first" id="dimension_first">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="">
                                                        </td>
                                                        <td rowspan="3" id="status_amount">
                                                            <input type="text" class="table-input" name="">
                                                        </td>
                                                        <td rowspan="5">
                                                            <textarea rows="10" class="table-input" name=""></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr id="second_row">
                                                        <td>
                                                            <span>colour</span>
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="finish_colour" id="finish_colour">
                                                        </td>
                                                        <td>
                                                            <span id="finish_third_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="finish_third" id="finish_third" onchange="">
                                                                @php
                                                                    $data = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
                                                                    $cnt1 = 0;
                                                                @endphp
                                                                <option value=""></option>
                                                                @foreach ($data as $item)
                                                                    <option value="{{ $cnt1++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="hardware_second_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="hardware_second" id="hardware_second" onchange="">

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="dimension_second_title"></span>
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="dimension_second" id="dimension_second">
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                    </tr>
                                                    <tr id="third_row">
                                                        <td>
                                                            <span>Finish</span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="finish_finish" id="finish_finish" onchange="">
                                                                <option value=""></option>
                                                                    @foreach ($finish as $item)
                                                                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                    @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="finish_fourth_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="finish_fourth" id="finish_fourth" onchange="">
                                                                @php
                                                                    $data = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
                                                                    $cnt1 = 0;
                                                                @endphp
                                                                <option value=""></option>
                                                                @foreach ($data as $item)
                                                                    <option value="{{ $cnt1++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="hardware_third_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="hardware_third" id="hardware_third" onchange="">

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="dimension_third_title"></span>
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="dimension_third" id="dimension_third">
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                    </tr>
                                                    <tr id="fourth_row">
                                                        <td>
                                                            <span id="finish_first_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="finish_first" id="finish_first" onchange="finish_first()">

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="finish_fifth_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="finish_fifth" id="finish_fifth" onchange="">
                                                                <option value=""></option>
                                                                <option value="1">True</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="hardware_fourth_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="hardware_fourth" id="hardware_fourth" onchange="">

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="dimension_fourth_title"></span>
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="dimension_fourth" id="dimension_fourth">
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                        <td id="status_total">
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                    </tr>
                                                    <tr id="fifth_row">
                                                        <td>
                                                            <span id="finish_second_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="finish_second" id="finish_second" onchange="">

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="finish_sixth_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="finish_sixth" id="finish_sixth" onchange="">

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="hardware_fifth_title"></span>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="hardware_fifth" id="hardware_fifth" onchange="">

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span id="dimension_fifth_title"></span>
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="dimension_fifth" id="dimension_fifth">
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                        <td>
                                                            <input type="text"class="table-input" name="">
                                                        </td>
                                                        <td id="status_final">

                                                        </td>
                                                    </tr>
                                                </tr>
                                            </tbody>
                                        </table>
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
            getCabinetsData();
            onHide();
        })

        function noneDisplayAlert(){
            $('#alertDanger').css('display', 'none');
        }


        var cabinets_total = 0;
        var doors_total = 0;
        var zeev_total = 0;
        var paint_total = 0;

        function getCabinetsData(){
            var CabintesTotalAmount = localStorage.getItem('TotalAmount');
            var cabinets_gst = (CabintesTotalAmount * 0.1).toFixed(2);
            cabinets_total = (parseFloat(CabintesTotalAmount) + parseFloat(cabinets_gst));

            $('#cabinets_amount').html(CabintesTotalAmount);
            $('#cabinets_gst').html(cabinets_gst);
            $('#cabinets_total').html(cabinets_total);

            getTableTotals();
        }

        function onExtraPaint(){
            var value = parseFloat($('#extra_paint').val()) * 50;
            paint_total = value + value * 0.1;

            $('#paint_amount').html(value);
            $('#paint_gst').html(value * 0.1);
            $('#paint_total').html(paint_total);

            getTableTotals();
        }

        function getTableTotals(){
            return $('#table_total').html(cabinets_total + doors_total + zeev_total + paint_total);
        }

        function onHide(){
            $('#finish_first').hide();
            $('#finish_second').hide();
            $('#finish_third').hide();
            $('#finish_fourth').hide();
            $('#finish_fifth').hide();
            $('#finish_sixth').hide();

            // $('#fourth_row').hide();
            // $('#fifth_row').hide();

            $('#hardware_first').hide();
            $('#hardware_second').hide();
            $('#hardware_third').hide();
            $('#hardware_fourth').hide();
            $('#hardware_fifth').hide();

            $('#dimension_first').hide();
            $('#dimension_second').hide();
            $('#dimension_third').hide();
            $('#dimension_fourth').hide();
            $('#dimension_fifth').hide();
        }

        function onGetFixedResponse(response){
            if(response.finish_style != undefined){
                var finish_style = "<option value=''></option>";
                for(var i = 0; i < response.finish_style.length; i++){
                    finish_style += "<option value="+ response.finish_style[i]['id'] +">"+ response.finish_style[i]['style_name'] +"</option>";
                }
                $('#finish_style').html(finish_style);
            }

            if(response.finish_material != undefined){
                if(response.finish_material_title != undefined){
                    $('#finish_material_title').html(response.finish_material_title);
                } else {
                    $('#finish_material_title').html('Material');
                }
                var finish_material = "<option value=''></option>";
                for(var i = 0; i < response.finish_material.length; i++){
                    finish_material += "<option value="+ response.finish_material[i]['id'] +">"+ response.finish_material[i]['material_name'] +"</option>";
                }
                $('#finish_material').html(finish_material);
            } else {
                $('#finish_material').hide();
                $('#finish_material').html('');
                $('#finish_material_title').html('');
                $('#finish_material').remove(name);
            }
        }

        function onGetResponse(response){
            //// Finish Part
            if(response.finish_first != undefined){
                // $('#fourth_row').show();

                var finish_first_result = "<option value=''></option>";
                for(var i = 0; i < response.finish_first_result.length; i++){
                    finish_first_result += "<option value="+ response.finish_first_result[i]['id'] +">"+ response.finish_first_result[i]['name'] +"</option>";
                }
                $('#finish_first_title').html(response.finish_first);
                $('#finish_first').html(finish_first_result);
                $('#finish_first').show();

            } else {
                $('#finish_first_title').html('');
                $('#finish_first').hide();
                $('#finish_first').html('');
                $('#finish_first').removeAttr('name');
            }

            if(response.finish_second != undefined){
                // $('#fifth_row').show();
                $('#finish_second_title').html(response.finish_second);
                var finish_second_result = "<option value=''></option>";
                for(var i = 0; i < response.finish_second_result.length; i++){
                    finish_second_result += "<option value="+ response.finish_second_result[i]['id'] +">"+ response.finish_second_result[i]['name'] +"</option>";
                }
                $('#finish_second').html(finish_second_result);
                $('#finish_second').show();

            } else {
                $('#finish_second_title').html('');
                $('#finish_second').hide();
                $('#finish_second').html('');
                $('#finish_second').removeAttr('name');
            }

            if(response.finish_third != undefined){
                $('#finish_third_title').html(response.finish_third);
                $('#finish_third').show();
            } else {
                $('#finish_third_title').html('');
                $('#finish_third').hide();
                $('#finish_third').removeAttr('name');
            }

            if(response.finish_fourth != undefined){
                var finish_fourth_result = "<option value=''></option>";
                for(var i = 0; i < response.finish_fourth_result.length; i++){
                    finish_fourth_result += "<option value="+ response.finish_fourth_result[i]['id'] +">"+ response.finish_fourth_result[i]['name'] +"</option>";
                }
                $('#finish_fourth_title').html(response.finish_fourth);
                $('#finish_fourth').html(finish_fourth_result);
                $('#finish_fourth').show();
            } else {
                $('#finish_fourth_title').html('');
                $('#finish_fourth').hide();
                $('#finish_fourth').html('');
                $('#finish_fourth').removeAttr('name');
            }

            if(response.finish_fifth != undefined){
                // $('#fourth_row').show();
                $('#finish_fifth').show();
                $('#finish_fifth_title').html(response.finish_fifth);
            } else {
                $('#finish_fifth_title').html('');
                $('#finish_fifth').hide();
                $('#finish_fifth').html('');
                $('#finish_fifth').removeAttr('name');
            }

            if(response.finish_sixth != undefined){
                // $('#fifth_row').show();
                $('#finish_sixth').show();
                $('#finish_sixth_title').html(response.finish_sixth);
            } else {
                $('#finish_sixth_title').html('');
                $('#finish_sixth').hide();
                $('#finish_sixth').html('');
                $('#finish_sixth').removeAttr('name');
            }

            if(response.finish_first == undefined && response.finish_fifth == undefined ){
                // $('#fourth_row').hide();
            }

            if(response.finish_second == undefined && response.finish_sixth == undefined ){
                // $('#fifth_row').hide();
            }

            //// Hardware Port
            if(response.hardware_first_title != undefined){
                $('#hardware_first_title').html(response.hardware_first_title);
                var hardware_first_result = "<option value=''></option>";
                if(response.hardware_first != undefined){
                    for(var i = 0; i < response.hardware_first.length; i++){
                        hardware_first_result += "<option value="+ response.hardware_first[i]['id'] +">"+ response.hardware_first[i]['name'] +"</option>";
                    }
                    $('#hardware_first').html(hardware_first_result);
                    $('#hardware_first').show();
                }
            } else {
                $('#hardware_first_title').html('');
                $('#hardware_first').html('');
                $('#hardware_first').hide();

            }

            if(response.hardware_second_title != undefined){
                $('#hardware_second_title').html(response.hardware_second_title);
                var hardware_second_result = "<option value=''></option>";
                if(response.hard_second != undefined){
                    for(var i = 0; i < response.hardware_second.length; i++){
                        hardware_second_result += "<option value="+ response.hardware_second[i]['id'] +">"+ response.hardware_second[i]['name'] +"</option>";
                    }
                    $('#hardware_second').html(hardware_second_result);
                }
                $('#hardware_second').show();
            } else {
                $('#hardware_second_title').html('');
                $('#hardware_second').html('');
                $('#hardware_second').hide();
            }

            if(response.hardware_third_title != undefined){
                $('#hardware_third_title').html(response.hardware_third_title);
                if(response.hard_third != undefined){
                    var hardware_third_result = "<option value=''></option>";
                    for(var i = 0; i < response.hardware_third.length; i++){
                        hardware_third_result += "<option value="+ response.hardware_third[i]['id'] +">"+ response.hardware_third[i]['name'] +"</option>";
                    }
                    $('#hardware_third').html(hardware_third_result);
                }
                $('#hardware_third').show();
            } else {
                $('#hardware_third_title').html('');
                $('#hardware_third').html('');
                $('#hardware_third').hide();
            }

            if(response.hardware_fourth_title != undefined){
                $('#hardware_fourth_title').html(response.hardware_fourth_title);
                if(response.hard_fourth != undefined){
                    var hardware_fourth_result = "<option value=''></option>";
                    for(var i = 0; i < response.hardware_fourth.length; i++){
                        hardware_fourth_result += "<option value="+ response.hardware_fourth[i]['id'] +">"+ response.hardware_fourth[i]['name'] +"</option>";
                    }
                    $('#hardware_fourth').html(hardware_fourth_result);
                }
                $('#hardware_fourth').show();
            } else {
                $('#hardware_fourth_title').html('');
                $('#hardware_fourth').html('');
                $('#hardware_fourth').hide();
            }

            if(response.hardware_fifth_title != undefined){
                $('#hardware_fifth_title').html(response.hardware_fifth);
                if(response.hard_fifth != undefined){
                    var hardware_fifth_result = "<option value=''></option>";
                    for(var i = 0; i < response.hardware_fifth.length; i++){
                        hardware_fifth_result += "<option value="+ response.hardware_fifth[i]['id'] +">"+ response.hardware_fifth[i]['name'] +"</option>";
                    }
                    $('#hardware_fifth').html(hardware_fifth_result);
                }
                $('#hardware_fifth').show();
            } else {
                $('#hardware_fifth_title').html('');
                $('#hardware_fifth').html('');
                $('#hardware_fifth').hide();
            }

            //// Dimension Port
            if(response.dimension_first != undefined){
                $('#dimension_first_title').html(response.dimension_first);
                $('#dimension_first').show();
            } else {
                $('#dimension_first_title').html('');
                $('#dimension_first').hide();
                $('#dimension_first').removeAttr('name');
            }

            if(response.dimension_second != undefined){
                $('#dimension_second_title').html(response.dimension_second);
                $('#dimension_second').show();
            } else {
                $('#dimension_second_title').html('');
                $('#dimension_second').hide();
                $('#dimension_second').removeAttr('name');
            }

            if(response.dimension_third != undefined){
                $('#dimension_third_title').html(response.dimension_third);
                $('#dimension_third').show();
            } else {
                $('#dimension_third_title').html('');
                $('#dimension_third').hide();
                $('#dimension_third').removeAttr('name');
            }

            if(response.dimension_fourth != undefined){
                $('#dimension_fourth_title').html(response.dimension_fourth);
                $('#dimension_fourth').show();
            } else {
                $('#dimension_fourth_title').html('');
                $('#dimension_fourth').hide();
                $('#dimension_fourth').removeAttr('name');
            }

            if(response.dimension_fifth != undefined){
                $('#dimension_fifth_title').html(response.dimension_fifth);
                $('#dimension_fifth').show();
            } else {
                $('#dimension_fifth_title').html('');
                $('#dimension_fifth').hide();
                $('#dimension_fifth').removeAttr('name');
            }
        }

        function onChangeDoorCategory(){
            $.ajax({
                type : 'POST',
                url  : "{{ route('onGetDoorCategory') }}",
                data : {
                    _token : "{{ csrf_token() }}",
                    door : $('#door_category').val()
                },
                success:function(response){
                    console.log(response);

                    switch(response.prefix){
                        case '1' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                        case '2' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                        case '3' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                        case '4' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                        case '5' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                        case '6' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                        case '7' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                        case '8' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                        case '9' :
                            onGetFixedResponse(response);
                            onGetResponse(response);
                            break;
                    }
                }
            })
        }

        function onCalculation(){
            var AD;
        }

    </script>
@endsection('content')
