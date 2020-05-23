<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/send-mail', function(){
    // Sending the mail.
    Mail::to( 'student@school.com' )
    ->send( new App\Mail\WelcomeMail() );
    // Redirecting the user.
    return redirect( '/' )
    ->with( 'mail_sent', 'Mail sent.' );
});