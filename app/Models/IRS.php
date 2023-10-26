<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRS extends Model
{
    protected $fillable = [
        'mahasiswa_id',
        'nim',
        'semester',
        'jml_sks',
        'scan_irs'
    ];

    protected function mahasiswa()
    {
        return $this->belongsTo(Mahasiswas::class);
    }

    use HasFactory;
}
