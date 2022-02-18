<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Daftarnilai;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nama', 'tgl_lahir', 'alamat', 'gender', 'no_hp', 'foto'];
    public function daftarNilai()
    {
        return $this->hasMany(Daftarnilai::class);
    }
}
