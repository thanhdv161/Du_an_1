<?php
include "../login/pdo.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    var_dump($email);
    $query = "SELECT * FROM taikhoan WHERE email ='$email' and matKhau = '$password'";
    $result = pdo_query_one($query);
    $username = $result['tenTK'];
    if($result){
        if(checkUser($result)){
            $_SESSION['user'] = $result;
            header("Location:http://localhost/duan1/admin/index.php?act=trangchu");
        }else{
            $_SESSION['user'] = $result;
            header("Location:http://localhost/duan1/view/index.php?act=home&succes=$username");
        }
    }else{
        header("Location: ../index.php?act=login&error");
        exit();
}