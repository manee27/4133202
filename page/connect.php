<?php 
    
    $host = "localhost";
    $root = "root";
    $password = "";
    $database = "db_4133202";

    $con = mysqli_connect($host, $root, $password, $database) 
    or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : ".mysqli_connect_error());

    mysqli_set_charset($con, "utf8");
?>