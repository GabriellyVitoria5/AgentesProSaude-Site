<?php
    include_once("conexaoBD.php");

    if (isset($_POST["txtNomeMorador"])){
        $cpfMorador = $_GET["txtCPFMorador"];
        $nomeMorador = $_POST["txtNomeMorador"];
        $telefoneMorador = $_POST["txtTelMorador"];
        $data = $_POST["dtData"];

        $sql = "UPDATE agentesprosaude.Morador SET nome_morador = '$nomeMorador', 
                telefone = '$telefoneMorador',     
                data_nascimento = '$data',
                WHERE cpf_morador = '$cpfMorador'";

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
    <title>AgentesPróSaúde - Editar Morador</title>
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

                <h3 style="text-align: center; font-size: 25px;">Editar Morador</h3>

                <?php
                    if(isset($_GET["cpf_morador"])){
                        $cpfMorador = $_GET["cpf_morador"];
                        $sql = "SELECT * from agentesprosaude.Morador WHERE cpf_morador = $cpfMorador";
                        $consulta = $conn->query($sql);
                        $morador = $consulta->fetch_assoc(); 
                    }
                ?>
                
                <form  action="Tela11-EditarMorador.php?cpf_morador=<?php echo $_GET['cpf_morador']?>" method="post">

                    <input type="text" name="txtNomeMorador" value="<?php echo $morador["nome_morador"]?>"> 
                    <br><br>

                    <input type="text" name="txtTelMorador" value="<?php echo $morador["telefone"]?>"> 
                    <br><br>

                    <input  style="color: gray;" type="date" name="dtData" value="<?php echo $morador["data_nascimento"]?>"> 
                    <br><br>
        
                    <input class="botaoMorador" type="submit" value="Confirmar">
                    
                    <a href="Tela10-PesquisarMorador.php">
                        <input class="botaoMorador" type="button" value="Voltar">
                    </a>
                    <br><br>

                </form>

            </article>
        </aside>

    </div>

</body>

</html>