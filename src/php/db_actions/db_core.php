<?php
    $connection = new mysqli(
        "localhost", 
        "root",
        ""
    );

    mysqli_set_charset($connection, 'utf8');

    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }

    // Creating DB 
    $sql = "CREATE DATABASE image_treatment CHARACTER SET utf8 COLLATE utf8_bin";
    switch($connection->query($sql)){
        case TRUE:
            echo 
            "<script>".
                "console.log(Database create successfully)".
            "</script>";
            break;
        case FALSE:
            echo 
            "<script>".
                "Error creating datavase: " . $connection->error.
            "</script>";
            break;
    }

    require_once './src/php/db_actions/db_table.php';
?>