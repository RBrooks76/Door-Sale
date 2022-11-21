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
                                <h3 class="card-title">Add Curriculum</h3>
                            </div>
                            @if($errors->has('name') || $errors->has('content') )
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
                            <form method="POST" action="{{route('onAddTeacherCurriculum')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Curriculum Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="type" class="form-control" id="exampleInputPassword1" placeholder="Name"  name="name"/>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="exampleTextarea">Curriculurm Content
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3" name="content"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer card-footer-right">
                                    <button type="submit" class="btn btn-primary mr-2">Add Curriculum</button>
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

@endsection('content')



