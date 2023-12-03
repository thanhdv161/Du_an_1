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
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <!-- /.col-lg-12 -->
    </div>
    <div class="container">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box container">
                    <h3 style="text-align: center;" class="text-hdn">Chi tiết đơn hàng</h3>
                    <p class="text-ctdn">Tên khách hàng : <?php echo $results[0]['tenKH']?></p>
                    <p class="text-ctdn">Địa chỉ : <?php echo $results[0]['diaChi']?></p>
                    <p class="text-ctdn">Số điện thoại : <?php echo $results[0]['sdt']?></p>
                                                    
                    <div style="margin: 20px 0;" class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Ngày đặt</th>
                                    <th class="border-top-0">Sản Phẩm</th>
                                    <th class="border-top-0">Ảnh sản Phẩm</th>
                                    <th class="border-top-0">Số Lượng</th>
                                    <th class="border-top-0">Thành Tiền</th>
                                    <th class="border-top-0">Ghi chú</th>
                                    <th class="border-top-0">Phương thức thanh toán</th>
                                    <th class="border-top-0">Trạng thái đơn hàng</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($results as $result) : ?>
                                    <?php $num += $result['soLuong']; ?>

                                    <tr>
                                        <td>
                                            <?php echo $result['ngayDatHang'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result['productName'] ?>
                                        </td>
                                        <td>
                                            <img src="../img/<?php
                                                                $arr = explode(",", $result['anh']);
                                                                echo $arr[0];
                                                                ?>" alt="" width="50" height="50">
                                        </td>
                                        <td><?php echo $result['soLuong'] ?></td>
                                        <td>
                                            <?php echo number_format($result['tongTien'],0,",",".")?>
                                        </td>
                                        <td>
                                            <?php echo $result['ghiChu'] ?>
                                        </td>
                                        <td>
                                            <?php if($result['pttt'] == 1){
                                                echo "Thanh toán sau khi nhận hàng";
                                            }else if($result['pttt'] == 2){
                                                echo "Thanh toán qua VNPAY";
                                            }else {
                                                echo "Thanh toán qua MOMO";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $result['tenTrangThai'] ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p class="text-ctdn">Tổng Số Lượng:&ensp;<?php echo $num; ?></p>
                        <p class="text-ctdn">Tổng Tiền:&ensp;<?php echo number_format($results[0]['money'],0,",",".") ?>đ</p>
                    </div>
                </div>
                <div style="margin-top: 30px;" class="container"> 
                    <a href="http://localhost/duan1/view/index.php?act=ttdonhang">
                        <button  type="button" class="btn-gui">Trở lại</button>
                    </a>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
