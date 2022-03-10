<?php include_once('../header.php');?>

<div class="box">
	<div class="pull-right">
		<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
	</div>
	<h1>Surat Masuk</h1>
</div>
<?php 
	$id = @$_GET['id'];
	$sql= mysqli_query($con,"SELECT * FROM tbl_surat_masuk where  id='$id'") or die(mysqli_error($con));
	$row = mysqli_fetch_array($sql);
 ?>
<div class="panel panel-default">
  <div class="panel-heading">Lihat Data Surat Masuk</div>
	  <div class="panel-body">
	  		<div class="box" style="margin-left: 170px;">
				<div class="form-group col-md-6">
					<label>No Surat</label> <p><?php echo $row['no_surat']; ?></p>
				</div>
				<div class="form-group col-md-6">
					<label>Tanggal Surat</label> <p><?php echo tgl_indo($row['tanggal_surat']); ?></p>
				</div>
				<div class="form-group col-md-6">
					<label>Pengirim</label> <p><?php echo $row['pengirim']; ?></p>
				</div>
				<div class="form-group col-md-6">
					<label>Sifat Surat</label> <p><?php echo $row['sifat']; ?></p>
				</div>
				<div class="form-group col-md-6">
					<label>Perihal</label> <p><?php echo $row['perihal']; ?></p>
				</div>
				<div class="form-group col-md-6">
					<label>Status Disposisi</label> <p><?php echo $row['status_disposisi']; ?></p>
				</div>
				<div class="form-group col-md-6">
					<label>Isi Surat Ringkas</label> <p><?php echo $row['isi_surat_ringkas']; ?></p>
				</div>
				<div class="form-group col-md-6">
					<label>Lampiran</label> <p><?php echo $row['lampiran']; ?></p>
				</div>
		 	</div>
	  </div>
</div>

<?php include_once('../footer.php');?>