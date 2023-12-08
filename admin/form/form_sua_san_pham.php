<?php 
$id = $_GET['id'];
$query = "select * from hanghoa where maHH = $id";
$category = getOne($query);
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sản Phẩm > Update sản phẩm</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12">
                <div class="white-box row">
                    <?php
                        $arr = explode(",", $category['anh']);
                        foreach ($arr as $key => $value){
                        echo'<img width="100%" alt="user" src="../img/'.$value.'" class="border col-6">';
                        }
                    ?>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="" onsubmit="return validate();">
                            <input type="hidden" name="maHH" value="<?php echo $category['maHH']; ?>">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên Sản Phẩm</label><br>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="tenHH" value="<?php echo $category['tenHH']?>" id="productName" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="dongia" class="col-md-12 p-0">Đơn Giá</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="gia" min="1000000" max="100000000" value="<?php echo $category['gia']?>" id="productPrice" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Giá Gốc</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="giaGoc" min="1000000" max="100000000" id="productDiscount" value="<?php echo $category['giaGoc']?>" required>
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Màu sắc</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="mauSac" id="productColor" value="<?php echo $category['mauSac']  ?>" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Hình Ảnh</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="anh[]" class="form-control p-0 border-0" multiple>
                                    <input type="hidden" name="oldImage" value="<?php echo $category['anh']; ?>">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mô Tả</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" class="form-control pl-4 border-0" name="moTa" id="productDesc" required>
                                        <?php echo $category['moTa']?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Danh mục</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none p-0 border-0 form-control-line" name="maLoai">
                                        <?php
                                        $category = getAll("select * from danhmuc");
                                        foreach ($category as $cate) :
                                        ?>
                                            <option <?php echo $cate['maLoai'] == $cate['maLoai'] ? "checked" : "" ?> value="<?php echo $cate['maLoai'] ?>"> <?php echo $cate['tenLoai'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit" name="submit">Update Sản Phẩm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->

    </div>

    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<script src="../js/validate.js"></script>