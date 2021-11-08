<?php
    
    //incluir arquivo de conexão
    include_once("conexaoBD.php");

    //isset() verifica se foi setado algum valor para $_GET[cpf_morador]
    if (isset($_GET["cpf_morador"])) {
        $cpfMorador = $_GET["cpf_morador"];

        $sql = "DELETE FROM Morador WHERE cpf_morador = $cpfMorador";

        if ($conn->query($sql) === TRUE) {
    ?>
            <script>
                alert("Registro do morador excluído com sucesso.");
                window.location = "pesquisarMorador.php";
            </script>

        <?php

        } else {
        ?>
            <script>
                alert("Erro ao excluir o registro do morador.");
                window.history.back();
            </script>
    <?php

        }
    }

?>