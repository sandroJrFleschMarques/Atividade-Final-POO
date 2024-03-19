<?php
require('./atividade-final/usuario.php');

$email = $_SESSION['Logado'][0];
$senha = $_SESSION['Logado'][1];

echo $email . "<br>";

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
    <a href="all.php">Todos os tweets</a><br>
    <a href=login.php>Login</a><br>
    <div class="container">
        <form action="recado-temp.php" method="post">
            <h1>No que você está pensando?</h1>
            <div class="pub">
                <input id="pub" name="content" id="content"><br>
                <button id="pub1" type="submit">Publicar</button>
            </div>
        </form>

</body>

</html>
<?php

echo "<div>";
echo "<h2>Exibindo Tweets de " . $email . "</h2>";
for ($i = 0; $i < count($_SESSION['users'][$email][0]->tweets); $i++) {
    echo "<div class='tweet'>";
    echo "<div class='username'>@{$_SESSION['users'][$email][0]->nome}</div>";
    echo "<p class='content'>{$_SESSION['users'][$email][0]->tweets[$i]->conteudo}</p>";
    echo "<span class='likes'>";
    echo getLikesString($_SESSION['users'][$email][0]->tweets[$i]->likes);
    echo "<a href='like.php?id={$_SESSION['users'][$email][0]->tweets[$i]->id}&logado={$_SESSION['users'][$email][0]->nome}&target=atividade-final.php' style='text-decoration:none' title='Curtir'>👍</a>";
    echo count($_SESSION['users'][$email][0]->tweets[$i]->likes);
    echo "</span>";
    echo "</div><br>";
}
echo "</div>";
echo "</div>";

if (!isset($_SESSION['Logado'][2])) {
    array_push($_SESSION['Logado'], $_SESSION['users'][$email][0]->nome);
}
