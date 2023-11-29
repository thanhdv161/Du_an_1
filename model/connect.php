<?php
session_start();
function connect($query)
{
    $connection = new PDO("mysql:host=localhost;dbname=duan1;charset=utf8", "root", "");
    $status = $connection->prepare($query);
    $status->execute();
    return $status;
}
function getAll($query)
{
    $result = connect($query)->fetchAll();
    return $result;
}
function getFetch($query)
{
    $result = connect($query)->fetch(PDO::FETCH_ASSOC);
    return $result;

}
function getOne($query)
{
    $result = connect($query)->fetch();
    return $result;
}
function getColumn($query){
    $result = connect($query)->fetchColumn();
    return $result;
}

function checkUser($result){
    if($result){
        if($result['roleId'] == 4){
            return true;
        }else{
            $_SESSION['message'] = "bạn không có quyền truy cập vào trang";
            return false;
        }
    }else{
        $_SESSION['message'] = "Thông tin chưa chính xác";
        return false;
    }
}

function users(){
    $query = "select * from taikhoan";
    $result = getAll($query);
    return $result;
}
function updateProduct($productId, $productName, $productPrice, $productGiaGoc, $productColor , $stringImage, $maLoai){
    $query="UPDATE hanghoa SET 
    tenHH='$productName',gia='$productPrice',giaGoc='$productGiaGoc',mauSac='$productColor',
    anh='$stringImage',maLoai='$maLoai' WHERE maHH=$productId";
    connect($query);
}
function updateDanhMuc($id,$tenLoai){
    $query = "update danhmuc set tenLoai = '$tenLoai' where maLoai = $id";
    connect($query);
}
function deleteLH($id){
    $query0 = "update hanghoa set maLoai = 10 where maLoai = $id";
    connect($query0);
    $query = "delete from danhmuc where maLoai = $id";
    connect($query);
}
function addDM($tenLoai){
    $query ="insert into danhmuc(tenLoai) values('$tenLoai')";
    connect($query);
}
function loadalldanhmuc(){
    $query = "select * from danhmuc";
    $result = getAll($query);
    return $result;
}
function hanghoa(){
    $query ="select * from hanghoa";
    $result = getAll($query);
    return $result;
}
function themhanghoa($tenHH, $gia, $giaGoc, $mauSac, $anh, $maLoai, $moTa){
    $query="INSERT INTO hanghoa( tenHH, gia, giaGoc, mauSac, anh, maLoai, moTa) 
    VALUES('$tenHH', $gia, $giaGoc,'$mauSac','$anh','$maLoai','$moTa')";
    connect($query);
}

function delete($table,$tableId,$id,$case){
    $query="DELETE FROM $table WHERE $tableId=$id";
    connect($query);
    header("Location: http://localhost/duan1/admin/index.php?act=$case");
}
function loadall_sanphamtk($kw=""){
    $query="SELECT * from hanghoa where trangthai = 0";
    if($kw!=""){
        $query.=" and tenHH like '%".$kw."%'";
    }
    $query.=" order by maHH desc";
    $listsanpham=connect($query);
    return  $listsanpham;
}

function load_ten_dmtk($maLoai){
    if($maLoai>0){
        $query="select * from hanghoa where maHH=".$maLoai;
        $dm=getOne($query);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
function binhluan(){
    $query = "select * from (binhluan inner join taikhoan on binhluan.maTK = taikhoan.maTK) inner join hanghoa on binhluan.maHH = hanghoa.maHH";
    $result = getAll($query);
    return $result;
}
function getOrderId($query){
    $connection = new PDO("mysql:host=localhost;dbname=duan1;charset=utf8", "root", "");
    $status = $connection->prepare($query);
    $status->execute();
    $orderId =  $connection -> lastInsertId();
    return $orderId;
}
function orders(){
    $query = "select * from donhang";
    $result = getAll($query);
    return $result;
}
function checkStatus($number){
    if($number==1){
        echo "Chưa Thanh Toán";
    }elseif($number ==2){
        echo "Đã Thanh Toán";
    }else{
        echo "Chưa xác đinh";
    }
}
