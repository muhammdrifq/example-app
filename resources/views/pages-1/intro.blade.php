<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controller Parameter</title>
</head>
<body>

    <fieldset>
        <legend><b>Biodata</b></legend>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$nama}}</td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{$alamat}}</td>
            </tr>

            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{$umur}} Tahun</td>
            </tr>
            
        </table>
        
        
    </fieldset>
    
</body>
</html>