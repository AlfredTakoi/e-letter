<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Surat Masuk</title>
    <link rel="icon" href="../../_assets/img/Logo-Cimahi .png">
    <link href="../../_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../_assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>
	<center>
		<div class="box">
			<table border="0" width="90%">
		      <tr>
		        <td width="120">
		          <img src="../../_assets/img/Logo-Cimahi .png" alt="logo1" width="110" style="margin-bottom: 20px;">
		        </td>
		        <td align="center">
		          	<p align="center" style="margin-bottom: --1in; line-height: 50%"><font face="Times New Roman, serif"><font size="4" style="font-size: 12pt"><b>PEMERINTAH KOTA CIMAHI
					<p align="center" style="margin-bottom: --1in; line-height: 100%"><font face="Times New Roman, serif"><font size="4" style="font-size: 13pt"><b>KECAMATAN CIMAHI TENGAH
					<p align="center" style="margin-bottom: 0in; line-height: 100%"><font face="Times New Roman, serif"><font size="6" style="font-size: 21pt"><b>KELURAHAN
					BAROS</b></font></font></p>
					<p align="center"><font face="Times New Roman, serif"><font size="6" style="font-size: 10pt"> Jl. Haji Haris No. 8/b Telp. 022-6644604 / 022-6644608 Email. baros@cimahikota.go.id</font> </p>
		        </td>
		        <td width="120">
		         
		        </td>
		      </tr>
		    </table><hr style="border: 1px solid black; margin-top: -7px;">
			<div>
				 <font face="Times New Roman" color="black" size="4"> <p align="center"> <u> <b> DATA SURAT MASUK</b></u></font><br>
	  			<font face="Times New Roman" color="black" size="4"> Nomor: ....../......./<?php echo date('Y'); ?> </p></font><br>
	  			<font face="Times New Roman" color="black" size="4">Laporan Surat Masuk dari Tanggal <?php echo tgl_indonesia($_POST['tgl_awal']); ?> sampai dengan Tanggal <?php echo tgl_indonesia($_POST['tgl_akhir']); ?></p></font>
			</div>
		</div>

		<?php 
			include "../../config/koneksi.php";
		?>
		<table class="table table-bordered" border="1" style="border-collapse: collapse; "><br>
	        <thead>
	        <tr>
	            <th>No.</th>
				<th>No Surat</th>
				<th>Tanggal Surat</th>
				<th>Sifat</th>
				<th>Pengirim</th>
				<th>Perihal</th>
	        </tr>

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
	         <script>
	         	window.print();
	         </script>

	      </center>
	      </p>
	  		</thead>
		</table>
	     <div style="margin-left: 500px;">
		  	<p align="left" style="margin-bottom: --1in; line-height: 100%"><font face="Times New Roman">Baros, <?php echo tgl_indonesia(date('Y-m-d')); ?></font></p>
		  	<p align="left" style="margin-bottom: --1in; line-height: 100%"><b><font face="Times New Roman">An, LURAH BAROS</font></b><br><br><br><br><br></p>
		  	<p align="left" style="margin-bottom: --1in; line-height: 100%"><b><u><font face="Times New Roman">YANTI RETNO IRIANI, S.STP</font></u></b></p>
		  	<p align="left" style="margin-bottom: --1in; line-height: 100%"><font face="Times New Roman">NIP. 2487878357295728</font></p>
		  </div>
	
	 <?php 
	 	function tgl_indonesia($tanggal){
				$bulan = array (
				1 =>   'Januari',
				'Februari',	
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
			$pecahkan = explode('-', $tanggal);
			
			// variabel pecahkan 0 = tanggal
			// variabel pecahkan 1 = bulan
			// variabel pecahkan 2 = tahun
		 
			return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
				}
	  	?>
</body>
</html>
