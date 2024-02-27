<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('fragments.head')

<body>
    @yield('content')

    @include('fragments.footer')
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>
</body>

</html>
