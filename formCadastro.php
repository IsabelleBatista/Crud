<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrar.css">
    <title>Cadastro</title>
</head>
<body>
<div class="container">
    <div class="box">
        <form action="cadastrar.php" method="post">
        <label>Nome:</label>
            <input type="text" name="nome" id="name"/><br>
        <label>Login:</label>
            <input type="text" name="login" id="login"/><br><br>
            <button type="submit" value="Cadastrar">Cadastro</button>
        </form>
    </div>
</div>
</body>
</html>