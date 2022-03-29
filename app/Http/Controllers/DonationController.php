<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentNominal;

class DonationController extends Controller
{
    const VIEW_DIR = 'donation';
    public function create(Request $request) {
        $nominal = PaymentNominal::where('is_active', 1)->orderBy('nominal', 'asc')->get();
        return view(self::VIEW_DIR.'.create', compact('nominal'));
    }
}
