@extends('layouts.main')
@section('meta')

@endsection

@section('head')
    <head>
        <title>Checkout</title>
        <script src="https://js.stripe.com/v3/"></script>
    </head>
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Checkout</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{route('pages')}}">Home</a></li>
                        <li><a href="{{route('checkout')}}">Checkout</a></li>
                        <li class="current"><span>Payment</span></li>
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
                            <h2>Payment</h2>
                        </div>
                        <div class="checkout-form">
                            <form action="{{route('payment.store')}}" class="form form--checkout" method="POST" id="payment-form">
                                @csrf

                                <div class="form-row mb--30">
                                    <div class="form__group col-12">
                                        <label for="name_card" class="form__label form__label--2" id="card-holder-name">Name on card <span
                                                class="required">*</span></label>
                                        <input type="text" name="name_card" id="name_card"
                                               class="form__input form__input--2" value="">
                                    </div>
                                </div>

                                <div id="card-element">
                                </div>
                                <!-- Used to display Element errors. -->
                                <div class="form__group col-12" id="card-errors" role="alert"></div>
                                <button data-secret="{{$intent->client_secret}}" class="btn btn-info stripe-button" id="card-button" type="button" >Submit Payment</button>
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
    <!-- Stripe -->
    <script>
        const stripe = Stripe('pk_test_b8LmrhwYNzUGqKR107pyqyvF00tyfSntcA');
        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        cardButton.addEventListener('click', async (e) => {
            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: { name: cardHolderName.value }
                }
            );

            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.

                stripeTokenHandler(paymentMethod.id);
            }
        });
        function stripeTokenHandler(paymentMethod) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', paymentMethod);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>
@endsection
