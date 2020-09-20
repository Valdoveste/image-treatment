<?php
    // require_once '';
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <!-- <meta http-equiv="refresh" content="2"> -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./global.css">
        <link rel="stylesheet" href="./src/css/home.css">
    </head>
    <body>
        <div id="aling-center">
            <div id="main-container">
                <div id="container-image-showcase">
                    <img class="img" src="" alt="">
                </div>
                <hr>
                <div id="config-panel-content">
                    <!-- Botões de proximo e anterior -->
                    <button title="Proximo">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path class="svg" d="M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z"/>
                        </svg>
                    </button>

                    <button title="Anterior">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path class="svg" d="M5.88 4.12L13.76 12l-7.88 7.88L8 22l10-10L8 2z"/>
                        </svg>
                    </button>

                    <!-- Botões de incluir img e consultar img -->
                    <button title="Incluir imagem">
                        <a href="./src/php/register.php">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path class="svg" d="M19 7v2.99s-1.99.01-2 0V7h-3s.01-1.99 
                                0-2h3V2h2v3h3v2h-3zm-3 4V8h-3V5H5c-1.1 0-2 .9-2 
                                2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8h-3zM5 
                                19l3-4 2 3 3-4 4 5H5z"/>
                            </svg>
                        </a>
                    </button>
                        
                    <button title="Consultar imagem">
                        <a href="./src/php/consultation.php">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path class="svg" d="M18 13v7H4V6h5.02c.05-.71.22-1.38.48-2H4c-1.1 
                                0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5l-2-2zm-1.5 
                                5h-11l2.75-3.53 1.96 2.36 2.75-3.54zm2.8-9.11c.44-.7.7-1.51.7-2.39C20 
                                4.01 17.99 2 15.5 2S11 4.01 11 6.5s2.01 4.5 4.49 4.5c.88 0 1.7-.26 
                                2.39-.7L21 13.42 22.42 12 19.3 8.89zM15.5 9C14.12 9 13 7.88 13 6.5S14.12 
                                4 15.5 4 18 5.12 18 6.5 16.88 9 15.5 9z"/>
                            </svg>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>