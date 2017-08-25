
<!--start footer section-->
<footer class="footer-v2">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-widget widget-about">
                        <div class="widget-top">
                            <h3 class="widget-title">About Site</h3>
                        </div>
                        <div class="widget-body">
                            <p>Multi Royal Villas, just living is not enough. One must have sunshine, freedom and the fragrances of blooming flowers to make it a complete experience, Multi Royal Villas provides it all.</p>
                            <p class="read"><a href="{{ url('about_us')}}">Read more <i class="fa fa-caret-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-top">
                            <h3 class="widget-title">Contact Us</h3>
                        </div>
                        <div class="widget-body">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-location-arrow"></i> 27 A Street 2, Liberty Market Lahore </li>
                                <li><i class="fa fa-phone"></i> +92 061 457 3487</li>
                                <li><i class="fa fa-envelope-o"></i> <a href="#">info@housez.com</a></li>
                            </ul>
                            <p class="read"><a href="{{ url('contact_us')}}">Contact us <i class="fa fa-caret-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footer-widget widget-newsletter">
                        <div class="widget-top">
                            <h3 class="widget-title">Newsletter Subscribe</h3>
                        </div>
                        <div class="widget-body">
                            <form>
                                <div class="table-list">
                                    <div class="form-group table-cell">
                                        <div class="input-email input-icon">
                                            <input class="form-control" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="table-cell">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <p>Houzez is a real estate.<br>Don’t forget to follow us on:</p>
                             @foreach($Social_account as $social)
                            <ul class="social">
                                <li>
                                    <a href="{{$social->facebook}}" target="_blank" class="btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="{{$social->twitter}}" target="_blank" class="btn-twitter"><i class="fa fa-twitter-square"></i></a>
                                </li>
                                <li>
                                    <a href="{{$social->google_pluse}}" target="_blank" class="btn-google-plus"><i class="fa fa-google-plus-square"></i></a>
                                </li>
                                <li>
                                    <a href="{{$social->linked_In}}" target="_blank" class="btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                                </li>
                            </ul>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col">
                        <p>Houzez - All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-col">
                        <div class="navi">
                            <ul id="footer-menu" class="">
                                <li><a href="{{ url('privacy')}}">Privacy</a></li>
                                <li><a href="{{ url('terms_and_conditions')}}">Terms and Conditions</a></li>
                                <li><a href="{{ url('contact_us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col foot-social">
                        @foreach($Social_account as $social)
                        <p>
                            Follow us
                            <a target="_blank" class="btn-facebook" href="{{$social->facebook}}"><i class="fa fa-facebook-square"></i></a>

                            <a target="_blank" class="btn-twitter" href="{{$social->twitter}}"><i class="fa fa-twitter-square"></i></a>

                            <a target="_blank" class="btn-linkedin" href="{{$social->google_pluse}}"><i class="fa fa-linkedin-square"></i></a>

                            <a target="_blank" class="btn-google-plus" href="{{$social->linked_In}}"><i class="fa fa-google-plus-square"></i></a>

                            <!--<a target="_blank" class="btn-instagram" href="#"><i class="fa fa-instagram"></i></a>-->
                        </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer section-->
