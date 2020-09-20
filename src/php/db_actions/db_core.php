<?php
    $connection = new mysqli(
        "localhost", 
        "root",
        ""
    );

    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }

    // Creating DB 
    $sql = "CREATE DATABASE image_treatment";
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