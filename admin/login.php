<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets5/css/bootstrap.min.css" rel="stylesheet">
  <link href="../user/style.css" rel="stylesheet">

  <title>Barang Sekolah</title>

</head>

<body style="background-color: aliceblue;">
  <nav class="navbar navbar-expand-lg navbar-info bg-transparent fixed-top" id="menuNav">

    <div class="container">
      <a class="navbar-brand border border-info border-3 px-2 " href="../user/index.php">Barang Sekolah</a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-info btn-lg shadow-lg mb-2 rounded" href="../user/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-info btn-lg ms-2 shadow-lg mb-2 rounded" href="../admin/login.php">Admin</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row" style="margin-top: 140px; margin-left:110px">
      <div class="col-md-4"></div>
      <!-- form login -->
      <div class="col-md-4 bg-info rounded-3 shadow-lg p-3 mb-5 rounded" style="height: 450px; width:400px;">
        <?php
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan'] == "gagal") {
            echo "<p class='bg-danger'>Login gagal! username dan password salah!</p>";
          } else if ($_GET['pesan'] == "logout") {
            echo "<p classs='bg-success'> Anda telah berhasil logout</p>";
          }
        }
        ?>

        <form method="POST" action="prosesLogin.php" class="bg-light shadow-lg p-3 mb-5 rounded mt-5">
          <h2 class="text-center" style=" margin-bottom:40px; margin-top:20px;"> ADMINISTRATOR </h2>
          <div class="form-group ">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username Anda">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password Anda">
          </div>
          <p align="right"><button type="submit" class="btn btn-outline-info" style="margin-top:10px;">Login</button></p>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <script src="../assets5/js/bootstrap.bundle.min.js"></script>
</body>

</html>