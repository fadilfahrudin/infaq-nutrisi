<?php

use App\Http\Controllers\FrontController;
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
    return view('home', [
        // "title" => "Home",
        "image" => "logo-gin.png"
    ]);
});

Route::get('/berdonasi', 'DonationController@create');
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/dokumentasi', function() {
    return view('dokumentasi');
});
Route::get('/details-program', function(){
    return view(('details-program'));
});
Route::get('/landing-berita', function(){
    return view(('landingberita'));
});