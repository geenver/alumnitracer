<!DOCTYPE html>
<html lang="en">
<?php include('../components/header.php') ?>

<body>
  <div id="particles-js"></div>
  <div class="container">

    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <?php include('../components/cards/errorCard.php') ?>
      </div>
    </div>
  </div>
  <?php include("../components/footer.php") ?>

</body>

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