<section class="upcoming-release">

    <!-- Heading -->
    <div class="container-fluid p-0">
        <div class="release-heading pull-right h-white">
            <h5>New and Upcoming Release</h5>
        </div>
    </div>
    <!-- Heading -->

    <!-- Upcoming Release Slider -->
    <div class="upcoming-slider">
        <div class="container">

            <!-- Release Book Detail -->
            <div class="release-book-detail h-white p-white">
                <div class="release-book-slider">
                    @foreach($vendor_list_slider as $vendor_list_slider_value)
                        <div class="item">
                            <div class="detail">
                                <!-- <input type="hidden" id="vendor_id" value="{{ $vendor_list_slider_value->id }}">
                                <input type="hidden" id="category_id" value="{{ $vendor_list_slider_value->category_id }}">
                                <input type="hidden" id="sub_category_id" value="{{ $vendor_list_slider_value->sub_category_id }}"> -->
                                <h5><a href="#">{{ $vendor_list_slider_value->vendor_name }}</a></h5>
                                <p>{{ $vendor_list_slider_value->summary }}.</p>
                                <span><a href="#" class="btn-1 sm shadow-0 myModalSliderSingle" data-toggle="modal" data-target="#myModalSliderSingle" data-ssproid="{!! $vendor_list_slider_value->id !!}" data-sscatid="{!! $vendor_list_slider_value->category_id !!}" data-sssubcatid="{!! $vendor_list_slider_value->sub_category_id !!}">Request Now</a></span>
                                <i class="fa fa-angle-double-right"></i>
                            </div>
                            <div class="detail-img">
                                @if($vendor_list_slider_value->cover->source != '')
                                    <img class="img-thumb-slider" src="{{ $vendor_list_slider_value->cover->source }}">
                                @else
                                    <img class="img-thumb-slider" src="{!! asset('public/frontend/images/upcoming-release/img-01.jpg') !!}" alt="">
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Release Book Detail -->

            <!-- Thumbs -->
            <div class="release-thumb-holder">
                <ul id="release-thumb" class="release-thumb">
                    @foreach($vendor_list_slider as $vendor_list_slider_value)
                        <li>

                            <a data-slide-index="{{ $vendor_list_slider_value->id }}" href="#">
                                <span>{{ $vendor_list_slider_value->vendor_name }}</span>
                                @if($vendor_list_slider_value->cover->source != '')
                                    <img class="img-thumb" src="{{ $vendor_list_slider_value->cover->source }}">
                                @else
                                    <img class="img-thumb" src="{!! asset('public/frontend/images/upcoming-release/thumb/img-01.jpg') !!}" alt="">
                                @endif
                                <img class="b-shadow" src="{!! asset('public/frontend/images/upcoming-release/b-shadow.png') !!}" alt="">
                                <span data-toggle="modal" class="plus-icon myModalSlider" data-toggle="modal" data-target="#myModalSlider" data-vsproid="{!! $vendor_list_slider_value->id !!}" data-vscatid="{!! $vendor_list_slider_value->category_id !!}" data-vssubcatid="{!! $vendor_list_slider_value->sub_category_id !!}">+</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Thumbs -->

        </div>
    </div>
    <!-- Upcoming Release Slider -->

</section>
