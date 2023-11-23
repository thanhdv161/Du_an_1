<?php
include "../model/connect.php";
include "../view/modelview/header.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            $query = "SELECT * FROM hanghoa WHERE maLoai=1";
            $product = getAll($query);
            $query2 = "SELECT * FROM hanghoa WHERE maLoai=2";
            $product2 = getAll($query2);
            $query3 = "SELECT * FROM hanghoa WHERE maLoai=3";
            $product3 = getAll($query3);
            $query4 = "SELECT * FROM hanghoa WHERE maLoai=4";
            $product4 = getAll($query4);
            $query5 ="select * from hanghoa order by maHH desc limit 9";
            $spmoi = getAll($query5);
            $query6 ="select * from hanghoa order by luotxem desc limit 4";
            $topsp = getAll($query6);
            include "./home.php";
            break;
        case 'chitietsanpham':
            include "./chitietsanpham.php";
            break;
        case 'sanphamdanhmuc':
            $query = "SELECT * FROM hanghoa";
            $product = getAll($query);
            include "./sanpham.php";
            break;
        case 'login':
            if(isset($_GET["successful"])){
                echo '<script>alert("Đổi mật khẩu thành công")</script>';
            }
            else{
                echo("");
            }
            include "./login/dangnhap.php";
            break;
        case "dangki":
                include "./login/dangky.php";
                break;
        case "quenmk":
                if(isset($_GET['fall'])){
                    echo '<script>alert("Email không tồn tại")</script>';
                }
                else{
                    echo("");
                }
                include "./login/quenmk.php";
                break;
            case "setpass":
                    $email= $_GET["success"];
                    include "./login/setpass.php";
                break;
        case 'dangnhap':
            if(isset($_GET["successful"])){
                echo '<script>alert("Đổi mật khẩu thành công")</script>';
            }
            else{
                echo("");
            }
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
        case 'timkiemsanpham':
            if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                $kw = $_POST['keyword'];
            }else{
                $kw = "";
            }
            if(isset($_GET['maLoai']) && ($_GET['maLoai']>0)){
                $maLoai=$_GET['maLoai'];
            }else{
                $maLoai=0;
            }
            $dssp=loadall_sanphamtk($kw,$maLoai);
            $tendm= load_ten_dmtk($maLoai);
            $query6 ="select * from hanghoa order by luotxem desc limit 8";
            $topsp = getAll($query6);
            include "./sanpham.php";
            break;
        
        default:
            include "./home.php";
            break;
    }
}else{
    $query = "SELECT * FROM hanghoa WHERE maLoai=1";
    $product = getAll($query);
    $query2 = "SELECT * FROM hanghoa WHERE maLoai=2";
    $product2 = getAll($query2);
    $query3 = "SELECT * FROM hanghoa WHERE maLoai=3";
    $product3 = getAll($query3);
    $query4 = "SELECT * FROM hanghoa WHERE maLoai=4";
    $product4 = getAll($query4);
    $query5 ="select * from hanghoa order by maHH desc limit 9";
    $spmoi = getAll($query5);
    $query6 ="select * from hanghoa order by luotxem desc limit 4";
    $topsp = getAll($query6);
    include "./home.php";
}

include '../view/modelview/footer.php';