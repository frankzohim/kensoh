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
                    <li><a class="sidebar-header" href="index.html.htm"><i data-feather="home"></i><span>Tableau de bord</span></a></li>
                    <li><a class="sidebar-header" href="invoice.html.htm"><i data-feather="package"></i><span>Colis</span></a>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Produits</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">

                            <li><a href="category.html.htm"><i class="fa fa-circle"></i>Catégories</a></li>
                            <li><a href="category-sub.html.htm"><i class="fa fa-circle"></i>Liste Produits</a></li>
                            <li><a href="add-product.html.htm"><i class="fa fa-circle"></i>Ajouter</a></li>
                         
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{route('store.index')}}"><i data-feather="codepen"></i><span>Boutiques</span></a>
                    </li>
                    <li><a class="sidebar-header" href="{{route('brand.index')}}"><i data-feather="droplet"></i><span>Marques</span></a>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Ventes</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.html.htm"><i class="fa fa-circle"></i>Commandes</a></li>
                            <li><a href="transactions.html.htm"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="coupon-list.html.htm"><i class="fa fa-circle"></i>Liste Coupons</a></li>
                            <li><a href="coupon-create.html.htm"><i class="fa fa-circle"></i>Créer Coupon </a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="media.html.htm"><i data-feather="camera"></i><span>Media</span></a></li>
                    
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