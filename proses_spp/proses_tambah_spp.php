<?php
if($_POST){
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    if(empty($angkatan)){
        echo"<script>alert('Angkatan tidak boleh kosong');location.href='../admin/data_spp.php';</script>";
    }elseif(empty($tahun)){
        echo"<script>alert('Tahun tidak boleh kosong');location.href='../admin/data_spp.php';</script>";
    }elseif(empty($nominal)){
        echo"<script>alert('Nominal tidak boleh kosong');location.href='../admin/data_spp.php';</script>";
    }else{
        include'../koneksi.php';
        $insert=mysqli_query($sambung,"insert into spp (angkatan,tahun,nominal) value ('".$angkatan."','".$tahun."','".$nominal."')") or die (mysqli_error($sambung));
    }
    if($insert){
        echo"<script>alert('Sukses menambahkan spp');location.href='../admin/data_spp.php';</script>";
    }else{
        echo"<script>alert('Gagal menambahkan spp');location.href='../admin/data_spp.php';</script>";
    }
}
?>