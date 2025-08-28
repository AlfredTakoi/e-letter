<?php include_once('../header.php');?>

<div class="box">
	<div class="pull-right">
		<a href="../dashboard" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
	</div>
	<h1><?=$_SESSION['level'];?></h1>
</div>
<?php
	$user = $_SESSION['username'];
	$sql_profil = mysqli_query($con,"SELECT * FROM tbl_user where username = '$user'") or die(mysqli_error($con));
	$row = mysqli_fetch_array($sql_profil);
?>
<div class="panel panel-default">
  <div class="panel-heading">Edit User</div>
  <div class="panel-body">
  	<div class="row">
		<form method="POST" action="proses.php">
			<div class="form-group col-md-12">
				<label for="InputUser">Nama User</label>
				<input type="text" class="form-control" autofocus required="required" id="InputUser" name="nama_user" placeholder="Nama User" value="<?php echo $row['nama_user']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-12">
				<label for="InputNo">Username</label>
				<input type="text" class="form-control" required="required" id="InputNo" name="username" placeholder="Username" value="<?php echo $row['username']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group col-md-12">
				<label for="InputPassword">Password</label>
				<input type="password" class="form-control" required="required" id="InputPassword" name="pass" placeholder="No. Tlp" value="<?php echo $row['pass']?>">
				<span class="help-block"></span>
			</div>
			<div class="form-actions col-md-12">
				<button type="submit" class="btn btn-success" name="ganti"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
				<button type="Reset" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Reset</button>
			</div>
		</form>
	</div>
  </div>
</div>


<?php include_once('../footer.php');?>