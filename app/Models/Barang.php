<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = [
        'nama_barang',
        'kategori',
        'stok',
        'harga_beli',
        'harga_jual',
        'expired_date',
        'id_supplier',
    ];
    public function detail_penjualans() {
        return $this->hasMany(detailPenjualan::class);
    }
    public function returs() {
        return $this->hasMany(Retur::class);
    }
    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
}
