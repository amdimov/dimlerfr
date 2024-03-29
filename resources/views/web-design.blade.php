@extends('layout.main')

@section('content')
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">

            @include('fragments.navbar')

        </header>

        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Web Design</h1>
                        <p class="lead fs-lg mb-7">
                            Chez Dimler, nous comprenons qu'un site Web est plus qu'une simple présence en ligne, c'est le visage numérique de votre entreprise.
                            Comme vous venez de le faire, 70,5% des clients effectuent d'abord une recherche sur internet avant d'acheter un produit ou un service.
                            Nos services de conception Web sont conçus pour rehausser votre marque et engager efficacement votre public. Que vous soyez une petite entreprise, une entreprise familiale ou une grande entreprise,
                            nous possédons l'expertise nécessaire pour donner vie à votre vision.
                        </p>
                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                            <span><a href="{{route('contact-us')}}" class="btn btn-primary rounded me-2">Contact</a></span>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7" data-cue="slideInDown">
                        <figure><img class="w-auto" src={{asset('./assets/img/content/web-design-cover.jpg')}} srcset={{asset('./assets/img/content/web-design-cover.jpg')}} alt="" /></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pt-14 pt-md-16 pb-9 pb-md-11 pb-md-10">
                <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <img src={{asset('./assets/img/icons/lineal/browser.svg')}} class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                <h4>HTML/CSS/JS Development</h4>
                                <p class="mb-2">
                                    Nous créons des sites Web visuellement époustouflants et fonctionnellement robustes en utilisant
                                    les dernières technologies HTML, CSS et JavaScript. Notre objectif est de créer des conceptions
                                    intuitives et réactives qui garantissent une expérience utilisateur transparente sur n'importe quel appareil.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <img src={{asset('./assets/img/icons/lineal/browser.svg')}} class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                                <h4>PHP Laravel Solutions</h4>
                                <p class="mb-2">
                                    Pour les entreprises qui recherchent des applications Web dynamiques et sophistiquées,
                                    notre développement PHP Laravel propose des solutions personnalisables, sécurisées et évolutives. Nous exploitons
                                    ce cadre puissant pour créer des sites Web performants qui répondent aux besoins spécifiques de votre entreprise.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <img src={{asset('./assets/img/icons/lineal/browser.svg')}} class="svg-inject icon-svg icon-svg-md text-orange mb-3"  alt="" />
                                <h4>WordPress Web Development</h4>
                                <p class="mb-2">
                                    Idéals à la fois pour leur simplicité et leur polyvalence, nos services WordPress offrent
                                    une plateforme facile à gérer sans compromettre la fonctionnalité ou le design. Des sites d’entreprise élégants et informatifs
                                    aux plateformes de commerce électronique riches en fonctionnalités, nous transformons vos idées en réalité avec WordPress.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <a href="{{route('contact-us')}}" class="btn btn-sm btn-outline-primary rounded-pill">DEMANDE DE CONTACT</a>
                </div>
                <!--/.row -->

            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->


        <section class="wrapper bg-light ms-4 me-4 mb-15">
            <div class="swiper-container mb-10" data-margin="30" data-nav="true"  data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="overlay overlay-3 overlay-gradient-1 hover-scale rounded">
                                <a>
                                    <img style="filter: contrast(150%);" src={{asset('./assets/img/content/web-design-1.jpg')}} srcset={{asset('./assets/img/content/web-design-1.jpg')}} alt="" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-1">WordPress + Woocommerce</h5>
                                    <p class="from-bottom">Excellent site Web d'entreprise avec une petite section e-commerce</p>
                                </figcaption>
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay overlay-3 overlay-gradient-1 hover-scale rounded">
                                <a>
                                    <img style="filter: contrast(150%);" src={{asset('./assets/img/content/web-design-2.jpg')}} srcset={{asset('./assets/img/content/web-design-2.jpg')}} alt="" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-1">PHP with plain HTML+CSS+JS</h5>
                                    <p class="from-bottom">Charge bien plus rapidement que les autres technologies avec un contrôle complet.
                                        Permet aussi de développer le SEO.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay overlay-3 overlay-gradient-1 hover-scale rounded">
                                <a>
                                    <img style="filter: contrast(150%);" src={{asset('./assets/img/content/web-design-3.jpg')}} srcset={{asset('./assets/img/content/web-design-3.jpg')}} alt="" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-1">WordPress Admin Panel</h5>
                                    <p class="from-bottom">Wordpress vous permet de contrôler et modifier le contenu de votre site web, sans pour autant avoir de grandes connaissances techniques </p>
                                </figcaption>
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </section>


