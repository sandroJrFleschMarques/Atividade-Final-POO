<?php
require('./atividade-final/usuario.php');
if (!session_id()) {
    // Verificando se há uma sessão, caso não tenha, será criada uma.
    session_start();
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
if (!isset($_SESSION['users'][$email])) {
    //Verificando se a lista já foi setada/criada (is set)
    var_dump('Criando lista...');
    $_SESSION['users'][$email] = array();
}


$usuario = new Usuario($nome, $email, $senha);
array_push($_SESSION['users'][$email], $usuario);
echo "<h1>Usuário {$email} cadastrado com sucesso</h1>";

echo "<h2><a href='login.php'>Login</a></h2>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

