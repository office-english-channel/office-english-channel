<footer id="footer"> 

    <!-- Footer columns -->
    <div class="footer-columns">
        <div class="container">

            <!-- Add banner -->
            <div class="footer-ad-banner">
                <a href="#"><img src="images/footer-ad-banner.jpg" alt=""></a>
            </div>
            <!-- Add banner -->

            <!-- Columns Row -->
            <div class="row">
                
                <!-- Footer Column -->
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-column logo-column">
                        <a href="#"><img src="images/logo-2.png" alt=""></a>
                        @if($contact_details['contact_text'] != '')
                            <p>{!! $contact_details['contact_text'] !!}</p>
                        @endif                        
                        <ul class="address-list">
                            @if($contact_details['contact_address'] != '')
                                <li><i class="fa fa-home"></i>{!! $contact_details['contact_address'] !!}</li>
                            @endif
                            @if($contact_details['contact_phone'] != '')
                                <li><i class="fa fa-phone"></i>{!! $contact_details['contact_phone'] !!}</li>
                            @endif
                            @if($contact_details['admin_email'] != '')
                                <li><i class="fa fa-envelope"></i>{!! $contact_details['admin_email'] !!}</li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->

                <!-- Footer Column -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-column footer-links">
                        <h4>Information</h4>
                        <ul>
                            @foreach($footer_list['first_column'] AS $record)
                                <li><a href="{!! URL::route('frontend.cmspage', [ 'slug' => $record->page->slug ]) !!}">{!! $record->name !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->

                <!-- Footer Column -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-column footer-links">
                        <h4>Shipping info</h4>
                        <ul>
                            @foreach($footer_list['second_column'] AS $record)
                                <li><a href="{!! URL::route('frontend.cmspage', [ 'slug' => $record->page->slug ]) !!}">{!! $record->name !!}</a></li>   
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-column newsletter">
                            <h4>Weekly Newsletter</h4>
                            <p>Get our awesome releases and latest updates with exclusive news and offers in your inbox.</p>
                            <form class="newsletter-input">
                                <i class="fa fa-envelope-o"></i>
                                <input class="form-control.newsletter" type="text" placeholder="Enter Your Email">
                                <button>SUBSCRIBE</button>
                            </form>
                            <p>We're on Social Networks. Follow us &amp; get in touch!</p>
                            <ul class="social-icons">
                                @if($contact_details['facebook_url'] != '')
                                    <li><a class="facebook" href="{!! $contact_details['facebook_url'] !!}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                @endif
                                @if($contact_details['twitter_url'] != '')
                                    <li><a class="twitter" href="{!! $contact_details['twitter_url'] !!}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                @endif
                                @if($contact_details['youtube_url'] != '')
                                    <li><a class="youtube" href="{!! $contact_details['youtube_url'] !!}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                @endif
                                @if($contact_details['google_plus_url'] != '')
                                    <li><a class="pinterest" href="{!! $contact_details['google_plus_url'] !!}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column -->

            </div>
            <!-- Columns Row -->

        </div>
    </div>
    <!-- Footer columns -->
    
    <!-- Sub Footer -->
    <div class="sub-foorer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>Copyright <i class="fa fa-copyright"></i> 2005-2016 <span class="theme-color">FineLayers</span> All Rights Reserved.</p>
                </div>
                <div class="col-sm-6">
                    <a class="back-top" href="#">Back to Top<i class="fa fa-caret-up"></i></a>
                    <ul class="cards-list">
                        <li><img src="images/cards/img-01.jpg" alt=""></li>
                        <li><img src="images/cards/img-02.jpg" alt=""></li>
                        <li><img src="images/cards/img-03.jpg" alt=""></li>
                        <li><img src="images/cards/img-04.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer -->

</footer>