{{--        <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src={{asset('./assets/img/content/web-design-cover.jpg')}}>--}}
{{--            <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">--}}
{{--                        <div class="post-header">--}}
{{--                            <div class="post-category text-line text-white">--}}
{{--                                <a href="#" class="text-reset" rel="category">Corporate Websites</a>--}}
{{--                            </div>--}}
{{--                            <!-- /.post-category -->--}}
{{--                            <h1 class="display-1 mb-3 text-white">Web Design</h1>--}}

{{--                        </div>--}}
{{--                        <!-- /.post-header -->--}}
{{--                    </div>--}}
{{--                    <!-- /column -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}
{{--            </div>--}}
{{--            <!-- /.container -->--}}
{{--        </section>--}}
{{--        <!-- /section -->--}}
{{--        <section class="wrapper bg-light wrapper-border">--}}
{{--            <div class="container pt-14 pt-md-16 pb-13 pb-md-15">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-10 offset-lg-1">--}}
{{--                        <article>--}}
{{--                            <div class="row gx-0">--}}
{{--                                <div class="col-md-9 text-justify">--}}
{{--                                    <p>--}}
{{--                                        Web Design--}}
{{--                                        At Dimler, we understand that a website is more than just an online presence—it's the digital face of your business.--}}
{{--                                        Our Web Design services are tailored to elevate your brand and engage your audience effectively.--}}
{{--                                        Whether you're a small business or a large corporation, we have the expertise to bring your vision to life.--}}
{{--                                        <br>Our Offerings:--}}
{{--                                    </p>--}}
{{--                                    <div class="card card-border-start border-primary">--}}
{{--                                        <div class="card-body"><strong>HTML/CSS/JS Development</strong><br>--}}
{{--                                            <p>--}}
{{--                                                We craft visually stunning and functionally robust websites using the latest in HTML, CSS, and JavaScript technologies.--}}
{{--                                                Our focus is on creating intuitive and responsive designs that ensure a seamless user experience on any device.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="card card-border-start border-primary">--}}
{{--                                        <div class="card-body"><strong>PHP Laravel Solutions</strong><br>--}}
{{--                                            <p>--}}
{{--                                                For businesses seeking dynamic and sophisticated web applications, our PHP Laravel development offers customizable, secure, and scalable solutions.--}}
{{--                                                We leverage this powerful framework to build high-performance websites that meet your specific business needs.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="card card-border-start border-primary">--}}
{{--                                        <div class="card-body"><strong>WordPress Web Development</strong><br>--}}
{{--                                            <p>--}}
{{--                                                Ideal for both simplicity and versatility, our WordPress services offer an easy-to-manage platform without compromising on functionality or design.--}}
{{--                                                From sleek, informative corporate sites to feature-rich eCommerce platforms, we turn your ideas into reality with WordPress.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                    <div class="accordion accordion-wrapper p-4" id="accordionSimpleExample">--}}
{{--                                        <div class="card plain accordion-item">--}}
{{--                                            <h3 class="p-3">What set's us apart?</h3>--}}
{{--                                            <div class="card-header" id="headingSimpleOne">--}}
{{--                                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseSimpleOne" aria-expanded="true" aria-controls="collapseSimpleOne"> Exceptional Design </button>--}}
{{--                                            </div>--}}
{{--                                            <!--/.card-header -->--}}
{{--                                            <div id="collapseSimpleOne" class="accordion-collapse collapse show" aria-labelledby="headingSimpleOne" data-bs-parent="#accordionSimpleExample">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <p>--}}
{{--                                                        We believe in the power of great design.--}}
{{--                                                        Our team creates visually appealing, brand-aligned websites that not only attract but also retain your target audience.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <!--/.card-body -->--}}
{{--                                            </div>--}}
{{--                                            <!--/.accordion-collapse -->--}}
{{--                                        </div>--}}
{{--                                        <!--/.accordion-item -->--}}
{{--                                        <div class="card plain accordion-item">--}}
{{--                                            <div class="card-header" id="headingSimpleTwo">--}}
{{--                                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSimpleTwo" aria-expanded="false" aria-controls="collapseSimpleTwo"> Multi-Page and Mobile-Friendly </button>--}}
{{--                                            </div>--}}
{{--                                            <!--/.card-header -->--}}
{{--                                            <div id="collapseSimpleTwo" class="accordion-collapse collapse" aria-labelledby="headingSimpleTwo" data-bs-parent="#accordionSimpleExample">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <p>--}}
{{--                                                        In today's mobile-first world, we ensure that your website is fully responsive and mobile-friendly,--}}
{{--                                                        providing an optimal viewing experience across all devices and screen sizes.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <!--/.card-body -->--}}
{{--                                            </div>--}}
{{--                                            <!--/.accordion-collapse -->--}}
{{--                                        </div>--}}
{{--                                        <!--/.accordion-item -->--}}
{{--                                        <div class="card plain accordion-item">--}}
{{--                                            <div class="card-header" id="headingSimpleThree">--}}
{{--                                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSimpleThree" aria-expanded="false" aria-controls="collapseSimpleThree"> Tailored for the Corporate World </button>--}}
{{--                                            </div>--}}
{{--                                            <!--/.card-header -->--}}
{{--                                            <div id="collapseSimpleThree" class="accordion-collapse collapse" aria-labelledby="headingSimpleThree" data-bs-parent="#accordionSimpleExample">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <p>--}}
{{--                                                        We specialize in developing websites that resonate with the corporate ethos,--}}
{{--                                                        focusing on professional aesthetics, streamlined functionality, and user-centric design.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <!--/.card-body -->--}}
{{--                                            </div>--}}
{{--                                            <!--/.accordion-collapse -->--}}
{{--                                        </div>--}}
{{--                                        <!--/.accordion-item -->--}}
{{--                                    </div>--}}
{{--                                    <!--/.accordion -->--}}

{{--                                </div>--}}
{{--                                <!--/column -->--}}
{{--                                <!--/column -->--}}
{{--                            </div>--}}
{{--                            <!--/.row -->--}}
{{--                        </article>--}}
{{--                        <!-- /.project -->--}}
{{--                    </div>--}}
{{--                    <!-- /column -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}
{{--            </div>--}}
{{--            <!-- /.container -->--}}
{{--            <div class="container-fluid px-md-6">--}}
{{--                <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">--}}
{{--                    <div class="swiper">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <figure class="rounded"><img src={{asset('./assets/img/content/web-design-1.jpg')}} alt="" /></figure>--}}
{{--                            </div>--}}
{{--                            <!--/.swiper-slide -->--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <figure class="rounded"><img src={{asset('./assets/img/content/web-design-2.jpg')}} alt="" /></figure>--}}
{{--                            </div>--}}
{{--                            <!--/.swiper-slide -->--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <figure class="rounded"><img src={{asset('./assets/img/content/web-design-3.jpg')}} alt="" /></figure>--}}
{{--                            </div>--}}
{{--                                                    <div class="swiper-slide">--}}
{{--                                                        <figure class="rounded"><img src={{asset('./assets/img/content/web-design-1.jpg')}} alt="" /></figure>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="swiper-slide">--}}
{{--                                                        <figure class="rounded"><img src={{asset('./assets/img/content/web-design-1.jpg')}} alt="" /></figure>--}}
{{--                                                    </div>--}}

{{--                        </div>--}}
{{--                        <!--/.swiper-wrapper -->--}}
{{--                    </div>--}}
{{--                    <!-- /.swiper -->--}}
{{--                </div>--}}
{{--                <!-- /.swiper-container -->--}}
{{--            </div>--}}
{{--            <!-- /.container-fluid -->--}}
{{--        </section>--}}
{{--        <!-- /section -->--}}
{{--        <section class="wrapper bg-light">--}}
{{--            <div class="container py-10">--}}
{{--                <div class="row gx-md-6 gy-3 gy-md-0">--}}
{{--                    <div class="col-md-8 align-self-center text-center text-md-start navigation">--}}
{{--                                            <a href="" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i class="uil uil-arrow-left"></i> Prev Post</a>--}}
{{--                                            <a href="" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0">Next Post <i class="uil uil-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                    <!--/column -->--}}
{{--                    <aside class="sidebar text-center text-md-end">--}}
{{--                        <div class="dropdown share-dropdown btn-group">--}}
{{--                            <button class="btn btn-lg btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="uil uil-phone"></i> Contact Us </button>--}}

{{--                        </div>--}}
{{--                        <!--/.share-dropdown -->--}}
{{--                    </aside>--}}
{{--                    <!-- /column .sidebar -->--}}
{{--                </div>--}}
{{--                <!--/.row -->--}}
{{--            </div>--}}
{{--            <!-- /.container -->--}}
{{--        </section>--}}
        <!-- /section -->
    </div>
@endsection
