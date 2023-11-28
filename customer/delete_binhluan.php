<?php 

include "../model/connect.php";
$id= $_GET['id'];
$query = "DELETE FROM binhluan WHERE maBL=$id";
connect($query);
header("location:http://localhost/duan1/admin/index.php?act=binhluan");

?>