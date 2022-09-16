@extends('layouts.master')
@section('title', __('Tableau de bord'))


@section('content')

	 <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Tableau de bord Vendeur</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tableau de bord Vendeur</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

	<!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        @if (session('update_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Succès! </strong> <strong>{{ session('update_success') }} </strong></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('update_failure'))
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
											<span class="alert-text"><strong>Danger!</strong> <strong> {{ session('update_failure') }} </strong> </span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
		@endif
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image">
                                <img src="{{ asset("assets/frontend/images/profile.webp") }}" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5>{{ Auth::user()->name }}</h5>
                                <h6>{{ Auth::user()->lastname }}</h6>
                                <h6>{{ Auth::user()->email }}</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#dashboard">Tableau de bord</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#products">mes Produits</a>

                                </li>


                                        <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#productsCreate">Creer un produit</a>

                                        </li>



                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#orders">Boutique</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#ordersCreate">Creer une Boutique</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#profile">Profil</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#settings">Paramètres</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-bs-target="#logout" href="">Déconnexion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="faq-content tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="counter-section">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="{{ asset('assets/frontend/images/icon/dashboard/order.png') }}" class="img-fluid">
                                            <div>
                                                <h3>{{ $products_count }}</h3>
                                                <h5>Produits</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="{{ asset('assets/frontend/images/icon/dashboard/sale.png') }}" class="img-fluid">
                                            <div>
                                                <h3>{{ $store_count }}</h3>
                                                <h5>Boutique</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="{{ asset('assets/frontend/images/icon/dashboard/homework.png') }}" class="img-fluid">
                                            <div>
                                                <h3>{{ $productsNoPublisher }}</h3>
                                                <h5>Produits Non publié</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="chart-order"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card dashboard-table">
                                        <div class="card-body">
                                            <h3>Produits recents</h3>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">image</th>
                                                        <th scope="col">Nom du Produit</th>
                                                        <th scope="col">prix</th>
                                                        <th scope="col">Category</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($product_vendor as $product)
                                                        <tr>
                                                            <th scope="row"><img src="{{ asset('assets/frontend/images/dashboard/product/1.jpg') }}" class="blur-up lazyloaded"></th>
                                                            <td>{{ $product->name }}</td>
                                                            <td>{{ $product->unit_price }}</td>
                                                            <td>@foreach ($categories as $category)
                                                                    @if($category->id==$product->category_id)
                                                                        {{ $category->name }}

                                                                    @endif
                                                            @endforeach

                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <p style="text-align: center">Aucun produit</p>

                                                        </tr>
                                                    @endforelse



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card dashboard-table">
                                        <div class="card-body">
                                            <h3>Commande recentes</h3>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Categorie</th>
                                                        <th scope="col">Nom du produit</th>
                                                        <th scope="col">Budget</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @forelse ($orderVendor as $order)
                                                        <tr>
                                                            <th scope="row">
                                                                @foreach ($categories as $category)
                                                                    @if($category->id==$order->categories_id)
                                                                        {{ $category->name }}
                                                                    @endif
                                                                @endforeach
                                                            </th>
                                                            <td>{{ $order->description }}</td>
                                                            <td>{{ $order->budget }}</td>
                                                        </tr>
                                                    @empty

                                                    @endforelse





                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="products">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-md">
                                            <div class="top-sec">
                                                <h3>Vos produits</h3>

                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">Nom du Produit</th>
                                                        <th scope="col">categorie</th>
                                                        <th scope="col">Marque</th>
                                                        <th scope="col">Prix unitaire</th>
                                                        <th scope="col">stock</th>
                                                        <th scope="col">Position</th>
                                                        <th scope="col">Etat</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @forelse ($productsVendor as $product)
                                                        <tr>

                                                            <td>{{ $product->name }}</td>
                                                            <td>
                                                                @foreach ($categories as $category)
                                                                    @if($category->id==$product->category_id)
                                                                        {{ $category->name }}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                @foreach ($brands as $brand)
                                                                    @if($brand->id==$product->brand_id)
                                                                        {{ $brand->name }}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>{{ $product->unit_price }}</td>
                                                            <td>{{ $product->stock_quantity }}</td>
                                                            <td>
                                                                @if($product->position==1)
                                                                        En Mer
                                                                    @elseif($product->position==2)
                                                                        Magasin
                                                                    @elseif($product->position==3)
                                                                        Sur le Web
                                                                @endif

                                                            </td>
                                                            <td>
                                                                @if($product->state==1)
                                                                        Publié
                                                                    @else
                                                                        Non publié
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalEdit{{$product->id}}"><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i></a>

                                                                <div class="modal fade" id="exampleModalEdit{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Edition:{{ $product->name }}</h5>
                                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST" action="{{ route('vendor.products.destroy',['product' => $product->id]) }}" id="delete-form{{$product->id}}">
                                                                                @csrf

                                                                                @method('PUT')

                                                                                <form class="row"  method="POST" action="{{route("vendor.products.store")}}">
                                                                                    @csrf
                                                                                    <div class="col-md-12">
                                                                                      <label for="exampleInputName" class="form-label">Nom Produit</label>
                                                                                      <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" value="{{$product->name}}" name="name" required>

                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <label for="exampleFormControlTextarea1" class="form-label">Déscription</label>
                                                                                        <input type="text" class="form-control" id="description" value="{{$product->meta_description}}" aria-describedby="NameHelp" name="description" required>
                                                                                      </div>
                                                                                      <div class="col-md-12">
                                                                                        <label for="exampleFormControlTextarea1" class="form-label">Mots clés</label>
                                                                                        <input type="text" value="{{$product->meta_keywords}}" class="form-control" id="description" aria-describedby="NameHelp" name="keyword" required>
                                                                                      </div>
                                                                                      <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <label for="exampleFormControlTextarea1" class="form-label">Catégorie</label>
                                                                                          <select class="form-select" aria-label="Default select example" name="category_id">
                                                                                            @foreach ($categories as $category)
                                                                                                @if($category->id==$product->category_id)

                                                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                          </select>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label for="inputCity" class="form-label">État</label>
                                                                                            <select id="inputState" class="form-select" name="new">
                                                                                                <option value="1" @selected($product->new == 1)>Neuf</option>
                                                                                                <option value="0" @selected($product->new == 0)>Occasion</option>
                                                                                              </select>
                                                                                          </div>
                                                                                      </div>

                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <label for="inputState" class="form-label">Position</label>
                                                                                                    <select id="inputState" class="form-select" name="position">
                                                                                                        @if($product->position==1)
                                                                                                                <option value="1" @selected($product->position == 2)>En mer</option>
                                                                                                            @elseif($product->position==2)
                                                                                                            <option value="2">Magasin</option>
                                                                                                            @elseif($product->position==3)
                                                                                                            <option value="3">Sur le web</option>
                                                                                                        @endif
                                                                                                    </select>
                                                                                                  </div>

                                                                                                  <div class="col-md-6">
                                                                                                    <label for="exampleFormControlTextarea1" class="form-label">Marque</label>
                                                                                                    <select class="form-select" aria-label="Default select example" name="brand_id" required>
                                                                                                      @foreach ($brands as $brand)
                                                                                                            @if($brand->id==$product->brand_id)
                                                                                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                                                                            @endif

                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                 </div>
                                                                                            </div>





                                                                                    <div class="col-md-12">
                                                                                        <label for="exampleFormControlTextarea1" class="form-label">Boutique</label>
                                                                                      <select class="form-select" aria-label="Default select example" name="store_id">
                                                                                        @foreach ($stores as $store)
                                                                                        @if($store->id==$product->store_id)
                                                                                        <option value="{{$store->id}}">{{$store->name}}</option>
                                                                                        @endif
                                                                                        @endforeach
                                                                                      </select>
                                                                                    </div>

                                                                                    <label for="exampleFormControlTextarea1" class="form-label">Prix Unitaire</label>
                                                                                    <div class="input-group mb-3">

                                                                                        <span class="input-group-text">$</span>

                                                                                        <input type="number" value="{{$product->unit_price}}" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">                                                                                      <span class="input-group-text">.00</span>
                                                                                    </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <label for="inputCity" class="form-label">Quantité de stock</label>
                                                                                                <input type="number" class="form-control" value="{{ $product->stock_quantity }}" class="form-control" name="stock_quantity" id="" required>
                                                                                            </div>
                                                                                            <div class="col-md-6">

                                                                                                <label for="inputState" class="form-label">Nature</label>

                                                                                                <select id="inputState" class="form-select" name="nature">


                                                                                                  @if($product->nature==1)
                                                                                                            <option value="1">Produit</option>
                                                                                                        @else

                                                                                                            <option value="0">Service</option>
                                                                                                    @endif
                                                                                                </select>

                                                                                              </div>
                                                                                        </div>



                                                                                      <input type="hidden" name="state" value="0">
                                                                                      <input type="hidden" name="vedette" value="0">





                                                                                    <div class="col-lg-12 mt-2">
                                                                                        <button type="submit" class="btn btn-primary">Mise a jour</button>
                                                                                    </div>

                                                                                  </form>

                                                                            </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <a href="{{ route('product.destroy',['product' => $product->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$product->id}}"><i class="fa fa-trash font-danger"></i></a>
                                                                <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Edition du produit</h5>
                                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST" action="{{ route('vendor.products.destroy',['product' => $product->id]) }}" id="delete-form{{$product->id}}">
                                                                                @csrf
                                                                                <p>{{ __('Voulez vous supprimer cet élément?') }}</p>
                                                                                @method('DELETE')
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary">Oui</button>
                                                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                    @empty
                                                            <tr>

                                                                    <p style="text-align: center">Aucun produit disponible</p>

                                                                </td>
                                                            </tr>
                                                    @endforelse

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="productsCreate">
                            <h3>Creation Produit</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-md">
                                            <div class="top-sec">

                                                <div class="container-fluid">
                                                    <!-- Validation Errors -->
                                                           <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                                   <div class="row">
                                                       <div class="col-sm-12">
                                                           <div class="card">

                                                               <div class="card-body">
                                                                   <form class="row"  method="POST" action="{{route("vendor.products.store")}}">
                                                                       @csrf
                                                                       <div class="col-md-6">
                                                                         <label for="exampleInputName" class="form-label">Nom Produit</label>
                                                                         <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" value="{{old('name')}}" name="name" required>

                                                                       </div>
                                                                       <div class="col-md-6">
                                                                           <label for="exampleFormControlTextarea1" class="form-label">Déscription</label>
                                                                           <input type="text" class="form-control" id="description" aria-describedby="NameHelp" name="description" required>
                                                                         </div>
                                                                         <div class="col-md-6">
                                                                           <label for="exampleFormControlTextarea1" class="form-label">Mots clés</label>
                                                                           <input type="text" class="form-control" id="description" aria-describedby="NameHelp" name="keyword" required>
                                                                         </div>
                                                                       <div class="col-md-6">
                                                                           <label for="exampleFormControlTextarea1" class="form-label">Catégorie</label>
                                                                         <select class="form-select" aria-label="Default select example" name="category_id">
                                                                           @foreach ($categories as $category)
                                                                           <option value="{{$category->id}}">{{$category->name}}</option>
                                                                           @endforeach
                                                                         </select>
                                                                       </div>
                                                                       <div class="col-md-6">
                                                                           <label for="inputCity" class="form-label">État</label>
                                                                           <select id="inputState" class="form-select" name="new">
                                                                               <option selected>Choisir...</option>
                                                                               <option value="1">Neuf</option>
                                                                               <option value="0">Occasion</option>
                                                                             </select>
                                                                         </div>
                                                                         <div class="col-md-6">
                                                                           <label for="inputState" class="form-label">Position</label>
                                                                           <select id="inputState" class="form-select" name="position">
                                                                             <option selected>Choisir...</option>
                                                                             <option value="1">En mer</option>
                                                                             <option value="2">Magasin</option>
                                                                             <option value="3">Sur le web</option>
                                                                           </select>
                                                                         </div>

                                                                         <div class="col-md-6">
                                                                           <label for="exampleFormControlTextarea1" class="form-label">Marque</label>
                                                                           <select class="form-select" aria-label="Default select example" name="brand_id" required>
                                                                             @foreach ($brands as $brand)
                                                                               <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                                               @endforeach
                                                                           </select>
                                                                        </div>
                                                                       <div class="col-md-6">
                                                                           <label for="exampleFormControlTextarea1" class="form-label">Boutique</label>
                                                                         <select class="form-select" aria-label="Default select example" name="store_id">
                                                                           @foreach ($stores as $store)
                                                                             <option value="{{$store->id}}">{{$store->name}}</option>
                                                                           @endforeach
                                                                         </select>
                                                                       </div>

                                                                       <label for="exampleFormControlTextarea1" class="form-label">Prix Unitaire</label>
                                                                       <div class="input-group mb-3">

                                                                           <span class="input-group-text">$</span>

                                                                           <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" required>
                                                                           <span class="input-group-text">.00</span>
                                                                       </div>

                                                                         <div class="col-md-6">
                                                                           <label for="inputCity" class="form-label">Quantité de stock</label>
                                                                           <input type="number" class="form-control" class="form-control" name="stock_quantity" id="" required>
                                                                         </div>

                                                                         <div class="col-md-6">

                                                                           <label for="inputState" class="form-label">Nature</label>

                                                                           <select id="inputState" class="form-select" name="nature">

                                                                             <option selected>Choisir...</option>
                                                                             <option value="1">Produit</option>
                                                                             <option value="0">Service</option>

                                                                           </select>

                                                                         </div>
                                                                         <input type="hidden" name="state" value="0">
                                                                         <input type="hidden" name="vedette" value="0">





                                                                       <div class="col-md-8 mt-2">
                                                                           <button type="submit" class="btn btn-primary">Créer</button>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-sm">
                                            <div class="top-sec">
                                                <h3>Vos boutiques</h3>
                                                <a href="#" class="btn btn-sm btn-solid">ajouter une boutique</a>
                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Nom</th>
                                                        <th scope="col">localité</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Statuts</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @forelse ($stores as $store)
                                                        <tr>
                                                            <th scope="row">{{ $store->name }}</th>
                                                            <td>{{ $store->town }}-
                                                                @foreach ($countries as $country)
                                                                    @if($country->id==$store->country_id)
                                                                        {{ $country->name_fr }}

                                                                    @endif
                                                                @endforeach

                                                            </td>
                                                            <td>{{ $store->description }}</td>
                                                            <td>
                                                                @if($store->state==1)
                                                                        <span style="color:green">publié</span>
                                                                    @else
                                                                        <span style="color:red">en cours de traitement</span>
                                                                @endif
                                                        </td>
                                                        <td>
                                                            <a href="" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalEditStore{{$store->id}}"><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i></a>
                                                            <div class="modal fade" id="exampleModalEditStore{{$store->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Edition:{{ $store->name }}</h5>
                                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        </div>
                                                                        <div class="modal-body">




                                                                            <form class="row"  method="POST" action="{{route("vendor.stores.update",$store->id)}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="col-md-12">
                                                                                  <label for="exampleInputName" class="form-label">Nom De la Boutique</label>
                                                                                  <input class="form-control" id="name" name="name" type="text" value="{{$store->name}}" required autofocus>

                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label for="exampleFormControlTextarea1" class="form-label">Numero de telephone</label>
                                                                                    <input class="form-control" id="phone" name="phone" value="{{$store->phone}}"  type="text" required>
                                                                                  </div>
                                                                                  <div class="col-md-12">
                                                                                    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                                                                                    <input class="form-control" id="email" name="email" value="{{$store->email}}" type="email" required>
                                                                                  </div>
                                                                                  <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label class="col-form-label"><span>*</span> Pays</label>
                                                                                        <select class="custom-select form-control" name="country_id" required>
                                                                                            @foreach($countries as $country)
                                                                                                @if($store->country_id==$country->id)
                                                                                                <option value="{{$country->id}}">{{$country->name_fr}}</option>
                                                                                                @endif

                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label class="col-form-label"><span>*</span>ville</label>
                                                                                        <input value="{{ $store->town }}" class="form-control" id="town" name="town" type="text" required>
                                                                                    </div>


                                                                                  </div>
                                                                                  <div class="col-md-12">
                                                                                    <label class="col-form-label"><span>*</span>Rue</label>
                                                                                    <input value="{{ $store->street }}" class="form-control" id="town" name="street" type="text" required>
                                                                                </div>

                                                                                  <div class="form-group">
                                                                                    <label class="col-form-label">Résumé de l'entreprise</label>
                                                                                    <textarea rows="4" cols="50" name="description" required>{{$store->description}}</textarea>
                                                                                </div>
                                                                                <label class="col-form-label pt-0"> Logo Boutique</label>
                                        <img src="{{ route('store.displayImage',$store->id) }}" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                            <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>

                                                <input type="file" class="form-control-file" name="logo" id="logo" aria-describedby="fileHelp">
                                            </div>















                                                                                <div class="col-lg-12 mt-2">
                                                                                    <button type="submit" class="btn btn-primary">Mise a jour</button>
                                                                                </div>

                                                                              </form>

                                                                        </div>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    @empty

                                                    @endforelse











                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ordersCreate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-sm">
                                            <div class="top-sec">
                                                <h3>Vos boutiques</h3>
                                                <a href="#" class="btn btn-sm btn-solid">ajouter une boutique</a>
                                            </div>
                                            <!-- Container-fluid starts-->
                                            <div class="container-fluid">
                                                <div class="page-header">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="page-header-left">
                                                                <h3>Ajouter une boutique
                                                                    <small>Kensoh Dashboard</small>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <ol class="breadcrumb pull-right">
                                                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                                                                <li class="breadcrumb-item"><a href="{{route('store.index')}}">Boutique</li></a>
                                                                <li class="breadcrumb-item active">Ajouter</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Container-fluid Ends-->

                                            <!-- Container-fluid starts-->
                                            <div class="container-fluid">
                                            <form method="post" action="{{route('vendor.stores.store')}}" class="dropzone digits" id="singleFileUpload" enctype="multipart/form-data">
                                                @csrf
                                                <!-- Validation Errors -->
                                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                                <div class="row product-adding">
                                                        <div class="col-xl-6">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Général</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="digital-add needs-validation">
                                                                        <div class="form-group">
                                                                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Nom</label>
                                                                            <input class="form-control" id="name" name="name" type="text" required autofocus>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> Téléphone</label>
                                                                            <input class="form-control" id="phone" name="phone"  type="text" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="validationCustom02" class="col-form-label"><span>*</span> Email</label>
                                                                            <input class="form-control" id="email" name="email"  type="email" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-form-label">Résumé de l'entreprise</label>
                                                                            <textarea  name="description" rows="5" cols="30" required></textarea>
                                                                        </div>




                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Localisation</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="digital-add needs-validation">

                                                                        <div class="form-group">
                                                                            <label class="col-form-label"><span>*</span> Pays</label>
                                                                            <select class="custom-select form-control" name="country_id" required>
                                                                                @foreach($countries as $country)
                                                                                <option value="{{$country->id}}">{{$country->name_fr}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="validationCustom02" class="col-form-label"><span>*</span> Ville</label>
                                                                            <input class="form-control" id="town" name="town" type="text" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="validationCustom02" class="col-form-label"><span>*</span> Quartier/ Rue</label>
                                                                            <input class="form-control" id="street" name="street" type="text" required>
                                                                        </div>
                                                                        <label class="col-form-label pt-0"> Logo Boutique</label>

                                                                            <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>

                                                                                <input type="file" class="form-control-file" name="logo" id="logo" aria-describedby="fileHelp">
                                                                            </div>



                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="card">

                                                                <div class="card-body">
                                                                    <div class="digital-add needs-validation">
                                                                        <div class="form-group">
                                                                            <div class="product-buttons text-center"">
                                                                                <button type="submit" class="btn btn-primary">Creer la boutique</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="dashboard-box">
                                                <div class="dashboard-title">
                                                    <h4>profile</h4>
                                                    <span data-toggle="modal" data-bs-target="#edit-profile">edit</span>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <ul>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>company name</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>Fashion Store</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>email address</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>mark.enderess@mail.com</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Country / Region</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>Downers Grove, IL</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Year Established</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>2018</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Total Employees</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>101 - 200 People</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>category</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>clothing</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>street address</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>549 Sulphur Springs Road</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>city/state</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>Downers Grove, IL</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>zip</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>60515</h6>
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
                        <div class="tab-pane fade" id="settings">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="dashboard-box">
                                                <div class="dashboard-title">
                                                    <h4>settings</h4>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <div class="account-setting">
                                                        <h5>Notifications</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                                                    <label class="form-check-label" for="exampleRadios1">
                                                                        Allow Desktop Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                                    <label class="form-check-label" for="exampleRadios2">
                                                                        Enable Notifications
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                                                    <label class="form-check-label" for="exampleRadios3">
                                                                        Get notification for my own activity
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                                                    <label class="form-check-label" for="exampleRadios4">
                                                                        DND
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-setting">
                                                        <h5>deactivate account</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios4" value="option4" checked="">
                                                                    <label class="form-check-label" for="exampleRadios4">
                                                                        I have a privacy concern
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios5" value="option5">
                                                                    <label class="form-check-label" for="exampleRadios5">
                                                                        This is temporary
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios6" value="option6">
                                                                    <label class="form-check-label" for="exampleRadios6">
                                                                        other
                                                                    </label>
                                                                </div>
                                                                <button type="button" class="btn btn-solid btn-xs">Deactivate
                                                                    Account</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-setting">
                                                        <h5>Delete account</h5>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios7" value="option7" checked="">
                                                                    <label class="form-check-label" for="exampleRadios7">
                                                                        No longer usable
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios8" value="option8">
                                                                    <label class="form-check-label" for="exampleRadios8">
                                                                        Want to switch on other account
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="radio_animated form-check-input" type="radio" name="exampleRadios3" id="exampleRadios9" value="option9">
                                                                    <label class="form-check-label" for="exampleRadios9">
                                                                        other
                                                                    </label>
                                                                </div>
                                                                <button type="button" class="btn btn-solid btn-xs">Delete Account</button>
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
                </div>
            </div>
        </div>
    </section>
    <!--  dashboard section end -->


    <!-- Modal start -->
    <div class="modal logout-modal fade" id="logout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logging Out</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to log out?
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-dark btn-custom" data-bs-dismiss="modal">no</a>
                    <a href="index.html.htm" class="btn btn-solid btn-custom">yes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->


@endsection
