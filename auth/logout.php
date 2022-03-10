<?php 
	require_once "../config/koneksi.php";

	unset($_SESSION['level']);
	unset($_SESSION['username']);
	unset($_SESSION['id_user']);
	unset($_SESSION['nama_user']);
	echo "<script>window.location='login.php';</script>";
?>