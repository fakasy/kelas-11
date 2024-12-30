
<?php
// Koneksi ke database (sesuaikan dengan informasi database Anda)
$conn = new mysqli("localhost", "root", "", "bio");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel bio
$query = "SELECT nama FROM bio";

// Eksekusi query
$result = $conn->query($query);

// Ambil data dan simpan dalam array
$siswa_data = array();
while ($row = $result->fetch_assoc()) {
    $siswa_data[] = $row['nama'];
}

// Tutup koneksi database
$conn->close();
?>

<!DOCTYPE html>
<h1>Teh Jawa</h1>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian Siswa</title>
</head>
<body>
    <h1>Formulir Pembelian Siswa</h1>
    <form action="proses.php" method="post">
        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" name="nama_siswa" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" required>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>

