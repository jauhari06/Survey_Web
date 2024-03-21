<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pengguna;
use App\Models\pertanyaan;
use App\Models\jawaban;
use App\Models\waktu_survei;

class survei extends Model
{
    protected $table = 'survei';
    protected $primaryKey = 'id_survei';

    protected $fillable = ['id_survei','id_pertanyaan', 'id_pengguna', 'id_jawaban', 'waktu_survei']; 

    public $timestamps = false;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }

    public function jawaban()
    {
        return $this->belongsTo(Jawaban::class, 'id_jawaban');
    }

    public function waktu_survei()
    {
        return $this->hasMany(Waktu_survei::class, 'id_waktu_survei');
    }

 

}
