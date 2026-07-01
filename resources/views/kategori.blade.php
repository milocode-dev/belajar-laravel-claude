<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
</head>
<body>
    <h1>Ini adalah kategori produk buatan kami beserta dengan deskripsinya</h1>

    <ul>
        @foreach ($kategori as $item)
            <li>{{ $item['nama'] }} merupakan {{ $item['deskripsi'] }}</li>
        @endforeach
    </ul>
</body>
</html>