<?php
        $user = $_POST['txtUser'];
        $email = $_POST['txtEmail'];
        $pass1 = $_POST['txtPass'];
        $pass2 = $_POST['txtPass2'];

        // Bước 01: Kết nối Database Server
        require_once 'config/database.php';
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql01 = "SELECT * FROM tb_member WHERE email = '$email'";
    
    $result = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result) > 0){
        // CẤP THẺ LÀM VIỆC
        $error = "Email is exsted";
        header("location:trangchu.php?error=$error"); //Chuyển hướng về Trang quản trị
    }else{
        $sql = "INSERT INTO tb_member(name, email, password) VALUES('$user', '$email', '$pass1')";
        $result = mysqli_query($conn,$sql);
        if($result ==true){
            // CẤP THẺ LÀM VIỆC.
            header("location:login.php"); 
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location:trangchu.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
    }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
   
?>