<?php

namespace App\Http\Controllers;

use App\Feature;
use App\HomePageSlider;
use App\ShopCategory;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $featuresBig = Feature::where("size","=","1")->orderBy('order','asc')->get(); // 0="Small",1="Big"
        $featuresSmall = Feature::where("size","=","0")->orderBy('order','asc')->get();
        $categories = ShopCategory::where("is_featured","=","1")->orderBy('order','asc')->get();
        //dd($categories[0]->products()->get());

        return view('pages.home')
            ->with("mainSlider" , HomePageSlider::all())
            ->with("featuresBig", $featuresBig)
            ->with("featuresSmall", $featuresSmall)
            ->with("category", $categories);
    }

}
