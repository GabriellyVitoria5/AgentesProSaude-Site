<?php
    include_once("conexaoBD.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgentesPróSaúde - Pesquisar Morador</title>
    <link rel="stylesheet" href="estilosPaginaInicial.css">
    <link rel="stylesheet" href="estilosPesquisarMorador.css">

    <script>

        $(document).ready(function() {
            $("#form-pesquisaMorador").submit(function(evento) {
                evento.preventDefault();
                let pesquisa = $("#pesquisaMorador").val();

                let dados = {
                    pesquisa: pesquisa,
                }

                $.post("buscaMorador.php", dados, function(retorna) {
                    $(".resultadosMorador").html(retorna);
                });
            });
        });


        function confirmarExclusao(nome, cpf) {
            if (window.confirm("Deseja realmente excluir o registro: \n" + nome + " " + cpf)) {
                window.location = "excluirMorador.php?cpf_morador=" + cpf;
            }
        }

    </script>

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

                <form id="form-pesquisaMorador" action="" method="post">

                    <img src="imgTCC//icone-search.png" id="btnBusca" alt="Buscar"/>
                    <label for="pesquisa">Informe o campo a ser pesquisado</label>
                    <br><br>
                    <input type="text" name="pesquisaMorador" id="pesquisaMorador" placeholder="Buscar...">
                    <input type="submit" name="enviarMorador"  value="Pesquisar">

                </form>

                <div class="resultadosMorador">

                </div>

                <!-- -->
                <?php

                //comando sql
                $sql = "SELECT * FROM agentesprosaude.Morador order by nome_morador";
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
                <!-- -->

            </article>
        </aside>

    </div>

</body>

</html>
