<?php include_once('../header.php'); ?>


<div class="row">
  <div class="alert alert-success" role="alert">
    Anda Berhasil Login!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
	</div>
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(400, 0).slideUp(300, function(){
          $(this).remove(); 
      });
    }, 2000);
  </script>

  <div class="jumbotron">
    <center><p> Selamat Datang <b><?=$_SESSION['nama_user'];?></b> <br>Di Aplikasi Pengarsipan Surat Masuk dan Surat Keluar Kelurahan Baros. <br> Anda Login sebagai <b><?=$_SESSION['level']; ?></b>. <?php if($_SESSION['level'] == "Super Admin"){ ?> Anda memiliki Akses penuh terhadap Sistem. <?php } else{ ?> Berikut adalah statistik data yang tersimpan dalam sistem. <?php } ?>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body bg-info" style="border-collapse: collapse; padding: 15px; box-shadow: 1px 2px 8px  rgba(0, 0, 0, 0.40); border-radius: 5px; margin-bottom: 15px;">
          <h4 class="card-title">Surat Masuk</h4> 
          <p class="card-text">
            <?php 
              $queryJml = "SELECT * FROM tbl_surat_masuk";
              $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
              echo "<h3> $jml Surat <i class=\"glyphicon glyphicon-envelope\" style=\"float: right;\"></i></h3>";
            ?>
          </p>
          <a href="../surat_masuk" class="card-link">Pergi ke Surat Masuk</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body bg-success" style="border-collapse: collapse; padding: 15px; box-shadow: 1px 2px 8px  rgba(0, 0, 0, 0.40); border-radius: 5px; margin-bottom: 15px;">
          <h4 class="card-title">Surat Keluar</h4>
          <p class="card-text">
            <?php 
              $queryJml = "SELECT * FROM tbl_surat_keluar";
              $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
              echo "<h3> $jml Surat <i class=\"fa fa-paper-plane\" style=\"float: right;\"></i></h3>";
            ?>
          </p>
          <a href="../surat_keluar" class="card-link">Pergi ke Surat Keluar</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body bg-warning" style="border-collapse: collapse; padding: 15px; box-shadow: 1px 2px 8px  rgba(0, 0, 0, 0.40); border-radius: 5px; margin-bottom: 15px;">
          <h4 class="card-title">Pegawai</h4>
          <p class="card-text">
            <?php 
              $queryJml = "SELECT * FROM tbl_pegawai";
              $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
              echo "<h3> $jml Pegawai <i class=\"fa fa-users  \" style=\"float: right;\"></i></h3>";
            ?>
          </p>
          <a href="../pegawai" class="card-link">Pergi ke Pegawai</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<?php include_once('../footer.php'); ?>