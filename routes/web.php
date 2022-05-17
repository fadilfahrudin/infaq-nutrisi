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

Route::get('/', 'HomeController@index');

Route::get('/program', 'ProgramController@index');
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/page-program', 'ProgramsController@pageProgram');
Route::get('/dokumentasi', function() {
    return view('dokumentasi');
});
Route::get('/landing-berita', function(){
    return view(('landingberita'));
});
// Route::get('/{link?}', 'HomeController@detailsProgram');
Route::get('/{link?}', 'ProgramController@detail')->name('program.detail');
Route::get('/{link?}/berdonasi', 'DonationController@create');