<?php include_once('../header.php');?>

<div class="box">
	<div class="pull-right">
		<a href="data.php" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
	</div>
	<h1>Pegawai</h1>
	
</div>
<div class="panel panel-default">
  <div class="panel-heading">Tambah Data Pegawai</div>
	 <div class="panel-body">
	  	<div class="row">
			<form method="POST" action="proses.php">
				<div class="form-group col-md-12">
					<label for="InputNo">NIK</label>
					<input type="number" class="form-control" required="required" id="InputNo" name="nik" placeholder="Masukkan NIK" autofocus>
					<span class="help-block"></span>
				</div>
				<div class="form-group col-md-12">
					<label for="InputNama">Nama Pegawai</label>
					<input type="text" class="form-control" autofocus required="required" id="InputNama" name="nama_pegawai" placeholder="Masukkan Nama Pegawai">
					<span class="help-block"></span>
				</div>
				<div class="form-group col-md-12">
					<label for="InputPosisi">Posisi</label>
					<select class="form-control" required id="InputPosisi" name="id_posisi">
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
				<div class="form-group col-md-12">
					<label for="InputAlamat">Alamat</label>
					<textarea type="text" class="form-control" required="required" id="InputAlamat" name="alamat" placeholder="Masukkan Alamat"></textarea>
					<span class="help-block"></span>
				</div>
				<div class="form-group col-md-12">
					<label for="InputNo">No. Tlp</label>
					<input type="number" class="form-control" required="required" id="InputNo" name="no_tlp" placeholder="Masukkan No. Tlp">
					<span class="help-block"></span>
				</div>
				<div class="form-actions col-md-12">
					<button type="submit" class="btn btn-success" name="tambah" ><i class="glyphicon glyphicon-plus"></i> Tambah</button>
					<button type="Reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reset</button>

				</div>
			</form>
		</div>
  	</div>
</div>

<?php include_once('../footer.php'); ?>