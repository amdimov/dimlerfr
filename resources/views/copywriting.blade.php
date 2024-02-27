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
                        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Copywriting</h1>
                        <p class="lead fs-lg mb-7">
                            Dans le domaine de la communication numérique, le pouvoir des mots est sans précédent. Chez Dimler, nous proposons des services de rédaction spécialisés qui donnent vie à la voix de votre marque.
                            Chaque mot, chaque phrase doit être l'étincelle qui illumine les yeux de vos clients.
                            Qu'il s'agisse de créer des listes de produits convaincantes, de créer du contenu publicitaire attirant ou de produire des scripts et des montages vidéo attrayants, notre équipe se consacre à fournir un contenu qui résonne auprès de votre public et amplifie votre message.
                        </p>
                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                            <span><a href="{{route('contact-us')}}" class="btn btn-primary rounded me-2">Contact</a></span>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7" data-cue="slideInDown">
                        <figure><img class="w-auto" src={{asset('./assets/img/content/copywriting-cover.jpg x2')}} srcset={{asset('./assets/img/content/copywriting-cover.jpg x2')}} alt="" /></figure>
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
                                <h4>Product Listing</h4>
                                <p class="mb-2">
                                    Nos rédacteurs se spécialisent dans la création de listes de produits détaillées, attrayantes et optimisées pour le référencement.
                                    Nous comprenons l'art de l'écriture persuasive qui non seulement met en valeur les caractéristiques et les avantages de vos produits, mais élève également votre marque et stimule les ventes.
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
                                <h4>Ads Content Creation</h4>
                                <p class="mb-2">
                                    Nous créons des textes publicitaires convaincants qui captent l’attention et inspirent l’action.
                                    Notre objectif est de créer des messages qui trouvent un écho auprès de votre public cible,
                                    en stimulant l'engagement et la conversion sur diverses plateformes, notamment les médias sociaux et les moteurs de recherche.
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
                                <h4>Video Script Writing and Editing</h4>
                                <p class="mb-2">
                                    Dans le paysage numérique actuel, en évolution rapide, le contenu vidéo est roi.
                                    Notre équipe écrit non seulement des scripts vidéo captivants, mais propose également des services de montage vidéo pour garantir que votre contenu visuel est aussi convaincant que l'histoire qu'il raconte.
                                    Des vidéos promotionnelles au contenu éducatif, nous donnons vie à vos idées de manière engageante et efficace.
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
                                    <img style="filter: contrast(150%);" src={{asset('./assets/img/content/copywriting-1.jpg')}} srcset={{asset('./assets/img/content/copywriting-1.jpg')}} alt="" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-1">Gestion des réseaux sociaux</h5>
                                    <p class="from-bottom">Vous avez besoin de quelqu’un pour gérer ou créer vos réseaux sociaux ? Nous avons la solution pour ça.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay overlay-3 overlay-gradient-1 hover-scale rounded">
                                <a>
                                    <img style="filter: contrast(150%);" src={{asset('./assets/img/content/copywriting-2.jpg')}} srcset={{asset('./assets/img/content/copywriting-2.jpg')}} alt="" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-1">Blog</h5>
                                    <p class="from-bottom">Nous pouvons vous aider à écrire vos blogs/newsletter dans votre site internet.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="overlay overlay-3 overlay-gradient-1 hover-scale rounded">
                                <a>
                                    <img style="filter: contrast(150%);" src={{asset('./assets/img/content/copywriting-3.jpg')}} srcset={{asset('./assets/img/content/copywriting-3.jpg')}} alt="" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-1">Liste de produit et description</h5>
                                    <p class="from-bottom"></p>
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

    </div>
@endsection
