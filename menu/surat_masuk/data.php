<?php include_once('../header.php'); ?>

<div class="box">
	<h1>Surat Masuk</h1>
	<h4>
		<small>Data Surat Masuk</small>
		<?php if($_SESSION['level'] == "Super Admin" || $_SESSION['level'] == "Staff"){ ?>
		<div class="pull-right">
			<a href="tambah.php" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"> Surat Masuk Baru</i></a>
		</div>
		<?php } ?>
	</h4><hr>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="surat_masuk">
			<thead>
				<tr>
					<th>No.</th>
					<th>No Surat</th>
					<th>Tanggal Surat</th>
					<th>Sifat</th>
					<th>Pengirim</th>
					<th>Perihal</th>
					<th>Status Disposisi</th>
					<th><center><i class="glyphicon glyphicon-cog"></i></center></th>
				</tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			$query = "SELECT * FROM tbl_surat_masuk order by id desc";
			$sql_pegawai = mysqli_query($con, $query) or die (mysqli_error($con));
			if (mysqli_num_rows($sql_pegawai) > 0) {
				while ($data = mysqli_fetch_array($sql_pegawai)) { ?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$data['no_surat']?></td>
						<td><?=tgl_indo($data['tanggal_surat'])?></td>
						<td><?=$data['sifat']?></td>
						<td><?=$data['pengirim']?></td>
						<td><?=$data['perihal']?></td>
						<td><?=$data['status_disposisi']?></td>
						<td>
						<center>
							<?php if($_SESSION['level'] == "Lurah" || $_SESSION['level'] == "Sekretaris Lurah"){ ?>
								<a href="lihat.php?id=<?php echo $data['id']; ?>" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
							<?php } else if($_SESSION['level'] == "Super Admin" || $_SESSION['level'] == "Staff" ) {?>
							<a href="cetakdisposisi.php?id=<?php echo $data['id']; ?>" class="btn btn-info btn-xs" target="_blank"><i class="glyphicon glyphicon-print"></i></a>
							<a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
							<a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Apakah Anda ingin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
						<?php } ?>
						</center>
						</td>
					</tr>
				<?php
				}
			} else {
				echo "<tr><td colspan=\"8\" align=\"center\">Data tidak ditemukan</td></tr>";
			}
			?>
			</tbody>
		</table>
	</div>
<script type="text/javascript">
	$(document).ready( function () {
	    $('#surat_masuk').DataTable({
	    	"language":{
	    		"url":"../../_assets/Indonesian.json",
	    		"sEmptyTable":"Tidads"
	    	}
	    });

	} );
</script>
	
</div>

<?php include_once('../footer.php'); ?>