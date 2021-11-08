<?php
    include_once("conexaoBD.php");
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>AgentesPróSaúde - Login</title>
    <link rel='stylesheet' href='estilosTelas1e2.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="containerLogin">
        <div>
            <h1>AgentesPróSaúde</h1>
            <h1>Login</h1>

            <form action="login.php" method="post">
                    
                <input type="text" name="txtCpf" id="txtCpf" autofocus required placeholder="CPF"> 
                <br><br>
    
                <input type="password" name="txtSenha" id="txtSenha" required placeholder="Senha">
                <br><br>

                <!--
                <a href="Tela3-PaginaInicial.php">
                    <input class="botao" type="button" value="Login">
                </a> -->

                <input class="botao" type="submit" value="Login">
                <br><br>

                <a href="Tela2-CadastrarAgente.php">
                    <input class="botao" type="button" value="Cadastrar">
                </a>
                <br><br>

            </form>
        </div>
    </div>

</body>
</html>