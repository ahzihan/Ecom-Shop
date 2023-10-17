<footer class="footer_dark">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                	<div class="widget">
                        <div class="footer_logo">
                            <a href="{{ url('/') }}"><img src="{{asset('assets/images/logo_light.png')}}" alt="logo"></a>
                        </div>
                        <p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
        		</div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="/policy?name=about">About Us</a></li>
                            <li><a href="/policy?name=how to buy">How To Buy</a></li>
                            <li><a href="/policy?name=contact">Contact</a></li>
                            <li><a href="/policy?name=complain">Complain</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Legals</h6>
                        <ul class="widget_links">
                            <li><a href="/policy?name=refund">Refund Policy</a></li>
                            <li><a href="/policy?name=terms">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            @if (Cookie::get('token') !== null)
                            <li><a href="{{ url('/profile') }}">Profile</a></li>
                            <li><a href="{{ url('/wishlist') }}">Wish List</a></li>
                            <li><a href="{{ url('/cart-list') }}">Cart List</a></li>
                            <li><a href="{{ url('/profile') }}">Order History</a></li>
                            @else
                            <li><a href="{{ url('/login') }}">Profile</a></li>
                            <li><a href="{{ url('/login') }}">Wish List</a></li>
                            <li><a href="{{ url('/login') }}">Cart List</a></li>
                            <li><a href="{{ url('/login') }}">Order History</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>House #08, Word #05, Post-Office Road, Moddo Badda, Dhaka-1212</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:akbarhossain5813@gmail.com">akbarhossain5813@gmail.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>01518-729991</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-start">© 2023 All Rights Reserved by ahzihan</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-end">
                        <li><a href="#"><img src="{{asset('assets/images/visa.png')}}" alt="visa"></a></li>
                        <li><a href="#"><img src="{{asset('assets/images/discover.png')}}" alt="discover"></a></li>
                        <li><a href="#"><img src="{{asset('assets/images/master_card.png')}}" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{asset('assets/images/paypal.png')}}" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{asset('assets/images/amarican_express.png')}}" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
