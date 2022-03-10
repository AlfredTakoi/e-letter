<?php include_once('../header.php');?>

<div class="box">
	<h1>Surat Masuk</h1>
</div><hr>
<div class="panel panel-default">
  <div class="panel-heading">Input Laporan Surat Masuk</div>
	  <div class="panel-body">
	  	<div class="box">
			<div class="row">	
				<form method="POST" action="cetakmasuk.php" target="_blank">
					<div class="form-group col-md-6" >
						<label for="InputNo">Tanggal Awal</label>
						<input type="date" class="form-control" required="required" autofocus id="InputNo" name="tgl_awal" placeholder="No. Surat" value="<?php if (isset($_POST['tgl_awal'])) echo $_POST['tgl_awal'];?>">
						<span class="help-block"></span>
					</div>
					<div class="form-group col-md-6">
						<label for="InputTanggal">Tanggal Akhir</label>
						<input type="date" class="form-control" required="required" id="InputTanggal" name="tgl_akhir" value="<?php if (isset($_POST['tgl_akhir'])) echo $_POST['tgl_akhir'];?>">
						<span class="help-block"></span>
					</div>
					<div class="form-actions col-md-12">
						<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Laporkan</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
</div>
		<script type="text/javascript">
            $(function(){
                $(".datepicker").datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true,
                    todayHighlight: false,
                });
                $("#tgl_mulai").on('changeDate', function(selected) {
                    var startDate = new Date(selected.date.valueOf());
                    $("#tgl_akhir").datepicker('setStartDate', startDate);
                    if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
                        $("#tgl_akhir").val($("#tgl_mulai").val());
                    }
                });
            });
        </script>

<?php include_once('../footer.php'); ?>