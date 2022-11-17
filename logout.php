<?php 
session_start();
         unset($_SESSION['username']);
         unset($_SESSION['login']);
    session_destroy();
header("location:login_petugas.php"); //lokasi setelah logout
?>
