<?php
include "../model/connect.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM hanghoa where maHH = $id";
    $result  = getOne($query);
    $arrImg = explode(",", $result['anh']);
    $arrColor = explode(",", $result['mauSac']);
    $productImage = $arrImg[0];
    $productColor = $arrColor[0];
    $productName = $result['tenHH'];
    $productId = $result['maHH'];
    if (empty($_SESSION['gio_hang'][$productId])) {
        $_SESSION['gio_hang'][$productId] = array(
            'tenHH' => $result['tenHH'],
            'so_luong' => 1,
            'gia' => $result['gia'],
            'anh' => $productImage,
            'mauSac' => $productColor,
            'maHH' => $result['maHH'],
            'importPrice' => $result['importPrice']
        );
    } else {
        $_SESSION['gio_hang'][$productId]['so_luong'] += 1;
    }
    header("Location:http://localhost/duan1/view/index.php?act=sanphamdanhmuc&success");
    exit();
};
if (isset($_POST['submit'])) {
    $productId = $_POST['maHH'];
    $productName = $_POST['tenHH'];
    $productColor = $_POST['mauSac'];
    $productPrice = $_POST['gia'];
    $productImage = $_POST['anh'];
    $sl = $_POST['soluong'];
    if (!isset($_SESSION['gio_hang'][$productId])) {
        $_SESSION['gio_hang'][$productId] = array(
            'tenHH' => $productName,
            'so_luong' => $sl,
            'gia' => $productPrice,
            'anh' => $productImage,
            'mauSac' => $productColor,
            'maHH' => $productId
            
        );
    } else {
        $_SESSION['gio_hang'][$productId]['so_luong'] += $sl;
    }
    header("Location:http://localhost/duan1/view/index.php?act=sanphamdanhmuc&success");
}
if (isset($_GET['update'])) {
    if (!empty($_SESSION['gio_hang'])) {
        $productId = $_POST['maHH'];
        $sl = $_POST['productSlUpdate'];
        foreach ($productId as $index => $id) {
            $_SESSION['gio_hang'][$id]['so_luong'] = $sl[$index];
        }
        header("Location:http://localhost/duan1/view/index.php?act=giohang&update");
    }else{
        header("Location:http://localhost/duan1/view/index.php?act=giohang");
    }
}
