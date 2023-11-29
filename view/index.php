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
            $id = $_GET['id'];
            $query = "SELECT * FROM hanghoa WHERE maHH=$id";
            $hanghoa = getOne($query);
            $maloai = $hanghoa['maLoai'];
            $query1 = "SELECT * FROM hanghoa WHERE maLoai=$maloai";
            $splienquan = getAll($query1);
            $queryComment = "SELECT * FROM binhluan join taikhoan on binhluan.maTK = taikhoan.maTK WHERE maHH ='$id'";
            $comment = getAll($queryComment);
            include "./chitietsanpham.php";
            break;
        case 'sanphamdanhmuc':
            $sql = "SELECT * FROM danhmuc";
            $kq = connect($sql);
            $query = "SELECT * FROM hanghoa";
            $product = getAll($query);
            $query6 ="select * from hanghoa order by luotxem desc limit 8";
            $topsp = getAll($query6);
            $querygiamin = "SELECT MIN(gia) FROM hanghoa";
            $giamin = getFetch($querygiamin);
            $giamin_string = implode(', ', $giamin);
            $querygiamax = "SELECT MAX(gia) FROM hanghoa";
            $giamax = getFetch($querygiamax);
            $giamax_string = implode(', ', $giamax);
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
        case "thanhtoan":
                if (isset($_SESSION['user'])) {
                    $userName = $_SESSION['user']['tenTK'];
                    $emailUser = $_SESSION['user']['email'];
                    $sdt = $_SESSION['user']['sdt'];
                    $location = $_SESSION['user']['diaChi'];
                }
                $productOder = $_SESSION['gio_hang'];
    
            include "./thanh_toan.php";
                break;
        case 'giohang':
                $success = false;
                if (empty($_SESSION['gio_hang'])) {
                    $result = [];
                } else {
                    $result = $_SESSION['gio_hang'];
                }
                if (isset($_GET['success'])) {
                    $success  = "Bạn đã đặt hàng thành công";
                }
            include "./giohang/giohangtrong.php";
                break;
          
        case 'timkiemsanpham':
            if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                $kw = $_POST['keyword'];
                $product=loadall_sanphamtk($kw);
            }else{
                $kw = "";
            }
            if(isset($_POST['btn_timkiem'])){
                $kw = $_POST['keyword'];
                $product=loadall_sanphamtk($kw);
            }else{
                $kw = "";
            }
            if(isset($_POST['btn_loc'])){
                $danhmuc = $_POST['danhmuc'];
                $query = "SELECT * FROM hanghoa where trangthai = 0 ";
                if($_POST['danhmuc']){
                    $query .= "and maLoai = $danhmuc";
                }
                if(isset($_POST['from']) && $_POST['to']){
                    $price_min = $_POST['from'];
                    $price_max = $_POST['to'];
                    $query .= " and gia between $price_min and $price_max";
                }
                $product = getAll($query);
            }
            $querygiamin = "SELECT MIN(gia) FROM hanghoa";
            $giamin = getFetch($querygiamin);
            $giamin_string = implode(', ', $giamin);
            $querygiamax = "SELECT MAX(gia) FROM hanghoa";
            $giamax = getFetch($querygiamax);
            $giamax_string = implode(', ', $giamax);
            $sql = "SELECT * FROM danhmuc";
            $kq = connect($sql);
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