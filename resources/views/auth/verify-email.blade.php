@extends('layouts.master')
@section('title', __('Vérification d\'email'))

@section('content')
	
	<!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-6 right-login">
                    <h3>Votre compte a été bien créée</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Vérification de votre E-mail</h6>
                        <p>  {{ __("Merci pour votre inscription! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer ? Si vous n'avez pas reçu l'e-mail, nous vous en enverrons un autre avec plaisir.") }}.</p>
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-solid">Renvoyer l'e-mail de vérification</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


@endsection
