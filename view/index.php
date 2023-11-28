<?php
include "../model/connect.php";
include "../view/modelview/header.php";
$kq = loadall_danhmuc();
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
            $spmoi = sanpham_moi();
            $topsp = sanpham_top();
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
            if(isset($_GET['maLoai'])){
                $maLoai = $_GET['maLoai'];
                $product = load_hanghoa_danhmuc($maLoai);
            }
            else{
                $product = loadall_hanghoa();
            }
            $kq = loadall_danhmuc();
            $topsp = sanpham_top();
            $giamin_arr = lay_gia_min();
            $giamax_arr = lay_gia_max();
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
            $giamin_arr = lay_gia_min();
            $giamax_arr = lay_gia_max();
            $topsp = sanpham_top();
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
    $spmoi = sanpham_moi();
    $topsp = sanpham_top();
    include "./home.php";
}

include '../view/modelview/footer.php';