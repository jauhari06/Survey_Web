<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaan;
use App\Models\Admin;
use App\Models\jawaban;

class SuperadminController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil data survei dan admin dari database
        
        $dataadmin = Admin::all();
        $jawaban=jawaban::all();
        $questions = pertanyaan::all();

        return view('superadmin')->with([ 'dataadmin' => $dataadmin, 'questions' => $questions, 'jawaban' => $jawaban]);
    }
}
