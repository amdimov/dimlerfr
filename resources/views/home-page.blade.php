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
                        <h1 class="display-1 text-white mb-4">Votre partenaire <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="Web Design,E-Commerce,Digital Marketing,ERP Software"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
                        <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">Vos idées, votre site web, notre travail. Votre entreprise doit se démarquer en ligne ? Laissez-nous vous aider à grander avec la meilleure apparence numérique,
                            dédiée pour vous et vos moyens financiers.</p>
                        <div>
                            <a href="{{route('contact-us')}}" class="btn btn-lg btn-primary rounded">Boostez mon entreprise</a>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                        <div class="position-relative">
                            <figure class="rounded shadow-lg"><img src="{{asset('/assets/img/homepage/slider-1.jpg')}}" srcset="{{asset('/assets/img/homepage/slider-1.jpg')}}" alt=""></figure>
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
                                <figure class="rounded"><img src="{{asset('/assets/img/about-us/about-us-1.jpg')}}" srcset="{{asset('/assets/img/about-us/about-us-1.jpg')}}" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-end">
                                <figure class="rounded"><img src="{{asset('/assets/img/about-us/about-us-3.jpg')}}" srcset="{{asset('/assets/img/about-us/about-us-3.jpg')}}" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-12">
                                <figure class="rounded mx-md-5"><img src="{{asset('/assets/img/about-us/about-us-together.jpg')}}" srcset="{{asset('/assets/img/about-us/about-us-together.jpg')}}" alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h2 class="fs-16 text-uppercase text-primary mb-3">Qui sommes-nous?</h2>
                        <h3 class="display-3 mb-5">A l’origine: Deux beaux-frères, deux professionnels pour vous.</h3>
                        <p class="mb-6">
                            La société Dimler a été fondée par deux beaux-frères, deux amis:<br>

                            Vincent, expert en marketing, français.<br>
                            Aleksander, programmeur professionnel, originaire de Bulgarie.
                            Unis par notre passion commune pour le numérique, nous avons créé cette entreprise avec le rêve de rendre les solutions numériques accessibles à tous. Notre mission : offrir des services de qualité, à moindre coût.<br>

                            Nous croyons à l’innovation abordale et nous nous engageons à façonner votre avenir numérique le plus vite possible, le mieux possible, le moins cher possible.<br>

                        </p>
                        <div class="row align-items-center counter-wrapper gy-6">
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">99.7%</h3>
                                <h5 class="mb-0">Satisfaction client</h5>
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">12x</h3>
                                <h5 class="mb-0">Croissance des revenus</h5>
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
                                <h3>Notre Vision</h3>
                                <p class="mb-2">
                                    Économie sans compromis:
                                    Nous nous engageons à proposer la solution numérique, abordable.
                                </p>
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
                                <h3>Notre Mission</h3>
                                <p class="mb-2">
                                    Qualité accessible:
                                    Nous nous efforçons constamment de dépasser les attentes en terme de qualité, tout en aidant nos clients à s’améliorer.
                                </p>
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
                                <h3>Nos Valeurs</h3>
                                <p class="mb-2">
                                    Personnalisation et rapidité:
                                    Chaque site internet, chaque service est conçu avec une approche dédiée à votre marché et faites pour répondre à 100% de vos besoins.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="text-center"><a href="{{route('about-us')}}" class="btn btn-primary">À propos de nous</a></div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->


        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row text-center">
                    <div class="col-xl-10 mx-auto">
                        <h2 class="fs-15 text-uppercase text-primary mb-3">Nos services</h2>
                        <h3 class="display-4 mb-10 px-xxl-15">De quoi avez-vous besoin? Sélectionnez ce qui vous intéresse le plus, nous nous en occuperons.</h3>
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
                                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Petites entreprises</span>
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
                                    <span class="badge bg-pale-aqua text-aqua rounded py-1 mb-2">Vendez vos produits en ligne</span>
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
                                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Promouvoir votre entreprise</span>
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
                                    <span class="badge bg-pale-violet text-violet rounded py-1 mb-2">Travail opérationnel</span>
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
                                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Création de contenu</span>
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
                                    <span class="badge bg-pale-blue text-blue rounded py-1 mb-2">Visuel</span>
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
                        <h2 class="display-6 mb-3">Vous n’êtes pas sûr de ce dont vous avez besoin ?</h2>
                        <p class="lead mb-5 px-md-16 px-lg-3">Pas de soucis. Nos experts peuvent vous conseiller en fonction de vos besoins et de votre marché.</p>
                        <a href="{{route('contact-us')}}" class="btn btn-primary rounded-pill">Demande de contact</a>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->








@endsection
