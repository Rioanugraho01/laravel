<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Menambahkan Data</title>
</head>    
<body>
<table border=1>
<th>id</th><th>Nama</th><th>Harga</th><th>Jumlah</th>

@foreach($produk as $p)
<tr><td>{{ $p->id }}</td><td>{{ $p->Nama }}</td><td>{{ $p->Harga }}</td><td>{{ $p->Jumlah }}</td> </tr>@endforeach
</table>

</body>
</html>