<?php include_once('../header.php');

	$id_user = $_GET['id_user'];
	mysqli_query($con, "DELETE FROM tbl_user WHERE id_user ='$id_user'");
	echo "<script>alert('Data User Berhasil Dihapus'); window.location='data.php';</script>";

include_once('../footer.php'); ?>