
<?php
  session_start();
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
    // if user info is not in db then establish error and return to login.
    $_SESSION['errorMessage'] = 1;
    header('Location: ../login.php');
    exit();
  }
?>
