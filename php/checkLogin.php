
<?php
  session_start();
  include "dbconnect.php";
  $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $res = mysqli_query($conn, $query) or die(mysqli_error);

  if (mysqli_num_rows($res) != 0){
    $row = mysqli_fetch_array($res);
    $_SESSION['fullName'] = $row['fullName'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['school'] = $row['school'];
    $_SESSION['major'] = $row['major'];
    $_SESSION['minor'] = $row['minor'];
    $_SESSION['errorMessage'] = 0;
    header('Location: ../index.php');
  }
  else{
    // if user info is not in db then establish error and return to login.
    $_SESSION['errorMessage'] = 1;
    header('Location: ../login.php');
    exit();
  }
?>
