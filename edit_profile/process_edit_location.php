<?php
    $id = $_POST['txtid'];
    $country = $_POST['txtcountry']; 
    $hometown = $_POST['txthometown']; 
    require_once '../config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE tb_member SET location='$country', hometown='$hometown' WHERE user_id=$id";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "<script type='text/javascript'>alert('Nhập sai');</script>";
    }else{
        header("location: ../edit_profile.php?id=$id"); 
    }

    mysqli_close($conn);
?>