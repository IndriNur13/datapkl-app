<?php

namespace App\Models;

use App\Models\Peserta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sekolah extends Model
{
    use HasFactory;

    protected $fillable = [
        'namasekolah',
        'alamatsekolah',
        'namaperwakilan'
    ];

    protected $table = 'sekolahs';

    //Relasi ke tabel peserta
    public function peserta()
    {
        return $this->hasMany(Peserta::class, 'sekolah_id', 'id');
    }
}