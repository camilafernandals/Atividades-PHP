<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
    <link rel="stylesheet" href="aula12.css"/>
</head>
<body>
<?php
    $user = $_POST["user"];
    $senha = $_POST["senha"];

    if ($user=="maria"&&$senha=="12345"){
         echo "<h1>Autenticação realizada com sucesso!</h1>";
    } 
    else{
        echo "<h1>Você não tem permissão para visualizar essa página.</h1>";

    }
    ?>
</body>
</html>