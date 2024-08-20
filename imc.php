<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="aula11.css"/>
</head>
<body>
<?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $resultado = $peso / ($altura*$altura);

    if ($resultado < 18.5) {
        echo "<h1>Seu IMC é $resultado. Você está abaixo do peso ideal.</h1>";
    } else if ($resultado >= 18.5 && $resultado < 24.9) {
        echo "<h1>Seu IMC é $resultado. Seu peso está dentro da faixa saudável.</h1>";
    } else if ($resultado >= 25 && $resultado < 29.9) {
        echo "<h1>Seu IMC é $resultado. Você está com sobrepeso.</h1>";
    } else {
        echo "<h1>Seu IMC é $resultado. Você está com obesidade.</h1>";
    }
    ?>
    <img src="https://image.freepik.com/free-vector/lose-weight-design_24877-16798.jpg">
</body>
</html>
