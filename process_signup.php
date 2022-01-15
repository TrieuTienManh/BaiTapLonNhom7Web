<?php
    // một số kỹ thuật validate được sử dụng ở javascript
    if(isset($_POST['btnSignUp'])){
        header("location: Signup.php");
    }
    // coi như dữ liệu là hợp lệ
    $user = $_POST['txtUsername'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPassword1'];
    $pass2 = $_POST['txtPassword2'];
    // mục tiêu: chèn bản ghi đăng ký tài khoản vào csdl nhưng phải kiểm tra xem nó đã tồn tại hay chưa
    // bước 1: Kiểm tra kết nối database server
    $conn = mysqli_connect('localhost','root','','db_qlreddit');
    if(!$conn){
        die("kết Nối Với Server Thất Bại");
    }
    //bước 2: Thực Hiện truy vấn 
    $sql01 = "SELECT * From tb_taikhoan Where Email = '$email'  Or TenDangNhap = '$user'";

    $result01 = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result01) > 0){
        $error = "Username or Email is existed.";
        header("location: Signup.php?error=$error"); // Cho nó trở về trang Sign Up và hiện thông báo lỗi
    }
    else{
        if($pass1 == $pass2){
            // $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql02 = "INSERT INTO tb_taikhoan(TenDangNhap,Email,MatKhau) VALUES('$user', '$email', '$pass1')";
            $result02 = mysqli_query($conn,$sql02);
            if($result02 == true){
                header("location: Login.php");
            }
            else{
                $error = "Username or Email is existed.";
                header("location: Signup.php?error=$error"); // Cho nó trở về trang Sign Up và hiện thông báo lỗi
            }
        }
        else{
            $error = "Mật Khẩu Phải Nhập Trùng Nhau.";
            header("location: Signup.php?error=$error"); // Cho nó trở về trang Sign Up và hiện thông báo lỗi
        }
    }
    // bước 3: đóng kết nối
    mysqli_close($conn);

?>