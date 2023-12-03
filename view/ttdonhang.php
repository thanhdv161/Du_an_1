<style>
.title{
    display:flex;
    justify-content:space-around;
    align-items:center;
}
.title img{
    width: 70px;
}
    </style>
<div class="page-wrapper" id="table">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="container">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box" style="margin-bottom: 60px;">                         
                    <div class="table-responsive">   
                    <h3 style="text-align: center;" class="text-hdn">Đặt hàng thành công</h3> 
                    <h3 class="text-hdn">Thông tin đơn hàng</h3> 
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="border-top-0">Tên Khách Hàng</th>
                                <th class="border-top-0">Ngày đặt</th>
                                <th class="border-top-0">Tổng tiền</th>
                                <th class="border-top-0">Ghi chú</th>
                                <th class="border-top-0">Địa Chỉ</th>
                                <th class="border-top-0">Số Điện Thoại</th>
                                <th class="border-top-0">Trạng thái đơn hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order) : ?>
                                <form action="" method="get">
                                    <input type="text" name="act" value="donhang" hidden>
                                    <tr>
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
                                        <?php echo $order['tenTrangThai'] ?>
                                        </td>
                                    </tr>
                                </form>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <div style="margin-top: 30px;text-align: center;">
                    <a href="http://localhost/duan1/view/index.php?act=ctdonhang&id=<?php echo $order['maDH'] ?>">
                        <button  type="button" class="btn-gui">Xem chi tiết đơn hàng</button>
                    </a>
                    <a onclick="return confirm('Bạn chắc chắn muốn hủy đơn hàng này không?')" href="../customer/huy_don_hang.php?id=<?php echo $order['maDH'] ?>">
                        <?php if ($order['maTrangThai']==1 ) {
                            echo '<button  type="button" class="btn-huy">Hủy đơn hàng</button>';
                        }?>
                    </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
