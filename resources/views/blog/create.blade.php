@extends('layouts.app')
@section('title', __('Ajouter une actualité'))

@section('content')

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Ajouter une actualité
                                    <small>Kensoh Dashboard</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Actualité</li></a>
                                <li class="breadcrumb-item active">Ajouter</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
            <form method="post" action="{{route('blog.store')}}"  id="singleFileUpload" enctype="multipart/form-data">
                @csrf
                <!-- Validation Errors -->
				<x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="row " style="text-align:left">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Général</h5>
                                </div>
                                <div class="card-body">
                                    <div class="digital-add needs-validation">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Titre</label>
                                            <input class="form-control" id="title" name="title" type="text" required autofocus>
                                        </div>
                                                                               
                                        <div class="form-group">
                                            <label class="col-form-label"><span>*</span> Status</label>
                                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                <label class="d-block" for="edo-ani">
                                                    <input class="radio_animated" id="state" type="radio" name="state" value="1">
                                                    Publié
                                                </label>
                                                <label class="d-block" for="edo-ani1">
                                                    <input class="radio_animated" id="state1" type="radio" name="state" value="0" checked>
                                                    Non Publié
                                                </label>
                                            </div>
                                        </div>

                                       
                                        <label class="col-form-label pt-0"> Image</label>
                                       
                                            <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                                <h4 class="mb-0 f-w-600">TYPE DE FICHIER : .JPG,.PNG,.JPEG.</h4>
                                                <input type="file" class="form-control-file" name="image" aria-describedby="fileHelp">
                                            </div>
                                        
                                        <div class="form-group mb-0">
                                            <div class="product-buttons text-center">
                                                <button type="submit" class="btn btn-primary">Creer l'actualité</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
            <!-- Container-fluid Ends-->
@endsection