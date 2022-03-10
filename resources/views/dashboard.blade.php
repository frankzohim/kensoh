@extends('layouts.app')
@section('title', __('Tableau de bord'))

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Tableau de Bord
                        <small>Kensoh Administration</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-warning card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Gains</span>
                            <h3 class="mb-0">$ <span class="counter">6659</span><small> Ce Mois</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden  widget-cards">
                <div class="bg-secondary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Produits</span>
                            <h3 class="mb-0">$ <span class="counter">9856</span><small> Ce Mois</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-primary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="message-square" class="font-primary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Messages</span>
                            <h3 class="mb-0">$ <span class="counter">893</span><small> Ce Mois</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-danger card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Nouveaux Vendeurs</span>
                            <h3 class="mb-0">$ <span class="counter">45631</span><small> Ce Mois</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 xl-100">
            <div class="card">
                <div class="card-header">
                    <h5>Dernières Commandes</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive latest-order-table">
                        <table class="table table-bordernone">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Total</th>
                                <th scope="col">Mode Paiement</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="digits">$120.00</td>
                                <td class="font-danger">Virement</td>
                                <td class="digits">En Cours</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="digits">$90.00</td>
                                <td class="font-secondary">PayPal</td>
                                <td class="digits">Livré</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="digits">$240.00</td>
                                <td class="font-warning">Cash</td>
                                <td class="digits">Livré</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="digits">$120.00</td>
                                <td class="font-primary">Orange Money</td>
                                <td class="digits">$6523</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="digits">$50.00</td>
                                <td class="font-primary">MTN Mobile Money</td>
                                <td class="digits">Livré</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="order.html.htm" class="btn btn-primary">Voir Toutes les Commandes</a>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head1">
&lt;div class="user-status table-responsive latest-order-table"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
&lt;tr&gt;
    &lt;th scope="col"&gt;Order ID&lt;/th&gt;
    &lt;th scope="col"&gt;Order Total&lt;/th&gt;
    &lt;th scope="col"&gt;Payment Method&lt;/th&gt;
    &lt;th scope="col"&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
    &lt;td&gt;1&lt;/td&gt;
    &lt;td class="digits"&gt;$120.00&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Bank Transfers&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;2&lt;/td&gt;
    &lt;td class="digits"&gt;$90.00&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Ewallets&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;3&lt;/td&gt;
    &lt;td class="digits"&gt;$240.00&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Cash&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;4&lt;/td&gt;
    &lt;td class="digits"&gt;$120.00&lt;/td&gt;
    &lt;td class="font-primary"&gt;Direct Deposit&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;5&lt;/td&gt;
    &lt;td class="digits"&gt;$50.00&lt;/td&gt;
    &lt;td class="font-primary"&gt;Bank Transfers&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
                        </code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card order-graph sales-carousel">
                <div class="card-header">
                    <h6>Total Ventes</h6>
                    <div class="row">
                        <div class="col-6">
                            <div class="small-chartjs">
                                <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-3"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="value-graph">
                                <h3>42% <span><i class="fa fa-angle-up font-primary"></i></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <span>Vente Mois Dernier</span>
                            <h2 class="mb-0">9054</h2>
                            <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                            <h5 class="f-w-600">Ventes brutes d'août</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="bg-primary b-r-8">
                            <div class="small-box">
                                <i data-feather="briefcase"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card order-graph sales-carousel">
                <div class="card-header">
                    <h6>Total Achat</h6>
                    <div class="row">
                        <div class="col-6">
                            <div class="small-chartjs">
                                <div class="flot-chart-placeholder" id="simple-line-chart-sparkline"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="value-graph">
                                <h3>20% <span><i class="fa fa-angle-up font-secondary"></i></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <span>Achat Mensuel</span>
                            <h2 class="mb-0">2154</h2>
                            <p>0.13% <span><i class="fa fa-angle-up"></i></span></p>
                            <h5 class="f-w-600">Achat brut moyen</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="bg-secondary b-r-8">
                            <div class="small-box">
                                <i data-feather="credit-card"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card order-graph sales-carousel">
                <div class="card-header">
                    <h6>Total cash transaction</h6>
                    <div class="row">
                        <div class="col-6">
                            <div class="small-chartjs">
                                <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-2"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="value-graph">
                                <h3>28% <span><i class="fa fa-angle-up font-warning"></i></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <span>Cash disponible</span>
                            <h2 class="mb-0">4672</h2>
                            <p>0.8% <span><i class="fa fa-angle-up"></i></span></p>
                            <h5 class="f-w-600">Détails cash</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="bg-warning b-r-8">
                            <div class="small-box">
                                <i data-feather="shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card order-graph sales-carousel">
                <div class="card-header">
                    <h6>Dépôsits Journaliers</h6>
                    <div class="row">
                        <div class="col-6">
                            <div class="small-chartjs">
                                <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-1"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="value-graph">
                                <h3>75% <span><i class="fa fa-angle-up font-danger"></i></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <span>Dépôt Sécurité</span>
                            <h2 class="mb-0">0782</h2>
                            <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                            <h5 class="f-w-600">Ventes brutes de juin</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="bg-danger b-r-8">
                            <div class="small-box">
                                <i data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 xl-100">
            <div class="card height-equal">
                <div class="card-header">
                    <h5>Retour des marchandises</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive products-table">
                        <table class="table table-bordernone mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Détails</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Status</th>
                                <th scope="col">Prix</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Simply dummy text of the printing</td>
                                <td class="digits">1</td>
                                <td class="font-primary">En Attente</td>
                                <td class="digits">$6523</td>
                            </tr>
                            <tr>
                                <td>Long established</td>
                                <td class="digits">5</td>
                                <td class="font-secondary">Suspendu</td>
                                <td class="digits">$6523</td>
                            </tr>
                            <tr>
                                <td>sometimes by accident</td>
                                <td class="digits">10</td>
                                <td class="font-secondary">Suspendu</td>
                                <td class="digits">$6523</td>
                            </tr>
                            <tr>
                                <td>Classical Latin literature</td>
                                <td class="digits">9</td>
                                <td class="font-primary">Renvoyé</td>
                                <td class="digits">$6523</td>
                            </tr>
                            <tr>
                                <td>keep the site on the Internet</td>
                                <td class="digits">8</td>
                                <td class="font-primary">En Attente</td>
                                <td class="digits">$6523</td>
                            </tr>
                            <tr>
                                <td>Molestiae consequatur</td>
                                <td class="digits">3</td>
                                <td class="font-secondary">Annuler</td>
                                <td class="digits">$6523</td>
                            </tr>
                            <tr>
                                <td>Pain can procure</td>
                                <td class="digits">8</td>
                                <td class="font-primary">Renvoyé</td>
                                <td class="digits">$6523</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head4">
