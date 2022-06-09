@extends('layouts.master')
@section('title', __('Détails'.' '.$product->name))
<style>

    *{
        margin: 0;
        padding: 0;
    }
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:px;
        display:none;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:25px;
        color:#ccc;
    }
    .rate:not(:checked) > label:before {
        content: '★ ';
    }
    .rate > input:checked ~ label {
        color: #eebe0f;
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }

    .review-container{
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }
    .profil-review{
        width: 30px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
    }
    .comment{
        margin-left: 12px;
        padding: 12px;
        background-color: rgb(226, 226, 226);
    }
    .user-review{
        margin-bottom: 0;
        margin-top: 0;
        font-size: 10px;
        font-weight: bold;
        color:black;
    }
    .review-comment{
        margin-bottom: 0;
        margin-top: 0;
    }
    .comment div{
        height:12px;
    }
</style>
@section('content')
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h2>{{$product->name}}</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('homepage')}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a >produits</a></li>
                                <li class="breadcrumb-item" aria-current="page">{{$product->name}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

		 <!-- section start -->
     <section>
        <div class="collection-wrapper">
            <div class="container">
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
					<div class="col-lg-6">
                        <div class="product-slick">
                            @php $images = $product->product_images @endphp
								@foreach($images as $image )
									<div><img src="{{route('product.displayImage',$image->id)}}" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
							   	@endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                                   @foreach($images as $image )
                                        <div><img src="{{route('product.displayImage',$image->id)}}" alt="" class="img-fluid blur-up lazyload"></div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <div class="product-count">
                                <ul>
                                    <li>
                                        <img src="/assets/frontend/images/fire.gif" class="img-fluid" alt="image">
                                        <span class="p-counter">37</span>
                                        <span class="lang">commandes il ya 24 heures</span>
                                    </li>
                                    <li>
                                        <img src="/assets/frontend/images/person.gif" class="img-fluid user_img" alt="image">
                                        <span class="p-counter">44</span>
                                        <span class="lang">Utilisateurs l'ont vu</span>
                                    </li>
                                </ul>
                            </div>
                            <h2>{{$product->name}}</h2>
                            <div class="rating-section">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <h6>{{$review}} notes</h6>
                            </div>
                            <div class="label-section">
                                <span class="badge badge-grey-color">@if($product->new==1) Neuf @else Occassion @endif</span>
                                <span class="label-text">
                                    @switch($product->position)
                                        @case(1)
                                            En Mer
                                            @break
                                        @case(2)
                                            Au Magasin
                                            @break
                                        @case(3)
                                            Sur le Web
                                            @break
                                    @endswitch
                                </span>
                            </div>

                            <div id="selectSize" class="addeffect-section product-description border-product">


                                <h6 class="product-title">Entrez votre prix en FCFA</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                        <i class="fa fa-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" id="price" class="form-control input-number" value="1">
                                        <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="fa fa-angle-right"></i></button></span>
                                    </div>
                                </div>
                            </div>

                            <div class="product-buttons">
                                <a  id="cartEffect" onclick="javacript:window.location.assign('https://wa.me/4917624604129?text=Je suis intéressé par le produit : {{$product->name}}, mon offre de prix : '+ document.getElementById('price').value, '_blank')" class="btn btn-solid hover-solid btn-animation"><i class="fa fa-dollar fz-16 me-2" aria-hidden="true"></i>Faire une Offre </a>
                                <a href="https://wa.me/4917624604129?text=Je suis intéressé par le produit : {{$product->name}}" target="_blank" class="btn btn-solid"><i class="fa fa-whatsapp me-1" aria-hidden="true"></i>Discuter sur WhatsApp</a>
                            </div>

                            <div class="product-count">
                                <ul>
                                    <li>
                                        <img src="/assets/frontend/images/icon/truck.png" class="img-fluid" alt="image">
                                        <span class="lang">Livraison gratuite pour les commandes supérieures à 1000 Euro</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="border-product">
                                <h6 class="product-title">Informations d'expédition</h6>
                                <ul class="shipping-info">
                                    <li>100% Produits Originaux</li>
                                    <li>Livraison gratuite sur commande supérieure à 1000$</li>
                                    <li>Paiement à la livraison disponible</li>
                                    <li>Retours & échanges faciles sous 30 jours</li>
                                </ul>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">Partagez</h6>
                                <div class="product-icon">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">100% secure payment</h6>
                                <img src="/assets/frontend/images/payment.png" class="img-fluid mt-1" alt="">
                            </div>

							<!-- product-tab starts -->
							  <section class="tab-product m-0">
								<div class="container">
									<div class="row">
										<div class="col-sm-12 col-lg-12">
											<ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
												<li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-selected="true"><i class="icofont icofont-ui-home"></i>Détails</a>
													<div class="material-border"></div>
												</li>
                                                <li class="nav-item"><a class="nav-link" id="list-review" data-bs-toggle="tab" href="#top-list-review" role="tab" aria-selected="false"><i class="icofont icofont-ui-home"></i>Notes</a>
													<div class="material-border"></div>
												</li>

												<li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-selected="false"><i class="icofont icofont-contacts"></i>Vidéo</a>
													<div class="material-border"></div>
												</li>
												<li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab" href="#top-review" role="tab" aria-selected="false"><i class="icofont icofont-contacts"></i>Noter le Produit</a>
													<div class="material-border"></div>
												</li>
											</ul>
											<div class="tab-content nav-material" id="top-tabContent">
												<div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
													<div class="product-tab-discription">
														<div class="part">
															<p>{{$product->meta_description}}</p>
														</div>
														<div class="part">
															<h5 class="inner-title">Quantité en stock : {{$product->stock_quantity}}</h5>

														</div>
														<div class="part">
															<h5 class="inner-title">Marque : {{$product->brand->name}}</h5>
														</div>
														<div class="part">
															<h5 class="inner-title">Catégorie : {{$product->category->name}}</h5>

														</div>
													</div>
												</div>
                                                <div class="tab-pane fade" id="top-list-review" role="tabpanel" aria-labelledby="list-review">
                                                    @forelse ($reviews as $review )
                                                    @foreach ($users as $user)

                                                        @if($user->id==$review->user_id)
                                                        <div class="review-container">
                                                            <img class="profil-review" src="{{ asset('assets/backend/images/dashboard/profile.png') }}" alt="">
                                                            <div class="comment">
                                                                <div>
                                                                    <p class="user-review">
                                                                        {{ $user->name }}
                                                                    </p>
                                                                </div>

                                                                <p class="review-comment">
                                                                    {{$review->comment}}
                                                                </p>

                                                            </div>

                                                        </div>

                                                        @endif
                                                    @endforeach


                                               @empty
                                                   aucun commentaire
                                               @endforelse
												</div>
												<div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
													<div class="">
														<iframe width="560" height="315" src="{{$product->video_url}}" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
													</div>
												</div>
												<div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
													<form class="theme-form" action="{{ route("review.store") }}" method="POST">
                                                        @csrf
														<div class="form-row row">
															<div class="col-md-12">
                                                                    <div class="media">
                                                                        <label>Nombre d'étoiles</label>
                                                                        <div class="media-body ms-3">

                                                                            <div class="rate">
                                                                                <input type="radio" id="star5" name="rate" required value="5" />
                                                                                <label for="star5" title="text">5 stars</label>
                                                                                <input type="radio" id="star4" name="rate" value="4" />
                                                                                <label for="star4" title="text">4 stars</label>
                                                                                <input type="radio" id="star3" name="rate" value="3" />
                                                                                <label for="star3" title="text">3 stars</label>
                                                                                <input type="radio" id="star2" name="rate" value="2" />
                                                                                <label for="star2" title="text">2 stars</label>
                                                                                <input type="radio" id="star1" name="rate" value="1"/>
                                                                                <label for="star1" title="text">1 star</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                    <div class="col-md-12">
                                                                        <label for="review">Commentaire</label>
                                                                        <textarea class="form-control" placeholder="Votre Commentaire Ici" name="comment" rows="6" cols=""></textarea>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <button class="btn btn-solid" type="submit">
                                                                            Envoyer votre note
                                                                        </button>
                                                                    </div>
														    </div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- product-tab ends -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->







@endsection
