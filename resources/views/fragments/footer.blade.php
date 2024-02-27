<footer class="bg-light" style="border-top: 3px var(--bs-dark) solid">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                    <p class="mb-4">© 2024 Dimler. <br class="d-none d-lg-block" />Tous droits réservés</p>
{{--                    <nav class="nav social ">--}}
{{--                        <a href="#"><i class="uil uil-twitter"></i></a>--}}
{{--                        <a href="#"><i class="uil uil-facebook-f"></i></a>--}}
{{--                        <a href="#"><i class="uil uil-dribbble"></i></a>--}}
{{--                        <a href="#"><i class="uil uil-instagram"></i></a>--}}
{{--                        <a href="#"><i class="uil uil-youtube"></i></a>--}}
{{--                    </nav>--}}
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">Contacts</h4>
                    <p>Vincent Gaessler</p>
                    <a href="mailto:office@dimler.fr" class="link-body">office@dimler.fr</a><br /> +359 893 342 912
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">En savoir plus</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="{{route('about-us')}}">A Propos</a></li>
                        <li><a href="{{route('contact-us')}}">Contact</a></li>
                        <li><a href="{{route('web-design')}}">Web Design</a></li>
                        <li><a href="{{route('e-commerce')}}">E-Ecommerce</a></li>
                        <li><a href="{{route('digital-marketing')}}">Digital Marketing</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">Notre Newsletter</h4>
                    <p class="mb-5">Abonnez-vous gratuitement à notre newsletter pour recevoir nos promotions et nouvelles offres.</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form method="post" id="mc-embedded-subscribe-form2" action="{{ route('newsletter') }}" name="mc-embedded-subscribe-form" class="validate ">
                                @csrf
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="email" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Adresse Email</label>
                                        <input type="submit" value="Entrer" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                                    </div>
                                    <div id="mce-responses2" class="clear">
                                        <div class="response" id="mce-error-response2" style="display:none"></div>
                                        <div class="response" id="mce-success-response2" style="display:none"></div>
                                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
