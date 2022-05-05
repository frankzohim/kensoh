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
                                           <h5>Ajouter un colis</h5>
                                       </div>
                                       <div class="card-body">

                                        <form action="{{route('packages.store')}}" method="post">
                                            @csrf
                                                <div class="container">
                                                    <div class="row">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Description du colis</label>
                                                <div class="input-group mb-3">
                    
                    
                    
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="description">
                    
                                                  </div>
                                                        <label for="exampleFormControlTextarea1" class="form-label">Longueur</label>
                                                <div class="input-group mb-3">
                    
                    
                    
                                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="length">
                    
                                                  </div>
                                                  <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Largeur</label>
                                                    <input type="number" class="form-control" class="form-control" name="width" id="">
                                                  </div>
                                                  <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Poids</label>
                                                    <input type="number" class="form-control" class="form-control" name="weight" id="">
                                                  </div>
                                                  <label for="exampleFormControlTextarea1" class="form-label">Départ</label>
                                                <div class="input-group mb-3">
                    
                    
                    
                                                    <select id="inputState" class="form-select" name="departure">

                                                        <option selected>Choisir...</option>
                                                        
                                                        @foreach ($departures as $departure)

                                                            <option value="{{$departure->id}}">{{$departure->name}}</option>
                                                        
                                                        @endforeach
                                                       
                    
                                                      </select>
                    
                                                  </div>
                                                  <label for="exampleFormControlTextarea1" class="form-label">Destination</label>
                                                  <div class="input-group mb-3">
                    
                    
                    
                                                    <select id="inputState" class="form-select" name="destination">

                                                        <option selected>Choisir...</option>

                                                        @foreach ($destinations as $destination)

                                                            <option value="{{$destination->id}}">{{$destination->name}}</option>
                                                    
                                                        @endforeach

                                                      </select>
                    
                                                    </div>
                                                    </div>
                                                </div>
                    
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
