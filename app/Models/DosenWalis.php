<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenWalis extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'email',
        'no_hp',
    ];
    protected function mahasiswa()
    {
        return $this->hasMany(Mahasiswas::class);
    }

}
