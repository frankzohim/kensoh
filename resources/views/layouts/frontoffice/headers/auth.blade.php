<!-- loader start -->
<div class="loader_skeleton">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li><i class="fa fa-home" aria-hidden="true"></i> Bienvenue sur Kensoh</li>
								<li>
									<form class="form-inline search-form">
										<div class="form-group">
											<i class="fa fa-search" aria-hidden="true"></i> <input class="fa fa-search" class="form-control-plaintext" type="search" placeholder="Rechercher.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
										</div>
									</form>
								</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        	<ul class="header-dropdown">
								
								<li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
									Mon Compte
									<ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
										<li><a href="#"><i data-feather="user"></i>Editer le profil</a></li>

										<form method="POST" action="{{ route('logout') }}" id="logout-form">
										@csrf


									</form>
										<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>Déconnexion</a></li>
									</ul>
								</li>
							</ul>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="navbar">
                                    <a href="javascript:void(0)">
                                        <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="{{route('homepage')}}"><img src="/assets/frontend/images/icon/logo.png" class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                            </li>
                                           <li><a href="{{route('homepage')}}">Accueil</a></li>
                                        <li><a href="{{ route('about') }}">a propos<div class="lable-nav">new</div></a></li>
                                        <li>
                                            <a href="{{ route('shop') }}">Boutique</a>

                                        </li>
                                        <li><a href=" {{ route('vendor') }} ">Devenir Vendeur</a></li>
                                        <li><a href="{{ route('packages.index') }}">Colis</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <div class="icon-nav d-none d-sm-block">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img src="/assets/frontend/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="home-slider">
            <div class="home"></div>
        </div>
        <section class="collection-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container section-b-space">
            <div class="row section-t-space">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="no-slider row">
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
							<li><i class="fa fa-home" aria-hidden="true"></i> Bienvenue sur Kensoh</li>
								<li>

									<form class="form-inline search-form">
										<div class="form-group">
											<i class="fa fa-search" aria-hidden="true"></i> <input class="fa fa-search" class="form-control-plaintext" type="search" placeholder="Rechercher.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
										</div>
									</form>
								</li>
                            </ul>
                        </div>
                    </div>
						<div class="col-lg-6 text-end">
							<ul class="header-dropdown">

								<li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
									Mon Compte
									<ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
										<li><a href="#"><i data-feather="user"></i>Editer le profil</a></li>
										<li><a href="{{route('dashboard')}}"><i data-feather="home"></i>Tableau de Bord</a></li>
										<form method="POST" action="{{ route('logout') }}" id="logout-form">
										@csrf


									</form>
										<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>Déconnexion</a></li>
									</ul>
								</li>
							</ul>
						</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openNav()">
                                    <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            @foreach ($categories as $categories )
                                            <li> <a href="{{route('categories.product', $categories->id)}}">{{$categories->name}}</a>
                                                <ul>
                                                    <li><a href="#">shopper bags</a></li>
                                                    <li><a href="#">laptop bags</a></li>
                                                    <li><a href="#">clutches</a></li>
                                                    <li> <a href="#">purses</a>
                                                        <ul>
                                                            <li><a href="#">purses</a></li>
                                                            <li><a href="#">wallets</a></li>
                                                            <li><a href="#">leathers</a></li>
                                                            <li><a href="#">satchels</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="brand-logo">
                                <a href="{{route('homepage')}}"><img src="/assets/frontend/images/icon/logo.png" class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                        </li>
                                        <li><a href="{{route('homepage')}}">Accueil</a></li>
                                        <li><a href="{{route('about')}}">a propos<div class="lable-nav">new</div></a></li>
                                        <li>
                                            <a href="{{route('shop')}}">Boutique</a>

                                        </li>
                                        <li><a href="{{route('vendor')}}">Devenir Vendeur</a></li>
                                        <li><a href="{{ route('packages.index') }}">Colis</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="/assets/frontend/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form action="{{route('search.findauth')}}" method="GET">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input type="text"  class="form-control" id="exampleInputPassword1" placeholder="Rechercher un produit" name="str">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
