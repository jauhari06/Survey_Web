<?php

namespace App\Http\Controllers;
use App\Models\jawaban;

use Illuminate\Http\Request;


class GrafikController extends Controller
{
    public function index()
{
    $labels = ['Tidak_Puas', 'Kurang_Puas', 'Puas', 'Cukup_Puas', 'Sangat_Puas'];
    $values = [];

    foreach ($labels as $label) {
        $values[] = jawaban::where($label,1)->count();
    }

    return response()->json([
        'labels' => $labels,
        'values' => $values,
    ]);
}
}
