<!DOCTYPE html>
<html lang="en">
<?php include('config.php') ?>
<?php include('components/header.php') ?>

<body>
    <div id="particles-js">
    </div>
    <a href="http://localhost/alumnitracer/">Back <--</a> <?php include('components/navigation/default.php') ?> <div class="container">
            <table class="table" style="color: yellow">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Graduation Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('./config.php');
                    $result = $db->query("SELECT * FROM users");
                    while ($user = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                        <tr>
                            <th scope="row">
                                <?php echo $user['id'] ?>
                            </th>
                            <td>
                                <?php echo $user['fname'] ?>
                            </td>
                            <td>
                                <?php echo $user['email_address'] ?>
                            </td>
                            <td>
                                <?php echo $user['graduation_date'] ?>
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <!-- insert -->

                                    <form action="<?php echo $BASE_URL . 'db/new_user.php' ?>" method="POST">
                                        <input type="text" value="<?php echo $user['id'] ?>" style="display: none" name="id">
                                        <button type="submit">Insert</button>
                                    </form>
                                    <!-- Delete -->

                                    <form action="<?php echo $BASE_URL . 'db/user_delete.php' ?>" method="POST">
                                        <input type="text" value="<?php echo $user['id'] ?>" style="display: none" name="id">
                                        <button type="submit">Delete</button>
                                    </form>

                                    <!-- Update -->
                                    <form action="<?php echo $BASE_URL . 'db/user_update.php' ?>" method="GET">


                                        <?php
                                        foreach ($user as $key => $value) { ?>
                                            <input style="display: none" type="text" value="<?php echo $value ?>" name="<?php echo $key ?>">
                                        <?php } ?>
                                        <button type="submit">Update</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

            </div>
            <?php include("components/footer.php") ?>

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