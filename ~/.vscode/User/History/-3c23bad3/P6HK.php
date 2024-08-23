<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir Laundry</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/custom/custom.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg fs-15 navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Laundry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/home">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/outlet">Outlet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/member">Member</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/transaksi">Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cetak Laporan</a>
            </li>
        </div>
    </nav><br>

    <div class="card bg-white shadow mx-auto mt-4 w-50 p-2">
        <div class="card-body">
            <h5>Edit Member</h5>
            <form action="/admin/member/edit/{{ $data->id }}" method="post">
                @csrf
                <div class="form-group mt-2">
                    <label class="fs-15">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control form-sm" value="{{ $data->nama }}">
                </div>
                <div class="form-group mt-2">
                    <label class="fs-15">Nomor Telepon</label>
                    <input type="number" name="tlp" class="form-control form-sm" value="{{ $data->tlp }}">
                </div>
                <div class="form-group mt-2">
                    <label class="fs-15">Jenis Kelamin</label>
                    <select id="jk" class="form-control form-sm">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label class="fs-15">Alamat</label>
                    <textarea name="alamat" cols="30" rows="10" class="form-control">{{ $data->alamat }}</textarea>
                </div>
                <button type="submit" class="btn btn-sm btn-success fs-15 mt-3 float-end"><i class="bi-floppy"></i> Edit data</button>
            </form>
        </div>
    </div>
    <script src="/assets/js/bootstrap.js"></script>
</body>
</html>