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
            include "./form/form_sua_san_pham.php";
            break;
            // chức năng Loại Hàng
        case "loaihang":
            include "./loai_hang.php";
            break;
        case "addlh":
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
