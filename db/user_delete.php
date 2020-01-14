<?php
require_once('../config.php');
$query = "DELETE FROM users WHERE id=" . $_POST['id'];
if (mysqli_query($db, $query)) {
    header('Location: http://localhost/alumnitracer/admin.php');
} else {
    echo "MAY PROBLEMA";
};
