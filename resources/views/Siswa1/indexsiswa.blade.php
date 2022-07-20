<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Siswa</title>
</head>
<body>
    <h4>Tabel Siswa</h4>
        <table border="2">
            <tr style="background-color: salmon">
                <td>NoSiswa</td>
                <td>NAMA</td>
                <td>JK</td>
                <td>JURUSAN</td>
            </tr>

            @foreach ($tabelsiswa as $data)
            <tr>
                <td>{{$data['NoSiswa']}}</td>
                <td>{{$data['NAMA']}}</td>
                <td>{{$data['JK']}}</td>
                <td>{{$data['JURUSAN']}}</td>
            </tr>
                
            @endforeach
 
    
</body>
</html>