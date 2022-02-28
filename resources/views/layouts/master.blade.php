<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="/assets/frontend/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/frontend/images/favicon/1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>

    <!--Google font-->
    <link href="assets/frontend/fonts/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/frontend/fonts/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/vendors/fontawesome.css">
                  
    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/vendors/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/vendors/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/vendors/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/vendors/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/style.css">



</head>
<body >

    @include('layouts.frontoffice.header')
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


    <!--modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="offer-content"> <img src="/assets/frontend/images/Offer-banner.png" class="img-fluid blur-up lazyload" alt="">
                                        <h2>newsletter</h2>
                                        <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                            <div class="form-group mx-sm-3">
                                                <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Entrer votre Email" required="required">
                                                <button type="submit" class="btn btn-solid" id="mc-submit">S'abonner</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal popup end-->


    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="/assets/frontend/images/pro3/1.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>Women Pink Shirt</h2>
                                <h3>$32.96</h3>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="javascript:void(0)">s</a></li>
                                            <li><a href="javascript:void(0)">m</a></li>
                                            <li><a href="javascript:void(0)">l</a></li>
                                            <li><a href="javascript:void(0)">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a href="#" class="btn btn-solid">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->


    <!-- exit modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal exit-modal" id="exit_popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">
                                        <img src="/assets/frontend/images/stop.png" class="stop img-fluid blur-up lazyload me-3" alt="">
                                        <div class="media-body text-start align-self-center">
                                            <div>
                                                <h2>wait!</h2>
                                                <h4>We want to give you
                                                    <b>10% discount</b>
                                                    <span>for your first order</span>
                                                </h4>
                                                <h5>Use discount code at checkout</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="/assets/frontend/js/jquery-3.3.1.min.js"></script>

    <!-- fly cart ui jquery-->
    <script src="/assets/frontend/js/jquery-ui.min.js"></script>

    <!-- exitintent jquery-->
    <script src="/assets/frontend/js/jquery.exitintent.js"></script>
    <script src="/assets/frontend/js/exit.js"></script>

    <!-- slick js-->
    <script src="/assets/frontend/js/slick.js"></script>

    <!-- menu js-->
    <script src="/assets/frontend/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="/assets/frontend/js/lazysizes.min.js"></script>

    <!-- Bootstrap js-->
    <script src="/assets/frontend/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="/assets/frontend/js/bootstrap-notify.min.js"></script>

    <!-- Fly cart js-->
    <script src="/assets/frontend/js/fly-cart.js"></script>

    <!-- Theme js-->
    <script src="/assets/frontend/js/theme-setting.js"></script>
    <script src="/assets/frontend/js/script.js"></script>

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

</body>
</html>