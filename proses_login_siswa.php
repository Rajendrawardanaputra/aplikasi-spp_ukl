<?php 
    if($_POST){
        $nisn=$_POST['nisn'];
        $password=$_POST['password'];
        if(empty($nisn)){
            echo "<script>alert('nis tidak boleh kosong');location.href='login_siswa.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login_siswa.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($sambung,"select * from siswa where nisn = '".$nisn."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $data_login=mysqli_fetch_array($qry_login);
                 // mengecek apakah di dalam tabel tersebut ada kolomnya 
                session_start();
                $_SESSION['nama']=$data_login['nama'];
                $_SESSION['nisn']=$data_login['nisn'];
                $_SESSION['status_login']=true;
                // Mengecek siapa yg login 
                header("location: siswa/halaman_siswa.php");   
                // setelah login menuju ke kelas tersebut (profil.php)
            } else {
                echo "<script>alert('Nis dan Password tidak benar');location.href='login_siswa.php';</script>";
            }
        }
    }
  
?>