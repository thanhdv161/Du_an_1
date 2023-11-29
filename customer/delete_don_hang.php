<?php 

    include "../view/login/pdo.php";
    $id = $_GET['id'];
    $query = "DELETE FROM `chitietdonhang` WHERE maDH = $id";
    pdo_execute($query); 
    $query = "DELETE FROM `donhang` WHERE maDH = $id";
    pdo_execute($query);    
    header("Location:http://localhost/duan1/admin/index.php?act=donhang");