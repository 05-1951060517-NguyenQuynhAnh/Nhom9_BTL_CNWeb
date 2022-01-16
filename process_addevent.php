<?php
    $name = $_POST['txtName'];
    $content = $_POST['txtContent'];
    $location = $_POST['txtLocation'];
    $time = $_POST['txtTime'];
    $atten = $_POST['txtAtten'];
    $img_gr = $_POST['txtImg_gr'];
    echo $id;
     
    $conn = mysqli_connect('localhost','root','','meetup');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql = "INSERT INTO tb_event (name,thoigian,content,location,atten,img_name) VALUES('$name','$time','$content','$location','$atten','$img_gr')";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: find.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    mysqli_close($conn);
?>