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
        "image" => "Logo-Landscape.png"
    ]);
});

Route::get('/berdonasi', 'FrontController@donateForm');
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/dokumentasi', function() {
    return view('dokumentasi');
});