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
                        <figure class="rounded mx-md-5"><img src="./assets/img/photos/g8.jpg" srcset="./assets/img/photos/g8@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="./assets/img/photos/g9.jpg" srcset="./assets/img/photos/g9@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="./assets/img/photos/g10.jpg" srcset="./assets/img/photos/g10@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-16 text-uppercase text-muted mb-3 mt-md-n5">ABOUT US?</h2>
                <h3 class="display-3 mb-5">What can <b>Shurey</b> say about us?</h3>
                <p class="mb-6">Etiam porta sem malesuada magna mollis euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas sed.</p>
                <div class="row gy-8">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/share.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Our Mission</h4>
                                <p class="mb-0">Curabitur blandit lacus porttitor ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/partnership.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-primary me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Our Values</h4>
                                <p class="mb-0">Curabitur blandit lacus porttitor ridiculus mus.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
    </section>


@endsection
