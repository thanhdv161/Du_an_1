
<div class="container mx-auto text-center">
    <h1 style="margin-top: 30px;" class="text-hgh">Giỏ hàng của bạn</h1>
    <p style="font-size: 15px;">
        <?php
        if ($success) {
            echo $success;
        } else {
            echo "Có " . count($result) . " sản phẩm trong giỏ hàng";
        }
        ?>
    </p>
    <?php //var_dump($_SESSION["gio_hang"]); die; 
    ?>
    <div class="">
        <form action="../customer/add_cart.php?update" class="flex justify-between items-center p-2" method="post">
            <table>
                <tbody>
                    <tr class="border">
                        <?php
                        $tongtien = 0;
                        $so_luong = 0;
                        foreach ($result as $row) {
                            $thanh_tien = $row['gia'] * $row['so_luong'];
                            $tongtien += $thanh_tien;
                            $so_luong += $row['so_luong'];
                        ?>
                            <input type="hidden" name="maHH[]" value="<?php echo $row['maHH']; ?>">
                            <td class="py-5">
                                <img class="img" src="../img/<?php echo $row['anh'] ?>" alt="">
                            </td>
                            <td class="text-left py-5 pl-3.5 w-[630px] container border-b-2">
                                <div class="flex justify-between">
                                    <label class="text-black"><?php echo $row['tenHH'] ?></label>
                                    <a href="../customer/delete_gio_hang.php?id=<?php echo $row['maHH'] ?>">
                                        <span> <svg style="color: black;"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                               <span><?php echo number_format($row['gia']) ?>đ</span>
                                <div><span><?php echo $row['mauSac'] ?></span></div>
                                <div class="flex justify-between">
                                    <div class="my-3 flex">
                                        <span class="fix" id="counting" class="border text-center w-[70px] font-bold flex justify-center items-center">
                                            <input type="number" name="productSlUpdate[]" style="width: 60px;text-align: center;padding-left: 10px;" value="<?php echo $row['so_luong'] ?>" min="1">
                                            <span style="float: right;margin-right: 80px;" class="thanhtien"><?php echo number_format($thanh_tien) ?>đ</span>
                                        </span>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                            </td>
                    </tr>
                <?php
                        }
                ?>
                </tbody>
            </table>
            <div class="flex flex-col">
                <p style="font-size: 18px;">Tổng tiền:&ensp;<span style="font-size: 20px;" class="text-black"><?php echo number_format($tongtien) ?>đ</span></p><br>
                <div style="text-align: center;margin-bottom: 30px;">
                    
                        <a style="padding: 13px 50px;" class="btn-gioh" href="http://localhost/duan1/view/index.php?act=sanphamdanhmuc" >
                            Tiếp tục mua hàng</a>
                    
                    <button class="px-5 py-2 btn-gioh" type="submit" onclick="submitForm()" name="update">Cập nhật</button>
                    <a href="" class="w-full" <?php echo count($result) == 0 ? "hidden" : "" ?>> <br>
                    <div><a style="padding: 13px 154px;" class="btn-thanhtoan " href="http://localhost/duan1/view/index.php?act=thanhtoan">
                        Thanh toán</a></div>
                </div>
                
            </div>
            
        </form>
    </div>

</div>
<script>
    const myTimeout = setTimeout(function() {
        var thongbao = document.querySelectorAll('.toast');
        thongbao.forEach(function(item) {
            item.classList.add('hidden');
        })
    }, 2000)
    
</script>
<script>
        function submitForm() {
            alert("Bạn đã cập nhật thành công đơn hàng");
        }
    </script>
<style>
  
   .text-left2.text-black.button_slide {
    width: 250px;
   margin-bottom: 10px;
   margin-left: 10px;
   background-color: pink;
   }
    .border.p-5{
       background-color: pink;
       width: 20%;
      height: 50px;
    }
    .thanhtien{
        margin-left: 600px;
    }
    .px-5.text-black.py-2{
        margin: 4px;
    }
    .text-left.py-5{
        width: 941px;
    }
    .py-5{
        width: 200px;
    }
    .img {
        width: 200px;
        height: 200px;
    }

    .w-5.h-5.inline {
        width: 40px;
        margin-top: 2px;
        height: 31.4px;
        margin-left: 800px;
        color: red;
    }

    .text-left2 {
        width: 800px;
        margin-top: 20px;
        margin-left: 370px;

    }

    .button_slide {
        color: black;
        border: 2px solid;
        border-radius: 0px;
        padding: 18px 36px;
        display: inline-block;

        font-size: 14px;
        letter-spacing: 1px;
        cursor: pointer;
        box-shadow: inset 0 0 0 0 #faf5f8;
        -webkit-transition: ease-out 0.4s;
        -moz-transition: ease-out 0.4s;
        transition: ease-out 0.4s;
    }

    .slide_right:hover {
        box-shadow: inset 400px 0 0 0 #faf5f8;
        color: black;
    }

    .slide_right1:hover {
        box-shadow: inset 400px 0 0 0 #faf5f8;
        color: red;
    }
</style>