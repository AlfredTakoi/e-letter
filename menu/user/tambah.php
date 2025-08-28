<?php include_once('../header.php');?>

<div class="box">
	<div class="pull-right">
		<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
	</div>
	<h1>Tambah User</h1>
</div>
<div class="panel panel-default">
  <div class="panel-heading">Edit User</div>
  <div class="panel-body">
  	<div class="row">
		<form method="POST" action="proses.php">
			<div class="form-group col-md-6">
				<label for="InputUser">Nama User</label>
				<input type="text" class="form-control" autofocus required="required" id="InputUser" name="nama_user" placeholder="Masukkan Nama User">
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-6">
				<label for="InputNo">Username</label>
				<input type="text" class="form-control" required="required" id="InputNo" name="username" placeholder="Masukkan Username" >
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-6">
				<label for="InputPassword">Password</label>
				<input type="password" class="form-control" required="required" id="InputPassword" name="password" placeholder="Masukkan Password">
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-6">
				<label for="InputPassword">Konfirmasi Password</label>
				<input type="password" class="form-control" required="required" id="InputPassword" name="pass" placeholder="Masukkan Konfirmasi Password" >
				<span class="help-block"></span>
			</div>
			<div class="form-group  col-md-12">
                <select name="level" class="form-control" required>
                    <option selected="selected">Pilih Level User</option>
                    <option value="Super Admin">Super Admin</option>
                    <option value="Lurah">Lurah</option>
                    <option value="Sekretaris Lurah">Sekretaris</option>
                    <option value="Staff">Staff</option>
                </select>
            </div>
			<div class="form-actions col-md-12">
				<button type="submit" class="btn btn-success" name="simpan"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
				<button type="Reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reset</button>
			</div>
		</form>
	</div>
  </div>
</div>


<?php include_once('../footer.php');?>