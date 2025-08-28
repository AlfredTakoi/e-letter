<?php
    require_once"../config/koneksi.php";
    if(isset($_SESSION['level'])){
         echo "<script>window.location='../menu';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login E - Surat | Kelurahan Baros</title>

    <!-- Bootstrap -->
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../_assets/img/Logo-Cimahi .png">
    <style>
        body {
            background-color:navy;
        }
        .row {
            margin:100px auto;
            width:300px;
            text-align:center;
        }
        .login {
            background-color:#fff;
            padding:20px;
            margin-top:20px;
            border-radius: 20px;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <div class="container">
        <div class="row">
            <h2 style="color: white">Login</h2>
            <div class="login">
                
                <?php
                if(isset($_POST['login'])){
                    
                    $username   = $_POST['user'];
                    $password   = sha1($_POST['pass']); 
                    $cek_user = mysqli_query($con, "SELECT * FROM tbl_user WHERE username = '$username'");
                    $user_valid = mysqli_fetch_array($cek_user);
                    //uji jika username terdaftar
                    if ($user_valid) {
                        //jika username terdaftar
                        //cek password sesuai atau tidak
                        if ($password == $user_valid['password']) {
                            //jika password sesuai
                            //buat session
                            session_start();
                            $_SESSION['username'] = $user_valid['username'];
                            $_SESSION['id_user'] = $user_valid['id_user'];
                            $_SESSION['nama_user'] = $user_valid['nama_user'];
                            $_SESSION['level'] = $user_valid['level'];

                            //uji level user
                            if ($user_valid['level'] == "Super Admin") {
                                @$_SESSION['Super Admin'] = $user_valid['id_user'] ;
                                header('location:../menu');
                            } elseif ($user_valid['level'] == "Lurah") {
                                @$_SESSION['Lurah'] = $user_valid['id_user'] ;
                                header('location:../menu');
                            } elseif ($user_valid['level'] == "Sekretaris Lurah") {
                                @$_SESSION['Sekretaris Lurah'] = $user_valid['id_user'] ;
                                header('location:../menu');
                            } elseif ($user_valid['level'] == "Staff") {
                                @$_SESSION['Staff'] = $user_valid['id_user'] ;
                                header('location:../menu');
                            }
                        } else { ?>
                            <div class="alert alert-danger">
                                Username atau Password Anda Salah. 
                            </div>
                       <?php  }
                    } else { ?>
                        <div class="alert alert-danger">
                                Username dan Password Anda tidak terdaftar.
                            </div>
                    <?php  }
                }
                ?>
                
                <form role="form" action="" method="post">
                    <div class="form-group">
                        <img src="../_assets/img/Logo-Cimahi .png" width="40%">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user" class="form-control" placeholder="Username" required autofocus />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pass" class="form-control" placeholder="Password" required autofocus/>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary btn-block" value="Log In" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(400, 0).slideUp(300, function(){
          $(this).remove(); 
      });
    }, 2000);
  </script>
</body>
</html>