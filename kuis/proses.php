<!-- proses.php -->
<?php
// Koneksi ke database (sesuaikan dengan informasi database Anda)
$conn = new mysqli("localhost", "root", "", "bio");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$nama_siswa = $_POST['nama_siswa'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// Hitung total belanja
$total_belanja = $harga * $jumlah;

// Simpan data ke database
$sql = "INSERT INTO bio (nama_siswa, harga, jumlah, total_belanja) VALUES ('$nama_siswa', '$harga', '$jumlah', '$total_belanja')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
