<?php
include("template/header.php");
?>

<div class="container-fluid NavBar d-flex">
    <div class="logoC">
            <a href="Home.html"><img class="logo" src="images/logo.jpg" alt=""></a>
    </div>
    <div class="Search">
        <form class="d-flex SearchBT pe-5">
            <button class="btn btn-outline" type="submit">
                <i class="bi bi-search text-muted"></i>
            </button>
            <input class="SearchIP pe-5" type="search" placeholder="Search Reddit" aria-label="Search">
        </form>
    </div>
    <div class="DNDK d-flex">
        <a href="Login.php" class="ps-3 pt-1"><button type="button" class="btn btn-outline-primary rounded-pill fw-bold ChuGiDay3 ps-4 pe-4">Log In</button></a>
        <a href="Signup.php" class="ps-3 pt-1"><button type="button" class="btn btn-primary rounded-pill fw-bold ChuGiDay3 ps-4 pe-4">Sign Up</button></a>
    </div>
    <div class="Account">
        <div class="dropdown HomeC">
            <button class="btn btn-Light d-flex HomeC" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person pt-1"></i>
                <i class="bi bi-chevron-down ps-4 HomeIcon2"></i>
            </button>
            <ul class="dropdown-menu navbar-nav-scroll" aria-labelledby="dropdownMenuButton1">
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
                    <a class="dropdown-item d-flex" href="Login.php">
                        <i class="bi bi-box-arrow-in-right ps-2 pe-2 ToanBoVeMotKieu"></i>
                        <div class="ChuItem">Log In/Sign Up </div>
                    </a>
                    <p class="fw-light ChuGiDay ps-3 pt-2">© 2022 Reddit, Inc. All rights reserved</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
include("template/MainNoPost.php");
?>
<?php
include("template/footer.php");
?>