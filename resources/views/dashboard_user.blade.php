<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | User</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <style>
        /* Custom CSS */
        body {
            padding-top: 70px;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .container {
            max-width: 800px;
        }

        h2 {
            color: #007bff;
        }

        .lead {
            font-size: 18px;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard | User</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login_pembelian/') }}">Logout | </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Selamat datang di Online Pedia</h2>
        <p class="lead text-center">Entry Pembayaran Disini.</p>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-1">
        <div class="card pt-4" style="width: 25%;">
            <div class="card-body">
                <form action="{{ url('penjualan/') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4>Silahkan Entry Pembayaran</h4>
                    <div class="mb-3">
                        <label for="produk_id" class="form-label">Produk Id</label>
                        <input type="text" class="form-control" id="produk_id" name="produk_id">
                    </div>
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="stok" class="form-control" id="stok" name="stok">
                    </div>
                        <div class="mb-3">
                            <button class="btn form-control btn-primary mb-2">Entry</button>
                            <button class="btn form-control btn-warning  mb-2" type="reset">Batal</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
