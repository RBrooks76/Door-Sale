@extends('Form.Layout.index')
@section('content')

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Container-->
            <div class="d-flex flex-row flex-column-fluid container margin-top-80">
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
                                    <h5 class="text-dark font-weight-bold my-1 mr-5"></h5>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <form method ="POST" action="{{ route('onPaintedDoorOrder') }}">
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
                                                <label class="col-6 col-form-label">Customer Name</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="customer_name" name="customer">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Company Name</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="company_name" name="company">
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
                                                    <input class="form-control" type="text" id="job_ref" name="job">
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
                                        <button type="button" class="btn btn-primary mr-2">Save</button>
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
            $('#finish_material').hide();

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
                    finish_material += "<option value="+ response.finish_material[i]['id'] +">"+ response.finish_material[i]['name'] +"</option>";
                }
                $('#finish_material').html(finish_material);
                $('#finish_material').show();
            } else {
                $('#finish_material').hide();
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
                $('#finish_fifth').removeAttr('name');
            }

            if(response.finish_sixth != undefined){
                // $('#fifth_row').show();
                $('#finish_sixth').show();
                $('#finish_sixth_title').html(response.finish_sixth);
            } else {
                $('#finish_sixth_title').html('');
                $('#finish_sixth').hide();
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
                if(response.hardware_second != undefined){
                    for(var i = 0; i < response.hardware_second.length; i++){
                        hardware_second_result += "<option value="+ response.hardware_second[i]['id'] +">"+ response.hardware_second[i]['name'] +"</option>";
                    }
                }
                $('#hardware_second').html(hardware_second_result);
                $('#hardware_second').show();
            } else {
                $('#hardware_second_title').html('');
                $('#hardware_second').html('');
                $('#hardware_second').hide();
            }

            if(response.hardware_third_title != undefined){
                $('#hardware_third_title').html(response.hardware_third_title);
                if(response.hardware_third != undefined){
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
                if(response.hardware_fourth != undefined){
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
                if(response.hardware_fifth != undefined){
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
            var category = $('#door_category').val();
            var style = $('#finish_style').val();
            var finish = $('#finish_finish').val();
            var material = $('#finish_material').val();
            var finish_first    = $('#finish_first').val();
            var finish_second   = $('#finish_second').val();
            var finish_third    = $('#finish_third').val();
            var finish_fourth   = $('#finish_fourth').val();
            var finish_fifth    = $('#finish_fifth').val();
            var finish_sixth    = $('#finish_sixth').val();
            var hardware_first    = $('#hardware_first').val();
            var hardware_second   = $('#hardware_second').val();
            var hardware_third    = $('#hardware_third').val();
            var hardware_fourth   = $('#hardware_fourth').val();
            var hardware_fifth    = $('#hardware_fifth').val();
            var dimension_first = $('#dimension_first').val();
            var dimension_second = $('#dimension_second').val();
            var dimension_third = $('#dimension_third').val();
            var dimension_fourth = $('#dimension_fourth').val();

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
                    console.log(response);
                    console.log(parseFloat(response).toFixed(2));

                    var amount = parseFloat(response).toFixed(2);
                    var gst = parseFloat(amount / 10).toFixed(2);
                    var total = parseFloat(amount + gst).toFixed(2);
                    $('#status_amount_input').val(amount);

                    $('#doors_amount').html(amount);
                    $('#doors_gst').html(gst);
                    $('#doors_total').html(total);

                }
            })
        }

        function onChangeFinishSix(){
            var count = $('#finish_sixth').val();
            var category = $('#door_category').val();
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
                            $('#hardware_second_title').html('Runner 1');
                            $('#hardware_second').html(html);
                            $('#hardware_second').show();

                            $('#hardware_third_title').html('');
                            $('#hardware_third').hide();
                            $('#hardware_fourth_title').html('');
                            $('#hardware_fourth').hide();
                            $('#hardware_fifth_title').html('');
                            $('#hardware_fifth').hide();
                            break;
                        case '2' :
                            $('#hardware_second_title').html('Runner 1');
                            $('#hardware_second').html(html);
                            $('#hardware_second').show();

                            $('#hardware_third_title').html('Runner 2');
                            $('#hardware_third').html(html);
                            $('#hardware_third').show();

                            $('#hardware_fourth_title').html('');
                            $('#hardware_fourth').hide();
                            $('#hardware_fifth_title').html('');
                            $('#hardware_fifth').hide();
                            break;
                        case '3' :
                            $('#hardware_second_title').html('Runner 1');
                            $('#hardware_second').html(html);
                            $('#hardware_second').show();

                            $('#hardware_third_title').html('Runner 2');
                            $('#hardware_third').html(html);
                            $('#hardware_third').show();

                            $('#hardware_fourth_title').html('Runner 3');
                            $('#hardware_fourth').html(html);
                            $('#hardware_fourth').show();

                            $('#hardware_fifth_title').html('');
                            $('#hardware_fifth').hide();
                            break;
                        case '4' :
                            $('#hardware_second_title').html('Runner 1');
                            $('#hardware_second').html(html);
                            $('#hardware_second').show();

                            $('#hardware_third_title').html('Runner 2');
                            $('#hardware_third').html(html);
                            $('#hardware_third').show();

                            $('#hardware_fourth_title').html('Runner 3');
                            $('#hardware_fourth').html(html);
                            $('#hardware_fourth').show();

                            $('#hardware_fifth_title').html('Runner 4');
                            $('#hardware_fifth').html(html);
                            $('#hardware_fifth').show();
                            break;
                    }
                }
            });
        }

        function serial(){
            alert();
        }

    </script>
@endsection('content')
