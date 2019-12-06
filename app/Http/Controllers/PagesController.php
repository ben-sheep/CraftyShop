<?php

namespace App\Http\Controllers;

use App\HomePageSlider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home')
            ->with("mainSlider" , HomePageSlider::all());
    }

}
