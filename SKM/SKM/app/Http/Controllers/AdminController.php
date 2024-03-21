<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaan;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        
    $cari = $request->query('cari');

    if (!empty($cari)) {
        $datasurvei = Pertanyaan::where('status', 'like', "%" . $cari . "%")
            ->orWhere('departemen', 'like', "%" . $cari . "%")
            ->paginate(10);
    } else {
        $datasurvei = Pertanyaan::paginate(10);
    }
    $questions = pertanyaan::all();

    return view('admin')->with(['datasurvei' => $datasurvei, 'cari' => $cari, 'questions' => $questions]);
   }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
      //

    }
}
