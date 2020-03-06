@extends('layouts.main')
@section('meta')

@endsection

@section('head')
<head>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">
</head>
@endsection

@section('style')

@endsection

@section('content')
    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--75 pt-md--50 pt-sm--30 pb--80 pb-md--60 pb-sm--35">
                    <div class="col-md-7 mb-sm--30">
                        <h2 class="heading-secondary mb--50 mb-md--35 mb-sm--20">Get in touch</h2>

                        <!-- Contact form Start Here -->

                        <form class="form" action="{{route('contactPost')}}" method="POST">
                            @csrf
                            <div class="form__group mb--20">
                                <input type="text" id="contact_name" name="name"
                                       class="form__input form__input--2" placeholder="Your name*">
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form__group mb--20">
                                <input type="email" id="contact_email" name="email"
                                       class="form__input form__input--2" placeholder="Email Address*">
                                @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form__group mb--20">
                                <input type="text" id="contact_phone" name="phone"
                                       class="form__input form__input--2" placeholder="Phone number">
                                @error('phone')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form__group mb--20">
                                <textarea class="form__input form__input--textarea" id="contact_message"
                                              name="message" placeholder="Message*"></textarea>
                                @error('message')
                                <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form__group">
                                <input type="submit" value="Send" class="btn btn-submit btn-style-1">
                            </div>

                        </form>
                        <!-- Contact form end Here -->

                    </div>
                    <div class="col-md-5 col-xl-4 offset-xl-1">
                        <h2 class="heading-secondary mb--50 mb-md--35 mb-sm--20">Contact info</h2>

                        <!-- Contact info widget start here -->
                        <div class="contact-info-widget mb--45 mb-sm--35">
                            <div class="contact-info">
                                <h3>Postal Address</h3>
                                <p></p>
                            </div>
                        </div>
                        <!-- Contact info widget end here -->

                        <!-- Contact info widget start here -->
                        <div class="contact-info-widget mb--45 mb-sm--35">
                            <div class="contact-info">
                                <h3>Craft Gift Shop HQ</h3>
                            </div>
                        </div>
                        <!-- Contact info widget end here -->

                        <!-- Contact info widget start here -->
                        <div class="contact-info-widget two-column-list sm-one-column mb--45 mb-sm--35">
                            <div class="contact-info mb-sm--35">
                                <h3>Business Phone</h3>
                                <a href="">12345678901</a>
                            </div>
                            <div class="contact-info">
                                <h3>Say Hello</h3>
                                <a href="">info@crafty.com</a>
                            </div>
                        </div>
                        <!-- Contact info widget end here -->
                        <!-- Social Icons Start Here -->
                        <ul class="social body-color">
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
            </div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div id="google-map">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('assets/js/revoulation/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/js/revoulation/jquery.themepunch.revolution.min.js')}}"></script>
    <script>
        $('.invalid-feedback').css('display','contents');
        $('#contact_message').css('color','#111111');
    </script>



@endsection
