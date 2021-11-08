<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>AgentesPróSaúde - Cadastro</title>
    <link rel='stylesheet' href='estilosTelas1e2.css'>
</head>

<body>

    <div class="containerCadastro">
        <div>
            <h1>Cadastro</h1>

            <form action="inserirAgente.php" method="post">
                    
                <input type="text" name="txtNome" required autofocus placeholder="Nome de usuário"> 
                <br><br>

                <input type="tel" name="txtTel" required placeholder="Telefone"> 
                <br><br>

                <input type="email" name="txtEmail" required placeholder="Email"> 
                <br><br>

                <input type="text" name="txtCpf" required placeholder="CPF"> 
                <br><br>
                    
                <input type="password" name="txtSenha" id="txtPass" required placeholder="Senha">
                <br><br>

                <input style="margin-right: 10px;" name="btnCadastrarAgente" class="botao" type="submit" value="Cadastrar">

                <a href="Tela1-Login">
                <input class="botao" type="button" name="btnCancelar" value="Voltar">
                </a>
                <br><br>

            </form>
        </div>
    </div>

</body>
</html>