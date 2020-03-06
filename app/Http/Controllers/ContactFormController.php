<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('pages.contact.form');
    }
    public function store()
    {
        $data = request()->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['email','required'],
            'message' => ['required']
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('/contact/ThankYou');
    }
    public function show()
    {
        return view('pages.contact.thank_you');
    }

}
