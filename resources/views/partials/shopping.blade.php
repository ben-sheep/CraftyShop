@guest
@else
<aside class="mini-cart" id="miniCart">
    <div class="mini-cart-wrapper">
        <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
        <div class="mini-cart-inner">
            <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
            <div class="mini-cart__content">
                <ul class="mini-cart__list" id="mini-cart">

                    @foreach($user->checkBasketOptions() as $basketItem)
                        <li class="mini-cart__product " >
                            <a class="remove-from-cart remove" data-option="{{$basketItem['option_id']}}" data-product="{{$basketItem['product_id']}}">
                                <i class="dl-icon-close"></i>
                            </a>
                            <div class="mini-cart__product__image">
                                <img src="{{Voyager::image($basketItem['image'])}}" alt="products">
                            </div>
                            <div class="mini-cart__product__content">
                                <a class="mini-cart__product__title shop-cart" href="{{action('ProductController@get',App\Product::find($basketItem['product_id']))}}">{{$basketItem['name']}}</a>
                                <span class="mini-cart__product__quantity shop-cart">{{$basketItem['quantity']}} x £{{number_format($basketItem['price'],2)}}</span>
                            </div>

                        </li>
                    @endforeach

                </ul>


                <div class="mini-cart__total">
                    <span>Subtotal</span>
                    <span class="ammount" id="subtotal">£0.00</span>
                </div>
                <div class="mini-cart__buttons">
                    <a href="{{route('basket')}}" class="btn btn-fullwidth btn-style-1">View Cart</a>
                    <a href="{{route('checkout')}}" class="btn btn-fullwidth btn-style-1">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</aside>
<scirpt>

</scirpt>
@endguest
