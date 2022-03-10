<?php include_once('../header.php'); 

if (isset($_POST['tambah'])) {
	
	$no = trim(mysqli_real_escape_string($con, $_POST['no_surat']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal_surat']));
	$sifat = trim(mysqli_real_escape_string($con, $_POST['sifat']));
	$pengirim = trim(mysqli_real_escape_string($con, $_POST['pengirim']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$isi_surat = trim(mysqli_real_escape_string($con, $_POST['isi_surat']));
	$status_disposisi = trim(mysqli_real_escape_string($con, $_POST['status_disposisi']));
	$lampiran = trim(mysqli_real_escape_string($con, $_POST['lampiran']));
	$id_user = $_SESSION['id_user'];

	//insert data
	mysqli_query($con,"INSERT INTO tbl_surat_masuk VALUES('','$no','$tanggal','$sifat','$pengirim','$perihal','$isi_surat','$status_disposisi','$lampiran','$id_user')");
	echo "<script>alert('Surat Masuk Berhasil ditambahkan');window.location='data.php';</script>";

} elseif (isset($_POST['edit'])){
	$id = trim(mysqli_real_escape_string($con, $_POST['id']));
	$no = trim(mysqli_real_escape_string($con, $_POST['no_surat']));
	$tanggal = trim(mysqli_real_escape_string($con, $_POST['tanggal_surat']));
	$sifat = trim(mysqli_real_escape_string($con, $_POST['sifat']));
	$pengirim = trim(mysqli_real_escape_string($con, $_POST['pengirim']));
	$perihal = trim(mysqli_real_escape_string($con, $_POST['perihal']));
	$isi_surat = trim(mysqli_real_escape_string($con, $_POST['isi_surat']));
	$status_disposisi = trim(mysqli_real_escape_string($con, $_POST['status_disposisi']));
	$lampiran = trim(mysqli_real_escape_string($con, $_POST['lampiran']));
	$id_user = $_SESSION['id_user'];
	$data = mysqli_query($con, "UPDATE tbl_surat_masuk set no_surat ='$no', tanggal_surat='$tanggal', sifat = '$sifat', pengirim = '$pengirim', perihal = '$perihal', isi_surat_ringkas = '$isi_surat', status_disposisi = '$status_disposisi', lampiran = '$lampiran', id_user = '$id_user' WHERE id = '$id'");
	echo "<script>alert('Surat Masuk Berhasil di ubah');window.location='data.php';</script>";
}

include_once('../footer.php'); ?>