@extends('layouts.master')
@section('title', __('Mes Commandes'))

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
                        <li class="breadcrumb-item active" aria-current="page">Commandes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div>


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
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="{{route('dashboard')}}">Tableau de bord</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#products">Commandes</a>
                                </li>
                                <li class="nav-item"><a  class="nav-link" href="{{route('packages.index')}}" active="request()->routeIs('packages.index')">{{__('Colis')}}</a>
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
            </div>
            <div class="col-lg-9">
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
            @if (session('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
                    <span class="alert-text"><strong>Danger!</strong> <strong> {{ session('delete') }} </strong> </span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            @endif


    <div class="row">
        <div class="col-12">
            <div class="card dashboard-table mt-0">
                <div class="card-body table-responsive-sm">
                    <div class="top-sec">




                        <h3>Commandes</h3>
                        <!-- Button trigger modal -->


                        <a class="btn btn-sm btn-solid" href="{{ route('orders.create') }}" role="button">Ajouter une commande</a>
                    </div>

                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Categories</th>
                                <th scope="col">Etat commande</th>
                                <th scope="col">Budget</th>
                                <th scope="col">id utilisateur</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $commande)


                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">

                                        <span>{{$commande->categories_id}}</span>
                                    </div>
                                </td>
                                <td>{{$commande->state}}</td>
                                <td>{{$commande->budget}}</td>
                                <td>{{$commande->user_id}}</td>
                                <!-- <td>{{$commande->departure}}</td>
                                <td>{{$commande->destination}}</td> -->

                                <td>

                                    <div>
                                    <a data-bs-toggle="modal" data-original-title="test1" data-bs-target="#exampleModal1{{$commande->id}}"><i class="fa fa-edit me-2 font-success"></i></a>

                                    <a href="{{ route('orders.destroy',['order' => $commande->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$commande->id}}"><i class="fa fa-trash font-danger"></i></a>
                                </td>
                        @endforeach


                    </tbody>

                    </table>
                </div>
            </div>
        </div>
      
    </div>

</section>


@endsection