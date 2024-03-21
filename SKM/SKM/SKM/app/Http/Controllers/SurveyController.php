<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Survei;
use App\Models\pertanyaan;
use App\Models\Admin;
use App\Models\Pengguna;

class SurveyController extends Controller
{


    public function survey(Request $request)
    {
        $pertanyaan= pertanyaan::where('departemen', $request->departemen)
                             ->where('status', $request->status)
                             ->get();
    
        if ($request->ajax()) {
            return view('pertanyaan', ['pertanyaan' => $pertanyaan])->render();
        } else {
            return view('survey', ['pertanyaan' => $pertanyaan]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showAdmin(Request $request)
    {
        $questions = pertanyaan::where('departemen', $request->departemen)
                             ->where('status', $request->status)
                             ->get();

    
        if ($request->ajax()) {
            return view('questions', ['questions' => $questions])->render();
        } else {
            return view('superadmin', ['questions' => $questions]);
        }
    }

    public function showSuperAdmin(Request $request)
    {
        $questions = pertanyaan::where('departemen', $request->departemen)
            ->where('status', $request->status)
            ->get();

        $dataadmin = Admin::all();

        if ($request->ajax()) {
            return view('questions', ['questions' => $questions])->render();
        } else {
            return view('superadmin', ['questions' => $questions, 'dataadmin' => $dataadmin]);
        }
    }

    
    public function showSurvey(Request $request)
    {
        $departemen = $request->query('departemen');
        $status = $request->query('status');
    
        $pertanyaan = pertanyaan::when($departemen, function ($query, $departemen) {
            return $query->where('departemen', $departemen);
        })->when($status, function ($query, $status) {
            return $query->where('status', $status);
        })->get();
    
        if ($request->ajax()) {
            return response()->json($pertanyaan);
        }
    
        return view('survey', ['pertanyaan' => $pertanyaan]);
    }

    public function destroy($id_pertanyaan)
    {
        $question = pertanyaan::find($id_pertanyaan);
        $question->delete();

        return redirect()->route('superadmin.show')->with('success', 'Data berhasil dihapus');
    }
}
