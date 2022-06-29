<?php
    try {
        $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "");
    } catch(PDOException $e){
        //mostra a mensagem se existe erro
        echo "falha ao conectar com o banco" . $e->getMessage();
    }
?>