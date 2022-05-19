@extends('layouts.app')
@section('title',__('Ajouter un partenaire'))

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
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('partners.index')}}">partenaires</li></a>
                        <li class="breadcrumb-item">Ajouter</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        Dropzone.options.dropzoneo = {
            maxFilesize: 10,
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: true,
            timeout: 5000,
            maxFiles : 2
        };
    </script>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card tab2-card">
            <div class="card-header">
                <h5>Ajouter un partenaire</h5>

                <!-- Validation Errors -->
				        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        @if (session('update_success'))
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<span class="alert-icon"><i class="ni ni-like-2"></i></span>
											<span class="alert-text"><strong>Succès! </strong> <strong>{{ session('update_success') }} </strong></span>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									@endif
									@if (session('update_failure'))
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
											<span class="alert-text"><strong>Danger!</strong> <strong> {{ session('update_failure') }} </strong> </span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
									@endif

            </div>
            <div class="card-body">
                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active show" id="general-tab" 
                            data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" 
                            aria-selected="true" 
                            data-original-title="" title="">
                            Général
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="restriction-tabs" 
                            data-bs-toggle="tab" href="#restriction" role="tab" aria-controls="restriction" 
                            aria-selected="false" 
                            data-original-title="" title="">
                            Logos
                        </a>
                    </li>
                </ul>



    <div class="tab-content" id="myTabContent">

         <!-- Validation Errors -->
        <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
            <form class="row g-3" method="POST" action="{{route('partners.store')}}">             
                @csrf
                <div class="col-md-6">
                  <label for="exampleInputName" class="form-label">Raison social</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" value="{{old('social_reason')}}" name="social_reason" required>

                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contact" aria-describedby="NameHelp" name="contact" required>
                  </div>
                  <div class="col-md-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Site web</label>
                    <input type="text" class="form-control" id="website" aria-describedby="NameHelp" name="website" required>
                  </div>
                  <div class="col-md-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="NameHelp" name="email" required>
                  </div>

                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Créer</button>
                    
                    <a href="{{ route('partners.index') }}"><button type="button" class="btn btn-light">Annuler</button></a>

                </div>

            </form>
        </div>


        <div class="tab-pane fade" id="restriction" role="tabpanel" aria-labelledby="restriction-tabs">
            <div class="card-body">

                <form class="dropzone" id="dropzoneo" method="POST" action="{{ route('partner.image') }}" name="file" files="true" enctype="multipart/form-data">
                    @csrf
                
                    <input type="hidden" name="path" id="productId" value="">
                    <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                        <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>

                </form>
            </div>
        </div>


    <!-- Container-fluid Ends-->

</div>
@endsection