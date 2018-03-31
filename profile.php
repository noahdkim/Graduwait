<?php
  if ($_SESSION['isLogged'] != 1){
      header("Location: login.php");
      exit();
  }
  else{
    include("displayProfile.php");
  }
?>
