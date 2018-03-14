<?php
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "graduwaitUsers";
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conn = new mysqli("localhost", $dbusername, $dbpassword, $dbname);
?>
