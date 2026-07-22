<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $fillable = [
        'nama_supplier',
        'kontak_sales',
        'no_telepon',
        'alamat_perusahaan',
    ];
    public function barangs() {
        return $this->hasMany(Barang::class);
    }
    public function returs() {
        return $this->hasMany(Retur::class);
    }
}
