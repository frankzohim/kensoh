<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<!-- Stillforce Technologies -->
<head>
    <!-- PAGE TITLE -->
    <title>@yield('title')</title>

    <!-- META-DATA -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
     <script src="{{ asset('js/app.js') }}"></script>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/frontend/images/favicon.ico">

    <!-- CSS:: FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS:: DATEPICKER -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/plugins/datepicker/datepicker.css">

    <!-- CSS:: ANIMATE -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/plugins/animate/animate.css">


    <!-- CSS:: MAIN -->
    <link rel="stylesheet" href="/frontend/">
    <link rel="stylesheet" type="text/css" href="/frontend/css/main.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/page.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/main-box.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/main-assistant.css">
    <link rel="stylesheet" href="{{ asset('intl-tel-input-master') }}/build/css/intlTelInput.css">

    <link rel="stylesheet" type="text/css" id="r-color-roller" href="/frontend/color-files/color-08.css">

    {{--Modification 11/19/2020--}}
    @yield('another-style')
	 
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
     <style>
        .floating-whatsapp{
            font-size: 50px;
            position: fixed;
            right: 20px;
            bottom: 90px;
			z-index: 2147483647;
            color:green
        }
    </style>
</head>
<body >

<a href="http://wa.link/q7wxrt"><i class="fa fa-whatsapp floating-whatsapp"></i></a>
<div class="r-wrapper">
@guest
		@include('layouts.frontoffice.headers.guest')
	@endguest
	@auth
		@include('layouts.frontoffice.headers.auth')
	@endauth
    @yield('content')
    @include('layouts.frontoffice.footer')
</div>

<div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>

<!-- JQUERY:: JQUERY.JS -->
<script src="/frontend/js/jquery.min.js"></script>

<!-- JQUERY:: APPEAR.JS -->
<script src="/frontend/js/plugins/appear/appear.js"></script>

<!-- JQUERY:: COUNTER.JS -->
<script src="/frontend/js/plugins/counter/jquery.easing.min.js"></script>
<script src="/frontend/js/plugins/counter/counter.min.js"></script>

<!-- JQUERY:: BOOTSTRAP.JS -->
<script src="/frontend/js/tether.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>

<!-- JQUERY:: DATEPICKER.JS -->
<script src="/frontend/js/plugins/datepicker/moment-with-locales.min.js"></script>
<script src="/frontend/js/plugins/datepicker/moment-timezone.js"></script>
<script src="/frontend/js/plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- JQUERY:: PLUGINS -->
<script src="/frontend/js/plugins/owl/owl.carousel.min.js"></script>
<script src="/frontend/js/plugins/lightcase/lightcase.js"></script>


<!-- JQUERY:: MAP -->
<script src="/frontend/js/map.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&amp;callback=initMap"></script>

<!-- JQUERY:: CUSTOM.JS -->
<script src="/frontend/js/custom.js"></script>

{{--Modification 11/19/2020--}}
@yield('another-script')
@yield('javascript')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/603a79fc1c1c2a130d631abc/1evi6p11f';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
