<?php

    //incluir arquivo de conexão
    include_once("conexaoBD.php");

    //receber os dados da residencia que veio do form via POST
    $endereco = $_POST["txtEndereco"];
    $complemento = $_POST["txtComplemento"];
    //$cpfAgente;
    $bairro = $_POST["txtBairro"];
    
    //criar o comando sql do insert
    $sql = "INSERT INTO agentesprosaude.Residencia (endereco, complemento, cpf_agente, bairro)
    VALUES ('$endereco', '$complemento', '05187443204', '$bairro')"; //arrumar o cpf_agente

    //executar o comando sql
    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Residência cadastrada com sucesso!");
            window.location = "Tela7-PesquisarResidencia.php";
        </script>
        
        <?php
    }
    else{
        ?>
            <script>
                alert("Erro ao cadastrar residência");
                window.history.back(); //simula voltar do navegador
            </script>
        <?php
    }

?>