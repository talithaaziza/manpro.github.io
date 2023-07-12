<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table="stok";
    // protected $keyType = "string";
    protected $primarykey="id";
    protected $fillable=['id','id_kategori','nama_barang','nama_kategori','stok_awal'];
    public $timestamps = false;
}

