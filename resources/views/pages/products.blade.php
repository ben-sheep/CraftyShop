@extends('layouts.main')
@section('meta')

@endsection

@section('head')

@endsection

@section('style')

@endsection

@section('content')
    <div class="wrapper">
        <!-- Header Area Start -->

        <!-- Header Area End -->

        <!-- Mobile Header area Start -->

        <!-- Mobile Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area pt--70 pt-md--25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb">
                            <li><a href="{{url("/products/")}}">product</a></li>
                            <li class="current"><span>{{$product->name}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner enable-full-width">
                <div class="container-fluid">
                    <div class="row pt--40">
                        <div class="col-md-6 product-main-image">
                            <div class="product-image">
                                <div class="product-gallery vertical-slide-nav">
                                    <div class="product-gallery__thumb">
                                        <div class="product-gallery__thumb--image">
                                            <div class="airi-element-carousel nav-slider slick-vertical"
                                                 data-slick-options='{
                                                "slidesToShow": 3,
                                                "slidesToScroll": 1,
                                                "vertical": true,
                                                "swipe": true,
                                                "verticalSwiping": true,
                                                "infinite": true,
                                                "focusOnSelect": true,
                                                "asNavFor": ".main-slider",
                                                "arrows": true,
                                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-up" },
                                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-down" }
                                            }'
                                                 data-slick-responsive='[
                                                {
                                                    "breakpoint":992,
                                                    "settings": {
                                                        "slidesToShow": 4,
                                                        "vertical": false
                                                    }
                                                },
                                                {
                                                    "breakpoint":575,
                                                    "settings": {
                                                        "slidesToShow": 3,
                                                        "vertical": false
                                                    }
                                                },
                                                {
                                                    "breakpoint":480,
                                                    "settings": {
                                                        "slidesToShow": 2,
                                                        "vertical": false
                                                    }
                                                }
                                            ]'>
                                                @foreach($product->product_images->sortBy('order') as $prod_image)
                                                <figure class="product-gallery__thumb--single">
                                                    <img src="{{Voyager::image($prod_image->image)}}" alt="Products">
                                                </figure>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__large-image">
                                        <div class="gallery-with-thumbs">
                                            <div class="product-gallery__wrapper">
                                                <div class="airi-element-carousel main-slider product-gallery__full-image image-popup"
                                                     data-slick-options='{
                                                    "slidesToShow": 1,
                                                    "slidesToScroll": 1,
                                                    "infinite": true,
                                                    "arrows": false,
                                                    "asNavFor": ".nav-slider"
                                                }'>
                                                    @foreach($product->product_images->sortBy('order') as $prod_image)
                                                    <figure class="product-gallery__image zoom">
                                                        <img src="{{Voyager::image($prod_image->image)}}" alt="Product">
                                                    </figure>
                                                    @endforeach
                                                </div>
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i
                                                            class="dl-icon-zoom-in"></i></button>
                                                    <!--<a href="https://www.youtube.com/watch?v=Rp19QD2XIGM"
                                                       class="action-btn video-popup"><i
                                                            class="dl-icon-format-video"></i></a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="product-badge new">New</span>
                            </div>
                        </div>
                        <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                            <div class="product-summary">
                                <div class="product-rating float-left">
                                    <span>
                                        <i class="dl-icon-star rated"></i>
                                        @if(round($product->rating_average)>1)
                                            <i class="dl-icon-star rated"></i>
                                        @endif
                                        @if(round($product->rating_average)>2)
                                            <i class="dl-icon-star rated"></i>
                                        @endif
                                        @if(round($product->rating_average)>3)
                                            <i class="dl-icon-star rated"></i>
                                        @endif
                                        @if(round($product->rating_average)>4)
                                            <i class="dl-icon-star rated"></i>
                                        @endif
                                    </span>

                                    <span class="float-right">
                                        <a href="" class="review-link">&nbsp;({{$product->reviews->count()}} customer review)</a>
                                    </span>
                                </div>
                                <div class="product-navigation">
                                    <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                    <a href="#" class="next"><i class="dl-icon-right"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <h3 class="product-title">{{$product->name}} @if(!$product->options->isEmpty())- <span id="option-name">{{$product->options->sortBy('order')->first()->name}}</span>@endif</h3>
                                @if(!$product->options->isEmpty())
                                <div style="margin-top:-10px">
                                    <form id="option-choice">
                                        @csrf
                                        <select id="drop-options" name="option">
                                            @foreach($product->options->sortBy('order') as $option)
                                                <option value="{{$option->id}}">{{$option->name}}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                                @endif


                                <div class="product-price-wrapper mb--40 mb-md--10">
                                    <span class="money float-left" id="option-price">£@if(!$product->options->isEmpty()){{number_format($product->options->sortBy('order')->first()->price,2)}}@else{{number_format($product->price,2)}}@endif</span></span>
                                    @if(!$product->options->isEmpty())
                                        @if($product->options->sortBy('order')->first()->stock > 0)
                                            <span class="product-stock in-stock float-right" id="stock-check"><i class="dl-icon-check-circle1"></i>In Stock</span>
                                        @else
                                            <span class="product-stock in-stock float-right" id="stock-check"><h5>Out Of Stock</h5></span>
                                        @endif
                                    @else
                                        @if($product->stock > 0)
                                            <span class="product-stock in-stock float-right" id="stock-check"><i class="dl-icon-check-circle1"></i>In Stock</span>
                                        @else
                                            <span class="product-stock in-stock float-right" id="stock-check"><h5>Out Of Stock</h5></span>
                                        @endif
                                    @endif
                                </div>
                                <div class="pb-3 pt-5"></div>

                                <div class="clearfix"></div>
                                <form action="#" class="form--action mb--30 mb-sm--20">
                                    <div class="product-action flex-row align-items-center">
                                        <div class="quantity">
                                            <input id="quantity_add" type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                        </div>
                                        <button id="add_to_cart" type="button" class="btn btn-style-1 btn-large add-to-cart">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                </form>
                                <div>
                                    <p id="basket">In basket: ({{$quantity}})</p>
                                </div>
                                <div class="product-data-tab border-bottom pb--40 pb-md--30 pb-sm--20 tab-style-4">
                                    <div class="nav nav-tabs product-data-tab__head mb--40 mb-sm--30" id="product-tab"
                                         role="tablist">
                                        <a class="product-data-tab__link nav-link active" id="nav-description-tab"
                                           data-toggle="tab" href="#nav-description" role="tab" aria-selected="true">
                                            <span>Description</span>
                                        </a>
                                        <a class="product-data-tab__link nav-link" id="nav-reviews-tab"
                                           data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                                            <span>Reviews({{count($product->reviews)}})</span>
                                        </a>
                                    </div>
                                    <div class="tab-content product-data-tab__content" id="product-tabContent">
                                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                             aria-labelledby="nav-description-tab">
                                            <div class="product-description">
                                                {{$product->description}}
                                            </div>
                                        </div>

                                            <div class="tab-pane fade" id="nav-reviews" role="tabpanel"
                                                 aria-labelledby="nav-reviews-tab">
                                                <div class="product-reviews">
                                                    <h3 class="review__title">{{count($product->reviews)}} reviews for {{$product->name}}</h3>
                                                    @foreach($product->reviews as $review)
                                                        <div class="product-rating float-right">
                                                            <span>

                                                                <i class="dl-icon-star rated"></i>
                                                                @if($review->rating >1)
                                                                <i class="dl-icon-star rated"></i>
                                                                @endif
                                                                @if($review->rating >2)
                                                                    <i class="dl-icon-star rated"></i>
                                                                @endif
                                                                @if($review->rating >3)
                                                                    <i class="dl-icon-star rated"></i>
                                                                @endif
                                                                @if($review->rating >4)
                                                                    <i class="dl-icon-star rated"></i>
                                                                @endif

                                                            </span>
                                                        </div>
                                                        <div class="review__meta">
                                                            <strong class="review__author">{{$review->user->name}} </strong>
                                                            <span class="review__dash">-</span>
                                                            <span class="review__published-date">{{$review->created_at->format('d/m/Y')}}</span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p class="review__description">{{$review->review}}</p>
                                                    @endforeach
                                                    <br><br>
                                                    <div class="review-form-wrapper">
                                                        <span class="reply-title"><strong>Add a review</strong></span>
                                                        <form action="_POST" class="form">
                                                            <div class="form-notes mb--20">
                                                                <p>Your email address will not be published. Required fields
                                                                    are marked <span class="required">*</span></p>
                                                            </div>
                                                            <div class="form__group mb--30 mb-sm--20">
                                                                <div class="revew__rating">
                                                                    <p class="stars selected">
                                                                        <a class="star-1 active" href="#">1</a>
                                                                        <a class="star-2" href="#">2</a>
                                                                        <a class="star-3" href="#">3</a>
                                                                        <a class="star-4" href="#">4</a>
                                                                        <a class="star-5" href="#">5</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="form__group mb--30 mb-sm--20">
                                                                <div class="form-row">
                                                                    <div class="col-sm-6 mb-sm--20">
                                                                        <label class="form__label" for="name">Name<span
                                                                                class="required">*</span></label>
                                                                        <input type="text" name="name" id="name"
                                                                               class="form__input">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="form__label" for="email">email<span
                                                                                class="required">*</span></label>
                                                                        <input type="email" name="email" id="email"
                                                                               class="form__input">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form__group mb--30 mb-sm--20">
                                                                <div class="form-row">
                                                                    <div class="col-12">
                                                                        <label class="form__label" for="email">Your
                                                                            Review<span class="required">*</span></label>
                                                                        <textarea name="review" id="review"
                                                                                  class="form__input form__input--textarea"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form__group">
                                                                <div class="form-row">
                                                                    <div class="col-12">
                                                                        <input type="submit" value="Submit"
                                                                               class="btn btn-style-1 btn-submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div
                                    class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column mt--45 mt-md--35 mt-sm--25">
                                    <div class="product-meta">
                                        <span class="posted_in font-size-12">Categories:
                                            <a href="shop-sidebar.html">{{$product->category->name}}</a>
                                        </span>
                                        @if($product->tags)
                                            <span class="posted_in font-size-12">Tags:
                                                @foreach($product->tags as $tag)
                                                    {{$tag}} " "
                                                @endforeach
                                            </span>
                                        @endif
                                    </div>
                                    <div class="product-share-box">
                                        <span class="font-size-12">Share With</span>
                                        <!-- Social Icons Start Here -->
                                        <ul class="social social-small">
                                            <li class="social__item">
                                                <a href="https://facebook.com" class="social__link">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="https://twitter.com" class="social__link">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="https://plus.google.com" class="social__link">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="https://plus.google.com" class="social__link">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Social Icons End Here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt--70 pt-md--50 pt-sm--30 pb--35 pb-md--25 pb-sm--15">
                        <div class="col-12">
                            <div class="row mb--40 mb-md--30">
                                <div class="col-12 text-center">
                                    <h2 class="heading-secondary">Up-Sells Products</h2>
                                    <hr class="separator center mt--25 mt-md--15">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="airi-element-carousel product-carousel nav-vertical-center"
                                         data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": "dl-icon-left",
                                    "nextArrow": "dl-icon-right"
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'>
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('assets/img/products/prod-8-2.jpg')}}"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="{{asset('assets/img/products/prod-8-1.jpg')}}"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip"
                                                               data-placement="top" title="Quick Shop">
                                                                <span data-toggle="modal" data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Polka dot blouse</a>
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
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('assets/img/products/prod-3-2.jpg')}}"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="{{asset('assets/img/products/prod-3-3.jpg')}}"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip"
                                                               data-placement="top" title="Quick Shop">
                                                                <span data-toggle="modal" data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Dotted mesh blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$49.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('assets/img/products/prod-1-1.jpg')}}"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="{{asset('assets/img/products/prod-1-4.jpg')}}"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip"
                                                               data-placement="top" title="Quick Shop">
                                                                <span data-toggle="modal" data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Ruffled polka dot blouse</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$49.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('assets/img/products/prod-20-1.jpg')}}"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="{{asset('assets/img/products/prod-20-2.jpg')}}"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip"
                                                               data-placement="top" title="Quick Shop">
                                                                <span data-toggle="modal" data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge sale">Sale</span>
                                                </figure>
                                                <div class="product-info text-center">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt--30 pt-md--20 pt-sm--15 pb--75 pb-md--55 pb-sm--35">
                        <div class="col-12">
                            <div class="row mb--40 mb-md--30">
                                <div class="col-12 text-center">
                                    <h2 class="heading-secondary">Related Products</h2>
                                    <hr class="separator center mt--25 mt-md--15">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="airi-element-carousel product-carousel nav-vertical-center"
                                         data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": "dl-icon-left",
                                    "nextArrow": "dl-icon-right"
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":450, "settings": {"slidesToShow": 1} }
                                    ]'>
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('assets/img/products/prod-12-1.jpg')}}"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="{{asset('assets/img/products/prod-12-4.jpg')}}"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip"
                                                               data-placement="top" title="Quick Shop">
                                                                <span data-toggle="modal" data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Open sweatshirt</a>
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
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('assets/img/products/prod-5-3.jpg')}}"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="{{asset('assets/img/products/prod-5-4.jpg')}}"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip"
                                                               data-placement="top" title="Quick Shop">
                                                                <span data-toggle="modal" data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Split suede handbag</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$49.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('assets/img/products/prod-14-2.jpg')}}"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="{{asset('assets/img/products/prod-14-1.jpg')}}"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip"
                                                               data-placement="top" title="Quick Shop">
                                                                <span data-toggle="modal" data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Super skinny blazer</a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$49.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('assets/img/products/prod-7-2.jpg')}}"
                                                                 alt="Product Image" class="primary-image">
                                                            <img src="{{asset('assets/img/products/prod-7-1.jpg')}}"
                                                                 alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" data-toggle="tooltip"
                                                               data-placement="top" title="Quick Shop">
                                                                <span data-toggle="modal" data-target="#productModal">
                                                                    <i class="dl-icon-view"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add_to_cart_btn action-btn" href="cart.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Cart">
                                                                <i class="dl-icon-cart29"></i>
                                                            </a>
                                                            <a class="add_wishlist action-btn" href="wishlist.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.html"
                                                               data-toggle="tooltip" data-placement="top"
                                                               title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="product-badge sale">Sale</span>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html">Leopard print satin shirt</a>
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
        </div>
        <!-- Main Content Wrapper Start -->


        <!-- Search from Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="search" id="search" class="searchform__input"
                           placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End -->

        <!-- Side Navigation Start -->
        <aside class="side-navigation" id="sideNav">
            <div class="side-navigation-wrapper">
                <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="side-navigation-inner">
                    <div class="widget">
                        <ul class="sidenav-menu">
                            <li><a href="about-us.html">About Airi Shop</a></li>
                            <li><a href="about-us.html">Help Center</a></li>
                            <li><a href="shop-collections.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="shop-instagram.html">New Look</a></li>
                        </ul>
                    </div>
                    <div class="widget pt--30 pr--20">
                        <div class="text-widget">
                            <p>
                                <img src="{{asset('assets/img/others/payments.png')}}" alt="payment">
                            </p>
                            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet
                                fermentum justo dapibus.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p>
                                <a href="#">(+612) 2531 5600</a>
                                <a href="mailto:info@la-studioweb.com">info@la-studioweb.com</a>
                                PO Box 1622 Colins Street West
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget google-map-link">
                            <p>
                                <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
                                <li class="social__item">
                                    <a href="https://twitter.com" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://plus.google.com" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://facebook.com" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://youtube.com" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://instagram.com" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p class="copyright-text">&copy; 2018 Airi All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Side Navigation End -->

        <!-- Mini Cart Start -->

        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close custom-close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="dl-icon-close"></i></span>
                        </button>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1"
                                     data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/products/prod-9-1.jpg')}}" alt="Product Image"
                                                     class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge sale">sale</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/products/prod-10-1.jpg')}}" alt="Product Image"
                                                     class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge new">new</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="{{asset('assets/img/products/prod-11-1.jpg')}}" alt="Product Image"
                                                     class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge hot">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-box product-summary">
                                    <div class="product-navigation mb--10">
                                        <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                        <a href="#" class="next"><i class="dl-icon-right"></i></a>
                                    </div>
                                    <h3 class="product-title mb--15">Waxed-effect pleated skirt</h3>
                                    <span class="product-price-wrapper mb--20">
                                        <span class="money">$49.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$60.00</span>
                                        </span>
                                    </span>
                                    <p class="product-short-description mb--25 mb-md--20">Donec accumsan auctor iaculis.
                                        Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus,
                                        ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in
                                        vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at,
                                        hendrerit arcu.</p>
                                    <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="quick-qty"
                                                   value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart"
                                                onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                    <div class="product-extra mb--30 mb-md--20">
                                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near
                                            you</a>
                                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and
                                            return</a>
                                    </div>
                                    <div
                                        class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                                        <div class="product-meta">
                                            <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF.
                                                    LA-887</span></span>
                                            <span class="posted_in font-size-12">Categories: <a href="shop-sidebar.html"
                                                                                                rel="tag">Fashions</a></span>
                                        </div>
                                        <div class="product-share-box">
                                            <span class="font-size-12">Share With</span>
                                            <!-- Social Icons Start Here -->
                                            <ul class="social social-small">
                                                <li class="social__item">
                                                    <a href="https://facebook.com" class="social__link">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://twitter.com" class="social__link">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://plus.google.com" class="social__link">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://plus.google.com" class="social__link">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Social Icons End Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    </div>

