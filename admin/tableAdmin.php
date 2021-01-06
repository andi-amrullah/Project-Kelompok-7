<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_admin ORDER BY username ASC");
?>
<!-- cek apakah sudah login -->
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:index.php?pesan=belum_login");
}
?>
<!--table-->
		<a class="btn btn-success" href="?halaman=tambahAdmin" role="button" style="margin-bottom:10px;">+ Data</a>
		<table>
		  <tr>
		    <th>Nama</th>
		    <th>Username</th>
		    <th>Password</th>
		    <th>Email</th>
		    <th style="width:160px;">Action</th>

		 <tr>
			<?php
				while($user_data = mysqli_fetch_array($result)) {         
		        echo "<tr>";
				echo "<td>".$user_data['nama']."</td>";
		        echo "<td>".$user_data['username']."</td>";
		        echo "<td>".$user_data['password']."</td>";
		        echo "<td>".$user_data['email']."</td>";
		        echo "<td>
		        <a class='btn btn-warning' href='ubahAdmin.php?id=$user_data[id_admin]' role='button'>Ubah</a> 
		        <a class='btn btn-danger' href='deleteAdmin.php?id=$user_data[id_admin]' role='button'>Hapus</a>
		        </td>
		        </tr>";         
		    }
		    ?>
		</tr>
		</table>
<!--TABLE-->