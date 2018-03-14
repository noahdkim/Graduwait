<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="../css/signup.css">
<link rel="stylesheet" href="../css/styles.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script type="text/javascript" src="js/signup.js"></script>
</head>
<body class="index-body">
    <div class="container-fluid">
      <a href="login.php">
        <img src="../imgs/gw8_logo.png" style="width:50px;height:50px;">
      </a>
    </div>
    <div class = "container-fluid">
      <div class="row align-items-center pt-3 mt-3">
        <div class="col-4 mx-auto form-border form-bg info-form">
            <form action=php/signup.php method="POST" class="pb-4" id="form-signup">
              <div class="row">
                <div class = "container-fluid form-header-bg pt-3 pb-3">
                  <h2 class="form-signup-heading text-center"> Sign Up</h2>
                </div>
              </div>
              <div class="form-group pt-3">
                <label for="Name">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Full Name" required>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label for="school">School</label>
                <select class="school form-control" name="school" required>
                  <option value="eschool">School of Engineering And Applied Science</option>
                  <option value="college">College of Arts & Sciences</option>
                  <option value="ppol">Batten School of Leadership and Public Policy</option>
                  <option value="curry">Curry School of Education</option>
                  <option value="nursing">School of Nursing</option>
                </select>
              </div>
              <div class="form-group">
                <label for="major">Major</label>
                <select class="major form-control" name="major" id="major" required>
                  <!--Eschool-------------------->
                  <option rel="eschool" value="bme">Biomedical Engineering</option>
                  <option rel="eschool" value="csBS">Computer Science</option>
                  <option rel="eschool" value="sys">Systems Engineering</option>
                  <!--College-------------------->
                  <option rel="college" value="bio" disabled="True">Biology</option>
                  <option rel="college" value="chem" disabled="True">Chemistry</option>
                  <option rel="college" value="csBA" disabled="True">Computer Science</option>
                </select>
              </div>
              <div class="form-group">
                <label for="minor">Minor</label>
                <select class="minor form-control" name="minor" required>
                  <!--Eschool-------------------->
                  <option  value="none">None</option>
                  <option  value="business">Business</option>

                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button><br>
              <div class='response' style="color: red;">
              <?php
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
                    echo "<strong>We're sorry, that email is already registered!</strong>";
                }
                else{
                  $sql = "INSERT INTO users(fullName,email,password,school,major,minor)
                          VALUES('$name','$email','$password', '$school', '$major', '$minor')";
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
                                header('location: requirements.php');
                                $_SESSION['isLogged'] = true;
                                $_SESSION['email'] = $email;
                            }
                            else {
                                // echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            $conn->close();
                        }
                // print_r(array_keys($_POST));
                // print_r($_POST['name']);
               ?>
            </div>
            </form>
        </div>
      </div>
    </div>
</body>
</html>
