@extends('layouts.app')
@section('title',__('Ajout d\'une Categorie'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Categories
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">add-categories</li>

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
                        <h5>Add Categories</h5>
                    </div>
                    <div class="card-body">
                        @if (session()->has('info'))
                        <div class="notification is-success">
                            {{session('info')}}
                        </div>

                        @endif
                        <form method="post" action="{{route('category.store')}}">

                            @csrf

                            <div class="mb-3">
                              <label for="exampleInputName" class="form-label">Category Name </label>
                              <input type="text" class="form-control" id="name" aria-describedby="NameHelp" name="name">

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Meta Description </label>
                                <input type="text" class="form-control" id="description" aria-describedby="NameHelp" name="description">

                              </div>
                              <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Meta keyword</label>
                                <input type="text" class="form-control" id="keyword" aria-describedby="NameHelp" name="keyword">

                              </div>

                              <div class="mb-3">



                                <label for="exampleFormControlTextarea1" class="form-label">Selectionnez une categorie Parente</label>
                              <select class="form-select" aria-label="Default select example" name="parent">
                                <option  value="0">Categorie Principale</option>
                                @foreach ($categories as $category)
                                <option  value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
								<label for="exampleInputPassword1">Status</label>
								<select class="form-control" name="state">
								    <option value="1">Publié</option>
									<option value="0">Non Publié</option>
								</select>

                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Container-fluid Ends-->

</div>
@endsection
