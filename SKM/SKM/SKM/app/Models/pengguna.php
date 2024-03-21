<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\survei;

class pengguna extends Model
{

    protected $primaryKey = 'id_pengguna';
    
    protected $table = 'pengguna';
    //use HasFactory;
    protected $fillable = ['email','tanggapan']; // Sesuaikan dengan kolom yang sesuai di tabel Pengguna

    public $timestamps = false;

    public function survei()
    {
        return $this->hasMany(survei::class, 'id_pengguna');
    }

   // public $timestamps = false; // Tambahkan baris ini untuk menonaktifkan timestamp
}
