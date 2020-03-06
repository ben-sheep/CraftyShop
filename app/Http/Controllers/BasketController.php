<?php

namespace App\Http\Controllers;

use App\BasketItem;
use App\Option;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class BasketController extends Controller
{
    public function show()
    {
        if(Auth::check())
        {
            //dd(User::getBasketItem(1,1));
            //dd(Auth::user());
            //dd(Auth::user()->checkBasketOptions());
            return view('pages.basket')
                ->with('basketItems',Auth::user()->checkBasketOptions())
                ->with('shipping',"£2.00");
        }
    }
    public function addProduct(Request $request)
    {
        $this->validate($request, [
            'product_id' => ['exists:products,id','required'],
            'option_id' => ['sometimes','exists:options,id'],
            'quantity' => ['integer','required','gt:0']
        ]);
        $user = Auth::User();
        $product_id = $request->product_id;$option_id = $request->option_id;$quantity = $request->quantity;
        $basket_item = $user->getBasketItem($product_id,$option_id);
        if(!empty($basket_item))
        {
            $basket_item->quantity += $quantity;

            $basket_item->save();

            $updated_quantity = $basket_item->quantity;
        }else {

            $updated_quantity = $user->addBasketItem($product_id,$option_id,$quantity);
        }
        return response()->json([
            'updated_quantity' => $updated_quantity,
            'status' => true
        ], 200);
    }
    public function editQuantity(Request $request)
    {
        //validation
        $this->validate($request, [
            'product_id' => ['exists:products,id','required'],
            'option_id' => ['nullable','exists:options,id'],
            'quantity' => ['integer','required']
        ]);

        //update quantity
        $user = Auth::User();
        $basketItem = $user->getBasketItem($request->product_id,$request->option_id);
        $basketItem->quantity += $request->quantity;
        if($basketItem->quantity < 0)
        {
            $basketItem->quantity = 0;
        }
        $basketItem->save();

        return response()->json([
            'quantity' => $basketItem->quantity,
            'product_id' => $request->product_id,
            'option_id' => $request->option_id,
            'status' => true
        ], 200);
    }
    public function removeItem(Request $request)
    {
        //validation
        $this->validate($request, [
            'product_id' => ['exists:products,id','required'],
            'option_id' => ['nullable'],
        ]);

        //action
        $basketItem = Auth::user()->getBasketItem($request->product_id,$request->option_id);
        $basketItem->delete();

        //response
        return response()->json([
            'status' => true
        ], 200);
    }

}
