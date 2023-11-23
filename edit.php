<?php include "koneksi.php";
 
// menangkap data yang di kirim dari form
if (isset($_POST['SIMPAN'])) {
	$id_kendaraan = $_POST['id_kendaraan'];
    $no_kendaraan = $_POST['no_kendaraan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
	query("UPDATE tb_kendaraan SET no_kendaraan='$no_kendaraan', jenis_kendaraan='$jenis_kendaraan' WHERE id_kendaraan='$id_kendaraan'");
    header("location:list.php");
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
			<a href="list.php">kembali</a>
		</div>

        <?php
            $id_kendaraan = $_GET['id_kendaraan'];
            $sql = query("SELECT * FROM tb_kendaraan WHERE id_kendaraan='$id_kendaraan'");
            while($d = mysqli_fetch_array($sql))
                {
		?>

		<form method="post" action="edit.php">
	<table>
		<tr>			
			<td>NO kendaraan</td>
			<td>
				<input type="hidden" name="id_kendaraan" value="<?php echo $d['id_kendaraan']; ?>">

			    <input type="text" required name="no_kendaraan" value="<?php echo $d['no_kendaraan']; ?>">
				
			</td>
		</tr>
		<tr>
			<td>jenis_kendaraan<td>
			<input name="jenis_kendaraan" value="<?php echo $d['jenis_kendaraan']; ?>">
			
		</tr>
		<tr>
			<td></td>
			<td><input name="SIMPAN" type="submit" value="SIMPAN"></td>
		</tr>		
	</table>
</form>


		
	</div>
    <?php 
        }
	?>
</body>
</html>