<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class supplierController extends Controller
{
    //
    public function create_supplier() {
        return view('create_supplier');
    }
    public function store_supplier(Request $request) {
        $request->validate([
            'nama_supplier' => 'required',
            'kontak_sales' => 'required',
            'no_telepon' => 'required',
            'alamat_perusahaan' => 'required',
        ]);
        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'kontak_sales' => $request->kontak_sales,
            'no_telepon' => $request->no_telepon,
            'alamat_perusahaan' => $request->alamat_perusahaan
        ]);
        return Redirect::back();
    }
    public function index_supplier() {
        $suppliers = Supplier::all();
        return view('index_supplier', compact('suppliers'));
    }
    public function edit_supplier(Supplier $supplier) {
        return view('edit_supplier', compact('supplier'));
    }
    public function update_supplier(Supplier $supplier, Request $request) {
        $request->validate([
            'nama_supplier' => 'required',
            'kontak_sales' => 'required',
            'no_telepon' => 'required',
            'alamat_perusahaan' => 'required',
        ]);
        $supplier->update([
            'nama_supplier' => $request->nama_supplier,
            'kontak_sales' => $request->kontak_sales,
            'no_telepon' => $request->no_telepon,
            'alamat_perusahaan' => $request->alamat_perusahaan,
        ]);
        return Redirect::back();
    }
    public function delete_supplier(Supplier $supplier) {
        $supplier->delete();
        return Redirect::back();
    }
}
