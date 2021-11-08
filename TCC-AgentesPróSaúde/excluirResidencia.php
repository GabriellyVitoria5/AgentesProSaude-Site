<?php
    
    //incluir arquivo de conexão
    include_once("conexaoBD.php");

    //isset() verifica se foi setado algum valor para $_GET[ID_residencia]
    if (isset($_GET["ID_residencia"])) {
        $idResidencia = $_GET["ID_residencia"];

        $sql = "DELETE FROM Residencia WHERE ID_residencia = $idResidencia";

        if ($conn->query($sql) === TRUE) {
    ?>
            <script>
                alert("Registro da residência excluído com sucesso.");
                window.location = "pesquisarResidencia.php";
            </script>

        <?php

        } else {
        ?>
            <script>
                alert("Erro ao excluir o registro da residência.");
                window.history.back();
            </script>
    <?php

        }
    }

?>