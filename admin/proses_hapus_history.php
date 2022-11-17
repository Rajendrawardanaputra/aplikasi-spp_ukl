<?php

    include'../koneksi.php';
    $qry_hapus=mysqli_query($sambung,"delete from pembayaran");
    if($qry_hapus){
        echo"<script>alert('Sukses menghapus history'); location.href='history.php';</script>";
    }else{
        echo"<script>alert('Gagal menghapus history'); location.href='history.php';</script>";
    }


?>