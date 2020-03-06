<?php

namespace App\Http\Controllers;

use App\Feature;
use App\HomePageSlider;
use App\Product;
use App\ShopCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $featuresBig = Feature::where("size","=","1")->orderBy('order','asc')->get(); // 0="Small",1="Big"
        $featuresSmall = Feature::where("size","=","0")->orderBy('order','asc')->get();
        $categories = ShopCategory::where("is_featured","=","1")->orderBy('order','asc')->get();
        //dd($categories[0]->products[0]->options);

        return view('pages.home')
            ->with("mainSlider" , HomePageSlider::all())
            ->with("featuresBig", $featuresBig)
            ->with("featuresSmall", $featuresSmall)
            ->with("category", $categories);
    }
    public function account()
    {
        $user = Auth::user();
        $first_name = $user->first_name;
        $last_name = $user->last_name;
        $address = [$user->shipping_address,$user->billing_address];
        return view('pages.account')
            ->with("first_name", $first_name)
            ->with("last_name", $last_name)
            ->with("shipping_address", $address[0])
            ->with("billing_address", $address[1])
            ->with('orders',$user->orders->sortBy('created_at'))
            ->with('order_count',$user->orders->count());
    }
}
