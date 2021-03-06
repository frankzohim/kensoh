@extends('layouts.master')
@section('title', __('Contact'))

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="card-header">
                    @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                        <span class="alert-text"><strong>Succès! </strong> <strong>{{ session('success') }} </strong></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="card-header">
                                    @if (session('update_failure'))
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                                        <span class="alert-text"><strong>Succès! </strong> <strong>{{ session('update_failure') }} </strong></span>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                @endif
            </div>


                    <div class="page-title">
                        <h2>Formulaire de Contact</h2>
                    </div>

                <div class="col-sm-12">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Accueil</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

	<!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Contact</h3>
                    <div class="theme-card">
						<!-- Session Status -->
						<x-auth-session-status class="mb-4" :status="session('status')" />

						<!-- Validation Errors -->
						<x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form class="theme-form" method="POST" action="{{ route('contact.store') }}">
							@csrf
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" id="email" class="form-control" id="email" name="name" :value="old('name')" required autofocus placeholder="nom">
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse Email</label>
                                <input type="email" id="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus placeholder="adresse email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Numéro de téléphone</label>
                                <input type="number" id="phone" class="form-control" id="phone" name="phone" :value="old('phone')" required autofocus placeholder="Numéro de téléphone">

                            </div>
                            <div class="form-group">
                                <label for="subject">Objet</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Objet"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="localization">Localisation</label>
                                <input type="text" id="localization" class="form-control"  name="localization" :value="old('localization')" required autofocus placeholder="localisation">
                            </div>
							<button class="btn btn-solid" type="submit">Envoyez</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Section ends-->


@endsection
