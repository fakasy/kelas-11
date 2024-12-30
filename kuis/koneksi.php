<?php
// Informasi koneksi database (sesuaikan dengan informasi database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "bio";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika Anda sampai pada titik ini, koneksi sukses

// ... (Lakukan operasi database lainnya di sini)

// Tutup koneksi database
$conn->close();
?>
