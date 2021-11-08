<?php

    //parâmetros para a conexão
    $servername = "200.18.128.50"; //ip
    $username = "agentesprosaude";
    $password = "2021@Agentesprosaude";
    $dbname = "agentesprosaude"; //nome do banco

    //criar objeto conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    //checar conexão
    if($conn->connect_error){
        die("Falha na conexão: " . $conn->connected_error);
    }
?>