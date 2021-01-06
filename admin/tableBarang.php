<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_barang ORDER BY id_barang ASC");
?>
<!--table-->
<a class="btn btn-success" href="?halaman=tambahBarang" role="button" style="margin-bottom:10px;">+ Data</a>
<table>
	<tr>
		<th>ID Barang</th>
		<th>Jenis Barang</th>
		<th>Stok Barang</th>
		<th>Status Barang</th>
		<th>Gambar</th>
		<th style="width:160px;">Action</th>

	<tr>
		<?php
		while ($user_data = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $user_data['id_barang'] . "</td>";
			echo "<td>" . $user_data['jenis_barang'] . "</td>";
			echo "<td>" . $user_data['stok_barang'] . "</td>";
			echo "<td>"; ?>
			<?php

			if ($user_data['stok_barang'] == "0") {
				echo "Barang Kosong";
			} elseif ($user_data['stok_barang'] == TRUE) {
				echo "Barang Tersedia";
			}
			?>

		<?php
			"</td>";
			echo "<td>" . $user_data['gambar'] . "</td>";
			echo "<td>
		        <a class='btn btn-warning' href='ubahBarang.php?id=$user_data[id_barang]' role='button'>Ubah</a> 
		        <a class='btn btn-danger' href='deleteBarang.php?id=$user_data[id_barang]' role='button'>Hapus</a>
		        </td>
		        </tr>";
		}
		?>
	</tr>
</table>
<!--TABLE-->