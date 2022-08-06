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

    public function ronda()
    {
        return $this->hasMany(Ronda::class,'id_ronda');
    }
    public function kegiatan()
    {
        return $this->hasMany(kegiatan::class,'id_ronda');
    }

    public function penduduk()
    {
        return $this->hasMany(Penduduk::class);
    }
    public function image()
    {
        if ($this->image && file_exists(public_path('image/rt/' . $this->image))) {
            return asset('image/rt/' . $this->image);
        } else {
            return asset('assets/images/layout_img/user_img.jpg');
        }
    }
    // mengahupus image(image) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('image/rt/' . $this->image))) {
            return unlink(public_path('image/rt/' . $this->image));
        }
    }
    
}