@endsection
@section('scripts')
    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('assets/js/revoulation/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/extensions/revolution.extension.video.min.js')}}"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="{{asset('assets/js/revoulation.js')}}"></script>

    <script>
        var option_id @if(!$product->options->isEmpty())= "{{$product->options->sortBy('order')->first()->id}}" @endif;
        $("#drop-options").change(function () {

            //var alert2 = JSON.stringify({value:$("#drop-options :selected").text()});
                option_id = $(this).val();
                $.ajax({
                    url: '{{action('ProductController@getOption')}}',
                    type: 'post',
                    dataType: 'json',
                    data: $('#option-choice').serialize(),
                    success: function(data) {

                        $('#option-price').text("£" + data.price.toFixed(2));
                        $('#option-name').text(data.name);
                        $('#basket').text('In basket: (' + data.quantity + ')');
                        if(data.in_stock){
                            $('#stock-check').html(
                                '<i class="dl-icon-check-circle1"></i>In Stock'
                            );
                        } else {
                            $('#stock-check').html(
                                '<i class="fa fa-times-circle"></i>Out Of Stock'
                            );
                        }
                    },error: function(msg){
                        if( msg.status === 422 ) {
                            var errors = msg.responseJSON;
                            var errorsHtml = '';
                            $.each(errors['errors'], function (index, value) {
                                errorsHtml += '<ul class="list-group"><li class="list-group-item alert alert-danger">' + value + '</li></ul>';
                            });
                            swal.fire({
                                title: "Error " + msg.status,// this will output "Error 422: Unprocessable Entity"
                                html: errorsHtml,
                                width: 'auto',
                                confirmButtonText: 'Try again',
                                cancelButtonText: 'Cancel',
                                confirmButtonClass: 'btn',
                                cancelButtonClass: 'cancel-class',
                                showCancelButton: true,
                                closeOnConfirm: true,
                                closeOnCancel: true,
                                type: 'error'
                            });
                        }

                    }

            });
        });
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
        $("#add_to_cart").click(function () {

            $.ajax({
                url: '{{action('BasketController@addProduct')}}',
                type: 'post',
                dataType: 'json',
                data: {
                    'product_id':'{{$product->id}}',
                    'option_id':option_id,
                    'quantity':$('#quantity_add').val()
                },
                success: function(data) {
                    //alert(data.updated_quantity);
                    $('#basket').text('In basket: ('+data.updated_quantity+')');

                },error: function(msg){
                    if( msg.status === 422 ) {
                        var errors = msg.responseJSON;
                        var errorsHtml = '';
                        $.each(errors['errors'], function (index, value) {
                            errorsHtml += '<ul class="list-group"><li class="list-group-item alert alert-danger">' + value + '</li></ul>';
                        });
                        swal.fire({
                            title: "Error " + msg.status,// this will output "Error 422: Unprocessable Entity"
                            html: errorsHtml,
                            width: 'auto',
                            confirmButtonText: 'Try again',
                            cancelButtonText: 'Cancel',
                            confirmButtonClass: 'btn',
                            cancelButtonClass: 'cancel-class',
                            showCancelButton: true,
                            closeOnConfirm: true,
                            closeOnCancel: true,
                            type: 'error'
                        });
                    }

                }

            });
        });
    </script>
@endsection
