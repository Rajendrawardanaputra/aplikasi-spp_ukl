<?php

if($_POST)
$nama=$_POST['nama'];
$username=$_POST['username'];
$nisn=$_POST['nisn'];
$nis=$_POST['nis'];
$kelas=$_POST['kelas'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];

if(empty($nama)){
    echo"<script>alert('Nama siswa tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
}elseif(empty($username)){
    echo"<script>alert('Username tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
}elseif(empty($nisn)){
    echo"<script>alert('nisn tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
}elseif(empty($nis)){
    echo"<script>alert('nis tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
}elseif(empty($kelas)){
    echo"<script>alert('kelas tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
}elseif(empty($alamat)){
    echo"<script>alert('Alamat tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
}elseif(empty($telepon)){
    echo"<script>alert('Telepon tidak boleh kosong');location.href='../admin/data_siswa.php';</script>";
}else{
    include '../koneksi.php';
    $ubah_siswa=mysqli_query($sambung,"update siswa set nama='".$nama."',username='".$username."',nis='".$nis."',id_kelas='".$kelas."',alamat='".$alamat."',no_tlp='".$telepon."' where nisn='".$nisn."'");

    if($ubah_siswa){
        echo"<script>alert('Sukses ubah siswa');location.href='../admin/data_siswa.php';</script>";
    }else{
        echo"<script>alert('Gagal ubah siswa');location.href='../admin/data_siswa.php';</script>";

    }

}
?>