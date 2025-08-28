<?php 
	include "../../config/koneksi.php";	
	if (isset($_POST['ganti'])){
		$nama_user = $_POST['nama_user'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$data = mysqli_query($con, "UPDATE tbl_user set nama_user ='$nama_user', username ='$username', pass = '$pass', password = sha1('$pass') WHERE username = '$username'");
		echo "<script>alert('User Berhasil Di Update');window.location='../dashboard/index.php';</script>";
	} elseif (isset($_POST['simpan'])) {
		$nama_user = $_POST['nama_user'];
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$pass = $_POST['pass'];
		$level = $_POST['level'];
		$data = mysqli_query($con, "INSERT INTO tbl_user VALUES('', '$nama_user','$username','$password','$pass','$level')");
		echo "<script>alert('Data User Berhasil Ditambahkan'); window.location='data.php';</script>";
	} elseif (isset($_POST['edit'])){
		$id_user = $_POST['id_user'];
		$nama_user = $_POST['nama_user'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$level = $_POST['level'];
		$data = mysqli_query($con, "UPDATE tbl_user set nama_user ='$nama_user', username ='$username', pass = '$pass', password = sha1('$pass'), level = '$level' WHERE id_user = '$id_user'");
		echo "<script>alert('Data User Berhasil Di Update');window.location='data.php';</script>";
	}
?>