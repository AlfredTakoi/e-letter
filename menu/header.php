<?php 
	require_once "../../config/koneksi.php";
    if(!isset($_SESSION['level']) == "Admin") {
        echo "<script>window.location='../../auth/login.php';</script>";
    }
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E - Surat | Kelurahan Baros</title>
    <link rel="icon" href="../../_assets/img/Logo-Cimahi .png">
    <link rel="stylesheet" href="../../_assets/css/bootstrap.min.css">
    <link href="../../_assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="_assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../../_assets/css/dataTables.bootstrap.min.css">
   
</head>
<body>
	<script src="../../_assets/js/jquery.js"></script>
    <script src="../../_assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../_assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../_assets/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="../../_assets/js/dataTables-demo.js"></script>
    <!-- <p class="navbar-text navbar-right"><a href="#" class="navbar-link" style="margin-right: 52px;"><?=$_SESSION;?></a></p> -->
    <div id="wrapper">
        <div id="sidebar-wrapper" style="background-color: navy;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand list-unstyled components">
                    <a href="../index.php" class=""><b><span class="text-default"><img src="../../_assets/img/Logo-Cimahi .png" width="30px"> E - Surat Baros</span></b></a>
                </li>
                <li>
                    <div class="sb-sidenav-menu-heading" style="color: grey;">MAIN</div>
                    <a href="../dashboard" class=""><i class="fa fa-tachometer" style="margin-left: -20px; margin-right: 5px"></i> Halaman Depan</a>
                </li>
                <li>
                    <div class="sb-sidenav-menu-heading" style="color: grey;">INTERFACE</div>
                    <?php if($_SESSION['level'] == "Super Admin" || $_SESSION['level'] == "Lurah" ) { ?>
                        <a href="../user"><i class="fa fa-user" style="margin-left: -20px; margin-right: 5px"></i> User</a>
                    <?php } ?>
                </li>
                <li>
                    <?php if($_SESSION['level'] == "Super Admin" || $_SESSION['level'] == "Lurah" || $_SESSION['level'] == "Sekretaris Lurah"){ ?>
                        <a href="../pegawai"><i class="fa fa-users ml-20" style="margin-left: -20px; margin-right: 5px"></i> Data Pegawai</a>
                    <?php } ?>
                </li>
                <li>
                    <a href="#dataSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="glyphicon glyphicon-list-alt" style="margin-left: -20px; margin-right: 5px"></i> Data Surat <span class="caret" style="margin-left: 115px;"></span></a>
                    <ul class="collapse list-unstyled" id="dataSubmenu" style="background-color: #00008B;">
                        <li>
                            <a href="../surat_masuk"  style="color: white;"><i class="glyphicon glyphicon-envelope"></i> Surat Masuk</a>
                        </li>
                        <li>
                            <a href="../surat_keluar" style="color: white"><i class="fa fa-paper-plane"></i> Surat Keluar</a>
                        </li>
                    </ul>
                </li>
                <li>
                   <a href="#laporanSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="glyphicon glyphicon-list" style="margin-left: -20px; margin-right: 5px"></i> Laporan <span class="caret" style="margin-left: 130px;"></span></a>
                    <ul class="collapse list-unstyled" id="laporanSubmenu" style="background-color: #00008B;">
                        <li>
                            <a href="../laporan/formlaporanmasuk.php"  style="color: white;"><i class="glyphicon glyphicon-envelope"></i> Surat Masuk</a>
                        </li>
                        <li>
                            <a href="../laporan/formlaporankeluar.php" style="color: white"><i class="fa fa-paper-plane"></i> Surat Keluar</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
         
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="margin-top: 8px;">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>      
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <button class="btn btn-primary" id="menu-toggle" style="margin-top: 3px; margin-left: 5px;">Menu</button>
                </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome <?=$_SESSION['username'];?><span class="caret"></span> <img class="profile-img-card" src="../../_assets/assetslogin/img/avatar_2x.png" width="25" style="border-radius: 50%; margin-right: 5px;"></a>
                            <ul class="dropdown-menu">
                                <li><a href="../user/gantipassword.php"><i class="glyphicon glyphicon-user"></i> Profil</a></li> 
                                <li role="separator" class="divider"></li>
                                <li><a href="../../auth/logout.php" onclick="return confirm('Apakah Anda Ingin Keluar?')"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div id="page-content-wrapper">
            <div class="container-fluid">
