@extends('layouts.master')
@section('title', __('Tableaux de bord'))

@section('content')
@if(session()->has('info'))
<div class="notification is-success">
    {{ session('info') }}
</div>
@endif



 <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Tableau de bord</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tableau de bord </li>
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
        @if (session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
                <span class="alert-text"><strong>Danger!</strong> <strong> {{ session('delete') }} </strong> </span>
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
                                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#profile">Profil</a>
                                </li>
                                 <li class="nav-item"><a  class="nav-link" href="{{ route('packages.index') }}">Colis</a>

                                </li>
                                <li class="nav-item"><a  class="nav-link" href="{{ route('orders.index') }}">Commandes</a>

                                 <li class="nav-item"><a  class="nav-link" href="{{ route('tracking-list') }}">Tracking</a>
                                </li>

                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Deconnexion') }}
                                        </x-dropdown-link>
                                    </form>

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
                                    <div class="col-md-6">
                                        <div class="counter-box">
                                            <img src="{{ asset('assets/frontend/images/icon/dashboard/order.png') }}" class="img-fluid">
                                            <div>
                                                <h3>{{ $package_count }}</h3>
                                                <h5>Colis</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="counter-box">
                                            <img src="{{ asset('assets/frontend/images/icon/dashboard/homework.png') }}" class="img-fluid">
                                            <div>
                                                <h3>{{ $tracking_count }}</h3>
                                                <h5>Trackings</h5>
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
                                            <h3>Liste des colis</h3>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Longueur</th>
                                                        <th scope="col">Largeur</th>
                                                        <th scope="col">Poids</th>
                                                        <th scope="col">Depart</th>
                                                        <th scope="col">Destination</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($colis as $package)


                                                    <tr>
                                                        <td>
                                                            <div class="d-flex vendor-list">

                                                                <span>{{$package->description}}</span>
                                                            </div>
                                                        </td>
                                                        <td>{{$package->length}}</td>
                                                        <td>{{$package->width}}</td>
                                                        <td>{{$package->weight}}</td>
                                                        @foreach ($towns as $town )

                                                                @if($package->departure== $town->id)
                                                                    <td>{{$town->name}}</td>
                                                                @endif
                                                        @endforeach

                                                         @foreach ($towns as $town )

                                                                @if($package->destination== $town->id)
                                                                    <td>{{$town->name}}</td>
                                                                @endif
                                                        @endforeach
                                                @endforeach


                                            </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card dashboard-table">
                                        <div class="card-body">
                                            <h3>recent orders</h3>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">order id</th>
                                                        <th scope="col">product details</th>
                                                        <th scope="col">status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#21515</th>
                                                        <td>neck velvet dress</td>
                                                        <td>confrimed</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#78153</th>
                                                        <td>belted trench coat</td>
                                                        <td>shipped</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#51512</th>
                                                        <td>man print tee</td>
                                                        <td>pending</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#78153</th>
                                                        <td>belted trench coat</td>
                                                        <td>shipped</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#51512</th>
                                                        <td>man print tee</td>
                                                        <td>pending</td>
                                                    </tr>
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
                                                <h3>all products</h3>
                                                <a href="#" class="btn btn-sm btn-solid">add product</a>
                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">image</th>
                                                        <th scope="col">product name</th>
                                                        <th scope="col">category</th>
                                                        <th scope="col">price</th>
                                                        <th scope="col">stock</th>
                                                        <th scope="col">sales</th>
                                                        <th scope="col">edit/delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('assets/frontend/images/dashboard/product/1.jpg') }}" class="blur-up lazyloaded"></th>
                                                        <td>neck velvet dress</td>
                                                        <td>women clothes</td>
                                                        <td>$205</td>
                                                        <td>1000</td>
                                                        <td>2000</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('assets/frontend/images/dashboard/product/9.jpg') }}" class="blur-up lazyloaded"></th>
                                                        <td>belted trench coat</td>
                                                        <td>women clothes</td>
                                                        <td>$350</td>
                                                        <td>800</td>
                                                        <td>350</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('assets/frontend/images/pro3/34.jpg') }}" class="blur-up lazyloaded"></th>
                                                        <td>men print tee</td>
                                                        <td>men clothes</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                        <td>150</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('assets/frontend/images/pro3/1.jpg') }}" class="blur-up lazyloaded"></th>
                                                        <td>woman print tee</td>
                                                        <td>women clothes</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                        <td>150</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('assets/frontend/images/pro3/27.jpg') }}" class="blur-up lazyloaded"></th>
                                                        <td>men print tee</td>
                                                        <td>men clothes</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                        <td>150</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('assets/frontend/images/pro3/36.jpg') }}" class="blur-up lazyloaded"></th>
                                                        <td>men print tee</td>
                                                        <td>men clothes</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                        <td>150</td>
                                                        <td><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i><i class="fa fa-trash-o ms-1" aria-hidden="true"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                                <h3>orders</h3>
                                                <a href="#" class="btn btn-sm btn-solid">add product</a>
                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">order id</th>
                                                        <th scope="col">product details</th>
                                                        <th scope="col">status</th>
                                                        <th scope="col">price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#125021</th>
                                                        <td>neck velvet dress</td>
                                                        <td>shipped</td>
                                                        <td>$205</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#521214</th>
                                                        <td>belted trench coat</td>
                                                        <td>shipped</td>
                                                        <td>$350</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#521021</th>
                                                        <td>men print tee</td>
                                                        <td>pending</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#245021</th>
                                                        <td>woman print tee</td>
                                                        <td>shipped</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#122141</th>
                                                        <td>men print tee</td>
                                                        <td>canceled</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#125015</th>
                                                        <td>men print tee</td>
                                                        <td>pending</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#245021</th>
                                                        <td>woman print tee</td>
                                                        <td>shipped</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#122141</th>
                                                        <td>men print tee</td>
                                                        <td>canceled</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#125015</th>
                                                        <td>men print tee</td>
                                                        <td>pending</td>
                                                        <td>$150</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                                    <span data-toggle="modal" data-bs-target="#edit-profile"> edit</span>


                                                </div>
                                                <div class="dashboard-detail">
                                                    <ul>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>name</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>{{ Auth::user()->name }}</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Last Name</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>{{ Auth::user()->lastname }}</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Email</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>{{ Auth::user()->email }}</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>telephone</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>{{ Auth::user()->telephone}}</h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>Pays</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>

                                                                            @foreach($countries as $country)
                                                                            @if ($country->id==Auth()->user()->country_id)
                                                                                <option value="{{$country->id}}">{{$country->name_fr}}</option>
                                                                            @endif
                                                                            @endforeach


                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="details">
                                                                <div class="left">
                                                                    <h6>type de compte</h6>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>
                                                                        Compte clients
                                                                    </h6>
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
                        <div class="tab-pane fade" id="colis">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-md">
                                            <div class="top-sec">
                                                <h3>Vos Colis</h3>

                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">Description</th>
                                                        <th scope="col">Longueur</th>
                                                        <th scope="col">Largeur</th>
                                                        <th scope="col">Poids</th>
                                                        <th scope="col">Depart</th>
                                                        <th scope="col">Destination</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @forelse ($packages as $package)
                                                        <tr>

                                                            <td>{{$package->description}}</td>
                                                            <td>{{$package->length}}</td>
                                                            <td>{{$package->width}}</td>
                                                            <td>{{$package->weight}}</td>
                                                            @foreach ($towns as $town )

                                                            @if($package->departure== $town->id)
                                                                <td>{{$town->name}}</td>
                                                            @endif
                                                    @endforeach
                                                            @foreach ($towns as $town )

                                                                @if($package->destination== $town->id)
                                                                    <td>{{$town->name}}</td>
                                                                @endif
                                                            @endforeach
                                                            <td>

                                                                <div>
                                                                    <a href="" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalEdit{{$package->id}}"><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i></a>
                                                                    <div class="modal fade" id="exampleModalEdit{{$package->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Edition:{{ $package->name }}</h5>
                                                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form method="POST" action="{{ route('packages.update',['package' => $package->id]) }}" id="delete-form{{$package->id}}">
                                                                                    @csrf

                                                                                    @method('PUT')


                                                    <div class="container">
                                                        <div class="row">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Description du colis</label>
                                                <div class="input-group mb-3" >



                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="description" value="{{ $package->description }}">


                                        </div>
                                        <label for="exampleFormControlTextarea1" class="form-label">Longueur</label>
                                                <div class="input-group mb-3" >



                                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="length" value="{{ $package->length }}">

                                                  </div>

                                                  <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Largeur</label>
                                                    <input type="number" class="form-control" class="form-control" name="width" id="" value="{{ $package->width }}">
                                                  </div>
                                                  <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Poids</label>
                                                    <input type="number" class="form-control" class="form-control" name="weight" id="" value="{{ $package->weight }}">
                                                  </div>
                                                  <label for="exampleFormControlTextarea1" class="form-label">Départ</label>
                                                  <div class="input-group mb-3">



                                                      <select id="inputState" class="form-select" name="departure">



                                                          @foreach ($departures as $departure)

                                                              <option value="{{$departure->id}}" @selected($departure->id==$package->departure)>{{$departure->name}}</option>

                                                          @endforeach


                                                        </select>
                                                  </div>
                                                  <label for="exampleFormControlTextarea1" class="form-label">Destination</label>
                                                    <div class="input-group mb-3">
                                                        <select  class="form-select"  aria-label="Default select example"name="destination">

                                                        <option selected>Choisir...</option>

                                                        @foreach ($destinations as $destination)

                                                        <option value="{{$destination->id}}" @selected($destination->id==$package->destination)>{{$destination->name}}</option>


                                                        @endforeach

                                                        </select>

                                                    </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                                                                      </form>

                                                                                </div>

                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <a href="{{ route('packages.destroy',['package' => $package->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$package->id}}"><i class="fa fa-trash font-danger"></i></a>
                                                                <div class="modal fade" id="exampleModal{{$package->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST" action="{{ route('packages.destroy',['package' => $package->id]) }}" id="delete-form{{$package->id}}">
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
                                                    @empty
                                                            <tr>

                                                                    <p style="text-align: center">Aucun colis disponible</p>

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
                        <div class="tab-pane fade" id="commande">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-md">
                                            <div class="top-sec">
                                                <h3>Vos Commandes</h3>

                                            </div>
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">Description</th>
                                                        <th scope="col">Longueur</th>
                                                        <th scope="col">Largeur</th>
                                                        <th scope="col">Poids</th>
                                                        <th scope="col">Depart</th>
                                                        <th scope="col">Destination</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @forelse ($packages as $package)
                                                        <tr>

                                                            <td>{{$package->description}}</td>
                                                            <td>{{$package->length}}</td>
                                                            <td>{{$package->width}}</td>
                                                            <td>{{$package->weight}}</td>
                                                            @foreach ($towns as $town )

                                                            @if($package->departure== $town->id)
                                                                <td>{{$town->name}}</td>
                                                            @endif
                                                    @endforeach
                                                            @foreach ($towns as $town )

                                                                @if($package->destination== $town->id)
                                                                    <td>{{$town->name}}</td>
                                                                @endif
                                                            @endforeach
                                                            <td>

                                                                <div>
                                                                    <a href="" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModalEdit{{$package->id}}"><i class="fa fa-pencil-square-o me-1" aria-hidden="true"></i></a>
                                                                    <div class="modal fade" id="exampleModalEdit{{$package->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Edition:{{ $package->name }}</h5>
                                                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form method="POST" action="{{ route('packages.update',['package' => $package->id]) }}" id="delete-form{{$package->id}}">
                                                                                    @csrf

                                                                                    @method('PUT')


                                                    <div class="container">
                                                        <div class="row">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Description du colis</label>
                                                <div class="input-group mb-3" >



                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="description" value="{{ $package->description }}">


                                        </div>
                                        <label for="exampleFormControlTextarea1" class="form-label">Longueur</label>
                                                <div class="input-group mb-3" >



                                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="length" value="{{ $package->length }}">

                                                  </div>

                                                  <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Largeur</label>
                                                    <input type="number" class="form-control" class="form-control" name="width" id="" value="{{ $package->width }}">
                                                  </div>
                                                  <div class="col-md-6">
                                                    <label for="inputCity" class="form-label">Poids</label>
                                                    <input type="number" class="form-control" class="form-control" name="weight" id="" value="{{ $package->weight }}">
                                                  </div>
                                                  <label for="exampleFormControlTextarea1" class="form-label">Départ</label>
                                                  <div class="input-group mb-3">



                                                      <select id="inputState" class="form-select" name="departure">



                                                          @foreach ($departures as $departure)

                                                              <option value="{{$departure->id}}" @selected($departure->id==$package->departure)>{{$departure->name}}</option>

                                                          @endforeach


                                                        </select>
                                                  </div>
                                                  <label for="exampleFormControlTextarea1" class="form-label">Destination</label>
                                                    <div class="input-group mb-3">
                                                        <select  class="form-select"  aria-label="Default select example"name="destination">

                                                        <option selected>Choisir...</option>

                                                        @foreach ($destinations as $destination)

                                                        <option value="{{$destination->id}}" @selected($destination->id==$package->destination)>{{$destination->name}}</option>


                                                        @endforeach

                                                        </select>

                                                    </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                                                                      </form>

                                                                                </div>

                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <a href="{{ route('packages.destroy',['package' => $package->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$package->id}}"><i class="fa fa-trash font-danger"></i></a>
                                                                <div class="modal fade" id="exampleModal{{$package->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST" action="{{ route('packages.destroy',['package' => $package->id]) }}" id="delete-form{{$package->id}}">
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
                                                    @empty
                                                            <tr>

                                                                    <p style="text-align: center">Aucun colis disponible</p>

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

                                                                <form action="{{ route('user.destroy', auth()->user()->id) }}" method="post">
                                                                    @csrf

                                                                    @method('DELETE')
                                                                <button type="submit" class="btn btn-solid btn-xs">Delete Account</button>
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
