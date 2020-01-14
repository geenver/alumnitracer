<!DOCTYPE html>
<html lang="en">
<?php include('../config.php') ?>
<?php include('../components/header.php') ?>

<body>
    <div id="particles-js">
    </div>
    <?php include('../components/navigation/default.php') ?>

    <?php if ($_POST) {
        $id = $_POST['id'];
        $fname = $_POST["fname"];
        $email =  $_POST["email_address"];
        $gradDate  = $_POST["graduation_date"];
        $gradCourse = $_POST["graduation_course"];
        $query = "UPDATE users SET fname = '$fname', email_address = '$email', graduation_date = '$gradDate', graduation_course = '$gradCourse' WHERE id ='$id'";
        if (mysqli_query($db, $query)) {


            header('Location: http://localhost/alumnitracer/admin.php');
        } else {
            header('Location: http://localhost/alumnitracer/u/error.php');
        }
    } else { ?>

        <div class="container">
            <form method="POST" action="user_update.php">
                <?php foreach ($_GET as $key => $value) { ?>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo $key ?></label>
                        <input class="form-control" value="<?php echo $value ?>" name="<?php echo $key ?>">
                    </div>

                <?php } ?>
                <button type="submit">Update</button>
            </form>
        </div>
    <?php } ?>
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