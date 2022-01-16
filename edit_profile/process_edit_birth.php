<?php
    $id = $_POST['txtid'];
    $day = $_POST['txtday']; 
    $gender = $_POST['txtgender']; 
    require_once '../config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE tb_member SET birthday='$day', gender='$gender' WHERE user_id=$id";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "<script type='text/javascript'>alert('Nhập sai');</script>";
    }else{
        header("location: ../edit_profile.php?id=$id"); 
    }

    mysqli_close($conn);
?>