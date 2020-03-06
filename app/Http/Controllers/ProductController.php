<?php

namespace App\Http\Controllers;

use App\BasketItem;
use App\Option;
use App\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class ProductController extends Controller
{
    public function show()
    {
        return view('pages.products');
    }
    public function get($product)
    {
        $product = Product::find($product);
        $first_quantity = null;
        //dd($product->reviews[0]->created_at);
        if(Auth::User())
        {
            $basket = Auth::User()->basketItems;
        }
        if(!$product->options->isEmpty())
        {

            $first_option = $product->options->sortBy('order')->first();
            //dd($product->id);
            //dd($first_option->product_id);
            if(Auth::User())
            {
                $first_quantity = $basket->where('product_id', $product->id)->where('option_id', $first_option->id);
            }
        }else{
            if(Auth::User())
            {
                $first_quantity = $basket->where('product_id', '=', $product->id);
            }
            //$first_quantity = "flag2";
        }
        if($first_quantity != null)
        {

            $first_quantity = $first_quantity->sum('quantity');
        }else{
            $first_quantity = 0;
        }
        //dd($first_quantity);
        return view('pages.products')
            ->with("quantity", $first_quantity)
            ->with("product", $product);

    }
    public function getOption(Request $request)
    {

        $this->validate($request, [
            'option' => ['required','exists:options,id'],
        ]);

        $option = Option::findOrFail($request->option);
        if($option->stock > 0)
        {
            $inStock = true;
        }else
        {
            $inStock = false;
        }

        $basket_item = BasketItem::where([['user_id', "=", Auth::user()->id],['option_id', "=", $option->id],['product_id', "=", $option->product->id]])->get()->first();
        if($basket_item !== null){
            $quantity_in_basket = $basket_item->quantity;
        }else{
            $quantity_in_basket = 0;
        }
        return Response::json([
            'price'=> $option->price,
            'name'=> $option->name,
            'quantity'=> $quantity_in_basket,
            'in_stock'=> $inStock,
            'status' => true
        ], 200);

    }
}
