@extends('layouts.app')
@section('title',__('Editer un tracking'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Editer un tracking
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('tracking.index')}}">trackings</li></a>
                        <li class="breadcrumb-item">Editer</li>

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
                        <h5>Editer un tracking</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('tracking.update', $tracking)}}">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                              <label for="exampleInputName" class="form-label">Date tracking</label>
                              <input type="date" class="form-control" id="date" aria-describedby="NameHelp" value="{{ $tracking->date }}" name="date" required>

                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Déscription</label>
                                <input type="text" class="form-control" id="description" aria-describedby="NameHelp" name="description" value="{{ $tracking->description }}" required>
                              </div>
                              <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Lien</label>
                                <input type="url" class="form-control" id="link" aria-describedby="NameHelp" name="link" value="{{ $tracking->link }}" required>
                              </div>
                            
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Statut</label>
                                <select id="inputState" class="form-select" name="state">
                                    <option selected>Choisir...</option>
                                    <option value="1" @if ($tracking->state==1)
                                        selected
                                    @endif>Publié</option>
                                    <option value="0" @if ($tracking->state==0)
                                        selected
                                    @endif>Non Publié</option>
                                  </select>
                              </div>

                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
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