<?php
require('./atividade-final/usuario.php');

$email = $_SESSION['Logado'][0];
$senha = $_SESSION['Logado'][1];


echo $email;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="recado-temp.php" method="post">
        <a href="all.php">Todos os tweets</a><br>
        <a href= login.php>Login</a>
        <h2>No que você está pensando?</h2>
        <label for="title">Título da publicação:</label>
        <input type="text" name="title" id="title">
        <label for="content">Conteúdo:</label>
        <input type="text" name="content" id="content">

        <button type="submit">Publicar</button>
    </form>
</body>

</html>
<?php

    echo "<h1>Exibindo Tweets de ". $email."</h1><hr>";
    for ($i = 0; $i < count($_SESSION['users'][$email][0]->tweets); $i++) {
        echo "<div style='background-color:black; color:white; overflow:auto; width:25vw; height:35vh'>";
        echo "<pre>";
        print_r ($_SESSION['users'][$email][0]->tweets[$i])."<br>";
        echo "<form method='POST' action='like.php'>";
        echo "<a href='like.php?id={$_SESSION['users'][$email][0]->tweets[$i]->id}&logado={$email}&target=atividade-final.php'>Curtir</a>";
        echo "</pre>";
        echo "</div><br>";
    }
