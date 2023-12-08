<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Danh Mục > Add Danh Mục</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        
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
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="post"  action="./index.php?act=addlh">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên Danh Mục</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" required class="form-control p-0 border-0" name="tenLoai" value="<?php echo isset($_POST['tenLoai'])?$_POST['tenLoai']:"" ?>" >
                                </div>
                                <p <?php echo isset($error['danhmuc'])?"":"hidden" ?> class="alert alert-warning"><?php  if(isset($error['danhmuc'])){
                                    echo $error['danhmuc'];
                                } ?></p>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit" name="submit">Add Danh Mục</button>
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