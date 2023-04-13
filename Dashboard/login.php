<!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Halaman Login | User</title>
</head>
<body>
  <div class="container containeradmin"> 
    <div class="row content">
      <div class="col-md-6">
         <form method="POST" action="../app/model/user/user-sys-login.php">
              <h3>Login User</h3>
              <div class="form-group">
                <label>username</label>
                <input type="text" name="username" required="" class="form-control">
              </div>
              <div class="form-group">
                <label>password</label>
                <input type="password" name="password" required="" class="form-control">
              </div>
              <input class="btn btn-success btn-md mt-2" type="submit" name="submit" value="login">
              <a href="register.php" class="btn btn-warning btn-md mt-2 text-white">Daftar</a>
              <a href="../" class="btn btn-primary btn-md mt-2 text-white">Back</a>
          </form>
      </div>
    </div>
  </div>
    <script src="https://kit.fontawesome.com/0b9574c8b5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>