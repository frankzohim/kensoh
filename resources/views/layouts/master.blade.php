<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Kensoh">
    <meta name="keywords" content="Kensoh">
    <meta name="author" content="Kensoh">
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon/1.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon/1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>

    <!--Google font-->
    <link href="{{ asset('assets/frontend/fonts/css?family=Lato:300,400,700,900') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{ asset('assets/frontend/fonts/css2?family=Yellowtail&display=swap') }}" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendors/fontawesome.css') }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendors/slick-theme.css') }}">

        <!-- Datatable css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors/datatables.css') }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendors/animate.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendors/themify-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">

    <!-- intel css -->
    <link rel="stylesheet" href="{{ asset('intl-tel-input-master/build/css/intlTelInput.css') }}">

    <style>
        .floating-whatsapp{
            font-weight: bold;
            font-size: 70px;
            position: fixed;
            left: 20px;
            bottom: 90px;
			z-index: 2147483647;
            color:green
        }
    </style>

</head>
<body >
    <a href="https://wa.me/4917624604129">
        <i class="fa fa-whatsapp floating-whatsapp">
        </i>
    </a>
	@guest
		@include('layouts.frontoffice.headers.guest')
	@endguest
	@auth
		@include('layouts.frontoffice.headers.auth')
	@endauth
    @yield('content')
    @include('layouts.frontoffice.footer')

    <!-- cookie bar start -->
    <div class="cookie-bar">
        <p>Nous utilisons des cookies pour améliorer notre site et votre expérience d'achat. En poursuivant votre navigation sur notre site vous acceptez
            notre politique en matière de cookies.</p>
        <a href="javascript:void(0)" class="btn btn-solid btn-xs">accepter</a>
        <a href="javascript:void(0)" class="btn btn-solid btn-xs">refuser</a>
    </div>
    <!-- cookie bar end -->





    <!-- Add to cart modal popup end-->


    <!-- facebook chat section start -->
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src =
                'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution="setup_tool" page_id="2123438804574660" theme_color="#0084ff" logged_in_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?" logged_out_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?">
    </div>
    <!-- facebook chat section end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{ asset('assets/frontend/js/jquery-3.3.1.min.js') }}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>

    <!-- exitintent jquery-->
    <script src="{{ asset('assets/frontend/js/jquery.exitintent.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/exit.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('assets/frontend/js/slick.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('assets/frontend/js/menu.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('assets/frontend/js/lazysizes.min.js') }}"></script>

     <!-- sticky cart bottom js-->
     <script src="../assets/js/sticky-cart-bottom.js"></script>

     <!-- timer js-->
    <script src="{{ asset('assets/frontend/js/timer.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('assets/frontend/js/bootstrap-notify.min.js') }}"></script>

      <!-- Zoom js-->
      <script src="{{ asset('assets/frontend/js/jquery.elevatezoom.js') }}"></script>

    <!-- Fly cart js-->
    <script src="{{ asset('assets/frontend/js/fly-cart.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('assets/frontend/js/theme-setting.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>

    	<!-- Datatables js-->
	<script src="{{ asset('assets/backend/js/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/backend/js/datatables/custom-basic.js') }}"></script>

    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/62670ddf7b967b11798c7714/1g1h8si10';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    @livewireScripts
    <!--End of Tawk.to Script-->
</body>
</html>
