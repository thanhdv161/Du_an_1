<?php 
include "../login/pdo.php";
$email=$_POST["email"];
$pass= $_POST["matKhau"];
$query= "update taikhoan set matKhau='$pass' where email='$email'";
pdo_execute($query);
header("location:http://localhost/du_an_1/view/index.php?act=login&successful");
?>