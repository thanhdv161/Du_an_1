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
            <h1 class="text-3xl mt-5">SALEPHONE SHOP</h1>
            <h6 class="text-xl py-5">Thông tin giao hàng</h6>
            <form action="../customer/thanhtoan.php" method="post" id="checkout-form">
                <div class="form-group">
                    <input rules="required|min:5" class="inp33" id="userName" type="text" name="tenTK" value="<?php echo isset($_SESSION['user']) ? $userName : ""; ?>" placeholder="Họ và tên" >
                    <br><small class="form-message"></small>
                </div>
                <div class="form-group ">
                    <input rules="required|email" class="inp33" id="userEmail" type="email" name="email" value="<?php echo isset($_SESSION['user']) ? $emailUser : ""; ?>" placeholder="Email" >
                    <br><small class="form-message text-red-500"></small>
                </div>
                <div class="form-group">
                    <input rules="required|phone|min:10" class="inp33" id="orderSdt" type="text" name="sdt" placeholder="Số điện thoại" value="<?php echo isset($_SESSION['user']) ? $sdt : ""; ?>" >
                    <br><small class="form-message text-red-500"></small>
                </div>
                <div class="form-group">
                    <input rules="required" id="orderLocation" class="inp33" type="text" name="diaChi" placeholder="Địa chỉ" value="<?php echo isset($_SESSION['user']) ? $location : ""; ?>" >
                </div>
                <div>
                    <textarea class="ghiChu" cols="30" rows="10" placeholder="Ghi Chú" name="ghiChu"></textarea>
                </div>
                <div >
                    
                    <button class="px-5 text-black py-2 giohangtt" type="submit">XÁC NHẬN ĐẶT HÀNG</button>
                </div>
            </form>
            <div class="text-center mt-[250px]">
                <hr>
                <span class="pt-5">Developed by group no. 3</span>
            </div>
        </div>
        <div class="box_2 ">
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
                <div class="flex mt-7 border p-2">
                    <img class="w-[100px] h-[100px] border rounded" width="100px" src="../img/<?php echo $row['anh'] ?>" alt="">
                    <div class="pl-5 py-5">
                        <strong><?php echo $row['tenHH'] ?></strong>
                        <span class="block"><?php echo $row['mauSac'] ?></span>
                        <span class="block">Sl:<?php echo $row['so_luong'] ?></span>
                    </div>
                    <p class="py-5 pl-[100px]">Giá: <?php echo number_format($thanh_tien) ?>₫</p>
                </div>
            <?php
            }

            ?>
            <div class="pt-5 flex">
              
                <h3 class="text-lg">Tổng chi phí :</h3>          
                <h3 class="price"><?php echo number_format($tongtien) ?> ₫</h3>
                
            </div>
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
            width: 350px;
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
            padding-right: 35px;
            width: 738px;
         
            
        }

        .box_2 {
            padding-left: 100px;
            width: 738px;
            
        }
    </style>
    <script>

    </script>