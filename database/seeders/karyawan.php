<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class karyawan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan =
        [
            ['id_karyawan' => '2310', 'nm_karyawan' => 'Ahmad', 'JK' => 'Laki-laki'],
            ['id_karyawan' => '2311', 'nm_karyawan' => 'Bima', 'JK' => 'Laki-laki'],
            ['id_karyawan' => '2312', 'nm_karyawan' => 'Euis', 'JK' => 'Perempuan'],
            ['id_karyawan' => '2313', 'nm_karyawan' => 'Lilis', 'JK' => 'Perempuan'],
            ['id_karyawan' => '2314', 'nm_karyawan' => 'Putra', 'JK' => 'Laki-laki']
        ];

        DB::table('karyawans')->insert($karyawan);
    }
}
