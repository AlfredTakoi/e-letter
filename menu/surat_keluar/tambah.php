<?php include_once('../header.php');?>

<div class="box">
	<div class="pull-right">
		<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
	</div>
	<h1>Surat Keluar</h1>
</div>
<div class="panel panel-default">
  <div class="panel-heading">Tambah Data Surat Keluar</div>
	  <div class="panel-body">
	  	<div class="box">
			<div class="row">	
				<form method="POST" action="proses.php">
					<div class="form-group col-md-6">
						<label for="InputNo">No. Surat</label>
						<input type="text" class="form-control" required="required" autofocus id="InputNo" name="no_surat" placeholder="Masukkan No. Surat">
						<span class="help-block"></span>
					</div>
					<div class="form-group col-md-6">
						<label for="InputTanggal">Tanggal Surat</label>
						<input type="date" class="form-control" required="required" id="InputTanggal" name="tanggal_surat" placeholder="Masukkan Tanggal Surat">
						<span class="help-block"></span>
					</div>
					<div class="form-group col-md-6">
						<label for="InputTanggal">Sifat Surat</label><br>
						<label class="radio-inline">
					     	<input type="radio" name="sifat" value="Segera">Segera
					    </label>
					    <label class="radio-inline">
					      	<input type="radio" name="sifat" value="Penting">Penting
					    </label>
					    <label class="radio-inline">
					      	<input type="radio" name="sifat" value="Rahasia">Rahasia
					    </label>
					    <label class="radio-inline">
					      	<input type="radio" name="sifat" value="Biasa">Biasa
					    </label>
					</div>
					<div class="form-group col-md-6">
						<label for="InputPosisi">Posisi</label>
						<select class="form-control" required id="InputPosisi" name="pengirim">
							<option selected>-Silahkan Pilih-</option>
							<?php 
								$sql_posisi = mysqli_query($con, "SELECT * FROM tbl_posisi") or die(mysqli_error($con));
								while($data_posisi = mysqli_fetch_array($sql_posisi)){
									echo '<option value="'.$data_posisi['id_posisi'].'">'.$data_posisi['posisi'].'</option>';
								} 
							?>
						</select>
						<span class="help-block"></span>
					</div>
					<div class="form-group col-md-6">
						<label for="InputPerihal">Perihal</label>
						<input type="text" class="form-control" required="required" id="InputPerihal" name="perihal" placeholder="Masukkan Perihal">
						<span class="help-block"></span>
					</div>
					<div class="form-group col-md-6">
						<label for="InputPerihal">Tertuju Kepada</label>
						<input type="text" class="form-control" required="required" id="InputPerihal" name="tertuju" placeholder="Masukkan Tertuju Kepada">
						<span class="help-block"></span>
					</div>
					<div class="form-group col-md-12">
						<label for="InputIsi">Alamat</label>
						<textarea type="text" class="form-control" required="required" id="InputIsi" name="alamat" placeholder="Masukkan Isi Alamat"></textarea>
						<span class="help-block"></span>
					</div>
					<div class="form-group col-md-12">
						<label for="InputIsi">Isi Surat Ringkas</label>
						<textarea type="text" class="form-control" required="required" id="InputIsi" name="isi_surat" placeholder="Masukkan Isi Surat Ringkas"></textarea>
						<span class="help-block"></span>
					</div>
					<div class="form-group col-md-12">
						<label for="InputBagian">Lampiran</label>
						<input type="text" class="form-control" required="required" id="InputLampiran" name="lampiran" placeholder="Masukkan Lampiran">
						<span class="help-block"></span>
					</div>
					<div class="form-actions col-md-12">
						<button type="submit" class="btn btn-success" name="tambah"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
						<button type="Reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reset</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
</div>

<?php include_once('../footer.php'); ?>