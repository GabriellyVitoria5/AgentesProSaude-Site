<?php

    //inclui o arquivo de conexão
    require_once("conexaoBD.php");

    //starta a session
    session_start(); 
    //receber usuário e senha vindo do login
    $cpf = $conn->real_escape_string($_POST["txtCpf"]);

    //$senha = md5($_POST["txtSenha"]);
    $senha = $_POST["txtSenha"];

    $sql = "SELECT * 
            from Agente 
            where cpf_agente = '$cpf' and 
            senha_agente = '$senha'";

    //echo $sql;

    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){

        $dados_agente = $resultado->fetch_assoc();
        //preencher a session com os dados do usuário
        $_SESSION["nome"] = $dados_agente["nome_agente"];
        $_SESSION["telefone"] = $dados_agente["telefone"];
        $_SESSION["cpf"] = $dados_agente["cpf_agente"];
        $_SESSION["email"] = $dados_agente["email"];
        $_SESSION["senha"] = $dados_agente["senha_agente"];

        header("location: Tela3-PaginaInicial.php");
        
    }else{
            $_SESSION["erro"] = "Erro";
        ?>
        <script>window.history.back();</script>
        <?php
    }
?>
