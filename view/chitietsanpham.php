
 <!--================Product Details Area =================-->
        <section class="product_details_area">
            <div class="container">
                <div class="chiahang">
                    <div class="hang1" style="margin-right: 140px;">
                        <div class="product_details_slider">
                            <div>
                                <img style="width: 400px;" id="mainImage" src="../img/<?php
                                                    $arr = explode(",", $hanghoa['anh']);
                                                    echo $arr[0];
                                                    ?>" class="sm:w-full border" alt="" id="imgProduct">
                            </div>
                            <div style="text-align: center; margin-top: 20px;">
                                <img class="anhbe" src="../img/<?php
                                                    $arr = explode(",", $hanghoa['anh']);
                                                    echo $arr[0]; 
                                                    ?>" onclick="changeImage('../img/<?php echo $arr[0]; ?>')" alt="">
                                <img class="anhbe" src="../img/<?php echo $arr[1]; ?>" onclick="changeImage('../img/<?php echo $arr[1]; ?>')" alt="">
                                <img class="anhbe" src="../img/<?php echo $arr[2]; ?>" onclick="changeImage('../img/<?php echo $arr[2]; ?>')" alt="">
                                <img style="width: 50px;" src="../img/<?php echo $arr[3]; ?>" onclick="changeImage('../img/<?php echo $arr[3]; ?>')" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="hang2">
                    <div class="kieuchu">
                    <div class="product_details_text">
                            <h3><?php echo $hanghoa['tenHH'] ?></h3>
                            <ul class="p_rating">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                    </div>
                            <div class="cotgia">
                                <label for="">Giá:&nbsp;</label>
                            <span style="color: red;"><?php echo number_format($hanghoa['gia'])?>đ</span>
                            <p><del><?php echo number_format($hanghoa['giaGoc'])?>đ</del></p>
                            </div>
                        <label class="text-black">Màu sắc:&ensp;</label>
                                <?php
                                $arrcolor = explode(",", $hanghoa['mauSac']);
                                ?>
                                <input type="radio" id="" name="productColor" value="<?php echo  $arrcolor[0] ?>" checked>
                                <label class="font-bold text-green-500 pr-4 pl-1 text-sm" for="<?php echo $arrcolor[0] ?>"><?php echo  $arrcolor[0] ?></label>
                                <input type="radio" id="" name="productColor" value="<?php echo  $arrcolor[1] ?>">
                                <label class="font-bold text-green-500 pr-4 pl-1 text-sm" for="<?php echo $arrcolor[1] ?>"><?php echo  $arrcolor[1] ?></label>
                        </div>
                        <label class="text-black">Ưu đãi đặc biệt:</label>
                        <div class="baohanh" style="margin-left: 10px;">
                        <img width="15px" src="../img/icon-v.png" alt=""><label for="">&ensp;Đặc quyền 2 năm bảo hành</label><br>
                        <img width="15px" src="../img/icon-v.png" alt=""><label for="">&ensp;Tặng sim Mobiphone 0đ trị giá 170.000Đ</label><br>
                        <img width="15px" src="../img/icon-v.png" alt=""><label for="">&ensp;Tặng Phiếu mua hàng 50,000đ</label>
                        </div><br>
                        <div class="btn-ct">
                            <button type="button" onclick="tru();">-</button>
                            <span">
                                <input class="soluong" type="text" value="1" id="count">
                            </span>
                            <button type="button" onclick="cong()">+</button>
                        </div><br>
                    
                        <a href="#"><button type="submit" class="addgh"  name="submit">THÊM VÀO GIỎ HÀNG</button><br><br></a>
                        
                         <!-- mo ta sp -->
                    <div class="p-2">
                        <h3 class="font-mota">Mô tả</h3>
                        <h3 class="font-mota">Đặc điểm nổi bật:</h3>
                        <p class="text-mota" style="width: 500px;">
                            <?php echo $hanghoa['moTa'] ?>
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </section><br><br><br>
        <!--================End Product Details Area =================-->

    <div class="min-h-min">
        <section class="bg-white container binhluanspct">
            <div style="margin-right: 80px;">
                <div>
                    <h2>Bình luận về sản phẩm</h2>
                </div>
                <!-- form comment -->
                <form method="post" action="../customer/binhluan.php?id=<?php echo $id; ?>">
                    <div>
                        <label for="comment" class="sr-only">Bình luận của bạn</label>
                        <textarea style="border-radius: 10px;" cols="70" rows="5" id="comment" <?php echo !isset($_SESSION['user']) ? "disabled" : ""; ?> name="comment" placeholder=" Nhập bình luận ở đây..." required></textarea>
                    </div>
                    <button class="guibl" type="submit" <?php echo !isset($_SESSION['user']) ? "disabled" : ""; ?>>
                        Gửi
                    </button>
                </form>
            </div>
                <!-- list comment -->
                <div>
                    <h2>
                    Danh sách bình luận
                    </h2>
                    <?php foreach ($comment as $binhluan) : ?>
                        <article class="ttbinhluan" >
                            <footer>
                                <div class="thongtinbl">
                                    <p style="margin-right: 10px;"><img width="20px" src="../img/<?php echo $binhluan['anh']?>">&emsp;<?php echo $binhluan['tenTK']?></p>
                                    <p><time><?php echo $binhluan['ngayBL']?></time></p>
                                </div>
                            </footer>
                            <p>
                                <?php echo $binhluan['noiDung']?>
                            </p>
                        </article>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
    </div>
    <!-- kết thúc comment -->
      <!-- san pham lien quan -->
      <section class="our_latest_product">
            <div class="container">
                <div class="s_m_title" style="text-align: center;">
                    <h2>Sản phẩm liên quan</h2>
                </div>
                <div class="l_product_slider owl-carousel">
                    <?php foreach ($splienquan as $hanghoa) : ?>
                        <div class="l_product_item">
                            <div class="l_p_img">
                            <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                            <img src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                                            echo $arr[0];
                                                                            ?>" alt=""></a>
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li><a class="add_cart_btn" href="../customer/add_cart.php?id=<?php echo $hanghoa['maHH'] ?>">Thêm Vào Giỏ Hàng</a></li>
                                </ul>
                                <h4><?php echo $hanghoa['tenHH'] ?></h4>
                                <h5><?php echo number_format($hanghoa['gia'])?>đ  <del><?php echo number_format($hanghoa['giaGoc'])?>đ</del></h5>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    <!-- kết thúc sp lien quan -->
    </div>                   
    <script>
        function changeImage(imagePath) {
            var mainImage = document.getElementById('mainImage');
            mainImage.src = imagePath;
        }
        var i = 1;

        function cong() {
        i++;
        if (i > 10) {
            i = 10;
        };
        document.querySelector('#count').value = i;
    }

    function tru() {
        i--;
        if (i < 1) {
            i = 1;
        };
        document.querySelector('#count').value = i;
    }
    </script>