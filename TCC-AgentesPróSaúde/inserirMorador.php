<?php

    //incluir arquivo de conexão
    include_once("conexaoBD.php");

    //receber os dados do morador que veio do form via POST
    $nomeMorador = $_POST["txtNomeMorador"];
    $telefoneMorador = $_POST["txtTelMorador"];
    $cpfMorador = $_POST["txtCPFMorador"];
    $data = $_POST["dtData"];

    //criar o comando sql do insert
    $sql = "INSERT INTO agentesprosaude.Morador (nome_morador, telefone , cpf_morador, data_nascimento, ID_residencia)
    VALUES ('$nomeMorador', '$telefoneMorador', '$cpfMorador', '$data', 3)"; //arrumar o ID_residencia

    //executar o comando sql
    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Morador(a) " + <?php echo $nomeMorador?> +  "cadastrado(a) com sucesso!");
            window.location = "Tela10-PesquisarMorador.php";
        </script>
        
        <?php
    }
    else{
        ?>
            <script>
                alert("Erro ao cadastrar novo morador!");
                window.history.back(); //simula voltar do navegador
            </script>
        <?php
    }

?>