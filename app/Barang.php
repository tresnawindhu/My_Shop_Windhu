<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table='barang';
    protected $primaryKey='id_barang';
    protected $fillable=['nama_barang','jenis','harga'];
}
