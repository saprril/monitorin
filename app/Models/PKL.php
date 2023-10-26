<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PKL extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahasiswa_id',
        'status',
        'nim',
        'nilai',
        'scan_seminar'
    ];

    protected function mahasiswa()
    {
        return $this->belongsTo(Mahasiswas::class);
    }
}
