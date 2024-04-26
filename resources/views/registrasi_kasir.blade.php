<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi | Kasir</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <style>body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }

    header .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    header nav ul li {
        display: inline;
    }

    header nav ul li a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
    }

    section {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    table th {
        background-color: #f2f2f2;
    }

    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tr:hover {
        background-color: #f2f2f2;
    }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Dashboard Kasir</h1>
            <nav>
                <ul>
                    <li><a href="{{ url('registrasi_kasir/') }}">Registrasi Kasir</a></li>
                    <li><a href="{{ url('data/') }}">Pendataan Barang</a></li>
                    <li><a href="{{ url('#') }}">Stok  Barang</a></li>
                    <li><a href="{{ url('laporan_penjualan') }}">Laporan</a></li>
                    <li><a href="{{ url('logout/') }}">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container">
        <h2>Tambahkan Kasir</h2>
        <form action="{{ url('registration') }}" method="post">
          @csrf
        <form class="transaction-form">
            <div class="form-group">
              <label for="id_kasir">Id Kasir</label>
              <input type="text" id="id_kasir" name="id_kasir" required>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" id="telepon" name="telepon" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="akses">Akses</label>
                <select class="form-select" id="akses" name="akses">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </section>
    <br><br>
    <section class="container">
        <h2>Tambahkan Barang</h2>
        <form action="{{ url('penjualan_admin') }}" method="post">
          @csrf
        <form class="transaction-form">
            <div class="form-group">
              <label for="produk_id">Produk Id </label>
              <input type="text" id="produk_id" name="produk_id" required>
          </div>
          <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" id="nama_produk" name="nama_produk" required>
        </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" id="stok" name="stok" required>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </section>
</body>
</html>
