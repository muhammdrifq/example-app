<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA HOTEL</title>
</head>
<body>

    <fieldset>
        <legend>
            DATA HOTEL PRIME TOWER
        </legend>
        <br>
        <h3>DATA PENGUNJUNG</h3>
        <table border="2">
            <tr style="background-color: sandybrown">
                <td>ID Pengunjung</td>
                <td>Nama Pengunjung</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>No Telp</td>
                <td>No KTP</td>
            </tr>
            @foreach ($pengunjung as $data1)
            <tr>
                <td>{{$data1['id_pengunjung']}}</td>
                <td>{{$data1['nm_pengunjung']}}</td>
                <td>{{$data1['alamat']}}</td>
                <td>{{$data1['JK']}}</td>
                <td>{{$data1['no_tlp']}}</td>
                <td>{{$data1['no_ktp']}}</td>

            </tr>    
            @endforeach
        </table>

        <hr>

        <h3>DATA TRANSAKSI</h3>
        <table border="2">
            <tr style="background-color: sandybrown">
                <td>No Transaksi</td>
                <td>ID Pengunjung</td>
                <td>ID Karyawan</td>
                <td>Jumlah Kamar</td>
                <td>Check In</td>
                <td>Check Out</td>
                <td>Lama Menginap</td>
                <td>Total Harga</td>
            </tr>
            @foreach ($transaksi as $data1)
            <tr>
                <td>{{$data1['no_transaksi']}}</td>
                <td>{{$data1['id_pengunjung']}}</td>
                <td>{{$data1['id_karyawan']}}</td>
                <td>{{$data1['jmlh_kamar']}}</td>
                <td>{{$data1['tgl_masuk']}}</td>
                <td>{{$data1['tgl_keluar']}}</td>
                <td>{{$data1['lama_nginap']}} Malam</td>
                <td>Rp.{{$data1['total_harga']}}</td>
            </tr>
                
            @endforeach
        </table>

        <hr>
        <h3>DATA KARYAWAN</h3>
        <table border="2">
            <tr style="background-color: sandybrown">
                <td>ID Karyawan</td>
                <td>Nama Karyawan</td>
                <td>Jenis Kelamin</td>
            </tr>

            @foreach ($karyawan as $data1)
            <tr>
                <td>{{$data1['id_karyawan']}}</td>
                <td>{{$data1['nm_karyawan']}}</td>
                <td>{{$data1['JK']}}</td>
            </tr>
                
            @endforeach
        </table>

        <hr>
        <h3>DATA DETAIL TRANSAKSI</h3>
        <table border="2">
            <tr style="background-color: sandybrown">
                <td>ID Detail Transaksi</td>
                <td>No Transaksi</td>
                <td>No Kamar</td>
            </tr>
            
            @foreach ($dtl as $data1)
            <tr>
                <td>{{$data1['id_dtl_transaksi']}}</td>
                <td>{{$data1['no_transaksi']}}</td>
                <td>{{$data1['no_kamar']}}</td>
            </tr>
                
            @endforeach
        </table>

        <hr>
        <h3>DATA KAMAR</h3>
        <table border="2">
            <tr style="background-color: sandybrown">
                <td>No Kamar</td>
                <td>Jenis Kamar</td>
                <td>Harga</td>
            </tr>

            @foreach ($kamar as $data1)
            <tr>
                <td>{{$data1['no_kamar']}}</td>
                <td>{{$data1['jenis_kamar']}}</td>
                <td>Rp.{{$data1['harga']}}</td>
            </tr>
                
            @endforeach
        </table>
    </fieldset>
    
</body>
</html>