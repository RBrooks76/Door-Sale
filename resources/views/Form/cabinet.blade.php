@extends('Form.Layout.index')
@section('content')

<!--begin::Main-->
<div class="d-flex flex-column flex-root margin-top-50">
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
                                        <h3 class="card-title">Painted Door - Open Cabinets </h3>
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
                                    <div class="col-lg-12 my-3 flex flex-column">
                                        <div class="col-lg-12">
                                            <table class="col-lg-12 table">
                                                <thead class="">
                                                    <tr class="top-header">
                                                        <th rowspan="2" width="30">Line</th>
                                                        <th rowspan="2" width="250">Cabinet</th>
                                                        <th rowspan="2" width="50">Qty</th>
                                                        <th rowspan="2" width="50">Height (mm)</th>
                                                        <th rowspan="2" width="50">Width (mm)</th>
                                                        <th rowspan="2" width="50">Depth (mm)</th>
                                                        <th rowspan="2" width="50">Colour</th>
                                                        <th rowspan="2" width="">Size (mm)</th>
                                                        <th rowspan="2" width="140">Finish</th>
                                                        <th rowspan="2" width="100">Under Bench</th>
                                                        <th rowspan="2" width="70">Row #</th>
                                                        <th rowspan="2" width="70">Col #</th>
                                                        <th rowspan="2" width="50">A</th>
                                                        <th rowspan="2" width="50">B</th>
                                                        <th rowspan="2" width="50">C</th>
                                                        <th rowspan="2" width="">To Del</th>
                                                        <th rowspan="2" width="">To Del1</th>
                                                        <th rowspan="2" width="">Hinge Position</th>
                                                        <th rowspan="2" width="60">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_name" id="cabinet_name" onchange="onChangeCabinet()" value="3">
                                                                <option value=""></option>
                                                                @foreach ($cabinets as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_qty" id="cabinet_qty" value="10"  onchange="onChangeCabinet()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_height" id="cabinet_height"  value="20" onchange="onChangeCabinet()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_width" id="cabinet_width"  value="30" onchange="onChangeCabinet()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_depth" id="cabinet_depth"  value="40" onchange="onChangeCabinet()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_colour" id="cabinet_colour" onchange="onChangeCabinet()">
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_size" id="cabinet_size" onchange="onChangeCabinet()">
                                                                <option value=""></option>
                                                                @foreach ($material as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_finish" id="cabinet_finish" onchange="onChangeCabinet()">
                                                                <option value=""></option>
                                                                @foreach ($finish as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_underbench" id="cabinet_underbench" onchange="onChangeCabinet()">
                                                                <option value=""></option>
                                                                @php
                                                                    $row = [0, 1];
                                                                @endphp
                                                                @foreach ($row as $item)
                                                                    <option value="{{ $item }}">{{ $item == 0 ? "FALSE" : 'TRUE' }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_row" id="cabinet_row" onchange="onChangeCabinet()">
                                                                <option value=""></option>
                                                                @php
                                                                    $row = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                                                                @endphp
                                                                @foreach ($row as $item)
                                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_col" id="cabinet_col" onchange="onChangeCabinet()">
                                                                <option value=""></option>
                                                                @php
                                                                    $col = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                                                                @endphp
                                                                @foreach ($col as $item)
                                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_a" id="cabinet_a" onchange="onChangeCabinet()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_b" id="cabinet_b" onchange="onChangeCabinet()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_c" id="cabinet_c" onchange="onChangeCabinet()">
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_to_del" id="cabinet_to_del" onchange="onChangeCabinet()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = [0, 1, 2];
                                                                    $del_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $del_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_to_del1" id="cabinet_to_del1" onchange="onChangeCabinet()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = ['Adjust', 'Fixed'];
                                                                    $del1_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $del1_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_hinge_position" id="cabinet_hinge_position" onchange="onChangeCabinet()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = ['Left', 'Fixed'];
                                                                    $hinge_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $hinge_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span class="table-input" name="cabinet_amount" id="cabinet_amount"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_name1" id="cabinet_name1" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @foreach ($cabinets as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_qty1" id="cabinet_qty1" value="10"  onchange="onChangeCabinet1()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_height1" id="cabinet_height1"  value="20" onchange="onChangeCabinet1()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_width1" id="cabinet_width1"  value="30" onchange="onChangeCabinet1()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_depth1" id="cabinet_depth1"  value="40" onchange="onChangeCabinet1()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_colour1" id="cabinet_colour1" onchange="onChangeCabinet1()">
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_size1" id="cabinet_size1" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @foreach ($material as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['door_material'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_finish1" id="cabinet_finish1" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @foreach ($finish as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_underbench1" id="cabinet_underbench1" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @php
                                                                    $row = [0, 1];
                                                                @endphp
                                                                @foreach ($row as $item)
                                                                    <option value="{{ $item }}">{{ $item == 0 ? "FALSE" : 'TRUE' }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_row1" id="cabinet_row1" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @php
                                                                    $row = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                                                                @endphp
                                                                @foreach ($row as $item)
                                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_col1" id="cabinet_col1" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @php
                                                                    $col = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                                                                @endphp
                                                                @foreach ($col as $item)
                                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_a1" id="cabinet_a1" onchange="onChangeCabinet1()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_b1" id="cabinet_b1" onchange="onChangeCabinet1()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_c1" id="cabinet_c1" onchange="onChangeCabinet1()">
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_to_del1" id="cabinet_to_del1" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = [0, 1, 2];
                                                                    $del_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $del_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_to_del11" id="cabinet_to_del11" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = ['Adjust', 'Fixed'];
                                                                    $del1_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $del1_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_hinge_position1" id="cabinet_hinge_position1" onchange="onChangeCabinet1()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = ['Left', 'Fixed'];
                                                                    $hinge_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $hinge_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span class="table-input" name="cabinet_amount1" id="cabinet_amount1"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_name2" id="cabinet_name2" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @foreach ($cabinets as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_qty2" id="cabinet_qty2" value="10"  onchange="onChangeCabinet2()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_height2" id="cabinet_height2"  value="20" onchange="onChangeCabinet2()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_width2" id="cabinet_width2"  value="30" onchange="onChangeCabinet2()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_depth2" id="cabinet_depth2"  value="40" onchange="onChangeCabinet2()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_colour2" id="cabinet_colour2" onchange="onChangeCabinet2()">
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_size2" id="cabinet_size2" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @foreach ($material as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['door_material'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_finish2" id="cabinet_finish2" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @foreach ($finish as $item)
                                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_underbench2" id="cabinet_underbench2" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @php
                                                                    $row = [0, 1];
                                                                @endphp
                                                                @foreach ($row as $item)
                                                                    <option value="{{ $item }}">{{ $item == 0 ? "FALSE" : 'TRUE' }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_row2" id="cabinet_row2" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @php
                                                                    $row = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                                                                @endphp
                                                                @foreach ($row as $item)
                                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_col2" id="cabinet_col2" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @php
                                                                    $col = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                                                                @endphp
                                                                @foreach ($col as $item)
                                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_a2" id="cabinet_a2" onchange="onChangeCabinet2()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_b2" id="cabinet_b2" onchange="onChangeCabinet2()">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="table-input" name="cabinet_c2" id="cabinet_c2" onchange="onChangeCabinet2()">
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_to_del2" id="cabinet_to_del2" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = [0, 1, 2];
                                                                    $del_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $del_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_to_del12" id="cabinet_to_del12" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = ['Adjust', 'Fixed'];
                                                                    $del1_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $del1_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-control form-control-solid" name="cabinet_hinge_position2" id="cabinet_hinge_position2" onchange="onChangeCabinet2()">
                                                                <option value=""></option>
                                                                @php
                                                                    $del = ['Left', 'Fixed'];
                                                                    $hinge_id = 0;
                                                                @endphp
                                                                @foreach ($del as $item)
                                                                    <option value="{{ $hinge_id++ }}">{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <span class="table-input" name="cabinet_amount2" id="cabinet_amount2"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="18" class="text-center">TOTAL AMOUNT</td>
                                                        <td>
                                                            <input type="text" class="table-input" name="total_amount" id="total_amount" value="0.00">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="order-submit-button">
                                        <button type="button" class="btn btn-primary mr-2" onclick="onNext()">Order</button>
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

        function onChangeCabinet(){
            var name = $('#cabinet_name').val();
            var qty = $('#cabinet_qty').val();
            var height = $('#cabinet_height').val();
            var width = $('#cabinet_width').val();
            var depth = $('#cabinet_depth').val();
            // var colour = $('#cabinet_colour').val();
            var size = $('#cabinet_size').val();
            var finish = $('#cabinet_finish').val();
            var underbench = $('#cabinet_underbench').val();
            var row = $('#cabinet_row').val();
            var col = $('#cabinet_col').val();
            var shelves = $('#cabinet_to_del').val();
            // var = $('#').val();

            // console.log('cabinet_name : ' + name);
            // console.log('cabinet_qty : ' + qty);
            // console.log('cabinet_height : ' + height);
            // console.log('cabinet_width : ' + width);
            // console.log('cabinet_depth : ' + depth);
            // // console.log('cabinet_colour : ' + colour);
            // console.log('cabinet_size : ' + size);
            // console.log('cabinet_finish : ' + finish);
            // console.log('cabinet_underbench : ' + underbench);
            // console.log('cabinet_row : ' + row);
            // console.log('cabinet_col : ' + col);
            // console.log('cabinet_to_del : ' + shelves);

            if(name != "" && qty != "" && height != "" && width != "" && depth != "" && size != "" && finish != "" && row != "" && col != "" && shelves != "" && underbench != ""){
                $.ajax({
                    type : 'POST',
                    url : "{{ route('onChangeCabinet')}}",
                    data : {
                        _token  : "{{ csrf_token() }}",
                        name    : name,
                        qty     : qty,
                        height  : height,
                        width   : width,
                        depth   : depth,
                        // colour  : colour,
                        size    : size,
                        finish  : finish,
                        underbench : underbench,
                        shelves : shelves,
                        row     : row,
                        col     : col,
                    },
                    success:function(response){
                        $('#cabinet_amount').html(response.sell_price.toFixed(2));

                        var total = (parseInt($('#total_amount').val()) + response.sell_price).toFixed(2);
                        $('#total_amount').val(total);
                        // console.log(response.sell_price.toFixed(2));
                        // console.log(total);
                        // console.log($('#total_amount').val());
                    }
                })
            }
        }

        function onChangeCabinet1(){
            var name = $('#cabinet_name1').val();
            var qty = $('#cabinet_qty1').val();
            var height = $('#cabinet_height1').val();
            var width = $('#cabinet_width1').val();
            var depth = $('#cabinet_depth1').val();
            // var colour = $('#cabinet_colour1').val();
            var size = $('#cabinet_size1').val();
            var finish = $('#cabinet_finish1').val();
            var underbench = $('#cabinet_underbench1').val();
            var row = $('#cabinet_row1').val();
            var col = $('#cabinet_col1').val();
            var shelves = $('#cabinet_to_del1').val();
            // var = $('#').val();

            if(name != null && qty != null && height != null && width != null && depth != null && size != null && finish != null && row != null && col != null && shelves != null && underbench != null){
                $.ajax({
                    type : 'POST',
                    url : "{{ route('onChangeCabinet')}}",
                    data : {
                        _token  : "{{ csrf_token() }}",
                        name    : name,
                        qty     : qty,
                        height  : height,
                        width   : width,
                        depth   : depth,
                        // colour  : colour,
                        size    : size,
                        finish  : finish,
                        underbench : underbench,
                        shelves : shelves,
                        row     : row,
                        col     : col,
                    },
                    success:function(response){
                        console.log(response);
                        $('#cabinet_amount1').html(response.sell_price.toFixed(2));

                        var total = (parseInt($('#total_amount').val()) + response.sell_price).toFixed(2);
                        $('#total_amount').val(total);
                    }
                })
            }
        }

        function onChangeCabinet2(){
            var name = $('#cabinet_name2').val();
            var qty = $('#cabinet_qty2').val();
            var height = $('#cabinet_height2').val();
            var width = $('#cabinet_width2').val();
            var depth = $('#cabinet_depth2').val();
            // var colour = $('#cabinet_colour2').val();
            var size = $('#cabinet_size2').val();
            var finish = $('#cabinet_finish2').val();
            var underbench = $('#cabinet_underbench2').val();
            var row = $('#cabinet_row2').val();
            var col = $('#cabinet_col2').val();
            var shelves = $('#cabinet_to_del2').val();
            // var = $('#').val();

            if(name != null && qty != null && height != null && width != null && depth != null && size != null && finish != null && row != null && col != null && shelves != null && underbench != null){
                $.ajax({
                    type : 'POST',
                    url : "{{ route('onChangeCabinet')}}",
                    data : {
                        _token  : "{{ csrf_token() }}",
                        name    : name,
                        qty     : qty,
                        height  : height,
                        width   : width,
                        depth   : depth,
                        // colour  : colour,
                        size    : size,
                        finish  : finish,
                        underbench : underbench,
                        shelves : shelves,
                        row     : row,
                        col     : col,
                    },
                    success:function(response){
                        console.log(response);
                        $('#cabinet_amount2').html(response.sell_price.toFixed(2));

                        var total = (parseInt($('#total_amount').val()) + response.sell_price).toFixed(2);
                        $('#total_amount').val(total);
                    }
                })
            }
        }

        function onNext(){
            localStorage.setItem('TotalAmount', $('#total_amount').val());
            window.location.href="{{ route('toPaintedDoorOrder') }}";
        }
    </script>
@endsection('content')
