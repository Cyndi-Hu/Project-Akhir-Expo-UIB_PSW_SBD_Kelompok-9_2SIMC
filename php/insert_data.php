<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once __DIR__.'/server.php';

$date = $_POST['date'];
$bookingTime = $_POST['bookingTime'];
$guest_count = $_POST['guest_count'];
$table_count = $_POST['table_count'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO reservations(date, bookingTime, guest_count, table_count, name, email, phone) 
        VALUES ('$date', '$bookingTime', '$guest_count', '$table_count', '$name', '$email', '$phone')";

$error = "";

if (mysqli_query($koneksi, $sql)) {

?>
<script>  
alert ("Data Successfully Saved");
window.location.href ="../history.php";
</script>

<?php 
} else {
//     echo "Error: " . mysqli_error($koneksi);
// }
?>

<script>  
alert ("Failed to Save Data \nError:<?php echo "Error: " . mysqli_error($koneksi); ?>");
window.history.back();
</script>
<?php 
}
?>