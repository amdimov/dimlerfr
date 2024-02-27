@extends('layout.main')

@section('content')

    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">

            @include('fragments.navbar')

        </header>

    <section class="wrapper bg-soft-primary mb-20 ms-15 me-15">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mt-12">
            <div class="col-lg-6">
                <div class="row gx-md-5 gy-5">
                    <div class="col-12">
                        <figure class="rounded mx-md-5"><img src="{{asset('/assets/img/about-us/about-us-1.jpg')}}" srcset="{{asset('/assets/img/about-us/about-us-1.jpg')}}" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="{{asset('/assets/img/about-us/about-us-3.jpg')}}" srcset="{{asset('/assets/img/about-us/about-us-3.jpg')}}" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="{{asset('/assets/img/about-us/about-us-together.jpg')}}" srcset="{{asset('/assets/img/about-us/about-us-together.jpg')}}" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-muted mb-3 mt-md-n5">QUI SOMMES-NOUS?</h2>
                <h3 class="display-3 mb-5">A l’origine: Deux beaux-frères, deux professionnels pour vous.</h3>
                <p class="mb-6">
                    La société Dimler a été fondée par deux beaux-frères, deux amis:
                    Vincent, expert en marketing, français.
                    Aleksander, programmeur professionnel, originaire de Bulgarie. Unis par notre passion commune pour le numérique, nous avons créé cette entreprise avec le rêve de rendre les solutions numériques accessibles à tous. Notre mission : offrir des services de qualité, à moindre coût.
                    Nous croyons à l’innovation abordale et nous nous engageons à façonner votre avenir numérique le plus vite possible, le mieux possible, le moins cher possible.
                </p>
                <div class="row gy-8">
                    <div class="col-md-6">
                        <h3 class="counter counter-lg mb-1">99.7%</h3>
                        <h5 class="mb-0">Satisfaction client</h5>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <h3 class="counter counter-lg mb-1">12x</h3>
                        <h5 class="mb-0">Croissance des revenus</h5>
                    </div>
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
    </section>


@endsection
