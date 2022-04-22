@extends('layouts.app')

@section('title',__('Liste des colis'))

@section('content')

<div class="page-body">

<!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Tous les colis
                            <small>Tableau de bord Kensoh</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('packages.index')}}">Colis</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    	<!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5>Tous les produits</h5><br>
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
                </div>

                <div class="card-body vendor-table">

                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th>description</th>
                            <th>taille</th>
                            <th>largeur</th>
                            <th>poids</th>
                            <th>depart</th>
                            <th>destination</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($packages as $package)
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">

                                        <span>{{$package->description}}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex vendor-list">

                                        <span>{{$package->lenght}}</span>
                                    </div>
                                </td>
                                <td>
                                    {{$package->width}}
                                </td>
                                <td>
                                    {{$package->weight}}
                                </td>
                                <td>
                                    @foreach($towns as $town)
                                        @if($town->id==$package->departure)
                                            {{$town->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($towns as $town)
                                    @if($town->id==$package->destination)
                                        {{$town->name}}
                                    @endif
                                @endforeach
                                </td>

                                <td>
                                    <div>

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
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Container-fluid Ends-->

</div>

@endsection
