<nav class="navbar navbar-expand-lg classic navbar-dark navbar-bg-dark">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="{{url('/')}}">
                <img src="{{asset('/assets/img/logo-newshade.png')}}" srcset="{{asset('/assets/img/logo-newshade.png')}}" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <a href="{{url('/')}}"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{url("/")}}">Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="{{url("/services/web-design")}}">Web Design</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="{{url("/services/e-commerce")}}">E-Commerce</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="{{url("/services/digital-marketing")}}">Digital Marketing</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="{{url("/services/erp")}}">ERP Software</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="{{url("/services/copywriting")}}">Copywriting</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="{{url("/services/design")}}">Design</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url("/about-us")}}">About Us</a></li>
                </ul>
                <!-- /.navbar-nav -->

            </div>
            <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">

                <li class="nav-item d-none d-md-block">
                    <a href="{{route('contact-us')}}" class="btn btn-sm btn-primary rounded-pill">Contact Us</a>
                </li>
                <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->
<div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
    <div class="offcanvas-header">
        <a href="./index.html"><img src="./assets/img/logo-newshade.png" srcset="./assets/img/logo-newshade.png 2x" alt="" /></a>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

</div>
<!-- /.offcanvas -->
<!-- /.navbar -->
