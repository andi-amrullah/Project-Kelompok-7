<?php 	
if (@$_GET['halaman']=='tableAdmin') {
	include "tableAdmin.php";
}
else if (@$_GET['halaman']=='tambahAdmin') {	
	include	"tambahAdmin.php";
}
else if (@$_GET['halaman']=='ubahAdmin') {	
	include	"ubahAdmin.php";
}
else if (@$_GET['halaman']=='deleteAdmin') {	
	include	"deleteAdmin.php";
}
else if (@$_GET['halaman']=='tableBarang') {	
	include	"tableBarang.php";
}
else if (@$_GET['halaman']=='tambahBarang') {	
	include	"tambahBarang.php";
}
else if (@$_GET['halaman']=='ubahBarang') {	
	include	"ubahBarang.php";
}
else if (@$_GET['halaman']=='deleteBarang') {	
	include	"deleteBarang.php";
}
else if (@$_GET['halaman']=='tablePinjam') {	
	include	"tablePinjam.php";
}
else if (@$_GET['halaman']=='ubahPinjam') {	
	include	"ubahPinjam.php";
}
else if (@$_GET['halaman']=='deletePinjam') {	
	include	"deletePinjam.php";
}
else if (@$_GET['halaman']=='tableKembali') {	
	include	"tableKembali.php";
}
else if (@$_GET['halaman']=='ubahKembali') {	
	include	"ubahKembali.php";
}
else if (@$_GET['halaman']=='deleteKembali') {	
	include	"deleteKembali.php";
}
