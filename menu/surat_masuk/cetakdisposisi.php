<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Disposis Surat Masuk</title>
    <link rel="icon" href="../../_assets/img/Logo-Cimahi .png">
    <link href="../../_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <style type="text/css">
    	.td{
    		padding-left: 15px;
    		border: 1px solid black;
    	}
    </style>
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
				 <font face="Times New Roman" color="black" size="4"> <p align="center"> <u> <b> LEMBAR DISPOSISI SURAT MASUK</b></u></font><br>
			</div>
		</div><br><br>

		<?php 
			include "../../config/koneksi.php";
			$id = @$_GET['id'];
			$sql= mysqli_query($con,"SELECT * FROM tbl_surat_masuk where  id='$id'") or die(mysqli_error($con));
			$row = mysqli_fetch_array($sql);
		?>
		<table border="1" width="80%">
			<tr>
				<td width="300px" height="45px;" class="td"><font face="Times New Roman" size="4">No Surat</font></td>
				<td class="td"><font face="Times New Roman" size="4"> <?php echo $row['no_surat']; ?></font></td>
			</tr>
			<tr>
				<td height="45px" class="td"><font face="Times New Roman" size="4">Tanggal Surat</font></td>
				<td class="td"><font face="Times New Roman" size="4"> <?php echo tgl_indonesia($row['tanggal_surat']); ?></font></td>
			</tr>
			<tr>
				<td height="45px" class="td"><font face="Times New Roman" size="4">Sifat</font> </td>
				<td class="td"><font face="Times New Roman" size="4"> <?php echo $row['sifat']; ?></font></td>
			</tr>
			<tr>
				<td height="45px" class="td"><font face="Times New Roman" size="4">Perihal</font></td>
				<td class="td"><font face="Times New Roman" size="4"> <?php echo $row['perihal']; ?></font></td>
			</tr>
			<tr>
				<td height="70px" class="td"><font face="Times New Roman" size="4">Isi Surat Ringkas</font></td>
				<td class="td" class="td"><font face="Times New Roman" size="4"> <?php echo $row['isi_surat_ringkas']; ?></font></td>
			</tr>
			<tr>
				<td height="70px" class="td"><font face="Times New Roman" size="4">Diteruskan Kepada</font></td>
				<td></td>
			</tr>
		</table>
		<br><br><br><br><br><br><br><br><br><br>
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
	<script>
		window.print();
	</script>
</body>
</html>
