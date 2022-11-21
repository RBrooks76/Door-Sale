@extends('Layout.index')
@section('content')

    @include('Layout.header')

    {{-- <section class="disign" style="widht: 100%">
        <div class="col-lg-12">
            <div class="container">
                <h4>Euroform offers a range of stunning door profiles. Whether it be a contemporary flat-profiled door or that classic country look, Eurocoat has a style to suit all tastes and budgets.Euroform’s exclusive recessed handle doors are an example of polyurethane’s versatility and are the ultimate way of expressing sharp clean lines in your new kitchen without the clutter of door handles.</h4>
            </div>
        </div>
        <div class="icon-box-area pt-70 pb-70" id="feature">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-icon-box icon-box-img-1" >
                            <div class="icon-box-content">
                                <h6 class="iconbox-content-heading">DESIGN A</h6>
                                <div class="iconbox-content-body">
                                    <p>Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas nunc, id porta nibh nunc non felis. Vestibulum nibh urna, lobortis ut euismod sed, dignissim non neque</p>
                                    <a class="btn btn-inline read-more-btn" href="#"><i class="fas fa-plus-square"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-icon-box icon-box-img-2">
                            <div class="icon-box-content">
                                <h6 class="iconbox-content-heading">DESIGN B</h6>
                                <div class="iconbox-content-body">
                                    <p>Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas nunc, id porta nibh nunc non felis. Vestibulum nibh urna, lobortis ut euismod sed, dignissim non neque</p>
                                    <a class="btn btn-inline read-more-btn" href="#"><i class="fas fa-plus-square"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-icon-box icon-box-img-3">
                            <div class="icon-box-content">
                                <h6 class="iconbox-content-heading">DESIGN B Recessed</h6>
                                <div class="iconbox-content-body">
                                    <p>Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas nunc, id porta nibh nunc non felis. Vestibulum nibh urna, lobortis ut euismod sed, dignissim non neque</p>
                                    <a class="btn btn-inline read-more-btn" href="#"><i class="fas fa-plus-square"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-icon-box icon-box-img-4">
                            <div class="icon-box-content">
                                <h6 class="iconbox-content-heading">DESIGN C</h6>
                                <div class="iconbox-content-body">
                                    <p>Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas nunc, id porta nibh nunc non felis. Vestibulum nibh urna, lobortis ut euismod sed, dignissim non neque</p>
                                    <a class="btn btn-inline read-more-btn" href="#"><i class="fas fa-plus-square"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-icon-box icon-box-img-5">
                            <div class="icon-box-content">
                                <h6 class="iconbox-content-heading">DESIGN D</h6>
                                <div class="iconbox-content-body">
                                    <p>Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas nunc, id porta nibh nunc non felis. Vestibulum nibh urna, lobortis ut euismod sed, dignissim non neque</p>
                                    <a class="btn btn-inline read-more-btn" href="#"><i class="fas fa-plus-square"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="section-title">
                    <h2>DOOR DESIGN</h2>
                    <span>Euroform offers a range of stunning door profiles. Whether it be a contemporary flat-profiled door or that classic country look, Eurocoat has a style to suit all tastes and budgets.Euroform’s exclusive recessed handle doors are an example of polyurethane’s versatility and are the ultimate way of expressing sharp clean lines in your new kitchen without the clutter of door handles.</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team__btn">
                    <a href="#" class="primary-btn normal-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <a href="{{ route('toDesignDetail', ['type' => 'a']) }}">
                    <div class="team__item set-bg" data-setbg="image/material/1.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>DOOR DESIGN A</h5>
                                <span>CEO & Founder</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('toDesign') }}">
                    <div class="team__item set-bg" data-setbg="image/material/2.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>DOOR DESIGN B</h5>
                                <span>Architect</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a>
                    <div class="team__item set-bg" data-setbg="image/material/3.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>DOOR DESIGN B RECESSED</h5>
                                <span>Architect</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a>
                    <div class="team__item set-bg" data-setbg="image/material/4.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>DOOR DESIGN C</h5>
                                <span>Architect</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a>
                    <div class="team__item set-bg" data-setbg="image/material/5.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>DOOR DESIGN D</h5>
                                <span>Architect</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@include('Layout.footer')
@endsection
