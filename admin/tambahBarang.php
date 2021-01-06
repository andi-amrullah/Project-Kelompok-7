<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {

	$jenisBarang = $_POST['jenisBarang'];
	$stokBarang = $_POST['stokBarang'];
	$statusBarang = $_POST['statusBarang'];
	$gambarBarang = $_POST['gambarBarang'];


	// include database connection file
	include_once("koneksi.php");

	// Insert user data into table
	$result = mysqli_query($mysqli, "INSERT INTO tb_barang(jenis_barang,stok_barang,status_barang,gambar) VALUES('$jenisBarang'
	,'$stokBarang', '$statusBarang', '$gambarBarang')");

	// Show message when user added
	echo "Barang berhasil ditambahkan. <a href='?halaman=tableBarang'>View Data Barang</a>";
	echo "</br>";
	echo "</br>";
}
?>
<form class="form-horizontal" method="post">

	<div class="form-group">
		<label for="jenisBarang" class="col-sm-2 control-label">Jenis Barang</label>
		<div class="col-sm-8">
			<input type="jenisBarang" class="form-control" name="jenisBarang" placeholder="Masukkan Jenis Barang">
		</div>
	</div>

	<div class="form-group">
		<label for="stokBarang" class="col-sm-2 control-label mt-3">Stok Barang</label>
		<div class="col-sm-8">
			<input type="stockBarang" class="form-control" name="stokBarang" placeholder="Masukkan Nama Lengkap">
		</div>
	</div>
	<div class="form-group">
		<label for="statusBarang" class="col-sm-2 control-label mt-3">Status Barang</label>
		<div class="col-sm-8">
			<input type="statusBarang" class="form-control" name="statusBarang" placeholder="Masukkan Stok Barang">
		</div>
	</div>
	<div class="form-group">
		<label for="gambarBarang" class="col-sm-2 control-label mt-3">Gambar</label>
		<div class="col-sm-8">
			<input type="file" class="form-control" name="gambarBarang" placeholder="Masukkan Gambar">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-6 mt-2 ms-auto">
			<button type="submit" name="Submit" class="btn btn-success" style="margin-top:10px; width:150px;">Tambahkan</button>
		</div>
	</div>
</form>