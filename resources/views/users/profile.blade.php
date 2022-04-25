@extends('layouts.app')
@section('title', __('Editer le profil'))

@section('content')
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h2>Editer le profil</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a >Utilisateurs</a></li>
                                <li class="breadcrumb-item" aria-current="page">{{$user->name}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

         <!-- Container-fluid starts-->
         <div class="container-fluid">
                <div class="row">
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
                    <div class="col-xl-12">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="me-2"></i>Profil</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="settings" class="me-2"></i>Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                        <h5 class="f-w-600">Profil</h5>
                                            <form method="post" action="{{route('user.update', $user->id)}}" id="singleFileUpload" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <!-- Validation Errors -->
                                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                                <div class="row product-adding">
                                                        <div class="col-xl-6">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="digital-add needs-validation">
                                                                        <div class="form-group">
                                                                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Prénom</label>
                                                                            <input class="form-control" id="name" name="name" type="text" value="{{$user->name}}" required autofocus>
                                                                        </div>
                                                                        
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="validationCustom02" class="col-form-label"><span>*</span> Email</label>
                                                                            <input class="form-control" id="email" name="email"  type="email" value="{{$user->email}}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <label for="validationCustom02" class="col-form-label"><span>*</span>Photo de profil</label>
                                                                                <input class="form-control" type="file" id="avatar" name="avatar" >
                                                                        </div>                                 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="digital-add needs-validation">
                                                                        <div class="form-group">
                                                                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Nom</label>
                                                                            <input class="form-control" id="lastname" name="lastname" type="text" value="{{$user->lastname}}" required autofocus>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> Téléphone</label>
                                                                            <input class="form-control" id="phone" name="phone"  type="text" value="{{$user->phone}}" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="col-form-label"><span>*</span> Pays</label>
                                                                            <select class="custom-select form-control" name="country_id" required>
                                                                                @foreach($countries as $country)
                                                                                <option value="{{$country->id}}" @selected($country->id == $user->country_id)>{{$country->name_fr}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                    <div class="digital-add needs-validation">
                                                        <div class="form-group mb-0">
                                                            <div class="product-buttons text-center">
                                                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                    </div>
                                    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                        <div class="account-setting">
                                            <h5 class="f-w-600">Notifications</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="d-block" for="chk-ani">
                                                        <input class="checkbox_animated" id="chk-ani" type="checkbox">
                                                        Allow Desktop Notifications
                                                    </label>
                                                    <label class="d-block" for="chk-ani1">
                                                        <input class="checkbox_animated" id="chk-ani1" type="checkbox">
                                                        Enable Notifications
                                                    </label>
                                                    <label class="d-block" for="chk-ani2">
                                                        <input class="checkbox_animated" id="chk-ani2" type="checkbox">
                                                        Get notification for my own activity
                                                    </label>
                                                    <label class="d-block mb-0" for="chk-ani3">
                                                        <input class="checkbox_animated" id="chk-ani3" type="checkbox" checked="">
                                                        DND
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-setting deactivate-account">
                                            <h5 class="f-w-600">Deactivate Account</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="d-block" for="edo-ani">
                                                        <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">
                                                        I have a privacy concern
                                                    </label>
                                                    <label class="d-block" for="edo-ani1">
                                                        <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                                        This is temporary
                                                    </label>
                                                    <label class="d-block mb-0" for="edo-ani2">
                                                        <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary">Deactivate Account</button>
                                        </div>
                                        <div class="account-setting deactivate-account">
                                            <h5 class="f-w-600">Delete Account</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="d-block" for="edo-ani3">
                                                        <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1" checked="">
                                                        No longer usable
                                                    </label>
                                                    <label class="d-block" for="edo-ani4">
                                                        <input class="radio_animated" id="edo-ani4" type="radio" name="rdo-ani1">
                                                        Want to switch on other account
                                                    </label>
                                                    <label class="d-block mb-0" for="edo-ani5">
                                                        <input class="radio_animated" id="edo-ani5" type="radio" name="rdo-ani1" checked="">
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary">Delete Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->


@endsection