@extends('layouts.app')
@section('title',__('Ajouter une ville'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Ajouter une ville
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('town.index')}}">villes</li></a>
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
                        <h5>Ajouter une ville</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('town.store')}}">
                            @csrf
                            <div class="col-md-6">
                              <label for="exampleInputName" class="form-label">Nom de la ville</label>
                              <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" value="{{old('name')}}" name="name" required>

                            </div>
                            
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Pays</label>
                              <select class="form-select" aria-label="Default select example" name="country_id">
                                @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name_fr}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="col-md-12">
                                <label for="inputCity" class="form-label">Type</label>
                                <select id="inputState" class="form-select" name="type">
                                    <option value="1">Départ</option>
                                    <option value="0">Destination</option>
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