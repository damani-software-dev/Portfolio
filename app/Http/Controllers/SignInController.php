<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class SignInController extends Controller
{
    //
    public function SignIn(Request $req){



        $req -> validate([
            'username' => 'required|min:4|max:8',
            'password' => 'required'
        ]);
            return redirect('admin');
    }

}
