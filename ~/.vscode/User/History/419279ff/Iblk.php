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
                <a class="nav-link" href="/admin/member">Tambah Member</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cetak Laporan</a>
            </li>
        </div>
    </nav><br>

    <div class="card bg-white shadow mx-auto mt-4 w-50 p-2">
        <div class="card-body">
            <h5>Tambah Outlet</h5>
            <form action="/admin/outlet/tambahoutlet" method="post">
                <div class="form-group mt-2">
                    <label class="fs-15">Nama Outlet</label>
                    <input type="text" name="nama" class="form-control form-sm">
                </div>
            </form>
        </div>
    </div>
    <script src="/assets/js/bootstrap.js"></script>
</body>
</html>