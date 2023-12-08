<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Khách Hàng > Add User</h4>
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
                <div class="white-box">
                    <img width="100%" alt="user" src="../img/avartar.jpg">
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form class="form-horizontal form-material" method="post" action="../customer/dang_ki.php" enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên tài khoản</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="tenTK" id="tenTK" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" class="form-control p-0 border-0" name="email" id="email" required>
                                    <span style="color: red;"><?php echo isset($_GET['error']) ? "Email này đã tồn tại vui lòng nhập một email khác" : ""; ?></span>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mật Khẩu</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="matKhau" id="matKhau" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Hình Ảnh</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="anh" class="form-control p-0 border-0" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Số điện thoại</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="tel" class="form-control p-0 border-0" pattern="[0-9]{10}" required title="Vui lòng nhập số điện thoại 10 chữ số" name="sdt" id="sdt" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Địa chỉ</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="diaChi" id="diaChi" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="vai_tro" class="col-md-12 p-0">Chọn vai trò của bạn:</label>
                                <select name="maVaiTro" id="maVaiTro" class="form-select shadow-none p-0 border-0 form-control-line">
                                    <option value="2">Khách hàng</option>
                                    <option value="4">Quản trị viên</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit" name="submit">Add</button>
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
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>