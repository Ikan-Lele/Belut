<?php
$servername = "localhost";
$username = "root";
$password = "";

// Membuat koneksi ke MySQL
$connect = mysqli_connect($servername, $username, $password);

// Memeriksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Nama database yang akan dibuat
$db_name = "ia_2";

// Query untuk membuat database
$sql = "CREATE DATABASE $db_name";

// Menjalankan query dan memeriksa hasilnya
if (mysqli_query($connect, $sql)) {
    echo "Database '$db_name' berhasil dibuat.";
} else {
    echo "Gagal membuat database: " . mysqli_error($connect);
}

// Menutup koneksi
mysqli_close($connect);
?>