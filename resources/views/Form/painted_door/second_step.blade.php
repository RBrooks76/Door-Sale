@extends('Form.Layout.index')
@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div id="kt_header_mobile" class="header-mobile">
                    <a href="index.html">
                        <img alt="Logo" src="image/logo/logo.png" class="max-h-30px" />
                    </a>
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
                    <div class="main d-flex flex-column flex-row-fluid justify-center">
                        <div class="row justify-center">
                            <div class="subheader py-2 py-lg-6 second-step " id="kt_subheader">
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
                        </div>
                        <div class="row justify-center">
                            <div class="card card-custom gutter-b example example-compact second-step">
                                <div class="card-header">
                                    <h3 class="card-title">Painted Door - Purchase Order &nbsp;<b
                                            style="font-size : 25px">Second Step</b></h3>
                                </div>
                                @if (
                                    $errors->has('paint_manufacturer') ||
                                    $errors->has('paint_colour') ||
                                    $errors->has('touch_up_paint') ||
                                    $errors->has('extra_paint') ||
                                    $errors->has('door_style') ||
                                    $errors->has('finish') ||
                                    $errors->has('edge_profile') ||
                                    $errors->has('material_thickness')
                                    )
                                    <div class="alert alert-custom alert-danger fade show notification-second-step"
                                        role="alert" id="alertDanger">
                                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                        <div class="alert-text text-center font-size-20">You should
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
                                <form class="form" method="POST" action="{{ route('onPaintedDoorSecondStep') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group form-group-last">

                                        </div>
                                        <div class="form-group">
                                            <label>PAINT MANUFACTURER</label>
                                            <input type="text" class="form-control form-control-lg" placeholder=""
                                                name="paint_manufacturer" value="{{old('paint_manufacturer')}}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>PAINT COLOUR</label>
                                            <input type="text" class="form-control form-control-lg" placeholder=""
                                                name="paint_colour" value="{{old('paint_colour')}}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>TOUCH UP PAINT</label>
                                            <select class="form-control form-control-lg" name="touch_up_paint" value="{{old('touch_in_paint')}}">
                                                <option value="1">TRUE</option>
                                                <option value="0">FALSE</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectl">EXTRA PAINT(LITRES)</label>
                                            <input type="text" class="form-control form-control-lg" placeholder=""
                                                name="extra_paint" value="{{old('extra_paint')}}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectd">DOOR STYLE</label>
                                            <select class="form-control form-control-lg" name="door_style" value="{{old('door_style')}}">
                                                <option value=""></option>
                                                @foreach ($doorstyle as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelects">FINISH</label>
                                            <select class="form-control form-control-lg" id="exampleSelects" name="finish" value="{{old('finish')}}">
                                                <option value=""></option>
                                                @foreach ($finish as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectd">EDGE PROFILE</label>
                                            <select class="form-control form-control-lg" name="edge_profile" value="{{old('edge_profile')}}">
                                                @php
                                                    $data = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
                                                    $cnt1 = 0;
                                                @endphp
                                                <option value=""></option>
                                                @foreach ($data as $item)
                                                    <option value="{{ $cnt1++ }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelects">MATERIAL THICKNESS</label>
                                            <select class="form-control form-control-lg" id="exampleSelects" name="material_thickness" value="{{old('material_thickness')}}">
                                                <option value=""></option>
                                                <option value="16">16</option>
                                                <option value="18">18</option>
                                                <option value="21">21</option>
                                                <option value="32">32</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success mr-2">SAVE & NEXT</button>
                                        <button type="reset" class="btn btn-secondary" onclick="toFirst()">Cancel</button>
                                    </div>
                                </form>
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
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                viewBox="0 0 24 24" version="1.1">
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

        function toFirst(){
            window.location.href="{{ route('toPaintedDoorFirst') }}"
        }

    </script>
@endsection('content')
