<?php
require_once '../config.php';

$POST = file_get_contents("php://input");
parse_str($POST, $DATA);

$NAME = $DATA['name'];
$EMAIL = $DATA['email_address'];
$GOOGLEID = $DATA['google_id'];
$GRAD_DATE = $DATA['graduation_date'];
$GRAD_COURSE = $DATA['graduation_course'];
$IMAGE_URL = $DATA['image_url'];

$sql = "INSERT INTO `users`(`id`, `fname`, `email_address`, `graduation_date`, `graduation_course`, `image_url`) VALUES (NULL, '$NAME','$EMAIL','$GRAD_DATE','$GRAD_COURSE', '$IMAGE_URL')";



// Perform a query, check for error;
if (mysqli_query($db, $sql)) {
  header("Location: http://localhost/alumnitracer/u/admin.php");
} else {

  header("Location: http://localhost/alumnitracer/u/error.php");
};

mysqli_close($db);
