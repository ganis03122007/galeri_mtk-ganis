<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Galery;

class Post extends Model
{
    protected $fillable = ['judul', 'kategori_id', 'isi', 'user_id', 'status'];

    // relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // ✅ PERBAIKAN: ganti petugas jadi user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relasi ke galery
    public function galeries()
    {
        return $this->hasMany(Galery::class);
    }
}