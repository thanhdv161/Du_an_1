    <!-- thanhtoan -->
    <?php 
    if (!isset($_SESSION['gio_hang'])) {
        echo '<script language="javascript">';
        echo 'alert("Chưa có sản phẩm nào trong giỏ hàng ! ")';
        echo '</script>';
        $yourURL = "http://localhost/duan1/view/index.php?act=sanphamdanhmuc";
                echo ("<script>location.href='$yourURL'</script>");
        die;
    }
    ?>
    <div class="container2 mx-auto text-center">
        <div class="box_1">
            <h5 style="margin: 40px 0 30px 0;text-align: center;">Thông tin giao hàng</h5>
            <form action="../customer/thanhtoan.php" method="post" id="checkout-form" >
                <div class="form-group">
                    <input rules="required|min:5" class="inp33" id="userName" type="text" name="tenTK" value="<?php echo isset($_SESSION['user']) ? $userName : ""; ?>" placeholder="Họ và tên" required>
                    <br><small class="form-message"></small>
                </div>
                <div class="form-group ">
                    <input rules="required|email" class="inp33" id="userEmail" type="email" name="email" value="<?php echo isset($_SESSION['user']) ? $emailUser : ""; ?>" placeholder="Email" required >
                    <br><small class="form-message text-red-500"></small>
                </div>
                <div class="form-group">
                    <input rules="required|phone|min:10" class="inp33" id="orderSdt" type="tel" name="sdt" pattern="[0-9]{10}" required title="Vui lòng nhập số điện thoại 10 chữ số" placeholder="Số điện thoại" value="<?php echo isset($_SESSION['user']) ? $sdt : ""; ?>" required>
                    <br><small class="form-message text-red-500"></small>
                </div>
                <div class="form-group">
                    <input rules="required" id="orderLocation" class="inp33" type="text" name="diaChi" placeholder="Địa chỉ" value="<?php echo isset($_SESSION['user']) ? $location : ""; ?>" required>
                </div>
                <div>
                    <textarea  class="ghiChu" cols="30" rows="100" placeholder="Ghi Chú" name="ghiChu"></textarea>
                </div>
                <div style="margin: 20px 50px 20px 0;">
                    <button class="btn-gui" type="submit">XÁC NHẬN ĐẶT HÀNG</button>
                </div>
            <div class="text-center mt-[250px]">

            </div>
        </div>
        <div class="box_2 ">
        <h5 style="margin: 40px 0 30px 0;text-align: center;">Sản phẩm chọn mua</h5>
            <?php
            $tongtien = 0;
            $so_luong = 0;
            $lai = 0;
            $goc = 0;
            foreach ($productOder as $row) {
                $thanh_tien = $row['gia'] * $row['so_luong'];
                $tongtien += $thanh_tien;
                $so_luong += $row['so_luong'];
            ?>
                <div class="flex mt-7 p-2">
                    <img class="w-[100px] h-[100px] border rounded" width="110px" src="../img/<?php echo $row['anh'] ?>" alt="">
                    <div class="pl-5 py-5">
                        <span><?php echo $row['tenHH'] ?></span>
                        <span class="block"><?php echo $row['mauSac'] ?></span>
                        <span class="block">Sl:<?php echo $row['so_luong'] ?></span>
                    </div>
                    <p class="py-5 pl-[100px]">Giá: <?php echo number_format($thanh_tien) ?>đ</p>
                </div>
            <?php
            }

            ?>
            <div class="pt-5 flex">
              
                <h3 style="font-size: 18px;">Tổng chi phí : &nbsp;</h3>          
                <h3 style="font-size: 18px;color: red;" class="text-black"><?php echo number_format($tongtien) ?>đ</h3>
                
            </div>
            <h5 style="margin: 50px 0 15px 0;text-align: center;">Chọn phương thức thanh toán</h5>
            <div style="text-align: center;">
            <input style="margin-left: 27px;margin-right: 5px;" type="radio" name="pttt" value="1" checked>Thanh toán sau khi nhận hàng <br>
            <input style="margin-left: 7px;margin-right: 5px;" type="radio" name="pttt" value="2">Thanh toán qua VNPAY <img width="25px" src="../img/vnpay.png" alt=""><br>
            <input style="margin-left: 1px;margin-right: 5px;" type="radio" name="pttt" value="3">Thanh toán qua MOMO <img width="18px" src="../img/momo.png" alt="">
            </div>
            </form>
        </div>
        
    </div>
    <style>
       

.p-2 {
    padding: 0.5rem;
}

.border {
    border-width: 1px;
}

.flex {
    display: flex;
    margin-left: -90px;
    width: 600px;
}

.mt-7 {
    margin-top: 1.75rem;
}
.p-2 {
    padding: 0.5rem;
}
.border {
    border-width: 1px;
}
.flex {
    display: flex;
}




        .pt-5.flex{
            margin-left: -50px;
            
        }
        .block{
            padding: 8px;
        }
        
       
        .pro{
            margin-top: 10px;
            margin-left: -70px;
            width: 558px;
            height: 110px;
            border: 1px solid black;
        }
        .inp33{
                width: 400px;
                height: 50px;
                margin: 10px;
            }
        .ghiChu{
            width: 400px;
            height: 150px;
        }
        .container2{
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 1476px;
            
        }
        .box_1 {
            border: 1px solid;
            border-bottom: transparent;
            border-top: transparent;
            border-left: transparent;
            width: 738px;

        }

        .box_2 {
            padding-left: 100px;
            width: 500px;
            
        }
    </style>
    <script>

    </script>