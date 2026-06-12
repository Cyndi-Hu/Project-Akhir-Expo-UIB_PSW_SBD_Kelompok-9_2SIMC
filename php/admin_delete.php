<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'maru_database';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die(json_encode(['status' => 'error', 'message' => 'Gagal koneksi DB']));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $date = $_POST['date'] ?? '';
    $bookingTime = $_POST['bookingTime'] ?? '';
    $guest_count = $_POST['guest_count'] ?? '';
    $table_count = $_POST['table_count'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $contact = $_POST['contact'] ?? ''; // Ini nomor teleponnya

    (isset($_POST['id']));
    $id = $_POST['id'];
    $sql = "DELETE FROM reservations WHERE reservation_id = $id";
    
    if (mysqli_query($koneksi, $sql) && mysqli_affected_rows($koneksi) > 0) {
        echo "success"; // Balikannya cuma kata ini
    } else {
        echo "error";
    }
}

mysqli_close($koneksi);
?>