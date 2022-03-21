@extends('layouts.app')
@section('title',__('Ajout des Produits'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">add-products</li>

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
                        <h5>Add Product</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('products.store')}}">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputName" class="form-label">Product Name</label>
                              <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" name="name">

                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Meta Description</label>
                                <input type="text" class="form-control" id="description" aria-describedby="NameHelp" name="description">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Meta Keyword</label>
                                <input type="text" class="form-control" id="description" aria-describedby="NameHelp" name="keyword">
                              </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Product Category</label>
                              <select class="form-select" aria-label="Default select example" name="category">

                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach


                              </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Etat</label>
                                <select id="inputState" class="form-select" name="new">
                                    <option selected>Choose...</option>
                                    <option value="1">neuf</option>
                                    <option value="0">Occasion</option>
                                  </select>
                              </div>
                              <div class="col-md-6">
                                <label for="inputState" class="form-label">Position</label>
                                <select id="inputState" class="form-select" name="position">
                                  <option selected>Choose...</option>
                                  <option value="mer">En mer</option>
                                  <option value="magasin">Magasin</option>
                                  <option value="web">dans le web</option>
                                </select>
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Marque</label>
                              <select class="form-select" aria-label="Default select example" name="brand">


                                <option value="1">Choose ...</option>



                              </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Boutique</label>
                              <select class="form-select" aria-label="Default select example" name="store">


                                <option value="1">par defaut</option>



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
                                  <option selected>Choose...</option>
                                  <option value="1">Bon</option>
                                  <option value="0">Mauvais</option>

                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">En vedette</label>
                              <select class="form-select" aria-label="Default select example" name="vedette">


                                <option value="1">oui</option>
                                <option value="0">non</option>


                              </select>
                            </div>
                            <div class="form-group">
								<label for="exampleInputPassword1">Status</label>
								<select class="form-control" name="state">
								    <option value="1">Publié</option>
									<option value="0">Non Publié</option>
								</select>
                            </div>



                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
