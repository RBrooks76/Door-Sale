@extends('Layout.index')
@section('content')

<div class="teacher_add_problem">
    @include('Admin.Layout.navbar')
    <div class="d-flex flex-row flex-column-fluid container">
        <!--begin::Content Wrapper-->
        <div class="main d-flex flex-column flex-row-fluid">
            <div class="content flex-column-fluid" id="kt_content">
                <div class="row">
                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Add Problem</h3>
                            </div>
                            @if($errors->has('CID') || $errors->has('LID') || $errors->has('SID') || $errors->has('LeID')  || $errors->has('title') || $errors->has('content') )
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
                            <!--begin::Form-->
                            <form method="POST" action="{{route('onAddTeacherProblem')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="flex between">
                                        <div class="form-group form-group-lesson">
                                            <label for="exampleSelect1">Curriculum List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="CID" id="CID" onchange="getLIDList()" name="CID">
                                                @foreach($curriculum as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group form-group-lesson">
                                            <label for="exampleSelect1">Level List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="LID" id="LID" onchange="getSIDList()" name="LID">

                                            </select>
                                        </div>
                                        <div class="form-group form-group-lesson">
                                            <label for="exampleSelect1">Subject List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="SID" id="SID" onchange="getLeIDList()" name="SID">
                                                
                                            </select>
                                        </div>
                                        <div class="form-group form-group-lesson">
                                            <label for="exampleSelect1">Lesson List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="LeID" id="LeID" name="LeID">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Problem Title
                                        <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title"/>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="exampleTextarea">Problem Content
                                        <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="exampleTextarea" rows="5" name="content"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer card-footer-right">
                                    <button type="submit" class="btn btn-primary mr-2">Add Problem</button>
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
        getProblemList();
    });

    var token = "{{ csrf_token() }}";

    function getProblemList(){
        var CID = $('#CID').val();
        $.ajax({
            type : 'POST',
            url  : "{{ route('getProblemList') }}",
            data : {
                _token : token,
                cid : CID
            },
            success:function(response){
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

                var lesson_html = '';
                for(var i = 0; i < response['lesson'].length; i++){
                    lesson_html += "<option value='"+ response['lesson'][i]['id'] +"'>"+ response['lesson'][i]['name'] + "</option>"
                }
                $('#LeID').html(lesson_html);
            }
        })
    }

    function getLIDList(){
        getProblemList();
    }

    function getSIDList(){
        var CID = $('#CID').val();
        var LID = $('#LID').val();
        $.ajax({
            type : 'POST',
            url  : "{{ route('getProblemSIDList') }}",
            data : {
                _token : token,
                cid : CID,
                lid : LID
            },
            success:function(response){
                var subject_html = '';
                for(var i = 0; i < response['subject'].length; i++){
                    subject_html += "<option value='"+ response['subject'][i]['id'] +"'>"+ response['subject'][i]['name'] + "</option>"
                }
                $('#SID').html(subject_html);

                var lesson_html = '';
                for(var i = 0; i < response['lesson'].length; i++){
                    lesson_html += "<option value='"+ response['lesson'][i]['id'] +"'>"+ response['lesson'][i]['name'] + "</option>"
                }
                $('#LeID').html(lesson_html);
            }
        })
    }

    function getLeIDList(){
        var CID = $('#CID').val();
        var LID = $('#LID').val();
        var SID = $('#SID').val();

         $.ajax({
            type : 'POST',
            url  : "{{ route('getProblemLeIDList') }}",
            data : {
                _token : token,
                cid : CID,
                lid : LID,
                sid : SID
            },
            success:function(response){
                var lesson_html = '';
                for(var i = 0; i < response['lesson'].length; i++){
                    lesson_html += "<option value='"+ response['lesson'][i]['id'] +"'>"+ response['lesson'][i]['name'] + "</option>"
                }
                $('#LeID').html(lesson_html);
            }
        })
    }

</script>
@endsection('content')



