<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;

    protected $fillable = [
        'santri_id',
        'surah',
        'ayat',
        'juz',
        'tanggal_hafalan',
        'keterangan'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}