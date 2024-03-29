@extends('layout.main')

@section('content')

    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">

            @include('fragments.navbar')

        </header>

        <section class="wrapper bg-dark text-white" style="background-color: #21262c !important ">
            <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
                <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                        <h1 class="display-1 text-white mb-3">Contact</h1>
                        <p class="lead px-xl-10 px-xxl-10">Avez-vous des questions? Contactez-nous depuis notre formulaire de contact et nous vous répondrons sous peu.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col mt-n19 mb-16">
                        <div class="card shadow-lg">
                            <div class="row gx-0">
                                <div class="col-lg-12">
                                    <div class="p-10 p-md-11 p-lg-13">
                                        <div class="row">
                                            <div class="col-xl-10 mx-auto">
                                                <div class="row gy-10 gx-lg-8 gx-xl-12">
                                                    <div class="col-lg-8">
                                                        @if(session('success'))
                                                            <div class="alert alert-success">
                                                                {{ session('success') }}
                                                            </div>
                                                        @endif

                                                        <form class="contact-form" action="{{ route('contact.form') }}" method="post">
                                                            @csrf
                                                            <div class="messages"></div>
                                                            <div class="row gx-4">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-4">
                                                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                                                        <label for="form_name">Prénom *</label>
                                                                        <div class="valid-feedback"> Looks good! </div>
                                                                        <div class="invalid-feedback"> Please enter your first name. </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /column -->
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-4">
                                                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                                                                        <label for="form_lastname">Nom de famille *</label>
                                                                        <div class="valid-feedback"> Looks good! </div>
                                                                        <div class="invalid-feedback"> Please enter your last name. </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /column -->
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-4">
                                                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                                                        <label for="form_email">Email *</label>
                                                                        <div class="valid-feedback"> Looks good! </div>
                                                                        <div class="invalid-feedback"> Please provide a valid email address. </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /column -->
                                                                <div class="col-md-6">
                                                                    <div class="form-select-wrapper mb-4">
                                                                        <select class="form-select" id="form-select" name="service" required>
                                                                            <option selected disabled value="">Sélectionnez un service</option>
                                                                            <option value="Web Design">Web Design</option>
                                                                            <option value="E-Commerce">E-Commerce</option>
                                                                            <option value="Digital Marketing">Digital Marketing</option>
                                                                            <option value="ERP Software">ERP Software</option>
                                                                            <option value="Copywriting">Copywriting</option>
                                                                            <option value="Design">Design</option>
                                                                        </select>
                                                                        <div class="valid-feedback"> Looks good! </div>
                                                                        <div class="invalid-feedback"> Please select a department. </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /column -->
                                                                <div class="col-12">
                                                                    <div class="form-floating mb-4">
                                                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                                                        <label for="form_message">Message *</label>
                                                                        <div class="valid-feedback"> Looks good! </div>
                                                                        <div class="invalid-feedback"> Please enter your messsage. </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /column -->
                                                                <div class="col-12">
                                                                    <div class="form-check mb-4">
                                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                                        <label class="form-check-label" for="invalidCheck"> J'accepte les<a href="{{route('terms-and-conditions')}}" class="hover"> termes et conditions</a>. </label>
                                                                        <div class="invalid-feedback"> Vous devez être d'accord avant de soumettre. </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /column -->
                                                                <div class="col-12">
                                                                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Envoyer le message">
                                                                    <p class="text-muted"><strong>*</strong>Ces champs sont obligatoires.</p>
                                                                </div>
                                                                <!-- /column -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </form>
                                                        <!-- /form -->

{{--                                                        <form action="{{ route('send.contact.form') }}" method="post">--}}
{{--                                                            @csrf--}}
{{--                                                            <label for="message">Message:</label><br>--}}
{{--                                                            <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>--}}
{{--                                                            <input type="submit" value="Send Email">--}}
{{--                                                        </form>--}}

                                                    </div>
                                                    <!--/column -->
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1">Expert des ventes</h5>
                                                                <address>Vincent Gaessler</address>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1">Numéro de téléphone</h5>
                                                                <p>+359 893 342 912</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <div>
                                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                                            </div>
                                                            <div>
                                                                <h5 class="mb-1">E-mail</h5>
                                                                <p class="mb-0"><a href="mailto:office@dimler.fr" class="link-body">office@dimler.fr</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/column -->
                                                </div>
                                                <!--/.row -->
                                            </div>
                                            <!-- /column -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!--/div -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </section>
{{--        <!-- /section -->--}}
{{--        <section class="wrapper bg-light">--}}
{{--            <div class="map">--}}
{{--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str" style="width:100%; height: 500px; border:0" allowfullscreen></iframe>--}}
{{--            </div>--}}
{{--            <!-- /.map -->--}}
{{--        </section>--}}
{{--        <!-- /section -->--}}


@endsection

