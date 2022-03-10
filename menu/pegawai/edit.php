<?php include_once('../header.php');?>

<div class="box">
	<div class="pull-right">
		<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
	</div>
	<h1>Pegawai</h1><br>
</div>
<?php 
	$no = @$_GET['no'];
	$sql= mysqli_query($con,"SELECT * FROM tbl_pegawai INNER JOIN tbl_posisi ON tbl_pegawai.id_posisi = tbl_posisi.id_posisi where no='$no'") or die(mysqli_error($con));
	$row = mysqli_fetch_array($sql);
 ?>
<div class="panel panel-default">
  <div class="panel-heading">Edit Data Pegawai</div>
  <div class="panel-body">
  	<div class="row">
		<form method="POST" action="proses.php">
			<div class="form-group col-md-12">
				<label for="InputNo">NIK</label>
				<input type="number" class="form-control" required="required" autofocus id="InputNo" name="nik" placeholder="Masukkan NIK" value="<?php echo $row['nik']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-12">
				<label for="InputNama">Nama Pegawai</label>
				<input type="hidden" name="no" value="<?php echo $row['no']?>">
				<input type="text" class="form-control" autofocus required="required" id="InputNama" name="nama" placeholder="Nama Pegawai" value="<?php echo $row['nama_pegawai']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-12">
				<label for="InputPosisi">Posisi</label>
				<select class="form-control" required id="InputPosisi" name="id_posisi">
					<option selected>-Silahkan Pilih-</option>
					<?php 
						$sql_posisi = mysqli_query($con, "SELECT * FROM tbl_posisi") or die(mysqli_error($con));
						while($data_posisi = mysqli_fetch_array($sql_posisi)){
							if($row['id_posisi'] == $data_posisi['id_posisi']){
								$select = "selected";
							}
							else{
								$select = "";
							}
							echo '<option '.$select.' value="'.$data_posisi['id_posisi'].'">'.$data_posisi['posisi'].'</option>';
						}
						?>
					 ?>
				</select>
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-12">
				<label for="InputAlamat">Alamat</label>
				<textarea type="text" class="form-control" required="required" id="InputAlamat" name="alamat" placeholder="Alamat"><?php echo $row['alamat']?></textarea>
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-12">
				<label for="InputNo">No. Tlp</label>
				<input type="number" class="form-control" required="required" id="InputNo" name="no_tlp" placeholder="No. Tlp" value="<?php echo $row['no_tlp']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-actions col-md-12">
				<button type="submit" class="btn btn-success" name="edit"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
				<button type="Reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reset</button>
			</div>
		</form>
	</div>
  </div>
</div>

<?php include_once('../footer.php');?>