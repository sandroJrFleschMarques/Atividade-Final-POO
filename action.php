<?php
require('./atividade-final/usuario.php');

if (!session_id()) {
    session_start();
}

echo "<br>";
print_r($_SESSION['Logado'][0]);
echo "</br>";
$email = $_SESSION['Logado'][0];

$content = $_SESSION['recado-temp'][0];

array_push($_SESSION['users'][$email][0]->tweets, new Tweet($content));

header("Location: atividade-final.php");

die();
