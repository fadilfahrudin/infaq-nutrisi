<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Donation;

class ProgramController extends Controller
{
    const VIEW_DIR = 'program';
    public function index() {
        $rows = Program::where([
            ['verified', 1],
            ['published', 1],
            ['closed', 0]
        ])->get();
        $programs = $rows;
        return view(self::VIEW_DIR.'.index', compact('rows'));
        // return view('page-program', compact('programs'));
    }

    public function detail(Request $request, $link) {
        $program = Program::where('seo_link', $link)->first();
        if(empty($program)) {
            $program = Program::where('link', $link)->firstOrFail();
        }
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
        return view(self::VIEW_DIR.'.detail', compact('program','link','persen_terkumpul','sisa_hari', 'penyumbang'));
    }
}
