<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\jawaban;

class SubmitController extends Controller
{

    public function submitSurvey(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'criticAndSuggestion' => 'required',
            'answers' => 'required|array',
            'answers.*.questionId' => 'required|integer',
            'answers.*.answer' => 'required|string',
        ]);
    
        $pengguna = Pengguna::create([
            'email' => $request->input('email'),
            'tanggapan' => $request->input('criticAndSuggestion'),
        ]);
    
        $answers = $request->input('answers');
        foreach ($answers as $answer) {
            $jawaban = new Jawaban();
            $jawaban->id_pertanyaan = $answer['questionId'];
            $jawaban->id_pengguna = $pengguna->id_pengguna;
    
            // Set semua jawaban ke 0
            $jawaban->Tidak_Puas = 0;
            $jawaban->Kurang_Puas = 0;
            $jawaban->Puas = 0;
            $jawaban->Cukup_Puas = 0;
            $jawaban->Sangat_Puas = 0;
    
            // Set jawaban yang dipilih ke 1
            switch ($answer['answer']) {
                case 'Sangat Puas':
                    $jawaban->Sangat_Puas = 1;
                    break;
                case 'Cukup Puas':
                    $jawaban->Cukup_Puas = 1;
                    break;
                case 'Puas':
                    $jawaban->Puas = 1;
                    break;
                case 'Tidak Puas':
                    $jawaban->Tidak_Puas = 1;
                    break;
                case 'Sangat Tidak Puas':
                    $jawaban->Sangat_Tidak_Puas = 1;
                    break;
            }
    
            $jawaban->save();
        }
    
        return view('index')->with('success', 'Terima kasih telah mengisi survei!');
    }
}