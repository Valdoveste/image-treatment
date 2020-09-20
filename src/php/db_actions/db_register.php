<?php
    require_once './db_connection.php';

    if(isset($_POST["btn-register"])){
        $imgCaminho = mysqli_escape_string($connection, $_POST['imgCaminho']);

        $sql = "SELECT * FROM images WHERE urlimg = '$imgCaminho'";
        $result = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($result) > 0){
            echo "Name";
        }else{
            $imgNome = mysqli_escape_string($connection, $_POST['imgNome']);
            $imgAssunto = mysqli_escape_string($connection, $_POST['imgAssunto']);
    
            $sql = "INSERT INTO images (nomeimg, urlimg, assunto) VALUES ('$imgNome','$imgCaminho','$imgAssunto')";

            if(mysqli_query($connection, $sql) > 0){
                header('Location: ../register.php?sucesso');
            }else{
                header('Location: ../register.php?falha');
            }
        }
    }else{
        echo "Button";
    }
?>