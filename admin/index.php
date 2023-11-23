<?php

include "../model/connect.php";
include "../admin/modeladmin/header.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case "trangchu":
            include "./trang_chu.php";
            break;
            // chức năng sản phẩm
        case "sanpham":
            $sanpham = hanghoa();
            if (isset($_POST['search']) && $_POST['search']) {
                $search = $_POST['search'];
                $query = "select * from hanghoa where  tenHH like '%$search%' or tenHH = '$search'";
                $sanpham = getAll($query);
            }
            include "./san_pham.php";
            break;
        case "addsp":
            if (isset($_POST["submit"])) {
                $tenHH = $_POST['tenHH'];
                $gia = $_POST['gia'];
                $giaGoc = $_POST['giaGoc'];
                $mauSac = $_POST['mauSac'];
                $moTa = $_POST['moTa'];
                $maLoai = $_POST['maLoai'];
                $anh = $_FILES['anh']['name'];
                $stringImage = '';
                $arranh = count($anh);
                foreach ($anh as $key => $value) {
                    $stringImage .= $value;
                    $stringImage .= "";
                    if ($key !== $arranh - 1) {
                        $stringImage .= ",";
                    }
                    move_uploaded_file($_FILES['anh']['tmp_name'][$key], "../img/" . $value);
                }
                themhanghoa($tenHH, $gia, $giaGoc, $mauSac, $stringImage, $maLoai, $moTa);
                $yourURL = "http://localhost/duan1/admin/index.php?act=sanpham";
                echo ("<script>location.href='$yourURL'</script>");
            }
            include "./form/form_them_moi_san_pham.php";
            break;
            case "updatesp":
                $productId = $_GET['id'];
                $query = "select * from hanghoa where maHH = $productId";
                $product = getOne($query);
                $queryCate = "select * from danhmuc";
                $category = getAll($queryCate);
                if (isset($_POST["submit"])) {
                    $productName = $_POST['tenHH'];
                    $productPrice = $_POST['gia'];
                    $productGiaGoc = $_POST['giaGoc'];
                    $productColor = $_POST['mauSac'];
                    $maLoai = $_POST['maLoai'];
                    $productImage = $_FILES['anh']['name'];
                    $stringImage = '';
                    $oldImage = $_POST['oldImage'];
                    $numberArrayImage = count($productImage);
                    if (strlen($productImage[0]) > 0) {
                        foreach ($productImage as $key => $value) {
                            $stringImage .= $value;
                            $stringImage .= "";
                            if ($key !== $numberArrayImage - 1) {
                                $stringImage .= ",";
                            }
                            move_uploaded_file($_FILES['anh']['tmp_name'][$key], "../img/" . $value);
                        }
                    } else {
                        $stringImage = $oldImage;
                    }
                    updateProduct($productId, $productName, $productPrice, $productGiaGoc, $productColor, $stringImage, $maLoai);
                    $yourURL = "http://localhost/duan1/admin/index.php?act=sanpham";
                    echo ("<script>location.href='$yourURL'</script>");
                }
                include "./form/form_sua_san_pham.php";
                break;
            // chức năng Loại Hàng
        case "loaihang":
            include "./loai_hang.php";
            break;
        case "deletelh":
            if (isset($_GET['id'])) {
                $id = $_GET["id"];
                deleteLH($id);
            }
            include "./loai_hang.php";
        break;
        case "updatelh":
                
                if (isset($_POST["submit"])) {
                    $id = $_POST['maLoai'];
                    $tenLoai = $_POST["tenLoai"];
                    updateDanhMuc($id, $tenLoai);
                    $yourURL = "http://localhost/duan1/admin/index.php?act=loaihang";
                    echo ("<script>location.href='$yourURL'</script>");
                    
                }
                include "./form/form_sua_loai_hang.php";
            break;
        case "addlh":
            $error = array();
            if (isset($_POST["submit"])) {
                if ($_POST["tenLoai"] != "") {
                    $tenLoai = $_POST["tenLoai"];
                    $query = "select * from danhmuc where tenLoai = '$tenLoai'";
                    $check = getOne($query);
                    if (empty($check)) {
                        addDM($tenLoai);
                        $yourURL = "http://localhost/duan1/admin/index.php?act=loaihang";
                        echo ("<script>location.href='$yourURL'</script>");
                    } else {
                        $error['danhmuc'] = "Vui lòng chọn tên khác!";
                    }
                } else {
                    $error['danhmuc'] = "Vui lòng nhập tên loại!";
                }
            }
            include "./form/form_them_moi_loai_hang.php";
            break;
            // Chức năng khách hàng
        case "khachhang":
            $users = users();
            if (isset($_POST['search']) && $_POST['search']) {
                $search = $_POST['search'];
                $query = "select * from taikhoan where  tenTK like '%$search%' or tenTK = '$search'";
                $users = getAll($query);
            }
            include "./khach_hang.php";
            break;
            case "updatekh":
                if (isset($_POST['update'])) {
                    $id = $_POST['ma_kh'];
                    $userName = $_POST['ten_kh'];
                    $password = $_POST['mat_khau'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $location = $_POST['location'];
                    $vai_tro = $_POST['vai_tro'];
                    $oldImage = $_POST['oldImage'];
                    $Image = $_FILES['anh']['name'];
                    if (strlen($Image) > 0) {
                        move_uploaded_file($_FILES['anh']['tmp_name'], '../img/' . $Image);
                    } else {
                        $Image = $oldImage;
                    }
                    $sql = "UPDATE taikhoan SET tenTK='$userName',matKhau='$password',email='$email',diaChi='$location',maVaiTro='$vai_tro',anh='$Image',sdt='$sdt' where maTK = $id";
                    connect($sql);
                    $yourURL = "http://localhost/duan1/admin/index.php?act=khachhang";
                    echo ("<script>location.href='$yourURL'</script>");
                }
                include "./form/form_sua_user.php";
                break;
        case "addkh":
            include "./form/form_them_moi_user.php";
            break;
            // chức năng bình luận
        case "binhluan":
            include "./binh_luan.php";
            break;
        case "binhluan_blog":
            include "./binhluan_blog.php";
            break;
            // Chức năng giỏ hàng
        case "donhang":
            include "./don_hang.php";
            break;
        case "capnhattrangthai":
            include "./form/form_sua_trang_thai.php";
            break;
        case "chitietdonhang":
            include "./chitietdonhang.php";
            break;
        default:
            include "./trang_chu.php";
            break;
    }
}
include '../admin/modeladmin/footer.php';
