<?php
// Create connection
require_once './src/php/db_actions/db_connection.php';

// sql to create table
$sql = "CREATE TABLE images (
    idimg INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nomeimg VARCHAR(30) NOT NULL,
    urlimg VARCHAR(30) NOT NULL,
    assunto VARCHAR(30) NOT NULL
) DEFAULT CHARSET = utf8 COLLATE = utf8_bin";

switch($connection->query($sql)){
    case TRUE:
        echo 
        "<script>".
            "Table MyGuests created successfully".
        "</script>";
    break;

    case FALSE:
        echo 
        "<script>".
            "Error creating table: " . $connection->error.
        "</script>";
    break;
}
?>
    