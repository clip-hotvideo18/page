<?php
error_reporting(0);
include('config.php');
include('acc_adm.php');
  
        if ($_GET['password'] != $pass ) {
            header('location: login.php');
            die();
            } else {
           // session_start();
}
?>
<?php include('head.php');?>
<?php include('nav.php');?>
<?
?>
<?php
if (isset($_POST["submit"])) {
   $pass_cu = $_POST['cu'];
   $pass_moi = $_POST['moi'];
   $pass_laimoi = $_POST['laimoi'];
   if ($pass_cu == '' || $pass_moi == '' || $pass_laimoi == '') {
        echo '<script type="text/javascript">swal("Lỗi", "Vui lòng nhập đầy đủ thông tin", "error");</script>';
   } else {
       
       if ($pass_cu != $pass) {
           echo '<script type="text/javascript">swal("Lỗi", "Vui lòng nhập đúng Mật Khẩu cũ", "error");</script>';
       } else {
           if ($pass_moi == $pass_laimoi) {
               unlink('acc_adm.php');
               $lsls = '<?php
               $user = "admin";
               $pass = "'.$pass_moi.'"; ?>';
               $p = fopen('acc_adm.php', 'a');
               fwrite($p, $lsls);
               fclose($p);
                 echo '<script type="text/javascript">swal("Thành Công","Đổi Mật Khẩu Thành Công","success");
                     setTimeout(function(){ location.href = "logout.php" },5000);</script>';
                    
           } else {
                echo '<script type="text/javascript">swal("Lỗi", "Vui lòng nhập trùng Mật Khẩu mới", "error");</script>';
           }
       }
   }
}
?>
<?php
if(isset($_POST['submit_color'])) {
   $color = $_POST['color'];
    unlink('color');
               $p = fopen('color', 'a');
               fwrite($p, $color);
               fclose($p);
               echo '<script type="text/javascript">swal("Thành Công","Đã Lưu Thay Đổi","success");
                     </script>';
                     
}

    
    ?>
    <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản Lý Random</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->

  <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <h3><?=count(file($name_facebook))?></h3>

                <p>TỔNG ACCOUNT RANDOM</p>
              </div>
              <a href="fb.php?password=<?=$_GET['password']?>" class="small-box-footer">Quản Lí<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div></div>
             
          <form class="form-horizontal" action="" method="post">
        <div class="row">
         

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                THAY ĐỔI MẬT KHẨU ADMIN
              </div>
              <!-- /.card-header -->
              <div class="card-body">                
                  <div class="row">
                  <div class="col-md-6">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Tài Khoản Đăng Nhập Mặc Định Là: <b style="color:red">admin</b>. Nên bạn chỉ có thể thay đổi Mật Khẩu.</label>
                  <br>
                  <label for="exampleInputEmail1">Mật Khẩu Cũ : </label><br>
                  <input name="cu" type="text" value=""/>
                  <br>
                  <label for="exampleInputEmail1">Mật Khẩu Mới : </label><br>
                  <input name="moi" type="text" value=""/><br>
                  <label for="exampleInputEmail1">Nhập Lại Mật Khẩu Mới : </label><br>
                  <input name="laimoi" type="text" value=""/>
                </div>
              </div>  
                </div>
                <div class="col-md-12">
            <button name="submit" type="submit" class="btn btn-info btn-block">LƯU THAY ĐỔI</button>
          </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row (main row) --> </form> 
        <form class="form-horizontal" action="" method="post">
        <div class="row">
          

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Cấu hình giao diện
              </div>
              <!-- /.card-header -->
              <div class="card-body">  
                <div class="row">
                
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="example-color-input" class="form-control-label">Color</label>
                      <input class="form-control" type="color" value="<?=file_get_contents('color') ?>" name="color">
                    </div>
                  </div>
                 
              </div>
             
                <div class="col-md-12">
            <button name="submit_color" type="submit" class="btn btn-info btn-block">LƯU THAY ĐỔI</button>
          </div>  </div>
            </div>
          </div>
        </div>
        </form>
          <!-- ./col -->

        <!-- /.row (main row) -->
<?php include('footer.php');?>