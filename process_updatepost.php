<?php
    //  trước khi cho người dùng vào bên trong phải kiểm tra xem có vé chưa
    session_start();
    if(!isset($_SESSION['isloginok'])){
        header('location: Login.php');
    }
?>
<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $MaBaiViet = $_GET['id'];
    $TieuDe = $_POST['txtTitle'];
    $NoiDung = $_POST['txtContent'];
    $AnhBaiViet = $_POST['txtImg'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','db_qlreddit');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE tb_baiviet SET TieuDe ='$TieuDe',NoiDung ='$NoiDung', AnhBaiViet ='$AnhBaiViet' WHERE MaBaiViet =  $MaBaiViet";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: User.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: User.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>