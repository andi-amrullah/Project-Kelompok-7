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
      box-shadow: 10px 10px 5px grey;
    }

    td {
      border: 1px solid blue;
      text-align: left;
      padding: 8px;
    }

    th {

      border: 1px solid blue;
      text-align: left;
      padding: 8px;
      color: white;
      background-color: #0072B5;
    }

    tr:nth-child(even) {
      background-color: #99d6ff;
      color: white;
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
          <a class="btn btn-info mb-3" href="?halaman=tableAdmin" role="button">Admin</a>
        </li>
        <li>
          <a class="btn btn-info mb-3" href="?halaman=tableBarang" role="button">Barang</a>
        </li>
        <li>
          <a class="btn btn-info mb-3" href="?halaman=tablePinjam" role="button">Peminjaman</a>
        </li>
        <li>
          <a class="btn btn-info mb-3" href="?halaman=tableKembali" role="button">Pengembalian</a>
        </li>
      </ul>
    </div>

    <div class="col-sm-9">
      <?php include "content.php" ?>
    </div>
  </div>
  <script src="../assets5/js/bootstrap.bundle.min.js"></script>
</body>

</html>