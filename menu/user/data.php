<?php include_once('../header.php');?>

<div class="box">
	<h1>User</h1>
	<h4><small>Data User</small>
		<div class="pull-right">
			<a href="tambah.php" class="btn btn-success btn-sm" ><i class="glyphicon glyphicon-plus"> User Baru</i></a>
		</div>
	</h4><hr>
	<div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover table-sm" id="pegawai">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama User</th>
					<th>Username</th>
					<th>Level</th>
					<th><center><i class="glyphicon glyphicon-cog"></i></center></th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			$query = "SELECT * FROM tbl_user order by id_user desc";
			$sql_pegawai = mysqli_query($con, $query) or die (mysqli_error($con));
			if (mysqli_num_rows($sql_pegawai) > 0) {
				while ($row = mysqli_fetch_assoc($sql_pegawai)) { ?>
			 			<tr>
			 				<td><?php echo $no++ ?></td>
			 				<td><?php echo $row['nama_user']?></td>	
			 				<td><?php echo $row['username']?></td>
			 				<td><?php echo $row['level']?></td>
			 				<td><center><a href="edit.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-warning btn-xs"  data-toggle="tooltip"><i class="glyphicon glyphicon-pencil"></i></a> <a href="hapus.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Apakah Anda ingin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a></center></td>
			 			</tr>
				<?php
				} 
			} else {
				echo "<tr><td colspan=\"6\" align=\"center\">Data tidak ditemukan</td></tr>";
			}
			?>
			</tbody>
		</table>
	</div>
<?php 
?>
<script type="text/javascript">
	$(document).ready( function () {
	    $('#pegawai').DataTable({
	    	"language":{
	    		"url":"../../_assets/Indonesian.json",
	    		"sEmptyTable":"Tidads"
	    	}
	    });

	} );
</script>
</div>

<?php include_once('../footer.php'); ?>