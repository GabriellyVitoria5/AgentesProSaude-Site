<?php
    include_once("conexaoBD.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgentesPróSaúde - Pesquisar Residência</title>
    <link rel="stylesheet" href="estilosPaginaInicial.css">
    <link rel="stylesheet" href="estilosPesquisarResidencia.css">

</head>

<body>

    <header>
        <h1>AgentesPróSaúde</h1>
    </header>

    <h3 class="barra"></h3>

    <div>

        <section>

            <article class="alinharCard">

                <div class="menu">

                    <h3>Perfil</h3>
                    <ul id="menu">
                        <li><a href="Tela4-PerfilAgente.html">&#10148; Visualizar</a></li>
                    </ul>

                    <h3>Residências</h3>
                    <ul id="menu">
                        <li><a href="Tela6-CadastrarResidencia.php">&#10148; Cadastrar</a></li>
                        <li><a href="Tela7-PesquisarResidencia.php">&#10148; Pesquisar</a></li>
                    </ul>

                    <h3>Moradores</h3>
                    <ul id="menu">
                        <li><a href="Tela9-CadastrarMorador.php">&#10148; Cadastrar</a></li>
                        <li><a href="Tela10-PesquisarMorador.php">&#10148; Pesquisar</a></li>
                    </ul>

                    <h3>Questionário</h3>
                    <ul id="menu">
                        <li><a href="Tela12-GerarQuestionario.html">&#10148; Gerar</a></li>
                    </ul>

                    <a href="Tela1-Login.html">
                        <input class="botao" type="submit" value="Sair">
                    </a>

                </div>

            </article>

        </section>

        <aside>
            <article class="alinharCard">

                <?php

                //comando sql
                $sql = "SELECT * FROM agentesprosaude.Residencia ORDER BY endereco, bairro";
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

                ?>

                <br><br>


            </article>
        </aside>

    </div>

</body>

<script>

    function confirmarExclusao(id, endereco, complemento, bairro) {
        if (window.confirm("Deseja realmente excluir o registro da residência: \n" + id + " " + endereco + " " + complemento + " " + bairro)) {
            window.location = "excluirResidencia.php?ID_residencia=" + id;
        }
    }

</script>

</html>