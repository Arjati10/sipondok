<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;

    protected $table = 'hafalan';

    protected $fillable = [
        'santri_id',
        'surah',
        'ayat',
        'juz',
        'tanggal_hafalan',
        'keterangan'
    ];

    // Relasi dengan model Santri
    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
