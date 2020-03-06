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
                    <h1 class="page-title">Cart</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Cart</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
                    <div class="col-lg-8 mb-md--30">
                        <form class="cart-form" action="#">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="table-content table-responsive">
                                        <table id="basket-table" class="table text-center">
                                            <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                                <th class="text-left">Product</th>
                                                <th>price</th>
                                                <th>quantity</th>
                                                <th>total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($basketItems as $basketItem)
                                                <tr>
                                                    <td class="product-remove text-left"><a class="remove_item" data-option="{{$basketItem['option_id']}}" data-product="{{$basketItem['product_id']}}"><i
                                                                class="dl-icon-close"></i></a></td>
                                                    <td class="product-thumbnail text-left">
                                                        <img src="{{Voyager::image($basketItem['image'])}}"
                                                             alt="Product Thumnail">
                                                    </td>
                                                    <td class="product-name text-left wide-column">
                                                        <h3>
                                                            <a href="product-details.html">{{$basketItem['name']}}</a>
                                                        </h3>
                                                    </td>
                                                    <td class="product-price">
                                                                <span class="product-price-wrapper">
                                                                    <span class="money">£{{number_format($basketItem['price'],2)}}</span>
                                                                </span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <div class="quantity">
                                                            <input data-option="{{$basketItem['option_id']}}" data-product="{{$basketItem['product_id']}}" type="number" class="quantity-input" name="qty"
                                                                    value="{{$basketItem['quantity']}}" min="0">
                                                        </div>
                                                    </td>
                                                    <td class="product-total-price">
                                                                <span class="product-price-wrapper">
                                                                    <span id="price_total" class="money"><strong>£{{number_format($basketItem['total'],2)}}</strong></span>
                                                                </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters border-top pt--20 mt--20">

                                <div class="col-sm-6 text-sm-right">
                                    <button type="submit" class="cart-form__btn">Clear Cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-collaterals">
                            <div class="cart-totals">
                                <h5 class="mb--15">Cart totals</h5>
                                <div class="table-content table-responsive">
                                    <table class="table order-table">
                                        <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td><span id="total"></span></td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>
                                                <span>{{$shipping}}</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                        <span class="product-price-wrapper">
                                                            <span id="cost-ship-total" class="money">$226.00</span>
                                                        </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="{{route('checkout')}}" class="btn btn-fullwidth btn-style-1">
                                Proceed To Checkout
                            </a>
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


        function update(){
            table = document.getElementById("basket-table");
            quantity = [];
            price = [];
            total = 0;
            for(i = 1; i < table.rows.length; i++){
                quantity[i] = parseFloat(table.rows[i].cells[4].innerHTML.split('value="').pop().split('" min')[0]);
                price[i] = parseFloat(table.rows[i].cells[3].innerHTML.split('£').pop().split("</")[0]);
                table.rows[i].cells[5].innerHTML = '<span class="product-price-wrapper">\n' +
                    '<span id="price_total" class="money"><strong>£'+
                        (quantity[i]*price[i]).toFixed(2) +
                    '</strong></span>\n' +
                    '</span>';
                total += quantity[i]*price[i]
            }
            $('#total').text("£" + total.toFixed(2));
            full_total = total + parseFloat("{{$shipping}}".split('£').pop());
            $('#cost-ship-total').text("£" + full_total.toFixed(2))
        };
        update();
        $('#submit111').click( function(){
            //alert()
        });

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
        $('body').on('click','.dec, .inc',function(){
            input = $(this).parent().find('input');
            inc_dec = $(this).attr('class').split(' ')[0];
            quantity = 0;
            if(inc_dec == 'inc'){
                quantity = 1;
            } else if(inc_dec == 'dec'){
                quantity = -1;
            }
            product_id = input.data('product');
            option_id = input.data('option');
            $.ajax({
                url: '{{action('BasketController@editQuantity')}}',
                type: 'post',
                dataType: 'json',
                data: {
                    'product_id':product_id,
                    'option_id':option_id,
                    'quantity': quantity
                },
                success: function(data) {
                    input.attr('value',data.quantity);

                    update();
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
        $('body').on('click','.remove_item',function(){
            product_id = $(this).data('product');
            var tr = $(this);
            option_id = $(this).data('option');
            $.ajax({
                url: '{{action('BasketController@removeItem')}}',
                type: 'post',
                dataType: 'json',
                data: {
                    'product_id':product_id,
                    'option_id':option_id
                },
                success: function(data) {
                    tr.parent().parent().remove();
                    update();
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

        $("#add_to_cart").change(function () {

        });
    </script>
@endsection
