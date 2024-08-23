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
                <a class="nav-link" href="#">Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cetak Laporan</a>
            </li>
        </div>
    </nav><br>

    @if(session('success'))
        <div class="container alert alert-success">
            <span class="bi-check"></span> {{ session('success') }}
        </div>
    @endif
    <div class="container bg-white rounded shadow p-4">
        <h5>Outlet</h5>
        <span class="fs-15 mb-2 ">Halaman Outlet</span>
        <a href="/admin/outlet/tambahoutlet" class="btn btn-sm btn-success float-end mb-3 fs-15"><i class="bi-plus"></i> Tambah Transaksi</a>
        <table class="table table-bordered fs-15">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
            <?php $i=1; ?>
            @foreach ($get as $a)
                <tr>
                    <td><?= $i++ ?>.</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->alamat }}</td>
                    <td>{{ $a->tlp }}</td>
                    <td>
                        <a href="/admin/member/edit/{{ $a->id }}" class="btn btn-sm btn-primary fs-15"><i class="bi-pencil"></i> Edit</a>
                        <a href="/admin/member/hapus/{{ $a->id }}" onclick="return confirm('Apakah anda yakin ingin menghapus outlet ini ?')" class="btn btn-sm btn-danger fs-15"><i class="bi-trash"></i> Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script src="/assets/js/bootstrap.js"></script>
</body>
</html>