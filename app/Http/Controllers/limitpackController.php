<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\limitedpackage;
class limitpackController extends Controller
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

        Mail::to('damanibeckford17@gmail.com')->send(new limitedpackage($data));

        echo ('mail sent');

    }
}
