<?php
// MATIKAN SEMUA ERROR
error_reporting(0);
ini_set('display_errors', 0);

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// KONEKSI DATABASE
$host = 'localhost';
$user = 'root'; // biasanya root di XAMPP
$pass = ''; // biasanya kosong di XAMPP
$dbname = 'maru_database'; // GANTI INI PAKE NAMA DATABASE KAMU

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

if (!$koneksi) {
    die(json_encode(['status' => 'error', 'message' => 'Gagal koneksi DB']));
}

// AMBIL DATA
$input = file_get_contents('php://input');
$data = json_decode($input, true);

$id = $data['reservation_id'];
$date = $data['date'];
$time = $data['bookingTime'];
$guest = $data['guest_count'];
$table = $data['table_count'];
$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];

// QUERY
$sql = "UPDATE reservations SET 
        date='$date', 
        bookingTime='$time', 
        guest_count='$guest', 
        table_count='$table', 
        name='$name', 
        email='$email', 
        phone='$phone' 
        WHERE reservation_id='$id'";

if (mysqli_query($koneksi, $sql)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => mysqli_error($koneksi)]);
}

mysqli_close($koneksi);
?>