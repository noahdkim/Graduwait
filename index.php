<?php
  session_start();
  if (!$_SESSION['isLogged']){
      header("Location: login.php");
      exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/requirements.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script type="text/javascript" src="js/signup.js"></script>
</head>
<body class="index-body">
  <div class="container-fluid head-img">
    <a href="index.php">
      <img src="imgs/gw8_logo.png" style="width:50px;height:50px;">
    </a>
  </div>
  <ul class="nav nav-tabs justify-content-end" role="tablist" >
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#requirements" role="tab">Requirements</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#suggestions" role="tab">Suggestions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
    </li>
    <?php if (!$_SESSION['isLogged']): ?>
      <a class="nav-link" data-toggle="tab" href="login.php" role="tab">Login</a>
    <?php else: ?>
      <a class="nav-link" href="logout.php" role="tab">Logout</a>
    <?php endif; ?>
  </ul>

  <div class="tab-content">
  <div class="tab-pane active" id="requirements" role="tabpanel"><?php require 'requirements.php';?></div>
  <div class="tab-pane" id="suggestions" role="tabpanel"><?php require 'suggestions.php';?></div>
  <div class="tab-pane" id="profile" role="tabpanel"><?php require 'profile.php';?></div>
</div>
</body>
</html>
