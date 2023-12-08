<div class="w-[500px] mx-auto container text-center">
        <h3 class="text-hdn">Đặt lại mật khẩu</h3>
        <form action="../view/login/doipass.php" method="POST" onsubmit="return validate_setpass()">
            <input type="text" name="email" value="<?php echo $email?>" hidden>
            <input type="password" name="matKhau" id="pass" placeholder="Nhập mật khẩu mới" class="inp33"><br>
            <input type="password" id="repass" placeholder="Nhập lại mật khẩu" class="inp33">
            <div class="text-left2">
                <button class="btn-gui" >Gửi</button>
                <a href="http://localhost/duan1/view/index.php?act=dangnhap" style="color: black;">Hủy</a>
            </div>
        </form>

    </div>

<style>
     .text-left2{
              width: 200px;  
              margin-top: 20px;
              margin-left: 318px;
             
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
<script>
    function validate_setpass(){

var pass = document.getElementById("pass");
if(pass.value==""){
    alert("Bạn chưa nhập mật khẩu mới!");
    document.getElementById("pass").focus();
    return false;
}
var repass = document.getElementById("repass");
if(repass.value==""){
    alert("Bạn chưa nhập lại mật khẩu mới!");
    document.getElementById("repass").focus();
    return false;
}
if(pass.value != repass.value) {
    alert("Mật khẩu không trùng khớp");
    return false;
}

}
</script>