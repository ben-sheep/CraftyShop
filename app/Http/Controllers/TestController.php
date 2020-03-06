<?php

namespace App\Http\Controllers;

use App\TabOrder;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function test()
    {
        $user = User::find(2);
        $user = Auth::user();
        $basketPrice = $user->basketTotalPrice();
        $basketItems = $user->checkBasketOptions();
        dd($user->orders->sortBy('created_at')[1]->user->email);
        dd($order);
    }
}
