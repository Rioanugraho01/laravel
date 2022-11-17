<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Contoh tutorial CRUD Laravel 9</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Data Produk</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href= "/coba/create"> Tambah Data</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Jumlah</th>
<th width="280px">Action</th>
</tr>
@foreach ($produk as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->Nama }}</td>
<td>{{ $p->Harga }}</td>
<td>{{ $p->Jumlah }}</td>
<td>
<form action="" method="Post">
<a class="btn btn-primary" href="">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>