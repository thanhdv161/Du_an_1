<?php 

    include "../model/connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM `chitietdonhang` WHERE maDH = $id";
    connect($query); 
    $query = "DELETE FROM `donhang` WHERE maDH = $id";
    connect($query); 
    header("Location:http://localhost/duan1/admin/index.php?act=donhang");