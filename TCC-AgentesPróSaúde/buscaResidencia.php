<?php

    include_once("conexaoBD.php");

    $pesquisaResidencia = $_POST["pesquisaResidencia"];

    //comando sql
    $sql = "SELECT * FROM agentesprosaude.Residencia 
    WHERE nome_morador like '%$pesquisaResidencia%'
    or telefone like '%$pesquisaResidencia%'
    or cpf_morador like '%$pesquisaResidencia%'
    order by endereco, bairro";
    
    //executar o comando
    $dadosResidencia = $conn->query($sql);

    //se número de registro retornados for maior que 0
    if ($dadosResidencia->num_rows > 0) {
    ?>


        <div class = "tabela">

            <table>
                
                <caption>Tabela de Residências</caption>

                <thead>
                    <tr>
                        <th>Endereço</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>

                <?php
                while ($exibir = $dadosResidencia->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $exibir["endereco"] ?> </td>
                        <td><?php echo $exibir["complemento"] ?> </td>
                        <td><?php echo $exibir["bairro"] ?> </td>
                        <?php
                        
                        ?>
                        <td><a class="editarExcluir" href="Tela8-EditarResidencia.php?ID_residencia=<?php echo $exibir["ID_residencia"] ?>">Editar</a></td>

                        <td>
                            <a class="editarExcluir" href="#" onclick="confirmarExclusao(
                            '<?php echo $exibir["ID_residencia"] ?>',
                            '<?php echo $exibir["endereco"] ?>',
                            '<?php echo $exibir["complemento"] ?>',
                            '<?php echo $exibir["bairro"] ?>')">
                                Excluir
                            </a>
                        </td>
                        
                    </tr>

                <?php
            }

            ?>
            </table>  
        </div>
    <?php
    }
    else {
        echo "<h4>Nenhum registro retornado!</h4";
    }
?>