<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['gio_hang']);
    header('Location:http://localhost/duan1/view/index.php?act=home');