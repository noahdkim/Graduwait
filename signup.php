<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/signup.css">
<link rel="stylesheet" href="css/styles.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script type="text/javascript" src="js/signup.js"></script>
</head>
<body class="index-body">
    <div class="container-fluid">
      <a href="login.html">
        <img src="imgs/gw8_logo.png" style="width:50px;height:50px;">
      </a>
    </div>
    <div class = "container-fluid">
      <div class="row align-items-center pt-3 mt-3">
        <div class="col-4 mx-auto form-border form-bg info-form">
            <form action=php/checkSignup.php method="POST" class="pb-4" id="form-signup">
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
              <button type="submit" class="btn btn-primary">Submit</button>
              <div class='response' style="color: red;">
                <?php
                  if (isset($_SESSION['signupErrorMessage'])){
                      echo "<strong>We're sorry, that email is already registered!</strong>";
                  }
                ?>
                </div>
            </form>
        </div>
      </div>
    </div>
</body>
</html>
