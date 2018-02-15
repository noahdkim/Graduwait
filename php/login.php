<?php
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "graduwaitUsers";
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conn = new mysqli("localhost", $dbusername, $dbpassword, $dbname);
  $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

  if (mysqli_num_rows($query) != 0){
    header('Location: ../index.html');

  }
  else{
    echo var_dump($query);
  }

?>
