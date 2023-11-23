<?php 
include 'koneksi.php';
$id_kendaraan = $_GET['id_kendaraan'];
query("DELETE FROM tb_kendaraan WHERE id_kendaraan='$id_kendaraan'")or die(mysql_error());
	
header("location:list.php?pesan=hapus");
 
?>