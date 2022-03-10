<?php
	date_default_timezone_set('Asia/Jakarta');
	session_start();
	$con = mysqli_connect("localhost", "root", "", "baros");
	if (mysqli_connect_errno()){
		echo mysqli_connect_error();
	} 

	function tgl_indo($tgl){
		$tanggal = substr($tgl, 8, 2);
		$bulan = substr($tgl, 5, 2);
		$tahun = substr($tgl, 0, 4);
		return $tanggal ." - ".$bulan." - ".$tahun;
	}
	
?>