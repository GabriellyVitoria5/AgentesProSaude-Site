<?php

    include_once("conexaoBD.php");

    $pesquisa = $_POST["pesquisa"];

    //comando sql
    $sql = "SELECT * FROM agentesprosaude.Morador 
    WHERE nome_morador like '%$pesquisa%'
    or telefone like '%$pesquisa%'
    or cpf_morador like '%$pesquisa%'
    order by nome_morador";
    
    //executar o comando
    $dadosMoradores = $conn->query($sql);

    //se número de registro retornados for maior que 0
    if ($dadosMoradores->num_rows > 0) {
    ?>

        <div class = "tabela">
            <table>
                <caption>Tabela de Moradores</caption>

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>ID da Residência</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>

                <?php
                while ($exibir = $dadosMoradores->fetch_assoc()) {


                    //$sqlDataNascimento ="SELECT data_nascimento FROM agentesprosaude.Morador";
                    //$dataNascimento = date("d/m/Y", strtotime($conn->query($sqlDataNascimento)));
                ?>

                    <tr>
                        <td><?php echo $exibir["nome_morador"] ?></td>
                        <td><?php echo $exibir["telefone"] ?> </td>
                        <td><?php echo $exibir["cpf_morador"] ?> </td>
                        <td><?php echo $exibir["data_nascimento"] ?> </td>
                        <td><?php echo $exibir["ID_residencia"] ?> </td>

                        <td><a class="editarExcluir" href="Tela11-EditarMorador.php?cpf_morador=<?php echo $exibir["cpf_morador"] ?>">Editar</a></td>

                        <td>
                            <a class="editarExcluir" href="#" onclick="confirmarExclusao(
                            '<?php echo $exibir["nome_morador"] ?>',
                            '<?php echo $exibir["cpf_morador"] ?>')">
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

?>