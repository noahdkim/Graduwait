<?php
  session_start();
  if(isset($_SESSION['isLogged'])){
    if ($_SESSION['isLogged']){
        header("Location: index.php");
        exit();
      }
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body class="index-body">
    <div class = "container-fluid pt-4 mt-4">
      <div class="row align-items-center pt-5 mt-5">
        <div class="col-4 mx-auto form-border form-bg">
          <div class="row">
            <div class = "container-fluid form-header-bg">
              <img src="imgs/gw8_logo.png" class="img-fluid center">
            </div>
          </div>
            <form action="php/checkLogin.php" method="POST" class="pb-4 pt-4 login-form" id="form-signin">
              <div class="form-group">
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" autofocus>
                </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <br>
              <div class='response' style="color: red;">
              <?php
                 if (isset($_SESSION['loginErrorMessage'])){
                     echo "<strong>Incorrect Email or Password!</strong>";
                 }
                 else{

                 }
                ?>
              </div>
              <br>
              <h6><br>New to Graduwait? <a href="signup.php"> Sign up now</a></h6>
            </form>
        </div>
      </div>
    </div>
</body>
</html>
