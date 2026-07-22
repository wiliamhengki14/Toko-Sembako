<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $primaryKey = 'no_nota';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'no_nota',
        'tanggal_transaksi',
        'jam_transaksi',
        'total_bayar',
        'metode_pembayaran',
        'id_karyawan'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function detail_penjualans() {
        return $this->hasMany(detailPenjualan::class);
    }
}
