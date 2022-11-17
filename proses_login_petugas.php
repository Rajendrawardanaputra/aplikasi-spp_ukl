<?php
//memulai session
session_start();
$_SESSION['status_login']=true;
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$login=mysqli_query($sambung, "select * from petugas where username='$username' and password='$password'");

$cek=mysqli_num_rows($login);

// ngecek data yang ada di dalam tabel di database harus minimal satu

if($cek > 0){
    $data=mysqli_fetch_assoc($login);

        //cek jika yang login itu admin
        if($data['level']=="admin"){
        //session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        //proses menuju halaman untuk admin
        header("location:admin/halaman_admin.php");
    } 
      //cek jika yang login itu owner
    elseif($data['level']=="petugas"){
        //session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        //proses menuju halaman untuk owner
        header("location:petugas/halaman_petugas.php");
    }else{
		// alihkan ke halaman login kembali
		header("location:login_petugas.php?pesan=gagal");
	}
}else{
    header("location:login_petugas.php?pesan=gagal");
}
?>