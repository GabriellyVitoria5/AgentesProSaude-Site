<?php

    //incluir arquivo de conexão
    include_once("conexaoBD.php");

    //receber os dados do agente que veio do form via POST
    $nome = $_POST["txtNome"];
    $telefone = $_POST["txtTel"];
    $email = $_POST["txtEmail"];
    $cpf = $_POST["txtCpf"];
    $senha = $_POST["txtSenha"];

    //criar o comando sql do insert
    $sql = "INSERT INTO agentesprosaude.Agente (nome_agente, telefone, email, cpf_agente, senha_agente)
    VALUES ('$nome', '$telefone', '$email', '$cpf', md5($senha))";

    //executar o comando sql
    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Agente " + <?php echo $nome ?> + " cadastrado(a) salvo com sucesso!");
            window.location = "index.php";
        </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("Erro ao cadastrar agente");
                window.history.back(); //simula voltar do navegador
            </script>
        <?php
    }

?>