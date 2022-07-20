<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabelpeserta;

class tabelpesertaController extends Controller
{
    public function indexpeserta()
    {
        $tablepeserta = tabelpeserta::all();
        return view('siswa.indexpeserta', compact('tablepeserta'));
    }
}
