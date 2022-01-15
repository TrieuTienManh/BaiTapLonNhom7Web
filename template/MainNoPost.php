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
                                            <button id="nutthich" onclick="procVote()"><i class="bi bi-caret-up" id="thich"></i></button>
                                            <div id="votes">Votes</div>
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
                    <div class="col-md-4 ps-0 PhanMainPhu">
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