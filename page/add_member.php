<?php 
    
    include "connect.php";

    $user = $_POST['user'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];

    $province = $_POST['province'];
    
    $fav = array();

    if(isset($_POST['fav_a'])) array_push($fav, $_POST['fav_a']);
    
    
    if(isset($_POST['fav_b'])) array_push($fav, $_POST['fav_b']);
    
    
    $fav = implode(" , ", $fav);

    $sql = "INSERT INTO tb_member 
            VALUES ('$user', '$age', '$sex', '$fav', '$provice') ";

    mysqli_query($con, $sql) or die(mysqli_error($con));

    header("Location:show_member.php");
    
?>