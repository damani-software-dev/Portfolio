<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use \App\Mail\businesspackage;

class buspackController extends Controller
{
    //
    public function index(Request $req)
    {
        $req -> validate([
            'customer' => 'required',
            'email'=> 'required',
            'businesspackage' => 'required'

        ]);

        $custname = $req-> customer;
        $email = $req-> email;
        $package = $req -> businesspackage;
        $body = $req -> description;

        $data = [
                'customer' => $custname,
                'email' => $email,
                'businesspackage' => $package,
                'description' => $body,
        ];

        Mail::to('damanibeckford17@gmail.com')->send(new businesspackage($data));

        echo ('mail sent');
    }
}
