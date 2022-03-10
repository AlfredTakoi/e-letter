<?php include_once('../header.php');

	$id = $_GET['id'];
	mysqli_query($con, "DELETE FROM tbl_surat_masuk WHERE id ='$id'");
	echo "<script>alert('Data Surat Masuk Berhasil Dihapus'); window.location='data.php';</script>";

include_once('../footer.php'); ?>