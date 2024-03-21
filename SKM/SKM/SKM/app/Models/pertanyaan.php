<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\survei;

class pertanyaan extends Model
{

    protected $primaryKey = 'id_pertanyaan';

    protected $table = 'pertanyaan';

    protected $fillable = ['id_pertanyaan','pertanyaan','departemen','status']; // Sesuaikan dengan kolom yang sesuai di tabel Pertanyaan

    public $timestamps = false;

    public function survei()
    {
        return $this->hasMany(survei::class, 'id_pertanyaan');
    }
}
