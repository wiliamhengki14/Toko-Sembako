<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retur extends Model
{
    //
    protected $fillable = [
        'tanggal_retur',
        'id_barang',
        'jumlah_retur',
        'alasan_retur',
        'status_retur'
    ];
    public function barang() {
        return $this->belongsTo(Barang::class);
    }
    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
}
