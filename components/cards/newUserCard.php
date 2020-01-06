<?php

$EMAIL = $_GET['email'];
$sql = "SELECT * FROM `users`";

$result = $db->query("SELECT * FROM users WHERE email_address = '$EMAIL'");
if (!$EMAIL) {
  header("Location: http://localhost/alumnitracer");
} else if (mysqli_num_rows($result) != 0) {
  header("Location: http://localhost/alumnitracer/u/dashboard.php");
}

?>

<div class="card p-5" style="margin-top: 20vh">
  <img style="height: auto; width: 50%; text-align: center; margin-left: 250px" src="http://slsu.edu.ph/wp-content/uploads/2019/06/logo_originalxbigger_font.png" alt="">
  <div class="card-body">
    <blockquote class="blockquote text-center">
      <p class="mb-0">You are now registered. To continue, fill up the form below and press the submit button.
      </p>
      <footer class="blockquote-footer">
        <cite title="Source Title">
          <a target="_blank" href="http://slsu.edu.ph/">slsu.edu.ph</a>
        </cite>
      </footer>
    </blockquote>
    <form action="<?php echo $BASE_URL . 'db/user_insert.php' ?>" method="post">
      <div class="form-group">
        <label for="name">Image</label>
        <input name="image_url" type="text" class="form-control" value="<?php echo $_GET['imageUrl'] ?>" id="name" readonly>
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" value="<?php echo $_GET['name'] ?>" id="name" readonly>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email_address" type="email" class="form-control" id="email" value="<?php echo $_GET['email'] ?>" readonly name="email_address">
      </div>
      <div class="form-group">
        <label for="course">Course</label>
        <select id="course" class="custom-select" name="graduation_course">
          <option>
            Bachelor of Elementary Education
          </option>
          <option>
            Bachelor in Physical Education
          </option>
          <option>
            Bachelor of Secondary Education
          </option>
          <option>
            Bachelor in Physical Education major in Sports Wellness and Management
          </option>
          <option>
            BS in Industrial Technology
          </option>
          <option>
            Bachelor of Agricultural Technology
          </option>
          <option>
            BS in Agriculture
          </option>
          <option>
            BS in Business Administration
          </option>
          <option>
            BS in Civil Engineering
          </option>
          <option>
            BS in Computer Engineering
          </option>
          <option>
            BS in Electrical Engineering
          </option>
          <option>
            BS in Electronics and Communications Engineering
          </option>
          <option>
            BS in Industrial Engineering
          </option>
          <option>
            BS in Mechanical Engineering
          </option>
          <option>
            BS in Biology
          </option>
          <option>
            BS in Environmental Science
          </option>
          <option>
            BS in Mathematics
          </option>
          <option>
            BS in Nursing
          </option>
          <option>
            AB in History
          </option>
          <option>
            BS in Industrial Technology major in Industrial Design Technology
          </option>
          <option>
            AB in Communication
          </option>
          <option>
            AB in Communication
          </option>
          <option>
            AB in Psychology
          </option>
          <option>
            BS in Hotel and Restaurant Management
          </option>
        </select>
      </div>
      <div class="form-group">
        <label for="datepicker">Graduation Date</label>
        <input id="datepicker" name="graduation_date" />
        <script>
          $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
          });
        </script>
      </div>

      <button type="submit" name="submit" class="btn btn-primary mt-5" style="margin: auto; display: block">Submit</button>
    </form>
  </div>
</div>

<script>
  function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log(profile)
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  }
</script>

<style>
  .g-signin2 {
    width: 100%;
  }

  .g-signin2>div {
    margin: 0 auto;
  }
</style>