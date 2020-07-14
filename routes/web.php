<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Userhome');
});

//home//
//Route::view('Homepage', 'Userhome');

//contact//
Route::get('mail', 'Formcontroller@form');
Route::post('contactMail', 'Formcontroller@mail') ->name('mail');

// about us//
Route::view('Aboutpage', 'AboutUs');

// websites//
Route::view('list_of_websites', 'Websites');

// mail//
Route::view('mail', 'contactMail');

//sign in//
Route::view('admin', 'Admin');
Route::view('Sign in', 'loginSession');
Route::post('sign in', 'SignInController@SignIn');

Route::get('admin/', function () {

    if(!session()->has('data'))
    {
        return redirect('Sign in');
    }
    return view('admin');
});




Route::view('claim buspack','businessPack');

//business-pack//

//Route::get('claim buspack' , 'buspackController@index');

Route::post('businessPack', 'buspackController@index')-> name('business');


Route::view('claim limitpack','limitedPack');
//limited-pack//

//Route::get('limitpack' , 'limitpackController@index');
Route::post('limitedPack', 'limitpackController@index')-> name('limited');


Route::view('claim regpack','regularPack');
//regular//

//Route::get('regpack' , 'regpackController@index');
Route::post('regularPack', 'regpackController@index')-> name('regular');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
