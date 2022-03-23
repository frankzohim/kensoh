@extends('layouts.app')
@section('title', __('Liste Marques'))

@section('content')

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Toutes les marques
                                    <small>Kensoh Dashboard</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Marques</li>
                                <li class="breadcrumb-item active">Listing</li>
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
                        <h5>Toutes Les Marques</h5>
                    </div>
                    <div class="card-body vendor-table">
                    <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Ajouter Une Marque</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Ajouter Une Marque</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                <form class="needs-validation add-product-form" method="POST" action="{{route('brand.store')}}" >
                                                    @csrf
                                                    <div class="form">
                                                        <div class="form-group mb-3 row">
                                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Nom :</label>
                                                            <div class="col-xl-8 col-sm-7">
                                                                <input type="text" name="name" id="name" class="form-control" required autofocus>
                                                            </div>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                        
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                            <label class="col-form-label">Status<span>*</span></label>
                                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                <label class="d-block" for="edo-ani">
                                                                    <input class="radio_animated"  type="radio" name="state" value="1">
                                                                    Publié
                                                                </label>
                                                                <label class="d-block" for="edo-ani1">
                                                                    <input class="radio_animated"  type="radio" name="state" value="0" checked>
                                                                    Non Publié
                                                                </label>
                                                            </div>
                                                    </div>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Statut</th>
                                <th>Date Création</th>
                                <th>Date Modification</th>
                                <th>Nombre Produit</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>
                                        <div class="d-flex vendor-list">
                                            
                                            <span>{{$brand->name}}</span>
                                        </div>
                                    </td>
                                    <td>{{$brand->state}}</td>
                                    <td>{{$brand->created_at}}</td>
                                    <td>{{$brand->updated_at}}</td>

                                    <td>{{$brand->name}}</td>
                                    <td>
                                        <div>
                                        <a href="{{route('brand.edit',$brand->id)}}" ><i class="fa fa-edit me-2 font-success"></i></a>

                                        <a href="{{ route('brand.destroy',['brand' => $brand->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$brand->id}}"><i class="fa fa-trash font-danger"></i></a>
                                            
                                        <div class="modal fade" id="exampleModal{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('brand.destroy',['brand' => $brand->id]) }}" id="delete-form{{$brand->id}}">
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



@endsection