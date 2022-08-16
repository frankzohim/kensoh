@extends('layouts.app')
@section('title',__('Ajout d\'un partenaire'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Ajouter un partenaire
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('partner.index')}}">partenaires</li></a>
                        <li class="breadcrumb-item">Ajouter</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

     <!-- Container-fluid starts-->
     <div class="container-fluid">
            <form method="post" action="{{route('partner.store')}}" enctype="multipart/form-data">
                @csrf
                <!-- Validation Errors -->
				<x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="row product-adding">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Général</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Nom</label>
                                            <input class="form-control" id="name" name="name" type="text" required autofocus>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-form-label"><span>*</span> Status</label>
                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                <label class="d-block" for="edo-ani">
                                                    <input class="radio_animated" id="state" type="radio" name="state" value="1">
                                                    Publié
                                                </label>
                                                <label class="d-block" for="edo-ani1">
                                                    <input class="radio_animated" id="state" type="radio" name="state" value="0" checked>
                                                    Non Publié
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <label class="col-form-label pt-0"> Logo Partenaire</label>
                                       
                                            <div class="dz-message needsclick">
                                                <h4 class="mb-0 f-w-600">TYPE DE FICHIER : .JPG,.PNG,.JPEG.</h4>
                                                <input type="file" class="form-control-file" name="logo" id="logo" required aria-describedby="fileHelp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group mb-0">
                                            <div class="product-buttons text-center">
                                                <button type="submit" class="btn btn-primary">Ajouter le partenaire</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                     
                    </div>
                </form>
        </div>
    <!-- Container-fluid Ends-->

</div>
@endsection