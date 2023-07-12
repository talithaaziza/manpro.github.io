<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olah extends Model
{
    use HasFactory;
    protected $table="olah";
    protected $primarykey="id_olah";
    protected $fillable=['id_olah','id','nama_barang','jumlah_barang','harga','tanggal'];
    public $timestamps = false;
}
