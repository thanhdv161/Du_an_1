<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden; /* Hide horizontal overflow */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            overflow-x: hidden; /* Hide horizontal overflow */
            /* Add spacing to the right */
            padding-right: 20px; /* You can adjust this value based on your design */
        }

        /* Add specific styles for iPhone 10 to iPhone 15 */
        @media (max-width: 428px) {
            body {
                font-size: 14px;
            }
            /* Adjust styles for iPhone 10 */
            /* Your specific styles for iPhone 10 go here */
        }

        @media (min-width: 429px) and (max-width: 471px) {
            body {
                font-size: 14px;
            }
            /* Adjust styles for iPhone 11 */
            /* Your specific styles for iPhone 11 go here */
        }

        @media (min-width: 472px) and (max-width: 524px) {
            body {
                font-size: 14px;
            }
            /* Adjust styles for iPhone 12 */
            /* Your specific styles for iPhone 12 go here */
        }

        @media (min-width: 525px) and (max-width: 572px) {
            body {
                font-size: 15px;
            }
            /* Adjust styles for iPhone 13 */
            /* Your specific styles for iPhone 13 go here */
        }

        @media (min-width: 573px) and (max-width: 619px) {
            body {
                font-size: 15px;
            }
            /* Adjust styles for iPhone 14 */
            /* Your specific styles for iPhone 14 go here */
        }

        @media (min-width: 620px) and (max-width: 767px) {
            body {
                font-size: 15px;
            }
            /* Adjust styles for iPad Mini and Samsung Galaxy */
            /* Your specific styles for iPad Mini and Samsung Galaxy go here */
        }

        @media (min-width: 768px) {
            body {
                font-size: 16px;
            }
            /* Your existing styles for larger screens go here */
        }

        /* Your existing styles go here */
    </style>
</head>

<body>
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
            if(isset($_POST['btn_search'])){
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
?>
</body>

</html>
