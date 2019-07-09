<?php 
    require "connect.php";

    $user = $_GET['user'];

    $sql = "DELETE FROM tb_member WHERE user = '$user' ";

    mysqli_query($con, $sql) or die(mysqli_error($con));
    
    header("Location:show_member.php");
?>