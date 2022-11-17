<?php
if($_POST){
    $nama_kelas=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['angkatan'];

    if(empty($nama_kelas)){
        echo"<script>alert('Nama kelas tidak boleh kosong');location.href='../admin/data_kelas.php';</script>";
    }elseif(empty($jurusan)){
        echo"<script>alert('Jurusan kelas tidak boleh kosong');location.href='../admin/data_kelas.php';</script>";
    }elseif(empty($angkatan)){
        echo"<script>alert('Angkatan kelas tidak boleh kosong');location.href='../admin/data_kelas.php';</script>";
    }else{
        include '../koneksi.php';
        $insert=mysqli_query($sambung,"insert into kelas (nama_kelas,jurusan,angkatan) value ('".$nama_kelas."','".$jurusan."','".$angkatan."')") or die (mysqli_error($sambung));
    }
    if($insert){
        echo"<script>alert('Sukses Menambah Kelas');location.href='../admin/data_kelas.php';</script>";
    }else{
        echo"<script>alert('Gagal menambah kelas');location.href='../admin/data_kelas.php';</script>";
    }
}



?>