<?php
include'../koneksi.php';
session_start();
if($_POST){
    $id_pembayaran=$_POST['id_pembayaran'];
    $tunggakan=$_POST['tunggakan'];
    $nominal=$_POST['nominal'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $qry_pembayaran=mysqli_query($sambung,"select * from pembayaran where id_pembayaran = '".$_SESSION['id_pembayaran']."'");
    // $qry_spp=mysqli_query($sambung,"select * from spp where id_spp = '".$_GET['id_spp']."'");
    $data_pembayaran=mysqli_fetch_array($qry_pembayaran);
    // $data_spp=mysqli_fetch_array($qry_spp);
    // Pembayaran
    $pembayaran=$tunggakan-$nominal;
    $update=mysqli_query($sambung,"update pembayaran set tunggakan='".$pembayaran."',tgl_bayar='".$tgl_bayar."' where id_pembayaran='".$_GET['id_pembayaran']."'");

        if($update){
            echo "<script>alert('Sukses membayar SPP'); location.href='history.php';</script>";
        }else{
            echo "<script>alert('gagal membayar SPP'); location.href='history.php';</script>";
        }
}
?>
