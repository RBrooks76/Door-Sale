@extends("Layout.index")
@section('content')
    @include("Layout.header")

        <!-- Breadcrumb Section Begin -->
        <div class="breadcrumb-option spad set-bg" data-setbg="assets/img/breadcrumb-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Our Projects</h2>
                            <div class="breadcrumb__links">
                                <a href="./index.html">Home</a>
                                <span>Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->

        <!-- Project Page Section Begin -->
        <section class="project-page spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project__item">
                            <img src="assets/img/project/project-p1.jpg" alt="">
                            <h4><a href="#">Office Building</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project__item">
                            <img src="assets/img/project/project-p2.jpg" alt="">
                            <h4><a href="#">Funiture Decorative</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project__item">
                            <img src="assets/img/project/project-p3.jpg" alt="">
                            <h4><a href="#">Interior Design</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project__item">
                            <img src="assets/img/project/project-p4.jpg" alt="">
                            <h4><a href="#">Home Building</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project__item">
                            <img src="assets/img/project/project-p5.jpg" alt="">
                            <h4><a href="#">Decoration</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project__item">
                            <img src="assets/img/project/project-p6.jpg" alt="">
                            <h4><a href="#">Funiture</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="#" class="primary-btn normal-btn">Load More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Page Section End -->

    @include('Layout.footer')
@endsection
