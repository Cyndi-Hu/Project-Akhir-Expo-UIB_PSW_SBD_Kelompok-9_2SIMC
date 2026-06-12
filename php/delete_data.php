<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'maru_database'; // Ganti sama nama DB kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek apakah ada id yang dikirim
if(isset($_GET['id'])) {
    $id = $_GET['id']; // Ambil id dari link

    // Query HAPUS data
    $sql = "DELETE FROM reservations WHERE reservation_id='$id'";

    if(mysqli_query($koneksi, $sql)) {
        // Kalau berhasil, balik lagi ke halaman history
        header("Location: ../history.php");
        exit();
    } else {
        echo "Gagal hapus: " . mysqli_error($koneksi);
    }
} else {
    // Kalau gak ada id, balik ke home
    header("Location: ../history.php");
    exit();
}

mysqli_close($koneksi);
?>