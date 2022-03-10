<?php include_once('../header.php');?>

<div class="box">
	<div class="pull-right">
		<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
	</div>
	<h1>Edit User</h1>
</div>
<?php
	$id_user = $_GET['id_user'];
	$sql_user = mysqli_query($con,"SELECT * FROM tbl_user where id_user = '$id_user'") or die(mysqli_error($con));
	$row = mysqli_fetch_array($sql_user);
?>
<div class="panel panel-default">
  <div class="panel-heading">Edit User</div>
  <div class="panel-body">
  	<div class="row">
		<form method="POST" action="proses.php">
			<div class="form-group col-md-6">
				<label for="InputUser">Nama User</label>
				<input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
				<input type="text" class="form-control" autofocus required="required" id="InputUser" name="nama_user" placeholder="Nama User" value="<?php echo $row['nama_user']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-6">
				<label for="InputNo">Username</label>
				<input type="text" class="form-control" required="required" id="InputNo" name="username" placeholder="Username" value="<?php echo $row['username']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-6">
				<label for="InputPassword">Password</label>
				<input type="password" class="form-control" required="required" id="InputPassword" name="pass" placeholder="Password" value="<?php echo $row['pass']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group  col-md-6">
				<label for="InputNo">Level</label>
                <select name="level" class="form-control" required>
                    <option selected="selected">Pilih Level User</option>
                    <option selected="selected" hidden="hidden"><?php echo $row['level']; ?></option>
                    <option value="Super Admin">Super Admin</option>
                    <option value="Lurah">Lurah</option>
                    <option value="Sekretaris Lurah">Sekretaris</option>
                    <option value="Umum">Umum</option>
                </select>
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