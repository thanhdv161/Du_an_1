      
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Đăng Nhập</h3>
                    <form action="../view/login/login_user.php" method="post" >
        <div><input type="email" name="email" placeholder="Email" id="email" class="inp33"></div>
        <div><input type="password" id="password" name = "password" placeholder="Mật khẩu" class="inp33"></div>
        <div class="login2">
            <div class="text-left">
                <button class="px-5  text-black py-2  slide_right " type="submit">Đăng nhập</button>
            </div>
            <div class="text-left2">
                <a href="http://localhost/duan1/view/index.php?act=quenmk" class="mr-2">Quên mật khẩu?</a>hoặc <a href="../view/index.php?act=dangki">Đăng kí</a>
            </div>
        </div>
    </form>
                </div>
            </div>
        </section>
        
        
        <style>
            .text-left{
                width: 200px;
            }
            .login2{
                display: flex;
                width: 400px;
                margin-left: 386px;
            }
            .text-left2{
              width: 200px;  
              margin-top: 20px;
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