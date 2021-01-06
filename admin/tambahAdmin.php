<?php
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $nama = $_POST['nama'];
	 $email = $_POST['email'];

	 
	 // include database connection file
	 include_once("koneksi.php");
			 
	 // Insert user data into table
	 $result = mysqli_query($mysqli, "INSERT INTO tb_admin(username,password,nama,email) VALUES('$username','$password','$nama', '$email')");
	 
	 // Show message when user added
	 echo "Admin berhasil ditambahkan. <a href='?halaman=tableAdmin'>View Admin</a>";
	 echo "</br>";
	 echo "</br>";
 }
 ?>		
		<form class="form-horizontal" method="post">
		  
		  <div class="form-group">
			<label for="userName" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-8">
			  <input type="username" class="form-control" name="username" placeholder="Masukkan Username">
			</div>
		  </div>	  
		  <div class="form-group">
			<label for="password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-8">
			  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
			</div>
		  </div>	  
		  <div class="form-group">
			<label for="namalengkap" class="col-sm-2 control-label">Nama Lengkap</label>
			<div class="col-sm-8">
			  <input type="namalengkap" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
			</div>
		  </div>
		  <div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-8">
			  <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-6">
			 <button type="submit" name="Submit" class="btn btn-success" style="margin-top:10px;">Tambahkan</button>
			</div>
		  </div>
		</form>
		
