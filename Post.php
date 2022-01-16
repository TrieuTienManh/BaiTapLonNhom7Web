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
<!-- vùng main -->
<div class="container-fluid VungMain">
        <div class="container ps-5 pe-0 pt-3 tatpd">
            <div class="row">
                <div class="col-md-12 ps-5 pe-5 d-flex tatpd">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-11 ThanhPost">
                                <div class="row bg-light pt-2 pb-2">
                                    <form class="" action= "process_post.php" method="post">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="txtTitle" id="formGroupExampleInput" placeholder="Input Title">
                                        </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Content</label>
                                        <input type="text" class="form-control" name="txtContent" id="formGroupExampleInput2" placeholder="Input Content">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Image Address</label>
                                        <input type="text" class="form-control" name="txtImg" id="formGroupExampleInput2" placeholder="Input Image Address">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="btnPost" class="btn btn-primary">Post</button>
                                    </div>
                                    <div class="mb-3">
                                    <?php
                                        if(isset($_GET['error'])){
                                            echo "<h5 style = 'color:red'> {$_GET['error']} </h5>";
                                        }
                                    ?>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                                
                        
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
<?php
include("template/footer.php");
?>