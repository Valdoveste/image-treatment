<?php 
// Create connection
$connection = new mysqli(
    "localhost",
    "root",
    "",
    "image_treatment"
);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>