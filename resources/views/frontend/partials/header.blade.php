<header id="header">
    
    <!-- Top Bar -->
    <div class="topbar">
        <div class="container">
            
            <!-- Online Option -->
            <div class="online-option">
                <ul>
                    <li><a href="#">online store</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">Return</a></li>
                    <li><a href="#">Become A Professional</a></li>
                    
                </ul>
            </div>
            <!-- Online Option -->

            <!-- Social Icons -->
            <div class="social-icons pull-right">
                <ul>
                    @if($contact_details['facebook_url'] != '')
                        <li><a class="fa fa-facebook" href="{!! $contact_details['facebook_url'] !!}" target="_blank"></a></li> 
                    @endif
                    @if($contact_details['twitter_url'] != '')
                        <li><a class="fa fa-twitter" href="{!! $contact_details['twitter_url'] !!}" target="_blank"></a></li> 
                    @endif
                    @if($contact_details['google_plus_url'] != '')
                        <li><a class="fa fa-google-plus" href="{!! $contact_details['google_plus_url'] !!}" target="_blank"></a></li> 
                    @endif
                    @if($contact_details['pinterest_url'] != '')
                        <li><a class="fa fa-pinterest-p" href="{!! $contact_details['pinterest_url'] !!}" target="_blank"></a></li> 
                    @endif
                </ul>
            </div>
            <!-- Social Icons -->

            <!-- Cart Option -->
            <div class="cart-option">
                <ul>
                    <!-- <li class="add-cart"><a href="#"><i class="fa fa-shopping-bag"></i><span>3</span></a></li>
                    <li><a href="#"><i class="fa fa-heart-o"></i>wish List 0 items</a></li> -->
                    <li><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i>Login / Sign-Up</a></li>
                </ul>
            </div>
            <!-- Cart Option -->

        </div>
    </div>
    <!-- Top Bar -->

    @include("frontend.partials.headerMenu")

    <!--BANNER-->
    <div id="main-slider" class="main-slider">

        <!-- Item -->
        <div class="item">
            <img src="{!! asset('public/frontend/images/banner/bg-1.jpg') !!}" alt="">
            <div class="banner-overlay">
                <div class="container p-relative">
                    
                    <!-- Layer Img -->
                    <div class="layer-img">
                        <img src="{!! asset('public/frontend/images/banner/layer-1.png') !!}" alt="">
                    </div>
                    <!-- Layer Img -->

                    <!-- caption -->
                    <div class="caption style-1 position-center-x">
                        <h1>I love this idea!</h1>
                        <b>Cover up front of book and leave summary</b>
                        <p>Booking is Australia’s number-one source of news about the book industry, keeping subscribers</p>
                        <a href="#" class="btn-1">Learn more<i class="fa fa-arrow-circle-right"></i></a> 
                    </div>
                    <!-- caption -->

                </div>
            </div>
        </div>
        <!-- Item -->

        <!-- Item -->
        <div class="item">
            <img src="{!! asset('public/frontend/images/banner/bg-2.jpg') !!}" alt="">
            <div class="banner-overlay">
                <div class="container position-center-center">

                    <!-- caption -->
                    <div class="caption style-2">
                        <h1>Reading a book is like <span>Re Writing it for yourself</span></h1>
                        <p>A Cambridge academic claims to have found the first use of a ‘brilliant innovation’ that has endured as a mark of incomplete speech</p>
                    </div>
                    <!-- caption -->

                </div>
            </div>
        </div>
        <!-- Item -->

    </div>
    <!--BANNER-->

</header>
<!-- Header