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