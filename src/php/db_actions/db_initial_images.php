<?php
    require_once './src/php/db_actions/db_connection.php';
        

    $sql = "SELECT * FROM images WHERE urlimg = '8.jpg'";
    $result = mysqli_query($connection, $sql);
    
    if(mysqli_num_rows($result) > 0){
        
    }else{
        $sql = "INSERT INTO images (nomeimg, urlimg, assunto) VALUES ('Irmãos no Jardim','8.jpg','O Segredo Além do Jardim')";
        mysqli_query($connection, $sql);
    }
?>