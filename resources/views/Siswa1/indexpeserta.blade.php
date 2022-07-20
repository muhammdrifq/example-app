<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Peserta</title>
</head>
<body>

    <h4>Tabel Peserta</h4>
    <table border="1">
        <tr style="background-color:salmon">
            <td>NoSiswa</td>
            <td>Kode_MP</td>
        </tr>

        @foreach ($tablepeserta as $data)
        <tr>
            <td>{{$data['NoSiswa']}}</td>
            <td>{{$data['Kode_MP']}}</td>
        </tr>
            
        @endforeach
    </table>
    
</body>
</html>