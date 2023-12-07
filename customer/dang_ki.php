<?php
include "../model/connect.php";
$email = $_POST["email"];
$matKhau = $_POST["matKhau"];
$maVaiTro = $_POST["maVaiTro"];
$anh = $_FILES["anh"]['name'];
if (isset($_FILES['anh'])) {
    $file = $_FILES['anh'];
    $file_name = $file['name'];
    move_uploaded_file($file['tmp_name'], '../img/' . $file_name);
}
$query = "SELECT * FROM taikhoan WHERE email='$email'";
$user = getAll($query);


if (isset($_POST['submit'])) {
    $tenTK = $_POST["tenTK"];
    $sdt = $_POST["sdt"];
    $diaChi = $_POST["diaChi"];
    var_dump($_POST);
  
    if (!empty($user)) {
        header("location:http://localhost/duan1/admin/index.php?act=addkh&error");
      
    } else {
        $query = "INSERT INTO taikhoan( tenTK, email, matKhau, maVaiTro, anh ,sdt,diaChi) VALUES ('$tenTK','$email','$matKhau','$maVaiTro','$anh','$sdt','$diaChi')";
        connect($query);
        header("location:http://localhost/duan1/admin/index.php?act=khachhang");
    }
}



