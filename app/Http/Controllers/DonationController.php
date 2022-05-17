<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentNominal;
use App\Models\Program;

class DonationController extends Controller
{
    const VIEW_DIR = 'donation';
    public function create(Request $request, $link) {
        $program = Program::where('link', $link)->first();
        if(empty($program)) {
            $program = Program::where('seo_link', $link)->first();
        }
        $nominal = PaymentNominal::where('is_active', 1)->orderBy('nominal', 'asc')->get();
        return view(self::VIEW_DIR.'.create', compact('nominal','program'));
    }
}
