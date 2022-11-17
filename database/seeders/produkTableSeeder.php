<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_penjualan')->insert(array(['id' => '2', 'Nama' => 'Rio', 'Harga' => 50.000, 'Jumlah' => 2, ] ));
    }
}
