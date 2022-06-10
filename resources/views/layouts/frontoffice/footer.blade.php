 <!-- footer -->
 <footer class="footer-light">
        <div class="light-layout">
            <div class="container">
                <section class="small-section border-section border-top-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="subscribe">
                                <div>
                                    <h4>REJOIGNEZ NOTRE NEWSLETTER </h4>
                                    <p>Ne manquez rien de kensoh en vous inscrivant à notre newsletter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form method="POST" action="{{ route('newsletter.store') }}" class="form-inline subscribe-form auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                @csrf
                                <div class="form-group mx-sm-3">
                                    <input type="text" class="form-control" name="email" id="mce-EMAIL" placeholder="Entrer votre Email" required="required">
                                </div>
                                <button type="submit" class="btn btn-solid" id="mc-submit">S'abonner</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo"><img src="/assets/frontend/images/icon/logo.png" alt=""></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Catégories</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>

                                    <li><a href="#">Électronique</a></li>
                                    <li><a href="#">ordimateurs</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Liens Rapides</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">Recherche</a></li>
                                    <li><a href="#">Review</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="{{ route('contact.create') }}">contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>information Kensoh</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>Kensoh, Augsbourg, Allemagne 345-659
                                    </li>
                                    <li><i class="fa fa-phone"></i>Appel : +49 176 2460-4129</li>
                                    <li><i class="fa fa-envelope-o"></i>Email : <a href="#">Support@kensoh.com</a></li>
                                    <li><i class="fa fa-fax"></i>Fax: 123456</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2021-2022 Kensoh powered by
                                Stillforce</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/frontend/images/icon/visa.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/frontend/images/icon/mastercard.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/frontend/images/icon/paypal.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/frontend/images/icon/american-express.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/frontend/images/icon/discover.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
