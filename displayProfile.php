
<div class = "container-fluid pt-4 mt-4">
  <div class="row align-items-center pt-5 mt-5" style='margin-bottom: 150px;' >
    <div class="col-4 mx-auto form-border form-bg">
        <form action="java servlet to post thing" method="POST" class="pb-4 pt-4 login-form" id="form-signin">
          <div class="form-group">
            <label for="Name">Full Name</label>
            <input type="text" class="form-control" name="fullName" aria-describedby="emailHelp" value="<?php echo($_SESSION['fullName'])?>" disabled>
            </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo($_SESSION['email'])?>">
          </div>
          <div class="form-group">
            <label for="school">School</label>
            <select class="school form-control" name="school" value="<?php echo($_SESSION['school']) ?>">
              <option value="eschool">School of Engineering And Applied Science</option>
              <option value="college">College of Arts & Sciences</option>
              <option value="ppol">Batten School of Leadership and Public Policy</option>
              <option value="curry">Curry School of Education</option>
              <option value="nursing">School of Nursing</option>
            </select>
          </div>
          <div class="form-group">
            <label for="major">Major</label>
            <select class="major form-control" name="major" id="major" value="<?php echo($_SESSION['major']) ?>">
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
          <button type="submit" class="btn btn-primary">Edit</button>
          <br>
          <div class='response' style="color: red;">
          </div>
          <!-- <br> -->
          <!-- <h6><br><a href="">Change password</a></h6> -->
        </form>
    </div>
  </div>
</div>
