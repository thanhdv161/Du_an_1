<?php 
include "../login/pdo.php";
$email = $_POST["email"];
$query="SELECT * FROM taikhoan WHERE email='$email'";
$user = pdo_query_one($query);
if(empty($user)){
    header("location:http://localhost/duan1/view/index.php?act=quenmk&fall");
}
else{
    header("location:http://localhost/duan1/view/index.php?act=setpass&success=$email");
}
?>