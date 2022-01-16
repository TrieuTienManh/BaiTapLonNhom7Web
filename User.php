<?php
    //  trước khi cho người dùng vào bên trong phải kiểm tra xem có vé chưa
    session_start();
    if(!isset($_SESSION['isloginok'])){
        header('location: Login.php');
    }
?>
<?php
include("template/header.php");
?>
<?php
include("template/Navbar.php");
?>

                            
                            

<div class="container-fluid VungMain">
        <div class="container ps-5 pe-0 pt-3">
            <div class="row">
                <div class="col-md-12 ps-5 pe-5 d-flex">
                    <div class="col-md-8">

                        <div class="row pt-3">
                            <div class="col-md-11 ThanhDuoiPost">
                                <div class="row bg-light pt-2 pb-2">
                                    <form class="d-flex FormThanhDuoiPost">
                                        <div class="d-flex DuoiPostTrai">
                                            <button class="d-flex ps-4">
                                                <span class="material-icons pe-2">
                                                    local_fire_department
                                                </span>
                                                <div> Hot </div>
                                            </button>
                                            <button class="d-flex ps-4">
                                                <span class="material-icons pe-2">
                                                    new_releases
                                                </span>
                                                <div> New </div>
                                            </button>
                                            <button class="d-flex ps-4">
                                                <i class="bi bi-layer-forward pe-2"></i>
                                                <div> Top </div>
                                            </button>
                                            <button><i class="bi bi-three-dots ps-4"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="Row pt-3">
                            <div class="col-md-11">
                                <div class="row bg-light pt-2 pb-2">
                                    <h4>My Post</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                            <?php
                                // Bước 01: Kết nối Database Server
                                $conn = mysqli_connect('localhost','root','','db_qlreddit');
                                if(!$conn){
                                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                }
                                // Bước 02: Thực hiện truy vấn
                                $sqlh = "SELECT nd.TenNguoiDung, bv.TieuDe, bv.NoiDung, bv.AnhBaiViet, bv.MaBaiViet FROM tb_baiviet bv, tb_ttnguoidung nd, tb_taikhoan tk WHERE nd.MaNguoiDung = bv.MaNguoiDung And  tk.MaNguoiDung = bv.MaNguoiDung AND (tk.Email=  '{$_SESSION['isloginok']}' OR tk.TenDangNhap =  '{$_SESSION['isloginok']}')";
                                $resulth = mysqli_query($conn,$sqlh);
                                // Bước 03: Xử lý kết quả truy vấn
                                if(mysqli_num_rows($resulth) > 0){
                                    while($row = mysqli_fetch_assoc($resulth)){
                            ?>

                                <div class="row pt-3 BaiDang">
                                    <div class="col-md-11 bg-light">
                                        <div class="d-flex">
                                            <div class="col-md-1 pt-2">                                       
                                                <button id="nutthich" onclick="procVote()"><i class="bi bi-caret-up" id="thich"></i></button>
                                                <?php
                                                    // // Bước 02: Thực hiện truy vấn
                                                    // $sqlh9 = "SELECT SUM(Thich) As 'SoLuong' FROM tb_thich WHERE MaBaiViet = {$row['MaBaiViet']} ";
                                                    // $result9 = mysqli_query($conn,$sqlh9);
                                                    // echo "{$row['MaBaiViet']}";
                                                    // $row9 = mysqli_fetch_assoc($result9);
                                                ?>
                                                <div id="votes"> votes</div> <?php //echo $row9['SoLuong']; ?>
                                                <button id="nutkhongthich"><i class="bi bi-caret-down" id="khongthich"></i></button>
                                            </div>
                                            <div class="col-md-11 BenPhaiBaiDang">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="TenNguoiDang ps-4 d-flex">
                                                                <i class="bi bi-reddit ps-2 pe-2"></i>
                                                                <p>r/<?php echo $row['TenNguoiDung']; ?></p>
                                                            </div>
                                                            <h4> <?php echo $row['TieuDe']; ?></h4>
                                                            <div class="NoiDungBaiDang pt-2">
                                                                <?php echo $row['NoiDung']; ?>
                                                            </div>
                                                            <div class="TuongTacBaiDang pt-5 pb-2">
                                                                <form class="d-flex FormTuongTacBaiDang">
                                                                    <div class="d-flex TuongTacBaiDangOK">
                                                                        <button class="d-flex">
                                                                            <i class="bi bi-chat-left pe-1"></i>
                                                                            <div> Comments </div>
                                                                        </button>
                                                                        <button class="d-flex ps-3">
                                                                            <i class="bi bi-gift pe-1"></i>
                                                                            <div> Award </div>
                                                                        </button>
                                                                        <button class="d-flex ps-3">
                                                                            <i class="bi bi-share pe-1"></i>
                                                                            <div> Share </div>
                                                                        </button>
                                                                        <button class="d-flex ps-3">
                                                                            <i class="bi bi-box-arrow-down pe-1"></i>
                                                                            <div> Save </div>
                                                                        </button>
                                                                        <div class="dropdown">
                                                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="bi bi-three-dots ps-3 chuden"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                            <li><a href="process_delete.php?id=<?php echo $row['MaBaiViet']; ?>"><button class="dropdown-item" type="button">Delete</button></a></li>
                                                                            <li><a href="UpdatePost.php?id=<?php echo $row['MaBaiViet']; ?>"><button class="dropdown-item" type="button">Update</button></a></li>
                                                                        </ul>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pt-4 AnhBaiDang">
                                                        <img src="<?php echo $row['AnhBaiViet']; ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            }
                            // Bước 04: Đóng kết nối Database Server
                            mysqli_close($conn);
                            ?>

                    </div>

                    <!-- Main Phu -->
                    <div class="col-md-4 ps-0 PhanMainPhu">
                        <div class="col-md-10 bg-light">
                            <div class="row">
                                <div class="col-md-12 MainPhuPhan11 pt-5 ps-1">
                                    <div class="card AnhUser2" >
                                        <?php
                                            // Bước 01: Kết nối Database Server
                                            $conn = mysqli_connect('localhost','root','','db_qlreddit');
                                            if(!$conn){
                                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                            }
                                            // Bước 02: Thực hiện truy vấn
                                            $sqlh = "SELECT nd.TenNguoiDung, nd.Anh, tk.Email FROM tb_taikhoan tk, tb_ttnguoidung nd WHERE (tk.Email=  '{$_SESSION['isloginok']}' OR tk.TenDangNhap =  '{$_SESSION['isloginok']}') AND nd.MaNguoiDung = tk.MaNguoiDung";
                                            $resulth = mysqli_query($conn,$sqlh);
                                            // Bước 03: Xử lý kết quả truy vấn
                                            if(mysqli_num_rows($resulth) > 0){
                                                $row = mysqli_fetch_assoc($resulth);
                                                
                                            
                                        ?>
                                        <img src="<?php echo $row['Anh']; ?>" class="card-img-top AnhUser" alt="...">
                                        <?php
                                        } 
                                            // Bước 04: Đóng kết nối Database Server
                                            mysqli_close($conn);
                                        ?>
                                    </div>
                                </div>
                                <div class="MainPhuPhan12 bg-light">
                                    <div class="row bg-light pt-3 pb-2">

                                        <form action="" class="d-flex pt-5 pb-3">
                                            <div class="col-md-12 d-grid gap-2">
                                                <button class="btn btn-danger rounded-pill fw-bold ps-5" type="button"> Create Avatar <i class="bi bi-chevron-right ChuGiDay3 ps-4"></i></button>
                                            </div>
                                        </form>
                                        <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">Karma</div>
                                                    <div class="col-md-6">Cake day</div>
                                                </div>
                                        </div>
                                        <a class="col-md-12 d-grid gap-2 pt-2" href="Post.php">
                                            <button class="btn btn-primary rounded-pill fw-bold" type="button"> New Post</button>
                                        </a>
                                        <div class="col-md-12">
                                            <div class="col-md-12 pt-2"><a class="text-decoration-none link-primary fw-light fw-bold" href="" id="more1"></a></div>
                                            <div class="col-md-12 pt-2"><a class="text-decoration-none link-primary fw-light fw-bold" href="" id="more2"></a></div>
                                            <div class="col-md-12 pt-2"><a class="text-decoration-none link-primary fw-light fw-bold" href="" id="more3"></a></div>
                                        </div>
                                        <div class="col-md-12 gap-2 pt-3">
                                            <button class="btn btn-secondary rounded-pill fw-bold ChuGiDay4 ChuGiDay5" id="MoreOptions" type="button"> More Options</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 pt-3">
                            <div class="row">
                                <div class="col-md-12 bg-light">
                                    <div class="row pt-2">
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Help</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Reddit Coins</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Reddit Premium</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Reddit Gifts</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Communities</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Rereddit</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Topics</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">About</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Careers</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Press</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Advertise</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Blog</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Terms</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Content Policy</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Privacy Policy</a></li>
                                                <li><a class="text-decoration-none link-primary fw-light ChuGiDay" href="#">Mod Policy</a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    <p class="fw-light ChuGiDay">Reddit Inc © 2022 . All rights reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
   </div>
                

<?php
include("template/footer.php");
?>
