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
                    <h1 class="page-title">Checkout</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{route('pages')}}">Home</a></li>
                        <li class="current"><span>Checkout</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--80 pt-md--60 pt-sm--40">
                    <div class="col-12">
                        <!-- User Action Start -->

                        <!-- User Action End -->
                    </div>
                </div>
                <div class="row pb--80 pb-md--60 pb-sm--40">
                    <!-- Checkout Area Start -->
                    <div class="col-lg-6">
                        <div class="checkout-title mt--10">
                            <h2>Billing Details</h2>
                        </div>
                        <div class="checkout-form">
                            <form method="POST" action="{{route('update')}}" class="form form--checkout" id="payment-form">
                                @csrf
                                <div class="form-row mb--30">
                                    <div class="form__group col-md-6 mb-sm--30">
                                        <label for="first_name" class="form__label form__label--2">First Name
                                            <span class="required">*</span></label>
                                        <input type="text" name="first_name" id="first_name"
                                               class="form__input form__input--2" value="{{$user->first_name}}">
                                    </div>
                                    <div class="form__group col-md-6">
                                        <label for="last_name" class="form__label form__label--2">Last Name
                                            <span class="required">*</span></label>
                                        <input type="text" name="last_name" id="last_name"
                                               class="form__input form__input--2" value="{{$user->last_name}}">
                                    </div>
                                </div>

                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="phone" class="form__label form__label--2">Phone <span
                                                class="required">*</span></label>
                                        <input type="text" name="phone" id="phone"
                                               class="form__input form__input--2" value="{{$user->phone}}">
                                    </div>
                                </div>
                                <section class="easy-autocomplete">
                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="shipping_address" class="form__label form__label--2" >Shipping Address <span
                                                class="required">*</span></label>
                                        <input type="text" name="shipping_address" id="shipping_address"
                                               class="form__input form__input--2" value="{{$user->shipping_address}}" autocomplete="no" placeholder="Search...">
                                    </div>
                                </div>
                                </section>
                                <div class="form-row">
                                    <div class="form__group col-12">
                                        <div class="custom-checkbox mb--20">
                                            <input type="checkbox" name="shipping_same" id="shipping_same"
                                                   class="form__checkbox" checked>

                                            <label for="shipping_same"
                                                   class="form__label form__label--2 shipping-label">Billing address the same as shipping address?<span
                                                    class="required">*</span></label>
                                        </div>
                                        <div class="ship-box-info hide-in-default mt--30">
                                            <section class="easy-autocomplete">
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <label for="billing_address"
                                                           class="form__label form__label--2">Billing Address</label>
                                                    <input type="text" name="billing_address" id="billing_address"
                                                           class="form__input form__input--2" value="{{$user->billing_address}}" autocomplete="no" placeholder="Search...">
                                                </div>
                                            </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form__group col-12">
                                        <label for="orderNotes" class="form__label form__label--2">Order
                                            Notes</label>
                                        <textarea class="form__input form__input--2 form__input--textarea"
                                                  id="orderNotes" name="orderNotes"
                                                  placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                                <div class="payment-group mt--20"><a href="{{route('payment')}}">SKIP</a>
                                    <button type="submit" class="btn btn-fullwidth btn-style-1">Review Order</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                        <div class="order-details">
                            <div class="checkout-title mt--10">
                                <h2>Your Order</h2>
                            </div>
                            <div class="table-content table-responsive mb--30">
                                <table class="table order-table order-table-2">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($basketItems as $basketItem)
                                    <tr>
                                        <th>{{$basketItem['name']}}
                                            <strong><span>&#10005;</span>{{$basketItem['quantity']}}</strong>
                                        </th>
                                        <td class="text-right">£{{number_format($basketItem['total'],2)}}</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td class="text-right">£{{number_format($user->basketTotalPrice()[0],2)}}</td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td class="text-right">
                                            <span>£{{number_format($shipping,2)}}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td class="text-right"><span class="order-total-ammount">£{{number_format($user->basketTotalPrice()[0] + $shipping,2)}}</span>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <div class="checkout-payment">
                                <form action="#" class="payment-form">




                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Checkout Area End -->
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
        $('#shipping_same').change(function () {
            var checked = $(this).prop('checked');
            if(checked == false){
                $('.hide-in-default').css('display','block');
            }else if(checked == true){
                $('.hide-in-default').css('display','none');
            }
        });

        $(function() {
            var selectItem = function(event, ui) {
                $("#shipping_address").val(ui.item.value);
                $("#billing_address").val(ui.item.value);
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
            $("#shipping_address").easyAutocomplete(options);
            $('.easy-autocomplete').css('width','100%');
            $('#shipping_address').css('width','100%');
            $('#shipping_address').attr('autocomplete', 'no');

            $("#billing_address").easyAutocomplete(options);
            $('.easy-autocomplete').css('width','100%');
            $('#billing_address').css('width','100%');
            $('#billing_address').attr('autocomplete', 'no');
        });
    </script>
@endsection
