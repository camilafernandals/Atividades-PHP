<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando IMC</title>
</head>
<body>
<form action="imc.php" method="post">
        <label for="peso">Seu peso (em kg): </label>
        <input type="text" name="peso"> <br>
        <label for="altura">Sua altura (em m): </label>
        <input type="text" name="altura"> <br>
        <input type="submit" value="Calcular IMC"> <br>
        Resultado: <input type="text" width="5" value="<?php echo (isset($_GET["res"])?$_GET["res"]:"");?>"> <br>
        </form>

</body>
</html>