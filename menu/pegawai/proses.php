<?php include_once('../header.php');

if (isset($_POST['tambah'])) {

	$nik = trim(mysqli_real_escape_string($con, $_POST['nik']));
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama_pegawai']));
	$id_posisi = trim(mysqli_real_escape_string($con, $_POST['id_posisi']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$no_tlp = trim(mysqli_real_escape_string($con, $_POST['no_tlp']));
	$id_user = trim(mysqli_real_escape_string($con, $_SESSION['id_user']));

	//insert data
	$data = mysqli_query($con, "INSERT INTO tbl_pegawai (nik, nama_pegawai, id_posisi, alamat, no_tlp, id_user) 
								VALUES ('$nik','$nama','$id_posisi','$alamat','$no_tlp','$id_user')");
	if(!$data){
		die(mysqli_error($con));
	}
	echo "<script>alert('Pegawai Berhasil ditambahkan');window.location='data.php';</script>";

} elseif (isset($_POST['edit'])) {
	$no = trim(mysqli_real_escape_string($con, $_POST['no']));
	$nik = trim(mysqli_real_escape_string($con, $_POST['nik']));
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama_pegawai']));
	$id_posisi =  trim(mysqli_real_escape_string($con, $_POST['id_posisi']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$no_tlp = trim(mysqli_real_escape_string($con, $_POST['no_tlp']));
	$id_user = $_SESSION['id_user'];

	// update data
	$data = mysqli_query($con, "UPDATE tbl_pegawai set nik = '$nik', nama_pegawai ='$nama', id_posisi='$id_posisi', alamat = '$alamat', no_tlp = '$no_tlp', id_user = '$id_user' WHERE no = '$no'");
	if(!$data){
		die(mysqli_error($con));
	}
	echo "<script>alert('Pegawai Berhasil di ubah');window.location='data.php';</script>";
}

include_once('../header.php');?>