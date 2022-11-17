<?php

    session_start();
    if($_POST) {
        include'../koneksi.php';
        $qry_bayar = mysqli_query($sambung,"select * from pembayaran order by id_pembayaran desc");
        $qry_spp = mysqli_query($sambung, "select * from spp where id_spp = '".$_GET['id_spp']."'");
        $data_spp = mysqli_fetch_array($qry_spp);
        $tunggakan = $data_spp['nominal'];
        $bulan = $_POST['bulan'];
        $nominal_bayar = $_POST['nominal'];
        $id_spp = $_GET['id_spp'];
        
        if($nominal_bayar > $data_spp['nominal']) {
            echo "<script>alert('Pembayaran GAGAL = Nominal terlalu besar!');location.href='pembayaran.php';</script>";
        } elseif ($nominal_bayar < $data_spp['nominal']) {
            echo "<script>alert('Klik ok untuk melanjutkan');location.href='history.php';</script>";
            $update = mysqli_query($sambung, "update pembayaran set tunggakan='".$tunggakan."',bulan='".$bulan."' where id_pembayaran = '".$_SESSION['id_pembayaran']."'");
            $bayar = $data_spp['nominal'] - $nominal_bayar;
            $hasil = mysqli_query($sambung, "update pembayaran set tunggakan='".$bayar."' where id_pembayaran = '".$_SESSION['id_pembayaran']."'");
            // $spp = mysqli_query($sambung, "update spp set nominal='".$bayar."' where id_spp = '".$_GET['id_spp']."'") or die(mysqli_error($conn));
            
        } elseif ($nominal_bayar == $data_spp['nominal']) {
            echo "<script>alert('thanks for the spp payment ');location.href='history.php';</script>";
            $bayar = $data_spp['nominal'] - $nominal_bayar;
            $hasil = mysqli_query($sambung, "update pembayaran set tunggakan='".$bayar."',bulan='".$bulan."' where id_pembayaran = '".$_SESSION['id_pembayaran']."'");
        } else {
            echo "<script>alert('Gagal memproses pembayaran.');location.href='pemilihan_spp.php?id_spp=".$data_spp['id_spp']."';</script>";
        }
    }

?>