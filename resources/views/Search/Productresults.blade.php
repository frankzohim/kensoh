@extends('layouts.master')
        @section('title', 'Search Result')

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
                                    <li class="breadcrumb-item"><a href="index.html.htm">home</a></li>
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
                                                  <h3 style="text-align: center;">Resultats</h3>

                                              </div>
                                          </div>
                                          <div class="collection-product-wrapper">
                                              <div class="product-top-filter">
                                                  <div class="container-fluid p-0">
                                                      <div class="row">
                                                          <div class="col-12">
                                                              <div class="product-filter-content">
                                                                  <div class="search-count">
                                                                      <h5>Showing Products 1-24 of 10 Result</h5>
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
                                                                          <option value="High to low">24 Products Par Page
                                                                          </option>
                                                                          <option value="Low to High">50 Products Par Page
                                                                          </option>
                                                                          <option value="Low to High">100 Products Par Page
                                                                          </option>
                                                                      </select>
                                                                  </div>
                                                                  <div class="product-page-filter">
                                                                      <select>
                                                                          <option value="High to low">Sorting items</option>
                                                                          <option value="Low to High">50 Products</option>
                                                                          <option value="Low to High">100 Products</option>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="product-wrapper-grid">
                                                  <div class="row margin-res">
                                                      @forelse($products as $product)
                                                      <div class="col-xl-3 col-6 col-grid-box">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="#"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="#"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                                </div>
                                                                <div class="cart-info cart-wrap">
                                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html.htm" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <div>
                                                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                                    <a href="{{ route('product.showbyId',$product->id) }}">
                                                                        <h6>{{ $product->name }}</h6>
                                                                    </a>
                                                                    <p>{{ $product->meta_description }}</p>
                                                                    <h4>{{ $product->unit_price }} Fcfa</h4>
                                                                    <ul class="color-variant">
                                                                        <li class="bg-light0"></li>
                                                                        <li class="bg-light1"></li>
                                                                        <li class="bg-light2"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      @empty
                                                          <div>
                                                              <h5 style="text-align: center;color:red;">
                                                                    Aucun Resultats
                                                              </h5>
                                                          </div>
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
