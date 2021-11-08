<?php
    //inclui o arquivo de conexão
    require_once("conexaoBD.php");
    session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgentesPróSaúde - Perfil</title>
    <link rel="stylesheet" href="estilosPaginaInicial.css">

</head>

<style>

    .informaçoes{
        border: none;
        border-radius: 10px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 20px;
        background-color: rgb(219, 218, 218);
        padding-left: 5px;
    }

</style>

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
                        <li><a href="Tela4-PerfilAgente.php">&#10148; Visualizar</a></li>
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
                        <li><a href="Tela12-Gerar Questionario.html">&#10148; Gerar</a></li>
                    </ul>

                    <a href="Tela1-Login.php">
                        <input class="botao" type="submit" value="Sair">
                    </a>

                </div>

            </article>

        </section>

        <aside>
            <article class="alinharCard">

                <h3 style="text-align: center; font-size: 25px;">Perfil</h3>

                <div style="margin-left: 45px;">

                <?php
                //comando sql
                $sql = "SELECT * FROM agentesprosaude.Agente WHERE cpf_agente = '05187443204'";
                //executar o comando
                $dadosAgente = $conn->query($sql);
                $exibir = $dadosAgente->fetch_assoc()
                ?>

                    <h4>Nome:</h4> <input class="informaçoes" readonly type="text" name="txtNome" value="<?php echo $exibir["nome_agente"] ?>"> 
                    <h4>Telefone:</h4> <input class="informaçoes" readonly type="text" name="txtTel" value="<?php echo $exibir["telefone"] ?>"> 
                    <h4>Email:</h4> <input class="informaçoes" readonly type="text" name="txtEmail" value="<?php echo $exibir["email"] ?>"> 
                    <h4>CPF:</h4> <input class="informaçoes" readonly type="text" name="txtCpf" value="<?php echo $exibir["cpf_agente"] ?>"> 
                    <h4>Senha:</h4> <input class="informaçoes" readonly type="text" name="txtSenha" value="<?php echo $exibir["senha_agente"] ?>"> 
                    <br><br>

                </div>

                <a href="Tela5-EditarAgente.php">
                    <input class="botao" type="button" value="Editar">
                </a>

                <input class="botao" type="button" value="Excluir" onclick="confirmarExclusao(
                                                                    '<?php echo $exibir["cpf_agente"] ?>',
                                                                    '<?php echo $exibir["nome_agente"] ?>')">
                <br><br>


            </article>
        </aside>

    </div>

</body>

<script>

    function confirmarExclusao(nome, cpf) {
        if (window.confirm("Deseja realmente excluir o registro do(a) Agente: \n" + nome + " - " + cpf)) {
            window.location = "excluirAgente.php?cpf_agente=" + cpf;
        }
    }

</script>

</html>