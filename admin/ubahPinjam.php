<?php
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['simpan'])) {
  $id = $_POST['id'];

  $no_induk = $_POST['no_induk'];
  $nama  = $_POST['nama'];
  $no_telepon = $_POST['no_telepon'];
  $id_barang = $_POST['id_barang'];
  $tgl_pinjam = $_POST['tgl_pinjam'];
  $tgl_kembali = $_POST['tgl_kembali'];
  $jenis_barang = $_POST['jenis_barang'];
  $jml_pinjam = $_POST['jml_pinjam'];

  // update user data
  $result = mysqli_query($mysqli, "UPDATE tb_pinjam SET no_induk ='$no_induk', nama ='$nama', no_telepon ='$no_telepon',
                          id_barang ='$id_barang', tgl_pinjam ='$tgl_pinjam', tgl_kembali = '$tgl_kembali', 
                          jenis_barang = '$jenis_barang', jml_pinjam = '$jml_pinjam' WHERE id_pinjam = $id");

  // Redirect to homepage to display updated user in list
  header("Location:layoutAdmin.php?halaman=tablePinjam");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_pinjam WHERE id_pinjam = $id");

while ($user_data = mysqli_fetch_array($result)) {
  $no_induk = $user_data['no_induk'];
  $nama = $user_data['nama'];
  $no_telepon = $user_data['no_telepon'];
  $id_barang = $user_data['id_barang'];
  $tgl_pinjam = $user_data['tgl_pinjam'];
  $tgl_kembali = $user_data['tgl_kembali'];
  $jenis_barang = $user_data['jenis_barang'];
  $jml_pinjam = $user_data['jml_pinjam'];
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
    <!-- konten tabel-->
    <div class="konten">
      <form class="form-horizontal" method="post">
        <div class="form-group">
          <label for="id" class="col-sm-2 control-label">ID Pinjam</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="no_induk" class="col-sm-2 control-label mt-3">No.Induk</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="no_induk" value="<?php echo $no_induk; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label mt-3">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="no_telepon" class="col-sm-2 control-label mt-3">Telepon</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="no_telepon" value="<?php echo $no_telepon; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="id_barang" class="col-sm-2 control-label mt-3">ID Barang</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="id_barang" value="<?php echo $id_barang; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="tgl_pinjam" class="col-sm-2 control-label mt-3">Tgl Pinjam</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="tgl_pinjam" value="<?php echo $tgl_pinjam; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="tgl_kembali" class="col-sm-2 control-label mt-3">Tgl Kembali</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="tgl_kembali" value="<?php echo $tgl_kembali; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="jenis_barang" class="col-sm-2 control-label mt-3">Jenis Barang</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="jenis_barang" value="<?php echo $jenis_barang; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="jml_pinjam" class="col-sm-2 control-label mt-3">Jumlah Pinjam</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="jml_pinjam" value="<?php echo $jml_pinjam; ?>">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8 mt-2">
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