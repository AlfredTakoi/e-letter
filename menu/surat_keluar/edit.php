<?php include_once('../header.php');?>

<div class="box">
	<div class="pull-right">
		<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
	</div>
	<h1>Surat Keluar</h1>
</div>
<?php 
	$id = @$_GET['id'];
	$sql= mysqli_query($con,"SELECT * FROM tbl_surat_keluar INNER JOIN tbl_posisi ON tbl_surat_keluar.pengirim = tbl_posisi.id_posisi  where  id='$id'") or die(mysqli_error($con));
	$row = mysqli_fetch_array($sql);
 ?>
<div class="panel panel-default">
  <div class="panel-heading">Edit Data Surat Keluar</div>
	  <div class="panel-body">
	  		<div class="box">
				<div class="row">
					<form method="POST" action="proses.php">
						<div class="form-group col-md-6">
							<label for="InputNo">No. Surat</label>
							<input type="hidden" name="id" value="<?php echo $row['id']?>">
							<input type="text" class="form-control" required="required" autofocus id="InputNo" name="no_surat" placeholder="No. Surat" value="<?php echo $row['no_surat']?>">
							<span class="help-block"></span>
						</div>
						<div class="form-group col-md-6">
							<label for="InputTanggal">Tanggal Surat</label>
							<input type="date" class="form-control" required="required" id="InputTanggal" name="tanggal_surat" placeholder="Tanggal Surat" value="<?php echo $row['tanggal_surat']?>">
							<span class="help-block"></span>
						</div>
						<div class="form-group col-md-6">
							<label for="InputTanggal">Sifat Surat</label><br>
							<label class="radio-inline">
						     	<input type="radio" name="sifat" value="Segera"<?php if($row['sifat'] == 'Segera') echo 'checked' ?>>Segera
						    </label>
						    <label class="radio-inline">
						      	<input type="radio" name="sifat" value="Penting"<?php if($row['sifat'] == 'Penting') echo 'checked' ?>>Penting
						    </label>
						    <label class="radio-inline">
						      	<input type="radio" name="sifat" value="Rahasia"<?php if($row['sifat'] == 'Rahasia') echo 'checked' ?>>Rahasia
						    </label>
						    <label class="radio-inline">
						      	<input type="radio" name="sifat" value="Biasa" <?php if($row['sifat'] == 'Biasa')echo 'checked' ?>>Biasa
						    </label>
						</div>
						<div class="form-group col-md-6">
							<label for="InputPosisi">Pengirim</label>
							<select class="form-control" required id="InputPosisi" name="pengirim">
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
						<div class="form-group col-md-6">
							<label for="InputPerihal">Perihal</label>
							<input type="text" class="form-control" required="required" id="InputPerihal" name="perihal" placeholder="Masukkan Perihal" value="<?php echo $row['perihal']; ?>">
							<span class="help-block"></span>
						</div>
						<div class="form-group col-md-6">
							<label for="InputPerihal">Tertuju Kepada</label>
							<input type="text" class="form-control" required="required" id="InputPerihal" name="tertuju" placeholder="Masukkan Tertuju Kepada" value="<?php echo $row['tertuju']; ?>">
							<span class="help-block"></span>
						</div>
						<div class="form-group col-md-12">
							<label for="InputIsi">Alamat</label>
							<textarea type="text" class="form-control" required="required" id="InputIsi" name="alamat" placeholder="Masukkan Isi Alamat"><?php echo $row['alamat']; ?></textarea>
							<span class="help-block"></span>
						</div>
						<div class="form-group col-md-12">
							<label for="InputIsi">Isi Surat Ringkas</label>
							<textarea type="text" class="form-control" required="required" id="InputIsi" name="isi_surat" placeholder="Isi Surat Ringkas"><?php echo $row['isi_surat_ringkas']?></textarea>
							<span class="help-block"></span>
						</div>
						<div class="form-group col-md-12">
							<label for="InputBagian">Lampiran</label>
							<input type="text" class="form-control" required="required" id="InputLampiran" name="lampiran" placeholder="Lampiran" value="<?php echo $row['lampiran']?>">
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
</div>

<?php include_once('../footer.php');?>