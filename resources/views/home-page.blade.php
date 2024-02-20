@extends('layout.main')

@section('content')

    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">

            @include('fragments.navbar')

        </header>

        <!-- /header -->
        <section class="wrapper" style="background-color: #21262c">
            <div class="container pt-7 pt-md-11 pb-8">
                <div class="row gx-0 gy-10 align-items-center">
                    <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 text-white mb-4">Your partner in <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="Web Design,E-Commerce,Digital Marketing,ERP Software"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
                        <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">Let us help you grow your digital appearance. Start by telling us more about your business.</p>
                        <div>
                            <a href="{{route('contact-us')}}" class="btn btn-lg btn-primary rounded">Talk with an expert</a>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                        <div class="position-relative">
                            <figure class="rounded shadow-lg"><img src="./assets/img/photos/about13.jpg" srcset="./assets/img/photos/about13@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!-- /div -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->

        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-15 py-md-17 position-relative">
                <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
                    <div class="col-lg-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-6">
                                <figure class="rounded"><img src="{{asset('/assets/img/content/shurey.jpg')}}" srcset="{{asset('/assets/img/content/shurey.jpg')}}" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-end">
                                <figure class="rounded"><img src="./assets/img/photos/g13.jpg" srcset="./assets/img/photos/g13@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-12">
                                <figure class="rounded mx-md-5"><img src="./assets/img/photos/g11.jpg" srcset="./assets/img/photos/g11@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h2 class="fs-16 text-uppercase text-primary mb-3">Who Are We?</h2>
                        <h3 class="display-3 mb-5">What can <b>Shurey</b> say about who we are</h3>
                        <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed.</p>
                        <div class="row align-items-center counter-wrapper gy-6">
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">99.7%</h3>
                                <h5 class="mb-0">Customer Satisfaction</h5>
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">12x</h3>
                                <h5 class="mb-0">Revenue Growth</h5>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row gx-lg-8 gx-xl-12 gy-6 mb-7 mb-md-9">
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">1</span> </div>
                            </div>
                            <div>
                                <h3>Our Vision</h3>
                                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget. Fusce dapibus tellus.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">2</span> </div>
                            </div>
                            <div>
                                <h3>Our Mission</h3>
                                <p class="mb-2">Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet. Sed posuere consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">3</span> </div>
                            </div>
                            <div>
                                <h3>Our Values</h3>
                                <p class="mb-2">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna scelerisque.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="text-center"><a href="{{route('about-us')}}" class="btn btn-primary">About Us</a></div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->


        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row text-center">
                    <div class="col-xl-10 mx-auto">
                        <h2 class="fs-15 text-uppercase text-primary mb-3">Our Services</h2>
                        <h3 class="display-4 mb-10 px-xxl-15">How could be helpful? Check out what interests you the most, and we will take care of it!</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row gy-6">
                    <div class="col-md-6 col-lg-4">
                        <a href="{{route('web-design')}}" class="card shadow-lg lift h-100">
                            <div class="card-body p-5 d-flex flex-row">
                                <div>
                                    <span class="avatar bg-red text-white w-11 h-11 fs-20 me-4">WD</span>
                                </div>
                                <div>
                                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Small Businesses</span>
                                    <h4 class="mb-1">Web Design</h4>
                                    <p class="mb-0 text-body">HTML/JS/CSS, PHP Laravel, WordPress</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <a href="{{route('e-commerce')}}" class="card shadow-lg lift h-100">
                            <div class="card-body p-5 d-flex flex-row">
                                <div>
                                    <span class="avatar bg-green text-white w-11 h-11 fs-20 me-4">EC</span>
                                </div>
                                <div>
                                    <span class="badge bg-pale-aqua text-aqua rounded py-1 mb-2">Sell Your Products</span>
                                    <h4 class="mb-1">E-Commerce</h4>
                                    <p class="mb-0 text-body">WordPress, WooCommerce, Shopify, Amazon</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <a href="{{route('digital-marketing')}}" class="card shadow-lg lift h-100">
                            <div class="card-body p-5 d-flex flex-row">
                                <div>
                                    <span class="avatar bg-yellow text-white w-11 h-11 fs-20 me-4">DM</span>
                                </div>
                                <div>
                                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Promote Your Business</span>
                                    <h4 class="mb-1">Digital Marketing</h4>
                                    <p class="mb-0 text-body">SEO, Google Ads, Content, Social Media Ads</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <a href="{{route('erp')}}" class="card shadow-lg lift h-100">
                            <div class="card-body p-5 d-flex flex-row">
                                <div>
                                    <span class="avatar bg-purple text-white w-11 h-11 fs-20 me-4">ERP</span>
                                </div>
                                <div>
                                    <span class="badge bg-pale-violet text-violet rounded py-1 mb-2">Operational Work</span>
                                    <h4 class="mb-1">ERP Software</h4>
                                    <p class="mb-0 text-body">Java, Spring Boot, Amazon Web Services</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <a href="{{route('copywriting')}}" class="card shadow-lg lift h-100">
                            <div class="card-body p-5 d-flex flex-row">
                                <div>
                                    <span class="avatar bg-orange text-white w-11 h-11 fs-20 me-4">CW</span>
                                </div>
                                <div>
                                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Content Creation</span>
                                    <h4 class="mb-1">Copywriting</h4>
                                    <p class="mb-0 text-body">Product Listing, Ads Content, Video Making and Editing</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <a href={{route('design')}} class="card shadow-lg lift h-100">
                            <div class="card-body p-5 d-flex flex-row">
                                <div>
                                    <span class="avatar bg-pink text-white w-11 h-11 fs-20 me-4">DS</span>
                                </div>
                                <div>
                                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Visualisation</span>
                                    <h4 class="mb-1">Design</h4>
                                    <p class="mb-0 text-body">Banners, Product Photography, 3D Rendering</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row mt-11">
                    <div class="col-lg-6 col-xl-5 mx-auto text-center">
                        <h2 class="display-6 mb-3">You are still not sure what you need?</h2>
                        <p class="lead mb-5 px-md-16 px-lg-3">That's ok. Our dedicated experts will give you the best advice according to your specific business. </p>
                        <a href="#" class="btn btn-primary rounded-pill">Get in Touch</a>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->








@endsection
