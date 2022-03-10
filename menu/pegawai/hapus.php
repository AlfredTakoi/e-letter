<?php include_once('../header.php');

	$no = $_GET['no'];
	mysqli_query($con, "DELETE FROM tbl_pegawai WHERE no ='$no'");
	echo "<script>alert('Data Pegawai Berhasil Dihapus'); window.location='data.php';</script>";

include_once('../footer.php'); ?>