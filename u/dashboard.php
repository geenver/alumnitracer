<!DOCTYPE html>
<html lang="en">
<?php include('../config.php') ?>
<?php include('../components/header.php') ?>

<body>
  <div id="particles-js"></div>
  <?php include('../components/navigation/default.php') ?>
  <div class="container">
    <div class="row">

      <?php
      $search_query = $_GET['search_query'];
      if ($search_query != '') {
        $result = $db->query("SELECT * FROM users WHERE fname LIKE '%$search_query%'");
      } else {
        $result = $db->query("SELECT * FROM users");
      }


      if (mysqli_num_rows($result) != 0) {


        while ($user = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
          <div class="col-md-4 mb-5 profile-card">
            <div class="media">
              <img id="userProfileImg" src="<?php echo $user['image_url'] ?>" class="mr-3" alt="...">
            </div>
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                  <h5> <?php echo $user['fname'] ?></h5>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <small>Graduation Date:</small> <br> <?php echo $user['graduation_date'] ?>
                </li>
                <li class="list-group-item">
                  <small>Email Address: </small> <br> <?php echo $user['email_address'] ?>
                </li>
                <li class="list-group-item">
                  <small>Course: </small> <br> <?php echo $user['graduation_course'] ?>
                </li>
              </ul>
            </div>
          </div>
        <?php };
      } else { ?>

        <div class="container">

          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <div class="card text-center p-5" style="margin-top: 20vh">
                <div class="card-body">
                  <blockquote class="blockquote text-center">
                    <p class="mb-0">
                      "<?php echo $search_query ?> " did not match any results from the system. Press <a href="./dashboard.php">here</a> to reload the page.
                    </p>
                    <footer class="blockquote-footer">
                      <cite title="Source Title">
                        <a target="_blank" href="http://slsu.edu.ph/">slsu.edu.ph</a>
                      </cite>
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php  } ?>
    </div>
  </div>
  <?php include("../components/footer.php") ?>

</body>

<script>
  const user = localStorage.getItem('user');

  if (!user) {
    console.log('Not logged in ')
    window.location.href = 'http://localhost/alumnitracer'
  }
</script>

<!-- Google API -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="638638469798-vn7pokmin15f55if5mcgtkndtc67gocf.apps.googleusercontent.com">

<!-- JS -->

<!-- JQUERY Dependency -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Popper JS Dependency -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<!-- Bootstrap 4 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Third party plugins -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<!-- Scripts -->
<script src="<?php echo $BASE_URL, 'script/particlesConfig.js' ?>"></script>

</html>