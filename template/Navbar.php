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