


<div class="w-[500px] mx-auto container text-center">
        <h3 class="text-4xl font-bold my-5">Phục hồi mật khẩu</h3>
        <form action="./login/set_pass.php" method="POST">

            <input type="email" name="email" id="" placeholder="Email" class="inp33">
            <div class="text-left2">
                <button class="px-5 text-black py-2  slide_right">Gửi</button>
                <a href="http://localhost/du_an_1/view/index.php?act=home" style="color: black;">Hủy</a>
            </div>
        </form>

    </div>




<style>
    .text-left2{
              width: 200px;  
              margin-top: 20px;
              margin-left: 360px;
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