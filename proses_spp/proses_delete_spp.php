<?php
if($_GET['id_spp']){
    include "../koneksi.php";
    $qry_hapus=mysqli_query($sambung,"delete from spp where id_spp='".$_GET['id_spp']."'");
    if($qry_hapus){
        echo"<script>alert('Sukses menghapus SPP');location.href='../admin/data_spp.php';</script>";
    }else{
        echo"<script>alert('Gagal menghapus SPP');location.href='../admin/data_spp.php';</script>";
    }
}

?>
