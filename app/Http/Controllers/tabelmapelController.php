<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabelmapel;
use App\Models\tabelpeserta;
use App\Models\tablesiswa;

class tabelmapelController extends Controller
{
    public function indexmapel()
    {
        $tabelmapel = tabelmapel::all();
        $tablepeserta = tabelpeserta::all();
        $tabelsiswa = tablesiswa::all();
        return view('Siswa1.indexmapel', compact('tabelmapel', 'tablepeserta', 'tabelsiswa'));
    }
}
