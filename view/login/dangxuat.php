<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['gio_hang']);
    header('Location:http://localhost/du_an_1/view/index.php?act=home');