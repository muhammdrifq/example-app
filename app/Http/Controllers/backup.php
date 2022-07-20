<html>
    @foreach ($menu as $data)
        <ul>
            <li>{{ $data['nama'] }}</li>
            @if(isset($data['kategori']))
        <ul>
        @foreach($data['kategori'] as $kategori)
        <li>{{ $kategori['nama_kategori'] }}</li>
        <ul>
            @if(isset($kategori['menu']))
            @foreach ($kategori['menu'] as $menu)
                <li>{{ $menu }}</li>
            @endforeach
            @endif
        </ul>
    @endforeach
        </ul>
    @endif
        </ul>    
    @endforeach  
</html>
$menu =
            [
               [
                 'nama' => 'Beranda',  
               ],
               [
                 'nama' => 'Berita',
                 'kategori' => [
                    [
                       'nama_kategori' => 'Olah Raga',
                       'menu' => [
                          'Sepak Bola',
                          'Bulu Tangkis'
                       ]
    
                    ],
                    [
                        'nama_kategori' => 'Politik'
                    ],
                    [
                        'nama_kategori' => 'Manca Negara'
                    ]
                 ]
               ],
               [
                'nama' => 'Tentang'
               ]


               

               //     [
        //        [
        //          'nama' => 'Beranda',  
        //        ],
        //        [
        //          'nama' => 'Berita',
        //          'kategori' => [
        //             [
        //                   'nama_kategori' => 'Olah Raga',
        //                   'menu' => [
        //                   'Sepak Bola',
        //                   'Bulu Tangkis'
        //                ]
    
        //             ],
        //             [
        //                 'nama_kategori' => 'Politik'
        //             ],
        //             [
        //                 'nama_kategori' => 'Manca Negara'
        //             ]
        //          ]
        //        ],
        //        [
        //         'nama' => 'Tentang'
        //        ]
        //  ];