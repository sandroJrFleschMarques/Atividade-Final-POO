<?php
require('./atividade-final/usuario.php');

$email = $_SESSION['Logado'][0];
$senha = $_SESSION['Logado'][1];
echo "<a href= atividade-final.php>Voltar para Meus Tweets</a><br>";
foreach ($_SESSION['users'] as $value) {

    for ($i=0; $i<sizeof($value[0]->tweets); $i++) {
        print_r($value[0]->nome." diz: <br>");

        echo "<div style='background-color:black; color:white; overflow:auto; width:25vw; height:35vh'>";
        echo "<pre>";
        print_r($value[0]->tweets[$i])."<br>";

        echo "<a href='like.php?id={$value[0]->tweets[$i]->id}&logado={$email}&target=all.php'>Curtir</a>";
        echo "</pre>";
        echo "</div><br>";
    }
}
