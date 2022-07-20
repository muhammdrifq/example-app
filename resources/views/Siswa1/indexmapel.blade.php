<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Mapel</title>
</head>
<body>

    <fieldset>
        <legend>
            Tugas 3 Tabel
        </legend>

        <h4>Tabel Mata Pelajaran</h4>
        <table border="1">
            <tr style="background-color: salmon">
                <td>Kode_MP</td>
                <td>NAMA_MP</td>
                <td>SKS</td>
                <td>SEMESTER</td>
            </tr>

            @foreach ($tabelmapel as $data)
            <tr>
                <td>{{$data['Kode_MP']}}</td>
                <td>{{$data['NAMA_MP']}}</td>
                <td>{{$data['SKS']}}</td>
                <td>{{$data['SEMESTER']}}</td>
            </tr>
                
            @endforeach
        </table>

        <hr>

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

    <hr>

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

    </fieldset>
    
</body>
</html>