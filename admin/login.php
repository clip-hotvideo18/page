<?php
@ob_start();
session_start();
include('acc_adm.php');
$color = file_get_contents('color');
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng Nhập admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script src="assets/js/sweetalert.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <style type="text/css">

  .scroll-cards {
  width: 370px;
  height: 100%;
  overflow: auto;

  padding: 20px 0px 5px 0px;
}

.mail-names {
  color: grey;
  font-weight: bold;
  font-size: 15px;
  margin-left: 10px;
}

.mails {
  display: flex;
  align-items: center;
}
.mails > img {
  width: 35px;
  border-radius: 10px;
}
.mail-info {
  margin: 10px 65px;
  margin-left: 0px;
  line-height: 1.7;
  font-weight: 600;
}
.btn-primary {
  color: #fff;
  background-color: <?=$color;?>;
  border-color: #5e72e4;
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}
.btn-primary:hover {
  color: #fff;
  background-color:  <?=$color;?>;
  border-color: <?=$color;?>;
}
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
  color: #fff;
  background-color: <?=$color;?>;
}
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
  color: #fff;
  background-color: <?=$color;?>;
}
.alert-primary {
  color: #fff;
  background-color: <?=$color;?>;
  border-color: <?=$color;?>;
}
  </style>
<style>
    
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>TCH</b> VIP</a>
  </div>


<?php

if (isset($_POST["submit"]))
{
    $username = str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($_POST['username']))));
    $password = str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($_POST['password']))));
    
    
    if ($username == "" || $password == '')  {
        echo '<script type="text/javascript">swal("Lỗi", " Không được để trống tên đăng nhập hoặc mật khẩu", "error");
        </script>';
    } else {
        
        if ($username != $user || $password != $pass ) {
            echo '<script type="text/javascript">swal("Lỗi", " Thông tin đăng nhập không chính xác !!!", "error");
           </script>';
            
        } else {
           // session_start();

            $_SESSION['admin'] = $username;
            echo '<script type="text/javascript">swal("Thành Công","Đăng Nhập Thành Công","success");
                setTimeout(function(){ location.href = "index.php?password='.$password.'" },10);</script>';
        }
    }
}
?> 



  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng Nhập Admin</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Tài khoản" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          </div>
         <input type="text" class="form-control" name="password" placeholder="Mật khẩu" required="">
          <div class="input-group-append">
           
          </div>
         
        <hr>
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" name="submit" class="btn btn-primary btn-block">ĐĂNG NHẬP</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php include('footer.php');?>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>