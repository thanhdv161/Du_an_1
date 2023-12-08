      
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3 class="text-hdn">Đăng Nhập</h3>
                    <form action="../view/login/login_user.php" method="post" onsubmit="return  validateDangNhap()">
        <div><input type="email" name="email" placeholder="Email" id="email" class="inp33"></div>
        <div style="margin-bottom: 15px;"><input type="password" id="password" name = "password" placeholder="Mật khẩu" class="inp33"></div>
        <div class="login2">
            <div class="text-left">
                <button class="btn-gui" type="submit">Đăng nhập</button>
            </div><br>
            <div class="text-left2">
                <a href="http://localhost/duan1/view/index.php?act=quenmk
                " class="mr-2" style="color: black;">Quên mật khẩu?</a>hoặc&nbsp;  <a href="../view/index.php?act=dangki" style="color: black;">Đăng kí</a>
            </div>
        </div>
    </form>
                </div>
            </div>
        </section>
        
        <style>
            .text-left{
                width: 120px;
            }
            .login2{
                display: flex;
                width: 400px;
                margin-left: 370px;
            }
            .text-left2{
              width: 250px;  
              margin-top: 20px;
              color: black;
         
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
    <!--================End Categories Banner Area =================-->
    <script>
        function validateDangNhap() {
    var email = document.getElementById("email").value;
    console.log("Email: " + email);
    if (email == "") {
        alert("Không được để trống email");
        document.getElementById("email").focus();
        return false;
    } else {
        document.getElementById("email").style.backgroundColor = "white";
    }
    var password = document.getElementById("password").value;
    if (password == "") {
        alert("Không được để trống Password");
        document.getElementById("password").focus();
        return false;
    } else {
        document.getElementById("password").style.backgroundColor = "white";
    }
    
}
    </script>