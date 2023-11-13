<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="crsf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2>Data Mahasiswa</h2>
  <div class="container mt-4">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
<div class="card">
    <div class="card-body">
        <form action="{{ url('tampilkan') }}" method="get" name="add-blog-post-form" id="ad-blog-post-form">
        @csrf
        <div class="form-group">
            NIM
            <input type="text" id="nim" name="nim" class="form-control" required>
        </div>
        NAMA
        <div class="form-group">
            <input type="text" id="nama" name="nama" class="form-control" required>
            
        </div>

        <div class="form-group">
        ALAMAT
            <textarea class="form-control" name="alamat" id="" cols="30" rows="10" required></textarea>

        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>

    </div>

</div>

  </div>
    
</body>
</html>