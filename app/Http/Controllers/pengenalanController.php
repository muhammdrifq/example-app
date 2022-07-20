<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengenalanController extends Controller
{
    //

    public function pengenalan()
    {
        $nama = "Muhammad Rifqi Hidayatulloh";
        $umur = "16";
        return view('pages-1.pengenalan', compact('nama','umur'));
    }

    public function intro($nama, $alamat, $umur)
    {
        
        return view('pages-1.intro', compact('nama', 'alamat', 'umur'));

    }

    public function siswa()
    {
        $a = [
            array('id' => 1001, 'nama' => 'Muhammad Rifqi Hidyatulloh', 'umur' => 16, 'kelas' => 'XII RPL 2',
            'mapel' => ['B.Indonesia', 'B.Inggris']),
            array('id' => 1002, 'nama' => 'Rizal Firziawan Sidik', 'umur' => 18, 'kelas' => 'XII RPL 3',
            'mapel' => ['MTK', 'IPA']),
            array('id' => 1003, 'nama' => 'Ilyas Dika', 'umur' => 16, 'kelas' => 'XII RPL 3',
            'mapel' => ['Simdig', 'B.Sunda']),
            array('id' => 1004, 'nama' => 'Raja Putra Permana', 'umur' => 17, 'kelas' => 'XII RPL 1',
            'mapel' => ['Fisika', 'PKWU']),
            array('id' => 1005, 'nama' => 'Rifki Muhammad Fauzi', 'umur' => 17, 'kelas' => 'XII RPL 2',
            'mapel' => ['BK', 'BTQ'])
        ];

        return view('pages-1.siswa', ['siswa' => $a]);
    }


}
