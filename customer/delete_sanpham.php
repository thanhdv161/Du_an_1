
<?php 
include "../model/connect.php";
$id= $_GET["id"];
$case="sanpham";
$table="hanghoa";
$tableId="maHH";
delete($table,$tableId,$id,$case);
?>