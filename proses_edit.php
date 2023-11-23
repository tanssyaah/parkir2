<?php

    include "koneksi.php";
    $id = $_GET['id_kendaraan'];
    $no_kendaraan = $_POST['no_kendaraan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
  
    query($sql, "update identitas set no_kendaraan='$no_kendaraan', jenis_kendaraan='$jenis_kendaraan' WHERE id_kendaraan='$id'");
?>