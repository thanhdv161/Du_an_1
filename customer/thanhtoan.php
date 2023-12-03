<?php
include "../model/connect.php";

// echo "<pre>";
// var_dump($_POST["lai"]); die;
// var_dump($_SESSION['gio_hang']);
// var_dump($_SESSION['user']);exit();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$name ="";
$email ="";
$sdt = "";
$location = "";
$note = $_POST['ghiChu'];
$ngay_nhap = date("Y-m-d H:i:s",time());
$pttt = $_POST['pttt'];

if(!empty($_SESSION['user'])){
    $name = $_SESSION['user']['tenTK'];
    $email = $_SESSION['user']['email'];
    $sdt = $_POST['sdt'];
    $location = $_POST['diaChi'];
}else{
    $name =$_POST['tenTK'];
    $email =$_POST['email'];
    $sdt = $_POST['sdt'];
    $location = $_POST['diaChi'];
}
//tính tổng tiền
$total = 0;
$profit = 0;
$arrayProduct = array();
foreach ($_SESSION['gio_hang'] as $key => $value){
    $arrayProduct[] = $value;
    $total += $value['gia'] * $value['so_luong'];
    $profit += ($value['gia']-$value['importPrice']) * $value['so_luong'];
}
$query = "INSERT INTO `donhang`(`maDH`, `tenkh`, `ngayDatHang`, `tongTien`, `ghiChu`, `diaChi`, `sdt`,`maTrangThai`,`pttt`) VALUES (null,'$name','$ngay_nhap','$total','$note','$location','$sdt',1,'$pttt')";
// lấy id order và thêm dữ liệu vào bảng order
$last_id = getOrderId($query);
$queryString="";
$num = count($arrayProduct);
foreach ($arrayProduct as $key => $value){
    $totalProduct =$value['gia'] * $value['so_luong'];
    $queryString .="(null,'".$last_id."','".$value['maHH']."','".$value['so_luong']."','".$totalProduct."')";
    if($key != $num -1){
        $queryString .=",";
    }
}
var_dump($queryString);

$queryDetail = "INSERT INTO `chitietdonhang`(`maCT`, `maDH`, `maHH`, `soLuong`, `tongTien`) VALUES ".$queryString.";";

connect($queryDetail);
// mail
$title = "THÔNG TIN ĐƠN HÀNG CỦA BẠN TẠI SALEPHONE SHOP";
$content ="";
foreach ($_SESSION['gio_hang'] as $key => $value){
    $namesp .= 
    "<p>".$value['tenHH']."</p>";
}

$content .= "<p>Họ tên khách hàng: ".$name."</p>";
$content .= "<p>Số điện thoại: ".$sdt."</p>";
$content .= "<p>Địa chỉ: ".$location."</p>";
$content .= "<p>Sản phẩm đã đặt: </p>";
$content .= $namesp;
$content .= "<p>Tổng tiền: ".number_format($total)." VNĐ</p>";
foreach ($_SESSION['gio_hang'] as $key => $value){
    unset($_SESSION['gio_hang'][$key]);
    
}
header("Location:http://localhost/duan1/view/index.php?act=ttdonhang");
?>