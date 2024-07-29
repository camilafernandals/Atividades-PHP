<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <style>
        p{
            color:blueviolet;
        }
    </style>
</head>
<body>
    <h1>Aprendendo PHP</h1>

    <?php
        echo "Aqui aparece um texto na tela do usuário";

        //Comentário de linha única
        /*Caso o comentário
        esteja em mais de uma linha*/ 

        echo "<h1>Títulos</h1>";
        echo "<p>Textos são definidos utilizando tags HTML (como p e h1)</p>";

        //A tag print também imprime strings como o echo
        print"<p>Texto com tag print.</p>";

        //Variáveis em PHP
        //Sempre iniciam com $ seguido do nome da variável
        //Não é necessário identificar o tipo do dado
        //Para criar uma variável basta atribuir um valor a ela.
        $nome = "Camila";
        $idade = 17;
        $altura = 1.65;
        echo "$nome tem $altura m e $idade anos de idade.<br>";

        //Aritmética Básica
        echo "<br><h2>Operadores Aritméticos</h2><br>";
        echo "a=10 e b=5<br>";
        $a = 10;
        $b = 5;
        $c = $a + $b;
        echo "<br>A soma de $a e $b é $c<br>";
        $c = $a - $b;
        echo "A subtração de $a e $b é $c<br>";
        $c = $a * $b;
        echo "A multiplicação de $a e $b é $c<br>";
        $c = $a / $b;
        echo "A divisão de $a e $b é $c<br>";
        $c = $a % $b;
        echo "O resto da divisão de $a e $b é $c<br>";
        $c = $a ** $b;
        echo "A potência de $a e $b é $c<br>";
    ?>

</body>
</html>