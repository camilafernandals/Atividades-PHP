<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
<?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $resultado = $peso / ($altura*$altura);

    if ($resultado < 18.5) {
        echo "Seu IMC é $resultado. Você está abaixo do peso ideal.";
    } else if ($resultado >= 18.5 && $resultado < 24.9) {
        echo "Seu IMC é $resultado. Seu peso está dentro da faixa saudável.";
    } else if ($resultado >= 25 && $resultado < 29.9) {
        echo "Seu IMC é $resultado. Você está com sobrepeso.";
    } else {
        echo "Seu IMC é $resultado. Você está com obesidade.";
    }
    ?>
</body>
</html>