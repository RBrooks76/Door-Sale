@extends('Layout.index')
@section('content')
	@include('Layout.header')
	<!-- END nav -->

	<!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-1.jpg">
                <div class="hero__text">
                    <h2>Quality is not only our standard.</h2>
                    <a href="#" class="primary-btn">See Project</a>
                    <a href="#" class="more_btn">Discover more</a>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-2.jpg">
                <div class="hero__text">
                    <h2>Quality is not only our standard.</h2>
                    <a href="#" class="primary-btn">See Project</a>
                    <a href="#" class="more_btn">Discover more</a>
                    <div class="hero__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-num" id="snh-1"></div>
        <div class="slider__progress"><span></span></div>
    </section>
    <!-- Hero Section End -->

    <!-- Project Section Begin -->
    <section class="project">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our works</span>
                        <h2>Latest projects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project__slider owl-carousel">
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item set-bg" data-setbg="image/product/1.jpg">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>Jonathan Mcdaniel</h5>
                                    <span>Architect</span>
                                </div>
                                <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                    porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                                ultricies nisl sit amet.</p>
                                <div class="team__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item set-bg" data-setbg="image/product/2.jpg">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>Jonathan Mcdaniel</h5>
                                    <span>Architect</span>
                                </div>
                                <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                    porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                                ultricies nisl sit amet.</p>
                                <div class="team__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item set-bg" data-setbg="image/product/3.jpg">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>Jonathan Mcdaniel</h5>
                                    <span>Architect</span>
                                </div>
                                <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                    porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                                ultricies nisl sit amet.</p>
                                <div class="team__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team__item set-bg" data-setbg="image/product/4.jpg">
                            <div class="team__text">
                                <div class="team__title">
                                    <h5>Jonathan Mcdaniel</h5>
                                    <span>Architect</span>
                                </div>
                                <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                    porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                                ultricies nisl sit amet.</p>
                                <div class="team__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Section End -->

    @include('Layout.footer')

@endsection
