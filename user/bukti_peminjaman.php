<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_pinjam ORDER BY id_pinjam ASC");
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets5/css/bootstrap.min.css" rel="stylesheet">

    <title> Bukti Peminjaman</title>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h2 class="text-center"> Daftar Peminjaman </h2>
                <table class="mt-3">
                    <tr>
                        <th>ID Pinjam</th>
                        <th>No.Induk</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>ID Barang</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah Pinjam</th>
                        <th>Action</th>


                    <tr>
                        <?php
                        while ($user_data = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $user_data['id_pinjam'] . "</td>";
                            echo "<td>" . $user_data['no_induk'] . "</td>";
                            echo "<td>" . $user_data['nama'] . "</td>";
                            echo "<td>" . $user_data['no_telepon'] . "</td>";
                            echo "<td>" . $user_data['id_barang'] . "</td>";
                            echo "<td>" . $user_data['tgl_pinjam'] . "</td>";
                            echo "<td>" . $user_data['tgl_kembali'] . "</td>";
                            echo "<td>" . $user_data['jenis_barang'] . "</td>";
                            echo "<td>" . $user_data['jml_pinjam'] . "</td>";
                            echo "<td>
                                    <a class='btn btn-warning' href='cetakPinjam.php?id=$user_data[id_pinjam]' role='button'>Cetak</a> 
                                </td>
                                </tr>";
                        }
                        ?>
                    </tr>
                </table>

                <h4 class="mt-3"><i> *Cetak Data Peminjaman sebagai Bukti Pengembalian.</i></h4>
            </div>
            <div class="col-sm-1"></div>
            < </div>
        </div>

        <script src="../assets5/js/jquery-3.5.1.min.js"></script>
        <script src="../assets5/js/bootstrap.bundle.min.js"></script>
</body>

</html>