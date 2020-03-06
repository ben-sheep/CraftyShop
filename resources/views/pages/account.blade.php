@extends('layouts.main')
@section('meta')

@endsection

@section('head')

@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.min.css">
    <style>
        .easy-autocomplete-container ul {
            background: none repeat scroll 0 0 #ffffff;
            border-top: 1px dotted #ccc;
            display: none;
            margin-top: 220px;
            padding-bottom: 0;
            padding-left: 0;
            position: relative;

            max-height:150px; /* Set your expected height */
            overflow-y:scroll; /* Enable vertical scrollbar */

        }
    </style>
@endsection

@section('content')
    <div class="breadcrumb-area bg--white-6  pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">My Account</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--80 pt-md--60 pt-sm--40 pb--80 pb-md--60 pb-sm--40">
                    <div class="col-12">
                        <div class="user-dashboard-tab flex-column flex-md-row">
                            <div class="user-dashboard-tab__head nav flex-md-column" role="tablist"
                                 aria-orientation="vertical">
                                <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard"
                                   aria-controls="dashboard" aria-selected="true">Dashboard</a>
                                <a class="nav-link" data-toggle="pill" role="tab" href="#orders"
                                   aria-controls="orders" aria-selected="true">Orders</a>
                                <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails"
                                   aria-controls="accountdetails" aria-selected="true">Account Details</a>
                                <a class="nav-link" data-toggle="pill" role="tab" href="#changePassword"
                                   aria-controls="changePassword" aria-selected="true">Change Password</a>
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            </div>
                            <div class="user-dashboard-tab__content tab-content">
                                <div class="tab-pane fade show active" id="dashboard">
                                    <p>Hello <strong>{{$first_name}}</strong> (<a
                                            href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">not <strong>{{$first_name}}</strong>?
                                            {{ __('Logout') }}</a>)</p>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <p>From your account dashboard. you can easily check &amp; view your <a
                                            href="">recent orders</a>, manage your <a href="">shipping and billing
                                            addresses</a> and <a href="">edit your password and account details</a>.
                                    </p>
                                </div>





                                <div class="tab-pane fade" id="orders">
                                    <div class="message-box mb--30 d-none">
                                        <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                        <a href="shop-sidebar.html">Go Shop</a>
                                    </div>
                                    <div class="table-content table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th>Order No.</th>
                                                <th>Date</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Invoice</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for ($i = 0; $i < $order_count; $i++)
                                                <tr>
                                                    <td>{{$order_count-$i}}</td>
                                                    <td class="wide-column">{{$orders[$order_count-$i-1]->created_at}}</td>
                                                    <td class="wide-column">£{{number_format($orders[$order_count-$i-1]->basket_total + $orders[$order_count-$i-1]->shipping_cost,2)}}</td>
                                                    <td>{{$orders[$order_count-$i-1]->status}}</td>
                                                    <td><a href="" class="btn btn-medium btn-style-1">View</a></td>
                                                </tr>
                                            @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="downloads">
                                    <div class="message-box mb--30 d-none">
                                        <p><i class="fa fa-exclamation-circle"></i>No downloads available yet.</p>
                                        <a href="shop-sidebar.html">Go Shop</a>
                                    </div>
                                    <div class="table-content table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Downloads</th>
                                                <th>Expires</th>
                                                <th>Download</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="wide-column">Airi - Ecommerce Bootstrap Template</td>
                                                <td>August 10, 2018 </td>
                                                <td class="wide-column">Never</td>
                                                <td><a href="#" class="btn btn-medium btn-style-1">Download
                                                        File</a></td>
                                            </tr>
                                            <tr>
                                                <td class="wide-column">Airi - Ecommerce Bootstrap Template</td>
                                                <td>August 10, 2018 </td>
                                                <td class="wide-column">Never</td>
                                                <td><a href="#" class="btn btn-medium btn-style-1">Download
                                                        File</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="addresses">
                                    <p class="mb--20">The following addresses will be used on the checkout page by
                                        default.</p>
                                    <div class="row">
                                        <div class="col-md-6 mb-sm--20">
                                            <div class="text-block">
                                                <h4 class="mb--20">Billing address</h4>
                                                <a href="">Edit</a>
                                                <p>You have not set up this type of address yet.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-block">
                                                <h4 class="mb--20">Shopping address</h4>
                                                <a href="">Edit</a>
                                                <p>You have not set up this type of address yet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="accountdetails">
                                    <div>
                                        <p>First name: <strong>{{$first_name}}</strong></p>
                                        <p>Last name: <strong>{{$last_name}}</strong></p>
                                        <p>Shipping Address: <strong>{{$shipping_address}}</strong></p>
                                        <p>Billing Address: <strong>{{$billing_address}}</strong></p>
                                    </div><br>
                                    <h5>Update details:</h5><br>

                                    <form  class="form form--account" method="POST" action="{{ route('userUpdate') }}">
                                        @csrf
                                        <div class="row grid-space-30 mb--20">
                                            <div class="col-md-6 mb-sm--20">
                                                <div class="form__group">
                                                    <label class="form__label" for="first_name">First name</label>
                                                    <input type="text" name="first_name" id="first_name" class="form__input" autocomplete="no">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form__group">
                                                    <label class="form__label" for="last_name">Last name</label>
                                                    <input type="text" name="last_name" id="last_name" class="form__input" autocomplete="no">
                                                </div>
                                            </div>
                                        </div>

                                        <section class="easy-autocomplete">
                                            <div class="form__group">
                                                <label class="form__label" for="last_name">Shipping Address</label>
                                                <input  name="shipping_address" class="form__input" id="tags1" type="text" placeholder="Search..." autocomplete="no">
                                            </div>
                                        </section><br>
                                        <section class="easy-autocomplete">
                                            <div class="form__group">
                                                <label class="form__label" for="last_name">Billing Address</label>
                                                <input  name="billing_address" class="form__input" id="tags2" type="text" placeholder="Search..." autocomplete="no">
                                            </div>
                                        </section><br>
                                        <!--<input type="hidden" name="_method" value="put" />-->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <input type="submit" value="Save Changes"
                                                           class="btn btn-style-1 btn-submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- change password -->
                                <div class="tab-pane fade" id="changePassword">
                                    <form>

                                    </form>
                                </div>
                            </div>
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
        $(function() {
            var selectItem = function(event, ui) {
                $("#tags1").val(ui.item.value);
                $("#tags2").val(ui.item.value);
                return false;
            }
            var options = {
                url: function(phrase) {
                    return "https://api-full.addressian.co.uk/address/" + phrase;
                },
                ajaxSettings: {
                    headers: {
                        'x-api-key': 'PjiPUGQWiS2nqBsXjcjsuvmG8H1cscX6AlEXAzpg'
                    }
                },
                getValue: function(element) {
                    return element.address.join(", ") + ", " + element.citytown + ", " + element.postcode;
                },
                theme: "blue-light",
                placeholder: "Type your post code in here..",
                list: {
                    maxNumberOfElements: 20,

                }
            };
            $("#tags1").easyAutocomplete(options);
            $('.easy-autocomplete').css('width','100%');
            $('#tags1').css('width','100%');
            $('#tags1').attr('autocomplete', 'no');

            $("#tags2").easyAutocomplete(options);
            $('.easy-autocomplete').css('width','100%');
            $('#tags2').css('width','100%');
            $('#tags2').attr('autocomplete', 'no');
        });
    </script>
@endsection
