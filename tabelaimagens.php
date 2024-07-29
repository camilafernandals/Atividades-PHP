<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela com Imagens</title>
    <style>
        body{
            background-color: pink;
        }
        footer{
            color:red;
            font-size: larger;
            text-align: center;
            margin-top: 20px;
        }
        .gallery img {
            width: 300px;
            height: 300px;
            margin: 1px;
        }
        .gallery {
            display:grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1px;
        }
    </style>
    <div class="gallery">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<img src='img/foto$i.jpg' alt='foto$i'>";
        } 
        ?>
    </div>
<footer>CapiVÁRIAS. </footer>
</body>
</html>