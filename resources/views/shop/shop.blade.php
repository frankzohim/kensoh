

@extends('layouts.master')
@section('title', 'Boutique')

@section('content')
<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>collection</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">collection</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
      <div class="collection-wrapper">
          <div class="container">
              <div class="row">
                  <div class="collection-content col">
                      <div class="page-main-content">
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="top-banner-wrapper">
                                      <a href="#"><img src="../assets/images/mega-menu/2.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                      <div class="top-banner-content small-section">
                                          <h4>LES PLUS GRANDES OFFRES SUR LES MEILLEURES MARQUES</h4>
                                          
                                      </div>
                                  </div>
                                  <div class="collection-product-wrapper">
                                      <div class="product-top-filter">
                                          <div class="container-fluid p-0">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="product-filter-content">
                                                          <div class="search-count">
                                                              <h5>Affichage des produits 1-24 de 10 Résultat</h5>
                                                          </div>
                                                          <div class="collection-view">
                                                              <ul>
                                                                  <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                  <li><i class="fa fa-list-ul list-layout-view"></i>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <div class="collection-grid-view">
                                                              <ul>
                                                                  <li><img src="../assets/images/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                                  <li><img src="../assets/images/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                                  <li><img src="../assets/images/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                                  <li><img src="../assets/images/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                              </ul>
                                                          </div>
                                                          <div class="product-page-per-view">
                                                              <select>
                                                                  <option value="High to low">24 Produits Par Page
                                                                  </option>
                                                                  <option value="Low to High">50 Produits Par Page
                                                                  </option>
                                                                  <option value="Low to High">100 Produits Par Page
                                                                  </option>
                                                              </select>
                                                          </div>
                                                          <div class="product-page-filter">
                                                              <select>
                                                                  <option value="High to low">Trier les éléments</option>
                                                                  <option value="Low to High">50 Produits</option>
                                                                  <option value="Low to High">100 Produits</option>
                                                              </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-wrapper-grid">
                                          <div class="product-4 product-m no-arrow">
                                              @forelse($products as $product)
												<div class="product-box">
													<div class="img-wrapper">
														<div class="lable-block">@if($product->new == 1)<span class="lable3"> Neuf </span>@endif @if($product->new == 0)<span class="lable4"> Occassion </span>@endif</div>
														<div class="front">
															<a href="{{route('product.details',$product->id)}}">
																@if(count($product->product_images) != 0)
																<img src="{{route('product.displayImage',$product->product_images[0]->id)}}" class="img-fluid blur-up lazyload bg-img" alt="">
															</a>
															   @endif
														</div>
														<div class="back">
															@if(count($product->product_images) == 2)
																<a href="{{route('product.details', $product->id)}}"><img src="{{route('product.displayImage',$product->product_images[1]->id)}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
															@endif
														</div>
														<div class="cart-info cart-wrap">

															 <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view{{ $product->id }}" title="Aperçu">
																<i class="fa fa-search" aria-hidden="true">
																</i>
															</a>
															@auth
																@if (auth()->user()->role_id==2)
																	@livewire('product-fovorite')
																	<a href="javascript:void(0)" wire:click.prevent="store({{ auth()->user()->id }},{{ $product->id }})" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
																@endif
															@endauth



															<a href="https://wa.me/4917624604129?text=Je suis intéressé par le produit : {{$product->name}}" target="_blank" title="Discuter sur WhatsApp">
																<i class="fa fa-whatsapp" aria-hidden="true"></i>
															</a>



															<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view{{ $product->id }}" title="Faire un offre de prix">
																<i class="fa fa-dollar" aria-hidden="true"></i>
															</a>

														</div>
													</div>
													<div class="product-detail">
														<div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
														</div>
														<a href="{{route('product.details', $product->id)}}">
															<h6>{{$product->name}}</h6>
														</a>
														<h4>
															@switch($product->position)
															@case (1)
																En mer
																@break
															@case(2)
																En magasin
																@break
															@case(3)
																Sur le web
																@break
															@endswitch
														</h4>
														<ul class="color-variant">
															<li class="bg-light0"></li>
															<li class="bg-light1"></li>
															<li class="bg-light2"></li>
														</ul>
													</div>
												</div>
                    @empty
                    @endforelse


                                          </div>
                                      </div>
                                      <div class="product-pagination">
                                          <div class="theme-paggination-block">
                                              <div class="container-fluid p-0">
                                                  <div class="row">
                                                      <div class="col-xl-6 col-md-6 col-sm-12">
                                                          <nav aria-label="Page navigation">
                                                              <ul class="pagination">
                                                                  <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                  <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                              </ul>
                                                          </nav>
                                                      </div>
                                                      <div class="col-xl-6 col-md-6 col-sm-12">
                                                          <div class="product-search-count-bottom">
                                                              <h5>Showing Products 1-24 of 10 Result</h5>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- section End -->

@endsection
