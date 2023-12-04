
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
                                        <h5><?php echo number_format($hanghoa['gia']) ?>đ</h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!--================kết thúc top sản phẩm =================-->
                </div>
                        <div class="col-lg-9">
                            <div class="content_sub">
                                <div class="image_content">
                                    <a href=""><img src="../img/blog/Apple-M3-Ultra.png" alt=""></a>
                                </div>
                                <div class="title_content">
                                    <a href="" class="loaitin"><p>Tin công nghệ</p></a>
                                    <a href="" class="title"><p>Chip Apple M3 Ultra có thể sở hữu GPU 80 nhân</p></a>
                                    <a href="" class="demo"><p>Một báo cáo vừa đề xuất rằng, chip M3 Ultra của Apple có thể sở hữu tới 80 lõi đồ họa, hứa hẹn mang tới trải nghiệm sử dụng tuyệt vời cho người dùng.</p></a>
                                    <span>11/11/2023</span>
                                </div>
                            </div>
                            <div class="content_sub">
                                <div class="image_content">
                                    <a href=""><img src="../img/blog/Apple-MacBook-Pro-1.png" alt=""></a>
                                </div>
                                <div class="title_content">
                                    <a href="" class="loaitin"><p>Tin công nghệ</p></a>
                                    <a href="" class="title"><p>Chip Apple M3 Ultra có thể sở hữu GPU 80 nhân</p></a>
                                    <a href="" class="demo"><p>Một báo cáo vừa đề xuất rằng, chip M3 Ultra của Apple có thể sở hữu tới 80 lõi đồ họa, hứa hẹn mang tới trải nghiệm sử dụng tuyệt vời cho người dùng.</p></a>
                                    <span>11/11/2023</span>
                                </div>
                            </div>
                            <div class="content_sub">
                                <div class="image_content">
                                    <a href=""><img src="../img/blog/Samsung-Galaxy-S24-Ultra-Bezels-1.png" alt=""></a>
                                </div>
                                <div class="title_content">
                                    <a href="" class="loaitin"><p>Tin công nghệ</p></a>
                                    <a href="" class="title"><p>Chip Apple M3 Ultra có thể sở hữu GPU 80 nhân</p></a>
                                    <a href="" class="demo"><p>Một báo cáo vừa đề xuất rằng, chip M3 Ultra của Apple có thể sở hữu tới 80 lõi đồ họa, hứa hẹn mang tới trải nghiệm sử dụng tuyệt vời cho người dùng.</p></a>
                                    <span>11/11/2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>