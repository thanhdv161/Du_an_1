<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sản Phẩm > Thêm mới sản phẩm</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Trang quản trị</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
    <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12 " id="boxImg">
                <p>Xem trước hình ảnh</p>
                <div class="white-box">
                    <img width="100%" alt="user" src="" class="prev">
                </div>
                <div class="white-box">
                    <img width="100%" alt="user" src="" class="prev">
                </div>
                <div class="white-box">
                    <img width="100%" alt="user" src="" class="prev">
                </div>
                <div class="white-box">
                    <img width="100%" alt="user" src="" class="prev">
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên sản phẩm</label><br>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="tenHH" id="tenHH" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="dongia" class="col-md-12 p-0">Giá bán</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="gia" id="gia">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Giá gốc</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="giaGoc" id="giaGoc">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Màu sắc</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="mauSac" id="mauSac">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Hình Ảnh</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="anh[]" class="form-control p-0 border-0" multiple id="picture">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mô Tả</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" class="form-control pl-4 border-0" name="moTa" id="moTa">
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
                                            <option value="<?php echo $cate['maLoai'] ?>"> <?php echo $cate['tenLoai'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit" name="submit">Add Sản Phẩm</button>
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
</div>
<script>
    var picture = document.querySelector("#picture");
    var boxImg = document.querySelector("#boxImg");
    picture.addEventListener("change", function(e) {
        var arrayImg = picture.files;
        if(arrayImg.length <=4){
            var img = document.querySelectorAll(".prev");
            for (var i = 0; i < img.length; i++) {
                img[i].src = URL.createObjectURL(picture.files[i]);
            }
        }else{
            alert("tải lên không thành công!");
            return;
        }
    })
</script>
<script src="../js/validate.js"></script>