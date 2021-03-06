<?php
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['simpan'])) {
  $id = $_POST['id'];

  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];

  // update user data
  $result = mysqli_query($mysqli, "UPDATE tb_admin SET username='$username',
                  password='$password', nama='$nama', email='$email' WHERE id_admin = $id");

  // Redirect to homepage to display updated user in list
  header("Location:layoutAdmin.php?halaman=tableAdmin");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_admin WHERE id_admin = $id");

while ($user_data = mysqli_fetch_array($result)) {
  $username = $user_data['username'];
  $password = $user_data['password'];
  $nama = $user_data['nama'];
  $email = $user_data['email'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../assets5/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets5/scss/bootstrap.min.css" rel="stylesheet">
  <title>Barang Sekolah</title>
  <style>
    .col-sm-2 ul li {
      list-style-type: none;
    }

    .col-sm-2 ul li a {
      width: 150px;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td {
      border: 1px solid #66B032;
      text-align: left;
      padding: 8px;
    }

    th {

      border: 1px solid #66B032;
      text-align: left;
      padding: 8px;
      background-color: #9BD770;
    }

    tr:nth-child(even) {
      background-color: #CDEBB7;
    }

    .menu {
      float: left;
      width: 20%;
    }

    .konten {
      float: right;
      width: 80%;
    }

    table a {
      text-decoration: none;
      color: green;
    }
  </style>
</head>


<body style="background-color: aliceblue;">
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info" style="margin-bottom:30px;">
    <div class="container-fluid">
      <a class="navbar-brand border border-light border-3 px-2">Barang Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-outline-light btn-lg" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col-sm-2 me-1">
      <ul>
        <li>
          <a class="btn btn-info mb-3" href="layoutAdmin.php?halaman=tableAdmin" role="button">Admin</a>
        </li>
        <li>
          <a class="btn btn-info mb-3" href="layoutAdmin.php?halaman=tableBarang" role="button">Barang</a>
        </li>
        <li>
          <a class="btn btn-info mb-3" href="layoutAdmin.php?halaman=tableKembali" role="button">Peminjaman</a>
        </li>
        <li>
          <a class="btn btn-info mb-3" href="layoutAdmin.php?halaman=tablePinjam" role="button">Pengembalian</a>
        </li>
      </ul>
    </div>

    <div class="konten">
      <form class="form-horizontal" method="post">
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-8">
            <input type="username" class="form-control" name="username" value="<?php echo $username; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="namalengkap" class="col-sm-2 control-label">Nama Lengkap</label>
          <div class="col-sm-8">
            <input type="namalengkap" class="form-control" name="nama" value="<?php echo $nama; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </form>
    </div>
    <!-- konten tabel-->
  </div>
  </div>
  <div class="col-md-1"></div>
  <script src="../assets5/js/bootstrap.bundle.min.js"></script>
</body>

</html>