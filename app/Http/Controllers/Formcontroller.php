<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use \App\Mail\Mailing;
class Formcontroller extends Controller
{
    //
    public function form()
    {
        return view('contactMail');
    }

    public function mail(Request $request)
    {
        $name = $request-> Username;
        $email = $request-> UserEmail;
        $body = $request -> msg;

        $data = [
            'name' => $name,
            'email' => $email,
            'body' => $body,
        ];

        Mail::to('damanibeckford17@gmail.com')->send(new Mailing($data));

        echo ('mail sent successfully');
    }
}
