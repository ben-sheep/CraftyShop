<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerUser()
    {
        return view('pages.login_register.create');
    }
    public function loginUser()
    {
        return view('pages.login_register.login');
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['string', 'max:255'],
            'last_name' => ['string', 'max:255'],
            'shipping_address' => ['string', 'max:400'],
            'billing_address' => ['string', 'max:400']
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
        if($request->input('shipping_address'))
        {
            $user->shipping_address = $request->input('shipping_address');
        }

        if($request->input('billing_address'))
        {
            $user->billing_address = $request->input('billing_address');
        }

        $user->save();
        return redirect('/account');

    }
}
