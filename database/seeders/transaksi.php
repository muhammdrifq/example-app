<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaki =
        [
            ['no_transaksi' => 1001, 'id_pengunjung' => '1411', 'id_karyawan' => '2310', 'jmlh_kamar' => 1, 'tgl_masuk' => '2022-11-14', 'tgl_keluar' => '2022-11-25', 'lama_nginap' => 12, 'total_harga' => 1000000],
            ['no_transaksi' => 1002, 'id_pengunjung' => '1412', 'id_karyawan' => '2311', 'jmlh_kamar' => 1, 'tgl_masuk' => '2022-11-10', 'tgl_keluar' => '2022-11-13', 'lama_nginap' => 4, 'total_harga' => 2000000],
            ['no_transaksi' => 1003, 'id_pengunjung' => '1413', 'id_karyawan' => '2312', 'jmlh_kamar' => 1, 'tgl_masuk' => '2023-1-1', 'tgl_keluar' => '2023-1-7', 'lama_nginap' => 7, 'total_harga' => 3000000],
            ['no_transaksi' => 1004, 'id_pengunjung' => '1414', 'id_karyawan' => '2313', 'jmlh_kamar' => 1, 'tgl_masuk' => '2023-10-1', 'tgl_keluar' => '2023-10-3', 'lama_nginap' =>3, 'total_harga' => 4000000],
            ['no_transaksi' => 1005, 'id_pengunjung' => '1415', 'id_karyawan' => '2314', 'jmlh_kamar' => 1, 'tgl_masuk' => '2021-9-3', 'tgl_keluar' => '2021-9-6', 'lama_nginap' => 4, 'total_harga' => 5000000],
        ];

        DB::table('transaksis')->insert($transaki);   
    }
}
