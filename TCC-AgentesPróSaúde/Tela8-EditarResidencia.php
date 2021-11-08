<?php
    include_once("conexaoBD.php");

    if (isset($_POST["txtEndereco"])){
        $endereco = $_GET["txtEndereco"];
        $complemento = $_POST["txtComplemento"];
        $bairro = $_POST["txtBairro"];

        $sql = "UPDATE agentesprosaude.Residencia SET endereco = '$endereco', 
                complemento = '$complemento',     
                bairro = '$bairro',
                where ID_residencia = '$cpfMorador'";

        if ($conn->query($sql) === TRUE) {
            ?>
            <script>
                alert("Registro atualizado com sucesso!");
                window.location = "Tela10-PesquisarMorador.php";
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Erro ao atualizar o registro!");
                window.history.back();
            </script>
            <?php
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgentesPróSaúde - Editar Residência</title>
    <link rel="stylesheet" href="estilosPaginaInicial.css">
    <link rel="stylesheet" href="estilosCadastrarResidencia.css">

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
                        <li><a href="Tela7-Pesquisar Residencia.html">&#10148; Pesquisar</a></li>
                    </ul>

                    <h3>Moradores</h3>
                    <ul id="menu">
                        <li><a href="Tela9-Cadastrar Morador.php">&#10148; Cadastrar</a></li>
                        <li><a href="Tela10-Pesquisar Morador.html">&#10148; Pesquisar</a></li>
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

                <h3 style="text-align: center; font-size: 25px;">Editar Residência</h3>

                <?php
                    if(isset($_GET["ID_residencia"])){
                        $id = $_GET["ID_residencia"];
                        $sql = "SELECT * from agentesprosaude.Residencia WHERE ID_residencia = $id";
                        $consulta = $conn->query($sql);
                        $residencia = $consulta->fetch_assoc(); 
                    }
                ?>

                <form action="Tela8-EditarResidencia.php?ID_residencia=<?php echo $_GET['ID_residencia']?>" method="POST">

                    
                    <input type="text" name="txtEndereco" value="<?php echo $residencia["endereco"]?>"> 
                    <br><br>

                    <input type="text" name="txtComplemento" value="<?php echo $residencia["complemento"]?>"> 
                    <br><br>

                    <input type="text" name="txtBairro" value="<?php echo $residencia["bairro"]?>"> 
                    <br><br>

                    <input class="botaoResidencia" type="submit" value="Confirmar">

                    <a href="Tela7-PesquisarResidencia.php">
                        <input class="botaoResidencia" type="button" value="Voltar">
                    </a>
                    <br><br>

                </form>

            </article>
        </aside>

    </div>

</body>

</html>