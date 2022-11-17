<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Produk</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/coba/create"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
        </div>
        @endif
        <form action= "/coba" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>id:</strong>
                    <input type="text" name="id" class="form-control" placeholder="id">
                    @error('id')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="Nama" class="form-control" placeholder="Nama">
                @error('Nama')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Harga:</strong>
                <input type="text" name="Harga" class="form-control" placeholder="Harga">
                @error('Harga')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Jumlah:</strong>
                <input type="text" name="Jumlah" class="form-control" placeholder="Jumlah">
                @error('Jumlah')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
        </div> 
    </div>
    <button type="submit" class="btn btn-primary ml-3"onclick="return confirm('anda yakin untuk menambah');">Submit</button>
    </div>
</form>
</body>
</html>