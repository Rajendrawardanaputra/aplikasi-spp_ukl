<?php
if($_GET['nisn']){
    include '../koneksi.php';
    $hapus_siswa=mysqli_query($sambung,"delete from siswa where nisn = '".$_GET['nisn']."'");

    if($hapus_siswa){
        echo"<script>alert('Sukses hapus siswa');location.href='../admin/data_siswa.php';</script>";
    }else{
        echo"<script>alert('Gagal hapus siswa');location.href='../adminr/data_siswa.php';</script>";

    }
}

?>