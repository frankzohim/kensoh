@extends('layouts.master')

@section('title',__('Liste des trackings'))

@section('content')
      <!-- breadcrumb start -->
      <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Tous les trackings</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html.htm">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tous les trackings</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->
	
	
     <!-- about section start -->
     <section class="about-page section-b-space">
      <div class="container">
			   <div class="card-body vendor-table">
                    
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Lien</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trackings as $tracking)
                                <tr>
                                    <td>
                                        <div class="d-flex vendor-list">
                                            
                                            <span>{{$tracking->date}}</span>
                                        </div>
                                    </td>
                                    <td>
                                         {{$tracking->description}}
                                    </td>
                                    <td><a href="{{$tracking->link}}" target="_blank">

                                        Visiter le tracking
                                    </a>
                                    </td>
                                   
                                    
                                    
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
      
      </div>
  </section>
  <!-- about section end -->


  <!-- service section start -->

  <!-- service section end -->


@endsection