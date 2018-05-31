<?php 
    if (isset($_SESSION['taikhoan']))
        unset($_SESSION['taikhoan']);
    session_start();
    session_destroy();     
    header('Location: index.php');
    exit();
?>