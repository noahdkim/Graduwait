<?php
  session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require '../vendor/autoload.php';
  $mail = new PHPMailer(true);

  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "graduwaitUsers";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $school = $_POST['school'];
  $major = $_POST['major'];
  $minor = $_POST['minor'];
  $conn = new mysqli("localhost", $dbusername, $dbpassword, $dbname);

  $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
  if (mysqli_num_rows($query) != 0){
      $_SESSION['signupErrorMessage'] = 1;
      header('Location: ../signup.php');
      exit();
  }
  else{
    // Retrieve courses
    $res = mysqli_query($conn, "SELECT * FROM majors WHERE major='csBS'");
    if (mysqli_num_rows($res)==0) {
      $_SESSION['signupErrorMessage'] = 1;
      header('Location: ../signup.php');
     }
    $row = mysqli_fetch_assoc($res);
    $courses=$row["courses"];
    // Set Session variables for user
    $_SESSION['signupErrorMessage'] = 0;
    $_SESSION['isLogged'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['fullName'] = $name;
    $_SESSION['school'] = $school;
    $_SESSION['major'] = $major;
    $_SESSION['minor'] = $minor;
    $_SESSION['isLogged'] = 1;
    $_SESSION['loginErrorMessage'] = 0;
    $_SESSION['courses'] = ($row["courses"]);

    $sql = "INSERT INTO users(fullName,email,password,school,major,minor, courses)
            VALUES('$name','$email','$password', '$school', '$major', '$minor', '$courses')";
            if ($conn->query($sql) === TRUE) {
              session_start();
              try {
                  $mail->isSMTP();
                  $mail->SMTPAuth   = true;                                   // Set mailer to use SMTP
                  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers                              // Enable SMTP authentication
                  $mail->Username = 'graduwait@gmail.com';                 // SMTP username
                  $mail->Password = 'graduwait123';                           // SMTP password
                  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 587;                                    // TCP port to connect to
                  $mail->setFrom('graduwait@gmail.com', 'Mailer');
                  $mail->addAddress($email, $name);     // Add a recipient
                  $mail->isHTML(true);                                  // Set email format to HTML
                  $mail->Subject = 'Welcome to Graduwait!';
                  $mail->Body    = 'Hey, ' . $name . "! \n welcome to Graduwait!";
                  $mail->AltBody ='Hey, ' . $name . "! \n welcome to Graduwait!";
                  $mail->send();
                  } catch (Exception $e) {
                      echo 'Message could not be sent.';
                      // echo 'Mailer Error: ' . $mail->ErrorInfo;
                  }

                  header('location: ../index.php');





              }
              else {
                  // echo "Error: " . $sql . "<br>" . $conn->error;
              }
              $conn->close();
          }
  // print_r(array_keys($_POST));
  // print_r($_POST['name']);
?>
