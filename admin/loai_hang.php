<?php
     $danhmuc = loadalldanhmuc();
     if (isset($_POST['search']) && $_POST['search']) {
         $search = $_POST['search'];
         $query = "select * from danhmuc where  tenLoai like '%$search%' or tenLoai = '$search'";
         $danhmuc = getAll($query);
     }
?>
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Danh Mục</p>
        <div class="d-flex form-group">
            <form action="" class="mx-2 border" method="post">
                <input type="text" class="p-1 " placeholder="tìm kiếm" name="search" required>
                <button class="btn btn-success text-white" type="submit">Tìm kiếm</button>
            </form>
            <a href="http://localhost/duan1/admin/index.php?act=addlh">
                <button class="btn btn-success text-white">Thêm mới+</button>
            </a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bảng thống kê Danh Mục</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên Danh Mục</th>
                                    <th class="border-top-0">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($danhmuc as $dm): ?>
                                <tr>
                                    <td>
                                        <?php echo $dm['maLoai']?>
                                    </td>
                                    <td>
                                        <?php echo $dm['tenLoai']?>
                                    </td>
                                    
                                    <td >
                                        <a href="http://localhost/duan1/admin/index.php?act=updatelh&id=<?php echo $dm['maLoai']?>">
                                            <button type="button" class="btn btn-primary">Sửa</button>
                                        </a>
                                        <a  onclick="return confirm_danhmuc('<?php echo $dm['tenLoai'];?>')" href="./index.php?act=deletelh&id=<?php echo $dm['maLoai']?>">
                                            <button type="button" class="btn btn-danger text-white">Xoá</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>