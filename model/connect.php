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
function binhluan(){
    $query = "select * from (binhluan inner join taikhoan on binhluan.maTK = taikhoan.maTK) inner join hanghoa on binhluan.maHH = hanghoa.maHH";
    $result = getAll($query);
    return $result;
}
function lay_gia_min(){
    $querygiamin = "SELECT MIN(gia) FROM hanghoa";
    $giamin = getFetch($querygiamin);
    $giamin_string = implode(', ', $giamin);
    return $giamin_string;
}
function lay_gia_max(){
    $querygiamax = "SELECT MAX(gia) FROM hanghoa";
    $giamax = getFetch($querygiamax);
    $giamax_string = implode(', ', $giamax);
    return $giamax_string;
}
function sanpham_moi(){
    $query5 ="select * from hanghoa order by maHH desc limit 9";
    $spmoi = getAll($query5);
    return $spmoi;
}
function sanpham_top(){
    $query6 ="select * from hanghoa order by luotxem desc limit 4";
    $topsp = getAll($query6);
    return $topsp;
}
function loadall_danhmuc(){
    $sql = "SELECT * FROM danhmuc";
    $kq = connect($sql);
    return $kq;
}
function loadall_hanghoa(){
    $query = "SELECT * FROM hanghoa";
    $product = getAll($query);
    return $product;
}
function load_hanghoa_danhmuc($maLoai){
    $query = "SELECT * FROM hanghoa where trangthai = 0 and maLoai = $maLoai";
    $product = getAll($query);
    return $product;
}
function deletebinhluan($id){
    $query = "delete from binhluan where maBL = $id";
    connect($query);
}