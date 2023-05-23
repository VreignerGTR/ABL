<?php
// Menghubungkan ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Mengambil data dari tabel karyawan
$sql = "SELECT * FROM karyawan";
$result = $conn->query($sql);

// Membuat array untuk menampung data karyawan
$karyawan = array();

// Memeriksa jika terdapat data
if ($result->num_rows > 0) {
    // Mengambil setiap baris data dan menambahkannya ke array karyawan
    while ($row = $result->fetch_assoc()) {
        $karyawan[] = $row;
    }
}

// Mengubah array karyawan menjadi format JSON
$json_data = json_encode($karyawan);

// Menampilkan output JSON pada browser
header('Content-Type: application/json');
echo $json_data;

// Menutup koneksi database
$conn->close();
?>