&lt;div class="user-status table-responsive products-table"&gt;
&lt;table class="table table-bordernone mb-0"&gt;
&lt;thead&gt;
&lt;tr&gt;
    &lt;th scope="col"&gt;Details&lt;/th&gt;
    &lt;th scope="col"&gt;Quantity&lt;/th&gt;
    &lt;th scope="col"&gt;Status&lt;/th&gt;
    &lt;th scope="col"&gt;Price&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
    &lt;td&gt;Simply dummy text of the printing&lt;/td&gt;
    &lt;td class="digits"&gt;1&lt;/td&gt;
    &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
    &lt;td class="digits"&gt;$6523&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Long established&lt;/td&gt;
    &lt;td class="digits"&gt;5&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
    &lt;td class="digits"&gt;$6523&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;sometimes by accident&lt;/td&gt;
    &lt;td class="digits"&gt;10&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
    &lt;td class="digits"&gt;$6523&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Classical Latin literature&lt;/td&gt;
    &lt;td class="digits"&gt;9&lt;/td&gt;
    &lt;td class="font-primary"&gt;Return&lt;/td&gt;
    &lt;td class="digits"&gt;$6523&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;keep the site on the Internet&lt;/td&gt;
    &lt;td class="digits"&gt;8&lt;/td&gt;
    &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
    &lt;td class="digits"&gt;$6523&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Molestiae consequatur&lt;/td&gt;
    &lt;td class="digits"&gt;3&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
    &lt;td class="digits"&gt;$6523&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;Pain can procure&lt;/td&gt;
    &lt;td class="digits"&gt;8&lt;/td&gt;
    &lt;td class="font-primary"&gt;Return&lt;/td&gt;
    &lt;td class="digits"&gt;$6523&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
                        </code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Status Ventes</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 xl-50">
                            <div class="order-graph">
                                <h6>Commandes Par Emplacement</h6>
                                <div class="chart-block chart-vertical-center">
                                    <canvas id="myDoughnutGraph"></canvas>
                                </div>
                                <div class="order-graph-bottom">
                                    <div class="media">
                                        <div class="order-color-primary"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Cameroun <span class="pull-right">$157</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-color-secondary"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Kenya <span class="pull-right">$347</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-color-danger"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Nigéria<span class="pull-right">$468</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-color-warning"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Sénégal<span class="pull-right">$742</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-color-success"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Niger <span class="pull-right">$647</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 xl-50">
                            <div class="order-graph sm-order-space">
                                <h6>Ventes Par Emplacement</h6>
                                <div class="peity-chart-dashboard text-center">
                                    <span class="pie-colours-1">4,7,6,5</span>
                                </div>
                                <div class="order-graph-bottom sales-location">
                                    <div class="media">
                                        <div class="order-shape-primary"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 me-0">Allegmane <span class="pull-right">25%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-secondary"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 me-0">Brésil <span class="pull-right">10%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-danger"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 me-0">Angleterre<span class="pull-right">34%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-warning"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 me-0">Australie<span class="pull-right">5%</span></h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="order-shape-success"></div>
                                        <div class="media-body">
                                            <h6 class="mb-0 me-0">Canada <span class="pull-right">25%</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 xl-100">
                            <div class="order-graph xl-space">
                                <h6>Chiffre d'affaires du mois dernier</h6>
                                <div class="ct-4 flot-chart-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="example-head2">&lt;div class="row"&gt;
