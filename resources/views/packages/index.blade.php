@extends('layouts.master')
@section('title', __('Mes Colis'))

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
                <x-sidebar/>
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
            @foreach ($towns as $town)



    <div class="row">
        <div class="col-12">
            <div class="card dashboard-table mt-0">
                <div class="card-body table-responsive-sm">
                    <div class="top-sec">




                        <h3>Colis</h3>
                        <!-- Button trigger modal -->


                        <a class="btn btn-sm btn-solid" data-bs-toggle="modal"  data-bs-target="#staticBackdrop" role="button">Ajouter un colis</a>
                    </div>

                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">description</th>
                                <th scope="col">lenght</th>
                                <th scope="col">width</th>
                                <th scope="col">weight</th>
                                <th scope="col">destination</th>
                                <th scope="col">Action</th>
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
                                <td>{{$package->length}}</td>
                                <td>{{$package->width}}</td>
                                <td>{{$package->weight}}</td>
                                <td>{{$package->departure}}</td>
                                <td>{{$package->destination}}</td>

                                <td>

                                    <div>
                                    <a href="{{route('packages.edit',$package->id)}}" ><i class="fa fa-edit me-2 font-success"></i></a>

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
        <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nouveau Colis</h5>
                    <button type="button" class="btn-close black" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{route('packages.store')}}" method="post">
                        @csrf
                            <div class="container">
                                <div class="row">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <div class="input-group mb-3">



                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="description">

                              </div>
                                    <label for="exampleFormControlTextarea1" class="form-label">length</label>
                            <div class="input-group mb-3">



                                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="length">

                              </div>
                              <div class="col-md-6">
                                <label for="inputCity" class="form-label">width</label>
                                <input type="number" class="form-control" class="form-control" name="width" id="">
                              </div>
                              <div class="col-md-6">
                                <label for="inputCity" class="form-label">weight</label>
                                <input type="number" class="form-control" class="form-control" name="weight" id="">
                              </div>
                              <label for="exampleFormControlTextarea1" class="form-label">Depart</label>
                            <div class="input-group mb-3">



                                <select id="inputState" class="form-select" name="departure">
                                    <option selected>Choisir...</option>
                                    <option value="{{$town->id}}">{{$town->name}}</option>

                                  </select>

                              </div>
                              <label for="exampleFormControlTextarea1" class="form-label">Destination</label>
                              <div class="input-group mb-3">



                                <select id="inputState" class="form-select" name="destination">
                                    <option selected>Choisir...</option>
                                    <option value="{{$town->id}}">{{$town->name}}</option>
                                  </select>

                                </div>
                                </div>
                            </div>


                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Créer</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>

                @endforeach

            </div>


        </div>
    </div>
</section>


@endsection
