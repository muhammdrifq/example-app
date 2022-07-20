<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class tabelmapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel =
        [
            ['Kode_MP' => 'MP01', 'NAMA_MP' => 'ALGORITMA', 'SKS' => '2', 'SEMESTER' => '1'],
            ['Kode_MP' => 'MP02', 'NAMA_MP' => 'BASISDATA', 'SKS' => '3', 'SEMESTER' => '1'],
            ['Kode_MP' => 'MP03', 'NAMA_MP'=> 'ASSEMBLY', 'SKS' => '2', 'SEMESTER' => '2']
        ]; 
        DB::table('tabelmapels')->insert($mapel);
    }
}
