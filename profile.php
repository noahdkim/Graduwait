<?php
  if ($_SESSION['isLogged'] != 1){
      header("Location: login.php");
      exit();
  }
  displayUserInfo();
  $user = "hi";
  function displayUserInfo(){
    $name = $_SESSION['fullName'];
    echo("Welcome, $name");
  }
?>
