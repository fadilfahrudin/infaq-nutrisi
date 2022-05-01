<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donation;
use App\Models\News;
use App\Models\Page;
use App\Models\Program;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index(){
        $collected = Donasi::where('status', 'done')->sum('amount_final');
        $disalurkan = News::sum('total_distributed');
        $programs = Program::all();
        return view('home', compact('collected','disalurkan', 'programs'));
    }

    public function detailsProgram(Request $request, $link)
    {
        $program = Program :: where('seo_link', $link)->first();
        $donaturs = Donation::where([
                    ['program_id', '=', $program->id],
                    ['status', '=', 'done']
                ])->orderBy('payment_finished', 'desc')->get();
        $terkumpul = !empty($program->additional_collected) ? $program->collected + $program->additional_collected : $program->collected;
        $persen_terkumpul = (!empty($program->target_amount) && $program->target_amount > 0) ? (($terkumpul / $program->target_amount) * 100) : 0;
        $persen_terkumpul = round($persen_terkumpul, 2);
        $penyumbang = !empty($program->additional_donatur) ? count($donaturs) + $program->additional_donatur : count($donaturs);
        $sisa_hari = '&infin;';
        if (!empty($program->expired_date)) {
            $now = time();
            $exp_date = strtotime($program->expired_date);
            $datediff = $exp_date - $now;
            $selisih = round($datediff / (60 * 60 * 24));
            $sisa_hari = $selisih . ' hari';
        }
        return view('details-program', compact('program','persen_terkumpul','sisa_hari', 'penyumbang'));
    }
}
