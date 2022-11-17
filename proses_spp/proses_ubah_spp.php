<?php
if($_POST){
$angkatan=$_POST['angkatan'];
$tahun=$_POST['tahun'];
$nominal=$_POST['nominal'];
$id=$_POST['id_spp'];

if(empty($angkatan)){
    echo"<script>alert('Angkatan tidak boleh kosong');location.href='../admin/data_spp.php';</script>";
}elseif(empty($tahun)){
    echo"<script>alert('Angkatan tidak boleh kosong');location.href='../admin/data_spp.php';</script>";
}elseif(empty($nominal)){
    echo"<script>alert('Nominal tidak boleh kosong');location.href='../admin/data_spp.php';</script>";
}else{
    include '../koneksi.php';
    $ubah_spp=mysqli_query($sambung,"update spp set angkatan='".$angkatan."',tahun='".$tahun."',nominal='".$nominal."' where id_spp = '".$id."' ");
}
    if($ubah_spp){
        echo"<script>alert('Sukses ubah spp');location.href='../admin/data_spp.php';</script>";
    }else{
        echo"<script>alert('Gagal ubah spp');location.href='../admin/data_spp.php';</script>";

    }
}
?>