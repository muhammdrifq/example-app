<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class pengunjung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung =
        [
           ['id_pengunjung' => '1001', 'nm_pengunjung' => 'Muhammad Rifqi', 'alamat' => 'Grha Rancamanyar', 'JK' => 'Laki-laki', 'no_tlp' => '082128775608', 'no_ktp' => 231031],
           ['id_pengunjung' => '1002', 'nm_pengunjung' => 'Abdullah Gybran', 'alamat' => 'Deket FCL', 'JK' => 'Laki-laki', 'no_tlp' => '08212238171', 'no_ktp' => 231032],
           ['id_pengunjung' => '1003', 'nm_pengunjung' => 'Rizal Firzi', 'alamat' => 'Rancamanyar', 'JK' => 'Laki-laki', 'no_tlp' => '09138392827', 'no_ktp' => 231033],
           ['id_pengunjung' => '1004', 'nm_pengunjung' => 'Risnadia Azizah', 'alamat' => 'Coblong', 'JK' => 'Perempuan', 'no_tlp' => '0845218710', 'no_ktp' => 231034],
           ['id_pengunjung' => '1005', 'nm_pengunjung' => 'Raja Putra', 'alamat' => 'Rancamanyar', 'JK' => 'Laki-laki', 'no_tlp' => '1234567819', 'no_ktp' => 231035] 
        ];

        DB::table('pengunjungs')->insert($pengunjung);
    }
}
