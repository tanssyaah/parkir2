<?php 

   session_start();
    $server= "localhost";
	$username = "username";
    $password = "password";
	$koneksi = mysqli_connect("localhost","root","","app_parkir");



	function query($sql){
		global $koneksi;

		return mysqli_query($koneksi, $sql);
	}


	function hitung($sql){
		return mysqli_num_rows($sql);
	}
	

	
	function ts($time){
		$jam = $time / (60 * 60);
		return ceil($jam);
	}
    
	
	function cari($keyword){
			$data  = "SELECT * FROM tb_kendaraan
			        WHERE 
					cari LIKE '$keyword%'
					";
					return 	query($sql);
	}
  
 ?>