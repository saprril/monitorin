<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'no_hp',
        'alamat',
        'dosen_wali_id',
        'angkatan',
        'status',
        'kab_kota',
        'provinsi',
        'jalur_masuk',
        'ipk',
        'foto',
        'sksk'
    ];

    protected function dosen_wali()
    {
        return $this->belongsTo(DosenWalis::class);
    }

    protected function khs()
    {
        return $this->hasMany(KHS::class);
    }

    protected function irs()
    {
        return $this->hasMany(IRS::class);
    }   

    protected function skripsi()
    {
        return $this->hasMany(Skripsi::class);
    }

    protected function pkl()
    {
        return $this->hasMany(PKL::class);
    }

    
}