&lt;div class="col-xl-3 col-sm-6 xl-50"&gt;
&lt;div class="order-graph"&gt;
&lt;h6&gt;Orders By Location&lt;/h6&gt;
&lt;div class="chart-block chart-vertical-center"&gt;
&lt;canvas id="myDoughnutGraph"&gt;&lt;/canvas&gt;
&lt;/div&gt;
&lt;div class="order-graph-bottom"&gt;
&lt;div class="media"&gt;
   &lt;div class="order-color-primary"&gt;&lt;/div&gt;
   &lt;div class="media-body"&gt;
      &lt;h6 class="mb-0"&gt;Saint Lucia &lt;span class="pull-right"&gt;$157&lt;/span&gt;&lt;/h6&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
   &lt;div class="order-color-secondary"&gt;&lt;/div&gt;
   &lt;div class="media-body"&gt;
      &lt;h6 class="mb-0"&gt;Kenya &lt;span class="pull-right"&gt;$347&lt;/span&gt;&lt;/h6&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
   &lt;div class="order-color-danger"&gt;&lt;/div&gt;
   &lt;div class="media-body"&gt;
      &lt;h6 class="mb-0"&gt;Liberia&lt;span class="pull-right"&gt;$468&lt;/span&gt;&lt;/h6&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
   &lt;div class="order-color-warning"&gt;&lt;/div&gt;
   &lt;div class="media-body"&gt;
      &lt;h6 class="mb-0"&gt;Christmas Island&lt;span class="pull-right"&gt;$742&lt;/span&gt;&lt;/h6&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
   &lt;div class="order-color-success"&gt;&lt;/div&gt;
   &lt;div class="media-body"&gt;
      &lt;h6 class="mb-0"&gt;Saint Helena &lt;span class="pull-right"&gt;$647&lt;/span&gt;&lt;/h6&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-3 col-sm-6 xl-50"&gt;
&lt;div class="order-graph sm-order-space"&gt;
&lt;h6&gt;Sales By Location&lt;/h6&gt;
&lt;div class="peity-chart-dashboard text-center"&gt;
&lt;span class="pie-colours-1"&gt;4,7,6,5&lt;/span&gt;
&lt;/div&gt;
&lt;div class="order-graph-bottom sales-location"&gt;
&lt;div class="media"&gt;
   &lt;div class="order-shape-primary"&gt;&lt;/div&gt;
      &lt;div class="media-body"&gt;
         &lt;h6 class="mb-0 me-0"&gt;Germany &lt;span class="pull-right"&gt;25%&lt;/span&gt;&lt;/h6&gt;
      &lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
   &lt;div class="order-shape-secondary"&gt;&lt;/div&gt;
   &lt;div class="media-body"&gt;
      &lt;h6 class="mb-0 me-0"&gt;Brasil &lt;span class="pull-right"&gt;10%&lt;/span&gt;&lt;/h6&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
   &lt;div class="order-shape-danger"&gt;&lt;/div&gt;
      &lt;div class="media-body"&gt;
         &lt;h6 class="mb-0 me-0"&gt;United Kingdom&lt;span class="pull-right"&gt;34%&lt;/span&gt;&lt;/h6&gt;
      &lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
   &lt;div class="order-shape-warning"&gt;&lt;/div&gt;
   &lt;div class="media-body"&gt;
      &lt;h6 class="mb-0 me-0"&gt;Australia&lt;span class="pull-right"&gt;5%&lt;/span&gt;&lt;/h6&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class="media"&gt;
   &lt;div class="order-shape-success"&gt;&lt;/div&gt;
   &lt;div class="media-body"&gt;
      &lt;h6 class="mb-0 me-0"&gt;Canada &lt;span class="pull-right"&gt;25%&lt;/span&gt;&lt;/h6&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-xl-6 xl-100"&gt;
&lt;div class="order-graph xl-space"&gt;
&lt;h6&gt;Revenue for last month&lt;/h6&gt;
&lt;div class="ct-4 flot-chart-container"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Container-fluid Ends-->


@endsection
