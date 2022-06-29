<?php 
    include_once "conexao.php";

    //traz o id em forma numérica
    $id= filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    //conexão com o sql
    $consulta= $conectar->query("SELECT * FROM login where id = '$id'");
    //traz o resultado que foi encontrado no banco de dados
    $linha= $consulta->fetch(PDO::FETCH_ASSOC);   

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editar.css">
    <title>Editar</title>
</head>
<body>
<div class="container">
    <div class="box">
        <form action="editar.php" method="post">

        <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="name"/><br>

        <label>Login:</label>
            <input type="text" name="login" value="<?php echo $linha['login']?>" id="login"/><br>
        
            <input type="hidden" name="id" value="<?php echo $linha['id']?>">

            <button type="submit" value="editar">Editar</button>
        </form>
    </div>
</div>
</body>
</html>