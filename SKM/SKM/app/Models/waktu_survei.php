<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\survei;

class waktu_survei extends Model
{
    protected $primaryKey = 'id_waktu_survei';
    
    protected $table = 'waktu_survei';
    //use HasFactory;
    protected $fillable = ['id_waktu_survei','id_survei', 'wwaktu_mulai','waktu_berakhir']; // Sesuaikan dengan kolom yang sesuai di tabel Pengguna

    public $timestamps = false;
    
    public function survei()
    {
        return $this->belongsTo(Survei::class, 'id_survei');
    }
}
