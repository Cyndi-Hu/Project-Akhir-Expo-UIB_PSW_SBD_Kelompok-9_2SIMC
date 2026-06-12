<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'maru_database'; // Ganti sama nama DB kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die(json_encode(['status' => 'error', 'message' => 'Gagal koneksi DB']));
}

header("Content-Type: application/json");

$sql = "SELECT * FROM reservations ORDER BY name DESC, date DESC, bookingTime DESC, guest_count DESC, table_count DESC, name DESC, email DESC, phone DESC";
$result = mysqli_query($koneksi, $sql);

$reservations = array();

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $reservations[] = $row;
    }
}

echo json_encode($reservations);
?>