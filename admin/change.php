<?php
header("Content-type: application/json");
include('config.php');
include('admin/acc_adm.php');
if (empty($_GET['password'])) {
    die('error_password');
}
 
if ($_GET['password'] != $pass) {
    die('pass admin không chính xác !!!');
}
