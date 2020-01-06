<!DOCTYPE html>
<html lang="en">
<?php include('config.php') ?>
<?php include('components/header.php') ?>

<body>
  <div id="particles-js"></div>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <?php include('components/cards/loginWithGoogleCard.php') ?>
      </div>
    </div>
  </div>
</body>
<!-- Custom scripts -->
<script src="<?php echo $BASE_URL, 'script/particlesConfig.js' ?>"></script>

</html>