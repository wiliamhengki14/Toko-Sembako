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
    public function index_barang() {
        $barangs = Barang::all();
        return view('index_barang', compact('barangs'));
    }
    public function show_barang(Barang $barang) {
        return view('show_barang', compact('barang'));
    }
    public function edit_barang(Barang $barang) {
        $suppliers = Supplier::where('id', '!=', $barang->id_supplier)->get();
        return view('edit_barang', compact('barang', 'suppliers'));
    }
    public function update_barang(Request $request, Barang $barang) {
        $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'expired_date' => 'required',
            'id_supplier' => 'required',
        ]);
        $barang->update([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'expired_date' => $request->expired_date,
            'id_supplier' => $request->id_supplier,
        ]);
        return Redirect::route('show_barang', $barang);
    }
    public function delete_barang(Barang $barang) {
        $barang->delete();
        return Redirect::route('index_barang');
    }
}
