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
                    <li><a class="sidebar-header" href="#"><i data-feather="package"></i><span>Colis</span></a>
                    </li>
                    <li><a class="sidebar-header" href="{{route('product.index')}}"><i data-feather="box"></i> <span>Produits</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">

                            <li><a href="{{route('category.index')}}"><i class="fa fa-circle"></i>Catégories</a></li>
                            <li><a href="{{route('product.index')}}"><i class="fa fa-circle"></i>Liste Produits</a></li>
                            <li><a href="{{route('product.create')}}"><i class="fa fa-circle"></i>Ajouter</a></li>
                         
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{route('store.index')}}"><i data-feather="codepen"></i><span>Boutiques</span></a>
                    </li>
                    <li><a class="sidebar-header" href="{{route('brand.index')}}"><i data-feather="droplet"></i><span>Marques</span></a>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Ventes</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#"><i class="fa fa-circle"></i>Commandes</a></li>
                            <li><a href="#"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{route('coupon.index')}}"><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('coupon.index')}}"><i class="fa fa-circle"></i>Liste Coupons</a></li>
                            <li><a href="{{route('coupon.create')}}"><i class="fa fa-circle"></i>Créer Coupon </a></li>
                        </ul>
                    </li>
                    
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Utilisateurs</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list.html.htm"><i class="fa fa-circle"></i>Liste Utilisateurs</a></li>
                            <li><a href="create-user.html.htm"><i class="fa fa-circle"></i>Créer Utilisateur</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendeurs</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="list-vendor.html.htm"><i class="fa fa-circle"></i>Liste Vendeurs</a></li>
                            <li><a href="create-vendors.html.htm"><i class="fa fa-circle"></i>Créer Vendeur</a></li>
                        </ul>
                    </li>
                    
                    <li><a class="sidebar-header" href="reports.html.htm"><i data-feather="message-circle"></i><span>Evaluations</span></a></li>
                    <li><a class="sidebar-header" href=""><i data-feather="map-pin"></i><span>Localisation</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="currency-rates.html.htm"><i class="fa fa-circle"></i>Pays</a></li>
                            <li><a href="taxes.html.htm"><i class="fa fa-circle"></i>Villes</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="reports.html.htm"><i data-feather="search"></i><span>Recherches</span></a></li>
                    <li><a class="sidebar-header" href="reports.html.htm"><i data-feather="phone"></i><span>Contact</span></a></li>
                    <li><a class="sidebar-header" href=""><i data-feather="hash"></i><span>FAQ</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="currency-rates.html.htm"><i class="fa fa-circle"></i>Ajouter</a></li>
                            <li><a href="taxes.html.htm"><i class="fa fa-circle"></i>Liste FAQ</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings"></i><span>Paramètres</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->