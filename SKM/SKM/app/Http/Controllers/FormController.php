<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class FormController extends Controller
{
  public function store(Request $request)
  {
      // Validasi data request
      $validated = $request->validate([
          'departemen' => 'required|in:Bisnis dan Hospitality,Industri Kreatif dan Digital',
          'status' => 'required|in:Dosen,Tenaga Pendidik,Mahasiswa',
          'pertanyaan' => 'required|array',
          'pertanyaan.*' => 'required|string',
      ]);
  
      foreach ($validated['pertanyaan'] as $pertanyaanItem) {
          // Membuat pertanyaan baru
          $pertanyaan = new pertanyaan;
          $pertanyaan->pertanyaan = $pertanyaanItem;
          $pertanyaan->departemen = $validated['departemen'];
          $pertanyaan->status = $validated['status'];
  
          // Menyimpan pertanyaan
          $pertanyaan->save();
      }
  
      // Mengembalikan respon
      return back()->with('success', 'Pertanyaan berhasil disimpan');
  }
}
