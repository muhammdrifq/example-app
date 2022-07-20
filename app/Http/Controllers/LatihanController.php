<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
   
    public function menu()
    {
        $b = [
        [
            'navbar' => ['Beranda', 'Berita', 'Tentang'],
            'berita' => ['Olahraga', 'Politik', 'Manca Negara'],
            'olga' => ['Sepak Bola', 'Bulu Tangkis']
        ]
        ];
    
        //dd($menu);
        return view('pages-1.menu', ['menu' => $b]);   
    }

    public function dosen(){
        $dosen =[
        [
            'guru' => ['Yusuf Bachtiar', 'Yaris Riyadi'],
        ]
        ];

    return view('pages-1.dosen2', ['dosen' => $dosen]);
     }   

   public function televisi(){
    $televisi = [
        [
        'nama' => 'NET TV',
                'jadwaltayang' => [
                                    'program' => 'Seputar Olahraga', 
                                    'jam' => '18.00 WIB',
                                    'tanggal' => '20 juni 2021', 
                                ] 
        ],
        [
        'nama' => 'TVRI',
                'jadwaltayang' => [
                                    'program' => 'Seputar Politik', 
                                    'jam' => '19.00 WIB',
                                    'tanggal' => '24 juni 2021', 
                                ]
        ],
        [
        'nama' => 'BEINSPORT',
                'jadwaltayang' => [
                                    'program' => 'Seputar Olahraga dan Atlet', 
                                    'jam' => '18.30 WIB',
                                    'tanggal' => '4 juni 2021', 
                                ]
        ],
        [
        'nama' => 'Ochannel',
                'jadwaltayang' => [
                                    'program' => 'Seputar Gaming', 
                                    'jam' => '12.00 WIB',
                                    'tanggal' => '9 juni 2021', 
                                ]
        ],
        [
        'nama' => 'Indosiar',
                'jadwaltayang' => [
                                    'program' => 'Seputar Olahraga', 
                                    'jam' => '17.50 WIB',
                                    'tanggal' => '1 juni 2021', 
                                ]
        ]
        
    ];

    return view('pages-1.tv', ['televisi' => $televisi]);
}

 
    
}
 