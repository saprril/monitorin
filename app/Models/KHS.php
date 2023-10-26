<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    use HasFactory;
    protected $fillable = [
        'mahasiswa_id',
        'nim',
        'semester',
        'jml_sks',
        'scan_khs'
    ];

    protected function mahasiswa()
    {
        return $this->belongsTo(Mahasiswas::class);
    }
}
