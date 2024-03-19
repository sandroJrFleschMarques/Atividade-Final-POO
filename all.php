<?php
require('./atividade-final/usuario.php');

$email = $_SESSION['Logado'][0];
$senha = $_SESSION['Logado'][1];
$nome = $_SESSION['Logado'][2];
echo "<a href= atividade-final.php>Voltar para Meus Tweets</a><br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    echo "<div class='container'>";
    foreach ($_SESSION['users'] as $value) {
        for ($i = 0; $i < sizeof($value[0]->tweets); $i++) {
            echo "<div class='tweet'>";
            echo "<div class='username'>@{$value[0]->nome}</div>";
            echo "<p class='content'>{$value[0]->tweets[$i]->conteudo}</p>";
            echo "<span class='likes'>";
            echo getLikesString($value[0]->tweets[$i]->likes);
            echo "<a href='like.php?id={$value[0]->tweets[$i]->id}&logado={$nome}&target=all.php' style='text-decoration:none' title='Curtir'>👍</a>";
            echo count($value[0]->tweets[$i]->likes);
            echo "</span>";
            echo "</div>";
        }
    }
    echo "</div>";

    ?>
</body>

</html>