<?php

    //iniciando a session
    session_start(); 

    //destruindo a session
    session_destroy(); 
    
    //fazendo o redirecionamento para outra página (login)
    header("location: index.php"); 
?>