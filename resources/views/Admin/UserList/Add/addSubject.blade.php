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
                                <h3 class="card-title">Add Subject</h3>
                            </div>
                            @if($errors->has('CID') || $errors->has('LID') || $errors->has('name') || $errors->has('content') )
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
                            <form method="POST" action="{{route('onAddTeacherSubject')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="flex between">
                                        <div class="form-group form-group-level">
                                            <label for="exampleSelect1">Curriculum List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="CID" id="CID" onchange="getLIDList()">
                                                @foreach($curriculum as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group form-group-level">
                                            <label for="exampleSelect1">Level List
                                            <span class="text-danger">*</span></label>
                                            <select class="form-control" name="LID" id="LID">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Subject Name
                                        <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name"/>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="exampleTextarea">Subject Content
                                        <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3" name="content"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer card-footer-right">
                                    <button type="submit" class="btn btn-primary mr-2">Add Subject</button>
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

{{-- <script src="assets/js/custom/teacher.js"></script> --}}
<script>
    $(document).ready(function(){
        getLIDList();
    });

    function getLIDList(){
        var CID = $('#CID').val();
        $.ajax({
            url: "{{ route('getLIDList') }}",
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                cid: CID
            },
            success: function(response) {
                var html = '';
                for(var i=0; i < response.length; i++){
                    html += "<option value='"+ response[i]['id'] +"'>"+ response[i]['name'] + "</option>"
                }
                $('#LID').html(html);
            }
        });
    }

</script>
@endsection('content')



