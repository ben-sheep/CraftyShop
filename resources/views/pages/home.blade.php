@extends('layouts.main')
@section('meta')

@endsection

@section('head')

@endsection

@section('style')

@endsection

@section('content')
<div id="content" class="main-content-wrapper">
    <div class="homepage-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                         data-alias="home-05" data-source="gallery"
                         style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.4.7 auto mode -->
                        <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;"
                             data-version="5.4.7">
                            <ul>
                                @foreach($mainSlider as $slider)
                                <!-- SLIDE  -->
                                    <li data-index="rs-7" data-transition="random-premium" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="default"
                                        data-thumb="{{Voyager::image($slider->image)}}" data-rotate="0"
                                        data-saveperformance="off" data-title="01" data-param1="" data-param2=""
                                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                        data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{Voyager::image($slider->image)}}" alt=""
                                             data-bgposition="center center" data-bgfit="cover"
                                             data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption     rev_group" id="slide-7-layer-1"
                                             data-x="['center','center','center','center']"
                                             data-hoffset="['-21','-21','-21','0']"
                                             data-y="['middle','middle','middle','middle']"
                                             data-voffset="['-1','-1','-1','0']"
                                             data-width="['818','818','630','428']"
                                             data-height="['380','380','342','272']" data-whitespace="nowrap"
                                             data-type="group" data-responsive_offset="on"
                                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                             data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                             data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                             data-textAlign="['inherit','inherit','inherit','inherit']"
                                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                             style="z-index: 5; min-width: 818px; max-width: 818px; max-width: 380px; max-width: 380px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption   tp-resizeme" id="slide-7-layer-2"
                                                 data-x="['center','center','center','center']"
                                                 data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                                 data-voffset="['0','0','0','0']"
                                                 data-fontsize="['24','24','20','20']" data-width="none"
                                                 data-height="none" data-whitespace="nowrap" data-type="text"
                                                 data-responsive_offset="on"
                                                 data-frames='[{"delay":"+310","speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                                 data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                                 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                 style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 30px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                                {{$slider->subtitle}} </div>

                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption   tp-resizeme" id="slide-7-layer-3"
                                                 data-x="['center','center','center','center']"
                                                 data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                                 data-voffset="['30','30','29','34']"
                                                 data-fontsize="['199','199','150','100']"
                                                 data-lineheight="['200','200','150','100']" data-width="none"
                                                 data-height="none" data-whitespace="nowrap" data-type="text"
                                                 data-responsive_offset="on"
                                                 data-frames='[{"delay":"+780","speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                                 data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                                 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                 style="z-index: 7; white-space: nowrap; font-size: 199px; line-height: 200px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                                {{$slider->title}} </div>
                                            @isset($slider->button_text)
                                            <!-- LAYER NR. 5 -->
                                                <a class="tp-caption LA_White_btn rev-btn " href="{{$slider->button_link}}" target="_blank"
                                                   id="slide-7-layer-5" data-x="['center','center','center','center']"
                                                   data-hoffset="['2','2','1','1']" data-y="['top','top','top','top']"
                                                   data-voffset="['311','311','259','208']"
                                                   data-fontsize="['14','14','14','12']" data-width="none"
                                                   data-height="none" data-whitespace="nowrap" data-type="button"
                                                   data-responsive_offset="on" data-responsive="off"
                                                   data-frames='[{"delay":"+1490","speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(207,152,126);bs:solid;bw:0 0 0 0;"}]'
                                                   data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                                   data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                                   data-textAlign="['inherit','inherit','inherit','inherit']"
                                                   data-paddingtop="[15,15,15,12]" data-paddingright="[45,45,45,34]"
                                                   data-paddingbottom="[15,15,15,12]" data-paddingleft="[45,45,45,35]"
                                                   style="z-index: 9; white-space: nowrap; border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">{{$slider->button_text}} </a>
                                                @endisset
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div><!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
    </div>

    <!-- Banner Area Start Here -->
    <div class="banner-area pt--80 pt-md--60 pb--30 pb-md--25">
        <div class="container-fluid">
            <div class="row">
                @for($x = 0; $x<2;$x++)
                <div class="col-md-6">
                    <div class="banner-box banner-type-5 banner-hover-3">
                        <div class="banner-inner">
                            <div class="banner-image">
                                <img src="{{Voyager::image($featuresBig[$x]->product->thumbnail()->image)}}" alt="assets/img/banner/m05-banner1.jpg">
                            </div>
                            <div class="banner-info">
                                <!--<div class="banner-info--inner">
                                    <p class="banner-title-1 lts-10 lts-xs-0 font-bold text-uppercase">Checked
                                        Shirt</p>
                                    <p class="banner-title-4 mtb--10">
                                        <span>Sale</span>
                                        <span>50%</span>
                                    </p>
                                    <p class="banner-title-5 mt--10 mb--20">Don't Miss This Chance</p>
                                </div>-->
                                <a class="btn btn-medium btn-style-1 btn-bordered mt--30 mt-lg--10"
                                   href="shop-sidebar.html">Shop Now</a>
                            </div>
                            <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->

    <!-- Product tab area Start Here -->
    <section class="product-tab-area ptb--40 ptb-md--30">
        <div class="container-fluid">
            <div class="row mb--40 mb-md--30">
                <div class="col-12 text-center">
                    <h2 class="heading-secondary">New Arrival</h2>
                    <hr class="separator center mt--25 mt-md--15">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-tab tab-style-3">
                        <div class="nav nav-tabs product-tab__head justify-content-center align-items-center flex-md-row flex-column mb--40 mb-md--30"
                             id="product-tab" role="tablist">
                            <a class="product-tab__link nav-link active" id="nav-all-tab" data-toggle="tab"
                               href="#nav-all" role="tab" aria-selected="true">
                                <span>All</span>
                            </a>
                            @for($x = 0; $x<count($category) ;$x++)
                                <a class="product-tab__link nav-link" id="nav-{{$category[$x]->slug}}-tab" data-toggle="tab"
                                   href="#nav-{{$category[$x]->slug}}" role="tab" aria-selected="true">
                                    <span>{{$category[$x]->name}}</span>
                                </a>
                            @endfor
                        </div>
                        <div class="tab-content product-tab__content fadeInUp" id="product-tabContent">
                            <div class="tab-pane show active" id="nav-all" role="tabpanel"
                                 aria-labelledby="nav-all-tab">

                            </div>
                            @foreach($category as $cat)
                                <div class="tab-pane" id="nav-{{$cat->slug}}" role="tabpanel" aria-labelledby="nav-{{$cat->slug}}-tab">
                                    <div class="row">
                                        @foreach($cat->products()->get() as $product)
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="{{Voyager::image($product->thumbnail()->thumbnail('cropped'))}}"
                                                                         alt="Product Image" class="primary-image">
                                                                    <img src="{{Voyager::image($product->thumbnail()->thumbnail('cropped'))}}"
                                                                         alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Quick Shop">
                                                                            <span data-toggle="modal"
                                                                                  data-target="#productModal">
                                                                                <i class="dl-icon-view"></i>
                                                                            </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn"
                                                                       href="cart.html" data-toggle="tooltip"
                                                                       data-placement="top" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn"
                                                                       href="wishlist.html" data-toggle="tooltip"
                                                                       data-placement="top" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn"
                                                                       href="compare.html" data-toggle="tooltip"
                                                                       data-placement="top" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <span class="product-badge hot">hot</span>
                                                        </figure>
                                                        <div class="product-info">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Chain print bermuda
                                                                    shorts</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                    <span class="money">$49.00</span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            <div class="tab-pane" id="nav-women" role="tabpanel"
                                 aria-labelledby="nav-women-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-17-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-17-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda
                                                            shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-16-4-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-16-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-3-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-3-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-11-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-11-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-10-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-10-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather
                                                            backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-19-4-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-19-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-9-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-9-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-7-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-7-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin
                                                            shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-20-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-20-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck
                                                            t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-15-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-15-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped
                                                            Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-4-3-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-4-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with
                                                            toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-12-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-12-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-6-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-6-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized
                                                            blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-8-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-8-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-19-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-19-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-2-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-2-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody
                                                            bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-kids" role="tabpanel" aria-labelledby="nav-kids-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-17-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-17-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda
                                                            shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-16-4-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-16-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-3-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-3-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-11-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-11-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-10-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-10-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather
                                                            backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-19-4-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-19-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-9-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-9-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-7-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-7-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin
                                                            shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-20-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-20-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck
                                                            t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-15-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-15-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped
                                                            Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-4-3-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-4-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with
                                                            toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-12-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-12-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-6-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-6-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized
                                                            blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-8-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-8-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-19-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-19-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-2-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-2-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody
                                                            bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-accessories" role="tabpanel"
                                 aria-labelledby="nav-accessories-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-17-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-17-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda
                                                            shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-16-4-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-16-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-3-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-3-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-11-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-11-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-10-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-10-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather
                                                            backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-19-4-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-19-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-9-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-9-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-7-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-7-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin
                                                            shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-20-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-20-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck
                                                            t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-15-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-15-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped
                                                            Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-4-3-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-4-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with
                                                            toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-12-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-12-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-6-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-6-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized
                                                            blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-8-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-8-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-19-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-19-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-2-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-2-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody
                                                            bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-bags-shoes" role="tabpanel"
                                 aria-labelledby="nav-bags-shoes-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-17-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-17-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge hot">hot</span>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Chain print bermuda
                                                            shorts</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-16-4-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-16-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Check blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-3-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-3-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-11-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-11-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dress with belt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                                <span class="product-price-old">
                                                                    <span class="money">$60.00</span>
                                                                </span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-10-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-10-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Grey blue leather
                                                            backpack</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-19-4-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-19-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                    </h3>
                                                    <div class="product-rating">
                                                                <span>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star rated"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                    <i class="dl-icon-star"></i>
                                                                </span>
                                                    </div>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-9-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-9-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Jogging trousers</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-7-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-7-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin
                                                            shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-20-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-20-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Limited edition v-neck
                                                            t-shirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-15-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-15-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Linen-Blend Pinstriped
                                                            Culottes</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                    <div class="product-color-swatch">
                                                        <a class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                        <a class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-4-3-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-4-2-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Mid-heel ankle boots with
                                                            toecap</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-12-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-12-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-6-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-6-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Patchwork print oversized
                                                            blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-8-2-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-8-1-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-19-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-19-4-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Product Grouped</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="assets/img/products/prod-2-1-1.jpg"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="assets/img/products/prod-2-3-1.jpg"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Quick Shop">
                                                                        <span data-toggle="modal"
                                                                              data-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn"
                                                               href="cart.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn"
                                                               href="wishlist.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn"
                                                               href="compare.html" data-toggle="tooltip"
                                                               data-placement="top" title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Round raffia crossbody
                                                            bag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
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
            <div class="row">
                <div class="col-12 text-center">
                    <a href="shop-sidebar.html" class="heading-button">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Product tab area End Here -->

    <!-- Instagram Feed area Start Here -->
    <section class="instagram-feed-area pt--35 pb--40 pt-md--25 pb-md--30">
        <div class="container-fluid">
            <div class="row mb--30 mb-md--20">
                <div class="col-12 text-center">
                    <div class="insta-content-header insta-content-header--2">
                        <h5 class="font-size-16 heading-color font-bold">Follow us on</h5>
                        <h2>@Airi Instagram</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="instagram-feed">
                        <div id="instafeed" class="instagram-feed-wrapper instagram-carousel grid-space-30"
                             data-insta-config='{
                                    "userid": "6665768655",
                                    "accesstoken": "6665768655.1677ed0.313e6c96807c45d8900b4f680650dee5",
                                    "get":"user",
                                    "sortBy":"none",
                                    "limit":"8",
                                    "resolution":"low_resolution",
                                    "template":"<div class=\"grid-item\"><div class=\"instagram-feed-item\"><a href=\"@{{link}}\" target=\"_blank\" id=\"@{{id}}\"><img src=\"@{{image}}\" /></a><div class=\"instagram-feed-hover-content\"><span class=\"tottallikes\"><i class=\"fa fa-heart\"></i>@{{likes}}</span><span class=\"totalcomments\"><i class=\"fa fa-comments\"></i>@{{comments}}</span></div></div></div>"}'>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Feed area End Here -->

    <!-- Method area Start Here -->
    <section class="method-area pt--40 pt-md--30 pb--75 pb-md--55">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-md--30">
                    <div class="method-box method-box-2 text-center">
                        <img src="assets/img/icons/icon-1.png" alt="Icon">
                        <h4 class="mt--20">FREESHIPPING WORLD WIDE</h4>
                        <p>Freeship over oder $100</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-md--30">
                    <div class="method-box method-box-2 text-center">
                        <img src="assets/img/icons/icon-2.png" alt="Icon">
                        <h4 class="mt--20">30 DAYS MONEY Returns</h4>
                        <p>Derabitur eget vehicula</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm--30">
                    <div class="method-box method-box-2 text-center">
                        <img src="assets/img/icons/icon-3.png" alt="Icon">
                        <h4 class="mt--20">SUPPORT 24/7</h4>
                        <p>Dedicated Support</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="method-box method-box-2 text-center">
                        <img src="assets/img/icons/icon-4.png" alt="Icon">
                        <h4 class="mt--20">100% SECURE CHECKOUT</h4>
                        <p>Protect buyer &amp; Security</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')
    <!-- REVOLUTION JS FILES -->
    <script src="assets/js/revoulation/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/revoulation/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="assets/js/revoulation/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="assets/js/revoulation.js"></script>
@endsection
