<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aula10.css"/>
    <title>Tela de Confirmação</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $sexo = $_POST["sexo"];
    $civil = $_POST["civil"];
    $nac = $_POST["nac"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $end = $_POST["end"];
    $log = $_POST["log"];
    $num = $_POST["num"];
    $comp = $_POST["comp"];
    $bairro = $_POST["bairro"];
    $cid = $_POST["cid"];
    $est = $_POST["est"];
    $cep = $_POST["cep"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];

    echo "<p class='titulo'> Confirme seus dados:</p> <br> ";
    echo "<p class='dados'>Nome Completo:" ,$nome,"<br>"; 
    echo "<p class='dados'>Data de Nascimento:",$data,"<br>";
    echo "<p class='dados'>Sexo:",$sexo,"<br>";
    echo "<p class='dados'>Estado Civil:",$civil,"<br>";
    echo "<p class='dados'>Nacionalidade:",$nac,"<br>";
    echo "<p class='dados'>Número do RG:",$rg,"<br>";
    echo "<p class='dados'>CPF:",$cpf,"<br>";
    echo "<p class='dados'>Endereço Completo:",$end,"<br>";
    echo "<p class='dados'>Logradouro:",$log,"<br>";
    echo "<p class='dados'>Número:",$num,"<br>";
    echo "<p class='dados'>Complemento:",$comp,"<br>";
    echo "<p class='dados'>Bairro:",$bairro,"<br>";
    echo "<p class='dados'>Cidade:",$cid,"<br>";
    echo "<p class='dados'>Estado:",$est,"<br>";
    echo "<p class='dados'>CEP:",$cep,"<br>";
    echo "<p class='dados'>Telefone de Contato:",$tel,"<br>";
    echo "<p class='dados'>E-mail:",$email,"<br>";
    ?>
</body>
</html>