<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    public function rt() {
        return $this->belongsTo(Rt::class,'id_rt');
    }
    public function penduduk() {
        return $this->hasMany(Penduduk::class,'id_penduduk');
    }
    public function dataronda() {
        return $this->hasMany(Penduduk::class,'id_data_ronda');
    }
}
