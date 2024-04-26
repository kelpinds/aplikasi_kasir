<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Admin | Petugas </title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
</head>
<body>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Load Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
          /* Custom Styles */
          body {
            background-color: #f8f9fa;
          }
          .login-container {
            max-width: 300px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            background-color: #fff;
          }
        </style>
      </head>
      <body>

      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center login-container">
            <h2 class="mb-4">Login</h2>
            <form action="{{ url('login/') }}" method="post"  class="login-container">
                @csrf
              <div class="mb-3">
                <input type="username" class="form-control" id="username" name="username" placeholder="Username">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-secondary w-100">Login</button>
            </form>
            <p class="mt-3">Don't have an account? <a href="#">Sign up here</a></p>
          </div>
        </div>
      </div>

      <!-- Load Bootstrap JS (optional) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      </body>
</body>
</html>
