<?php 
    require "connect.php";

    $provice = $_POST['provice'];

    
    $fav = array();

    if(isset($_POST['fav_a'])) array_push($fav, $_POST['fav_a']);
    if(isset($_POST['fav_b'])) array_push($fav, $_POST['fav_b']);

    
    $fav = implode(" , ", $fav);
    
    $result = mysqli_query($con, "SELECT * FROM tb_member WHERE user = '{$_GET['name']}' ");
    $rows = mysqli_fetch_assoc($result);
    
    if(!isset($_POST['sex'])) $sex = $rows['sex'];
    else $sex = $_POST['sex'];
    
    if(!isset($_POST['fav_a']) && !isset($_POST['fav_b'])) $fav = $rows['favorite']; 


    $sql = "UPDATE tb_member 
            SET user= '{$_POST['user']}', age='{$_POST['age']}'
            ,sex='$sex', favorite='$fav', province='$provice' WHERE user = '{$_GET['name']}' ";
    
    mysqli_query($con, $sql);

    include "show_member.php";
?>