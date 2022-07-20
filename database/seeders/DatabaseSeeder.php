<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\PostDec;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostTableSeeder::class,
            tablesiswa::class,
            tabelpeserta::class,
            tabelmapel::class,
            pengunjung::class,
            transaksi::class,
            karyawan::class,
            detailTransaksi::class,
            kamar::class,
        ]);
    }
}
