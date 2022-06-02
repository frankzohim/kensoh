@extends('layouts.app')
@section('title',__('Ajout d\'une faq'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Ajouter une faq
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('coupon.index')}}">FAQ</li></a>
                        <li class="breadcrumb-item">Ajouter</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

     <!-- Container-fluid starts-->
     <div class="container-fluid">
            <form method="post" action="{{route('coupon.store')}}">
                @csrf
                <!-- Validation Errors -->
				<x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Détails d'une faq de Réduction</h5>
                    </div>
                    <div class="card-body">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">question</label>
                                                <div class="col-md-7">
                                                    <input class="form-control" id="name" name="name" type="text"   required="" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">answer</label>
                                                <div class="col-md-7">
                                                    <input class="form-control" id="name" name="name" type="text"   required="" autofocus>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Status</label>
                                                <div class="col-md-7">
                                                    <select class="custom-select w-100 form-control" name="state" required="">
                                                        <option value="1">Publié</option>
                                                        <option value="0">Non Publié</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div >
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- Container-fluid Ends-->


</div>
@endsection
