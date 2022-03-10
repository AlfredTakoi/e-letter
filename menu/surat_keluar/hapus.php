<?php include_once('../header.php');

	$id = $_GET['id'];
	mysqli_query($con, "DELETE FROM tbl_surat_keluar WHERE id ='$id'");
	echo "<script>alert('Data Surat Keluar Berhasil Dihapus'); window.location='data.php';</script>";

include_once('../footer.php'); ?>