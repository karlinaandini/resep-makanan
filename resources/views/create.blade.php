<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Tambah Data Post - SantriKoding.com</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Data Siswa</a>
    <a class="navbar-brand" href="{{ route('home')}}">Home</a>
    <a class="navbar-brand" href="{{ route('actionlogout')}}">Log Out</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow-sm rounded">
<div class="card-body">
<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label class="font-weight-bold">NISN</label>
    <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{old('nisn') }}" placeholder="Masukkan NISN">
    <!-- error message untuk content -->
    @error('nisn')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>

<div class="form-group">
<label class="font-weight-bold">NAMA</label>
<textarea class="form-control @error('nama') is-invalid @enderror" name='nama' placeholder="Masukkan Nama">{{old ('nama') }}</textarea>

<label class="font-weight-bold">KELAS</label><br>
@for ($i = 1; $i <= 4; $i++)
<input id="{{$i}}" type="radio" name="kelas" value="XII RPL {{ $i }}">
<label for="{{$i}}"></label>XII RPL {{ $i }}
</label><br>
@endfor

<div class="form-group">
    <label class="font-weight-bold">FOTO</label>
    <INPUT TYPE="file" class="form-control @error('image') is-invalid @enderror"
    name="image">
        <!-- error message untuk title -->
        @error('image')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
        </div>

    <!-- error message untuk title -->
    @error('nama')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>

<button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
<button type="reset" class="btn btn-md btn-warning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'content' );
</script>
</body>
</html
