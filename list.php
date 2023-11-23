<?php include "koneksi.php";

date_default_timezone_set('Asia/Jakarta');

$data = query("SELECT * FROM tb_kendaraan");

if(isset($_POST["cari"])){
$data = $_POST["keyword"];
$data = query("SELECT * FROM tb_kendaraan WHERE no_kendaraan like '$data%' ");

}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	</style>
	<link rel="stylesheet" href="style.css?<?= time() ?>">
	<title>Parkir Program</title>
</head>
<body>

	<div class="container">
		
		<div class="ketengah">
             <img src="logo-12.png">
		</div>

		<h3>PARKIRAN SMK AMALIAH</h3>

		<div class="menu">
			<a href="menu.php">MASUK</a>
			<a href="keluar.php">KELUAR</a>
			<a href="./cetak.php">CETAK</a>
			<a href="./logout.php">Logout</a>
	
		</div>

		<form action="" method="POST">
			<label>CARI</label>
			<input type="text" name="keyword" size="40" autofoucus
			placehorder="masukan keyword pencarian.." autocomplete="off">
			<button type="submit" name="cari">Cari</button>
  		</form>




	<table width="100%" border="1" cellspacing="0">
		<tr>
			<th>No Kendaraan</th>
			<th>Jenis</th>
			<th>Jam Masuk</th>
			<th>Jam Keluar</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($data as $k) { ?>
			
			<tr>
				<td><?= $k['no_kendaraan'] ?></td>
				<td><?= $k['jenis_kendaraan'] ?></td>
				<td><?= $k['jam_masuk'] ?></td>
				<td><?= $k['jam_keluar'] ?></td>
				<td><?= $k['status'] ?></td>
				<td> 	
					<a href="edit.php?id_kendaraan=<?php echo $k['id_kendaraan']; ?>"> <button>EDIT</button> </a> 
					<a href="hapus.php?id_kendaraan=<?php echo $k['id_kendaraan']; ?>"> <button>HAPUS</button> </a>
				</td>
			</tr>

		<?php } 
		 ?>
		
	</table>


		
	</div>
	
</body>
</html>