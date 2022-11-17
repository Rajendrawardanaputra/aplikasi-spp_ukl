<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $kelas=$_POST['kelas'];
    $nis=$_POST['nis'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];
    $password=$_POST['password'];
    $angkatan=$_POST['angkatan'];


    if(empty($nama)){
        echo"<script>alert('Nama tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
       }elseif(empty($username)){
            echo"<script>alert('Username tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
        }elseif(empty($kelas)){
            echo"<script>alert('Kelas tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
        }elseif(empty($nis)){
            echo"<script>alert('Nis tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
        }elseif(empty($alamat)){
            echo"<script>alert('Alamat tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
        }elseif(empty($telepon)){
            echo"<script>alert('Telepon tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
        }elseif(empty($password)){
            echo"<script>alert('Password tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
        }elseif(empty($angkatan)){
            echo"<script>alert('Tunggakan tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
        }else{
            include'../koneksi.php';
            $insert=mysqli_query($sambung,"insert into siswa (nis,nama,username,id_kelas,angkatan,alamat,no_tlp,password) value ('".$nis."','".$nama."','".$username."','".$kelas."','".$angkatan."','".$alamat."','".$telepon."','".md5($password)."')") or die(mysqli_error($sambung));
        }
        if($insert){
            echo"<script>alert('Sukses menambah siswa');location.href='../admin/data_siswa.php';</script>";
        }else{
            echo"<script>alert('Gagal menambah siswa');location.href='../admin/data_siswa.php';</script>";
        }
    }

?>