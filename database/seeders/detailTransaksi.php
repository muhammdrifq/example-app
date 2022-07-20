<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class detailTransaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dtl =
        [
            ['id_dtl_transaksi' => '11', 'no_transaksi' => 1, 'no_kamar' => 66],
            ['id_dtl_transaksi' => '12', 'no_transaksi' => 2, 'no_kamar' => 77],
            ['id_dtl_transaksi' => '13', 'no_transaksi' => 3, 'no_kamar' => 88],
            ['id_dtl_transaksi' => '14', 'no_transaksi' => 4, 'no_kamar' => 99],
            ['id_dtl_transaksi' => '15', 'no_transaksi' => 5, 'no_kamar' => 101],
        ];

        DB::table('detail_transaksis')->insert($dtl);
    }
}
