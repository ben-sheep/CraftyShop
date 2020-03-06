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
    <div class="">
        <br><br> <br><br><br><br> <br><br>
    </div>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">

                        <h2 class="pt--20 text-center heading-secondary mb--50 mb-md--35 mb-sm--20">Thank you for contacting us!</h2>



        </div>
    </div>
    <br><br> <br><br><br><br> <br><br>
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
