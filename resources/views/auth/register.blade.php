@extends('layouts.master')
@section('title', __('Inscription'))

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Créer un compte</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html.htm">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">créer un compte</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>créer un compte</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="{{ route('register') }}" >
						     @csrf
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Prénom</label>
                                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus placeholder="Prénom" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname">Nom</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" :value="old('lastname')" placeholder="Nom" required="">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" :value="old('email')" required class="form-control"  placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Type de compte</label>
                                    <select class="form-select" aria-label="Default select example" title="Account Type"   name='account_type'>
                                        <option disabled selected>{{ __('Type de compte') }}</option>
                                        <option value="2">{{ __('Client') }}</option>
                                        <option value="3">{{ __('Vendeur') }}</option>
                                     </select>
                                </div>
                               
                            </div>
							<div class="form-row row">
                                <div class="col-md-6">
                                        <label for="review">Mot de passe</label>
                                        <input type="password" id="password" name="password" required autocomplete="new-password" class="form-control" placeholder="Entrer votre mot de passe">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Confirmez Mot de passe</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="Confirmez votre mot de passe">
                                </div>
                            </div>

                            <div class="form-row row">
                                <div class="col-md-6">
                                        <label for="review">Pays</label>
                                        <select class="form-select" aria-label="Default select example" name="country_id">
                                            @foreach ($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name_fr}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Téléphone</label>
                                    <input type="tel" id="telephone" name="telephone" required  class="form-control" placeholder="Numéro de téléphone sans indicatif">
                                </div>
                            </div>
                          
                            <input id="country_name" name="country_name" type="hidden">
						<input id="country_code" name="country_code" type="hidden">
						<input id="country_iso2" name="country_iso2" type="hidden">
                            <br>
                            <button class="btn btn-solid w-auto" type="submit">Créer un compte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
    <script src="intl-tel-input-master/build/js/intlTelInput.js"></script>
  <script>
  
		var input = document.querySelector("#phone");
		var iti = window.intlTelInput(input, {
		  allowDropdown: true,
		  //autoHideDialCode: true,
		  // autoPlaceholder: "off",
		  // dropdownContainer: document.body,
		  // excludeCountries: ["us"],
		   //formatOnDisplay: false,
		  // geoIpLookup: function(callback) {
		  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		  //     var countryCode = (resp && resp.country) ? resp.country : "";
		  //     callback(countryCode);
		  //   });
		  // },
		   //hiddenInput: "full_number",
		  initialCountry: 'cm',
		  // localizedCountries: { 'de': 'Deutschland' },
		  //nationalMode: true,
		  //onlyCountries: ['cm'],
		  // placeholderNumberType: "MOBILE",
		  // preferredCountries: ['cn', 'jp'],
		  separateDialCode: true,
		  utilsScript: "E:/laragon/www/kensoh/public/intl-tel-input-master/buildbuild/js/utils.js",
		});
		
      
		var countryData = iti.getSelectedCountryData();
		//alert(countryData.dialCode);
		//alert(countryData.name);
		
		
		function myFunction() {
			var countryData = iti.getSelectedCountryData();
			//alert(countryData.dialCode);
			//alert(countryData.name);
			document.getElementById("country_name").value = countryData.name;
			document.getElementById("country_code").value = countryData.dialCode;
			document.getElementById("country_iso2").value = countryData.iso2;
			
		}
		
  </script>
@endsection