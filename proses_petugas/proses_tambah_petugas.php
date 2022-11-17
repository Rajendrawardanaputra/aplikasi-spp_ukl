<?php
if($_POST){
    $Nama=$_POST['nama'];
    $username=$_POST['username'];
    $level=$_POST['level'];
    $password=$_POST['password'];

    if(empty($Nama)){
        echo"<script>alert('Nama siswa tidak boleh kosong');location.href='data_petugas.php';</script>";
    }elseif(empty($username)){
        echo"<script>alert('Username siswa tidak boleh kosong');location.href='data_petugas.php';</script>";
    }elseif(empty($level)){
        echo"<script>alert('Level tidak boleh kosong');location.href='data_petugas.php';</script>";
    }elseif(empty($password)){
        echo"<script>alert('Password siswa tidak boleh kosong');location.href='data_petugas.php';</script>";
    }else{
        include'../koneksi.php';
        $insert=mysqli_query($sambung,"insert into petugas (username,password,nama_petugas,level) value ('".$username."','".$password."','".$Nama."','".$level."')");
    if($insert){
        echo"<script>alert('Berhasil menambahkan petugas');location.href='../admin/data_petugas.php';</script>";
    }else{
        echo"<script>alert('Gagal menambahkan petugas');location.href='data_petugas.php';</script>";
    }
  }
}
?>