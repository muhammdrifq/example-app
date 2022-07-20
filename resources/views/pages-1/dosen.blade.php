<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Dosen</legend>
        @foreach ($dosen as $data)
        <br><hr>
        <table border="1" ><th>Nama dosen : {{$data['nama']}} </th><br>
        </table>  
        <table border="1">
        <tr>
            <td>Mata Kuliah : {{ $data['mata_kuliah'] }} <br></td><br> <br>
        </tr>
        </table>
        <table border="1">
            
        Mahasiswa Pembimbing: <br>
        <?php $nilai_0 = 0?>
        
        @foreach ($data['mahasiswa'] as $siswa)
             <br>{{$siswa['nama']}} : {{$siswa['nilai']}}
             @if($siswa['nilai'] >= 90 && 100)
                 (Grade A)
             @elseif($siswa['nilai'] >= 80 && 89)
                 (Grade B)
             @elseif($siswa['nilai'] >= 70 && 79)
                 (Grade C)
             @elseif($siswa['nilai'] >= 50 && 69)
                 (Grade D)
             @endif
        <?php $nilai_0 += $siswa['nilai']?>
        @endforeach
        <br>
        Total Nilai : {{ $nilai_0 }}
        <?php $rata = $nilai_0 / count($data['mahasiswa'])?>
         <br>
         Rata-Rata :{{ $rata }}
         @if ($rata >= 90)
             Grade  {{ $data['nama'] }} :A
         @elseif ($rata >= 80)
             Grade  {{ $data['nama'] }} :B
         @elseif ($rata >= 70)
             Grade  {{ $data['nama'] }} :C 
         @elseif ($rata >= 60)
             Grade  {{ $data['nama'] }} :D   
             
             








         @endif
        
        <br>
            
        @endforeach
    </table>
    </fieldset>
</body>
</html>