<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pertanyaan;
use App\Models\survei;


class jawaban extends Model
{
    protected $primaryKey = 'id_jawaban';
    
    protected $table = 'jawaban';
    
    //use HasFactory;
    protected $fillable = ['id_jawaban','id_pertanyaan','id_pengguna', 'Tidak_Puas','Kurang_Puas','Puas','Cukup_Puas','Sangat_Puas']; // Sesuaikan dengan kolom yang sesuai di tabel Pengguna

    public $timestamps = false;
    
    public function pertanyaan()
    {
        return $this->belongsTo(pertanyaan::class, 'id_pertanyaan');
    }

    public function pengguna()
    {
        return $this->belongsTo(pengguna::class, 'id_pengguna');
    }

    public function survei()
    {
        return $this->hasMany(survei::class, 'id_jawaban');
    }
}
