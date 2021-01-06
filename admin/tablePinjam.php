<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_pinjam ORDER BY id_pinjam ASC");
?>
<!--table-->
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
		<th style="width:160px;">Action</th>


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
		        <a class='btn btn-warning' href='ubahPinjam.php?id=$user_data[id_pinjam]' role='button'>Ubah</a> 
		        <a class='btn btn-danger' href='deletePinjam.php?id=$user_data[id_pinjam]' role='button'>Hapus</a>
		        </td>
		        </tr>";
		}
		?>
	</tr>
</table>
<!--TABLE-->