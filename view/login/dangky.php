


<div class="w-[500px] mx-auto container text-center">
        <h3 class="text-4xl font-bold my-5">Tạo Tài Khoản</h3>
        <form action="../view/login/create_user.php" method="POST" enctype="multipart/form-data">

            <input type="email" name="email" id="" placeholder="Email" class="inp33"><br>
            <input type="texk" name="tenTK" id="" placeholder="Tên Tài Khoản" class="inp33"><br>
            <input type="password" name="matKhau" id="" placeholder="Mật Khẩu" class="inp33"><br>
            <input type="file" name="anh" id="" class="inp33"><br>
            <input type="text" value="2" name="maVaiTro" hidden>
            <input type="text" name="sdt" id="" placeholder="Số Điện Thoại" class="inp33"><br>
            <input type="text" name="diaChi" id="" placeholder="Địa Chỉ" class="inp33">
            <div class="text-left2">
                <button class="px-5 text-black py-2  slide_right" type="submit" name="submit1" >Đăng Kí</button>
                <a href="http://localhost/du_an_1/view/index.php?act=home" style="color: black;">Hủy</a>
            </div>
        </form>

    </div>




<style>
    .text-left2{
              width: 200px;  
              margin-top: 20px;
              margin-left: 370px;
             
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