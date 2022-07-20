<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class tablesiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa =
        [
            ['NoSiswa' => '2001', 'NAMA' => 'Badu', 'JK' => 'L', 'JURUSAN' => 'TK'],
            ['NoSiswa' => '2002', 'NAMA' => 'Muliati', 'JK' => 'P', 'JURUSAN' => 'TE'],
            ['NoSiswa' => '2003', 'NAMA' => 'Rahmiadi', 'JK' => 'L', 'JURUSAN' => 'TK'],
            ['NoSiswa' => '2004', 'NAMA' => 'Nasrol', 'JK' => 'L', 'JURUSAN' => 'TK'],
        ];

        DB::table('tablesiswas')->insert($siswa);
    }
}
