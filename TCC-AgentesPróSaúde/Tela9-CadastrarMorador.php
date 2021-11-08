<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgentesPróSaúde - Cadastrar Morador</title>
    <link rel="stylesheet" href="estilosPaginaInicial.css">
    <link rel="stylesheet" href="estilosCadastrarMorador.css">

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
                        <li><a href="Tela6-CadastrarResidencia">&#10148; Cadastrar</a></li>
                        <li><a href="Tela7-PesquisarResidencia.html">&#10148; Pesquisar</a></li>
                    </ul>

                    <h3>Moradores</h3>
                    <ul id="menu">
                        <li><a href="Tela9-CadastrarMorador">&#10148; Cadastrar</a></li>
                        <li><a href="Tela10-PesquisarMorador.html">&#10148; Pesquisar</a></li>
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

                <h3 style="text-align: center; font-size: 25px;">Cadastrar Morador</h3>

                <form action="inserirMorador.php" method="POST">

                    <input type="text" name="txtNomeMorador" autofocus required placeholder="Nome"> 
                    <br><br>

                    <input type="text" name="txtTelMorador" required placeholder="Telefone"> 
                    <br><br>

                    <input type="text" name="txtCPFMorador" required placeholder="CPF"> 
                    <br><br>

                    <input style="color: gray;" type="date" name="dtData" required placeholder="Data de Nascimento"> 
                    <br><br>

                    <input class="botaoMorador" name="btnCadastrarMorador" type="submit" value="Cadastrar">
                    <br><br>

                </form>

            </article>
        </aside>

    </div>

</body>

</html>