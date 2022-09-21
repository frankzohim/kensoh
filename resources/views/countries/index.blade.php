@extends('layouts.app')

@section('title',__('Liste des pays'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Tous les pays
                            <small>Tableau de bord Kensoh</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('country.index')}}">villes</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

   	<!-- Container-fluid starts-->
       <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5>Tous les Pays</h5><br>
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

                    <div class="card-body vendor-table">

                        <table class="display" id="basic-1">
                            <thead>
                            <tr>

                                <th>Nom</th>
                                <th>Code postal</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $country)
                                <tr>

                                    <td>
                                        <span>{{$country->name_fr}}</span>
                                    </td>

                                    <td>
                                        <span>{{$country->postal_code}}</span>
                                    </td>



                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Container-fluid Ends-->

</div>

@endsection
