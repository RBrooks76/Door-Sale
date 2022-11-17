@extends('Layout.index')
@section('content')

<div class="teacher_add_problem">
    @include('Admin.Layout.navbar')
    <div class="d-flex flex-row flex-column-fluid container">
        <!--begin::Content Wrapper-->
        <div class="main d-flex flex-column flex-row-fluid">
            <!--begin::Subheader-->
            {{-- <div class="subheader py-2 py-lg-6" id="kt_subheader">
                <div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center flex-wrap mr-1">
                        <!--begin::Page Heading-->
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold my-1 mr-5">Base Controls</h5>
                            <!--end::Page Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="" class="text-muted">Crud</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="" class="text-muted">Forms &amp; Controls</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="" class="text-muted">Form Controls</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="" class="text-muted">Base Inputs</a>
                                </li>
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center">
                        <!--begin::Daterange-->
                        <a href="#" class="btn btn-light-primary btn-sm font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
                            <span class="opacity-60 font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
                            <span class="font-weight-bold" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                        </a>
                        <!--end::Daterange-->
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-success svg-icon-2x">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header font-weight-bold py-4">
                                        <span class="font-size-lg">Choose Label:</span>
                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                    </li>
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-success">Customer</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-danger">Partner</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-primary">Member</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-dark">Staff</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-separator mt-3 opacity-70"></li>
                                    <li class="navi-footer py-4">
                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                        <!--end::Dropdown-->
                    </div>
                    <!--end::Toolbar-->
                </div>
            </div> --}}
            <!--end::Subheader-->
            <div class="content flex-column-fluid" id="kt_content">
                <div class="row">
                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Add Lesson</h3>
                            </div>
                            <!--begin::Form-->
                            @if($errors->has('CID') || $errors->has('LID') || $errors->has('SID') || $errors->has('name') || $errors->has('content') )
                                <div class="alert alert-custom alert-danger fade show alert-custom-style" role="alert">
                                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                    <div class="alert-text text-center">You should fullfill all content.</div>
                                    <div class="alert-close">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('onAddTeacherlesson') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="flex between">
                                        <div class="form-group form-group-lesson">
                                            <label for="exampleSelect1">Curriculum List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="CID" id="CID" onchange="getLIDList()">
                                                @foreach($curriculum as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group form-group-lesson">
                                            <label for="exampleSelect1">Level List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="LID" id="LID" onchange="getSIDList()">

                                            </select>
                                        </div>
                                        <div class="form-group form-group-lesson">
                                            <label for="exampleSelect1">Subject List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="SID" id="SID">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lesson Name
                                        <span class="text-danger">*</span></label>
                                        <input type="type" class="form-control" placeholder="Name" name="name"/>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="exampleTextarea">Lesson Content
                                        <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3" name="content"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer card-footer-right">
                                    <button type="submit" class="btn btn-primary mr-2">Add Lesson</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--begin::Content Wrapper-->
    </div>
</div>

<script>

    $(document).ready(function(){
        getInitCIDList();
    });
    
    var token = "{{ csrf_token() }}";

    function getInitCIDList(){
        var CID = $('#CID').val();
        $.ajax({
            url: "{{ route('getLessonLIDList') }}",
            type: 'POST',
            data: {
                _token: token,
                cid: CID,
            },
            success: function(response) {
                var level_html = '';
                for(var i = 0; i < response['level'].length; i++){
                    level_html += "<option value='"+ response['level'][i]['id'] +"'>"+ response['level'][i]['name'] + "</option>"
                }
                $('#LID').html(level_html);

                var subject_html = '';
                for(var i = 0; i < response['subject'].length; i++){
                    subject_html += "<option value='"+ response['subject'][i]['id'] +"'>"+ response['subject'][i]['name'] + "</option>"
                }
                $('#SID').html(subject_html);
            }
        });
    }

    function getLIDList(){
        var CID = $('#CID').val();
        var SID = $('#SID').val();
        $.ajax({
            url: "{{ route('getLessonLIDList') }}",
            type: 'POST',
            data: {
                _token: token,
                cid: CID,
                sid: SID,
            },
            success: function(response) {
                var level_html = '';
                for(var i = 0; i < response['level'].length; i++){
                    level_html += "<option value='"+ response['level'][i]['id'] +"'>"+ response['level'][i]['name'] + "</option>"
                }
                $('#LID').html(level_html);

                var subject_html = '';
                for(var i = 0; i < response['subject'].length; i++){
                    subject_html += "<option value='"+ response['subject'][i]['id'] +"'>"+ response['subject'][i]['name'] + "</option>"
                }
                $('#SID').html(subject_html);
            }
        });
    }

    function getSIDList(){
        var CID = $('#CID').val();
        var LID = $('#LID').val();
        $.ajax({
            url: "{{ route('getSIDList') }}",
            type: 'POST',
            data: {
                _token: token,
                cid: CID,
                lid: LID,
            },
            success: function(response) {
                console.log(response);
                var html = '';
                for(var i = 0; i < response.length; i++){
                    html += "<option value='"+ response[i]['id'] +"'>"+ response[i]['name'] + "</option>"
                }
                $('#SID').html(html);
            }
        });
    }


</script>
@endsection('content')



