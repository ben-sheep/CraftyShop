<?php

namespace App\Http\Controllers;

use App\Order;
use App\TabOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stripe\PaymentIntent;
use Stripe\PaymentMethod;
use Stripe\SetupIntent;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function userDetails()
    {
        $user = Auth::user();

        return view('pages.checkout.user_details')
            ->with([
                'basketItems' => $user->checkBasketOptions(),
                'shipping' => 2,
                'user' => $user
            ]);

    }
    public function review()
    {
        return view('pages.checkout.review');
    }
    public function payment()
    {
        $user = Auth::user();
        $basketItems = $user->checkBasketOptions();
        if(
            ($user->first_name == null) or
            ($user->last_name == null) or
            ($user->shipping_address == null) or
            ($user->billing_address == null)
        )
        {
            return redirect()->route('checkout')->with('message',"Please fill out all the shown fields, thank you.");
        } elseif($basketItems->isEmpty())
        {
            return redirect()->route('products.show',1)->with('message','To checkout please add a product to your shopping basket');
        }
        Stripe::setApiKey('sk_test_KneQJGe2OG7gKvMQ4skecEjq00nJhRjM0o');
        return view('pages.checkout.payment')
            ->with([
                'basketItems' => $basketItems,
                'shipping' => 2,
                'user' => $user,
                'intent'=> $user->createSetupIntent()
            ]);
    }
    public function guestDetails()
    {
        return view('pages.checkout.guest_details');
    }
    public function update(Request $request)
    {

        $this->validate($request, [
            'first_name' => ['string', 'max:255','nullable'],
            'last_name' => ['string', 'max:255','nullable'],
            'shipping_address' => ['string', 'max:400','nullable'],
            'billing_address' => ['string', 'max:400','nullable'],
            'shipping_same' => ['string','nullable'],
            'orderNotes' => ['string','nullable']
        ]);

        $user = Auth::user();

        if($request->input('first_name'))
        {
            $user->first_name = $request->input('first_name');
        }
        if($request->input('last_name'))
        {
            $user->last_name = $request->input('last_name');
        }
        if($request->input('phone'))
        {
            $user->phone = filter_var($request->phone,FILTER_SANITIZE_NUMBER_INT);
        }
        if($request->input('shipping_address'))
        {
            $user->shipping_address = $request->input('shipping_address');
        }
        if($request->input('orderNotes'))
        {
            $user->delivery_note = $request->input('orderNotes');
        } else
        {
            $user->delivery_note = " ";
        }
        //dd($request->shipping_same);
        if($request->shipping_same == 'on')
        {
            if($request->input('billing_address'))
            {
                $user->billing_address = $request->input('billing_address');
            }
        } else{
            $user->billing_address = $user->shipping_address;
        }

        $user->save();
        return redirect()->route('payment')->with('order_notes',$request->orderNotes);
    }
    public function store(Request $request)
    {
        Stripe::setApiKey('sk_test_KneQJGe2OG7gKvMQ4skecEjq00nJhRjM0o');
        $user = Auth::user();
        $shipping = 2;
        if(!$user->stripe_id)
        {
            $user->createAsStripeCustomer();
        }
        $paymentMethod = PaymentMethod::retrieve(
            $request->paymentMethod
        );
        $basketPrice = $user->basketTotalPrice();
        $stripeCharge = $user->charge($basketPrice[1] + $shipping*100, $paymentMethod);
        $order = TabOrder::create([
            'customer_id' => $user->id,
            'shipping_cost' => $shipping,
            'basket_total' => $basketPrice[0],
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'billing_address' => $user->billing_address,
            'shipping_address' => $user->shipping_address,
            'delivery_note' => $user->delivery_note,
            'status' => 'Order placed'
        ]);
        DB::table('basket_items')->where('user_id', '=', $user->id)->delete();
        return redirect()->route('thank_you');
    }
    public function thankYou()
    {
        return view('pages.checkout.thank_you');
    }


}
