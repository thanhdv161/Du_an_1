<?php
include "../view/modelview/header.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include "./home.php";
            break;
        case 'chitietsanpham':
            include "./chitietsanpham.php";
            break;
        case 'login':
            include "./login/dangnhap.php";
            break;
        case 'tintuc':
            include "./tintuc.php";
            break;
        case 'lienhe':
            include "./lienhe.php";
            break;
        case 'gioithieu':
            include "./gioithieu.php";
            break;
        case 'giohang':
            include "./giohang/giohangtrong.php";
            break;
    }
}else{
    include "./home.php";
}

include '../view/modelview/footer.php';