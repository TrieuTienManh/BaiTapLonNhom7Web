<?php
// Import đoạn cấu hình B1
require 'dbConfig.php';
$statusMsg = ''; // Tạo 1 biến để lưu lại trạng thái upload nhằm mục tiêu phả hồi lại cho người dùng

// Động tác thiết lập Upload
$targetDir = "uploads/"; // Thư mục chỉ định nằm trong cùng BTL để lưu trữ tệp tải lên
$fileName = basename($_FILES["myFile"]["name"]);


$targetFilePath = $targetDir . $fileName;

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// B2 Kiểm tra người dùng xem đã nhấn Submit chưa và File đã được chọn chưa
if(isset($_POST["sbmUpload"]) && !empty($_FILES["myFile"]["name"])){
    // Khai báo biển Mảng để lưu trữ các ĐỊNH DẠNG mà bạn cho phép upload lên
    if(file_exists($targetFilePath)){
        echo "Tệp tin đã tồn tại";
    }else{
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)){
            // Lưu đường dẫn vào CSDL
            $sql = "INSERT into db_images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())";
            $insert = mysqli_query($db, $sql);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("location: show.php");
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>