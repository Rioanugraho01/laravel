<?php

namespace App\Http\Controllers;
use App\Models\produk;
use Illuminate\Http\Request;

class ProdukControllerUTS extends Controller
{
    public function index() {
        $produk=produk::all();
        return view('produk', compact(['produk']));
    }

    public function create() {
        return view('membuat');
    }

    public function store(Request $request) {
        produk::create([
        'Nama' => $request->Nama,
        'Alamat' => $request->Alamat,
        'JenisKelamin' => $request->JenisKelamin,
        'Pekerjaan' => $request->Pekerjaan,
        'Agama' => $request->Agama
        ]);
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(produk $produk) {
        return view('edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk) {
        $produk->update([
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'JenisKelamin' => $request->JenisKelamin,
            'Pekerjaan' => $request->Pekerjaan,
            'Agama' => $request->Agama
            ]);
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(produk $produk) {
        $produk->delete();
        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
