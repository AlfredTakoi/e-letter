<?php include_once('../header.php');?>

<div class="box">
	<h1>Surat Masuk</h1>
	<h4>
		<small>Laporan Data Surat Masuk</small>
		<div class="pull-right">
			<a href="cetakmasuk.php" class="btn btn-info" target="_blank"><i class="glyphicon glyphicon-print"></i> Print</a>
			<a href="formlaporanmasuk.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4><hr>
	<div class="table-responsive">

	    <table class="table table-bordered table-hover" id="dataTable">
	        <br>
	        <thead>
	        <tr>
	            <th>No.</th>
				<th>No Surat</th>
				<th>Tanggal Surat</th>
				<th>Sifat</th>
				<th>Pengirim</th>
				<th>Perihal</th>
	        </tr>
	        </thead>
	        <?php
	       
	        if (isset($_POST['tgl_awal'])&& isset($_POST['tgl_akhir'])) {

	            $tgl_awal=date('Y-m-d', strtotime($_POST["tgl_awal"]));
	            $tgl_akhir=date('Y-m-d', strtotime($_POST["tgl_akhir"]));


	            $sql = "SELECT  * from tbl_surat_masuk where tanggal_surat between '".$tgl_awal."' and '".$tgl_akhir."' order by id asc";

	        }else {
	            $sql="SELECT * from tbl_surat_masuk order by id asc";
	        }
	        $no = 1;
	    	$hasil = mysqli_query($con, $sql) or die (mysqli_error($con));
				if (mysqli_num_rows($hasil) > 0) {
					while ($data = mysqli_fetch_array($hasil)) { ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['no_surat']?></td>
							<td><?=$data['tanggal_surat']?></td>
							<td><?=$data['sifat']?></td>
							<td><?=$data['pengirim']?></td>
							<td><?=$data['perihal']?></td>
						</tr>
					<?php
					}
				} else {
					echo "<tr><td colspan=\"7\" align=\"center\">Data tidak ditemukan</td></tr>";
				}
			?>
	    </table>
  	</div>
</div>
<script type="text/javascript">
	$(document).ready( function () {
    $('#dataTable').DataTable({
    	"language":{
    		"url":"../Indonesian.json",
    		"sEmptyTable":"Tidads"
    	}
    });

} );
</script>



<?php include_once('../footer.php'); ?>