<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rt()
    {
        return $this->hasOne(Rt::class);
    }

    public function berita()
    {
        return $this->hasMany(Berita::class,'id_berita');
    }

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
}
