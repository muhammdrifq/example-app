<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tablesiswa;

class tabelsiswaController extends Controller
{
    public function indexsiswa()
    {
        $tabelsiswa = tablesiswa::all();
        return view('siswa.indexsiswa', compact('tabelsiswa'));
    }
}
