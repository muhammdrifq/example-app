<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route Optional Paramater</title>
</head>
<body>

    <fieldset>
        <legend>Toko Matrial Berkah Batako</legend>
         {{-- Material 1 --}}
         <h3>Pesanan 1</h3>
        @if ($material1 == "Pasir Urug")
        Pesanan anda adalah : <b>{{$material1}}</b>
            <br> Harga {{$material1}} : Rp. 50000
        
        @elseif ($material1 == "Batako Besar")
        Pesanan anda adalah : <b>{{$material1}}</b>
            <br> Harga {{$material1}} : Rp. 30000
        
        @elseif ($material1 == "Bata Merah")
        Pesanan anda adalah : <b>{{$material1}}</b>
            <br> Harga {{$material1}} : Rp. 40000

        @elseif ($material1 == "Batu apung")
        Pesanan anda adalah : <b>{{$material1}}</b>
            <br> Harga {{$material1}} : Rp. 65000

        @else Pesanan anda tidak tersedia
        @endif

        <br>
        <hr>

        {{-- Material 2 --}}
        <h3>Pesanan 2</h3>
        @if ($material2 == "Pasir Urug")
        Pesanan anda adalah : <b>{{$material2}}</b>
            <br> Harga {{$material2}} : Rp. 50000
        
        @elseif ($material2 == "Batako Besar")
        Pesanan anda adalah : <b>{{$material2}}</b>
            <br> Harga {{$material2}} : Rp. 30000
        
        @elseif ($material2 == "Bata Merah")
        Pesanan anda adalah : <b>{{$material2}}</b>
            <br> Harga {{$material2}} : Rp. 40000
    
        @elseif ($material2 == "Batu apung")
        Pesanan anda adalah : <b>{{$material2}}</b>
            <br> Harga {{$material2}} : Rp. 65000
    
        @else Pesanan anda tidak tersedia
        @endif

    </fieldset>

   
   
    
</body>
</html>