<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>

    @foreach ($siswa as $murid)

        <table>
            <tr>
                <td>ID Siswa</td>
                <td>:</td>
                <td>{{$murid['id']}}</td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$murid['nama']}}</td>
            </tr>

            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{$murid['umur']}} Tahun</td>
            </tr>

            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    @if ($murid['umur'] >= 17 )
                        Anda berhak mendapatkan SIM
                                          
                    @else
                        Anda belum bisa mendapatkan SIM
                      
                    @endif 
                    
                </td>
            </tr>

            <tr>
                <td>Daftar Mata Pelajaran</td>
                <td>:</td>
            </tr>
            <td>
                @foreach ($murid['mapel'] as $mapel)
                <li>{{$mapel}}</li>
                @endforeach
            </td>
        </table>
       <hr>

        
    @endforeach
</fieldset>
</body>
</html>