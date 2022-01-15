<?php
// Tạo session: Mặc định mỗi phiên làm việc có thời hạn 24p
    session_start();
// login truyền Dữ liệ sang: Nhập dữ liệu từ login sang
   if(isset($_POST['btnSignIn'])){
       $email = $_POST['txtEmail'];
       $pass = $_POST['txtPassword'];

        // bước 1: Kiểm tra kết nối database server
        $conn = mysqli_connect('localhost','root','','db_qlreddit');
        if(!$conn){
            die("kết Nối Với Server Thất Bại");
        }
        //bước 2: Thực Hiện truy vấn 
        $sql = "SELECT * From tb_taikhoan Where (Email = '$email' OR  TenDangNhap = '$email') AND MatKhau = '$pass'";
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result) > 0){
            $_SESSION['isloginok'] = $email;
            header("location: Home.php"); // chuyển hướng vô trang chủ quản trị

            // $row = mysqli_fetch_assoc($result);
            // //var_dump(password_hash('12345678', PASSWORD_DEFAULT));die;
            // // echo "{$row['MatKhau']}";
            // // echo "$pass";
            // if(password_verify($pass,$row["MatKhau"]))// so sánh kiểm chứng mật khẩu 
            // {
            //     $_SESSION['isloginok'] = $email;
            //     header("location: Home.php"); // chuyển hướng vô trang chủ quản trị
            // }else{
            //     $error = "Tài Khoản Hoặc Mật Khẩu Bạn Nhận Chưa Chính Xác";
            //     header("location: Login.php?error=$error"); // về trang khách
            // }
        }else{
            $error = "Tài Khoản Hoặc Mật Khẩu Bạn Nhận Chưa Chính Xác";
            header("location: Login.php?error=$error"); // về trang khách
        }
        // bước 3: đóng kết nối
        mysqli_close($conn);
   }else{
       header("location: Login.php");
   }

?>