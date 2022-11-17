<?php

namespace App\Http\Controllers;

use App\Models\hasil;
use Illuminate\Http\Request;

class ProdukController2 extends Controller{
    public function index() {
        $produk=hasil::all();
        return view('coba', compact(['produk']));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        hasil::create([
        'Nama' => $request->Nama,
        'Harga' => $request->Harga,
        'Jumlah' => $request->Jumlah
        ]);
        return redirect()->route('create.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}