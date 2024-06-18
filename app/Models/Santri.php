<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alamat',
        'tmpt_lahir',
        'tgl_lahir',
        'nisn',
        'nik',
        'no_kk',
        'nama_ayah',
        'nik_ayah',
        'pekerjaan_ayah',
        'rwyt_pendidikan_ayah',
        'nama_ibu',
        'nik_ibu',
        'pekerjaan_ibu',
        'rwyt_pendidikan_ibu'
    ];

    public function hafalan()
    {
        return $this->hasMany(Hafalan::class);
    }
}
