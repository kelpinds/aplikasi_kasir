<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stok | </title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
      body {
        background-color: #f8f9fa;
      }
      .login-container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #fff;
      }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-1">
        <div class="card pt-4" style="width: 25%;">
            <div class="card-body">
                <form action="{{ url('stokk') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4>Silahkan Entry Stok</h4>
                    <div class="mb-3">
                        <label for="detail_id" class="form-label">Detail Id</label>
                        <input type="text" class="form-control" id="detail_id" name="detail_id">
                    </div>
                    <div class="mb-3">
                        <label for="penjualan_id" class="form-label">Penjualan Id</label>
                        <input type="text" class="form-control" id="penjualan_id" name="penjualan_id">
                    </div>
                    <div class="mb-3">
                        <label for="produk_id" class="form-label">Produk Id</label>
                        <input type="text" class="form-control" id="produk_id" name="produk_id">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
                        <input type="text" class="form-control" id="jumlah_produk" name="jumlah_produk">
                    </div>
                    <div class="mb-3">
                        <label for="subtotal" class="form-label">Subtotal</label>
                        <input type="text" class="form-control" id="subtotal" name="subtotal">
                    </div>
                        <div class="mb-3">
                            <button class="btn form-control btn-primary mb-2">Entry</button>
                            <button class="btn form-control btn-warning  mb-2" type="reset">Batal</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
