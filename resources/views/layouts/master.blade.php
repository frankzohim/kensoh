<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="/assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon/1.png" type="image/x-icon">
    <title>@yield('title')</title>

    <!--Google font-->
    <link href="assets/fonts/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/fonts/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/fontawesome.css">
                  
    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">



</head>
<body >

    @include('layouts.frontoffice.header')
    @yield('content')
    @include('layouts.frontoffice.footer')
    <!-- cookie bar start -->
    <div class="cookie-bar">
        <p>We use cookies to improve our site and your shopping experience. By continuing to browse our site you accept
            our cookie policy.</p>
        <a href="javascript:void(0)" class="btn btn-solid btn-xs">accept</a>
        <a href="javascript:void(0)" class="btn btn-solid btn-xs">decline</a>
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
                                    <div class="offer-content"> <img src="/assets/images/Offer-banner.png" class="img-fluid blur-up lazyload" alt="">
                                        <h2>newsletter</h2>
                                        <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                            <div class="form-group mx-sm-3">
                                                <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                                <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
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
                            <div class="quick-view-img"><img src="/assets/images/pro3/1.jpg" alt="" class="img-fluid blur-up lazyload"></div>
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


    <!-- cart start -->
    <div class="addcart_btm_popup" id="fixed_cart_icon">
        <a href="#" class="fixed_cart">
            <i class="ti-shopping-cart"></i>
        </a>
    </div>
    <!-- cart end -->


    <!-- theme setting -->
    <div class="theme-settings">
        <ul>
            <li class="demo-li">
                <a href="javascript:void(0)" onclick="openSetting()">
                    <div class="setting-sidebar" id="setting-icon">
                        <h5>50+ <br>demo</h5>
                    </div>
                </a>
            </li>
            <li>
                <div class="dark-btn">Dark</div>
            </li>
            <li>
                <div class="rtl-btn">RTL</div>
            </li>
            <li class="input-picker">
                <input id="ColorPicker1" type="color" value="#ff4c3b" name="Background">
            </li>
        </ul>
    </div>
    <div class="scroll-setting-box">
        <div id="setting_box" class="setting-box">
            <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
            <div class="setting_box_body">
                <div onclick="closeSetting()">
                    <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back
                    </div>
                </div>
                <div class="setting-body">
                    <div class="setting-title">
                        <div>
                            <img src="/assets/images/icon/logo.png" class="img-fluid" alt="">
                            <h3>50+ <span>demos</span> <br> suit for any type of online store.</h3>
                        </div>
                    </div>
                    <div class="setting-contant">
                        <div class="row demo-section">
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="gradient.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/gradient.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="gradient.html.htm" class="demo-text">
                                        <h4>gradient<h4>
                                    </h4></h4></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="index.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/fashion.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="index.html.htm" class="demo-text">
                                        <h4>fashion</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-2.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/fashion-2.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-2.html.htm" class="demo-text">
                                        <h4>fashion 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-3.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/fashion-3.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-3.html.htm" class="demo-text">
                                        <h4>fashion 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-4.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/fashion-4.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-4.html.htm" class="demo-text">
                                        <h4>fashion 4</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-5.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/fashion-5.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-5.html.htm" class="demo-text">
                                        <h4>fashion 5</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-6.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/fashion-6.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-6.html.htm" class="demo-text">
                                        <h4>fashion 6</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="fashion-7.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/fashion-7.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="fashion-7.html.htm" class="demo-text">
                                        <h4>fashion 7</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="furniture.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/furniture.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="furniture.html.htm" class="demo-text">
                                        <h4>furniture</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="furniture-2.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/furniture-2.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="furniture-2.html.htm" class="demo-text">
                                        <h4>furniture 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="furniture-3.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/furniture-dark.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="furniture-3.html.htm" class="demo-text">
                                        <h4>furniture dark</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="electronic-1.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/electronics.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="electronic-1.html.htm" class="demo-text">
                                        <h4>electronics</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="electronic-2.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/electronics-2.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="electronic-2.html.htm" class="demo-text">
                                        <h4>electronics 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="electronic-3.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/electronics-3.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="electronic-3.html.htm" class="demo-text">
                                        <h4>electronics 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marketplace-demo.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/marketplace.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marketplace-demo.html.htm" class="demo-text">
                                        <h4>marketplace</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marketplace-demo-2.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/marketplace-2.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marketplace-demo-2.html.htm" class="demo-text">
                                        <h4>marketplace 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marketplace-demo-3.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/marketplace-3.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marketplace-demo-3.html.htm" class="demo-text">
                                        <h4>marketplace 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marketplace-demo-4.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/marketplace-4.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marketplace-demo-4.html.htm" class="demo-text">
                                        <h4>marketplace 4</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="vegetables.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/vegetables.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="vegetables.html.htm" class="demo-text">
                                        <h4>vegetables</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="vegetables-2.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/vegetables-2.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="vegetables-2.html.htm" class="demo-text">
                                        <h4>vegetables 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="vegetables-3.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/vegetables-3.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="vegetables-3.html.htm" class="demo-text">
                                        <h4>vegetables 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="jewellery.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/jewellery.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="jewellery.html.htm" class="demo-text">
                                        <h4>jewellery</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="jewellery-2.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/jewellery-2.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="jewellery-2.html.htm" class="demo-text">
                                        <h4>jewellery 2</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="jewellery-3.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/jewellery-3.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="jewellery-3.html.htm" class="demo-text">
                                        <h4>jewellery 3</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="bags.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/bag.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="bags.html.htm" class="demo-text">
                                        <h4>bag</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="watch.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/watch.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="watch.html.htm" class="demo-text">
                                        <h4>watch</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="medical.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/medical.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="medical.html.htm" class="demo-text">
                                        <h4>medical</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="perfume.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/perfume.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="perfume.html.htm" class="demo-text">
                                        <h4>perfume</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="yoga.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/yoga.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="yoga.html.htm" class="demo-text">
                                        <h4>yoga</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="christmas.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/christmas.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="christmas.html.htm" class="demo-text">
                                        <h4>christmas</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="bicycle.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/bicycle.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="bicycle.html.htm" class="demo-text">
                                        <h4>bicycle</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="marijuana.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/marijuana.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="marijuana.html.htm" class="demo-text">
                                        <h4>marijuana</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="gym-product.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/gym.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="gym-product.html.htm" class="demo-text">
                                        <h4>gym</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="tools.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/tools.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="tools.html.htm" class="demo-text">
                                        <h4>tools</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="shoes.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/shoes.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="shoes.html.htm" class="demo-text">
                                        <h4>shoes</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="books.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/books.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="books.html.htm" class="demo-text">
                                        <h4>books</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="kids.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/kids.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="kids.html.htm" class="demo-text">
                                        <h4>kids</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="game.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/game.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="game.html.htm" class="demo-text">
                                        <h4>game</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="beauty.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/beauty.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="beauty.html.htm" class="demo-text">
                                        <h4>beauty</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="left_sidebar-demo.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/left-sidebar.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="left_sidebar-demo.html.htm" class="demo-text">
                                        <h4>left sidebar</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="video-slider.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/video-slider.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="video-slider.html.htm" class="demo-text">
                                        <h4>video slider</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="metro.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/metro.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="metro.html.htm" class="demo-text">
                                        <h4>metro</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="goggles.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/goggles.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="goggles.html.htm" class="demo-text">
                                        <h4>goggles</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="flower.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/flower.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="flower.html.htm" class="demo-text">
                                        <h4>flower</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="light.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/light.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="light.html.htm" class="demo-text">
                                        <h4>light</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="nursery.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/nursery.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="nursery.html.htm" class="demo-text">
                                        <h4>nursery</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="pets.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/pets.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="pets.html.htm" class="demo-text">
                                        <h4>pets</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="video.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/video.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="video.html.htm" class="demo-text">
                                        <h4>video</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="lookbook-demo.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/lookbook.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="lookbook-demo.html.htm" class="demo-text">
                                        <h4>lookbook</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="full-page.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/full-page.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="full-page.html.htm" class="demo-text">
                                        <h4>full page</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="instagram-shop.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/instagram.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="instagram-shop.html.htm" class="demo-text">
                                        <h4>instagram</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 text-center demo-effects">
                                <div class="set-position">
                                    <a href="parallax.html.htm" class="layout-container">
                                        <img src="/assets/images/landing-page/demo/parallax.jpg" class="img-fluid bg-img bg-top" alt="">
                                    </a>
                                    <a href="parallax.html.htm" class="demo-text">
                                        <h4>parallax</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- theme setting -->


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
                                        <img src="/assets/images/stop.png" class="stop img-fluid blur-up lazyload me-3" alt="">
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
    <script src="/assets/js/jquery-3.3.1.min.js"></script>

    <!-- fly cart ui jquery-->
    <script src="/assets/js/jquery-ui.min.js"></script>

    <!-- exitintent jquery-->
    <script src="/assets/js/jquery.exitintent.js"></script>
    <script src="/assets/js/exit.js"></script>

    <!-- slick js-->
    <script src="/assets/js/slick.js"></script>

    <!-- menu js-->
    <script src="/assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="/assets/js/lazysizes.min.js"></script>

    <!-- Bootstrap js-->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="/assets/js/bootstrap-notify.min.js"></script>

    <!-- Fly cart js-->
    <script src="/assets/js/fly-cart.js"></script>

    <!-- Theme js-->
    <script src="/assets/js/theme-setting.js"></script>
    <script src="/assets/js/script.js"></script>

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