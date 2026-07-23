<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class barangController extends Controller
{
    //
    public function create_barang() {
        $suppliers = Supplier::all();
        return view('create_barang', compact('suppliers'));
    }
    public function store_barang(Request $request) {
        $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'expired_date' => 'required',
            'id_supplier' => 'required',
        ]);
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'expired_date' => $request->expired_date,
            'id_supplier' => $request->id_supplier,
        ]);
        return Redirect::back();
    }
}
