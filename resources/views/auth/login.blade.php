@extends('layouts.master')
@section('title', __('Login'))

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Connexion Utilisateur</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="route('homepage')">Accueil</a></li>
                            <li class="breadcrumb-item active">Connexion</li>
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
                    <h3>Connexion</h3>
                    <div class="theme-card">
						<!-- Session Status -->
						<x-auth-session-status class="mb-4" :status="session('status')" />

						<!-- Validation Errors -->
						<x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
							@csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="review">Mot de passe</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" autocomplete="current-password" required>
                            </div>
							<button class="btn btn-solid" type="submit">Connexion</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>Nouveau sur Kensoh?</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Créer un compte</h6>
                        <p>Créez un compte gratuit dans notre magasin. L'inscription est simple et rapide. Il vous permet d'être
                            en mesure de commander dans notre boutique. Pour commencer à magasiner, cliquez sur "Créer un compte".</p><a href="{{ route('register') }}" class="btn btn-solid">Créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


@endsection
