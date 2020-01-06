<?php

require_once 'config.php';

$CREATE_USERS_TABLE = "CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(32) NOT NULL,
  `email_address` varchar(32) NOT NULL UNIQUE,
  `graduation_date` text NOT NULL,
  `graduation_course` text NOT NULL,
  `image_url` text
)";


$COLLECTION_OF_TABLES_TO_CREATE = array(
  $CREATE_USERS_TABLE
);

foreach ($COLLECTION_OF_TABLES_TO_CREATE as $table) {
  if (mysqli_query($db, $table)) {
    echo "Table created successfully.";
  } else {
    echo "ERROR: $sql. " . mysqli_error($db);
  }
};

mysqli_close($db);
