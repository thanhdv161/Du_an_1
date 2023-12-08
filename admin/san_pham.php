<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Sản Phẩm</p>
        <div class="d-flex form-group">
            <form action="" class="mx-2 border" method="post">
                <input type="text" class="p-1" placeholder="tìm kiếm" name="search" required>
                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bảng thống kê sản phẩm</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên Sản Phẩm</th>
                                    <th class="border-top-0">Hình ảnh</th>
                                    <th class="border-top-0">Giá Bán</th>
                                    <th class="border-top-0">Giá Gốc</th>
                                    <th class="border-top-0">Màu Sắc</th>
                                    <th class="border-top-0">Danh mục</th>
                                    <th class="border-top-0">Trạng thái</th>
                                    <th class="border-top-0">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($sanpham as $hanghoa) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $hanghoa['maHH'] ?>
                                        </td>
                                        <td>
                                            <?php echo $hanghoa['tenHH'] ?>
                                        </td>
                                        <td>
                                            <img src="../img/<?php
                                                                $arr = explode(",", $hanghoa['anh']);
                                                                echo $arr[0];
                                                                ?>" alt="" width="50" height="50">
                                        </td>
                                        <td>
                                        <?php echo number_format($hanghoa['gia'])?>đ</td>
                                        <td>
                                            <?php echo number_format($hanghoa['giaGoc'])?>đ</td>
                                        <td>
                                            <?php echo $hanghoa['mauSac'] ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($hanghoa['maLoai'] == 1) {
                                                echo "iPhone";
                                            } else if ($hanghoa['maLoai'] == 2) {
                                                echo "Samsung";
                                            } else if ($hanghoa['maLoai'] == 3) {
                                                echo "Xiaomi";
                                            } else {
                                                echo "Realme";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                        <?php echo $hanghoa['trangthai']==0?"Còn Hàng":"Hết Hàng"?>
                                        </td>
                                        <td>
                                            <a href="http://localhost/duan1/admin/index.php?act=updatesp&id=<?php echo $hanghoa['maHH'] ?>">
                                                <button type="button" class="btn btn-primary">Sửa sp</button>
                                            </a>
                                            <a onclick="return confirm_product('<?php echo $hanghoa['tenHH']; ?>')" href="../customer/delete_sanpham.php?id=<?php echo $hanghoa['maHH'] ?>">
                                                <button type="button" class="btn btn-danger text-white">Xoá sp</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>