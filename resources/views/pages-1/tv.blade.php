<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Televisi</title>
</head>
<body>
    Jadwal Dan Topik Berita:
    <br>
    @foreach ($televisi as $data)
          
         <br>{{$data['nama']}}<br>
             @foreach ($data['jadwaltayang'] as $jadwal)
             
                 =>{{ $jadwal }}
                 <br>

             @endforeach
             
        
    @endforeach
    
    
</body>
</html>