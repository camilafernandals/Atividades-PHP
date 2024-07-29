<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }
        </style>
</head>
<body>
    <?php
    echo"<h1> Estrutura de repetição FOR</h1>";
    /**
     * For(inicialização; condição; incremento/decremento){
     * BLOCO DE CÓDIGOS
     * }
     */
    for($x = 1; $x <= 10; $x++){
        echo "$x <br>";
    }
    echo"<h1>TABELA EM PHP</h1>";
    echo "<table> <tr>";
    for($x = 1; $x <= 10; $x++){
        echo "<td> $x </td>";
    }
    echo"</tr> </table>";
    ?>


    
</body>
</html>