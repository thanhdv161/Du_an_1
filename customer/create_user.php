<?php
include "../view/login/pdo.php";

if (isset($_POST['submit1'])) {
    $email = $_POST["email"];
$username = $_POST["tenTK"];
$password = $_POST["matKhau"];
$location = $_POST["diaChi"];
$roleId = $_POST["maVaiTro"];
$sdt = $_POST["sdt"];
$image = $_FILES["anh"]['name'];
if (isset($_FILES['anh'])) {
    $file = $_FILES['anh'];
    $file_name = $file['name'];
    move_uploaded_file($file['tmp_name'], '../img/' . $file_name);
}
$query = "SELECT * FROM taikhoan WHERE email='$email'";
$user = pdo_query($query);

    if (!empty($user)) {
        header("location:http://localhost/duan1/view/index.php?act=dangki&error");
        die;
    } else {
        $query = "INSERT INTO taikhoan( tenTK, matKhau, email, diaChi, 
        maVaiTro, anh, sdt) VALUES ('$username ','$password','$email','$location','$roleId','$image','$sdt')";
        pdo_execute($query);
        header("location:http://localhost/duan1/view/index.php?act=login&dangkitc");
    }
}

