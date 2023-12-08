
function validate() {
    var name = document.querySelector("#productName");
    if(name.value == ""){
        alert("Bạn chưa nhập tên");
        name.style.backgroundColor = "yellow";
        name.focus();
        return false;
    }else{
        name.style.backgroundColor = "white";
    }
    var price = document.querySelector("#productPrice");
    if(price.value <=0){
        alert("Bạn chưa nhâp giá");
        price.style.backgroundColor = "yellow";
        price.focus();
        return false;
    }
    else{
        price.style.backgroundColor = "white";
    }
    var size = document.querySelector("#productSize");
    if(size.value <=0){
        alert("Bạn chưa nhập size");
        size.style.backgroundColor = "yellow";
        size.focus();
        return false;
    }
    else{
        size.style.backgroundColor = "white";
    }
    var color = document.querySelector("#productColor");
    if(color.value == ""){
        alert("Bạn chưa nhập màu");
        color.style.backgroundColor = "yellow";
        color.focus();
        return false;
    }else{
        color.style.backgroundColor = "white";
    }
}
function validate_lienhe(){
   
    var name = document.getElementById("name");
    if(name.value==""){
        alert("Bạn chưa nhập tên");
        name.style.backgroundColor = "red";
        name.focus();
        return false;
    }
    else{
        name.style.backgroundColor="white";
    }
    var email = document.getElementById("email");
    if(email.value==""){
        alert("Vui lòng nhập email");
        email.style.backgroundColor="red";
        return false;
    }
    else{
        name.style.backgroundColor="white";
    }
    var phone = document.getElementById("phone");
    if(phone.value==""){
        alert("Vui lòng nhập số điện thoại!");
        phone.style.backgroundColor="red";
        return false;
    }
    else{
        phone.style.backgroundColor="white";
    }
    var content = document.getElementById("content");
    if(content.value==""){
        alert("Mời bạn góp ý");
        content.style.backgroundColor="red";
        return false;
    }
    else{
        name.style.backgroundColor="white";
    }
}

function validate_adduser(){
    var useName = document.getElementById("tenTK");
    if(useName.value==""){
        alert("Mời bạn nhập tên");
        useName.style.backgroundColor="yellow";
        return false;
    }
    else{
        useName.style.backgroundColor="white";
    }
    var email = document.getElementById("email");
    if(email.value==""){
        alert("Mời bạn nhập email");
        email.style.backgroundColor="yellow";
        return false;
    }
    else{
        email.style.backgroundColor="white";
    }
    var pass = document.getElementById("matKhau");
    if(pass.value==""){
        alert("Mời bạn nhập mật khẩu");
        pass.style.backgroundColor="yellow";
        return false;
    }
    else{
        pass.style.backgroundColor="white";
    }

}