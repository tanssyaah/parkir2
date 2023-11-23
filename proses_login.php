<?php
session_start();

// Mendapatkan data yang dikirimkan dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan validasi login
if ($username == 'admin' && $password == 'admin') {
    // Jika login berhasil, set session dan redirect ke halaman utama
    $_SESSION['username'] = $username;
    header('Location: menu.php');
} else {
    // Jika login gagal, redirect kembali ke halaman login dengan pesan error
    header('Location: login.php?error=1');
}
?>