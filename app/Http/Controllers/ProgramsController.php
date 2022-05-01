<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
public function pageProgram()
    {
        $programs = Program::all();
        
        return view('page-program', compact('programs'));
    }
}
