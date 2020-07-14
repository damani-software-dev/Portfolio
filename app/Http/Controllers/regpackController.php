<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\regularpackage;

class regpackController extends Controller
{
    //
    function index(Request $req)
    {
        $req -> validate([
            'customerName' => 'required',
            'email'=> 'required',
            'package' => 'required'

        ]);

        $custname = $req-> customerName;
        $email = $req-> email;
        $package = $req -> package;
        $body = $req -> descrip;

        $data = [
                'customerName' => $custname,
                'email' => $email,
                'package' => $package,
                'descrip' => $body,
        ];

        Mail::to('damanibeckford17@gmail.com')->send(new regularpackage($data));

        echo ('mail sent');
    }
}
