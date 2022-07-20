<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class kamar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar =
        [
            ['no_kamar' => 66, 'jenis_kamar' => 'Suite Room', 'harga' => 1000000],
            ['no_kamar' => 77, 'jenis_kamar' => 'President Room', 'harga' => 750000],
            ['no_kamar' => 88, 'jenis_kamar' => 'Regular Room', 'harga' => 500000],
            ['no_kamar' => 99, 'jenis_kamar' => 'Suite Room', 'harga' => 1000000],
            ['no_kamar' => 101, 'jenis_kamar' => 'President Room', 'harga' => 750000],
        ];

        DB::table('kamars')->insert($kamar);
    }
}
