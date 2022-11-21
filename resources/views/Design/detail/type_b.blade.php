@extends('Layout.index')
@section('content')

    @include('Layout.header')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{ asset('assets/img/breadcrumb')}}-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Projects Details</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./project.html">Project</a>
                            <span>Projects Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Details Section Begin -->
    <section class="project-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('assets/img/project/details/details-1.jpg')}}" alt="">
                            <img src="{{ asset('assets/img/project/details/details-4.jpg')}}" alt="">
                            <img src="{{ asset('assets/img/project/details/details-5.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('assets/img/project/details/details-2.jpg')}}" alt="">
                            <img src="{{ asset('assets/img/project/details/details-3.jpg')}}" alt="">
                            <img src="{{ asset('assets/img/project/details/details-6.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project__sidebar">
                        <div class="project__sidebar__about">
                            <h2>Office Building Creative</h2>
                            <p>Metasurfaces are generally designed by placing scatterers in periodic or pseudo-periodic
                                grids. We propose and discuss design rules for functional metasurfaces with randomly
                            placed.</p>
                            <p>Anisotropic elements that randomly sample. Quisque sit amet nisl ante. Fusce lacinia non
                            tellus id gravida. Cras neque dolor, volutpat et hendrerit et.</p>
                        </div>
                        <div class="product__details__widget">
                            <div class="product__details__widget__item">
                                <span>Clients:</span>
                                <h4>John Smith</h4>
                            </div>
                            <div class="product__details__widget__item">
                                <span>Location:</span>
                                <p>101 E 129th St, East Chicago, US</p>
                            </div>
                            <div class="product__details__widget__item">
                                <span>Location:</span>
                                <p>Decoration, building, Office.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Details Section End -->


    @include('Layout.footer')
@endsection
