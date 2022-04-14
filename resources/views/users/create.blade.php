@extends('layouts.app')
@section('title',__('Ajouter un produit'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Ajouter un produit
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">produits</li></a>
                        <li class="breadcrumb-item">Ajouter</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
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
                                <select class="form-select" aria-label="Default select example" name="brand_id">
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


    <!-- Container-fluid Ends-->

</div>
@endsection