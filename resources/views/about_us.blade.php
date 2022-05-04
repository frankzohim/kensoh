@extends('layouts.master')
@section('title', 'A Propos')

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <div class="page-title">
                      <h2>A Propos</h2>
                  </div>
              </div>
              <div class="col-sm-6">
                  <nav aria-label="breadcrumb" class="theme-breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html.htm">Acceuil</a></li>
                          <li class="breadcrumb-item active" aria-current="page">A Propos</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
  <!-- breadcrumb end -->

   <!-- about section start -->
   <section class="about-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-section"><img src="/assets/frontend/images/about/kensoh.jpg" class="img-fluid blur-up lazyload" alt=""></div>
            </div>
            <div class="col-sm-12">
                <h4>Kensoh Cameroon Logistics & Transports
                </h4>
                
                <p>Nos services:
                    Achat des produits de qualité sur commande
                    Vente des produits de qualité
                    Groupage
                    Transport en toute securite vers le cameroun
                </p>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->


<!--Team start-->
<section id="team" class="team section-b-space slick-default-margin ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Notre Equipe</h2>
                <div class="team-4">
                    <div>
                        <div>
                            <img src="/assets/frontend/images/team/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <h4>Hileri Keol</h4>
                        <h6>CEo & Founder At Company</h6>
                    </div>
                    <div>
                        <div>
                            <img src="/assets/frontend/images/team/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <h4>Hileri Keol</h4>
                        <h6>CEo & Founder At Company</h6>
                    </div>
                    <div>
                        <div>
                            <img src="/assets/frontend/images/team/3.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <h4>Hileri Keol</h4>
                        <h6>CEo & Founder At Company</h6>
                    </div>
                    <div>
                        <div>
                            <img src="/assets/frontend/images/team/4.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <h4>Hileri Keol</h4>
                        <h6>CEo & Founder At Company</h6>
                    </div>
                    <div>
                        <div>
                            <img src="/assets/frontend/images/team/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <h4>Hileri Keol</h4>
                        <h6>CEo & Founder At Company</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team ends-->

@endsection