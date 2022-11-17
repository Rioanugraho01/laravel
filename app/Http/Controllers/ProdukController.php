<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProdukController extends Controller{
    public function index() {
        $produk = FacadesDB::table('_penjualan')->get();
        return view('tes', ['produk' => $produk]);
        }
        public function show_eloquent() {
            $produk = kategori::all();
            return view('cek',['produk' => $produk]);
        }
        public function update_eloquent() {
            kategori::where('id',8)->update(['harga' => '3000']);
        }    
        public function insert_eloquent() {
            kategori::create(['id' => '100', 'Nama' => 'rudi', 'Harga'=> 11000, 'Jumlah' => '3']);
        }
            //return view(‘produk‘, [‘produk‘ => $produk]);
}