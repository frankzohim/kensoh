@extends('layouts.master')
@section('title', __('Tableau de bord'))

@section('content')
<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Votre Tableau de bord</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html.htm">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Packages</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->
	<!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image">
                                <img src="/assets/frontend/images/appolinaire.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5>{{auth()->user()->name}}</h5>
                                <h6>750 followers | 10 review</h6>
                                <h6>{{auth()->user()->email}}</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#dashboard">Tableau de bord</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#products">Commandes</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#orders">Colis</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#profile">profil</a>
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
                        <div class="container-fluid">
                            <!-- Validation Errors -->
                                   <x-auth-validation-errors class="mb-4" :errors="$errors" />
                           <div class="row">
                               <div class="col-sm-12">
                                   <div class="card">
                                       <div class="card-header">
                                           <h5>Ajouter un product</h5>
                                       </div>
                                       <div class="card-body">
                                           <form class="row g-3" method="POST" action="{{route('product.store')}}">
                                               @csrf
                                               <div class="col-md-6">
                                                 <label for="exampleInputName" class="form-label">Nom Produit</label>
                                                 <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" value="{{old('name')}}" name="name">
                   
                                               </div>
                                               <div class="col-md-6">
                                                   <label for="exampleFormControlTextarea1" class="form-label">Déscription</label>
                                                   <input type="text" class="form-control" id="description" aria-describedby="NameHelp" name="description">
                                                 </div>
                                                 <div class="col-md-6">
                                                   <label for="exampleFormControlTextarea1" class="form-label">Mots clés</label>
                                                   <input type="text" class="form-control" id="description" aria-describedby="NameHelp" name="keyword">
                                                 </div>
                                               
                                              
                                               <label for="exampleFormControlTextarea1" class="form-label">Prix Unitaire</label>
                                               <div class="input-group mb-3">
                   
                                                   <span class="input-group-text">$</span>
                   
                                                   <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
                                                   <span class="input-group-text">.00</span>
                                                 </div>
                                                  <div class="col-md-6">
                                                   <label for="inputCity" class="form-label">Quantité de stock</label>
                                                   <input type="number" class="form-control" class="form-control" name="stock_quantity" id="">
                                                 </div>
                                                 <div class="col-md-6">
                                                   <label for="inputState" class="form-label">Nature</label>
                                                   <select id="inputState" class="form-select" name="nature">
                                                     <option selected>Choisir...</option>
                                                     <option value="1">Produit</option>
                                                     <option value="0">Service</option>
                                                   </select>
                                                 </div>
                                                 <div class="col-md-6">
                                                   <label for="exampleFormControlTextarea1" class="form-label">En vedette</label>
                                                 <select class="form-select" aria-label="Default select example" name="vedette">
                                                   <option value="1">Oui</option>
                                                   <option value="0">Non</option>
                                                 </select>
                                               </div>
                                               <div class="col-md-6">
                                                 <label for="exampleInputPassword1">Status</label>
                                                 <select class="form-control" name="state">
                                                     <option value="1">Publié</option>
                                                   <option value="0">Non Publié</option>
                                                 </select>
                                               </div>
                   
                                               <div class="col-md-8">
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
    </section>
    <!--  dashboard section end -->

@endsection
