@extends('layouts.app')
@section('title',__('Editer un produit'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Editer un produit
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">produits</li></a>
                        <li class="breadcrumb-item">Edition</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Editer un produit</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('product.update', $product->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                              <label for="exampleInputName" class="form-label">Nom Produit</label>
                              <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" name="name">

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
                                <label for="exampleFormControlTextarea1" class="form-label">Catégories</label>
                              <select class="form-select" aria-label="Default select example" name="category">

                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach


                              </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">État</label>
                                <select id="inputState" class="form-select" name="new">
                                    <option selected>Choisir...</option>
                                    <option value="1" @selected($product->new == 1)>Neuf</option>
                                    <option value="0" @selected($product->new == 0)>Occasion</option>
                                  </select>
                              </div>
                              <div class="col-md-6">
                                <label for="inputState" class="form-label">Position</label>
                                <select id="inputState" class="form-select" name="position">
                                  <option selected>Choisir...</option>
                                  <option value="1" @selected($product->position == 1) >En mer</option>
                                  <option value="2" @selected($product->position == 2) >Magasin</option>
                                  <option value="3" @selected($product->position ==3 )>Sur le web</option>
                                </select>
                              </div>

                              <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Marque</label>
                              <select class="form-select" aria-label="Default select example" name="brand">

                              @foreach ($brands as $brand)
                                <option value="{{$brand->id}}" @selected($product->brand_id == $brand->id)>{{$brand->name}}</option>
                                @endforeach

                              </select>
                            </div>

                            <div class="col-md-6">
                              <label for="exampleInputPassword1">Boutique</label>
                              <select class="form-control" name="store_id">
                                  @forelse($stores as $store)
                                    <option value="{{$store->id}}" @selected($product->store_id==$store->id)>{{$store->name}}</option>
                                  @empty
                                  @endforelse
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
                                <input type="number" class="form-control" class="form-control" name="stock_quantity" id="" value="{{$product->unit_price}}">
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
                                <button type="submit" class="btn btn-primary">Mettre à Jour</button>
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