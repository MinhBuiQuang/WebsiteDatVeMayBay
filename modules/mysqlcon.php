<?php 
    DEFINE('DB_USER', 'root');
    DEFINE('DB_PWD', '');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'banvemaybay');
    $con = mysqli_connect(constant('DB_HOST'), constant('DB_USER'), constant('DB_PWD'), constant('DB_NAME'));
    if ($con) {
        mysqli_set_charset($con, 'utf-8');         
    }
    else {
        echo "Kết nối thất bại";
    }
?>