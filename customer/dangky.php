


<div class="w-[500px] mx-auto container text-center">
        <h3 class="text-hdn">Đăng ký tài khoản</h3>
        <form action="../customer/create_user.php" method="POST" enctype="multipart/form-data">
        
            <input type="email" name="email" id="" placeholder="Email" class="inp33" required>
            <div><span style="color: red;"><?php echo isset($_GET['error']) ? "Email này đã tồn tại vui lòng nhập một email khác" : ""; ?></span></div>
            <input type="text" name="tenTK" id="" placeholder="Tên Tài Khoản" class="inp33" required><br>
            <input type="password" name="matKhau" id="" placeholder="Mật Khẩu" class="inp33" required><br>
            <input type="file" name="anh" id="" class="inp33" required><br>
            <input type="text" value="2" name="maVaiTro" hidden>
            <input type="tel" name="sdt" id="" pattern="[0-9]{10}" required title="Vui lòng nhập số điện thoại 10 chữ số" placeholder="Số Điện Thoại" class="inp33" required><br>
            <input type="text" name="diaChi" id="" placeholder="Địa Chỉ" class="inp33" required>
            <div class="text-left2">
                <button class="btn-gui" type="submit" name="submit1" >Đăng Kí</button>
                <a href="http://localhost/duan1/view/index.php?act=dangnhap" style="color: black;">Hủy</a>
            </div>
        </form>

    </div>




<style>
    .text-left2{
              width: 200px;  
              margin-top: 20px;
              margin-left: 330px;
             
            }
      .inp33{
                width: 400px;
                height: 50px;
                margin: 10px;
            }
    .button_slide {
        color: #FFF;
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
</style>