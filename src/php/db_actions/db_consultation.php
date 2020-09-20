<?php
    session_start();

    require_once './db_connection.php';

    if(isset($_POST["btn-consultation"])){
        $imgCodigo = mysqli_escape_string($connection, $_POST['imgCodigo']);

        $sql = "SELECT * FROM images WHERE idimg = '$imgCodigo'";
        $result = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_array($result);
            $_SESSION['imgData'] = $data;
            header('Location: ../consultation.php?sucesso=1');
        }else{
            echo "Codigo";
        }
    }else{
        echo "Button";
    } 
?>