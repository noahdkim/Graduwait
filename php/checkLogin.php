
<?php
  session_start();
  include "dbconnect.php";
  $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $res = mysqli_query($conn, $query) or die(mysqli_error);

  if (mysqli_num_rows($res) != 0){
    $row = mysqli_fetch_array($res);
    $query2 = "SELECT * FROM majors WHERE major='".$row['major'];
    $res2 = mysqli_query($conn, $query);
    $row2 = mysqli_fetch_array($res2);
    $_SESSION['fullName'] = $row['fullName'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['school'] = $row['school'];
    $_SESSION['major'] = $row['major'];
    $_SESSION['minor'] = $row['minor'];
    $_SESSION['isLogged'] = 1;
    $_SESSION['loginErrorMessage'] = 0;
    $_SESSION['toTake'] = $row['courses'];
    $_SESSION['req'] = $row2['courses'];

    header('Location: ../index.php');
  }
  else{
    // if user info is not in db then establish error and return to login.
    $_SESSION['loginErrorMessage'] = 1;
    $_SESSION['isLogged'] = 0;
    header('Location: ../login.php');
    exit();
  }
?>
