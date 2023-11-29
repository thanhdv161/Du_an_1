<?php 

include "../model/connect.php";
$id= $_GET['id'];
$query = "DELETE FROM binhluan WHERE maBL=$id";
connect($query);
header("location:http://localhost/du_an_1/admin/index.php?act=binhluan");

?>