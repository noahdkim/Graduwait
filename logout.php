<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "graduwaitUsers";
$ret = $_SESSION['toTake'];
$ret['seas'] = array_values($ret['seas']);

$email = $_SESSION['email'];

$conn = new mysqli("localhost", $dbusername, $dbpassword, $dbname);

$sql = mysqli_query($conn, "UPDATE users SET courses='$ret' WHERE email='$email'");

// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $conn->errno;
// $stmt->close();

session_unset();
session_destroy();
header("Location: login.php");
?>
