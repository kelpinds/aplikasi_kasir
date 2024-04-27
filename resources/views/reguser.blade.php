<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi | User</title>
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
                <form action="{{ url('reguserr/') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4>Silahkan Entry Pelanggan</h4>
                    <div class="mb-3">
                        <label for="pelanggan_id" class="form-label">Pelanggan Id</label>
                        <input type="text" class="form-control" id="pelanggan_id" name="pelanggan_id">
                    </div>
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
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
