<?php 
include "../login/pdo.php";
$id= $_GET["id"];
$case="khachhang";
$table="taikhoan";
$tableId="maTK";
delete($table,$tableId,$id,$case);

?>