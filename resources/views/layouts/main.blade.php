<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/dl-icon.css') }}">
    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">
    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/revoulation.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
    @yield('styles')
    @yield('head')
</head>
<body>
    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>
    <div class="wrapper">
        @include('partials.header')
        @include('partials.mobile_header')
        @include('partials.modal')
        @yield('content')
        @include('partials.footer')
        @include('partials.shopping')
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
        <div class="ai-global-overlay"></div>

    </div>


    <script src="{{ asset('/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery JS -->
    <script src=" {{asset('/assets/js/vendor/jquery.min.js')}}"></script>
    <!-- Bootstrap and Popper Bundle JS -->
    <script src=" {{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- All Plugins Js -->
    <script src=" {{asset('/assets/js/plugins.js')}}"></script>
    <!-- Ajax Mail Js -->
    <script src=" {{asset('/assets/js/ajax-mail.js')}}"></script>
    <!-- Main JS -->
    <script src=" {{asset('/assets/js/main.js')}}"></script>
    <!-- Cart JS -->
    <script src=" {{asset('/assets/js/cart.js')}}"></script>
    <script>
        $('body').on('click','.remove',function(){
            product_id = $(this).data('product');
            var atag = $(this);
            option_id = $(this).data('option');
            $.ajax({
                url: "{{action('BasketController@removeItem')}}",
                type: 'post',
                dataType: 'json',
                data: {
                    'product_id':product_id,
                    'option_id':option_id
                },
                success: function(data) {
                    atag.parent().remove();
                    subtotal_update();
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
    @if(session('message'))
    <script>
        $(document).ready(function(){
            var message = "{{session('message')}}";
            if(message.length>0) {
                $('#productModal').modal();
            };
        });
    </script>
    @endif
    @yield('scripts')
</body>
</html>
