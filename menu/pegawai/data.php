<?php include_once('../header.php');?>

<div class="box">
	<h1>Pegawai</h1>
	<h4><small>Data Pegawai</small>
		<div class="pull-right">
			<a href="tambah.php" class="btn btn-success btn-sm" ><i class="glyphicon glyphicon-plus"> Pegawai Baru</i></a>
		</div>
	</h4><hr>
	<div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover table-sm" id="pegawai">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIK</th>
					<th>Nama Pegawai</th>
					<th>Jabatan</th>
					<th>Alamat</th>
					<th><center><i class="glyphicon glyphicon-cog"></i></center></th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			$query = "SELECT * FROM tbl_pegawai INNER JOIN tbl_posisi ON tbl_pegawai.id_posisi = tbl_posisi.id_posisi order by no desc";
			$sql_pegawai = mysqli_query($con, $query) or die (mysqli_error($con));
			if (mysqli_num_rows($sql_pegawai) > 0) {
				while ($row = mysqli_fetch_assoc($sql_pegawai)) { ?>
			 			<tr>
			 				<td><?php echo $no++ ?></td>
			 				<td><?php echo $row['nik']?></td>
			 				<td><?php echo $row['nama_pegawai']?></td>	
			 				<td><?php echo $row['posisi']?></td>
			 				<td><?php echo $row['alamat']?></td>
			 				<td><center><a href="edit.php?no=<?php echo $row['no']; ?>" class="btn btn-warning btn-xs"  data-toggle="tooltip"><i class="glyphicon glyphicon-pencil"></i></a> <a href="hapus.php?no=<?php echo $row['no']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Apakah Anda ingin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a></center></td>
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