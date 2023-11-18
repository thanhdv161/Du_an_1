<?php
session_start();
function pdo_get_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
function pdo_execute($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);

    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
// truy vấn nhiều dữ liệu
function pdo_query($sql){
    $sql_args=array_slice(func_get_args(),1);

    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
// truy vấn  1 dữ liệu
function pdo_query_one($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        // đọc và hiển thị giá trị trong danh sách trả về
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
function checkUser($result){
    if($result){
        if($result['maVaiTro'] == 4){
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
function delete($table,$tableId,$id,$case){
    $query="DELETE FROM $table WHERE $tableId=$id";
    pdo_execute($query);
    header("Location: http://localhost/duan1/admin/index.php?act=$case");
}
pdo_get_connection();
?>