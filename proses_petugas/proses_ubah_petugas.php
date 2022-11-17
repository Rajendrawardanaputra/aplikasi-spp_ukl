    <?php
    if($_POST)
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $level=$_POST['level'];
    $id_petugas=$_POST['id_petugas'];
    if(empty($username)){
        echo"<script>alert('Nama tidak boleh kosong');location.href='../admin/data_petugas.php';</script>";
    }elseif(empty($nama)){
        echo"<script>alert('Kelas tidak boleh kosong');location.href='../admin/data_petugas.php';</script>";
    }elseif(empty($level)){
        echo"<script>alert('Nis tidak boleh kosong');location.href='../admin/data_petugas.php';</script>";
    }elseif(empty($id_petugas)){
        echo"<script>alert('ID tidak boleh kosong');location.href='../admin/data_petugas.php';</script>";
    }else{
        include '../koneksi.php';
        $ubah=mysqli_query($sambung,"update petugas set username='".$username."',nama_petugas='".$nama."',level='".$level."' where id_petugas = '".$id_petugas."' ") or die (mysqli_error($sambung));
        if($ubah){
            echo"<script>alert('Sukses update siswa');location.href='../admin/data_petugas.php';</script>";
        }else{
            echo"<script>alert('Gagal ubah siswa');location.href='../admin/data_petugas.php';</script>";
        }

    }
?>
