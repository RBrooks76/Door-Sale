@extends('Form.Layout.index')
@section('content')

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <div id="kt_header_mobile" class="header-mobile">
                <!--begin::Logo-->
                <a href="index.html">
                    <img alt="Logo" src="image/logo/logo.png" class="max-h-30px" />
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
                        <a href="/" class="mr-20">
                            <img alt="Logo" src="image/logo/logo.png" class="logo-default max-h-75px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Left-->
                </div>
                <!--end::Container-->
            </div>
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
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">Serial Number :    <b>{{$SerialNumber}}</b></h5>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    {{-- <form method ="POST" action="{{ route('onOrderForm') }}"> --}}
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-custom example example-compact">
                                    <div class="card-header">
                                        <h3 class="card-title">Painted Door - Purchase Order</h3>
                                    </div>
                                    <form method ="POST" action="{{ route('onPaintedDoorFirstStep') }}">
                                        @csrf
                                        <div class="row customer-info margin-left-0 margin-right-0">
                                            <div class="col-lg-12">
                                                <div class="card card-custom example example-compact">
                                                    @if($errors->has('ordered_date') || $errors->has('required_date') || $errors->has('customer') || $errors->has('delivery_address') || $errors->has('delivery_state') || $errors->has('mobile') || $errors->has('job') || $errors->has('company'))
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
                                                                        <input type="text" class="form-control" id="kt_datepicker_1" readonly="readonly" placeholder="Select date" name="required_date">
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
                                                                <label class="col-6 col-form-label">Customer Name</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text" id="customer" name="customer">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label">Company Name</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text" id="company" name="company">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label">Delivery Address</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text" id="delivery_address" name="delivery_address">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label">Delivery State</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text" id="delivery_state" name="delivery_state">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label">Job Ref</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text" id="job" name="job">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label class="col-6 col-form-label">Mobile</label>
                                                                <div class="col-10">
                                                                    <input class="form-control" type="text" id="mobile" name="mobile">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="order-submit-button">
                                                        <button type="button" class="btn btn-primary mr-2" onclick="onSaveTitle()">Save</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-lg-12 my-3 flex customer-info">
                                        <div class="col-lg-6">
                                            <table class="col-lg-12 table">
                                                <thead class="">

                                                </thead>
                                                <tbody class="table-body">
                                                    <tr>
                                                        <td width="200" rowspan="4">Extra Paint Details</td>
                                                        <td width="250">Paint Manufacturer</td>
                                                        <td width="">
                                                            <input type="text"class="table-input" name="paint_manu" id="paint_manu">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="">Paint Colour</td>
                                                        <td width="">
                                                            <input type="text"class="table-input" name="extra_paint" id="paint_colour" onchange="">
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
                                                        <td width="">Extra Paint (Litres)</td>
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
                                                        <td id="doors_amount"></td>
                                                        <td id="doors_gst"></td>
                                                        <td id="doors_total"></td>
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
                                    <div class="col-lg-12 my-3 flex flex-column" style="display: table-cell">
                                        <table class="col-lg-12 table" id="table">
                                            <thead class="">
                                                <tr class="top-header">
                                                    <th colspan="2" rowspan="2" width="50">#</th>
                                                    <th colspan="4" rowspan="2">Finishes</th>
                                                    <th colspan="2" rowspan="2">Hardware</th>
                                                    <th colspan="2" rowspan="2">Dimensions</th>
                                                    <th  width="">Hinge Position </th>
                                                    <th rowspan="2" width="100">Status</th>
                                                    <th rowspan="2">Comment</th>
                                                    <th rowspan="2">Action</th>
                                                </tr>
                                                <tr>
                                                    <th>Drawer Height</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="first_row">
                                                    <td rowspan="5" width="50">
                                                        <span id="form_count">1</span>
                                                    </td>
                                                    <td rowspan="5" width="150">
                                                        <select class="form-control form-control-solid" name="door_category" id="door_category" onchange="onChangeDoorCategory('')">
                                                            <option value=""></option>
                                                            @foreach ($doorstyle as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td width="100">
                                                        <span>style</span>
                                                    </td>
                                                    <td width="150">
                                                        <select class="form-control form-control-solid" name="finish_style" id="finish_style" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td width="100">
                                                        <span id="finish_material_title"></span>
                                                    </td>
                                                    <td width="150">
                                                        <select class="form-control form-control-solid" name="finish_material" id="finish_material" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td width="100">
                                                        <span id="hardware_first_title"></span>
                                                    </td>
                                                    <td width="150">
                                                        <select class="form-control form-control-solid" name="hardward_first" id="hardware_first" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td width="100">
                                                        <span id="dimension_first_title"></span>
                                                    </td>
                                                    <td width="100">
                                                        <input type="text" class="table-input" name="dimension_first" id="dimension_first" onchange="onCalculation('')">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="table-input" name="" id="drawer_height_one" onchange="onCalculation('')">
                                                    </td>
                                                    <td rowspan="4" id="status_amount">
                                                        <input type="text" class="table-input" name="" id="status_amount_input" onchange="onCalculation('')">
                                                    </td>
                                                    <td rowspan="5">
                                                        <textarea rows="10" class="table-input" name="comment" id="comment"></textarea>
                                                    </td>
                                                    <td rowspan="5">
                                                        <button type="button" class="btn btn-primary" onclick="onSaveOrder('')">Save</button>
                                                    </td>
                                                </tr>
                                                <tr id="second_row">
                                                    <td>
                                                        <span>colour</span>
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="finish_colour" id="finish_colour" onchange="onCalculation('')">
                                                    </td>
                                                    <td>
                                                        <span id="finish_third_title"></span>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-solid" name="finish_third" id="finish_third" onchange="onCalculation('')">
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
                                                        <select class="form-control form-control-solid" name="hardware_second" id="hardware_second" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <span id="dimension_second_title"></span>
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="dimension_second" id="dimension_second" onchange="onCalculation('')">
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="" id="drawer_height_two" onchange="onCalculation('')">
                                                    </td>
                                                </tr>
                                                <tr id="third_row">
                                                    <td>
                                                        <span>Finish</span>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-solid" name="finish_finish" id="finish_finish" onchange="onCalculation('')">
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
                                                        <select class="form-control form-control-solid" name="finish_fourth" id="finish_fourth" onchange="onCalculation('')">
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
                                                        <select class="form-control form-control-solid" name="hardware_third" id="hardware_third" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <span id="dimension_third_title"></span>
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="dimension_third" id="dimension_third" onchange="onCalculation('')">
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="" id="drawer_height_three" onchange="onCalculation('')">
                                                    </td>
                                                </tr>
                                                <tr id="fourth_row">
                                                    <td>
                                                        <span id="finish_first_title"></span>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-solid" name="finish_first" id="finish_first" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <span id="finish_fifth_title"></span>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-solid" name="finish_fifth" id="finish_fifth" onchange="onCalculation('')">
                                                            <option value=""></option>
                                                            <option value="1">True</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <span id="hardware_fourth_title"></span>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-solid" name="hardware_fourth" id="hardware_fourth" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <span id="dimension_fourth_title"></span>
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="dimension_fourth" id="dimension_fourth" onchange="onCalculation('')">
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="" id="drawer_height_four" onchange="onCalculation('')">
                                                    </td>
                                                </tr>
                                                <tr id="fifth_row">
                                                    <td>
                                                        <span id="finish_second_title"></span>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-solid" name="finish_second" id="finish_second" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <span id="finish_sixth_title"></span>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-solid" name="finish_sixth" id="finish_sixth" onchange="onChangeFinishSix('')">
                                                            <option value=""></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <span id="hardware_fifth_title"></span>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control-solid" name="hardware_fifth" id="hardware_fifth" onchange="onCalculation('')">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <span id="dimension_fifth_title"></span>
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="dimension_fifth" id="dimension_fifth" onchange="onCalculation('')">
                                                    </td>
                                                    <td>
                                                        <input type="text"class="table-input" name="" id="drawer_height_five" onchange="onCalculation('')">
                                                    </td>
                                                    <td  id="status_total">
                                                        <input type="text"class="table-input" name="" onchange="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-right btn-add-more-order">
                                        <button type="button" class="btn btn-primary mr-2" onclick="onAddMoreOrder()">Add More</button>
                                        <a href="{{route('toHome')}}" class="btn mr-2 order-cancel-btn">Cancel</a>
                                    </div>
                                    {{-- <div class="order-submit-button">
                                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                                        <button type="button" class="btn btn-primary mr-2" onclick="onAddMoreOrder()">Add More</button>
                                        <a href="{{route('toHome')}}" class="btn mr-2 order-cancel-btn">Cancel</a>
                                    </div> --}}
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
            onHide('');
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

        function onHide(index){
            $('#finish_material' + index).hide();

            $('#finish_first' + index).hide();
            $('#finish_second' + index).hide();
            $('#finish_third' + index).hide();
            $('#finish_fourth' + index).hide();
            $('#finish_fifth' + index).hide();
            $('#finish_sixth' + index).hide();

            $('#fourth_row' + index).hide();
            $('#fifth_row' + index).hide();

            $('#hardware_first' + index).hide();
            $('#hardware_second' + index).hide();
            $('#hardware_third' + index).hide();
            $('#hardware_fourth' + index).hide();
            $('#hardware_fifth' + index).hide();

            $('#dimension_first' + index).hide();
            $('#dimension_second' + index).hide();
            $('#dimension_third' + index).hide();
            $('#dimension_fourth' + index).hide();
            $('#dimension_fifth' + index).hide();

            $('#drawer_height_one' + index).hide();
            $('#drawer_height_two' + index).hide();
            $('#drawer_height_three' + index).hide();
            $('#drawer_height_four' + index).hide();
            $('#drawer_height_five' + index).hide();
        }

        function onGetFixedResponse(response, index){
            if(response.finish_style != undefined){
                var finish_style = "<option value=''></option>";
                for(var i = 0; i < response.finish_style.length; i++){
                    finish_style += "<option value="+ response.finish_style[i]['id'] +">"+ response.finish_style[i]['style_name'] +"</option>";
                }
                $('#finish_style' + index).html(finish_style);
            }

            if(response.finish_material != undefined){
                if(response.finish_material_title != undefined){
                    $('#finish_material_title' + index).html(response.finish_material_title);
                } else {
                    $('#finish_material_title' + index).html('Material');
                }
                var finish_material = "<option value=''></option>";
                for(var i = 0; i < response.finish_material.length; i++){
                    finish_material += "<option value="+ response.finish_material[i]['id'] +">"+ response.finish_material[i]['name'] +"</option>";
                }
                $('#finish_material' + index).html(finish_material);
                $('#finish_material' + index).show();
            } else {
                $('#finish_material' + index).hide();
                $('#finish_material_title' + index).html('');
                $('#finish_material' + index).removeAttr(name);
            }
        }

        function onGetResponse(response, index){
            //// Finish Part
            if(response.finish_first != undefined){
                $('#fourth_row' + index).show();

                var finish_first_result = "<option value=''></option>";
                for(var i = 0; i < response.finish_first_result.length; i++){
                    finish_first_result += "<option value="+ response.finish_first_result[i]['id'] +">"+ response.finish_first_result[i]['name'] +"</option>";
                }
                $('#finish_first_title' + index).html(response.finish_first);
                $('#finish_first' + index).html(finish_first_result);
                $('#finish_first' + index).show();
                $('#finish_first' + index).attr('name', 'finish_first');
                $('#fourth_row' + index).show();
            } else {
                $('#finish_first_title' + index).html('');
                $('#finish_first' + index).hide();
                $('#finish_first' + index).html('');
                $('#finish_first' + index).removeAttr('name');
            }

            if(response.finish_second != undefined){
                $('#fifth_row' + index).show();
                $('#finish_second_title' + index).html(response.finish_second);
                var finish_second_result = "<option value=''></option>";
                for(var i = 0; i < response.finish_second_result.length; i++){
                    finish_second_result += "<option value="+ response.finish_second_result[i]['id'] +">"+ response.finish_second_result[i]['name'] +"</option>";
                }
                $('#finish_second' + index).html(finish_second_result);
                $('#finish_second' + index).show();
                $('#finish_second' + index).attr('name', 'finish_second');
                $('#fifth_row' + index).show();
            } else {
                $('#finish_second_title' + index).html('');
                $('#finish_second' + index).hide();
                $('#finish_second' + index).html('');
                $('#finish_second' + index).removeAttr('name');
            }

            if(response.finish_third != undefined){
                $('#finish_third_title' + index).html(response.finish_third);
                $('#finish_third' + index).show();
                $('#finish_third' + index).attr('name', 'finish_third');
            } else {
                $('#finish_third_title' + index).html('');
                $('#finish_third' + index).hide();
                $('#finish_third' + index).removeAttr('name');
            }

            if(response.finish_fourth != undefined){
                var finish_fourth_result = "<option value=''></option>";
                for(var i = 0; i < response.finish_fourth_result.length; i++){
                    finish_fourth_result += "<option value="+ response.finish_fourth_result[i]['id'] +">"+ response.finish_fourth_result[i]['name'] +"</option>";
                }
                $('#finish_fourth_title' + index).html(response.finish_fourth);
                $('#finish_fourth' + index).html(finish_fourth_result);
                $('#finish_fourth' + index).show();
                $('#finish_fourth' + index).attr('name', 'finish_fourth');
            } else {
                $('#finish_fourth_title' + index).html('');
                $('#finish_fourth' + index).hide();
                $('#finish_fourth' + index).html('');
                $('#finish_fourth' + index).removeAttr('name');
            }

            if(response.finish_fifth != undefined){
                $('#fourth_row' + index).show();
                $('#finish_fifth' + index).show();
                $('#finish_fifth_title' + index).html(response.finish_fifth);
                $('#finish_fifth' + index).attr('name', 'finish_fifth');
                $('#fourth_row' + index).show();
            } else {
                $('#finish_fifth_title' + index).html('');
                $('#finish_fifth' + index).hide();
                $('#finish_fifth' + index).removeAttr('name');
            }

            if(response.finish_sixth != undefined){
                $('#fifth_row' + index).show();
                $('#finish_sixth' + index).show();
                $('#finish_sixth_title' + index).html(response.finish_sixth);
                $('#finish_sixth' + index).attr('name', 'finish_sixth');
                $('#fifth_row' + index).show();
            } else {
                $('#finish_sixth_title' + index).html('');
                $('#finish_sixth' + index).hide();
                $('#finish_sixth' + index).removeAttr('name');
            }

            if(response.finish_first == undefined && response.finish_fifth == undefined ){
                $('#fourth_row' + index).hide();
            }

            if(response.finish_second == undefined && response.finish_sixth == undefined ){
                $('#fifth_row' + index).hide();
            }

            //// Hardware Port
            if(response.hardware_first_title != undefined){
                $('#hardware_first_title' + index).html(response.hardware_first_title);
                var hardware_first_result = "<option value=''></option>";
                if(response.hardware_first != undefined){
                    for(var i = 0; i < response.hardware_first.length; i++){
                        hardware_first_result += "<option value="+ response.hardware_first[i]['id'] +">"+ response.hardware_first[i]['name'] +"</option>";
                    }
                    $('#hardware_first' + index).html(hardware_first_result);
                    $('#hardware_first' + index).show();
                }

                $('#hardware_first' + index).attr('name', 'hardware_first');
            } else {
                $('#hardware_first_title' + index).html('');
                $('#hardware_first' + index).html('');
                $('#hardware_first' + index).hide();
                $('#hardware_first' + index).removeAttr('name');
            }

            if(response.hardware_second_title != undefined){
                $('#hardware_second_title' + index).html(response.hardware_second_title);
                var hardware_second_result = "<option value=''></option>";
                if(response.hardware_second != undefined){
                    for(var i = 0; i < response.hardware_second.length; i++){
                        hardware_second_result += "<option value="+ response.hardware_second[i]['id'] +">"+ response.hardware_second[i]['name'] +"</option>";
                    }
                }
                $('#hardware_second' + index).html(hardware_second_result);
                $('#hardware_second' + index).show();
                $('#hardware_second' + index).attr('name', 'hardware_second');
            } else {
                $('#hardware_second_title' + index).html('');
                $('#hardware_second' + index).html('');
                $('#hardware_second' + index).hide();
                $('#hardware_second' + index).removeAttr('name');
            }

            if(response.hardware_third_title != undefined){
                $('#hardware_third_title' + index).html(response.hardware_third_title);
                if(response.hardware_third != undefined){
                    var hardware_third_result = "<option value=''></option>";
                    for(var i = 0; i < response.hardware_third.length; i++){
                        hardware_third_result += "<option value="+ response.hardware_third[i]['id'] +">"+ response.hardware_third[i]['name'] +"</option>";
                    }
                }
                $('#hardware_third' + index).html(hardware_third_result);
                $('#hardware_third' + index).show();
                $('#hardware_third' + index).attr('name', 'hardware_third');
            } else {
                $('#hardware_third_title' + index).html('');
                $('#hardware_third' + index).html('');
                $('#hardware_third' + index).hide();
                $('#hardware_third' + index).removeAttr('name');
            }

            if(response.hardware_fourth_title != undefined){
                $('#hardware_fourth_title' + index).html(response.hardware_fourth_title);
                if(response.hardware_fourth != undefined){
                    var hardware_fourth_result = "<option value=''></option>";
                    for(var i = 0; i < response.hardware_fourth.length; i++){
                        hardware_fourth_result += "<option value="+ response.hardware_fourth[i]['id'] +">"+ response.hardware_fourth[i]['name'] +"</option>";
                    }
                }
                $('#hardware_fourth' + index).html(hardware_fourth_result);
                $('#hardware_fourth' + index).show();
                $('#hardware_fourth' + index).attr('name', 'hardware_fourth');
            } else {
                $('#hardware_fourth_title' + index).html('');
                $('#hardware_fourth' + index).html('');
                $('#hardware_fourth' + index).hide();
                $('#hardware_fourth' + index).removeAttr('name');
            }

            if(response.hardware_fifth_title != undefined){
                $('#hardware_fifth_title' + index).html(response.hardware_fifth);
                if(response.hardware_fifth != undefined){
                    var hardware_fifth_result = "<option value=''></option>";
                    for(var i = 0; i < response.hardware_fifth.length; i++){
                        hardware_fifth_result += "<option value="+ response.hardware_fifth[i]['id'] +">"+ response.hardware_fifth[i]['name'] +"</option>";
                    }

                }
                $('#hardware_fifth' + index).show();
                $('#hardware_fifth' + index).html(hardware_fifth_result);
                $('#hardware_fifth' + index).attr('name', 'hardware_fifth');
            } else {
                $('#hardware_fifth_title' + index).html('');
                $('#hardware_fifth' + index).html('');
                $('#hardware_fifth' + index).hide();
                $('#hardware_fifth' + index).removeAttr('name');
            }

            //// Dimension Port
            if(response.dimension_first != undefined){
                $('#dimension_first_title' + index).html(response.dimension_first);
                $('#dimension_first' + index).show();
                $('#dimension_first' + index).attr('name', 'dimension_first');
            } else {
                $('#dimension_first_title' + index).html('');
                $('#dimension_first' + index).hide();
                $('#dimension_first' + index).removeAttr('name');
            }

            if(response.dimension_second != undefined){
                $('#dimension_second_title' + index).html(response.dimension_second);
                $('#dimension_second' + index).show();
                $('#dimension_second' + index).attr('name', 'dimension_second');
            } else {
                $('#dimension_second_title' + index).html('');
                $('#dimension_second' + index).hide();
                $('#dimension_second' + index).removeAttr('name');
            }

            if(response.dimension_third != undefined){
                $('#dimension_third_title' + index).html(response.dimension_third);
                $('#dimension_third' + index).show();
                $('#dimension_third' + index).attr('name', 'dimension_third');
            } else {
                $('#dimension_third_title' + index).html('');
                $('#dimension_third' + index).hide();
                $('#dimension_third' + index).removeAttr('name');
            }
            if(response.dimension_fourth != undefined){
                $('#dimension_fourth_title' + index).html(response.dimension_fourth);
                $('#dimension_fourth' + index).show();
                $('#dimension_fourth' + index).attr('name', 'dimension_fourth');
            } else {
                $('#dimension_fourth_title' + index).html('');
                $('#dimension_fourth' + index).hide();
                $('#dimension_fourth' + index).removeAttr('name');
            }

            if(response.dimension_fifth != undefined){
                $('#dimension_fifth_title' + index).html(response.dimension_fifth);
                $('#dimension_fifth' + index).show();
                $('#dimension_fifth' + index).attr('name', 'dimension_fifth');
            } else {
                $('#dimension_fifth_title' + index).html('');
                $('#dimension_fifth' + index).hide();
                $('#dimension_fifth' + index).removeAttr('name');
            }

        }

        function onChangeDoorCategory(index){
            $.ajax({
                type : 'POST',
                url  : "{{ route('onGetDoorCategory') }}",
                data : {
                    _token : "{{ csrf_token() }}",
                    door : $('#door_category' + index).val()
                },
                success:function(response){
                    switch(response.prefix){
                        case '1' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                        case '2' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                        case '3' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                        case '4' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                        case '5' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                        case '6' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                        case '7' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                        case '8' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                        case '9' :
                            onGetFixedResponse(response, index);
                            onGetResponse(response, index);
                            break;
                    }
                }
            })
        }

        function onCalculation(index){
            var category = $('#door_category' + index).val();
            var style = $('#finish_style' + index).val();
            var finish = $('#finish_finish' + index).val();
            var material = $('#finish_material' + index).val();
            var finish_first    = $('#finish_first' + index).val();
            var finish_second   = $('#finish_second' + index).val();
            var finish_third    = $('#finish_third' + index).val();
            var finish_fourth   = $('#finish_fourth' + index).val();
            var finish_fifth    = $('#finish_fifth' + index).val();
            var finish_sixth    = $('#finish_sixth' + index).val();
            var hardware_first    = $('#hardware_first' + index).val();
            var hardware_second   = $('#hardware_second' + index).val();
            var hardware_third    = $('#hardware_third' + index).val();
            var hardware_fourth   = $('#hardware_fourth' + index).val();
            var hardware_fifth    = $('#hardware_fifth' + index).val();
            var dimension_first = $('#dimension_first' + index).val();
            var dimension_second = $('#dimension_second' + index).val();
            var dimension_third = $('#dimension_third' + index).val();
            var dimension_fourth = $('#dimension_fourth' + index).val();

            $.ajax({
                type : 'POST',
                url  : '{{ route('onCalculation') }}',
                data : {
                    _token      : '{{ csrf_token() }}',
                    category    : category,
                    style       : style,
                    finish      : finish,
                    material    : material,
                    finish_first    : finish_first,
                    finish_second   : finish_second,
                    finish_third    : finish_third,
                    finish_fourth   : finish_fourth,
                    finish_fifth    : finish_fifth,
                    finish_sixth    : finish_sixth,
                    hardware_first    : hardware_first,
                    hardware_second   : hardware_second,
                    hardware_third    : hardware_third,
                    hardware_fourth   : hardware_fourth,
                    hardware_fifth    : hardware_fifth,
                    dimension_first   : dimension_first,
                    dimension_second  : dimension_second,
                    dimension_third   : dimension_third,
                    dimension_fourth   : dimension_fourth,
                },
                success:function(response){
                    var amount = parseFloat(response).toFixed(2);
                    var gst = parseFloat(amount / 10).toFixed(2);
                    var total = parseFloat(amount) + parseFloat(gst);

                    $('#status_amount_input' + index).val(amount);

                    // $('#doors_amount').html(amount);
                    // $('#doors_gst').html(gst);
                    // $('#doors_total').html(total);

                }
            })
        }

        function onChangeFinishSix(index){
            var count = $('#finish_sixth' + index).val();
            var category = $('#door_category' + index).val();
            $.ajax({
                type : 'POST',
                url  : "{{ route('onGetHardwareArray') }}",
                data : {
                    _token : "{{ csrf_token() }}",
                    category : category
                },
                success:function(response){
                    var html = "<option value=''></option>";
                    for(var i = 0; i < response.length; i++){
                        html += "<option value="+ response[i]['id'] +">"+ response[i]['name'] +"</option>";
                    }
                    switch(count){
                        case '1' :
                            $('#hardware_second_title' + index).html('Runner 1');
                            $('#hardware_second' + index).html(html);
                            $('#hardware_second' + index).show();

                            $('#hardware_third_title' + index).html('');
                            $('#hardware_third' + index).hide();
                            $('#hardware_fourth_title' + index).html('');
                            $('#hardware_fourth' + index).hide();
                            $('#hardware_fifth_title' + index).html('');
                            $('#hardware_fifth' + index).hide();

                            $('#drawer_height_one' + index).show();
                            $('#drawer_height_two' + index).hide();
                            $('#drawer_height_three' + index).hide();
                            $('#drawer_height_four' + index).hide();

                            onCalculation(index);
                            break;
                        case '2' :
                            $('#hardware_second_title' + index).html('Runner 1');
                            $('#hardware_second' + index).html(html);
                            $('#hardware_second' + index).show();

                            $('#hardware_third_title' + index).html('Runner 2');
                            $('#hardware_third' + index).html(html);
                            $('#hardware_third' + index).show();

                            $('#hardware_fourth_title' + index).html('');
                            $('#hardware_fourth' + index).hide();
                            $('#hardware_fifth_title' + index).html('');
                            $('#hardware_fifth' + index).hide();

                            $('#drawer_height_one' + index).show();
                            $('#drawer_height_two' + index).show();
                            $('#drawer_height_three' + index).hide();
                            $('#drawer_height_four' + index).hide();

                            onCalculation(index);
                            break;
                        case '3' :
                            $('#hardware_second_title' + index).html('Runner 1');
                            $('#hardware_second' + index).html(html);
                            $('#hardware_second' + index).show();

                            $('#hardware_third_title' + index).html('Runner 2');
                            $('#hardware_third' + index).html(html);
                            $('#hardware_third' + index).show();

                            $('#hardware_fourth_title' + index).html('Runner 3');
                            $('#hardware_fourth' + index).html(html);
                            $('#hardware_fourth' + index).show();

                            $('#hardware_fifth_title' + index).html('');
                            $('#hardware_fifth' + index).hide();

                            $('#drawer_height_one' + index).show();
                            $('#drawer_height_two' + index).show();
                            $('#drawer_height_three' + index).show();
                            $('#drawer_height_four' + index).hide();

                            onCalculation(index);
                            break;
                        case '4' :
                            $('#hardware_second_title' + index).html('Runner 1');
                            $('#hardware_second' + index).html(html);
                            $('#hardware_second' + index).show();

                            $('#hardware_third_title' + index).html('Runner 2');
                            $('#hardware_third' + index).html(html);
                            $('#hardware_third' + index).show();

                            $('#hardware_fourth_title' + index).html('Runner 3');
                            $('#hardware_fourth' + index).html(html);
                            $('#hardware_fourth' + index).show();

                            $('#hardware_fifth_title' + index).html('Runner 4');
                            $('#hardware_fifth' + index).html(html);
                            $('#hardware_fifth' + index).show();

                            $('#drawer_height_one' + index).show();
                            $('#drawer_height_two' + index).show();
                            $('#drawer_height_three' + index).show();
                            $('#drawer_height_four' + index).show();

                            onCalculation(index);
                            break;
                    }
                }
            });
        }

        var more_cnt = 0;
        var number = 1;
        function onAddMoreOrder(){
            more_cnt++;
            number = 1 + more_cnt;
            var html = '';
            html += `<tbody style="border: 1px solid black; position: relative">
                        <tr id="first_row` + more_cnt + `">
                            <td rowspan="5" width="50">
                                <span id="form_count">` + number + `</span>
                            </td>
                            <td rowspan="5" width="150">
                                <select class="form-control form-control-solid" name="door_category" id="door_category` + more_cnt + `" onchange="onChangeDoorCategory(`+ more_cnt +`)">
                                    <option value=""></option>
                                    @foreach ($doorstyle as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td width="100">
                                <span>style</span>
                            </td>
                            <td width="150">
                                <select class="form-control form-control-solid" name="finish_style" id="finish_style` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td width="100">
                                <span id="finish_material_title` + more_cnt + `"></span>
                            </td>
                            <td width="150">
                                <select class="form-control form-control-solid" name="finish_material" id="finish_material` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td width="100">
                                <span id="hardware_first_title` + more_cnt + `"></span>
                            </td>
                            <td width="150">
                                <select class="form-control form-control-solid" name="hardward_first" id="hardware_first` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td width="100">
                                <span id="dimension_first_title` + more_cnt + `"></span>
                            </td>
                            <td width="100">
                                <input type="text" class="table-input" name="dimension_first" id="dimension_first` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text" class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text" class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td rowspan="4" id="status_amount` + more_cnt + `">
                                <input type="text" class="table-input" name="" id="status_amount_input` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td rowspan="5">
                                <textarea rows="10" class="table-input" name="comment" id="comment"></textarea>
                            </td>
                            <td rowspan="5">
                                <button type="button" class="btn btn-primary" onclick="onSaveOrder('` + more_cnt + `')">Save</button>
                            </td>
                        </tr>
                        <tr id="second_row` + more_cnt + `">
                            <td>
                                <span>colour</span>
                            </td>
                            <td>
                                <input type="text"class="table-input" name="finish_colour" id="finish_colour` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <span id="finish_third_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="finish_third" id="finish_third` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
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
                                <span id="hardware_second_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="hardware_second" id="hardware_second` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td>
                                <span id="dimension_second_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <input type="text"class="table-input" name="dimension_second" id="dimension_second` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text"class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text"class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                        </tr>
                        <tr id="third_row` + more_cnt + `">
                            <td>
                                <span>Finish</span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="finish_finish" id="finish_finish` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                                    <option value=""></option>
                                        @foreach ($finish as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                </select>
                            </td>
                            <td>
                                <span id="finish_fourth_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="finish_fourth" id="finish_fourth` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
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
                                <span id="hardware_third_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="hardware_third" id="hardware_third` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td>
                                <span id="dimension_third_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <input type="text"class="table-input" name="dimension_third" id="dimension_third` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text"class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text"class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                        </tr>
                        <tr id="fourth_row` + more_cnt + `">
                            <td>
                                <span id="finish_first_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="finish_first" id="finish_first` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td>
                                <span id="finish_fifth_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="finish_fifth" id="finish_fifth` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                                    <option value=""></option>
                                    <option value="1">True</option>
                                </select>
                            </td>
                            <td>
                                <span id="hardware_fourth_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="hardware_fourth" id="hardware_fourth` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td>
                                <span id="dimension_fourth_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <input type="text"class="table-input" name="dimension_fourth" id="dimension_fourth` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text"class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text"class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                        </tr>
                        <tr id="fifth_row` + more_cnt + `">
                            <td>
                                <span id="finish_second_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="finish_second" id="finish_second` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td>
                                <span id="finish_sixth_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="finish_sixth" id="finish_sixth` + more_cnt + `" onchange="onChangeFinishSix(` + more_cnt + `)">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                            <td>
                                <span id="hardware_fifth_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <select class="form-control form-control-solid" name="hardware_fifth" id="hardware_fifth` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">

                                </select>
                            </td>
                            <td>
                                <span id="dimension_fifth_title` + more_cnt + `"></span>
                            </td>
                            <td>
                                <input type="text"class="table-input" name="dimension_fifth" id="dimension_fifth` + more_cnt + `" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text"class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td>
                                <input type="text"class="table-input" name="" onchange="onCalculation(` + more_cnt + `)">
                            </td>
                            <td  id="status_total` + more_cnt + `">
                                <input type="text"class="table-input" name="" onchange="" id="status_total_input` + more_cnt + `">
                            </td>
                        </tr>
                    </tbody>`;
                $('#table').append(html);
                onHide(more_cnt);
                // onGetFixedResponse(response);
                // onGetResponse(response);
        }

        var amount = 0;
        function onSaveOrder(index){
            var category            = $('#door_category' + index).val();
            var style               = $('#finish_style' + index).val();
            var finish              = $('#finish_finish' + index).val();
            var colour              = $('#finish_colour' + index).val();
            var material            = $('#finish_material' + index).val();
            var finish_first        = $('#finish_first' + index).val();
            var finish_second       = $('#finish_second' + index).val();
            var finish_third        = $('#finish_third' + index).val();
            var finish_fourth       = $('#finish_fourth' + index).val();
            var finish_fifth        = $('#finish_fifth' + index).val();
            var finish_sixth        = $('#finish_sixth' + index).val();
            var hardware_first      = $('#hardware_first' + index).val();
            var hardware_second     = $('#hardware_second' + index).val();
            var hardware_third      = $('#hardware_third' + index).val();
            var hardware_fourth     = $('#hardware_fourth' + index).val();
            var hardware_fifth      = $('#hardware_fifth' + index).val();
            var dimension_first     = $('#dimension_first' + index).val();
            var dimension_second    = $('#dimension_second' + index).val();
            var dimension_third     = $('#dimension_third' + index).val();
            var dimension_fourth    = $('#dimension_fourth' + index).val();
            var comment             = $('#comment' + index).val();
            var status_amount_input = $('#status_amount_input' + index).val();
            $.ajax({
                type : 'POST',
                url  : '{{ route('onSaveOrder') }}',
                data : {
                    _token              : '{{ csrf_token() }}',
                    category            : category,
                    style               : style,
                    finish              : finish,
                    colour              : colour,
                    material            : material,
                    finish_first        : finish_first,
                    finish_second       : finish_second,
                    finish_third        : finish_third,
                    finish_fourth       : finish_fourth,
                    finish_fifth        : finish_fifth,
                    finish_sixth        : finish_sixth,
                    hardware_first      : hardware_first,
                    hardware_second     : hardware_second,
                    hardware_third      : hardware_third,
                    hardware_fourth     : hardware_fourth,
                    hardware_fifth      : hardware_fifth,
                    dimension_first     : dimension_first,
                    dimension_second    : dimension_second,
                    dimension_third     : dimension_third,
                    dimension_fourth    : dimension_fourth,
                    comment             : comment,
                    total_amount        : status_amount_input,
                },
                success:function(response){
                    if(more_cnt > 0){
                        for(var i = 0; i < more_cnt; i++){
                            i = (i == 0 ? '' : i);
                            amount += parseFloat($('#status_amount_input' + i).val());
                            console.log( parseFloat($('#status_amount_input' + i).val()));
                            console.log('amount : ' + amount);
                        }
                    } else {
                        amount += parseFloat($('#status_amount_input').val());
                    }


                    var gst = parseFloat(amount / 10).toFixed(2);
                    var total = parseFloat(amount) + parseFloat(gst);

                    $('#status_amount_input' + index).val(amount);

                    $('#doors_amount').html(amount);
                    $('#doors_gst').html(gst);
                    $('#doors_total').html(total);
                }
            })
        }

        var save_title = 0;
        function onSaveTitle(){
            save_title ++;
            console.log(save_title);
            var ordered_date    = $('#kt_datepicker_2').val();
            var required_date   = $('#kt_datepicker_1').val();
            var customer        = $('#customer').val();
            var company         = $('#company').val();
            var delivery_address= $('#delivery_address').val();
            var delivery_state  = $('#delivery_state').val();
            var job             = $('#job').val();
            var mobile          = $('#mobile').val();

            if(ordered_date == ''){
                $('#kt_datepicker_2').css('border-color', '#ab82fd');
            } else if(required_date == ''){
                $('#kt_datepicker_1').css('border-color', '#ab82fd');
            } else if(customer == ''){
                $('#customer').css('border-color', '#ab82fd');
            } else if(company == ''){
                $('#company').css('border-color', '#ab82fd');
            } else if(delivery_address == ''){
                $('#delivery_address').css('border-color', '#ab82fd');
            } else if(delivery_state == ''){
                $('#delivery_state').css('border-color', '#ab82fd');
            } else if(job == ''){
                $('#job').css('border-color', '#ab82fd');
            } else if(mobile == ''){
                $('#mobile').css('border-color', '#ab82fd');
            }else if(save_title == 1){
                $.ajax({
                    type : 'POST',
                    url  : "{{ route('onPaintedDoorFirstStep') }}",
                    data : {
                        _token : '{{ csrf_token()}}',
                        ordered_date      : ordered_date,
                        required_date   : required_date,
                        customer        : customer,
                        company         : company,
                        delivery_address: delivery_address,
                        delivery_state  : delivery_state,
                        job             : job,
                        mobile          : mobile
                    },
                    success:function(response){
                        console.log(response);

                    }
                })
            } else {
                alert('First you should enter the Serial Number.');
            }

        }

    </script>
@endsection('content')
