<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Halo</title>
</head>
<body>
    <h1>Halo, {{ $nama }}</h1>

    <ul>
        @foreach ($produk as $item) 
            <li>{{ $item['nama'] }} - Rp{{ $item['harga'] }}</li>
        @endforeach
    </ul>
</body>
</html>