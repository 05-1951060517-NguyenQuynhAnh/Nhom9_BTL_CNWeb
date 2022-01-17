
<?php
    $id = $_POST['txtid'];
   
    require_once '../config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE FROM tb_member  WHERE user_id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script type='text/javascript'>alert('đã xóa');</script>";
    }else{
        header("location:index.php"); 
    }

    mysqli_close($conn);
?>