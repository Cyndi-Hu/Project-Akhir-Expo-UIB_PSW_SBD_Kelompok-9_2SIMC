<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$host ='localhost';
$user ='root';
$pass ="";
$db ='maru_database';


$koneksi =mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
    die("Failed to Connect:". mysqli_connect_error());
} else {
    echo"Connected Successfully!";
}

?>