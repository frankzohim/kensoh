@extends('layouts.app')
@section('title', __('Editer une marque'))

@section('content')

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Editer une marque
                                    <small>Kensoh Dashboard</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Marque</li>
                                <li class="breadcrumb-item active">Editer</li>
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
                                <h5>Editer une marque</h5>
                            </div>
                            <div class="card-body">
                                <div class="row product-adding">
                                    
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
                                    <div class="col-xl-12">
                                        <form class="needs-validation add-product-form" method="POST" action="{{route('brand.update', $brand->id)}}" >
                                            @csrf
											@method('PUT')
											<div class="form">
                                                <div class="form-group mb-3 row">
                                                    <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Nom :</label>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input type="text" name="name" id="name" class="form-control" value="{{ $brand->name }}" required autofocus>
                                                    </div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                   
                                                </div>
                                                
                                            </div>
											
											<div class="form-group">
													<label class="col-form-label">Status<span>*</span></label>
													<div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
														<label class="d-block" for="edo-ani">
															<input class="radio_animated"  type="radio" name="state" @if ($brand->state==1) checked @endif value="1">
															Publié
														</label>
														<label class="d-block" for="edo-ani1">
															<input class="radio_animated"  type="radio" name="state" value="0" @if ($brand->state==0) checked @endif>
															Non Publié
														</label>
													</div>
											</div>
              
                                            <div class="offset-xl-3 offset-sm-4">
                                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                                <button type="button" class="btn btn-light">Annuler</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->



@endsection