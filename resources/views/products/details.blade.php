@extends('layouts.master')
@section('title', __('Détails'.' '.$product->name))

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
                                <h6>120 notes</h6>
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
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="fa fa-angle-left"></i></button> </span>
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
									   
												<div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
													<div class="">
														<iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
													</div>
												</div>
												<div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
													<form class="theme-form">
														<div class="form-row row">
															<div class="col-md-12">
																<div class="media">
																	<label>Rating</label>
																	<div class="media-body ms-3">
																		<div class="rating three-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<label for="name">Name</label>
																<input type="text" class="form-control" id="name" placeholder="Enter Your name" required="">
															</div>
															<div class="col-md-6">
																<label for="email">Email</label>
																<input type="text" class="form-control" id="email" placeholder="Email" required="">
															</div>
															<div class="col-md-12">
																<label for="review">Review Title</label>
																<input type="text" class="form-control" id="review" placeholder="Enter your Review Subjects" required="">
															</div>
															<div class="col-md-12">
																<label for="review">Review Title</label>
																<textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
															</div>
															<div class="col-md-12">
																<button class="btn btn-solid" type="submit">Submit YOur
																	Review</button>
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