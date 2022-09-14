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
                            <p>L’entreprise KENSOH CAMEROUN LOGISTIQUE ET TRANSPORT est spécialisée dans le e-commerce, le groupage et le transport.</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/KenSoh-CLT-2194498840822699" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="kensoh.logistics@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                 
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>KENSOH DOUALA</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-phone"></i>Appel : +237 654 15 93 09
                                    </li>
                                    <li><i class="fa fa-whatsapp"></i>WhatsApp : +237 654 15 93 09</li>
                                    <li><i class="fa fa-envelope-o"></i>Email : <a href="#"><span style="text-transform: none"> kensoh.logistics@gmail.com </span></a></li>
                                    <li><i class="fa fa-map-marker"></i>Grande Shell village sur l’axe lourd Douala-Yaoundé</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>KENSOH YAOUNDE</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-phone"></i>Appel : +237 677 22 01 75
                                    </li>
                                    <li><i class="fa fa-whatsapp"></i>WhatsApp : +237 677 22 01 75</li>
                                    <li><i class="fa fa-envelope-o"></i>Email : <a href="#"> <span style="text-transform: none"> kensoh.logistics@gmail.com </span> </a></li>
                                    <li><i class="fa fa-map-marker"></i>Ngousso cimetière Fourgerol</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                       <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>KENSOH ALLEMAGNE</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-phone"></i>Appel : +49 176 24604129
                                    </li>
                                    <li><i class="fa fa-whatsapp"></i>WhatsApp : +49 176 24604129</li>
                                    <li><i class="fa fa-envelope-o"></i>Email : <a href="#"><span style="text-transform: none"> kensoh.logistics@gmail.com </span></a></li>
                                    <li><i class="fa fa-map-marker"></i>Augsbourg, Allemagne</li>
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
