<?php 
include_once  '../../config.php';
$conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASS,DB_DBNAME) or die("kết nối không thành công");
mysqli_set_charset($conn,'UTF8');
?>