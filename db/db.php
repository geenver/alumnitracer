<?php
include 'models/persons.php';
include 'models/cat.php';

//ito po ay coconect sa database
$link = mysqli_connect("localhost", "root", "", "alumnitracer");

// Collection ng table sa models
$ARRAY_OF_TABLES = array(
    $PERSONS_TABLE,
    $CAT_TABLE
);

//ichecheck ang connection
if ($link == false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$array = array("Jonathan", "Sampson");


// Sa bawat isa sa collection kng
foreach ($ARRAY_OF_TABLES as $sql) {
    if (mysqli_query($link, $sql)) {
        echo "Table created successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
};



// Close connection
mysqli_close($link);
