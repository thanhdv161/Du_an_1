
<section class="feature_product_area">
            <div class="container">
                <div class="f_p_inner">
                    <div class="row">
                        <div class="col-lg-3">
                            <!--================top sản phẩm =================-->
                            <div class="f_product_left">
                                <div class="f_product_inner">
                                    <div class="s_m_title">
                                        <h2>Top sản phẩm</h2>
                                    </div>
                                    <?php foreach ($topsp as $hanghoa) : ?>
                                    <div class="media">
                                        <div class="d-flex">
                                        <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                                                    <img style="width: 80px;" src="../img/<?php $arr = explode(",", $hanghoa['anh']);
                                                                                                    echo $arr[0];
                                                                                                    ?>" alt=""></a>
                                        </div>
                                        <div class="media-body">
                                            <h4><?php echo $hanghoa['tenHH'] ?></h4>
                                            <h5><?php echo number_format($hanghoa['gia'])?>đ</h5>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                             <!--================kết thúc top sản phẩm =================-->
                        </div>
                        <div class="col-lg-9">
                            <div class="s_m_title">
                                <h2>Tất cả sản phẩm</h2>
                            </div>
                            <div class="sanpham-flex">
                                <?php foreach ($product as $hanghoa) : ?>
                                    <div class="sanphamdanhmuc">
                                        <div class="l_product_item">
                                            <div class="l_p_img">
                                                <a href="./index.php?act=chitietsanpham&id=<?php echo $hanghoa['maHH'] ?>">
                                                <img src="../img/<?php $arr = explode(",", $hanghoa['anh']);echo $arr[0];?>" alt=""></a>
                                            </div>
                                            <div class="l_p_text">
                                                <ul>
                                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                                    <li><a class="add_cart_btn" href="">Add To Cart</a></li>
                                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                                </ul>
                                                <h4><?php echo $hanghoa['tenHH'] ?></h4>
                                                <h5><?php echo number_format($hanghoa['gia'])?>đ  <del><?php echo number_format($hanghoa['giaGoc'])?>đ</del></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>