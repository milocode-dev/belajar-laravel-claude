<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan menampilkan profile</title>
</head>
<body>
    <h1>Selamat datang di, {{ $perusahaan }}</h1>


    <h4>Berikut adalah jajarannya</h4>
    <ul>
        @foreach ($karyawan as $pegawai)
            <li>{{ $pegawai['nama'] }} berstatus sebagai {{ $pegawai['status'] }}</li>
        @endforeach
    </ul>

    <h4>Produk yang dihasilkan PT Fion</h4>
    <ul>
        @foreach ($produk as $item)
            <li>Produk yang dihasilkan {{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>