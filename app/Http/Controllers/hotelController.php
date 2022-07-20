<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamar;
use App\Models\karyawan;
use App\Models\detail_transaksi;
use App\Models\pengunjung;
use App\Models\transaksi;

class hotelController extends Controller
{
    public function index()
    {
        $kamar = kamar::all();
        $karyawan = karyawan::all();
        $dtl = detail_transaksi::all();
        $pengunjung = pengunjung::all();
        $transaksi = transaksi::all();
        return view('hotel.index', compact('kamar', 'karyawan', 'dtl', 'pengunjung', 'transaksi'));
    }
    
}
