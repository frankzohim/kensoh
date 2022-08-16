   <!-- Page Sidebar Start-->
   <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="{{route('dashboard')}}"><img class="blur-up lazyloaded" src="/assets/backend/images/dashboard/logo.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="/assets/backend/images/dashboard/appolinaire.jpg" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">{{auth()->user()->name}}</h6>
                    <p>promoteur.</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="{{route('dashboard')}}"><i data-feather="home"></i><span>Tableau de bord</span></a></li>
                    <li><a class="sidebar-header" href="{{route('homepage')}}" target="_blank"><i data-feather="home"></i><span>Front Office</span></a></li>
                    <li><a class="sidebar-header" href="{{ route('packages.index') }}"><i data-feather="package"></i><span>Colis</span></a>
                    </li>
                    <li><a class="sidebar-header" href="{{route('product.index')}}"><i data-feather="box"></i> <span>Produits</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">

                            <li><a href="{{route('category.index')}}"><i class="fa fa-circle"></i>Catégories</a></li>
                             <li><a  href="{{route('brand.index')}}"><i class="fa fa-circle"></i><span>Marques</span></a>
                            </li>
                            <li><a href="{{route('product.index')}}"><i class="fa fa-circle"></i>Liste Produits</a></li>
                            <li><a href="{{route('product.create')}}"><i class="fa fa-circle"></i>Ajouter</a></li>

                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{route('store.index')}}"><i data-feather="codepen"></i><span>Boutiques</span></a>
                    </li>
                   
                    
                    <li><a class="sidebar-header" href="{{route('coupon.index')}}"><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('coupon.index')}}"><i class="fa fa-circle"></i>Liste Coupons</a></li>
                            <li><a href="{{route('coupon.create')}}"><i class="fa fa-circle"></i>Créer Coupon </a></li>
                        </ul>
                    </li>


                    <li><a class="sidebar-header" href="{{route('user.index')}}"><i data-feather="user-plus"></i><span>Utilisateurs</span><i class="fa fa-angle-right pull-right"></i></a>

                    
                    <li>
                        <a class="sidebar-header" href="{{ route('review.index') }}">
                            <i data-feather="message-circle">
                            </i>
                            <span>
                                Evaluations
                            </span>
                        </a>
                    </li>

                    <li><a class="sidebar-header" href=""><i data-feather="map-pin"></i><span>Localisation</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('country.index') }}"><i class="fa fa-circle"></i>Pays</a></li>
                            <li><a href="{{ route('town.index') }}"><i class="fa fa-circle"></i>Villes</a></li>
                            <li><a href="{{ route('tracking.index') }}"><i class="fa fa-circle"></i>Tracking</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="reports.html.htm"><i data-feather="phone"></i><span>Contact</span></a></li>
                    <li><a class="sidebar-header" href="{{route('faq.index')}}"><i data-feather="tag"></i><span>faqs</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('faq.create')}}"><i class="fa fa-circle"></i>Ajouter</a></li>
                            <li><a href="{{route('faq.index')}}"><i class="fa fa-circle"></i>Liste FAQ</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-header" href="{{ route('partner.index') }}"><i data-feather="settings"></i><span>Partenaires</span></a>
                    </li>

                    <li><a class="sidebar-header" href="{{ route('blog.index') }}"><i data-feather="settings"></i><span>Blog</span></a>
                    </li>

                    <li><a class="sidebar-header" href=""><i data-feather="settings"></i><span>Paramètres</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
