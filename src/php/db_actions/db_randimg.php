<?php
/*     require_once './src/php/db_actions/db_connection.php';

    $sql = "SELECT COUNT(idimg) FROM images";
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0){
        $dataq = mysqli_fetch_assoc($result);
        echo rand(1,$dataq['COUNT(idimg)']);

        $sql = "SELECT * FROM images WHERE";
        $result = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_array($result);
            var_dump($data);
            $_SESSION['imgData'] = $data;
            header('Location: ../consultation.php?sucesso=1');
        }
    }else{
        header('location: ./index.php?sucesso');
    } */
?>