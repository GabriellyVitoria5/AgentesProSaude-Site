<?php
    include_once("conexaoBD.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgentesPróSaúde - Editar</title>
    <link rel="stylesheet" href="estilosPaginaInicial.css">

</head>

<style>

    input{
        border-radius: 10px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 20px;
        border-style: solid;
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
                        <li><a href="Tela12-GerarQuestionario.html">&#10148; Gerar</a></li>
                    </ul>

                    <a href="Tela1-Login.php">
                        <input class="botao" type="submit" value="Sair">
                    </a>

                </div>

            </article>

        </section>

        <aside>
            <article class="alinharCard">

                <h3 style="text-align: center; font-size: 25px;">Editar Perfil</h3>

                <div style="margin-left: 45px;">
                    
                    <h4>Nome:</h4> <input type="text" name="txtNome" value="<?php echo $_SESSION["nome"] ?>"> 
                    <h4>Telefone:</h4> <input type="text" name="txtTel" value="<?php echo $_SESSION["telefone"] ?>"> 
                    <h4>Email:</h4> <input type="text" name="txtEmail" value="<?php echo $_SESSION["email"] ?>"> 
                    <h4>CPF:</h4> <input type="text" name="txtCpf" value="<?php echo $_SESSION["cpf"] ?>">
                    <h4>Senha:</h4> <input type="number" name="txtSenha" value="<?php echo $_SESSION["senha"] ?>">  
                    <br><br>

                </div>

                <input class="botao" type="button" value="Confirmar">
                
                <a href="Tela4-PerfilAgente.html">
                    <input class="botao" type="button" value="Voltar">
                </a>
                <br><br>

            </article>
        </aside>

    </div>

</body>

</html>