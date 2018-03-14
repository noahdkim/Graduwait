

<?php
  displayUserInfo();
  $user = "hi";
  function displayUserInfo(){
    $name = $_SESSION['fullName'];
    echo("Welcome, $name");
  }

?>
