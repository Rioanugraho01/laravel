<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class produkTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orang')->insert(array(['id' => '1', 'Nama' => 'Rio', 'Alamat' => 'Banyuwangi', 'JenisKelamin' => 'Laki-Laki', 'Pekerjaan' => 'Mahasiswa', 'Agama' => 'Islam' ] ));
    }
}
