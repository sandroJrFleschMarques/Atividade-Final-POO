<?php
require('./atividade-final/usuario.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['Logado'] = array();
array_push($_SESSION['Logado'], $email);
array_push($_SESSION['Logado'], $senha);

var_dump($_SESSION['Logado']);

$statusquo = false;

if (!isset($_SESSION['users'][$email])) {
    $statusquo = false;
} else {
    foreach ($_SESSION['users'][$email] as $key => $value) {
        if ($value->email == $email && $value->senha == $senha) {
            $statusquo = true;

            header("Location: atividade-final.php");

            die();
        }
    }
}

if ($statusquo == false) {
    echo "Não encontrado<br>";
    echo "<a href='login.php'>Voltar para Login</a>";
    return;
}
