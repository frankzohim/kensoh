@extends('layouts.master')
@section('title', __('Mes Produits'))

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
                        <li class="breadcrumb-item active" aria-current="page">Colis</li>
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

                                <li class="nav-item"><a  class="nav-link" href="{{route('dashboard')}}">Tableau de bord</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}">Produits</a>


                                <li class="nav-item"><a  class="nav-link" href="{{ route('orders.index') }}">Commandes</a>

                                </li>

                                <li class="nav-item"><a class="nav-link active" href="{{route('packages.index')}}">Colis</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#profile">Profil</a>
                                </li>
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#settings">Reglages</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-bs-target="#logout" href="">Deconnexion</a>
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




                        <h3>Colis</h3>
                        <!-- Button trigger modal -->


                        <a class="btn btn-sm btn-solid" href="{{ route('packages.create') }}" role="button">Ajouter un colis</a>
                    </div>

                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Etat</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Catégorie</th>
                                <th>Marque</th>
                                <th>Boutique</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">

                                        <span>{{$product->name}}</span>
                                    </div>
                                </td>
                                <td>
                                    @switch($product->new)
                                        @case(1)
                                          Neuf
                                          @break
                                        @case(0)
                                            Occassion
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    {{$product->unit_price}}
                                </td>
                                <td>
                                    {{$product->stock_quantity}}
                                </td>
                                <td>
                                    @foreach($categories as $category)
                                        @if($category->id==$product->category_id)
                                            {{$category->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($brands as $brand)
                                        @if($brand->id==$product->brand_id)
                                            {{$brand->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($stores as $store)
                                        @if($store->id==$product->store_id)
                                            {{$store->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <div>
                                    <a href="{{route('product.edit',$product->id)}}" ><i class="fa fa-edit me-2 font-success"></i></a>

                                    <a href="{{ route('product.destroy',['product' => $product->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$product->id}}"><i class="fa fa-trash font-danger"></i></a>

                                    <a href="{{route('product.show',$product->id)}}" >details</i></a>

                                    <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('product.destroy',['product' => $product->id]) }}" id="delete-form{{$product->id}}">
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
                                    </div>
                                </td>
                            </tr>
                        @endforeach



                    </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

</section>


@endsection
