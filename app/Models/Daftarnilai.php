<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Daftarnilai extends Model
{
    use HasFactory;
    protected $table = 'daftar_nilai';
    protected $fillable = ['siswa_id', 'mata_kuliah', 'nilai'];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
