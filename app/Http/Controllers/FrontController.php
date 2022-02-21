<?php

namespace App\Http\Controllers;


use App\PaymentNominal;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function donateForm(){
        $nominal = PaymentNominal::where('is_active', 1)->orderBy('nominal', 'asc')->get();
        return view('berdonasi', compact('nominal'));
    }
    //
}
