<?php
    include "../model/connect.php";
    $id = $_GET['id'];
    $comment = $_POST['comment'];
    $maTK = $_SESSION['user']['maTK'];
    $date = date("Y-m-d");
    $query = "INSERT INTO binhluan(noiDung,maTK ,maHH,ngayBL) VALUES ('$comment','$maTK','$id','$date')";
    connect($query);
    header("location:http://localhost/duan1/view/index.php?act=chitietsanpham&id=$id");
?>