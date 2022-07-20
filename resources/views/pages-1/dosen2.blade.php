<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Dosen</title>
</head>
<body>
    <fieldset>
        <legend>Data Dosen</legend>

        <table border="2">
            @foreach ($dosen as $data)
            <tr>
                <td>Nama Dosen : {{$data['guru']}}</td>
            </tr>
                
            @endforeach
        </table>
    </fieldset>
</body>
</html>