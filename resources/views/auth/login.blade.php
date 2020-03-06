@extends('layouts.main')
@section('meta')

@endsection

@section('head')

@endsection

@section('style')

@endsection

@section('content')
    <div class="wrapper">
        <!-- Breadcrumb area Start -->

        <!-- Breadcrumb area End -->
        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner">
                <div class="container">
                    <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-md-6 mb-sm--30 center">
                            <div class="login-box">
                                <h4 class="mb--35 mb-sm--20">Login</h4>
                                <!-- Login area -->
                                <form class="form form--login" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">Username or email
                                            address <span class="required">*</span></label>

                                        <input id="email" type="email" class="form__input form__input--3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="password">Password <span
                                                class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password" name="password">
                                        @error('password')
                                            <span class="invalid-feedback">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center mb--20">
                                        <div class="form__group">
                                            <input type="submit" value="Log in" class="btn btn-submit btn-style-1">
                                        </div>
                                        <div class="form__group">
                                            <label class="form__label checkbox-label" for="store_session">
                                                <input type="checkbox" name="store_session" id="store_session">
                                                <span>Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <a class="forgot-pass" href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->
    </div>
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


@endsection

