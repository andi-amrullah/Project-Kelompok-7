<?php

include("koneksi.php");

if (isset($_POST['submit'])) {

	$no_induk = $_POST['no_induk'];
	$nama = $_POST['nama'];
	$no_telepon = $_POST['no_telepon'];
	$id_barang = $_POST['id_barang'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];
	$jenis_barang = $_POST['jenis_barang'];
	$jml_pinjam = $_POST['jml_pinjam'];


	$result = mysqli_query($mysqli, "INSERT INTO tb_pinjam(no_induk,nama,no_telepon,id_barang,tgl_pinjam,tgl_kembali,jenis_barang,jml_pinjam)
	VALUES('$no_induk','$nama','$no_telepon','$id_barang','$tgl_pinjam','$tgl_kembali','$jenis_barang','$jml_pinjam')");

	$getBarang = mysqli_query($mysqli, "SELECT stok_barang FROM tb_barang WHERE id_barang = $id_barang");


	while ($x = mysqli_fetch_array($getBarang)) {
		$stok_barang = $x['stok_barang'] - $jml_pinjam;

		$updateBarang = mysqli_query($mysqli, "UPDATE tb_barang SET stok_barang = '$stok_barang' WHERE id_barang = $id_barang");
	}

	//header("Location:bukti_peminjaman.php");
}
?>

<?php
// Display selected user data based on id
// Getting id from url
// Fetech user data based on id
include("koneksi.php");

$ambilId = $_GET['id_barang'];
$ambilData = mysqli_query($mysqli, "SELECT * FROM tb_barang WHERE id_barang = $ambilId");

while ($user_data = mysqli_fetch_array($ambilData)) {

	$jenis_barang = $user_data['jenis_barang'];
	$stok_barang = $user_data['stok_barang'];
	$gambar = $user_data['gambar'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../assets5/css/bootstrap.min.css" rel="stylesheet">
	<title>Form Peminjaman</title>
</head>

<body style="background-color: aliceblue;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 mt-4 shadow-lg p-3 mb-5 rounded bg-info" style="height: 840px;">
				<div class="bg-light shadow-lg p-3 mb-5 rounded">
					<h2 class="alert bg-info text-center mt-2 ">FORM PEMINJAMAN</h2>
					<form class="form-horizontal" method="post">
						<div class="form-group">
							<label for="id_barang" class="col-sm-6 control-label mt-2 ">ID Barang</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="id_barang" value="<?php echo $ambilId; ?>" placeholder="ID Barang" read only>
							</div>
						</div>

						<div class="form-group">
							<label for="jenis_barang" class="col-sm-6 control-label mt-3">Jenis Barang</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="jenis_barang" value="<?php echo $jenis_barang; ?>" placeholder="Jenis Barang" read only>
							</div>
						</div>

						<div class="form-group">
							<label for="no_induk" class="col-sm-6 control-label mt-3">No Induk</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="no_induk" placeholder="Masukkan No Induk">
							</div>
						</div>

						<div class="form-group">
							<label for="nama" class="col-sm-6 control-label mt-3">Nama</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
							</div>
						</div>

						<div class="form-group">
							<label for="no_telepon" class="col-sm-6 control-label mt-3">No Telepon</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="no_telepon" placeholder="Masukkan No Telepon">
							</div>
						</div>

						<div class="form-group">
							<label for="tgl_pinjam" class="col-sm-6 control-label mt-3">Tanggal Pinjam</label>
							<div class="col-md-12">
								<input type="date" class="form-control" name="tgl_pinjam" placeholder="Masukkan Tanggal Meminjam">
							</div>
						</div>

						<div class="form-group">
							<label for="tgl_kembali" class="col-sm-6 control-label mt-3">Tanggal Kembali</label>
							<div class="col-md-12">
								<input type="date" class="form-control" name="tgl_kembali" placeholder="Masukkan Tanggal Mengembalikan">
							</div>
						</div>

						<div class="form-group">
							<label for="jml_pinjam" class="col-sm-6 control-label mt-3">Jumlah Pinjam</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="jml_pinjam" placeholder="Masukkan Jumlah Barang yang Dipinjam">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-5 mt-2 mx-auto">
								<button type="submit" name="submit" class="btn btn-outline-info" value="" style="margin-top:10px; width:210px;">Tambahkan</button>
							</div>
						</div>
					</form>
					</table>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

	<script src="../assets5/js/jquery-3.5.1.min.js"></script>
	<script src="../assets5/js/bootstrap.bundle.min.js"></script>
</body>

</html>