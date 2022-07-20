<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class tabelpeserta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peserta =
        [
            ['NoSiswa' => '2001', 'Kode_MP' => 'MP01'],
            ['NoSiswa' => '2001', 'Kode_MP' => 'MP02'],
            ['NoSiswa' => '2002', 'Kode_MP' => 'MP01'],
            ['NoSiswa' => '2002', 'Kode_MP' => 'MP02'],
            ['NoSiswa' => '2003', 'Kode_MP' => 'MP01'],
            ['NoSiswa' => '2003', 'Kode_MP' => 'MP02'],
            ['NoSiswa' => '2004', 'Kode_MP' => 'MP01'],
            ['NoSiswa' => '2004', 'Kode_MP' => 'MP02']
        ];
        DB::table('tabelpesertas')->insert($peserta);
    }
}
