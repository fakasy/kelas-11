<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Nama Siswa</h1>

    <?php
    // Koneksi ke database (sesuaikan dengan informasi database Anda)
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bio";
    $conn = new mysqli($host, $username, $password, $database);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mengambil data nama siswa dari database
    $result = $conn->query("SELECT siswa FROM bio");

    // Memeriksa apakah ada hasil yang ditemukan
    if ($result->num_rows > 0) {
        // Menampilkan data nama siswa
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["nama"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Tidak ada data nama siswa.";
    }

    // Tutup koneksi database
    $conn->close();
    ?>
</body>
</html>
