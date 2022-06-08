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
                            <li class="breadcrumb-item active" aria-current="page">commandes</li>
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
                                           <h5>Ajouter une commande</h5>
                                       </div>
                                       <div class="card-body">

                                        <form action="{{route('orders.store')}}" method="post">
                                            @csrf
                                                <div class="container">
                                                    <div class="row">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Categories de la commande</label>
                                                <div class="input-group mb-3">
                    
                    
                                                <select id="inputState" class="form-select" name="categories_id">
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">
                                                    {{$category->name}}
                                                    </option>
                                                    @endforeach
                                                    
<!--                                                 
                                                    <option value="1">Produit</option>
                                                    <option value="0">Service</option> -->

                                                </select>
                    
                                                  </div>
                                                        <label for="exampleFormControlTextarea1" class="form-label">Etat</label>
                                               <select name="state" id="inputState" class="form-select">
                                                    
                                                    <option value="1">Publié</option>
                                                    <option value="0">Non publié</option>
                                               </select>
                    
                                                  </div>
                                                  <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Budget</label>
                                                    <input type="number" class="form-control" class="form-control" name="budget" id="">
                                                  </div>
                                                  
                                                </div><br><br>
                    
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
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
