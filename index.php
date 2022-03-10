<?php
require_once "config/koneksi.php";

if(isset($_SESSION['level'])){
    echo "<script>window.location='menu'</script>";
}
else{
	echo "<script>window.location='auth/login.php'</script>";
}
?>
