<?php 
include"../header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran SPP</title>
	
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h3 align="center">My Siakad<b><br/>LAPORAN PEMBAYARAN SPP</b></h3>
	<br/>
	<hr/>
	<?php 
    include'../koneksi.php';
	$siswa=mysqli_query($sambung,"select * from pembayaran where id_pembayaran='".$_GET['id_pembayaran']."'");
    $sw=mysqli_fetch_assoc($siswa);

	 ?>
	<table>
		<tr>
			<td>Nama Siswa </td>
			<td>:</td>
			<td> <?= $sw['nama_siswa'] ?></td>
		</tr>
		<tr>
			<td>Nisn</td>
			<td>:</td>
			<td> <?= $sw['nisn'] ?></td>
		</tr>
	</table>
	<hr>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>NO</th>
		<th>ID PEMBAYARAN</th>
		<th>PEMBAYARAN BULAN</th>
        <th>TANGGAL PEMBAYARAN</th>
		<th>TUNGGAKAN</th>
		<th>KETERANGAN</th>
	</tr>
	<?php 
	$spp=mysqli_query($sambung,"select * from pembayaran where id_pembayaran='".$_GET['id_pembayaran']."'");
	$i=1;
	$total = 0;
	$dta=mysqli_fetch_array($spp);
	 ?>
	<tr>
		<td align="center"><?= $i ?></td>
		<td align="center"><?= $dta['id_pembayaran'] ?></td>
        <td align="center"><?= $dta['bulan'] ?></td>
        <td align="center"><?=$dta['tgl_bayar']?></td>
		
		<td align="center">Rp.<?= $dta['tunggakan'] ?></td>
		<td align="center">LUNAS</td>
	</tr>
	

	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Malang , <?= date('d/m/y') ?> <br/>
				ADMIN,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>


	<a  href="#" target="" onclick="window.print();"><button class="print">CETAK</button></a>
</body>
</html>

