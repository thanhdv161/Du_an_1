<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Đơn Hàng</p>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <p class="box-title col-4">
                            Bảng Thống Kê Đơn Hàng
                        </p>
                        <form action="http://localhost/duan1/admin/index.php?act=donhang" method="get" class="col-4">
                            <input type="text" name="act" value="donhang" hidden>
                            <select class="form-select shadow-none p-0 border-0 " name="trangThai">
                                <option value="0">Chọn Trạng Thái Đơn Hàng</option>
                                <option value="1">Chưa xác nhận</option>
                                <option value="2">Đã xác nhận</option>
                                <option value="3">Đang giao hàng</option>
                                <option value="4">Đã giao hàng</option>
                            </select>
                            <button type="submit" class="btn btn-primary text-white">Lọc</button>
                        </form>
                    </div>

                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Tên Khách Hàng</th>
                                <th class="border-top-0">Ngày đặt</th>
                                <th class="border-top-0">Tổng tiền</th>
                                <th class="border-top-0">Ghi chú</th>
                                <th class="border-top-0">Địa Chỉ</th>
                                <th class="border-top-0">Số Điện Thoại</th>
                                <th class="border-top-0">Trạng thái</th>
                                <th class="border-top-0">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order) : ?>
                                <form action="" method="get">
                                    <input type="text" name="act" value="donhang" hidden>
                                    <tr>
                                        <td>
                                            <?php echo $order['maDH'] ?>
                                        </td>
                                        <td>
                                            <?php echo $order['tenKH'] ?>
                                        </td>
                                        <td>
                                            <?php echo $order['ngayDatHang'] ?>
                                        </td>
                                        <td>
                                            <?php echo number_format($order['tongTien']) ?> đ
                                        </td>
                                        <td><?php echo $order['ghiChu'] ?></td>
                                        <td>
                                            <?php echo $order['diaChi'] ?>
                                        </td>
                                        <td>
                                            <?php echo $order['sdt'] ?>
                                        </td>
                                        <td>
                                            <select name="maLoai" class="border-0">
                                                <?php
                                                foreach ($categorys as $cate) :
                                                ?>
                                                    <option <?php echo $cate['id'] == $order['maTrangThai'] ? "selected" : "" ?> value="<?php echo $cate['id'] ?>"> <?php echo $cate['tenTrangThai'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </td>

                                        <td>
                                            <a href="http://localhost/duan1/admin/index.php?act=chitietdonhang&id=<?php echo $order['maDH'] ?>">
                                                <button type="button" class="btn btn-primary text-white">Chi tiết</button>
                                            </a>
                                            <button type="submit" onclick="submitForm()" class="btn btn-primary text-white" name="updateStatus" value="<?php echo $order['maDH'] ?>">Cập nhật Trạng Thái </button>
                                        </td>
                                    </tr>
                                </form>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        function submitForm() {
            alert("Bạn đã cập nhật thành công trạng thái đơn hàng");
        }
    </script>
</div>