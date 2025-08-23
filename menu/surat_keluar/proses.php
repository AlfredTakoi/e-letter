<?php include_once('../header.php'); 

if (isset($_POST['tambah'])) {
	
	$no = trim(mysqli_real_escape_string($con, $_POST['no_surat']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal_surat']));
	$sifat = trim(mysqli_real_escape_string($con, $_POST['sifat']));
	$pengirim = trim(mysqli_real_escape_string($con, $_POST['pengirim']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$tertuju = trim(mysqli_real_escape_string($con, $_POST['tertuju']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$isi_surat = trim(mysqli_real_escape_string($con, $_POST['isi_surat']));
	$lampiran = trim(mysqli_real_escape_string($con, $_POST['lampiran']));
	$id_user = $_SESSION['id_user'];

	//insert data
	$data = mysqli_query($con,"INSERT INTO tbl_surat_keluar VALUES('','$no','$tanggal','$sifat','$pengirim','$perihal','$tertuju','$alamat','$isi_surat','$lampiran','$id_user')");
	if(!$data){
		die(mysqli_error($con));
	}
	echo "<script>alert('Surat Keluar Berhasil ditambahkan');window.location='data.php';</script>";

} elseif (isset($_POST['edit'])){
	$id = trim(mysqli_real_escape_string($con, $_POST['id']));
	$no = trim(mysqli_real_escape_string($con, $_POST['no_surat']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal_surat']));
	$sifat = trim(mysqli_real_escape_string($con, $_POST['sifat']));
	$pengirim = trim(mysqli_real_escape_string($con, $_POST['pengirim']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$tertuju = trim(mysqli_real_escape_string($con, $_POST['tertuju']));
	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$isi_surat = trim(mysqli_real_escape_string($con, $_POST['isi_surat']));
	$lampiran = trim(mysqli_real_escape_string($con, $_POST['lampiran']));
	$id_user = $_SESSION['id_user'];

	// update data
	$data = mysqli_query($con, "UPDATE tbl_surat_keluar set no_surat ='$no', tanggal_surat='$tanggal', sifat = '$sifat', pengirim = '$pengirim', perihal = '$perihal', tertuju = '$tertuju', alamat = '$alamat', isi_surat_ringkas = '$isi_surat', lampiran = '$lampiran', id_user = '$id_user' WHERE id = '$id'");
	if(!$data){
		die(mysqli_error($con));
	}
	echo "<script>alert('Surat Keluar Berhasil di ubah');window.location='data.php';</script>";
}

include_once('../footer.php'); ?>