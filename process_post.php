<?php
    //  trước khi cho người dùng vào bên trong phải kiểm tra xem có vé chưa
    session_start();
    if(!isset($_SESSION['isloginok'])){
        header('location: Login.php');
    }
?>

<?php
// login truyền Dữ liệ sang: Nhập dữ liệu từ login sang
   if(isset($_POST['btnPost'])){
       $TieuDe = $_POST['txtTitle'];
       $NoiDung = $_POST['txtContent'];
       $AnhBaiViet = $_POST['txtImg'];
        // bước 1: Kiểm tra kết nối database server
        $conn = mysqli_connect('localhost','root','','db_qlreddit');
        if(!$conn){
            die("kết Nối Với Server Thất Bại");
        }
        //bước 2: Thực Hiện truy vấn 
        $sql1 = "SELECT nd.MaNguoiDung, nd.TenNguoiDung, nd.Anh, tk.Email FROM tb_taikhoan tk, tb_ttnguoidung nd WHERE (tk.Email=  '{$_SESSION['isloginok']}' OR tk.TenDangNhap =  '{$_SESSION['isloginok']}') AND nd.MaNguoiDung = tk.MaNguoiDung";
        $result1 = mysqli_query($conn,$sql1);
        
        if(mysqli_num_rows($result1) > 0){
            $row = mysqli_fetch_assoc($result1);
            $MaNguoiDung = $row['MaNguoiDung'];

            // Thêm Bản Ghi Vào CSDL NÈ
            $sql2 ="INSERT INTO tb_baiviet(MaNguoiDung, TieuDe, NoiDung, AnhBaiViet) VALUES('$MaNguoiDung','$TieuDe','$NoiDung','$AnhBaiViet')";
            $result2 = mysqli_query($conn,$sql2);
            if(!$result2){
                header("location: Post.php?error=$error"); // về trang post
            }else{
                header("location: Home.php"); // về trang Chủ
            }

        }else{
            $error = "Đăng Bài Thất Bại";
            header("location: Post.php?error=$error"); // về trang post
        }
        // bước 3: đóng kết nối
        mysqli_close($conn);
   }else{
       header("location: Post.php");
   }

?>