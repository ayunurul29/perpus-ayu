<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Peminjaman;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori' );
         return $this->hasOne(Peminjaman::class, 'id_buku' );
     
    }
}