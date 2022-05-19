@extends('layouts.app')
@section('title',__('Ajouter un pays'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Ajouter un pays
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('countries.index')}}">pays</li></a>
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
                        <h5>Ajouter un pays</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('countries.store')}}">
                            @csrf
                            <div class="col-md-6">
                              <label for="exampleInputName" class="form-label">Nom_fr</label>
                              <input type="text" class="form-control" id="name_fr" aria-describedby="name_fr" value="{{old('name_fr')}}" name="name_fr" required>

                            </div>
                            <div class="col-md-6">
                              <label for="exampleInputName" class="form-label">Nom_en</label>
                              <input type="text" class="form-control" id="name_en" aria-describedby="name_en" value="{{old('name_en')}}" name="name_en" required>

                            </div>
                            <div class="col-md-6">
                              <label for="exampleInputName" class="form-label">Code</label>
                              <input type="text" class="form-control" id="code" aria-describedby="code" value="{{old('code')}}" name="code" required>

                            </div>
                            <div class="col-md-6">
                              <label for="exampleInputName" class="form-label">Code postal</label>
                              <input type="text" class="form-control" id="postal_code" aria-describedby="postal_code" value="{{old('postal_code')}}" name="postal_code" required>
                            </div>
                            
                            <div class="col-md-8">
                                  <button type="submit" class="btn btn-primary">Créer</button>
                                  
                                  <a href="{{ route('countries.index') }}"><button type="button" class="btn btn-light">Annuler</button></a>

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