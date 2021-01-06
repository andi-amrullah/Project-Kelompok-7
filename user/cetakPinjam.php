<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets5/css/bootstrap.min.css" rel="stylesheet">

    <title> Bukti Peminjaman </title>

</head>

<body style="background-color: aliceblue;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 mt-5 pb-5" style="background-color: #dfcfbe; box-shadow: 10px 10px 5px grey">
                <h2 class="text-center mt-5"> Daftar Peminjaman </h2>
                <?php
                include("koneksi.php");
                $id = $_GET['id'];
                $result = mysqli_query($mysqli, "SELECT * FROM tb_pinjam WHERE id_pinjam = $id");
                while ($row = mysqli_fetch_array($result)) {
                    echo "<table class='mx-auto'>";
                    echo "<tr>";
                    echo "<td><b>ID Pinjam : " . $row['id_pinjam'] . "</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b><br>No Induk : " . $row['no_induk'] . "</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b><br>Nama : " . $row['nama'] . "</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b><br>Telepon : " . $row['no_telepon'] . "</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b><br>ID Barang : " . $row['id_barang'] . "</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b><br>Tanggal Pinjam : " . $row['tgl_pinjam'] . "</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b><br>Tanggal Kembali : " . $row['tgl_kembali'] . "</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b><br>Jenis Barang : " . $row['jenis_barang'] . "</b></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b><br>Jumlah Pinjam : " . $row['jml_pinjam'] . "</b></td>";
                    echo "</tr>";
                    echo "</table>";
                }
                ?>
            </div>
            <div class="col-sm-4"></div>
            < </div>
        </div>

        <script src="../assets5/js/jquery-3.5.1.min.js"></script>
        <script src="../assets5/js/bootstrap.bundle.min.js"></script>
</body>

</html>