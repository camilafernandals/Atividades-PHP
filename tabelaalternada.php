<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela com Números Pares Coloridos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 10%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .even {
            background-color: pink; /* Cor de fundo para números pares */
        }
    </style>
    </head>
    <body>
    <?php
// Função para determinar se um número é par
function isEven($number) {
    return $number % 2 == 0;
}

// Defina o número de linhas e colunas da tabela
$rows = 10;
$cols = 1;
?>
<table>
        <tr>
            <?php
            // Cria o cabeçalho da tabela
            for ($c = 1; $c <= $cols; $c++) {
                echo "<th>Coluna números pares</th>";
            }
            ?>
        </tr>
        <?php
        // Preenche a tabela com números
        for ($r = 1; $r <=10; $r++) {
            echo "<tr>";
            for ($c = 1; $c <= $cols; $c++) {
                $number = ($r - 1) * $cols + $c; // Calcula o número para cada célula
                $class = isEven($number) ? 'even' : ''; // Define a classe com base na paridade
                echo "<td class='$class'>$number</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>