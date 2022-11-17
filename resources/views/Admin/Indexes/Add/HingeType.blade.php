@extends('Admin.Layout.index')
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
                                <h3 class="card-title">Add Door Style</h3>
                            </div>
                            @if($errors->has('type') || $errors->has('tag') || $errors->has('price') )
                                <div class="alert alert-custom alert-danger fade show alert-custom-style" role="alert" id="alertDanger">
                                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                    <div class="alert-text text-center font-size-20 font-weight-700">You should fullfill required content.</div>
                                    <div class="alert-close">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            <!--begin::Form-->
                            <form method="POST" action="{{route('onHingeType')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hinge Type
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Type"  name="type" value="{{ old('type') }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hinge Tag
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Tag"  name="tag" value="{{ old('tag') }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hinge Price
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Price"  name="price" value="{{ old('price') }}"/>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="exampleTextarea">Hinge Type Comment
                                        </label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3" name="comment">{!! old('comment') !!}</textarea>
                                    </div>
                                </div>
                                <div class="card-footer card-footer-right">
                                    <button type="submit" class="btn btn-primary mr-2">Add Door Style</button>
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
        setTimeout(noneDisplayAlert, 3000);
    })

    function noneDisplayAlert(){
        $('#alertDanger').css('display', 'none');
    }


</script>
@endsection('content')



