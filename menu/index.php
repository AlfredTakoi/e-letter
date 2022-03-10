<?php
	require_once "../config/koneksi.php";
	
	if(isset($_SESSION['level'])){
	    echo "<script>window.location='dashboard';</script>";
	}else{
		echo "<script>window.location='../error.php'</script>";
	}
?>