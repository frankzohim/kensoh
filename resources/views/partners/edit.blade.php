@extends('layouts.app')
@section('title',__('Editer un partenaire'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Editer un partenaire
                            <small>Kensoh Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('partners.index')}}">partenaires</li></a>
                        <li class="breadcrumb-item">Editer</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Editer un partenaire</h5>
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

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form class="row g-3" method="POST" action="{{route('partners.update', $partners->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-6">
                                        <label for="exampleInputName" class="form-label">Raison sociale</label>
                                        <input type="text" class="form-control" id="social_reason" aria-describedby="NameHelp" value="{{$partners->social_reason}}" name="social_reason">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Contact</label>
                                        <input type="number" class="form-control" id="logo" aria-describedby="NameHelp" value="{{$partners->contact}}" name="contact">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Logo</label>
                                        <input type="text" class="form-control" id="logo" value="{{$partners->logo}}" aria-describedby="NameHelp" name="logo">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Site web</label>
                                        <input type="text" class="form-control" id="website" value="{{$partners->website}}" aria-describedby="NameHelp" name="website">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" value="{{$partners->email}}" aria-describedby="NameHelp" name="email">
                                    </div>

                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">Mise à jour</button>
                                        <a href="{{ route('partners.index') }}"><button type="button" class="btn btn-light">Annuler</button></a>

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