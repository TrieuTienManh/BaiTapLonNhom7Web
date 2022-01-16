<?php
     session_start();
     if(isset($_SESSION['isloginok'])){
         unset($_SESSION['isloginok']);
         header('location: GuestPage.php');
     }
?>