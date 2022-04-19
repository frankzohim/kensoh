@extends('layouts.master')
@section('title', __('Login'))

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
            </div>
                <div class="col-sm-6">

                    <div class="page-title">
                        <h2>Connexion Utilisateur</h2>
                    </div>

                <div class="col-sm-6">
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
                <div class="col-lg-6">
                    <h3>Contact</h3>
                    <div class="theme-card">
						<!-- Session Status -->
						<x-auth-session-status class="mb-4" :status="session('status')" />

						<!-- Validation Errors -->
						<x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form class="theme-form" method="POST" action="{{ route('contact.store') }}">
							@csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="email" class="form-control" id="email" name="name" :value="old('name')" required autofocus placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="number" id="phone" class="form-control" id="phone" name="phone" :value="old('phone')" required autofocus placeholder="phone">

                            </div>
                            <div class="form-group">
                                <label for="subject">Object</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="subject"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="localization">Localization</label>
                                <input type="text" id="localization" class="form-control"  name="localization" :value="old('localization')" required autofocus placeholder="localization">
                            </div>
							<button class="btn btn-solid" type="submit">Envoyez</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>Nouveau sur Kensoh?</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Créer un compte</h6>
                        <p>Créez un compte gratuit dans notre magasin. L'inscription est simple et rapide. Il vous permet d'être
                            en mesure de commander dans notre boutique. Pour commencer à magasiner, cliquez sur "Créer un compte".</p><a href="#" class="btn btn-solid">Créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


@endsection
