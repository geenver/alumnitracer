<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "alumnitracer");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email_address = mysqli_real_escape_string($link, $_REQUEST['email_address']);
$google_id = mysqli_real_escape_string($link, $_REQUEST['google_id']);
$graduation_date = mysqli_real_escape_string($link, $_REQUEST['graduation_date']);
$graduation_course = mysqli_real_escape_string($link, $_REQUEST['graduation_course']);
$image_url = mysqli_real_escape_string($link, $_REQUEST['image_url']);
// Attempt insert query execution
$sql = "INSERT INTO persons (name, email_address, google_id, graduation_date, graduation_course, image_url) VALUES ('$name', '$email_address', '$graduation_date', '$graduation_course','$image_url')";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
