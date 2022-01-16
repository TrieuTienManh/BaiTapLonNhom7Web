<?php
    //  trước khi cho người dùng vào bên trong phải kiểm tra xem có vé chưa
    session_start();
    if(!isset($_SESSION['isloginok'])){
        header('location: Login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reddit</title>
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>

</head>

<body class="bg-light">
    <div class="container-fluid NavBar d-flex">
        <div class="logoC">
            <a href="Home.php"><img class="logo" src="images/logo.jpg" alt=""></a>
        </div>
        <div class="HomeC">
            <div class="dropdown HomeC">
                <button class="btn btn-Light d-flex HomeC" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-icons HomeIcon1">
                        home
                    </span>
                    <div class="HomeChu fw-normal pt-2 ps-2 pe-5 antabletvamobile">Home</div>
                    <i class="bi bi-chevron-down ps-4 HomeIcon2"></i>
                </button>
                <ul class="dropdown-menu thanhthanh navbar-nav-scroll" aria-labelledby="dropdownMenuButton1">
                    <li><input class="dropdown-item TimKiemChoHome ps-2 pe-2" placeholder="Filter"></li>
                    <div class="dropdown-item text-muted ChuMo">MYCOMMUNITIES</div>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-plus-lg ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem pt-2">Create Conmunity</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-reddit ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">r/announcemet</div>
                        </a>
                    </li>

                    <div class="dropdown-item text-muted ChuMo">FEEDS</div>
                    <li>
                        <a class="dropdown-item d-flex" href="Home.php">
                            <span class="material-icons HomeIcon1 ps-2 ToanBoVeMotKieu">
                                home
                            </span>
                            <div class="pt-2 ps-2">Home</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-arrow-up-right-circle ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Popular</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-pie-chart ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">All</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-camera-reels ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Reddit Live</div>
                        </a>
                    </li>

                    <div class="dropdown-item text-muted ChuMo">OTHER</div>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <span class="material-icons ps-2 pe-2 ToanBoVeMotKieu">
                                account_box
                            </span>
                            <div class="">User Settings</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <span class="material-icons ps-2 pe-2 ToanBoVeMotKieu">
                                account_box
                            </span>
                            <div class="">Messages</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-plus-lg ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Create Post</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-list-ol ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Top Communities</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-bell ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Notifications</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-coin ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Coins</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-shield ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Premium</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-person ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Avatar</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <span class="material-icons ps-1 pe-2 ToanBoVeMotKieu">
                                bolt
                            </span>
                            <div class="">Powerups</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <img class="icon1" src="images/page3.png" alt="">
                            <div class="ChuItem">Reddit Recap</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-record-circle ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Talk</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <span class="material-icons ps-2 pe-2 ToanBoVeMotKieu">
                                rice_bowl
                            </span>
                            <div class="">Predictions</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="Search">
            <form class="d-flex SearchBT pe-3" action= "Find.php" method="post">
                <button class="btn btn-outline" name="btnTimKiem" type="submit">
                    <a href=""><i class="bi bi-search text-muted"></i></a>
                </button>
                <input class="SearchIP " type="search" placeholder="Search Reddit" name="txtTimKiem" aria-label="Search">
            </form>
        </div>

        <div class="function d-flex">
            <a href="" class="anmobile">
                <div class="popular DacBiet">
                    <i class="bi bi-arrow-up-right-circle popular" title="Popular"></i>
                </div></i>
            </a>
            <a href="" class="anmobile">
                <div class="popular">
                    <i class="bi bi-pie-chart" title="All"></i>
                </div>
            </a>
            <a href="" class="anmobile">
                <div class="popular">
                    <i class="bi bi-camera-reels" title="Reddit live"></i>
                </div>
            </a>
            <a href="" class="anmobile">
                <div class="ps-3">
                    <img src="images/page3.png " class="icon1" title="Reddit Recap page" alt="">
                </div>
            </a>
        </div>
        <div class="Story d-flex">
            <a href=""><i class="bi bi-chat-dots popular abc" title="Chat"></i></a>
            <a href=""><i class="bi bi-bell popular" title="Notifications"></i></a>
            <a href=""><i class="bi bi-plus-lg popular" title="Create post"></i> </a>
            <div class="ps-3">
                <button type="button" class="btn border-warning pb-1 rounded-pill fw-bold ChuGiDay3"><i class="bi bi-coin">Get
                        Coins</i></button>
            </div>
        </div>
        <div class="Account">
            <div class="dropdown HomeC">
                <button class="btn btn-Light d-flex HomeC" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-icons">
                        account_box
                    </span>
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
                    <div class="HomeChu fw-normal ps-2 pe-5 antabletvamobile">
                        <?php echo $row['TenNguoiDung']; ?>
                    </div>
                    <?php
                        } 
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                    ?>
                    <i class="bi bi-chevron-down ps-4 HomeIcon2"></i>
                </button>
                <ul class="dropdown-menu navbar-nav-scroll" aria-labelledby="dropdownMenuButton1">
                    <div class="dropdown-item text-muted ChuMo">ONLINE STATUS</div>
                    <div class="d-flex">
                        <label class="form-check-label ps-4 pe-2" for="flexSwitchCheckDefault">On</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                    <div class="dropdown-item text-muted ChuMo">MY STUFF</div>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <img class="icon1" src="images/page3.png" alt="">
                            <div class="ChuItem">Reddit RecapNew!</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="User.php">
                            <span class="material-icons ps-2 pe-2 ToanBoVeMotKieu">
                                account_circle
                            </span>
                            <div class="">Profile</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-plus-lg ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Create Avatar</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-gear ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">User Settings</div>
                        </a>
                    </li>
                    <div class="dropdown-item text-muted ChuMo">VIEW OPTIONS</div>
                    <div class="d-flex">
                        <span class="material-icons ps-4 pe-2 ToanBoVeMotKieu">
                            mode_night
                        </span>
                        <label class="form-check-label ps-2" for="flexSwitchCheckDefault">Night Mode</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                    <div class="dropdown-item text-muted ChuMo">MORE STUFF</div>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-slash-circle ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Create Community</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-coin ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Coins</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-shield ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Premium</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <span class="material-icons ps-2 pe-2 ToanBoVeMotKieu">
                                bolt
                            </span>
                            <div class="">Powerups</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-record-circle ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Talk</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <span class="material-icons ps-2 pe-2 ToanBoVeMotKieu">
                                rice_bowl
                            </span>
                            <div class="">Predictions</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-question-circle-fill ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Help Center</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="bi bi-box-arrow-up-right ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Visit Old Reddit</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="Logout.php">
                            <i class="bi bi-box-arrow-in-right ps-2 pe-2 ToanBoVeMotKieu"></i>
                            <div class="ChuItem">Log Out </div>
                        </a>
                        <p class="fw-light ChuGiDay ps-3 pt-2">© 2022 Reddit, Inc. All rights reserved</p>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <!-- vùng main -->
    <div class="container-fluid VungMain">
        <div class="container ps-5 pe-0 pt-3 tatpd">
            <div class="row">
                <div class="col-md-12 ps-5 pe-5 d-flex tatpd">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-11 ThanhPost">
                                <div class="row bg-light pt-2 pb-2">
                                    <form class="d-flex">
                                        <i class="bi bi-person-square AvatarThanhPost"></i>
                                        <input class="form-control InputThanhPost" type="search"
                                            placeholder="Create Post" aria-label="Search">
                                        <a href="Post.php"><i class="bi bi-image ChucNangThanhPost" title="Create Media Post"></i></a>
                                        <a href="Post.php"><i class="bi bi-paperclip ChucNangThanhPost"></i></a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-md-11 ThanhDuoiPost">
                                <div class="row bg-light pt-2 pb-2">
                                    <form class="d-flex FormThanhDuoiPost">
                                        <div class="d-flex DuoiPostTrai">
                                            <button class="d-flex">
                                                <span class="material-icons pe-2">
                                                    rocket
                                                </span>
                                                <div> Best </div>
                                            </button>
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
                                        <div class="d-flex DuoiPostPhai">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-view-stacked"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="bi bi-view-stacked">Card</i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="bi bi-border-width">Classic</i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="bi bi-justify">Compact</i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Phần Bài Đăng -->

                            <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                            <?php
                                // Bước 01: Kết nối Database Server
                                $conn = mysqli_connect('localhost','root','','db_qlreddit');
                                if(!$conn){
                                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                }
                                // Bước 02: Thực hiện truy vấn
                                $sqlh = "SELECT nd.TenNguoiDung, bv.TieuDe, bv.NoiDung, bv.AnhBaiViet FROM tb_baiviet bv, tb_ttnguoidung nd WHERE nd.MaNguoiDung = bv.MaNguoiDung";
                                $resulth = mysqli_query($conn,$sqlh);
                                // Bước 03: Xử lý kết quả truy vấn
                                if(mysqli_num_rows($resulth) > 0){
                                    while($row = mysqli_fetch_assoc($resulth)){
                            ?>

                                <div class="row pt-3 BaiDang">
                                    <div class="col-md-11 bg-light">
                                        <div class="d-flex">
                                            <div class="col-md-1 pt-2">                                       
                                                <button id="nutthich"><i class="bi bi-caret-up" id="thich"></i></button>
                                                <?php
                                                    // // Bước 02: Thực hiện truy vấn
                                                    // $sqlh9 = "SELECT SUM(Thich) As 'SoLuong' FROM tb_thich WHERE MaBaiViet = {$row['MaBaiViet']} ";
                                                    // $result9 = mysqli_query($conn,$sqlh9);
                                                    // echo "{$row['MaBaiViet']}";
                                                    // $row9 = mysqli_fetch_assoc($result9);
                                                ?>
                                                <div id="votes"><?php // echo $row9['SoLuong']; ?></div>
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
                                                                        <button><i class="bi bi-three-dots ps-3"></i></button>
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
                    <div class="col-md-4 ps-0 PhanMainPhu anmobile">
                        <div class="col-md-10 bg-light">
                            <div class="row">
                                <div class="col-md-12 MainPhuPhan11 pt-5 ps-5">
                                    <p class="fw-bolder">Top Growing Communities</p>
                                </div>
                                <div class="MainPhuPhan12 bg-light">
                                    <div class="row bg-light pt-2 pb-2">
                                        <form class="row ps-4">
                                            <div class="d-flex pt-2 TenTopGrowing">
                                                <p class="fw-bold ">1</p>
                                                <i class="bi bi-reddit ps-2 pe-2"></i>
                                                <div class="ChuGiDay">r/TenNguoiDung</div>
                                                <button type="button" class="btn btn-primary rounded-pill ChuGiDay3">Join</button>
                                            </div>
                                            <div class="d-flex pt-2 TenTopGrowing">
                                                <p class="fw-bold ">2</p>
                                                <i class="bi bi-reddit ps-2 pe-2"></i>
                                                <div class="ChuGiDay">r/TenNguoiDung</div>
                                                <button type="button" class="btn btn-primary rounded-pill ChuGiDay3">Join</button>
                                            </div>
                                            <div class="d-flex pt-2 TenTopGrowing">
                                                <p class="fw-bold ">3</p>
                                                <i class="bi bi-reddit ps-2 pe-2"></i>
                                                <div class="ChuGiDay">r/TenNguoiDung</div>
                                                <button type="button" class="btn btn-primary rounded-pill ChuGiDay3">Join</button>
                                            </div>
                                            <div class="d-flex pt-2 TenTopGrowing">
                                                <p class="fw-bold ">4</p>
                                                <i class="bi bi-reddit ps-2 pe-2"></i>
                                                <div class="ChuGiDay">r/TenNguoiDung</div>
                                                <button type="button" class="btn btn-primary rounded-pill ChuGiDay3">Join</button>
                                            </div>
                                            <div class="d-flex pt-2 TenTopGrowing">
                                                <p class="fw-bold ">5</p>
                                                <i class="bi bi-reddit ps-2 pe-2"></i>
                                                <div class="ChuGiDay">r/TenNguoiDung</div>
                                                <button type="button" class="btn btn-primary rounded-pill ChuGiDay3">Join</button>
                                            </div>
                                        </form>
                                        <form action="" class="d-flex pt-2 pb-3">
                                            <div class="col-md-12 d-grid gap-2">
                                                <button class="btn btn-primary rounded-pill fw-bold ChuGiDay4" type="button"> View All</button>
                                            </div>
                                        </form>
                                        <form action="" class="d-flex pb-2">
                                            <a href="" class="pe-1"><button type="button"
                                                    class="btn btn-outline-primary ChuGiDay2 fw-bold">Sports</button></a>
                                            <a href="" class="pe-1"><button type="button"
                                                    class="btn btn-outline-primary ChuGiDay2 fw-bold">News</button></a>
                                            <a href="" class="pe-1"><button type="button"
                                                    class="btn btn-outline-primary ChuGiDay2 fw-bold">Gaming</button></a>
                                            <a href=""><button type="button"
                                                    class="btn btn-outline-primary ChuGiDay2 fw-bold">Aww</button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 pt-3">
                            <div class="row">
                                <div class="col-md-12 bg-light">
                                    <div class="d-flex">
                                        <div class="col-md-2 pt-2">
                                            <i class="bi bi-shield-shaded BieuTuongBaoVe"></i>
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="ChuGiDay pt-2">Reddit Premiun</h6>
                                            <p class="fw-light ChuGiDay">The best Reddit experience, with monthly Coins
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-grid gap-2 pb-2">
                                        <button class="btn btn-danger rounded-pill fw-bold ChuGiDay4" type="button">Try Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 pt-3">
                            <div class="row">
                                <div class="col-md-12 bg-light">
                                    <div class="" style="width: 18rem;">
                                        <img src="images/AnhMainPhu2.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text ChuGiDay">
                                                Your personal Reddit frontpage. Come here to check in with your favorite communities.
                                            </p>
                                            <div class="col-md-12 d-grid gap-2">
                                                <button class="btn btn-primary rounded-pill fw-bold ChuGiDay4" type="button">Create Post</button>
                                            </div>
                                            <div class="col-md-12 d-grid gap-2 pt-2 ">
                                                <button class="btn btn-outline-primary rounded-pill fw-bold ChuGiDay4" type="button">Create Community</button>
                                            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <Script src="js/procVote.js"></Script>
    <script src="//code.jquery.com/jquery-3.2.0.slim.min.js"></script>
    <script src="toggle-onoff.js"></script>

</body>

</html>
