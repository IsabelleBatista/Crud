<?php
    include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Crud</title>
</head>
<body>
    <div class="container">
    <?php
        try {
            $consulta= $conectar->query("SELECT * FROM login");
        
            echo "<a href='formCadastro.php'>Novo Cadastro</a><br>Listagem de Usuários";
            //cria uma tabela com três colunas
            echo "<table border='1px'><tr><td>Nome</td><td>Login</td><td>Ações</td>";
    
            while($linha=$consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td><a href='formEditar.php?id=$linha[id]'>Editar</a> - <a href='excluir.php?id=$linha[id]'>Excluir</a></td></tr>";
            }
            echo"</table>";

            echo $consulta->rowCount() . " - Registros Exibidos";
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>
    </div>
</body>
</html>