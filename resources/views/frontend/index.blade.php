@extends('frontend.master')

@section('pagelevelcss')

@stop

@section('content')

    <main class="main-content">
        @include("frontend.partials.slider")
        
        <!-- Best Seller Products -->
        <section class="best-seller tc-padding">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2>Best <span class="theme-color">Seller</span> Books</h2>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Best sellers Tabs -->
                <div id="best-sellers-tabs" class="best-sellers-tabs">

                    <!-- Nav tabs -->
                    <div class="tabs-nav-holder">
                        <ul class="tabs-nav">
                            @foreach($category_list as $category_list_value)
                                @if($category_list_value->id == $category_list_value->categoryProduct['category_id'])

                                    <li><a href="#tab-{{ $category_list_value->id }}">{{ $category_list_value->category_name }}</a></li>

                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- Nav tabs -->

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Best Seller Slider -->
                    @foreach($category_list as $category_list_value)
                    <div id="tab-{{ $category_list_value->id }}">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            @foreach($vendor_list as $vendor_list_value)
                                @if($vendor_list_value->category_id == $category_list_value->id)
                                    <div class="item">
                                        <div class="product-box">
                                            <div class="product-img">
                                                <img src="{{ $vendor_list_value->cover->source }}" alt="">
                                                <ul class="product-cart-option position-center-x">
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                                </ul>
                                                <!-- <span class="sale-bacth">sale</span> -->
                                            </div>
                                            <div class="product-detail">

                                                <span>{{ $vendor_list_value->category->category_name }}</span>
                                                <h5><a href="#" class="myModal" data-toggle="modal" data-target="#myModal" data-vproid="{!! $vendor_list_value->id !!}" data-vcatid="{!! $vendor_list_value->category_id !!}" data-vsubcatid="{!! $vendor_list_value->sub_category_id !!}">{{ $vendor_list_value->vendor_name }}</a></h5>
                                                <p>{{ $vendor_list_value->summary }}</p>
                                                <div class="rating-nd-price">
                                                    <strong>$280.99</strong>
                                                    <ul class="rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="aurthor-detail">
                                                    <span><img class="user-profile" src="{!! asset('public/frontend/images/logo-1.png') !!}" alt="">Verified by QD</span>
                                                    <a class="add-wish" href="#"><input type="checkbox" name=""> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- Product Box -->                            

                        </div>
                    </div>
                    @endforeach
                    <!-- Best Seller Slider -->            
                    
                </div>
                <!-- Tab panes -->

                </div>
                <!-- Best sellers Tabs -->

            </div>
        </section>
        <!-- Best Seller Products -->

        <!-- Add Banners -->
        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row">

                    <!-- Banner -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="add-banner add-banner-1">
                            <div class="z-inedex-2 p-relative">
                                <h3>Celebrate the Book Authors</h3>
                                <p>How to Write a Book Review Request to Bloggers, a guide for authors</p>
                                <hr>
                                <strong class="font-merriweather">Buy Now 280.99 <sup>$</sup></strong>
                            </div>
                            <img class="adds-book" src="{!! asset('public/frontend/images/add-banners/add-books/img-01.png') !!}" alt="">
                        </div>
                    </div>
                    <!-- Banner -->

                    <!-- Banner -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="add-banner add-banner-2">
                            <div class="z-inedex-2 p-relative">
                                <strong>Look Books 2016</strong>
                                <h3>Up to 20% off</h3>
                                <hr>
                                <p>of advance enternce exam Books</p>
                            </div>
                            <img class="adds-book" src="{!! asset('public/frontend/images/add-banners/add-books/img-02.png') !!}" alt="">
                        </div>
                    </div>
                    <!-- Banner -->

                </div>
            </div>
        </section>
        <!-- Add Banners -->

        <!-- Recomend products -->
        <div class="recomended-products tc-padding">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Staff <span class="theme-color">Recomended </span> Books</h2>
                        <p>Whether you’re a large or small employer, enterpreneur, educational institution, professional</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Recomend products Slider -->
                <div class="recomend-slider">

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img class="img-sld" src="{!! asset('public/frontend/images/recomended-products/img-01.jpg') !!}" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img class="img-sld" src="{!! asset('public/frontend/images/recomended-products/img-02.jpg') !!}" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img class="img-sld" src="{!! asset('public/frontend/images/recomended-products/img-03.jpg') !!}" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img class="img-sld" src="{!! asset('public/frontend/images/recomended-products/img-04.jpg') !!}" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img class="img-sld" src="{!! asset('public/frontend/images/recomended-products/img-05.jpg') !!}" alt=""></a>
                    </div>
                    <!-- Item -->

                </div>
                <!-- Recomend products Slider -->

            </div>
        </div>
        <!-- Recomend products -->

        <!-- Book Collections -->
        <section class="book-collection">
            <div class="container">
                <div class="row">

                    <!-- Book Collections Tabs -->
                    <div id="book-collections-tabs">

                        <!-- collection Name -->
                        <div class="col-lg-3 col-sm-12">
                            <div class="sidebar">
                                <h4>Top Books Catagories</h4>
                                <ul>
                                    @foreach($category_list as $category_list_val)
                                        <li><a href="#cat-{{ $category_list_val->id }}" >{{ $category_list_val->category_name }}</a> </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- collection Name -->

                        <!-- Collection Content -->
                        <div class="col-lg-9 col-sm-12">
                            @foreach($category_list as $category_list_val)
                                <div class="collection" id="cat-{{ $category_list_val->id }}">
                                    <!-- Secondary heading -->
                                    <div class="sec-heading">
                                        <h3>Shop <span class="theme-color">Books</span> Collection</h3>
                                    </div>
                                    <!-- Secondary heading -->
 
                                    <!-- Collection Content -->
                                    <div class="collection-content" >
                                        <ul>                                        
                                            @foreach($sub_category_list as $sub_category_list_value)
                                                @if($sub_category_list_value->category_id == $category_list_val->id)

                                                <!-- <input type="hidden" name="cat_in_vendor_id" id="cat_in_vendor_id" value="">

                                                <input type="hidden" name="cat_in_category_id" id="cat_in_category_id" value="{!! $sub_category_list_value->category_id !!}">

                                                <input type="hidden" name="cat_in_sub_category_id" id="cat_in_sub_category_id" value="{!! $sub_category_list_value->id !!}"> -->

                                                    <li id="{{ $category_list_val->id }}">
                                                        <div class="s-product">
                                                            <div class="s-product-img">
                                                                @if($sub_category_list_value->cover->source != '')
                                                                    <img class="img-thumb-sub-category" src="{{ $sub_category_list_value->cover->source }}">
                                                                @else
                                                                    <img class="img-thumb-sub-category" src="{!! asset('public/frontend/images/Beauty-Spa/spa-1.jpg') !!}" alt="">
                                                                @endif

                                                                <div class="s-product-hover">
                                                                    <div class="position-center-x">
                                                                        <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                                        <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" data-product="" href="#">Quick view</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h6><a href="#">{{ $sub_category_list_value->sub_category_name }}</a></h6>
                                                            <span><a href="#" class="btn-1 sm shadow-0 myModalCategory" data-toggle="modal" data-target="#myModalCategory" data-proid="" data-catid="{!! $sub_category_list_value->category_id !!}" data-subcatid="{!! $sub_category_list_value->id !!}">Request Now </a></span>
                                                        </div>
                                                    </li>
                                                @endif  
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- Collection Content -->
                                </div>
                            @endforeach
                        </div>
                        <!-- Collection Content -->

                    </div>
                    <!-- Book Collections Tabs -->

                </div>
            </div>
        </section>
        <!-- Book Collections --> 

        <!-- Services -->
        <section class="services-area tc-padding-bottom">
            <div class="container">
                <div class="row">

                    <!-- Services Text -->
                    <div class="col-lg-4 col-xs-12">
                        <div class="services-text"> 
                            <strong>Our Book Shop Service</strong>
                            <h3>Bookselling is the commercial <span class="theme-color">Trading of books</span></h3>
                            <p>Scholars and students spent many hours in these bookshop schools reading, examining, and studying available books . or purchasing favourite selections for their private libraries. 
                            Book dealers traveled to </p>
                            <a href="#" class="btn-1 sm shadow-0">Read more<i aria-hidden="true" class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Services Text -->

                    <!-- Services -->
                    <div class="col-lg-8 col-xs-12">
                        <div class="Services">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-column">
                                        <span class="service-icon"><i class="icon-amazing"></i></span>
                                        <h5><a href="#">Amazing Design Quality</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column">
                                        <span class="service-icon"><i class="icon-intuitive-design"></i></span>
                                        <h5><a href="#">Intuitive Design</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column m-0">
                                        <span class="service-icon"><i class="icon-responsive"></i></span>
                                        <h5><a href="#">Responsive</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column m-0">
                                        <span class="service-icon"><i class="icon-seo-optimized"></i></span>
                                        <h5><a href="#">SEO Optimized</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services -->

                </div>
            </div>
        </section>
        <!-- Services --> 

        <!-- Related Products -->
        <section class="related-product tc-padding-bottom hori-scroll">
          <div class="container">

              <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Bookshop <span class="theme-color">Related</span> Products</h2>
                        <p>Have a reading loft in my house I will make this happen with</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Content -->
              <div class="content scroll-x">
                <ul>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-01.png') !!}" alt="">
                        <h5><a href="#">Business card</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-02.png') !!}" alt="">
                        <h5><a href="#">Basket Books</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-03.png') !!}" alt="">
                        <h5><a href="#">Cd Cover</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-04.png') !!}" alt="">
                        <h5><a href="#">File Folder</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-05.png') !!}" alt="">
                        <h5><a href="#">Books Rack</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-01.png') !!}" alt="">
                        <h5><a href="#">Stationary</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-01.png') !!}" alt="">
                        <h5><a href="#">Business card</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-02.png') !!}" alt="">
                        <h5><a href="#">Basket Books</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-03.png') !!}" alt="">
                        <h5><a href="#">Cd Cover</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-04.png') !!}" alt="">
                        <h5><a href="#">File Folder</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-05.png') !!}" alt="">
                        <h5><a href="#">Books Rack</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-01.png') !!}" alt="">
                        <h5><a href="#">Stationary</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-01.png') !!}" alt="">
                        <h5><a href="#">Business card</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-02.png') !!}" alt="">
                        <h5><a href="#">Basket Books</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-03.png') !!}" alt="">
                        <h5><a href="#">Cd Cover</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-04.png') !!}" alt="">
                        <h5><a href="#">File Folder</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-05.png') !!}" alt="">
                        <h5><a href="#">Books Rack</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-01.png') !!}" alt="">
                        <h5><a href="#">Stationary</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-01.png') !!}" alt="">
                        <h5><a href="#">Business card</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-02.png') !!}" alt="">
                        <h5><a href="#">Basket Books</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-03.png') !!}" alt="">
                        <h5><a href="#">Cd Cover</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-04.png') !!}" alt="">
                        <h5><a href="#">File Folder</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-05.png') !!}" alt="">
                        <h5><a href="#">Books Rack</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{!! asset('public/frontend/images/related-products/img-01.png') !!}" alt="">
                        <h5><a href="#">Stationary</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                </ul>
              </div>
              <!-- Content -->

          </div>
        </section>
        <!-- Related Products --> 

        <!-- Tweet Slider -->
        <div class="tweet">
            <div class="container">
              <div id="tweet-slider" class="tweet-slider">
                    <div class="item">
                        <span class="twit-icon"><i class="fa fa-twitter"></i></span>
                        <p><strong>@jhonrogie</strong> Woohoo! Check out the Twitter Search Plugin I just released with UpThemes! <a href="#"> htttp://upthem.es/twitter</a></p>
                        <ul>
                            <li><i class="fa fa-clock-o"></i>45 minutes ago from</li>
                            <li><i class="fa fa-map-marker"></i>Tower of Terror</li>
                        </ul>
                    </div>
                    <div class="item">
                        <span class="twit-icon"><i class="fa fa-twitter"></i></span>
                        <p><strong>@jhonrogie</strong> Woohoo! Check out the Twitter Search Plugin I just released with UpThemes! <a href="#"> htttp://upthem.es/twitter</a></p>
                        <ul>
                            <li><i class="fa fa-clock-o"></i>45 minutes ago from</li>
                            <li><i class="fa fa-map-marker"></i>Tower of Terror</li>
                        </ul>
                    </div>
              </div>
            </div>
        </div>
        <!-- Tweet Slider -->   
    </main>

@stop

@section('pageleveljs')

@stop